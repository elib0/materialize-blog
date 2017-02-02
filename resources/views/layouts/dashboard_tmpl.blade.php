@extends('layouts.main')

@section('head')
  <title>{{ Setting::get('title') }}</title>
@endsection

@section('styles')
  <link rel="stylesheet" href="{{ asset(elixir('css/dashboard.css')) }}">
@endsection

@section('body')
  @section('content')@show
@endsection

@section('footer')@endsection

@section('script')
  <script>
  window.Laravel = {!! json_encode([
    'csrfToken' => csrf_token(),
    'config' => Setting::all(),
    'isProduction' => env('APP_ENV') === 'prod' || env('APP_ENV') === 'production'
    ]) !!};
    window.dictionary = {!! json_encode(trans('app')) !!};
  </script>
  <script src="{{ asset(elixir('js/dashboard.js')) }}"></script>
@endsection
