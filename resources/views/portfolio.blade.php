@extends('layouts.default')
@section('content')
  <main>
    <div class="content grid">
      @foreach ($Posts as $p)
      <div class="grid__item">
        <a href="{{ URL::to('/portfolio/'.$p->slug)}}.html" target="_blank">
          <div class="scroll-img" style="background-image: url('img/portfolios/{{$p->image}}');"></div>
        </a>
        <div class="grid__item-titlewrap">
          <h2 class="grid__item-title">#{{$p->subtitle}}</h2>
          <a href="{{ URL::to('/portfolio/'.$p->slug)}}.html" class="grid__item-description" target="_blank">{{$p->title}}</a>
        </div>
      </div>
      @endforeach
    </div>
  </main>
@endsection
