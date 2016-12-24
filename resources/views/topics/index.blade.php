<!-- resouces/views/topics/index.blade.php -->
@extends('layouts.app')
  @section('content')
  <h1>クリスマスに食べたい・作りたい料理のリスト</h1>
  <hr>

  @if(Session::has('flash_message'))
    <div class="alert alert-success">
      {{ Session::get('flash_message') }}
    </div>
    <hr>
  @endif

  @foreach($topics as $topic)
    <article>
      <table class="table table-bordered">
        <tr class="info">
          <th colspan="3"><span>[ID:{{ $topic->id }}]</span> <a href="{{ url('topics/show', $topic->id) }}">{{ $topic->title }}</a></th>
        </tr>
        <tr>
          <td width="100"><b>サムネイル画像</b></td>
          <td><b>本文</b></td>
          <td width="100"><b>日付</b></td>
        </tr>
        <tr>
          <td width="100"><img src="{{ $topic->eyecatch->url('thumb') }}"></td>
          <td><div class="body">{{ str_limit($topic->body, 300, $end = '... [If you show more, please click title.]') }}</div></td>
          <td width="100">{{ $topic->published }}</td>
        </tr>
      </table>
    </article>
    <hr>
  @endforeach

  {!! link_to('topics/add', '新規作成', ['class' => 'btn btn-primary']) !!}
@endsection
