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
        <div class="col-md-12">
            <h1>Manage Feedback Posts</h1>
            <a href="{{ route('posts.admin-create') }}" class="btn btn-success" style="float: right">Create Feedback Post</a>
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



                        <form action="{{ route('posts.destroy',$post->id) }}" method="POST">

                                            <a class="btn btn-info " href="{{ route('posts.admin-show',$post->id) }}">Show</a>
                                              <a href="/post/destroy/{{ $post->id }}" class="btn btn-warning ">Delete</a>



                                            @method('DELETE')
                                            @csrf


                                        </form>

                    </td>
                </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>
@endsection
