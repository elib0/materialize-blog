@extends('layouts.main')

@section('styles')
  <link rel="stylesheet" href="{{ asset(elixir('css/app.css')) }}">
@endsection

@section('body')
  @section('content')@show
    hola
@endsection

@section('footer')
  <footer class="page-footer transparent">
    <div class="footer-copyright">
      <div class="container black-text text-lighten-5">
        Copyright © 2015-2016 <a href="mailto:elijose.c@gmail.com?subject=feedback">@Elib0</a>
        <span class="right black-text text-lighten-5" to="/">{{ Setting::get('title') }}</span>
      </div>
    </div>
  </footer>
@endsection

@section('script')
  <script>
  window.Laravel = {!! json_encode([
    'csrfToken' => csrf_token(),
    'config' => Setting::all(),
    'currentViewType' => Request::segment(1) ?: 'default',
    'isProduction' => env('APP_ENV') === 'prod' || env('APP_ENV') === 'production'
    ]) !!};
    window.dictionary = {!! json_encode(trans('app')) !!};
    </script>
    <script src="{{ asset(elixir('js/app.js')) }}"></script>
@endsection
