@extends('layouts.app')

@section('head')
<title>{{$title}}</title>
  @parent
@endsection

@section('header')
  @parent
@endsection

@section('content')
  @include('layouts.blog.content')
@endsection

@section('footer')
  @parent
@endsection
