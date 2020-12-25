<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\UploadHelper;
use App\Models\Technology;

class TechnologyController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth:admin');
    }

    public function index()
    {
    	$technologies = Technology::all();
    	return view('backend.pages.technology.index', compact('technologies'));
    }

    public function create()
    {
    	return view('backend.pages.technology.create');
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
    		'title' => 'required',
    		'description' => 'required'
    	]);

    	$technology = new Technology();
    	$technology->title = $request->title;
    	$technology->description = $request->description;
        $technology->file=UploadHelper::upload('file', $request->file('file'), time(), 'public/files/projects');
    	$technology->save();

    	session()->flash('add_message', 'Added');
    	return redirect()->route('admin.technology.index');
    }

    public function edit($id)
    {
    	$technology = Technology::find($id);
		return view('backend.pages.technology.edit', compact('technology'));
    }

    public function update(Request $request, $id)
    {
    	$this->validate($request, [
    		'title' => 'required',
    		'description' => 'required'
    	]);

    	$technology = Technology::find($id);
    	$technology->title = $request->title;
    	$technology->description = $request->description;
    	$technology->save();

    	session()->flash('add_message', 'Updated');
    	return redirect()->route('admin.technology.index');
    }
}
