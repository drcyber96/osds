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
                <div class="card-header">Edit Scammers </div>

<div class="card-body">


<form method="post" action="{{ route('Scammers.update', $scammers->id) }}" enctype="multipart/form-data">
           @csrf
           @method('PATCH')

           <div class="form-group">
           		<label class="col-md-4 text-left">Name</label>
           		<div class="col-md-8">
           			<input type="text" name="name" value="{{ $scammers->name }}" class="form-control input-lg" />
           		</div>
           	</div>
           	<br />
           	<br />
           	<br />
           	<div class="form-group">
           		<label class="col-md-4 text-left">Phone Number</label>
           		<div class="col-md-8">
           			<input type="number" name="phone" value="{{ $scammers->phone }}" class="form-control input-lg" />
           		</div>
           	</div>
           	<br />
           	<br />
           	<br />
            <div class="form-group">
              <label class="col-md-4 text-left"> E-Mail Address</label>
              <div class="col-md-8">
                <input type="text" name="email" value="{{ $scammers->email }}" class="form-control input-lg" />
              </div>
            </div>
            <br />
            <br />
            <br />
            <div class="form-group">
              <label class="col-md-4 text-left">Account Number</label>
              <div class="col-md-8">
	                <input type="number" name="bank_account" value="{{ $scammers->bank_account }}" class="form-control input-lg" />
              </div>
            </div>
            <br />
            <br />
            <br />
            <div class="form-group">
              <label class="col-md-4 text-left">Name of Bank</label>
              <div class="col-md-8">
                <input type="text" name="bank_name" value="{{ $scammers->bank_name }}" class="form-control input-sm"  READONLY/>
                {{Form::select('bank_name', ['CIMB' => 'CIMB', 'Maybank' => 'Maybank', 'Bank Islam' => 'Bank Islam', 'Giro' => 'Giro', 'RHB' => 'RHB', 'Public Bank' => 'Public Bank', 'Bank Rakyat' => 'Bank Rakyat',  'Hong Leong' => 'Hong Leong'], null, ['placeholder' => 'Choose Name of Bank...'])}}
              </div>
            </div>
            <br />
            <br />
            <br />
            <div class="form-group">
              <label class="col-md-4 text-left">Platform Scam </label>
              <div class="col-md-8">
                <input type="text" name="platform" value="{{ $scammers->platform }}" class="form-control input-sm"  READONLY/>
                {{Form::select('platform', ['Facebook' => 'Facebook', 'Instagram' => 'Instagram', 'Lazada' => 'Lazada', 'Shopee' => 'Shopee', 'Mudah.my' => 'Mudah.my'], null, ['placeholder' => 'Choose Platform...'])}}
              </div>
            </div>
            <br />
            <br />
            <br />
            <div class="form-group">
              <label class="col-md-4 text-left">Product Scam</label>
              <div class="col-md-8">
                <input type="text" name="product" value="{{ $scammers->product }}" class="form-control input-sm"  READONLY/>
                {{Form::select('product', ['Clothing' => 'Clothing', 'Services' => 'Services',  'PC/Laptop' => 'PC/Laptop', 'Mobile&Gadgets' => 'Mobile&Gadgets', 'Jewellery/Gold' => 'Jewellery/Gold',  'Cosmetic/HealthCare' => 'Cosmetic/HealthCare',  'Baby Product/Toys' => 'Baby Product/Toys', 'Motocycle/Car/Accessories' => 'Motocycle/Car/Accessories'], null, ['placeholder' => 'Choose Product...'])}}
              </div>
            </div>
						<br />
						<br />
						<br />
						<div class="form-group">
							<label class="col-md-4 text-left">Link</label>
							<div class="col-md-8">
								<input type="text" name="link" value="{{ $scammers->link }}" class="form-control input-lg" />
							</div>
						</div>
           	<br /><br /><br />
           	<div class="form-group text-left">
           		<input type="submit" name="edit" class="btn btn-primary input-lg" value="Update" />
           	</div>





           </form>

</div>



</div>

{!! Form::close() !!}



@endsection
