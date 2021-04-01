@extends('frontend.app')
@section('banner')
    <div class="container py-5">
        <div class="row py-5">
            <div class="col text-center">
                <h2 class="text-light">Our Courses</h2>
            </div>
        </div>
    </div>
@endsection
@section('content')
<section class="courses bg-light">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-10 mx-auto text-center title">
                <h1>Courses We Offer</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, natus!</p>
            </div>
        </div>
        <div class="row py-5">
            <div class="col-lg-4 col-md-6 col-sm-12 mx-auto my-3">
                <div class="card">
                    <div class="card-body text-center hover" style="background: #fff3f3">
                        <h5 class="text-uppercase text-danger fw-bolder">Intermediate</h5>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia
                            similique velit, libero laboriosam architecto possimus debitis molestias pariatur hic id
                            earum voluptate labore asperiores molestiae perferendis placeat, magni voluptas natus?
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mx-auto my-3">
                <div class="card">
                    <div class="card-body text-center hover" style="background: #fff3f3">
                        <h5 class="text-uppercase text-danger fw-bolder">Degree</h5>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia
                            similique velit, libero laboriosam architecto possimus debitis molestias pariatur hic id
                            earum voluptate labore asperiores molestiae perferendis placeat, magni voluptas natus?
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mx-auto my-3">
                <div class="card">
                    <div class="card-body text-center hover" style="background: #fff3f3">
                        <h5 class="text-uppercase text-danger fw-bolder">Post Graduation</h5>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia
                            similique velit, libero laboriosam architecto possimus debitis molestias pariatur hic id
                            earum voluptate labore asperiores molestiae perferendis placeat, magni voluptas natus?
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="facilities bg-light">
    <div class="container py-5">
        <div class="row">
            <div class="col-10 mx-auto text-center">
                <h2>Our Facilities</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, suscipit!</p>
            </div>
        </div>
        <div class="row py-5">
            <div class="col-md-4">
                <div class="card" style="border: none">
                    <img src="{{ asset('img/library.png') }}" class="img-fluid" alt="">
                    <div class="card-body text-center text-md-start bg-light height">
                        <h5>World Class Library</h5>
                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="border: none">
                    <img src="{{ asset('img/basketball.png') }}" class="img-fluid" alt="">
                    <div class="card-body text-center text-md-start bg-light height">
                        <h5>Largest Play Ground</h5>
                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="border: none">
                    <img src="{{ asset('img/cafeteria.png') }}" class="img-fluid" alt="">
                    <div class="card-body text-center text-md-start bg-light height">
                        <h5>Tasty & Healthy Food</h5>
                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection