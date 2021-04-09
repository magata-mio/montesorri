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
        <div class="row py-5">
            <h1>FAQ Lists</h1>
            <div class="col-md-8">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Accordion Item #1
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Accordion Item #2
                        </button>
                      </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Accordion Item #3
                        </button>
                      </h2>
                      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsectionh