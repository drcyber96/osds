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
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Update Scammers </div>

<div class="card-body">



{!! Form::open(['url' => 'scammer/submit']) !!}

<div class="form-group ">

  {{Form::label('name', 'Name')}}
  {{Form::text('name', '',['class' => 'form-control', 'placeholder' => 'Enter Scammer Name'])}}

</div>
<div class="form-group ">

  {{Form::label('phone', 'Phone Number')}}
  {{Form::number('phone', '',['class' => 'form-control', 'placeholder' => 'Enter Scammer Number'])}}

</div>
 <div class="form-group ">

   {{Form::label('email', 'E-Mail Address')}}

   {{Form::text('email', '',['class' => 'form-control', 'placeholder' => 'Enter Email * Write "NO" if Scammer has no Email'])}}

 </div>

 <div class="form-group ">

   {{Form::label('bank_account', 'Account Number')}}
   {{Form::number('bank_account', '',['class' => 'form-control', 'placeholder' => 'Enter Account Number'])}}

 </div>
 <div class="form-group ">

   {{Form::label('bank_name', 'Name of Bank   :')}}
   {{Form::select('bank_name', ['CIMB' => 'CIMB', 'Maybank' => 'Maybank', 'Bank Islam' => 'Bank Islam', 'Giro' => 'Giro', 'RHB' => 'RHB', 'Public Bank' => 'Public Bank', 'Bank Rakyat' => 'Bank Rakyat',  'Hong Leong' => 'Hong Leong'], null, ['placeholder' => 'Choose Name of Bank...'])}}

 </div>
 <div class="form-group">

   {{Form::label('platform', 'Platform Scam:')}}
   {{Form::select('platform', ['Facebook' => 'Facebook', 'Instagram' => 'Instagram', 'Lazada' => 'Lazada', 'Shopee' => 'Shopee', 'Mudah.my' => 'Mudah.my'], null, ['placeholder' => 'Choose Platform...'])}}

 </div>
  <div class="form-group">

    {{Form::label('product', 'Scam Product    :')}}
    {{Form::select('product', ['Clothing' => 'Clothing', 'Services' => 'Services',  'PC/Laptop' => 'PC/Laptop', 'Mobile&Gadgets' => 'Mobile&Gadgets', 'Jewellery/Gold' => 'Jewellery/Gold',  'Cosmetic/HealthCare' => 'Cosmetic/HealthCare',  'Baby Product/Toys' => 'Baby Product/Toys', 'Motocycle/Car/Accessories' => 'Motocycle/Car/Accessories'], null, ['placeholder' => 'Choose Product...'])}}

  </div>
	<div class="form-group ">

	  {{Form::label('link', 'Link')}}
	  {{Form::text('link', '',['class' => 'form-control', 'placeholder' => 'Enter Link '])}}

	</div>

<div>
  {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

</div>



</div>

{!! Form::close() !!}



@endsection
