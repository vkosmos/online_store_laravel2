@extends('layout')


@section('title')
    Каталог
@endsection


@section('categories')

    @foreach($categories as $cat)

        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse{{$loop->iteration}}" >
                    {{ $cat->name }}
                </a>
            </div>
            <div id="collapse{{$loop->iteration}}" class="accordion-body collapse in">

                @foreach($cat->childs as $child)

                    <div class="accordion-inner">
                        {{ $child->name }}
                    </div>

                @endforeach

            </div>
        </div>

    @endforeach

@endsection

@section('content')

    <h1>Главная страница каталога</h1>

@endsection
