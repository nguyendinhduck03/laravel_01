<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    protected $category;
    public function __construct(Category $category) {
        $this->category = $category;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = $this->category->get();
        return view('admins.categories.list', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admins.categories.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        $data = $request->all([
            'name',
            'description',
        ]);
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('uploads/categories', 'public');
        }
        $this->category->create($data);

        return redirect()->route('categories.index')->with('success', __('Create new category success!'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = $this->category->findOrFail($id);
        return view('admins.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, string $id)
    {
        $category = $this->category->findOrFail($id);
        $data = $request->all([
            'name',
            'description',
        ]);

        if ($request->hasFile('image')) {
            if ($category->image) {
                Storage::disk('public')->delete($category->image);
            }

            $data['image'] = $request->file('image')->store('uploads/categoreis', 'public');
        }
        $category->update($data);

        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = $this->category->findOrFail($id);
        $category->delete();
        return redirect()->route('categories.index');
    }
}
