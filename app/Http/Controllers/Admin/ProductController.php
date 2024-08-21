<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use App\Models\ImageProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use Storage;

class ProductController extends Controller
{
    protected $product;
    protected $category;
    protected $image_product;
    public function __construct(Product $product, Category $category, ImageProduct $image_product){
        $this->product = $product;
        $this->category = $category;
        $this->image_product = $image_product;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = $this->product->with('category')->with('imageproduct')->get();
        return view('admins.products.list', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = $this->category->pluck('name', 'id');
        return view('admins.products.add', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
       
        $data = $request->all([
            'name',
            'quantity',
            'price',
            'day_add',
            'description',
            'category_id',
        ]);

        // Thêm sản phẩm trước
        $product = $this->product->create($data);
        // Thêm ảnh sau
        $images = $request->file('images');  
        if($request->hasFile('images')){
            foreach ($images as $image) {
                $fillname = $image->store('uploads/products', 'public');
                $this->image_product->create([
                    'link' => $fillname,
                    'product_id' => $product->id,
                ]);
            }
        } else {
            $fillname = null;
            $this->image_product->create([
                'link' => $fillname,
                'product_id' => $product->id,
            ]);
        }

        return redirect()->route('products.index');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = $this->category->pluck('name', 'id');
        $product = $this->product->with('imageproduct')->find($id);
        if (!$product) {
            return redirect()->route('products.index')->with('error', 'Product not found.');
        }
        return view('admins.products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, string $id)
{
    $data = $request->only([
        "name",
        "quantity",
        "price",
        "day_add",
        "description",
        "category_id",
    ]);

    $this->product->where('id', $id)->update($data);

    if ($request->hasFile('images')) {
        $image_products = $this->image_product->where('product_id', $id)->get();

        if ($image_products->isNotEmpty()) {
            foreach ($image_products as $image) {
                if ($image->link) {
                    Storage::disk('public')->delete($image->link);
                }
            }
            $this->image_product->where('product_id', $id)->delete();
        }

        // Thêm ảnh mới
        $images = $request->file('images');
        foreach ($images as $image) {
            $filename = $image->store('uploads/products', 'public');
            $this->image_product->create([
                'link' => $filename,
                'product_id' => $id,
            ]);
        }
    }

    return redirect()->route('products.index')->with('success', 'Product updated successfully');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = $this->product->findOrFail($id);
        $product->status = false;
        $product->save();
        $product->delete();
        return redirect()->route('products.index');
    }

    public function trash() {
        $product_trashs = $this->product->with('category')->with('imageproduct')->onlyTrashed()->get();
        return view('admins.products.trash', compact('product_trashs'));
    }

    public function restore($id) {
        $product = $this->product->onlyTrashed()->findOrFail($id);
        $product->status = true;
        $product->save();
        $product->restore();
        return redirect()->route('products.index');
    }

    public function forceDelete($id) {
        $this->product->onlyTrashed()->findOrFail($id)->forceDelete();
        return redirect()->route('products.trash');
    }
}
