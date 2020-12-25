@extends('frontend.layouts.master')

@section('content')


<div class="container text-left">
{{-- <pre>

  Research Advisory Committee (RAC) of PSTURTC
  The Research Advisory Committee (RAC) consistent of the following

  1.	Vice-Chancellor,PSTU		                                         Chairman
  2.	One representative from each Faculty (nominated by the Faculty)		Member
  3.	Coordinator, Committee for Advanced Studies and Research, PSTU		Member
  4.	Two Professors (nominated by the Syndicate)		                    Member
  5.	One member other than Professor (nominated by the Academic Council)		Member
  6.	One representative from BARC (not below the rank of Member-Director)		Member
  7.	Director, PSTURTC, PSTU	                                             Member-Secretary

</pre>
 --}}
 <br>
<h3>Research Advisory Committee (RAC) of PSTURTC</h3>
<p>The Research Advisory Committee (RAC) consistent of the following</p>
<br>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">1</th>
      <th scope="col">Vice-Chancellor, PSTU</th>
      {{-- <th scope="col">Last</th> --}}
      <th scope="col">Chairman</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">2</th>
      <td>One representative from each Faculty (nominated by the Faculty) </td>
      {{-- <td>Otto</td> --}}
      <td>Member</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Coordinator, Committee for Advanced Studies and Research, PSTU</td>
      {{-- <td>Thornton</td> --}}
      <td>PSTU Member</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Two Professors (nominated by the Syndicate)</td>
      {{-- <td>the Bird</td> --}}
      <td>Member</td>
    </tr>
     <tr>
      <th scope="row">5</th>
      <td>One member other than Professor (nominated by the Academic Council)</td>
      {{-- <td>the Bird</td> --}}
      <td>Member</td>
    </tr>
     <tr>
      <th scope="row">6</th>
      <td>One representative from BARC (not below the rank of Member-Director)</td>
      {{-- <td>the Bird</td> --}}
      <td>Member</td>
    </tr>
     <tr>
      <th scope="row">7</th>
      <td>Director, PSTURTC, PSTU</td>
      {{-- <td>the Bird</td> --}}
      <td>Member</td>
    
  </tbody>
</table>


  </div>


  @endsection