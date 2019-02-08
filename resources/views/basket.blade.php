@extends('layout')

@section('title')
Интернет-магазин
@endsection

@section('content')

    <div class="card">
        <div class="card-header">
            <h4>Заказанные товары</h4>
        </div>
        <table class="table table-stripped">
            <thead class="thead-dark">
                <rt>
                    <th>#</th>
                    <th>Наименование</th>
                    <th>Цена</th>
                    <th>Ед. изм.</th>
                    <th>Кол-во</th>
                    <th>Сумма</th>
                    <th>Удалить</th>
                </rt>
            </thead>
            <tbody>

                <?php $i = 1; ?>
                @if(null !== $goods)
                @foreach($goods as $item)
                        <td>{{$i++}}</td>
                        <td>{{$item[0]->name}}</td>
                        <td>{{$item[0]->price}}</td>
                        <td>{{$item[0]->amount}}</td>
                        <td>{{$item[1]}}</td>
                        <td>{{$item[0]->price * $item[1]}}</td>
                        <td>
                            <a href="{{route('basket.delete', $item[0]->id)}}" class="btn btn-danger btn-sm"> <i class="fas fa-trash"> Удалить </i> </a>
                        </td>
                    </tr>
                @endforeach
                @endif

            </tbody>
        </table>
        <form action="{{route('order.create')}}" method="post">
            @csrf
            @if (Auth::check())
                <button type="submit" class="btn btn-warning">Оформить заказ</button>
            @else
                <p class="bg-danger text-white p-4">Залогиньтесь для оформления заказа</p>
            @endif
        </form>

    </div>

@endsection
