@extends('frontend.app')
@section('banner')
    <div class="container py-5">
        <div class="row py-5">
            <div class="col text-center">
                <h2 class="text-light fw-bold">Contact Us</h2>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-12 rounded">
                <iframe class="rounded" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14242.437690194829!2d87.2834184!3d26.8205624!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xca53528b023cb8f2!2sDharan%20Montessori%20Academy!5e0!3m2!1sen!2snp!4v1616463248568!5m2!1sen!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-6">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-start align-items-center">
                      <div>
                          <span class="fs-4 text-danger"><i class="fas fa-home"></i></span>
                      </div>
                      <div class="ps-3">
                          <span class="fs-5 text-secondary fw-bold">Dharan-9, Gautam Path</span>
                          <br>
                          <span class="text-muted">Dharan, Sunsari, Nepal</span>
                      </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-start align-items-center">
                        <div>
                            <span class="fs-4 text-danger"><i class="fas fa-phone-alt"></i></span>
                        </div>
                        <div class="ps-3">
                            <span class="fs-5 text-secondary fw-bold">+977-9804090266</span>
                            <br>
                            <span class="text-muted">Sunday To Friday 7AM to 5PM</span>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-start align-items-center">
                        <div>
                            <span class="fs-4 text-danger"><i class="far fa-envelope"></i></span>
                        </div>
                        <div class="ps-3">
                            <span class="fs-5 text-secondary fw-bold">paritesh2020@gmail.com</span>
                            <br>
                            <span class="text-muted">Email us your query</span>
                        </div>
                    </li>
                  </ul>
            </div>
            <div class="col-md-6 ">
                <form action="" method="post">
                    <div class="form-group my-3">
                        <input id="" class="form-control" placeholder="Enter Your Name" type="text" name="">
                    </div>
                    <div class="form-group my-3">
                        <input id="" class="form-control" placeholder="Enter Your address" type="text" name="">
                    </div>
                    <div class="form-group my-3">
                        <input id="" class="form-control" placeholder="Enter Your Subject" type="text" name="">
                    </div>
                    <div class="form-group my-3">
                        <textarea id="" class="form-control" placeholder="Message" name="" rows="7"></textarea>
                    </div>
                    <button type="submit" class="btn btn-outline-danger">Send Message</button>
                </form>
            </div>
        </div>
    </div>
@endsection