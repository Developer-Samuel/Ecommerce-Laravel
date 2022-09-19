@extends('master')
@section('content')

<main class="main-product-show">
    <a class="go-back" href="/">Go Back</a>
    <div class="product-show">
        <div class="product-show__image">
            <img src="{{$product['gallery']}}">
        </div>
        <div class="product-show__title">
            <h1>{{$product['name']}}</h1>
        </div>
        <hr>
        <div class="product-show__text">
            <p>{{$product['description']}}</p>
        </div>

        <div class="show-modal-div">
            <button class="show-modal" id="show-modal" href="#">
                Zobraziť ďalšie informácie
            </button>
        </div>
        <div id="myModal" class="modal">
            <div class="modal-content">
            <span class="close">&times;</span>
            <p>{{$product['description']}}</p>
            </div>
        </div>

        <div class="product-show__category">
            <p>{{$product['category']}}</p>
        </div>

        <div class="product-show__rate">
            <a href="#!" class="active">★</a>
            <a href="#!" class="active">★</a>
            <a href="#!" class="active">★</a>
            <a href="#!">★</a>
            <a href="#!">★</a>
        </div>
        <div class="product-show__price">
            <span class="oldprice">{{$product['oldprice']}} €</span>
            <span class="newprice">{{$product['newprice']}} €</span>
        </div>
        <div class="product-show__hashtags">
            <a href="#">#PC</a>
            <a href="#">#2022</a>
        </div>
        <div class="product-show__quantity">
            <label for="quantity">Quantity: </label>
            <input name="quantity" type="number" min="1" max="100" value="1">
        </div>
        <form action="/add_to_cart" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{$product['id']}}">
            <button class="product-show__add">Pridať do košíka</button>
        </form>
    </div>

    <h2 class="comments-title">Diskusia</h2>
    <h2 class="reviews-title">Recenzie</h2>

    <div class="comments-reviews">
        <div class="comments">
            <div class="comments-upper">
                <div class="comments-upper__questions">
                    Mate nejaké otázky? Spýtajte sa v diskusií.
                </div>
                <button class="comments-upper__add">Spýtať sa v diskusií</button>
            </div>
            <ul class="comments__list">
                <li>
                    <img src="/icons/login.png">
                    <p class="comments-username">Samuel Šteiner</p>
                    <div class="comments-answers">
                        <a href="#">
                            <img src="/icons/comment.png">
                            <span class="comments-answers-count">2</span>
                        </a>
                    </div>
                    <div class="comments-text">
                        Lorem ipsum dolor sit aum doalias. Sit repudiandae assumenda nobis ratione delectus cupiditate necessitatibus facere saepe id? Facere ipsam tenetur placeat Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae modi suscipit, eaque perspiciatis odio laborum libero, molestias ducimus deleniti fugiat inventore veritatis ea eos corporis sit velit explicabo ut soluta.
                    </div>
                </li>
                <li>
                    <img src="/icons/login.png">
                    <p class="comments-username">Samuel Šteiner</p>
                    <div class="comments-answers">
                        <a href="#">
                            <img src="/icons/comment.png">
                            <span class="comments-answers-count">2</span>
                        </a>
                    </div>
                    <div class="comments-text">
                        Lorem ipsum dolor sit aum doalias. Sit repudiandae assumenda nobis ratione delectus cupiditate necessitatibus facere saepe id? Facere ipsam tenetur placeat Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae modi suscipit, eaque perspiciatis odio laborum libero, molestias ducimus deleniti fugiat inventore veritatis ea eos corporis sit velit explicabo ut soluta.
                    </div>
                </li>
                <li>
                    <img src="/icons/login.png">
                    <p class="comments-username">Samuel Šteiner</p>
                    <div class="comments-answers">
                        <a href="#">
                            <img src="/icons/comment.png">
                            <span class="comments-answers-count">2</span>
                        </a>
                    </div>
                    <div class="comments-text">
                        Lorem ipsum dolor sit aum doalias. Sit repudiandae assumenda nobis ratione delectus cupiditate necessitatibus facere saepe id? Facere ipsam tenetur placeat Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae modi suscipit, eaque perspiciatis odio laborum libero, molestias ducimus deleniti fugiat inventore veritatis ea eos corporis sit velit explicabo ut soluta.
                    </div>
                </li>
                <li>
                    <img src="/icons/login.png">
                    <p class="comments-username">Samuel Šteiner</p>
                    <div class="comments-answers">
                        <a href="#">
                            <img src="/icons/comment.png">
                            <span class="comments-answers-count">2</span>
                        </a>
                    </div>
                    <div class="comments-text">
                        Lorem ipsum dolor sit aum doalias. Sit repudiandae assumenda nobis ratione delectus cupiditate necessitatibus facere saepe id? Facere ipsam tenetur placeat Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae modi suscipit, eaque perspiciatis odio laborum libero, molestias ducimus deleniti fugiat inventore veritatis ea eos corporis sit velit explicabo ut soluta.
                    </div>
                </li>
                <li>
                    <img src="/icons/login.png">
                    <p class="comments-username">Samuel Šteiner</p>
                    <div class="comments-answers">
                        <a href="#">
                            <img src="/icons/comment.png">
                            <span class="comments-answers-count">2</span>
                        </a>
                    </div>
                    <div class="comments-text">
                        Lorem ipsum dolor sit aum doalias. Sit repudiandae assumenda nobis ratione delectus cupiditate necessitatibus facere saepe id? Facere ipsam tenetur placeat Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae modi suscipit, eaque perspiciatis odio laborum libero, molestias ducimus deleniti fugiat inventore veritatis ea eos corporis sit velit explicabo ut soluta.
                    </div>
                </li>
                <li>
                    <img src="/icons/login.png">
                    <p class="comments-username">Samuel Šteiner</p>
                    <div class="comments-answers">
                        <a href="#">
                            <img src="/icons/comment.png">
                            <span class="comments-answers-count">2</span>
                        </a>
                    </div>
                    <div class="comments-text">
                        Lorem ipsum dolor sit aum doalias. Sit repudiandae assumenda nobis ratione delectus cupiditate necessitatibus facere saepe id? Facere ipsam tenetur placeat Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae modi suscipit, eaque perspiciatis odio laborum libero, molestias ducimus deleniti fugiat inventore veritatis ea eos corporis sit velit explicabo ut soluta.
                    </div>
                </li>
            </ul>
        </div>
        <div class="reviews">
            <div class="reviews-upper">
                <div class="reviews-upper__percent">
                    99 <sup>%</sup>
                </div>
                <button class="reviews-upper__add">Napísať recenziu</button>
                <div class="reviews-upper__rate">
                    <a href="#!" class="active">★</a>
                    <a href="#!" class="active">★</a>
                    <a href="#!" class="active">★</a>
                    <a href="#!" class="active">★</a>
                    <a href="#!" class="active">★</a>
                </div>
                <div class="reviews-upper__rate">
                    <a href="#!" class="active">★</a>
                    <a href="#!" class="active">★</a>
                    <a href="#!" class="active">★</a>
                    <a href="#!" class="active">★</a>
                </div>
                <div class="reviews-upper__rate">
                    <a href="#!" class="active">★</a>
                    <a href="#!" class="active">★</a>
                    <a href="#!" class="active">★</a>
                </div>
                <div class="reviews-upper__rate">
                    <a href="#!" class="active">★</a>
                    <a href="#!" class="active">★</a>
                </div>
                <div class="reviews-upper__rate">
                    <a href="#!" class="active">★</a>
                </div>
                <p class="reviews-upper__count">1x</p>
                <p class="reviews-upper__count">0x</p>
                <p class="reviews-upper__count">2x</p>
                <p class="reviews-upper__count">4x</p>
                <p class="reviews-upper__count">1x</p>
            </div>
            <ul class="reviews__list">
                <li>
                    <img src="/icons/login.png">
                    <p class="reviews-username">Samuel Šteiner</p>
                    <p class="reviews-total_stars">5x</p>
                    <a href="#!" class="active">★</a>
                    <div class="reviews-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit neque iusto a necessitatibus fuga assumenda, reiciendis, porro eius quam modi eveniet quae quis quod similique, earum cupiditate itaque at asperiores?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum iusto impedit numquam voluptatum possimus alias. Sit repudiandae assumenda nobis ratione delectus cupiditate necessitatibus facere saepe id? Facere ipsam tenetur placeat Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae modi suscipit, eaque perspiciatis odio laborum libero, molestias ducimus deleniti fugiat inventore veritatis ea eos corporis sit velit explicabo ut soluta.
                    </div>
                </li>
                <li>
                    <img src="/icons/login.png">
                    <p class="reviews-username">Samuel Šteiner</p>
                    <p class="reviews-total_stars">5x</p>
                    <a href="#!" class="active">★</a>
                    <div class="reviews-text">
                        Lorem ipsum dolor sit aum doalias. Sit repudiandae assumenda nobis ratione delectus cupiditate necessitatibus facere saepe id? Facere ipsam tenetur placeat Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae modi suscipit, eaque perspiciatis odio laborum libero, molestias ducimus deleniti fugiat inventore veritatis ea eos corporis sit velit explicabo ut soluta.
                    </div>
                </li>
                <li>
                    <img src="/icons/login.png">
                    <p class="reviews-username">Samuel Šteiner</p>
                    <p class="reviews-total_stars">5x</p>
                    <a href="#!" class="active">★</a>
                    <div class="reviews-text">
                        Lorem ipsum dolor sit aum doalias. Sit repudiandae assumenda nobis ratione delectus cupiditate necessitatibus facere saepe id? Facere ipsam tenetur placeat Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae modi suscipit, eaque perspiciatis odio laborum libero, molestias ducimus deleniti fugiat inventore veritatis ea eos corporis sit velit explicabo ut soluta.
                    </div>
                </li>
                <li>
                    <img src="/icons/login.png">
                    <p class="reviews-username">Samuel Šteiner</p>
                    <p class="reviews-total_stars">5x</p>
                    <a href="#!" class="active">★</a>
                    <div class="reviews-text">
                        Lorem ipsum dolor sit aum doalias. Sit repudiandae assumenda nobis ratione delectus cupiditate necessitatibus facere saepe id? Facere ipsam tenetur placeat Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae modi suscipit, eaque perspiciatis odio laborum libero, molestias ducimus deleniti fugiat inventore veritatis ea eos corporis sit velit explicabo ut soluta.
                    </div>
                </li>
                <li>
                    <img src="/icons/login.png">
                    <p class="reviews-username">Samuel Šteiner</p>
                    <p class="reviews-total_stars">5x</p>
                    <a href="#!" class="active">★</a>
                    <div class="reviews-text">
                        Lorem ipsum dolor sit aum doalias. Sit repudiandae assumenda nobis ratione delectus cupiditate necessitatibus facere saepe id? Facere ipsam tenetur placeat Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae modi suscipit, eaque perspiciatis odio laborum libero, molestias ducimus deleniti fugiat inventore veritatis ea eos corporis sit velit explicabo ut soluta.
                    </div>
                </li>
            </ul>
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



