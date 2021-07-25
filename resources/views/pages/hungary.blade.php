@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>F1 Tickets - Hungary GP</title>
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
                        <img class="card-img-top mb-5 mb-md-0" src="{{URL::asset('/img/hungary_track.jpg')}}" alt="Hungary GP - Track" /></div>
                    <div class="col-md-6">
                        <h1 class="display-5 fw-bolder">Formula 1 Magyar Nagydíj 2021</h1>
                        <div class="fs-5 mb-5">
                            <span>€25 - €1000</span>
                        </div>
                        <p class="lead">The 2021 Hungarian Grand Prix is scheduled to take place from July 30 to August 1. Prices are per person and valid for the entire race weekend.</p>
                        <div class="d-flex">
                        @auth
                        <select class="form-select" aria-label="Options">
                        <option selected>Choose category</option>
                        <option value="25">Bronze (Kids) - €25</option>
                        <option value="120">Bronze (Adult) - €120</option>
                        <option value="25">Silver (Kids) - €25</option>
                        <option value="205">Silver (Adult) - €205</option>
                        <option value="25">Gold (Kids) - €25</option>
                        <option value="360">Gold (Adult) - €360</option>
                        <option value="1000">VIP - €1000</option>
                        </select>
                        <br>
                            <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                            <a class="btn btn-outline-dark flex-shrink-0" href="{{ url('/cart') }}"  type="button">
                                <i class="bi-cart-fill me-1"></i>
                                Add to cart
                            </a>
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
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <!-- Product image-->
                            <img class="card-img-top" src="{{URL::asset('/img/netherlands.png')}}" alt="Netherlands">
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Formula 1 Heineken Dutch Grand Prix 2021 (03 - 05 SEP)</h5>
                                    <p class="fst-italic fs-6">Bronze - Gold</p>
                                    <!-- Product price-->
                                    €300.00 - €600.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{ url('/netherlands') }}">View details</a></div>
                            </div>
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
    </body>
</html>
@endsection
