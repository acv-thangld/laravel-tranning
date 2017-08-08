<div class="form-group">
	{!! Form::label('title','Tiêu đề bài viết', ['class'=>'control-label']) !!}
	{!! Form::text('title',null,['id'=>'title','class'=>'form-control','placeholder'=>'Điền tiêu đề']) !!}
</div>
				<div class="form-group">
	{!! Form::label('content','Tiêu đề bài viết', ['class'=>'control-label']) !!}
	{!! Form::text('content',null,['id'=>'content','class'=>'form-control','placeholder'=>'Điền nội dung']) !!}
</div>
<div class="form-group">
	{!! Form::submit($button_name,['class'=>'btn btn-primary']) !!}
</div>