<?php


namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\ImageUploadHelper;
use App\Helpers\QueryHelper;
use App\Helpers\StringHelper;
use App\Helpers\NumberHelper;
use App\Models\Checking;

class CheckingController extends Controller
{

    /**
     * Site Access
    **/
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        //$rows = Checking::orderBy('status', 'desc')->orderBy('id', 'desc')->get();
        return view('backend.pages.checking.index'/*, compact('rows')*/);
    }

    public function add()
    {
        return view('backend.pages.checking.add');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            '' => '',
        ]);
        $data = $request->except(['_token']);
        QueryHelper::simpleInsert('Checking', $data);
        session()->flash('add_message', 'Added');
        return redirect()->route('admin.checking.index');
    }

    public function view($id)
    {
        //$row = Checking::where('id', $id)->first();
        return view('backend.pages.checking.view'/*, compact('row')*/);
    }

    public function edit($id)
    {
        //$row = Checking::where('id', $id)->first();
        return view('backend.pages.checking.edit'/*, compact('row')*/);
    }

    public function update(Request $request, $id)
    {
        $checking = Checking::where('id', $id)->first();
        $this->validate($request, [
            '' => '',
        ]);
        $data = $request->except(['_token']);
        $checking->update($data);
        session()->flash('update_message', 'Added');
        return redirect()->route('admin.checking.index');
    }

    public function delete($id)
    {
        $checking = Checking::where('id', $id)->first();
        $data['status'] = 0;         $checking->update($data);
        session()->flash('deactive_message', 'Deactived');
        return redirect()->route('admin.checking.index');
    }
}
