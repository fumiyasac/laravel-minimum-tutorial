<!-- resouces/views/topics/edit.blade.php -->
@extends('layouts.app')
@section('content')
  <h1>"{{ $topic->title }}"の内容を編集</h1>
  <hr>

  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  {!! Form::open(['url' => 'topics/update/' . $topic->id , 'files' => true]) !!}
    <div class="form-group">
      {!! Form::label('title', 'Title:') !!}
      {!! Form::text('title', $topic->title, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('body', 'Body:') !!}
      {!! Form::textarea('body', $topic->body, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('eyecatch', 'Eyecatch:') !!}
      {!! Form::file('eyecatch', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('published', 'Publish On:') !!}
      {!! Form::input('date', 'published', date('Y-m-d'), ['class' => 'form-control']) !!}
    </div>    
    <div class="form-group">
      {!! Form::submit('Update Topic', ['class' => 'btn btn-primary form-control']) !!}
    </div>
  {!! Form::close() !!}
@endsection