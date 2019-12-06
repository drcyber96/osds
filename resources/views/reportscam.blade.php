@extends('layouts.app')

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
                <div class="card-header text-center font-weight-bold">{{__('lang.Scammers Profile')}} </div>

<div class="card-body">

<form action="{{route('addreport')}}" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}


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
    {{Form::select('product', ['Clothing' => 'Clothing',  'Cosmetic' => 'Cosmetic',  'Baby&Toys' => 'Baby&Toys', 'Services' => 'Services', 'PC/Laptop' => 'PC/Laptop', 'Mobile&Gadgets' => 'Mobile&Gadgets', 'Jewellery/Gold' => 'Jewellery/Gold', 'Motocycle/Car/Accessories' => 'Motocycle/Car/Accessories'], null, ['placeholder' => 'Choose Product...'])}}

  </div>

  <div class="form-group">
      {!! Form::label('Proven Image: ') !!}
      *Example- Conversation with Scammer,Report Police and etc.
      {!! Form::file('image', null) !!}

  </div>


  {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}


</form>


</div>





@endsection
