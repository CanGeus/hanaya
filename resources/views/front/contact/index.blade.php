@extends('front.layouts.layout')
@section('top')
    <link rel="stylesheet" href="{{ asset('front/css/product.css') }}">
@endsection

@section('content')
    <!-- main -->
    <main class="hny-bg-dark">

        <!-- jumbotron -->
        <section class="jumbotron hny-bg-primary position-relative">
            <img src="{{ asset('images/contanct.png') }}" class="" alt="">
        </section>
        <!-- end jumbotron -->

        {{-- form --}}
        <section class="form mx-3 mx-md-5">
            <div class="card border-0">
                <div class="card-body">
                    <p class="text-hny-tertiary text-capitalize">home <i class="fa-solid fa-angle-right"></i> Contact Us
                    </p>
                    <h2 class="text-dark">Discuss with Us!</h2>
                    <p class="text-secondary">
                        Leave a note and we’ll respond immediately.
                    </p>
                    <form action="" class="row">
                        <div class="col-md-6">
                            <label for="fullName" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="fullName" placeholder="Full Name">
                        </div>
                        <div class="col-md-6">
                            <label for="cimpanyName" class="form-label">Company Name</label>
                            <input type="text" class="form-control" id="cimpanyName" placeholder="Company Name">
                        </div>
                        <div class="col-md-6 mt-4">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Your@company.com">
                        </div>
                        <div class="col-md-6 mt-4">
                            <label for="phoneNumber" class="form-label">Phone Number</label>
                            <input type="number" class="form-control" id="phoneNumber" placeholder="+62 123 456 789">
                        </div>
                        <div class="col-md-12 mt-4">
                            <label for="detail" class="form-label">Describe Your Project</label>
                            <input type="text" class="form-control" id="detail" placeholder="Detail Project">
                        </div>
                        <div class="col-md-6 mt-4">
                        </div>
                        <div class="col-md-6 mt-4">
                            <label for="captcha" class="form-label">Captcha</label>
                            <input type="text" class="form-control" id="captcha" placeholder="Fill The Captcha">
                        </div>
                        <button type="submit" class="btn btn-hny-secondary text-white mt-5">
                            Send message
                        </button>
                    </form>
                </div>
            </div>
        </section>
        {{-- end form --}}

        {{-- client --}}
        <section class="hny-bg-primary mt-5">
            @include('front.components.client')
        </section>
        {{-- end client --}}

    </main>
    <!-- end main -->
@endsection
