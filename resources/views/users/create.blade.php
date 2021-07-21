@extends('layouts.default')
@section('title', '注册')

@section('content')
    <div class="container  col-md-8">
        <div class="card">
            <div class="card-header">
                <h5>注册</h5>
            </div>
            <div class="card-body">
                @include('shared._errors')

                <form method="POST" action="{{ route('users.store') }}">
                    {{ csrf_field() }}
                    <div class="mb-3">
                        <label for="name" class="form-label">名称：</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">邮箱：</label>
                        <input type="email" class="form-control" name="email"  id="email" value="{{ old('email') }}">
                    </div>

                    <div class="mb-3">
                        <label for="password">密码（<a href="{{ route('password.request') }}">忘记密码</a>）：</label>
                        <input type="password" class="form-control" name="password" id="password" value="{{ old('password') }}">
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">确认密码：</label>
                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation"
                            value="{{ old('password_confirmation') }}">
                    </div>

                    <button type="submit" class="btn btn-primary">注册</button>
                </form>
            </div>
        </div>
    </div>
@stop
