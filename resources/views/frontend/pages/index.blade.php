@extends('frontend.app')
@section('banner')
<div class="container py-5">
    <div class="row my-5">
        <div class="banner py-5 d-flex align-items-center justify-content-center">
            <div class="content py-5 text-center">
                <h1 class="text-light display-4" style="font-weight: 600">Montessori Kindergarten Dharan</h1>
                <p class="text-light">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde,
                    architecto consectetur accusantium obcaecati animi sint?</p>
                <a href="/about"><button type="submit" class="btn button">Visit us to know more</button></a>
            </div>
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
<section class="campus py-5 ">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto text-center">
                <h2>Our Whole Campus</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem, corporis!</p>
            </div>
        </div>
        <div class="row py-5">
            <div class="col-md-4 col-sm-6 mx-auto text-center">
                <div class="main">
                    <img src="{{ asset('img/london.png') }}" alt="image-1" class="img-fluid" width="100%">
                    <div class="layer">
                        <h3>London Class</h3>
                        <p class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis quasi
                            totam tempore ipsum aut soluta, dignissimos enim laboriosam veritatis ipsa sapiente
                            vitae maxime maiores quisquam neque magnam repellendus quis sequi.</p>
                    </div>
                </div>

            </div>
            <div class="col-md-4 col-sm-6 mx-auto text-center">
                <div class="main">
                    <img src="{{ asset('img/washington.png') }}" alt="image-1" class="img-fluid" width="100%">
                    <div class="layer">
                        <h3>Washington Class</h3>
                        <p class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis quasi
                            totam tempore ipsum aut soluta, dignissimos enim laboriosam veritatis ipsa sapiente
                            vitae maxime maiores quisquam neque magnam repellendus quis sequi.</p>
                    </div>
                </div>

            </div>
            <div class="col-md-4 col-sm-6 mx-auto text-center">
                <div class="main">
                    <img src="{{ asset('img/newyork.png') }}" alt="image-1" class="img-fluid" width="100%">
                    <div class="layer">
                        <h3>Newyork Class</h3>
                        <p class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis quasi
                            totam tempore ipsum aut soluta, dignissimos enim laboriosam veritatis ipsa sapiente
                            vitae maxime maiores quisquam neque magnam repellendus quis sequi.</p>
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
<section class="testimonial">
    <div class="container py-5">
        <div class="row py-5">
            <div class="col-10 mx-auto text-center">
                <h2>What our teachers say</h2>
                <p class="text-muted">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero, labore!</p>
            </div>
        </div>
        <div class="row py-5">
          <div class="col-md-10 mx-auto">
            <div class="owl-carousel owl-theme">
              <div class="item mb-5 d-flex justify-content-center align-items-center border">
                <div class="img p-4">
                  <img class="" src="{{ asset('img/user1.jpg') }}" alt="">
                </div>
                <div class="content">
                  <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero molestiae consectetur blanditiis maxime quasi totam praesentium quaerat provident ipsam qui!</p>
                  <h5 class="text-dark">Kanchan Pradhan</h5>
                </div>
              </div>
              <div class="item mb-5 d-flex justify-content-center align-items-center border">
                <div class="img p-4">
                  <img class="" src="{{ asset('img/user2.jpg') }}" alt="">
                </div>
                <div class="content">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero molestiae consectetur blanditiis maxime quasi totam praesentium quaerat provident ipsam qui!</p>
                  <h5>Kanchan Pradhan</h5>
                </div>
              </div>
              <div class="item mb-5 d-flex justify-content-center align-items-center border">
                <div class="img p-4">
                  <img class="" src="{{ asset('img/user1.jpg') }}" alt="">
                </div>
                <div class="content">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero molestiae consectetur blanditiis maxime quasi totam praesentium quaerat provident ipsam qui!</p>
                  <h5>Kanchan Pradhan</h5>
                </div>
              </div>
              <div class="item mb-5 d-flex justify-content-center align-items-center border">
                <div class="img p-4">
                  <img class="" src="{{ asset('img/user2.jpg') }}" alt="">
                </div>
                <div class="content">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero molestiae consectetur blanditiis maxime quasi totam praesentium quaerat provident ipsam qui!</p>
                  <h5>Kanchan Pradhan</h5>
                </div>
              </div>
              <div class="item mb-5 d-flex justify-content-center align-items-center border">
                <div class="img p-4">
                  <img class="" src="{{ asset('img/user1.jpg') }}" alt="">
                </div>
                <div class="content">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero molestiae consectetur blanditiis maxime quasi totam praesentium quaerat provident ipsam qui!</p>
                  <h5>Kanchan Pradhan</h5>
                </div>
              </div>
              <div class="item mb-5 d-flex justify-content-center align-items-center border">
                <div class="img p-4">
                  <img class="" src="{{ asset('img/user2.jpg') }}" alt="">
                </div>
                <div class="content">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero molestiae consectetur blanditiis maxime quasi totam praesentium quaerat provident ipsam qui!</p>
                  <h5>Kanchan Pradhan</h5>
                </div>
              </div>
          </div>
          </div>
          
        </div>
    </div>
</section>
<section class="contact-us" >
    <div class="container" >
      <div class="bg" style="background: url({{ asset('img/banner2.jpg') }}) top; border-radius:10px">
        <div class="cover">
          <div class="row px-0 py-3">
            <div class="col-md-8 col-sm-6 mx-auto py-5" >
              <div class="text-center py-md-5" >
                <h2 class="text-capitalize text-white">Enroll for Various online courses anywhere from the World</h2>
                <a href="/contact" class="btn button my-3" style="border-radius: 0">Contact Us</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection