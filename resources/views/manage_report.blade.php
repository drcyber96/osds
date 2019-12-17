@extends('layouts.adminapp')

@section('content')
<style>
body {
	background-color: #333;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}

</style>
<div class="container">

      <h2>Manage Report</h2>

    <table class="table table-stripped table-bordered">
      <thead >
        <tr>

          <th scope="col">Scammer Name</th>
          <th scope="col">Phone</th>
          <th scope="col">Email</th>
          <th scope="col">Bank Name</th>
          <th scope="col">Bank Account</th>
          <th scope="col">Platform</th>
          <th scope="col">Product</th>

          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($reportscam as $reportscam)
        <tr>
          <td>{{$reportscam->name}}</td>
          <td>{{$reportscam->phone}}</td>
          <td>{{$reportscam->email}}</td>
          <td>{{$reportscam->bank_name}}</td>
          <td>{{$reportscam->bank_account}}</td>
          <td>{{$reportscam->platform}}</td>
          <td>{{$reportscam->product}}</td>



          <td>
        				<form action="{{ route('reportscam.destroy', $reportscam->id) }}" method="post">
        					<a target="_blank" href="{{ route('reportscam.show',$reportscam->id) }}" class="btn btn-primary">Show</a>
        					@csrf
        					@method('DELETE')
        					<button type="submit" class="btn btn-danger">Delete</button>
        				</form>
        			</td>



        </tr>
        @endforeach
      </tbody>
    </table>
  </div>








@endsection
