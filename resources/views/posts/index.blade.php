@extends('layouts.app')

@section('content')
<br>
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
        <div class="col-md-12 text-white">
            <h1>Manage Feedback Posts</h1>
            <a href="{{ route('posts.create') }}" class="btn btn-success" style="float: right">Create Feedback Post</a>
            <table class="table table-bordered">
                <thead>

                    <th>Title</th>
                    <th width="250px">Action</th>
                </thead>
                <tbody>
                @foreach($posts as $post)
                <tr>

                    <td>{{ $post->title }}</td>
                    <td>





                                            <a class="btn btn-info " href="{{ route('posts.show',$post->id) }}">Show</a>





                    </td>
                </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>
<br><br><br><br><br><br><br><br><br>
@endsection
