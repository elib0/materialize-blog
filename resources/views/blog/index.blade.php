@extends('layouts.blog_tmpl')

@section('content')
  <header>
    <navigation></navigation>
  </header>
  <main id="app">
    <div class="container">
      <router-view></router-view>
    </div>
  </main>
@endsection
