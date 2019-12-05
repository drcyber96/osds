
@extends('layouts.app')

@section('content')
<style>
.jumbotron {
  background-color: #2a3e5f;
  color: #fff;
}

body {
  background-image: url("/images/about.jpg");
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}

</style>



<div class="jumbotron text-center">
<h1><b>{{__('lang.About Us')}}</b></h1>
<p><strong>{{__('lang.This is what we do.')}}</strong></p>
</div>
 <hr>

<!-- Main Content -->
 <div class="container">
   <div class="row">
     <div class="col-lg-8 col-md-10 mx-auto">
       <h1 class="text-center text-black font-weight-bold">{{__('lang.iScam-Online Scammer Database System')}}</h1>
       <p class="text-center text-align text-white font-weight-bold">{{__('lang.iScam is a median to find information related to online scammers who are actively involved fraud in selling and buying products in the sosical media and Ecommerce market.')}}</p>

     </div>
   </div>
 </div>


 <div class="container">
   <div class="row">
     <div class="col-lg-8 col-md-10 mx-auto">
       <h1 class="text-black text-center font-weight-bold">{{__('lang.Contact Us')}}</h1>
       <p class="text-center text-align text-white font-weight-bold">{{__('lang.If there are any problem and question, you can get in touch with us at:-')}}</p>
        <p class="text-center text-align text-white font-weight-bold">iscam.osds@gmail.com</p>
     </div>
   </div>
 </div>

 <hr>





        </div>
      </div>

    </div>
  </div>
</section>
@endsection
