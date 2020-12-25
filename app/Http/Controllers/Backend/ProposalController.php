<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Proposal;
use Illuminate\Http\Request;

class ProposalController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth:admin');
	}

	public function index()
	{
		$proposals = Proposal::where('status', '!=', 9)->get();
		return view('backend.pages.proposal.index', compact('proposals'));
	}


	public function view($id)
	{
		$proposal = Proposal::where('id', $id)->first();
		return view('backend.pages.proposal.view', compact('proposal'));
	}


	public function accept($id)
	{
		$proposal = Proposal::find($id);
		$project = Project::find($proposal->project_id);
        // dd($project);
		$proposal->status = 1;
		$proposal->save();
		
		$project->user_id = $proposal->user_id;
		$project->designation = $proposal->designation;
		$project->save();

		session()->flash('update_message', 'Updated');
		return redirect()->route('admin.proposal.index');
	}


	public function reject($id)
	{
		Proposal::where('id', $id)->update(['status' => 8]);

		session()->flash('update_message', 'Updated');
		return redirect()->route('admin.proposal.index');
	}

	public function completed($id)
	{
		Proposal::where('id', $id)->update(['status' => 5]);

		session()->flash('update_message', 'Updated');
		return redirect()->route('admin.proposal.index');
	}	

	public function awarded($id)
	{
		Proposal::where('id', $id)->update(['status' => 7]);

		session()->flash('update_message', 'Updated');
		return redirect()->route('admin.proposal.index');
	}


	public function delete($id)
	{
		Proposal::where('id', $id)->update(['status' => 9]);

		session()->flash('delete_message', 'Deleted');
		return redirect()->route('admin.proposal.index');
	}
}
