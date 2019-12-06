@extends('layouts.app')

@section('content')
<br><br><br>
<style>
body {
	background-image: url("/images/blog.png");
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
                <div class="card-header text-center font-weight-bold">{{__('lang.User-Dashboard')}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{__('lang.Welcome To iSCAM')}} <br>
                    {{__('lang.You are login as')}} <strong>{{__('lang.User')}}</strong>
                </div>
            </div>
        </div>
    </div>
</div>

<br><br><br><br><br><br><br><br><br><br>


@endsection
