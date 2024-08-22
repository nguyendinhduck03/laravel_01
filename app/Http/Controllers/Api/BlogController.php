<?php

namespace App\Http\Controllers\Api;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\BlogResource;
use App\Http\Requests\Api\BlogRequest;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = $request->input('title');
        if($query) {
            $blogs = Blog::where('title', 'like', `%$query%`)->paginate(2);
        } else {
            $blogs = Blog::paginate(2);
        }

        return BlogResource::collection($blogs);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogRequest $request)
    {
        $datas = $request->all([
            'title',
            'content',
        ]);
        if($request->hasFile('thumbnail')){
            $datas['thumbnail'] = $request->file('thumbnail')->store('uploads/blogs', 'public');
        }
        Blog::create($datas);

        return response()->json([
            'data' => new BlogResource($datas),
            'status' => true,
            'message' => 'data has been added successfully', 
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Blog::findOrFail($id);

        return new BlogResource($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BlogRequest $request, string $id)
    {
        $datas = $request->all([
            'title',
            'content'
        ]);
        $data = Blog::findOrFail($id);
        if($request->hasFile('thumbnail')){
            if($data->thumbnail) {
                Storage::disk('public')->delete($data->thumbnail);
            }
            $datas['thumbnail'] = $request->file('thumbnail')->store('uploads/blogs', 'public');
        }
        $data->update($datas);

        return response()->json([
            'data' => new BlogResource($datas),
            'status' => true,
            'message' => 'successfully',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Blog::findOrFail($id);
        $data->delete();
        if($data->thumbnail){
            Storage::disk('public')->delete($data->thumbnail);
        } 

        return response()->json([
            'status' => true,
            'message' => 'successfully',
        ]);

    }
}
