@extends('layout')

@section('title')
Каталог
@endsection

@section('content')

<div class="container">
    <div class="row">

    @foreach($goods as $item)

        <div class="col-md-4 col-sm-6">
            <div class="card text-center bg-outline-info text-muted mb-4">
                <div class="mx-auto mt-2" style="width: 180px; height: 180px">
                    <img src="{{$item->getImage()}}" alt="" class="img-fluid img-thumbnail rounded" style="max-width: 100%">
                </div>
                <div class="card-body">
                    <h6><a href="{{route('goods', $item->id)}}">{{$item->name}}</a></h6>
                    <p><strong>{{$item->price}}</strong> руб за <span>{{$item->amount}}</span></p>

                    <form action="{{route('basket.store')}}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$item->id}}">
                        <input type="hidden" name="cnt" value="1">
                        <button type="submit" class="btn btn-danger btn-sm">Купить</button>
                    </form>
                </div>
            </div>
        </div>

    @endforeach

    </div>
</div>

@endsection

@section('pagination')
    <nav id="pagination" class="mt-5">
        <ul class="pagination pagination-sm justify-content-center">
            {{ $goods->links() }}
        </ul>
    </nav>
@endsection
