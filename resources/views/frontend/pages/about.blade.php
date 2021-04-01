@extends('frontend.app')
@section('banner')
    <div class="container py-5">
        <div class="row">
            <div class="col text-center py-5">
                <h2 class="text-light fw-bold">{{ $title }}</h2>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container py-5">
        <div class="row py-5">
            <div class="col-md-6">
                <h1>We are the world's largest university</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente culpa dignissimos hic corporis magnam exercitationem labore quaerat, perferendis, fugit optio ea? Commodi accusantium qui at optio soluta sed accusamus incidunt reprehenderit enim, dicta nulla ratione, sint ullam delectus facere doloremque, temporibus ipsum deserunt totam error labore. Quia cum deserunt sapiente libero officia ipsum rem porro suscipit voluptatibus pariatur laudantium at, quidem nisi voluptates minima consequatur in voluptas, eveniet incidunt labore expedita illo nulla quaerat. Accusantium saepe minus inventore architecto obcaecati, possimus suscipit vero pariatur facilis blanditiis maxime itaque id earum aliquid, labore culpa quo sapiente eveniet? Qui at ab enim?</p>
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="{{ $title=="about" ? asset('img/banner.png') : asset('img/about.jpg') }}" alt="">
            </div>
        </div>
    </div>
@endsection