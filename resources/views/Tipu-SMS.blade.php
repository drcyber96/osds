

@extends('layouts.app')

@section('content')

<style>
.jumbotron {
  background-color: #323232;
  color: #fff;
}

body {
  background-image: url("/images/blog.png");
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}

img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}


</style>

<div class="jumbotron text-center">
<h1>{{__('lang.Tipu SMS Hadiah NESTLE Dari CELCOM')}}</h1>

</div>

<div class="post">
<a href="/Tipu-SMS"><img src={{url('images/sms-tipu.jpeg')}} alt="img" style="width:80%"></a>
</div>



@endsection
