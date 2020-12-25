<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\ImageUploadHelper;
use App\Helpers\QueryHelper;
use App\Helpers\StringHelper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function index()
    {
        //Get All Categories
        $categories = Category::all();

        return view('backend.pages.category.index', compact('categories'));
    }


    public function create()
    {

        return view('backend.pages.category.add');
    }


    public function store(Request $request)
    {
        //Validation Check 
        $request->validate([
            'title' => 'required|unique:categories',
        ]);

        // This Data array Using For all Request Set in DB insert   
        $data = array(
            'title' => $request->title,
            'slug' => StringHelper::createSlug($request->title, 'Category', 'slug'),
            'status' => $request->status
        );

        // Here simple Insert method Using For allrequest insert Data base  
        QueryHelper::simpleInsert('Category', $data);

        session()->flash('add_message', 'Category Successfully Saved!');

        return redirect()->route('admin.category.index');
    }



    public function edit($slug)
    {
        $categories = Category::where('slug', $slug)->first();

        return view('backend.pages.category.edit', compact('categories'));
    }


    public function update(Request $request, $slug)
    {

        //Validation Check 
        $request->validate([
            'title' => 'required|unique:categories,title,' . $request->id
        ]);

        $category = Category::find($request->id);
        $category->title = $request->title;
        $category->status = $request->status;
        $category->save();

        session()->flash('update_message', 'Category Successfully Update!');

        return redirect()->route('admin.category.index');

    }


    public function delete($slug)
    {
        Category::where('slug', $slug)->update(['status' => 0]);

        session()->flash('delete_message', 'Deleted');
        return redirect()->route('admin.category.index');
    }
}
