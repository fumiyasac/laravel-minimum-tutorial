<!-- resouces/views/topics/show.blade.php -->
@extends('layouts.app')
@section('content')
<article>
  <h1>{{ $topic->title }}</h1>
  <hr>
  <section style="padding-bottom: 50px;">
    <img src="{{ $topic->eyecatch->url('large') }}">
    <hr>
    <p class="lead">{{ $topic->body }}</p>
    <hr>
    <p class="lead">{{ $topic->published }}</p>
    <hr>
    <div style="margin-bottom: 75px;">
      <div class="pull-left">
        {!! link_to('/', '一覧へ戻る', ['class' => 'btn btn-info']) !!}
        {!! link_to('topics/edit/' . $topic->id, '編集する', ['class' => 'btn btn-primary']) !!}
      </div>
      <div class="pull-right">
        {!! Form::open(['url' => 'topics/delete']) !!}
          {!! Form::hidden('id', $topic->id, ['class' => 'form-control']) !!}
	        {!! Form::submit('削除する', ['class' => 'btn btn-danger']) !!}	
        {!! Form::close() !!}
      </div>
    </div>
    <hr style="clear:both;" />
  </section>
</article>
@endsection