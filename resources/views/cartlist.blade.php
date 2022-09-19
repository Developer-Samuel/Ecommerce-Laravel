@extends('master')
@section('content')

<main class="main-cart">
    <div class="cart">

        <div class="cart__title">
            <h1>Nákupný košík</h1>
        </div>
        <hr id="hr1">

        <div class="cart__products">
            @foreach ($products as $item)
            <div class="cart__products-product">
                <a href="detail/{{$item->id}}" class="image-link">
                    <img src="{{$item->gallery}}">
                </a>
                <a href="detail/{{$item->id}}" class="title-link">
                    {{$item->name}}
                </a>
                <span class="price">{{$item->newprice}} €</span>
                <div class="quantity">
                    <label for="quantity">Quantity: </label>
                    <input name="quantity" type="number" min="1" max="100" value="1">
                </div>
                <a href="/removecart/{{$item->cart_id}}" class="deleleProduct"><img src="/icons/trash.png"><span>Remove from cart</span></a>
            </div>
            @endforeach

        </div>

        <a href="/ordernow" class="cart__complete-btn">
            Pokračovať
        </a>
    </div>


    <aside class="aside-darkmode">
        <div class="slideThree">
            <input onclick="darkMode()" type="checkbox" value="None" id="slideThree" name="check" />
            <label for="slideThree"></label>
        </div>
    </aside>
    <a href="#" class="go-top"><i class="arrow up"></i></a>

</main>

@endsection



