<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\UploadHelper;
use App\Models\Project;

class ProjectController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth:admin');
	}


	public function index()
	{
		$projects = Project::where('status', '!=', 9)->get();

		return view('backend.pages.project.index', compact('projects'));
	}


	public function create()
	{

		return view('backend.pages.project.add');
	}


	public function store(Request $request)
	{
		$request->validate([
			'title' => 'required',
			'end_date' => 'required',
			'code' => 'required',
		]);

		$data = $request->except(['_token', 'file']);
		//$data['status'] = 1;
		$data['file'] = UploadHelper::upload('file', $request->file('file'), time(), 'public/files/projects');
		Project::create($data);

		session()->flash('add_message', 'Project Successfully Saved!');

		return redirect()->route('admin.project.index');
	}



	public function edit($id)
	{
		$project = Project::where('id', $id)->first();

		return view('backend.pages.project.edit', compact('project'));
	}


	public function update(Request $request, $id)
	{
		$request->validate([
			'title' => 'required',
			'end_date' => 'required',
		]);

		$data = $request->except(['_token', 'file']);
		if($request->file){
			if($request->old_file){
				$data['file'] = UploadHelper::update('file', $request->file('file'), time(), 'public/files/projects', $request->old_file);
			}
			else{
				$data['file'] = UploadHelper::upload('file', $request->file('file'), time(), 'public/files/projects');
			}
		}
		Project::where('id', $id)->update($data);

		session()->flash('update_message', 'Project Successfully Update!');

		return redirect()->route('admin.project.index');

	}


	public function delete($id)
	{
		Project::where('id', $id)->update(['status' => 9]);

		session()->flash('delete_message', 'Deleted');
		return redirect()->route('admin.project.index');
	}
}
