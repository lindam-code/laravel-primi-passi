@extends('layouts.base')
@section('content')
  <main>
    <div class="main_wrapper">
      @foreach ($privacy_policy as $term)
        <h2>{{$term['title']}}</h2>
        <p>{{$term['body']}}</p>
      @endforeach
    </div>
  </main>

@endsection
