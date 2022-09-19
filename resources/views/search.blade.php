@extends('master')
@section('content')

    <main class="main">
        <h2>Result for Products</h2>
        @foreach ($products as $item)
        <div class="searched_product">
            <a href="detail/{{$item['id']}}">
                <img src="{{$item['gallery']}}">
                <div><p>- 50 %</p></div>
            </a>
            <a href="detail/{{$item['id']}}">
                <h4>{{$item['name']}}</h4>
            </a>
            <div class="product__price">
                <span class="oldprice">{{$item['oldprice']}} €</span>
                <span class="newprice">{{$item['newprice']}} €</span>
            </div>

            <button class="product__add">Pridať do košíka</button>
        </div>
        @endforeach



        <aside class="aside-darkmode">
            <div class="slideThree">
                <input onclick="darkMode()" type="checkbox" value="None" id="slideThree" name="check" />
                <label for="slideThree"></label>
            </div>
        </aside>
        <a href="#" class="go-top"><i class="arrow up"></i></a>

    </main>

@endsection



