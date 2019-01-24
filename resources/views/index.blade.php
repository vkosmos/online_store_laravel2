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
                        <a href="/catalog/{{ $child->link }}" style="color: #383d41">
                            {{ $child->name }}
                        </a>
                    </div>

                @endforeach

            </div>
        </div>

    @endforeach

@endsection

@section('content')
    <h1>Главная страница нашего замечательного интернет-магазина</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed egestas egestas fringilla phasellus faucibus scelerisque eleifend donec pretium. Ultrices neque ornare aenean euismod elementum nisi quis eleifend quam. Magna eget est lorem ipsum dolor sit. Feugiat nibh sed pulvinar proin gravida hendrerit lectus a. Interdum posuere lorem ipsum dolor sit amet consectetur. Mauris ultrices eros in cursus turpis massa tincidunt dui. Malesuada fames ac turpis egestas sed tempus urna. Convallis convallis tellus id interdum velit. Tempor orci eu lobortis elementum nibh tellus molestie nunc. Turpis egestas pretium aenean pharetra magna. Maecenas ultricies mi eget mauris pharetra et ultrices neque ornare. Scelerisque felis imperdiet proin fermentum leo. Nec nam aliquam sem et tortor consequat id porta. Leo urna molestie at elementum eu. Nulla facilisi etiam dignissim diam quis enim lobortis. Nisl nisi scelerisque eu ultrices vitae auctor eu augue. Facilisi etiam dignissim diam quis.</p>
    <p>Ultrices mi tempus imperdiet nulla malesuada pellentesque elit eget gravida. Dolor purus non enim praesent elementum. Quisque egestas diam in arcu cursus euismod quis viverra. Quis lectus nulla at volutpat diam ut venenatis. Turpis massa sed elementum tempus. Turpis tincidunt id aliquet risus. Nullam ac tortor vitae purus. Sit amet est placerat in egestas. Pellentesque adipiscing commodo elit at imperdiet dui accumsan. In vitae turpis massa sed elementum tempus egestas sed sed. Quis ipsum suspendisse ultrices gravida dictum fusce ut placerat. Rhoncus mattis rhoncus urna neque viverra justo. Integer malesuada nunc vel risus commodo viverra maecenas accumsan lacus. Tempus quam pellentesque nec nam aliquam sem et tortor. Urna neque viverra justo nec ultrices dui. Interdum varius sit amet mattis vulputate enim nulla aliquet porttitor. Est ante in nibh mauris cursus mattis molestie. Ultrices dui sapien eget mi proin sed libero.</p>
@endsection
