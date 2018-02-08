<?php

namespace App\Http\Controllers;

use App\Category;
use App\Hero;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function all_categories()
    {
        $categories=Category::all();
        
        return view('categories.allcategories',compact('categories'));
    }

    public function add_category(Request $request)
    {

        
        return view('categories.addcategory');
    }

    public function store_category(Request $request)
    {
        

        $this->validate($request,[
            'name'=>'required'
        ]);
        //Category::create($request);
        $category=new Category;
        $category->name=$request->name;
        $category->save();
        return redirect('/categories');
    }

    public function find_category(Request $request)
    {
        $category=Category::find($request->id);
        return view('categories.updatecategory',compact('category'));

    }

    public function update_category(Request $request)
    {

        $this->validate($request,[
            'name'=>'required'
        ]);
        
        $category=Category::find($request->id);
        $category->name=$request->name;
        $category->save();
        return redirect('/categories');
    }


    public function delete_category(Request $request)
    {
        //Hero::where('categoryId', $request->id)->delete();
        Category::where('id',$request->id)->delete();   
        return redirect('/categories');
    }
}
