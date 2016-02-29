
	@extends('template')

	@section('title')
	 Posts do blog

	@stop

	@section('content')

    <h1> Posts </h1>


	<table style="width: 100%">
            	<tr>
                    <td>User</td>
                    <td>Post</td>
                    <td>Data</td>
                </tr>
		@foreach($posts as $key => $post)
		<tr>
                    <td>{{ $post[0] }} </td>
                    <td><a href="posts/{{ $key }}">{{ $post[1] }}</a></td>
                    <td>{{ $post[2] }}</td>
                </tr>
		@endforeach
	</table>

	@stop
