<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    {{-- Owl CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css">
    {{-- Fontawesome Css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <header class="bg" style="background: url({{ asset('img/backpic.jpg') }}) no-repeat top; background-size: cover;">
        <div class="cover">
            @include('frontend.navbar.nav')
            @yield('banner')
        </div>
    </header>
    @yield('content')
    
    <footer class="about-us">
      <div class="container my-3 py-5">
        <div class="row">
          <div class="col-12 text-center">
            <h5>About Us</h5>
            <p class="text-muted">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum neque ducimus, fuga necessitatibus consequatur eaque voluptas illum corrupti assumenda ad, veritatis nesciunt eius iste quas placeat molestias! A, incidunt fuga?
            </p>
            <a href="#" class="text-danger fs-6 mx-1"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="text-danger fs-6 mx-1"><i class="fab fa-twitter"></i></a>
            <a href="#" class="text-danger fs-6 mx-1"><i class="fab fa-instagram"></i></a>
            <a href="#" class="text-danger fs-6 mx-1"><i class="fab fa-youtube"></i></a>
            <a href="#" class="text-danger fs-6 mx-1"><i class="fab fa-google-plus-g"></i></a>
            <p class="mt-3">Made with <a href="" class="text-danger fs-6 "><i class="far fa-heart"></i></a> by Ritesh Rai.</p>
          </div>
        </div>
      </div>
    </footer>

    {{-- Bootstrap Js --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    {{-- Owl Js --}}
    <script src="{{ asset('Owlcarousel/js/owl.carousel.min.js') }}"></script>
    {{-- Owl Carousel Scriptt --}}
    
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 1,
                        nav: false
                    },
                    900: {
                        items: 2,
                        nav: false,
                        loop: false
                    }
                }
            })
        })

    </script>
</body>

</html>
