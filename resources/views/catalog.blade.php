@extends('layout')

@section('bread_crumbs')
    {{ $breadCrumbs }}
@endsection

@section('title')
    Каталог
@endsection

@section('categories')

    @foreach($categories as $cat)

        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse{{$loop->iteration}}" >
                    +&nbsp;
                </a>
                <a href="/catalog/{{ $cat->link }}">
                    {{ $cat->name }}
                </a>
            </div>
            <div id="collapse{{$loop->iteration}}" class="accordion-body collapse in">

                @foreach($cat->childs as $child)

                    <div class="accordion-inner">
                        <div class="accordion-inner">
                            <a href="/catalog/{{ $child->link }}" style="color: #888888">
                                {{ $child->name }}
                            </a>
                        </div>
                    </div>

                @endforeach

            </div>
        </div>

    @endforeach

@endsection

@section('content')

    @foreach($goods as $item)
        <hr>
        <h4>{{ $item->name }}</h4>
        <span>{{ $item->description }}</span>
        <br>
        <span>Цена: <strong>{{$item->price}}</strong> за 1 {{$item->amount}}</span>

    @endforeach

@endsection
