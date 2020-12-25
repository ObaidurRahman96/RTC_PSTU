@extends('frontend.layouts.master')

@section('content')


<div class="container text-left" style="margin-top: 30px;background-color: lightgray;">
  

<h3>The list of download materials for reseacher</h3>

<br>



{{--  <li> --}}
 	
    <a style="color:black;font-size:20px"href="{{ asset('public/files/1557307644.docx') }}"download><i class="fa fa-download"></i> Project Proposal Form</a>

 {{-- </li> --}}
<br>
 <a style="color:black;font-size:20px"href="{{ asset('public/files/Format for Research Report 2018-19.docx') }}"download><i class="fa fa-download"></i>Format for Research Report 2018-19</a>
 <br>
 <a style="color:black;font-size:20px"href="{{ asset('public/files/Advance Withdrawn Application Format 2018-2019.docx') }}"download><i class="fa fa-download"></i>Advance Withdrawn Application Format 2018-2019</a>
 <br>
 <a style="color:black;font-size:20px"href="{{ asset('public/files/Bill Voucher 18-19.docx') }}"download><i class="fa fa-download"></i>Bill Voucher 18-19</a>
 <br>
 <a style="color:black;font-size:20px"href="{{ asset('public/files/Honorarium format 2018-19.docx') }}"download><i class="fa fa-download"></i>Honorarium format 2018-19</a>
 <br>
 <a style="color:black;font-size:20px"href="{{ asset('public/files/Monitoring format 2017-2018.docx') }}"download><i class="fa fa-download"></i>Monitoring format 2017-2018</a>
<br>
 <a style="color:black;font-size:20px"href="{{ asset('public/files/Monitoring Format 2018-2019.docx') }}"download><i class="fa fa-download"></i> Monitoring Format 2018-2019</a>
<br>
 <a style="color:black;font-size:20px"href="{{ asset('public/files/Project Evaluation sheet.docx') }}"download><i class="fa fa-download"></i> Project Evaluation sheet</a>

          



 </div>
 <br>


  @endsection
