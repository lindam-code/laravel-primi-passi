@extends('layouts.base')
@section('content')
  <main>
    <section class="faq">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-6">
            <div class="col_before">
              <h2>PRIMA DEL CORSO</h2>
              @foreach ($faqs_before as $faq)
                <div class="show_answer">
                  <i class="fa fa-plus hide_icon" aria-hidden="true"></i>
                  <h3>{{ $faq['question'] }}</h3>
                  <p class="answer_faq">{{ $faq['answer'] }}</p>
                </div>
              @endforeach
            </div>
          </div>
          <div class="col-xl-6">
            <div class="col_after">
              <h2>DOPO IL CORSO</h2>
              @foreach ($faqs_after as $faq)
                <div class="show_answer">
                  <i class="fa fa-plus hide_icon" aria-hidden="true"></i>
                  <h3>{{ $faq['question'] }}</h3>
                  <p class="answer_faq">{{ $faq['answer'] }}</p>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
