
@extends('layouts.app')

@section('content')
<style>
.jumbotron {
  background-color: #0000003b;
  color: #fff;
}

body {
  background-color: #333;
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
       <h1 class="text-center text-white font-weight-bold">{{__('lang.iScam-Online Scammer Database System')}}</h1>
       <p class="text-center text-align text-white  ">{{__('lang.iScam is a median to find information related to online scammers who are actively involved fraud in selling and buying products in the sosical media and Ecommerce market.')}}</p>

     </div>
   </div>
 </div>


 <div class="container">
   <div class="row">
     <div class="col-lg-8 col-md-10 mx-auto">
       <h1 class="text-white text-center font-weight-bold">{{__('lang.Contact Us')}}</h1>
       <p class="text-center text-align text-white ">{{__('lang.If there are any problem and question, you can get in touch with us at:-')}}</p>
        <p class="text-center text-align text-white font-weight-bold">iscam.osds@gmail.com</p>
          <p class="text-center btn-link text-align  "> <a href="mailto:iscam.osds@gmail.com?Subject=Hello%20iSCAM" target="_top">Click here to send us an email!!!</a></p>


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
