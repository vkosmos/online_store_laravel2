@extends('admin.layout')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Добавить пользователя
                <small>приятные слова..</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">

                <form method="POST" action="{{route('users.store')}}" enctype="multipart/form-data">
                    @csrf

                    <div class="box-header with-border">
                        <h3 class="box-title">Добавляем пользователя</h3>
                        @include('admin.errors')

                    </div>
                    <div class="box-body">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Имя</label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="" value="{{old('name')}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">E-mail</label>
                                <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="" value="{{old('email')}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Пароль</label>
                                <input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="">
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button class="btn btn-default">Назад</button>
                        <button class="btn btn-success pull-right">Добавить</button>
                    </div>
                    <!-- /.box-footer-->
                </form>

            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>


@endsection
