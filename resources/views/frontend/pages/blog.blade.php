@extends('frontend.app')
@section('banner')
    <div class="container py-5">
        <div class="row py-5">
            <div class="col text-center">
                <h1 class="text-light">Our Certificate & Online Programs for 2021</h1>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-8">
                <img class="img-fluid rounded" src="{{ asset('img/certificate.jpg') }}" alt="Certificate">
                <h3 class="my-3">Our Certificate & Online Programs for 2021</h3>
                <p class="text-muted">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio dolore in voluptatibus perferendis
                    voluptate, ex aspernatur dolor similique molestias. Nulla laboriosam, nihil dolor odit dolorum aliquam
                    natus corrupti obcaecati voluptatem dolores saepe itaque, aliquid esse unde quaerat enim nisi eveniet
                    ducimus dolorem velit, animi quos sit corporis ad? Nisi, eius ut, maiores unde ducimus consequuntur
                    praesentium quidem eaque amet fugiat repellat, laborum aliquid velit enim optio. Blanditiis labore
                    voluptate at nisi, inventore iste cum corrupti ipsam saepe culpa incidunt minus consequuntur quos amet
                    ea nihil, dolores ex minima repellat voluptates. Saepe ratione autem harum voluptatem sapiente at, fugit
                    deleniti amet, reprehenderit officia ipsa similique assumenda praesentium vel asperiores iste inventore
                    alias quod numquam? Iusto accusamus expedita reiciendis doloremque nam amet quibusdam alias ipsa
                    voluptatum quidem veniam, nesciunt exercitationem cumque soluta corporis nemo temporibus fugiat iste
                    iure molestias perferendis! Reprehenderit, rem! Recusandae numquam omnis nihil, blanditiis ducimus vel
                    porro enim quas iure sed odio ipsa quisquam mollitia velit repellendus aliquid commodi nam expedita
                    maiores, voluptatum explicabo tempore. Optio sint quia culpa, adipisci natus, laudantium voluptates
                    numquam reprehenderit non hic veniam a quaerat atque saepe ratione quae. Quisquam, est. Modi, delectus.
                    At quam ratione nostrum officiis asperiores eaque magni impedit distinctio sed!
                </p>
                <p class="text-muted">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio dolore in voluptatibus perferendis
                    voluptate, ex aspernatur dolor similique molestias. Nulla laboriosam, nihil dolor odit dolorum aliquam
                    natus corrupti obcaecati voluptatem dolores saepe itaque, aliquid esse unde quaerat enim nisi eveniet
                    ducimus dolorem velit, animi quos sit corporis ad? Nisi, eius ut, maiores unde ducimus consequuntur
                    praesentium quidem eaque amet fugiat repellat, laborum aliquid velit enim optio. Blanditiis labore
                    voluptate at nisi, inventore iste cum corrupti ipsam saepe culpa incidunt minus consequuntur quos amet
                    ea nihil, dolores ex minima repellat voluptates. Saepe ratione autem harum voluptatem sapiente at, fugit
                    deleniti amet, reprehenderit officia ipsa similique assumenda praesentium vel asperiores iste inventore
                    alias quod numquam? Iusto accusamus expedita reiciendis doloremque nam amet quibusdam alias ipsa
                    voluptatum quidem veniam, nesciunt exercitationem cumque soluta corporis nemo temporibus fugiat iste
                    iure molestias perferendis! Reprehenderit, rem! Recusandae numquam omnis nihil, blanditiis ducimus vel
                    porro enim quas iure sed odio ipsa quisquam mollitia velit repellendus aliquid commodi nam expedita
                    maiores, voluptatum explicabo tempore. Optio sint quia culpa, adipisci natus, laudantium voluptates
                    numquam reprehenderit non hic veniam a quaerat atque saepe ratione quae. Quisquam, est. Modi, delectus.
                    At quam ratione nostrum officiis asperiores eaque magni impedit distinctio sed!
                </p>
                <div class="card">
                    <div class="card-body">
                        <h5>Leave a comment</h5>
                        <form action="" method="post">
                            <div class="form-group my-3">
                                <input id="name" class="form-control bg-light" placeholder="Enter Name" type="text"
                                    name="name">
                            </div>
                            <div class="form-group my-3">
                                <input id="name" class="form-control bg-light" placeholder="Enter Email" type="email"
                                    name="email">
                            </div>
                            <div class="form-group my-3">
                                <textarea id="" class="form-control bg-light" name="comment" rows="5"
                                    placeholder="Your Cooment"></textarea>
                            </div>
                            <button type="button" class="btn btn-outline-danger">Post Coment</button>
                        </form>
                    </div>

                </div>
            </div>
            <div class="col-md-4 order-md-last order-first mb-5">
                <div class="card">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-info text-center" aria-current="true"><h6 class="m-0">Post Categories</h6></li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Business Analytics
                            <span class="badge bg-primary rounded-pill">14</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Data Science
                            <span class="badge bg-primary rounded-pill">2</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Machine Learning
                            <span class="badge bg-primary rounded-pill">1</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Business Analytics
                            <span class="badge bg-primary rounded-pill">14</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Data Science
                            <span class="badge bg-primary rounded-pill">2</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Machine Learning
                            <span class="badge bg-primary rounded-pill">1</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Business Analytics
                            <span class="badge bg-primary rounded-pill">14</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Data Science
                            <span class="badge bg-primary rounded-pill">2</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Machine Learning
                            <span class="badge bg-primary rounded-pill">1</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
