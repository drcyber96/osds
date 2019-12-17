@extends('layouts.apps')

@section('content')
<style>


body {
  background-color: #333;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}

table, th, td {
  border: 3px solid black;
  border-collapse: collapse;
  background-color: #aac12b7d;
}
th, td {
  padding: 5px;
  text-align: left;
  font-weight: bold;
  color:black;
}
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}


</style>



                     <hr>
                    <h3 class=" text-center text-white  "><strong>Report Detail</strong></h3>
                     <hr>

									<table style="border:5px solid black; margin-left:auto; margin-right:auto; width:50%;">


										  <tr>
										    <td>Scammer Name</td>
										    <td>{{$reportscam-> name}}</td>
										  </tr>
                      <tr>
										    <td>Phone</td>
										    <td>{{$reportscam-> phone}}</td>
										  </tr>
											<tr>
										    <td>Email</td>
										    <td>{{$reportscam-> email}}</td>
										  </tr>
											<tr>
										    <td>Bank Name</td>
										    <td>{{$reportscam-> bank_name}}</td>
										  </tr>
											<tr>
										    <td>Bank Account</td>
										    <td>{{$reportscam-> bank_account}}</td>
										  </tr>
											<tr>
										    <td>Platform</td>
										    <td>{{$reportscam-> platform}}</td>
										  </tr>
											<tr>
										    <td>Product</td>
										    <td>{{$reportscam-> product}}</td>
										  </tr>

                      </table>



              <h5 class="text-center text-white"> <strong> Proven Image :-</strong>  </h5>
									<img src="{{  asset('uploads/reportscam/' . $reportscam->image)  }}"  width="30%" alt="image" >

									<br>








@endsection
