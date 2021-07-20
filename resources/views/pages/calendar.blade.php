@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>F1 Tickets - Calendar</title>
        <!-- Favicon-->
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/js-year-calendar@latest/dist/js-year-calendar.min.css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/calendar.css') }}" rel="stylesheet" type="text/css" >
        
    </head>
    <body>
       
        <!-- Section-->
        <section>
        <div class="container mt-5 mb-5">
        <div id="calendar"></div>
        
</div>
        </section>
        <!-- Footer-->
        <footer class="py-4 bg-dark fixed-bottom">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; F1 Ticket Booking 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        
        <script src="https://unpkg.com/js-year-calendar@latest/dist/js-year-calendar.min.js"></script>
        <script src="{{ asset('js/calendar.js') }}" defer></script>
    </body>
</html>
@endsection