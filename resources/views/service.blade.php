@extends('layouts.default')
@section('content')
  <svg class="hidden">
  <symbol id="icon-arrow" viewBox="0 0 24 24">
    <title>arrow</title>
    <polygon points="6.3,12.8 20.9,12.8 20.9,11.2 6.3,11.2 10.2,7.2 9,6 3.1,12 9,18 10.2,16.8 "/>
  </symbol>
  <symbol id="icon-drop" viewBox="0 0 24 24">
    <title>drop</title>
    <path d="M12,21c-3.6,0-6.6-3-6.6-6.6C5.4,11,10.8,4,11.4,3.2C11.6,3.1,11.8,3,12,3s0.4,0.1,0.6,0.3c0.6,0.8,6.1,7.8,6.1,11.2C18.6,18.1,15.6,21,12,21zM12,4.8c-1.8,2.4-5.2,7.4-5.2,9.6c0,2.9,2.3,5.2,5.2,5.2s5.2-2.3,5.2-5.2C17.2,12.2,13.8,7.3,12,4.8z"/><path d="M12,18.2c-0.4,0-0.7-0.3-0.7-0.7s0.3-0.7,0.7-0.7c1.3,0,2.4-1.1,2.4-2.4c0-0.4,0.3-0.7,0.7-0.7c0.4,0,0.7,0.3,0.7,0.7C15.8,16.5,14.1,18.2,12,18.2z"/>
  </symbol>
  <symbol id="icon-plus" viewBox="0 0 25 24">
    <title>plus</title>
    <path  d="M13.568 11.216h11.216v1.568H13.568V24H12V12.784H.784v-1.568H12V0h1.568v11.216z"/>
  </symbol>
  <symbol id="icon-arrowdown" viewBox="0 0 12 25">
    <title>arrow down</title>
    <path d="M4.916.3v21.017l-3.563-3.564L.25 18.856 5.7 24.3l5.45-5.444-1.102-1.103-3.564 3.564V.3z"/>
  </symbol>
  </svg>
  <main>
    <div class="grid grid--deco">
      <div class="grid__box"></div>
      <div class="grid__box"></div>
      <div class="grid__box"></div>
      <div class="grid__box"></div>
      <div class="grid__box"></div>
    </div>
    <div class="grid grid--outer">
      <div class="title-wrap">
        <h2 class="title">Workers Design</h2>
        <span class="subtitle">Services</span>
        <span class="year">2018</span>
      </div>
    </div>
    <div class="fullview">
      <div class="fullview__item" style="background-image: url(img/1.jpg)">
        <span class="fullview__item-number">01</span>
        <div class="fullview__item-titlewrap">
          <h3 class="fullview__item-title">App Development</h3>
          <p class="fullview__item-description">We offer mobile app design and development service for Android and iOS platform.</p>
          <span class="fullview__item-more">more</span>
        </div>
      </div>
      <div class="fullview__item" style="background-image: url(img/2.jpg)">
        <span class="fullview__item-number">02</span>
        <div class="fullview__item-titlewrap">
          <h3 class="fullview__item-title">Web Development</h3>
          <p class="fullview__item-description">We offer website design and development service for individual, company profile, e-commerce, blog, catalog, portfolio, or anything else.</p>
          <span class="fullview__item-more">more</span>
        </div>
      </div>
      <div class="fullview__item" style="background-image: url(img/3.jpg)">
        <span class="fullview__item-number">03</span>
        <div class="fullview__item-titlewrap">
          <h3 class="fullview__item-title">Design Development</h3>
          <p class="fullview__item-description">We offer graphic and print design service for company, business, brand, marketing, event, promotion, and others.</p>
          <span class="fullview__item-more">more</span>
        </div>
      </div>
      <div class="fullview__item" style="background-image: url(img/4.jpg)">
        <span class="fullview__item-number">04</span>
        <div class="fullview__item-titlewrap">
          <h3 class="fullview__item-title">Digital Marketing</h3>
          <p class="fullview__item-description">We offer digital marketing service for Facebook Ads, Google Adword, Intagram Ads, or anything else.</p>
          <span class="fullview__item-more">more</span>
        </div>
      </div>
      <h3 class="fullview__title">Workers Design</h3>
    </div><!--/fullview-->
    <!-- Revealer element -->
    <div class="revealer"></div>
    <!-- Thumbs grid -->
    <div class="grid grid--thumbs">
      <div class="grid__item" data-revealer-color="#fff">
        <h3 class="grid__item-title"><span>App Development</span></h3>
        <span class="grid__item-number"><span>01</span></span>
        <div class="grid__item-imgwrap">
          <img class="grid__item-img" src="{{ asset('img/thumb1.jpg') }}" alt="Some image" />
          <div class="grid__item-bg" style="background-image: {{ asset('img/thumb1.jpg') }}"></div>
        </div>
      </div>
      <div class="grid__item" data-revealer-color="#fff">
        <h3 class="grid__item-title"><span>Web Development</span></h3>
        <span class="grid__item-number"><span>02</span></span>
        <div class="grid__item-imgwrap">
          <img class="grid__item-img" src="{{ asset('img/thumb2.jpg') }}" alt="Some image" />
          <div class="grid__item-bg" style="background-image: {{ asset('img/thumb2.jpg') }}"></div>
        </div>
      </div>
      <div class="grid__item" data-revealer-color="#fff">
        <h3 class="grid__item-title"><span>Design Development</span></h3>
        <span class="grid__item-number"><span>03</span></span>
        <div class="grid__item-imgwrap">
          <img class="grid__item-img" src="{{ asset('img/thumb3.jpg') }}" alt="Some image" />
          <div class="grid__item-bg" style="background-image: {{ asset('img/thumb3.jpg') }}"></div>
        </div>
      </div>
      <div class="grid__item" data-revealer-color="#fff">
        <h3 class="grid__item-title"><span>Digital Marketing</span></h3>
        <span class="grid__item-number"><span>04</span></span>
        <div class="grid__item-imgwrap">
          <img class="grid__item-img" src="{{ asset('img/thumb4.jpg') }}" alt="Some image" />
          <div class="grid__item-bg" style="background-image: {{ asset('img/thumb4.jpg') }}"></div>
        </div>
      </div>
      <div class="grid__item grid__item--more">
        <button class="grid__toggle">
          <span class="grid__toggle-inner grid__toggle-more">
            <span class="grid__toggle-text">more</span>
            <svg class="grid__toggle-icon grid__toggle-icon--more"><use xlink:href="#icon-plus"></use></svg>
          </span>
          <span class="grid__toggle-inner grid__toggle-back">
            <span class="grid__toggle-text">back</span>
            <svg class="grid__toggle-icon"><use xlink:href="#icon-arrowdown"></use></svg>
          </span>
        </button>
      </div>
    </div>
  </main>
@endsection
