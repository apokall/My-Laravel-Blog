@extends('layouts.app')

@section('head')
  @parent
@endsection

@section('header')
  @parent
@endsection

@section('content')
<style media="screen">
.form-group {
  padding: 10px;
}
</style>

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

 <form class="" action="{{ route('contact') }}" method="post">
       {{ csrf_field() }}
   <div class="form-group">
     <label for="name">Имя</label>
     <input type="text" id="name" name="name" value="" placeholder="Ваше имя">
   </div>
   <div class="form-group">
     <label for="email">Почта</label>
     <input type="email" id="email" name="email" value="" placeholder="Ваша почта">
   </div>
   <div class="form-group">
     <label for="message">Сообщение</label>
     <input type="text" id="message" name="message" value="" placeholder="Ваше сообщение">
   </div>
   <button type="submit" class="btn btn-primary">Отправить</button>
 </form>
@endsection

@section('footer')
  @parent
@endsection
