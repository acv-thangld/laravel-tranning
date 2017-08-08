@extends('layouts.master')
@section('head.title')
	Tieu de cua bai viet 
@stop
@section('body.content')
	<div class="contain">
	
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<a href="{{ url('/') }}" class="btn btn-link">Back Home</a>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<h2>{{ $articles->title }}</h2>
				<p>{{ $articles->content }}</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<a href="{{ route('article.edit',$articles->id) }}" class="btn btn-info">Cap nhat</a>
				{!! Form::open ([
					'route' 	=> ['article.delete',$articles->id],
					'method' 	=> 'DELETE',
					'style'		=> 'display:inline'
					])
				!!}
					<button class="btn btn-danger">
							Xoa
					</button>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@stop