@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>F1 Tickets - Netherlands GP</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Product section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6">
                        <img class="card-img-top mb-5 mb-md-0" src="{{URL::asset('/img/netherlands_track.jpg')}}" alt="Netherlands GP - Track" /></div>
                    <div class="col-md-6">
                        <h1 class="display-5 fw-bolder">Formula 1 Heineken Dutch Grand Prix 2021</h1>
                        <div class="fs-5 mb-5">
                            <span>€300 - €600</span>
                        </div>
                        <p class="lead">The 2021 Hungarian Grand Prix is scheduled to take place from July 30 to August 1. Prices are per person and valid for the entire race weekend.</p>
                        <div class="d-flex flex-column">
                        @auth
                        <form action="{{ route('cart.store') }}" method="POST">
                        @csrf
                        <div class="p-2">
                        <select id="tier" name="tier" class="form-select calculate" aria-label="Tier" required>
                        <option value="1" data-price="300" selected>Bronze</option>
                        <option value="2" data-price="400">Silver</option>
                        <option value="3"  data-price="550">Gold</option>
                        </select>
                        <input name="name" value="Formula 1 Heineken Dutch Grand Prix 2021 (03 - 05 SEP)" type="hidden">
                        <input name="race" value="3" type="hidden">
                        <input type="hidden" id ="tieR" value=""  name="tieR">
                        <input type="hidden" id ="typE" value=""  name="typE">
                        <input type="hidden" value="https://cdn.countryflags.com/thumbs/netherlands/flag-400.png"  name="image">
</div>
<div class="p-2">
                        <select id="type" name="type"  class="form-select calculate" aria-label="Type" required>
                        <option value="1" data-price="0" selected>Kids</option>
                        <option value="2" data-price="50">Adults</option>
                        </select>
</div>
<div class="p-2">
<div class="d-flex justify-content-center mt-3">
                        <input oninput="quant()" id ="quantity" name="quantity" class="form-control text-center me-3" id="inputQuantity" type="num" value="1" maxlength="2"  min="1" max="99" required  style="max-width: 3rem"/>
</div>
                        <div class="d-flex justify-content-center mt-3">
                            <button class="btn btn-outline-dark flex-shrink-0 text-center" type="submit">
                                <i class="bi-cart-fill me-1"></i>
                                Add to cart
</button>
</div>
<div class="d-flex justify-content-end mt-5">
<h1>€</h1><h1 name="price" id ="item-price">300</h1>
<input id="total" type="hidden" name="totalz" value="">
</div>
</form>
</div>
@else
<div class="alert alert-danger" role="alert">
Log in to buy your ticket.
</div>
@endauth
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Related items section-->
        <section class="py-5 bg-light">
            <div class="container px-4 px-lg-5 mt-5">
                <h2 class="fw-bolder mb-4">Another available races</h2>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="{{URL::asset('/img/hungary.png')}}" alt="Hungary">
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Formula 1 Magyar Nagydíj 2021 (30 JUL - 01 AUG)</h5>
                                    <p class="fst-italic fs-6">Bronze - VIP</p>
                                    <!-- Product price-->
                                    €25.00 - €1000.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{ url('/hungary') }}">View details</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="{{URL::asset('/img/belgium.png')}}" alt="Belgium">
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Formula 1 Rolex Belgian Grand Prix 2021 (27 - 29 AUG)</h5>
                                    <p class="fst-italic fs-6">Bronze - VIP</p>
                                    <!-- Product price-->
                                    €20.00 - €2000.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{ url('/belgium') }}">View details</a></div>
                            </div>
                        </div>
                    </div>
        </section>
        <!-- Footer-->
        <footer class="py-4 bg-dark fixed-bottom">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; F1 Ticket Booking 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>¨
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.js"></script>
<script type="text/javascript">
function quant() {
    var quantity = document.getElementById("quantity").value;
    if(isNaN(quantity))
    return 0;
    else
    return quantity;
}
var basePrice = 0;
document.getElementById("total").value = document.getElementById("item-price").innerHTML;
var tier = $("#tier>option:selected").text();
document.getElementById("tieR").value = tier;
var type = $("#type>option:selected").text();
document.getElementById("typE").value = type;




$(".calculate").change(function () {
    
    newPrice = basePrice;
    $(".calculate option:selected").each(function () {
        newPrice += parseInt($(this).data('price'));
        
        console.log(typeof newPrice);
    });
    newPrice *=quant();
    $("#item-price").html(newPrice);
    var tier = $("#tier>option:selected").text();
    document.getElementById("tieR").value = tier;
    var type = $("#type>option:selected").text();
    document.getElementById("typE").value = type;
    document.getElementById("total").value = document.getElementById("item-price").innerHTML;
    
});
</script>
    </body>
</html>
@endsection
