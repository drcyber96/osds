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

      <h2>Manage Scammers</h2>
<a href="/scammers" class="btn btn-success" style="float: right">Create New Scammers</a>
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
        @foreach($scammers as $scammers)
        <tr>
          <td>{{$scammers->name}}</td>
          <td>{{$scammers->phone}}</td>
          <td>{{$scammers->email}}</td>
          <td>{{$scammers->bank_name}}</td>
          <td>{{$scammers->bank_account}}</td>
          <td>{{$scammers->platform}}</td>
          <td>{{$scammers->product}}</td>








          <td>
        				<form action="{{ route('Scammers.destroy', $scammers->id) }}" method="post">
								
        					<a href="{{ route('Scammers.edit', $scammers->id) }}" class="btn btn-primary">Edit</a>
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
