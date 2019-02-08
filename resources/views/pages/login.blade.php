@extends('layout')

@section('content')

    <div class="leave-comment mr-0">
        @if (session('status'))
            <div class="alert alert-danger">
                {{session('status')}}
            </div>
        @endif
        <h3 class="text-uppercase">Вход на сайт</h3>
        @include('admin.errors')
        <br>
        <form class="form-horizontal contact-form" role="form" method="post" action="/login">
            @csrf
            <div class="form-group">
                <div class="col-md-12">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="{{old('email')}}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Пароль">
                </div>
            </div>
            <button type="submit" class="btn btn-info btn-block">Войти</button>

        </form>
    </div>

@endsection
