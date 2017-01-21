@extends('layouts.main')


@section('content')

  @include('site.partials._menu')
  
  @include('site.partials._jumbotron')

  @include('site.partials._about')

  @include('site.partials._sites')

  @include('site.partials._products')

  @include('site.partials._contact')

  @include('site.partials._footer')

@endsection