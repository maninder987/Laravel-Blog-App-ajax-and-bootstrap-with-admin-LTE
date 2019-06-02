@extends('layouts.frontend')
@section('content')
@if($posts)

<?php $counter=1; ?>
	 @foreach($posts as $post)

<div class="class='row'">
		<img src="{{ $post['picture'] }}" width='100%' height='500'>
		<br><hr>
		<h3>{{ $post['title'] }}</h3>
		<p><?php echo strip_tags($post['content']); ?></p>
		<br>
</div>
	 @endforeach
@endif
{{ $posts->links() }}

@endsection
