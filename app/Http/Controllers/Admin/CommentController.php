<?php

namespace App\Http\Controllers\Admin;

use App\Models\Comment;
use App\Models\Product;
use App\Models\ImageProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    protected $comment;
    protected $product;
    protected $imagePoduct;
    public function __construct(Product $product, Comment $comment, ImageProduct $imagePoduct) {
        $this->comment = $comment;
        $this->product = $product;
        $this->imagePoduct = $imagePoduct;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = $this->product->withCount('comment')->with("imageproduct")->get();
        return view('admins.comments.list', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = $this->product->findOrFail($id);
        $comments = $this->comment->where('product_id', $id)->with('user')->get();
        
        return view('admins.comments.detail', compact('comments', 'product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $comment = $this->comment->findOrFail($id);
        $comment->status = !$comment->status;
        $comment->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comment = $this->comment->findOrFail($id);
        $comment->delete();
        return redirect()->back();
    }
}
