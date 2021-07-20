@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>F1 Tickets</title>
        <!-- Favicon-->
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    </head>
    <body>
       
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                        @foreach($races as $race)
                        @if($loop->first)
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem"> Still avalaiable tickets: {{$race->capacity-$res}}</div>
                        @endif
                        @endforeach
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
                        @foreach($races as $race)
                        @if($loop->first)
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem"> Still avalaiable tickets: {{$race->capacity-$res2}}</div>
                        @endif
                        @endforeach
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
                        @foreach($races as $race)
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem"> Still avalaiable tickets: {{$race->capacity-$res3}}</div>
                        @endforeach
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
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <!-- Product image-->
                            <img class="card-img-top" src="{{URL::asset('/img/italy.png')}}" alt="Italy">
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Formula 1 Heineken Gran Premio D’italia 2021 (10 - 12 SEP)</h5>
                                    <p class="fst-italic fs-6">? - ?</p>
                                    <!-- Product price-->
                                    Sales is not opening yet
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto disabled" href="#">View details</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <!-- Product image-->
                            <img class="card-img-top" src="{{URL::asset('/img/japan.png')}}" alt="Japan">
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Formula 1 Honda Japanese Grand Prix 2021 (08 - 10 OCT)</h5>
                                    <p class="fst-italic fs-6">TBD - TBD</p>
                                    <!-- Product price-->
                                    Sales is not opening yet
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto disabled" href="#">View details</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <!-- Product image-->
                            <img class="card-img-top" src="{{URL::asset('/img/brazil.png')}}" alt="Brazil">
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Formula 1 Heineken Grande Prêmio De São Paulo 2021 (05 - 07 NOV)</h5>
                                    <p class="fst-italic fs-6">TBD - TBD</p>
                                    <!-- Product price-->
                                    Sales is not opening yet
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto disabled" href="#">View details</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <!-- Product image-->
                            <img class="card-img-top" src="{{URL::asset('/img/uae.png')}}" alt="United Arab Emirates">
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Formula 1 Etihad Airways Abu Dhabi Grand Prix 2021 (10 - 12 DEC)</h5>
                                    <p class="fst-italic fs-6">TBD - TBD</p>
                                    <!-- Product price-->
                                    Sales is not opening yet
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto disabled" href="#">View details</a></div>
                            </div>
                        </div>
                    </div>
                    
        </section>
        <!-- Footer-->
        <footer class="py-4 bg-dark fixed-bottom">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; F1 Ticket Booking 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
@endsection
