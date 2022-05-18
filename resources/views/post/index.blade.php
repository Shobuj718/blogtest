@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Post List</div>

                <table>
                	<thead>
                		<th>Id</th>
                		<th>Title</th>
                		<th>Action</th>
                	</thead>

                	@foreach($posts as $post)
                		<tr>
                			<td>{{ $post->id ?? '' }}</td>
                			<td>{{ $post->title ?? '' }}</td>
                			<td>
                				<a  href="{{ route('post.show', $post->id) }}">show</a>
                				<a href="#">Delete</a>
                			</td>
                		</tr>
                	@endforeach
                </table>
                
            </div>
        </div>
    </div>
</div>

@endsection