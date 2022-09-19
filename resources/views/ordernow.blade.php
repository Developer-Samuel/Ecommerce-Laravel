<?php
    $delivery = 10;
    $total_amount = $total + $delivery;
?>
@extends('master')
@section('content')

<main class="main-order">
    <div class="order">
        <div class="order__payment-title">
            <h1>Spôsob platby</h1>
        </div>
        <hr id="hr">
        <form action="/orderplace" method="POST">
        @csrf
        <table class="order__payment-method">
            <tr>
                <th>Online</th>
                <td>
                    <input type="radio" value="card" name="payment">
                    <img src="/icons/card.png">
                    <p class="type">Kartou online</p>
                    <p class="price">Poštovné: 3 €</p>
                </td>
                <td>
                    <input type="radio" value="google-pay" name="payment">
                    <img src="/icons/google-pay.png">
                    <p class="type">Google Pay</p>
                    <p class="price">Poštovné: 3 €</p>
                </td>
                <td>
                    <input type="radio" value="paypal" name="payment">
                    <img src="/icons/paypal.png">
                    <p class="type">PayPal</p>
                    <p class="price">Poštovné: 3 €</p>
                </td>
                <td>
                    <input type="radio" value="bitcoin" name="payment">
                    <img src="/icons/bitcoin.png">
                    <p class="type">Platba kryptomenou</p>
                    <p class="price">Poštovné: 2 €</p>
                </td>
            </tr>

            <tr>
                <th>Na mieste</th>
                <td>
                    <input type="radio" value="cash-payment" name="payment">
                    <img src="/icons/cash-payment.png">
                    <p class="type">Platba v hotovosti pri kurierovi</p>
                    <p class="price">Poštovné: 4.50 €</p>
                </td>
            </tr>
        </table>

        <div class="order__contact-title">
            <h1>Kontaktné údaje</h1>
        </div>
        <hr id="hr2">

        <div class="order__contact-data">
            <input name="country" type="text" placeholder="Krajina" required>
            <input name="city" type="text" placeholder="Mesto" required>
            <input name="postal_code" type="text" placeholder="PSČ" required>
            <input name="street" type="text" placeholder="Ulica" required>
            <input name="house_number" type="text" placeholder="Číslo domu" required>
        </div>

        <div class="order__amount-title">
            <h2>Celková čiastka</h2>
        </div>
        <hr id="hr3">

        <table class="order__amount-table">
            <tbody>
              <tr>
                <th>Amount</th>
                <td>$ {{$total}}</td>
              </tr>
              <tr>
                <th>Delivery</th>
                <td>$ {{$delivery}}</td>
              </tr>
              <tr>
                <th>Total Amount</th>
                <td>$ {{$total_amount}}</td>
              </tr>
            </tbody>
          </table>

        <button class="order__complete-btn">
            Objednať
        </button>
        </form>
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



