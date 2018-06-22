@extends('layouts.default')

@section('content')
<div class="container signin-form  col-2">
@include('shared._errors')
  <form class="" action="{{route('users.store')}}" method="post">
      {{csrf_field()}}

    <div class="form-group">

      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <div class="input-group-text"><span class="fa fa-envelope-o fa-fw"></span></div>
        </div>
        <label for="email"></label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="">

      </div>


      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"><span class="fa fa-key fa-fw"></span></div>
        </div>
        <label for=""></label>
        <input type="password" class="form-control" id="password" name="password" aria-describedby="passwordHelp" placeholder="">

      </div>



    </div>

    <div class="row justify-content-between m-auto">
      <small class="form-text text-muted pt-2">已经有账号？<a href="{{route('login')}}">登录</a></small>

       <button type="submit" class="btn btn-primary">注 册</button>
    </div>

  </form>

</div>

@endsection
