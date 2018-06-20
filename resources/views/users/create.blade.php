@extends('layouts.default')

@section('content')
<div class="container signin-form  col-2">

  <form class="" action="index.html" method="post">

    <div class="form-group">

      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <div class="input-group-text"><span class="fa fa-user fa-fw"></span></div>
        </div>
        <label for=""></label>
        <input type="" class="form-control" id="" name="" aria-describedby="emailHelp" placeholder="">
        <small id="emailHelp" class="form-text text-muted"></small>
      </div>


      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"><span class="fa fa-key fa-fw"></span></div>
        </div>
        <label for=""></label>
        <input type="" class="form-control" id="" name="" aria-describedby="emailHelp" placeholder="">
        <small id="emailHelp" class="form-text text-muted"></small>
      </div>



    </div>

    <div class="row justify-content-between m-auto">
      <small class="form-text text-muted pt-2">还没有账号？<a href="#">现在注册</a></small>

       <button type="submit" class="btn btn-primary  ">登  录</button>
    </div>

  </form>

</div>

@endsection
