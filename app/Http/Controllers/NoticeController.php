<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticeController extends Controller
{
    

public  function vission()
{
  return view('frontend.pages.Vission and Mission');
}
public  function present()
{
  return view('frontend.pages.Present');
}
public  function award()
{
  return view('frontend.pages.Award');
}
public  function approval()
{
  return view('frontend.pages.Research Project Approval');
}



public  function resourc()
{
  return view('frontend.pages.Resource');
}
public  function monitor()
{
  return view('frontend.pages.monitor');
}

public  function us()
{
  return view('frontend.pages.Contact Us');
}
public  function employee()
{
  return view('frontend.pages.Employees');
}





public  function ga()
{
  return view('frontend.pages.Galler');
}

public  function gal()
{
  return view('frontend.pages.Gallery');
}

public  function rac()
{
  return view('frontend.pages.RAC');
}
public  function ma()
{
  return view('frontend.pages.Management');
}

public  function don()
{
  return view('frontend.pages.Donors');
}
public  function download()
{
  return view('frontend.pages.Down');
}


    }
