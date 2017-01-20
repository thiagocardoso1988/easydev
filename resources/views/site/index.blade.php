@extends('layouts.main')


@section('content')

  @include('site.includes.menu')
  
  @include('site.includes.jumbotron')

  @include('site.includes.about')

  @include('site.includes.sites')

  @include('site.includes.products')

  @include('site.includes.contact')

  @include('site.includes.footer')

@endsection