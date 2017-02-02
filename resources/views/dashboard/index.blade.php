@extends('layouts.dashboard_tmpl')

@section('content')
<header>
  <navigation></navigation>
</header>
<main>
  <router-link v-show="showActionButton"
     to="/dashboard/posts/create"
     class="fixed-action-btn btn-floating btn-large waves-effect waves-light blue tooltipped hide-on-med-and-down"
     data-position="left" data-delay="50" :data-tooltip="$trans('create')">
    <i class="material-icons">mode_edit</i>
  </router-link>
  <div class="col s12 m12 l10">
    <circular-loader id="main-preloader" size="tiny" :loading="store.loading" class="right"></circular-loader>
    <router-view></router-view>
  </div>
</main>
@endsection
