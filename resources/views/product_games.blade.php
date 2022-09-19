@extends('master')
@section('content')

    <main class="main">
        <div id="slidy-container">
            <figure id="slidy">
              <img src="/bg/1.jpg">
              <img src="/bg/2.jpg">
              <img src="/bg/3.jpg">
              <img src="/bg/4.jpg">
            </figure>
        </div>

        <div class="sales-title">
            <h1 class="title-h1">Zľavy</h1>
        </div>

        <hr id="sales-hr">

        <div class="sales-title2">
            <h2 class="title-h2">Hry</h2>
        </div>

        <div class="product" id="product1">
            @foreach ($products as $item)
            <div class="product__item">
                <a href="detail/{{$item['id']}}" class="product__link">
                    <img src="{{$item['gallery']}}">
                    <div><p>- 50 %</p></div>
                </a>
                <a href="detail/{{$item['id']}}" class="product__title">
                    <h4>{{$item['name']}}</h4>
                </a>
                <div class="product__price">
                    <span class="oldprice">{{$item['oldprice']}} €</span>
                    <span class="newprice">{{$item['newprice']}} €</span>
                </div>
                <form action="/add_to_cart" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{$item['id']}}">
                    <button class="product__add">Pridať do košíka</button>
                </form>
            </div>
            @endforeach
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



