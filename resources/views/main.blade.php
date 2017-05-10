@extends('layouts.app')

@section('head')
  @parent
@endsection

@section('header')
  @parent
@endsection

@section('content')
  @include('layouts.main.content')
@endsection

@section('footer')
  @parent
@endsection
