<?php
namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\QueryHelper;
use App\Helpers\ImageUploadHelper;
use App\Models\Setting;


class SettingController extends Controller
{
	
    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function index()
    {
        // return "I'm On!";
        $setting = Setting::first();
        return view('backend.pages.setting.index', compact('setting'));
    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'address' => 'required',
            'title_bn' => 'required',
            'title_en' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'youtube' => 'required',
            'linkedin' => 'required',
        ]);

        $setting = Setting::first();

        $data = $request->except(['_token', 'logo', 'favicon']); // this fields are not received to $data array

        if($request->logo){
            $setting->logo = 'public/images/settings/'.ImageUploadHelper::update('logo', $request->file('logo'), 'logo-'.time(), 'public/images/settings', $setting->logo, 800, 400);
        }
        else{
            $setting->logo = $setting->logo;
        }

        if($request->favicon){
            $setting->favicon = 'public/images/settings/'.ImageUploadHelper::update('favicon', $request->file('favicon'), 'favicon-'.time(), 'public/images/settings', $setting->favicon);
        }
        else{
            $setting->favicon = $setting->favicon;
        }

        $data['favicon'] = $setting->favicon;
        $data['logo'] = $setting->logo;

        //$data['address'] = nl2br($request->address);
        $setting->update($data);

        session()->flash('update_message','Updated');
        return redirect()->route('admin.setting.index');
    }

}
