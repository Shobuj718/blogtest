@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Post Detail</div>

                <div class="card-body">
                    <h2>{{ $post->title ?? '' }}</h2>
                    <p>{{ $post->body ?? '' }}</p>

                    <h3>Display Commnets</h3>

                    @include('post.comment_display', ['comments' => $post->comments, 'post_id' => $post->id])

                    <div class="card-body">
                    <form method="POST" action="{{ route('comment.store') }}">
                        @csrf

                        <div class="form-group row">

                            <div class="col-md-6">
                                <textarea class="form-control" name="body" ></textarea> 
                                <input type="hidden" name="post_id" value="{{$post->id}}">

                            </div>
                        </div>

                        </div>

                        

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Add Comment
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

@endsection