<?php

namespace App\Http\Controllers\Frontend;

use App\Helpers\UploadHelper;
use App\Http\Controllers\Controller;
use App\Models\Proposal;
use App\Models\Project;
use App\Models\Technology;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth', ['except' => ['notice', 'completedProjects', 'technologies', 'submittedProjects']]);
  }
  

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      return view('home');
  }


  public function user_proposal()
  {
    $proposals = Proposal::where('user_id', Auth::id())->where('status', '!=', 9)->get();
    return view('frontend.pages.proposal.index', compact('proposals'));
  }  

  public function user_completed()
  {
    $proposals = Proposal::where('user_id', Auth::id())->where('status', 5)->get();
    return view('frontend.pages.proposal.index', compact('proposals'));
  }  

  public function user_awarded()
  {
    $proposals = Proposal::where('user_id', Auth::id())->where('status', 7)->get();
    return view('frontend.pages.proposal.index', compact('proposals'));
  }


  public function proposal_form()
  {
    return view('frontend.pages.proposal.new');
  }


  public function submit_proposal(Request $request)
  {
    $data = $request->except(['_token', 'file']);
    $data['user_id'] = Auth::id();
    $proposal = Proposal::where('user_id', Auth::id())->where('project_id', $request->project_id)->where('status', 0)->first();

    if($proposal){
      if($request->file){
        if($proposal->file){
          $data['file'] = UploadHelper::update('file', $request->file('file'), time(), 'public/files/proposals', $proposal->file);
        }
        else{
          $data['file'] = UploadHelper::upload('file', $request->file('file'), time(), 'public/files/proposals');
        }
      }
      $proposal->update($data);
    }
    else{
      Proposal::create($data);
    }

    session()->flash('proposal', 'Proposal Submitted');
    return redirect()->route('user_proposal');
  }

  public  function notice()
  {
    $projects = Project::where('end_date', '>=', date('Y-m-d'))->where('status', '!=','9')->get();
    return view('frontend.pages.notice', compact('projects'));
  }


  public function completedProjects()
  {
    $projects = Project::where('end_date', '<', date('Y-m-d'))->where('status', '!=','9')->get();
    return view('frontend.pages.notice', compact('projects'));
  }

  public function technologies()
  {
    $technologies = Technology::all();
    return view('frontend.pages.technologies', compact('technologies'));
  }

  // public function submittedProjects()
  // {
  //   $proposals = Proposal::with(['project'])->get();
  // }
}
