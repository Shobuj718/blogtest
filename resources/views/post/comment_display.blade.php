@foreach( $comments as $comment)

	<div  @if($comment->parent_id != null) @endif>
		<strong>{{ $comment->user->name }} </strong>
		<p>{{ $comment->body }}</p>
		<a href="#">Reply</a>

		<form action="">
			
		</form>
	</div>
@endforeach