@extends('layouts.default')

@section('content')

<div class="container login-form col-2">
@include('shared._errors')
    <form class="" action=" " method="post">

        <div class="form-group">
          <!-- <label for="username"></label> -->
          <div class="input-group">
              <div class="input-group-prepend">
                  <div class="input-group-text">
                      <span class="fa fa-envelope-o fa-fw"></span>
                  </div>
              </div>
              <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="">

          </div>
        </div>

        <div class="form-group">
          <!-- <label for="password"></label> -->
          <div class="input-group">
              <div class="input-group-prepend">
                  <div class="input-group-text">
                      <span class="fa fa-key fa-fw"></span>
                  </div>
              </div>
              <input type="password" class="form-control" id="password" name="password" aria-describedby="passwordHelp" placeholder="">

          </div>
        </div>

        <div class="row justify-content-between m-auto">
            <small class="pt-2 form-text">还没有账号? <a href="{{route('signup')}}">现在注册</a></small>
            <button class="btn btn-primary float-right">登 录</button>
        </div>


    </form>
</div>
@endsection
