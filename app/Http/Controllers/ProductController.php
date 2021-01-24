<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {   
        $products = Product::all();
        return view('admin.pro.index', compact('products'));
    }

    public function add()
    {   
        // $products = Product::with('category')->get();
        $categories = Category::all();
        return view('admin.pro.add',
                                    [
                                        // 'products' => $products,
                                        'categories' => $categories
                                    ]
                    );
    }
    public function saveAdd(Request $request)
    {
        $model = new Product();
        $model->name = $request->name;
        $model->category_id = $request->category_id;
        $model->image_url = $request->image_url;
        $model->description = $request->description;
        $model->price = $request->price;
        $model->sale_percent = $request->sale_percent;
        $model->save();

        return redirect(route('pro.index'));
    }

    public function remove($id)
    {
        Product::destroy($id);
        return redirect(route('pro.index'));
    }
}
