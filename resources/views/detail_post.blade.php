@extends('layouts.default')
@section('content')
<main>
  <div class="slideshow">
    <div class="slides slides--images">
      @for ($i = 0; $i < count($eImage); $i++)
      @if ($i == 0)
      <div class="slide slide--current">
        <div class="slide__img" style="background-image: url('../detail_post/{{$eImage[$i]}}');"></div>
      </div>
      @else
      <div class="slide">
        <div class="slide__img" style="background-image: url('../detail_post/{{$eImage[$i]}}');"></div>
      </div>
      @endif
      @endfor
    </div>
    <div class="slides slides--titles">
      @for ($i = 0; $i < count($eImage); $i++)
      @if ($i == 0)
      <div class="slide slide--current">
        <p class="slide__title">{{$eDesc[$i]}}</p>
      </div>
      @else
      <div class="slide">
        <p class="slide__title">{{$eDesc[$i]}}</p>
      </div>
      @endif
      @endfor
    </div>
    <nav class="slidenav">
      <button class="slidenav__item slidenav__item--prev">PREVIOUS</button>
      <span class="slidenav__item">/</span>
      <button class="slidenav__item slidenav__item--next">NEXT</button>
    </nav>
  </div>
</main>
@endsection
