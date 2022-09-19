@extends('master')
@section('content')

<main class="main-myorders">
    <div class="myorders">

        <div class="myorders__title">
            <h1>My Orders</h1>
        </div>
        <hr id="hr1">

        <div class="myorders__products">
            @foreach ($orders as $item)
            <div class="myorders__products-product">
                <a href="detail/{{$item->id}}" class="image-link">
                    <img src="{{$item->gallery}}">
                </a>
                <a href="detail/{{$item->id}}" class="title-link">
                    {{$item->name}}
                </a>
                <div class="myorders__products-product-orderData">
                    <h3>Price: {{$item->newprice}} €</h3>
                    <h3>Delivery Status: {{$item->status}}</h3>
                    <h3>Country: {{$item->country}}</h3>
                    <h3>City: {{$item->city}}</h3>
                    <h3>Postal Code: {{$item->postal_code}}</h3>
                    <h3>Street: {{$item->street}}</h3>
                    <h3>House Number: {{$item->house_number}}</h3>
                    <h3>Payment Status {{$item->payment_status}}</h3>
                    <h3>Payment Method {{$item->payment_method}}</h3>
                </div>
            </div>
            @endforeach

        </div>

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



