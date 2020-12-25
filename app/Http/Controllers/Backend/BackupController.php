<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\ImageUploadHelper;
use App\Http\Controllers\Controller;
use Artisan;
use Illuminate\Http\Request;

class BackupController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth:admin');
	}


	public function index()
	{
    	// directory we want to scan
		$dircontents = scandir(base_path('database\\backup-db'));
		rsort($dircontents);
		//dd(date('H:i:s'));
		return view('backend.pages.backup.index', compact('dircontents'));
	}


	public function newBackup()
	{
		Artisan::call('backup:run --only-db');

		session()->flash('add_message', 'Succesfully Saved');
		return redirect()->route('admin.backup.index');
	}


	public function restoreBackup(Request $request)
	{
		dd($request);
		DB::unprepared(file_get_contents('full/path/to/dump.sql'));

		session()->flash('restore_message', 'Succesfully Restored');
		return redirect()->route('admin.backup.index');
	}


	public function deleteBakup($file)
	{
		ImageUploadHelper::delete('database/backup-db/'.$file);

		session()->flash('delete_message', 'Succesfully Deleted');
		return redirect()->route('admin.backup.index');
	}
}
