<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\SaveCategoryRequest;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('admin.cate.index', compact('categories'));
    }

    public function add()
    {
        return view('admin.cate.add');
    }
    public function saveAdd(SaveCategoryRequest $request)
    {
        $model = new Category();
        $model->name = $request->name;
        $model->detail = $request->detail;
        $model->save();

        return redirect(route('cate.index'));
    }

    public function edit($id)
    {
        $model = Category::find($id);
        if(!$model) return redirect(route('cate.index'));

        return view('admin.cate.edit', compact('model'));
    }
    public function saveEdit($id,SaveCategoryRequest $request)
    {
        $model = Category::find($id);
        $model->name = $request->name;
        $model->detail = $request->detail;
        $model->save();

        return redirect(route('cate.index'));
    }



    public function remove($id)
    {
        Category::destroy($id);
        return redirect(route('cate.index'));
    }
}
