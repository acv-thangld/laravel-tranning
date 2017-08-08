@extends('layouts.master')
@section('head.title')
Thêm bài viết mới
@stop
@section('body.content')

<div class="contain">
	
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
		@if (count($errors)>0)
		<div class="alert alert-danger">
			<strong>Whoops!</strong> there were some problems with your input.<br><br>
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif
		
			{!!Form::open([

				'route' 	=> ['article.store'],
				'method'  	=> 'POST',
				'class'		=> 'form-horizontal'

			])!!}

			@include('articles._form',['button_name'=>'create'])
			{!! Form::close() !!}
		</div>
	</div>

</div>
@stop