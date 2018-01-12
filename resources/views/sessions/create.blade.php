@extends('layouts.default')
@section('title', '登录')

@section('content')
<div class="col-md-offset-2 col-md-8">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5>登录</h5>
        </div>
        <div class="panel-body">
            @include('shared._errors')
            <form action="{{ route('login') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="email">邮箱</label>
                    <input type="text" name="email" class="form-control" value="{{ old('email') }}">
                </div>

                <div class="form-group">
                    <label for="password">密码</label>
                    <input type="password" name="password" value="{{ old('password')}}" class="form-control">
                </div>

                <div class="checkbox">
                    <label for="remember_me"> <input type="checkbox" name="" value=""> 记住我</label>
                </div>

                <button type="submit" class="btn btn-primary">登录</button>
            </form>

            <hr>

            <p>还没帐号？ <a href="{{ route('signup') }}">现在注册！</a></p>
        </div>
    </div>
</div>
@stop
