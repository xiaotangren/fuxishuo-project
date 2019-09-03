@extends('layouts.default')
@section('title','伏羲说!')
@section('content')
 <div class="jumbotron">
    <h1>你好，伏羲说</h1>
    <p class="lead">
      你现在所看到的是 <a href="">伏羲说「最专业的算命网站」</a>
    <p>
      <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">现在注册</a>
    </p>
  </div>
@stop
