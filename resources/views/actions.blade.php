@extends('layout')


@section('title')
    Контаксты
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

    <h1>Наши акции</h1>
    @switch($id)
        @case(1)
            <h3>Перворатор в обмен на старый автомобиль</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eleifend donec pretium vulputate sapien nec sagittis aliquam malesuada. Pretium vulputate sapien nec sagittis. Aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant. Enim tortor at auctor urna. Ipsum nunc aliquet bibendum enim facilisis gravida neque convallis a. Ultricies lacus sed turpis tincidunt id aliquet. Tincidunt praesent semper feugiat nibh sed pulvinar proin gravida hendrerit. Risus pretium quam vulputate dignissim suspendisse. Consectetur libero id faucibus nisl tincidunt eget nullam non nisi. Non diam phasellus vestibulum lorem sed risus. Dui ut ornare lectus sit amet est placerat. Nulla facilisi etiam dignissim diam quis. Nulla facilisi cras fermentum odio eu feugiat pretium.</p>
            @break
        @case(2)
            <h3>Купите на 100000 и получите клетку для попугая в подарок</h3>
            <p>Amet volutpat consequat mauris nunc congue. Et egestas quis ipsum suspendisse ultrices. Faucibus scelerisque eleifend donec pretium vulputate. Tincidunt vitae semper quis lectus nulla at volutpat. Integer eget aliquet nibh praesent tristique magna. Condimentum mattis pellentesque id nibh. Pulvinar mattis nunc sed blandit libero volutpat. Justo nec ultrices dui sapien eget mi proin sed. Sit amet facilisis magna etiam. Et netus et malesuada fames ac turpis egestas sed tempus. Donec et odio pellentesque diam volutpat commodo. Viverra accumsan in nisl nisi scelerisque eu ultrices vitae auctor. Pretium vulputate sapien nec sagittis. Ut venenatis tellus in metus vulputate eu scelerisque felis imperdiet. Viverra orci sagittis eu volutpat odio. Etiam dignissim diam quis enim. Amet consectetur adipiscing elit pellentesque habitant morbi tristique senectus. Mattis ullamcorper velit sed ullamcorper morbi. Mi ipsum faucibus vitae aliquet nec.</p>
            @break
    @endswitch

@endsection
