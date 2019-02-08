@extends('layout')

@section('content')

    <div class="leave-comment mr-0">

        <h3 class="text-uppercase">Регистрация</h3>
        @include('admin.errors')
        <br>
        <form class="form-horizontal contact-form" role="form" method="post" action="/register">
            @csrf
            <div class="form-group">
                <div class="col-md-12">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Имя" value="{{old('name')}}">
                </div>
            </div>
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
            <button type="submit" class="btn btn-info btn-block">Зарегистрироваться</button>

        </form>
    </div><!--end leave comment-->

@endsection
