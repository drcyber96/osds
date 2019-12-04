

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
<h1>{{__('lang.Penipuan Menggunakan Wang Palsu')}}</h1>

</div>

<div class="post">
<a href="/Wang-Palsu"><img src={{url('images/fake-money.jpeg')}} alt="img" style="width:80%"></a>
</div>



@endsection
