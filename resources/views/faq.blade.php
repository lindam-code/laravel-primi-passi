@extends('layouts.base')
@section('content')
  <main>
    <div class="container">
      <div class="row">
        <div class="col-6">
          <div class="col_before">
            <h2>PRIMA DEL CORSO</h2>
            @foreach ($faqs_before as $faq)
              <h2>{{ $faq['question'] }}</h2>
              <p>{{ $faq['answer'] }}</p>
            @endforeach
          </div>
        </div>
        <div class="col-6">
          <div class="col_after">
            <h2>DOPO IL CORSO</h2>
            @foreach ($faqs_after as $faq)
              <h2>{{ $faq['question'] }}</h2>
              <p>{{ $faq['answer'] }}</p>
            @endforeach
          </div>
        </div>
      </div>
    </div>

  </main>
@endsection
