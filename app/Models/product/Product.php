<?php

namespace App\Models\product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected static $product;
    protected static $image;
    protected static $imageName;
    protected static $directory;
    protected static $imageUrl;

    public static function saveData($request)
    {
        self::$image = $request->file('product_image');
        self::$imageName = time().rand(10,1000).'.'.self::$image->getClientOriginalExtension();
        self::$directory = 'assets/images/product-image/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;

        self::$product = new Product();
        self::$product->product_name   = $request->product_name;
        self::$product->product_image  = self::$imageUrl;
        self::$product->product_price  = $request->product_price;
        self::$product->gender         = $request->gender;
        self::$product->color          = $request->color;
        self::$product->size           = $request->size;
        self::$product->save();
    }

    public static function updateData($request)
    {
        self::$product = Product::find($request->product_id);
        self::$image = $request->file('product_image');
        if (self::$image)
        {
            if (file_exists(self::$product->product_image))
            {
                unlink(self::$product->product_image);
            }
            self::$imageName = time().rand(10,1000).'.'.self::$image->getClientOriginalExtension();
            self::$directory = 'assets/images/product-image/';
            self::$image->move(self::$directory, self::$imageName);
            self::$imageUrl = self::$directory.self::$imageName;
        } else {
            self::$imageUrl = self::$product->product_image;
        }

        self::$product->product_name   = $request->product_name;
        self::$product->product_image  = self::$imageUrl;
        self::$product->product_price  = $request->product_price;
        self::$product->gender         = $request->gender;
        self::$product->color          = $request->color;
        self::$product->size           = $request->size;
        self::$product->save();
    }
}
