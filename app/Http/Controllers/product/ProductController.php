<?php

namespace App\Http\Controllers\product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product\Product;

class ProductController extends Controller
{
    public function addProduct()
    {
        return view('admin.product.add');
    }

    public function newProduct(Request $request)
    {
        Product::saveData($request);
        return redirect()->back()->with('message', 'Product Added Successfully');
    }

    public function manageProduct()
    {
        return view('admin.product.manage', [
            'products' => Product::all(),
        ]);
    }

    public function deleteProduct($id)
    {
        $this->product = Product::find($id);
        if(file_exists($this->product->product_image))
        {
            unlink($this->product->product_image);
        }
        $this->product->delete();
        return redirect()->back()->with('message', 'Product Deleted Successfully');
    }

    public function editProduct($id)
    {
        return view('admin.product.edit', [
            'product' => Product::find($id),
        ]);
    }

    public function updateProduct(Request $request)
    {
        Product::updateData($request);
        return redirect('manage-product')->with('message', 'Product Updated successfully');
    }
}
