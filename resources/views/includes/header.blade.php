<?php

use App\Http\Controllers\ProductController;
$total = 0;
if(Session::has('user'))
{
    $total = ProductController::cartItem();
}

?>

<body>
<header class="header">
    <div class="logo">
        <a href="/">
            <img src="/icons/logo.png">
        </a>
    </div>

        <nav class="nav">
            <ul class="menu-nav">
                <li class="menu-nav__item active">
                    <a href="/" class="menu-nav__link">
                        DOMOV
                    </a>
                </li>
                <li class="menu-nav__item">
                    <a href="/" class="menu-nav__link">
                        HRY
                    </a>
                </li>
                <li class="menu-nav__item">
                    <a href="/" class="menu-nav__link">
                        HARDWARE
                    </a>
                </li>
                <li class="menu-nav__item">
                    <a href="/" class="menu-nav__link">
                        SMARTFÓNY
                    </a>
                </li>
                <li class="menu-nav__item">
                    <a href="/" class="menu-nav__link">
                        PC DOPLNKY
                    </a>
                </li>
                <li class="menu-nav__item sales">
                    <a href="/" class="menu-nav__link">
                        AKCIE
                    </a>
                </li>
            </ul>

        </nav>

        <a href="/myorders" class="myorders">
            <img src="/icons/myorders.png">
            <p>My Orders</p>
        </a>

        <a href="#" class="btn-search js-searchOpen" id="search-open">
            <i class="fa fa-lg fa-search" aria-hidden="true"></i>
        </a>

        <section class="search-overlay">
            <form action="/search" class="search-form">
              <a href="#" class="btn-search js-searchClose" id="search-close">
                <i class="fa fa-4x fa-times" aria-hidden="true"></i>
              </a>

              <input class="search" type="search" placeholder="Search" />
              <input class="search-submit" type="submit">
            </form>
        </section>

        <div class="language">
            <button onclick="showLanguages()" class="lang-dropdown-btn"><img src="/icons/flags/SK.png"><b>€</b> <span>| SK</span></button>
            <div class="dropdown-language">
                <a class="language-content active" href="#"><b>€</b><span> | SK</span></a>
                <a class="language-content" href="#"> <b>CZK</b><span> | CZ</span></a>
                <a class="language-content" href="#"><b>$</b><span> | EN</span></a>
            </div>
        </div>

        <div class="shopping-cart">
            <button class="dropdown-button">
                <img src="/icons/cart.png">
                Košík
                <div class="count">
                    <p>{{$total}}</p>
                </div>
            </button>

            <div class="dropdown-cart">
                <img class="dropdown-cart__icon" src="/icons/cart2.png">
                <div class="dropdown-cart__count"><p>{{$total}}</p></div>
                <div class="dropdown-cart__total">Celkom: <span>66.47 €</span></div>

                <hr>

                {{--<div class="dropdown-cart__products">
                    @foreach ($products as $item)

                    <div class="dropdown-cart__products-product">
                        <a href="detail/{{$item->id}}" class="image-link">
                            <img src="{{$item->gallery}}">
                        </a>
                        <a href="detail/{{$item->id}}" class="title-link">
                            {{$item->name}}
                        </a>
                        <span class="price">{{$item->newprice}} €</span>
                        <span class="quantity">Quantity: 2</span>
                        <a href="/removecart/{{$item->cart_id}}" class="deleleProduct"><img src="/icons/trash.png"><span>Remove from cart</span></a>
                    </div>
                    @endforeach

                </div>--}}

                <div class="dropdown-cart__products">
                    <div class="dropdown-cart__products-product">
                        <a class="image-link" href="#">
                            <img src="/products/games/pc/mafia-de.jpg">
                        </a>
                        <a class="title-link" href="#">
                            Mafia Definitive Edition
                        </a>
                        <span class="price">19.99 €</span>
                        <span class="quantity">Quantity: 2</span>
                    </div>

                    <div class="dropdown-cart__products-product">
                        <a class="image-link" href="#">
                            <img src="/products/games/pc/gta5.jpg">
                        </a>
                        <a class="title-link" href="#">
                            GTA V
                        </a>
                        <span class="price">14.49 €</span>
                        <span class="quantity">Quantity: 1</span>
                    </div>

                    <div class="dropdown-cart__products-product">
                        <a class="image-link" href="#">
                            <img src="/products/games/ps4/gow-ragnarok.jpg">
                        </a>
                        <a class="title-link" href="#">
                            God of War: Ragnarok | PS4
                        </a>
                        <span class="price">29.99 €</span>
                        <span class="quantity">Quantity: 1</span>
                    </div>

                    <div class="dropdown-cart__products-product">
                        <a class="image-link" href="#">
                            <img src="/products/games/pc/mafia2.jpg">
                        </a>
                        <a class="title-link" href="#">
                            Mafia 2
                        </a>
                        <span class="price">9.99 €</span>
                        <span class="quantity">Quantity: 1</span>
                    </div>
                </div>


                <button onclick="location.href='/cartlist'" type="submit" class="dropdown-cart__complete-btn">
                    Dokončiť nákup
                </button>

            </div>
        </div>

            @if(Session::has('user'))
                <div class="logout-menu">
                    <p>{{Session::get('user')['fname']}}</p>
                    <div class="profile" onclick="menuToggle()">
                        <img src="/icons/login.png" alt="login">
                    </div>
                </div>
                <div class="user-menu">
                    <ul>
                        <li><img src="/icons/edit.png"><a href="/edit">Edit Profile</a></li>
                        <li><img src="/icons/logout.png"><a href="/logout">Logout</a></li>
                    </ul>
                </div>

            @else

                <a class="login-menu" href="/login">
                    <div class="login">
                        <img src="/icons/login.png" alt="logo">
                        <p>Login</p>
                    </div>
                </a>

            @endif

    </header>

    <header class="header1-responsive">
        <div class="logo">
            <a href="/">
                <img src="/icons/logo.png">
            </a>
        </div>

        <div class="menu-icon" onclick="toggleNavigationMenu(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
            <ul class="responsive-menu-nav">
                <li class="responsive-menu-nav__item active">
                    <a href="/" class="responsive-menu-nav__link">
                        DOMOV
                    </a>
                </li>
                <li class="responsive-menu-nav__item">
                    <a href="/" class="responsive-menu-nav__link">
                        HRY
                    </a>
                </li>
                <li class="responsive-menu-nav__item">
                    <a href="/" class="responsive-menu-nav__link">
                        HARDWARE
                    </a>
                </li>
                <li class="responsive-menu-nav__item">
                    <a href="/" class="responsive-menu-nav__link">
                        SMARTFÓNY
                    </a>
                </li>
                <li class="responsive-menu-nav__item">
                    <a href="/" class="responsive-menu-nav__link">
                        PC DOPLNKY
                    </a>
                </li>
                <li class="responsive-menu-nav__item sales">
                    <a href="/" class="responsive-menu-nav__link">
                        AKCIE
                    </a>
                </li>
            </ul>
        </div>


            @if(Session::has('user'))

                <div class="logout-menu">
                    <p>{{Session::get('user')['fname']}}</p>
                    <div class="profile" onclick="menuToggle2()">
                        <img src="/icons/login.png" alt="login">
                    </div>
                </div>
                <div class="user-menu2">
                    <ul>
                        <li><img src="/icons/edit.png"><a href="/edit">Edit Profile</a></li>
                        <li><img src="/icons/logout.png"><a href="/logout">Logout</a></li>
                    </ul>
                </div>

            @else

                <a class="login-menu" href="/login">
                    <div class="login">
                        <img src="/icons/login.png" alt="logo">
                        <p>Login</p>
                    </div>
                </a>

            @endif

    </header>

    <header class="header2-responsive">
        <a href="#" class="btn-search js-searchOpen" id="search-open">
            <i class="fa fa-lg fa-search" aria-hidden="true"></i>
        </a>

        <section class="search-overlay">
            <form action="/search" class="search-form">
              <a href="#" class="btn-search js-searchClose" id="search-close">
                <i class="fa fa-4x fa-times" aria-hidden="true"></i>
              </a>

              <input class="search" type="search" placeholder="Search" />
              <input class="search-submit" type="submit">
            </form>
        </section>

        <a href="/myorders" class="myorders">
            <img src="/icons/myorders.png">
            <p>My Orders</p>
        </a>

        <div class="language">
            <button onclick="showLanguages()" class="lang-dropdown-btn"><img src="/icons/flags/SK.png"><b>€</b> <span>| SK</span></button>
            <div class="dropdown-language">
                <a class="language-content active" href="#"><b>€</b><span> | SK</span></a>
                <a class="language-content" href="#"> <b>CZK</b><span> | CZ</span></a>
                <a class="language-content" href="#"><b>$</b><span> | EN</span></a>
            </div>
        </div>

        <div class="shopping-cart">
            <button class="dropdown-button">
                <img src="/icons/cart.png">
                Košík
                <div class="count">
                    <p>{{$total}}</p>
                </div>
            </button>

            <div class="dropdown-cart">
                <img class="dropdown-cart__icon" src="/icons/cart2.png">
                <div class="dropdown-cart__count"><p>{{$total}}</p></div>
                <div class="dropdown-cart__total">Celkom: <span>66.47 €</span></div>
                <hr>

                {{--<div class="dropdown-cart__products">
                    @foreach ($products as $item)

                    <div class="dropdown-cart__products-product">
                        <a href="detail/{{$item->id}}" class="image-link">
                            <img src="{{$item->gallery}}">
                        </a>
                        <a href="detail/{{$item->id}}" class="title-link">
                            {{$item->name}}
                        </a>
                        <span class="price">{{$item->newprice}} €</span>
                        <span class="quantity">Quantity: 2</span>
                        <a href="/removecart/{{$item->cart_id}}" class="deleleProduct"><img src="/icons/trash.png"><span>Remove from cart</span></a>
                    </div>
                    @endforeach

                </div>--}}

                <div class="dropdown-cart__products">
                    <div class="dropdown-cart__products-product">
                        <a class="image-link" href="#">
                            <img src="/products/games/pc/mafia-de.jpg">
                        </a>
                        <a class="title-link" href="#">
                            Mafia Definitive Edition
                        </a>
                        <span class="price">19.99 €</span>
                        <span class="quantity">Quantity: 2</span>
                    </div>

                    <div class="dropdown-cart__products-product">
                        <a class="image-link" href="#">
                            <img src="/products/games/pc/gta5.jpg">
                        </a>
                        <a class="title-link" href="#">
                            GTA V
                        </a>
                        <span class="price">14.49 €</span>
                        <span class="quantity">Quantity: 1</span>
                    </div>

                    <div class="dropdown-cart__products-product">
                        <a class="image-link" href="#">
                            <img src="/products/games/ps4/gow-ragnarok.jpg">
                        </a>
                        <a class="title-link" href="#">
                            God of War: Ragnarok | PS4
                        </a>
                        <span class="price">29.99 €</span>
                        <span class="quantity">Quantity: 1</span>
                    </div>

                    <div class="dropdown-cart__products-product">
                        <a class="image-link" href="#">
                            <img src="/products/games/pc/mafia2.jpg">
                        </a>
                        <a class="title-link" href="#">
                            Mafia 2
                        </a>
                        <span class="price">9.99 €</span>
                        <span class="quantity">Quantity: 1</span>
                    </div>
                </div>

                <button onclick="location.href='/cartlist'" class="dropdown-cart__complete-btn">
                    Dokončiť nákup
                </button>
            </div>

        </div>

    </header>
