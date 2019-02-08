@extends('layout')

@section('title')
Контакты
@endsection

@section('content')

<div class="container">
    <div class="row">

        <div class="col-md-5">
            <img src="{{$product->getImage()}}" alt="" class="img-fluid img-thumbnail rounded" style="max-width: 100%">
        </div>

        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                    <h6>{{$product->name}}</h6>
                </div>
                <div class="card-body">
                    <p>{{$product->description}}</p>
                    <p class="text-center"><strong>{{$product->price}}</strong> руб за <span>{{$product->amount}}</span></p>
                    <form action="{{route('basket.store')}}" method="post" class="form-inline">
                        @csrf
                        <div class="form-group">
                            <input type="hidden" name="id" value="{{$product->id}}">
                            {{--<a href="#"><i class="fas fa-plus"></i></a>--}}
                            <input type="text" class="form-control mx-2" name="cnt" value="1">
                            {{--<a href="#"><i class="fas fa-minus"></i></a>--}}
                            <button type="submit" class="btn btn-danger btn-sm ml-3">Купить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
</div>

@endsection
