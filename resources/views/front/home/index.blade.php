@extends('front.layouts.layout')
@section('top')
    <link rel="stylesheet" href="{{ asset('front/css/product.css') }}">
@endsection
@section('bottom')
    <script src="{{ asset('front/js/counter.js') }}"></script>
@endsection

@section('content')
    <main class="hny-bg-dark">
        <!-- hero -->
        @include('front.components.hero')
        <!-- end hero -->

        {{-- why chose us --}}
        <section class="mt-0 mt-lg-5 py-0 py-lg-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 text-center">
                        <img src="images/clip.png" class="img-fluid clip" alt="" srcset="">
                    </div>
                    <div class="col-md-6">
                        <h2 class="text-white">Why choose us?</h2>
                        <p class="text-white mt-5">Kami merupakan pelopor dalam memanfaatkan teknologi IoT dan AI untuk
                            menciptakan solusi cerdas yang dapat mengubah cara
                            berbisnis yang produktif dan efisien.</p>
                        <div class="border border-white w-100 mt-5 mb-5"></div>
                        <div class="row">
                            <div class="col-4">
                                <h1 class="text-hny-quaternary"><span class="counter" data-speed="1000">97</span>%</h1>
                                <p class="text-white mt-3">Customers Satisfaction</p>
                            </div>
                            <div class="col-4">
                                <h1 class="text-hny-quaternary"><span class="counter" data-speed="1000">250</span>+</h1>
                                <p class="text-white mt-3">Trusted by Companies</p>
                            </div>
                            <div class="col-4">
                                <h1 class="text-hny-quaternary"><span class="counter" data-speed="1000">20</span>+</h1>
                                <p class="text-white mt-3">Profesional Experience</p>
                            </div>
                        </div>
                        <button class="btn btn-hny-secondary btn-lg text-white mt-4">Let's Get Started</button>
                    </div>
                </div>
            </div>
        </section>
        {{-- end why chose us --}}

        {{-- solution --}}
        <section class="solution mt-5 hny-bg-primary">
            <div class="container">
                <div class="text-center">
                    <h2 class="text-white">Hanaya for Bussiness Solutions</h2>
                    <p class="text-white mt-5 mb-0">Teknologi yang membantu digitalisasi bisnis anda</p>
                </div>
                <div class="row">
                    <div class="col-lg-4 mt-4mt-lg-0">
                        <div class="card bg-white text-center text-dark border-0">
                            <img src="{{ asset('images/icon/ic_videotron.png') }}" class="mx-auto" width="50px"
                                alt="videotrone">
                            <div class="card-body p-0">
                                <h5 class="card-title text-dark">Videotrone</h5>
                                <p class="card-text text-secondary">
                                    Media yang menampilkan gambar, video, atau teks menggunakan teknologi LED.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="card bg-white text-center text-dark border-0">
                            <img src="{{ asset('images/icon/ic_videowall.png') }}" class="mx-auto" width="50px"
                                alt="videotrone">
                            <div class="card-body p-0">
                                <h5 class="card-title text-dark">Video Wall</h5>
                                <p class="card-text text-secondary">
                                    Teknologi yang menggabungkan beberapa layar monitor satu layar besar.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="card bg-white text-center text-dark border-0">
                            <img src="{{ asset('images/icon/ic_kiosk.png') }}" class="mx-auto" width="50px"
                                alt="videotrone">
                            <div class="card-body p-0">
                                <h5 class="card-title text-dark">Kios K</h5>
                                <p class="card-text text-secondary">
                                    Teknologi untuk memberikan informasi & transaksi jual beli.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between px-2">
                    <h2 class="text-white">IT Solution for Your Business</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="card bg-white text-center text-dark border-0">
                            <img src="{{ asset('images/icon/ic_iot.png') }}" class="mx-auto" width="50px"
                                alt="videotrone">
                            <div class="card-body p-0">
                                <h5 class="card-title text-dark">Smart Building & IoT System</h5>
                                <p class="card-text text-secondary">
                                    Media yang menampilkan gambar, video, atau teks menggunakan teknologi LED.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="card bg-white text-center text-dark border-0">
                            <img src="{{ asset('images/icon/ic_data.png') }}" class="mx-auto" width="50px"
                                alt="videotrone">
                            <div class="card-body p-0">
                                <h5 class="card-title text-dark">Data Center</h5>
                                <p class="card-text text-secondary">
                                    Maintain availability and security of company data.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="card bg-white text-center text-dark border-0">
                            <img src="{{ asset('images/icon/ic_scurity.png') }}" class="mx-auto" width="50px"
                                alt="videotrone">
                            <div class="card-body p-0">
                                <h5 class="card-title text-dark">Security & Networking</h5>
                                <p class="card-text text-secondary">
                                    Responsible for managing the company's network security
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- end solution --}}

        {{-- review --}}
        @include('front.components.review')
        {{-- end review --}}

        {{-- benefit --}}
        <section class="benefit mt-5 mt-lg-5 py-5 py-lg-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <h2 class="text-white mb-5">
                            Benefit that set us
                        </h2>
                        <p class="text-white mb-5">
                            Solusi yang cerdas dan terhubung yang mengubah cara manusia berinteraksi dengan dunia.
                        </p>
                        <a href="javascript:void(0);">
                            <button class="btn btn-hny-secondary btn-lg text-white">
                                Learn More
                            </button>
                        </a>
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-2 col-md-6 col-12 d-none d-lg-block"></div>
                            <div class="col-lg-5 col-md-6 col-12 mt-3 mt-lg-0">
                                <div class="card card-benefit bg-white text-dark border-0 position-static">
                                    <img src="{{ asset('images/icon/ic_expert.png') }}" width="50" alt="videotrone">
                                    <div class="card-body p-0 pt-3">
                                        <p class="text-dark mb-0 text-left">
                                            Expert & Certified
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-6 col-12 mt-3 mt-lg-0">
                                <div class="card card-benefit bg-white text-dark border-0 position-static">
                                    <img src="{{ asset('images/icon/ic_service.png') }}" width="50" alt="videotrone">
                                    <div class="card-body p-0 pt-3">
                                        <p class="text-dark mb-0 text-left">
                                            Service Onsite
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-0 mt-lg-5  ">
                            <div class="col-lg-5 col-md-6 col-12 mt-3 mt-lg-0">
                                <div class="card card-benefit bg-white text-dark border-0 position-static">
                                    <img src="{{ asset('images/icon/ic_warranty.png') }}" width="50"
                                        alt="videotrone">
                                    <div class="card-body p-0 pt-3 ">
                                        <p class="text-dark mb-0 text-left">
                                            Warranty Replacement Unit
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-6 col-12 mt-3 mt-lg-0">
                                <div class="card card-benefit bg-white text-dark border-0position-static">
                                    <img src="{{ asset('images/icon/ic_support.png') }}" width="50"
                                        alt="videotrone">
                                    <div class="card-body p-0 pt-3">
                                        <p class="text-dark mb-0 text-left">
                                            24/7 Customer Support
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- end benefit --}}

        {{-- post --}}
        <section class="post hny-bg-primary py-5 py-lg-5 ">
            <div class="container">
                <h2 class="text-center text-white mb-4 mb-lg-5 pb-lg-5 pt- pt-lg-5">Stay up to date with Us</h2>
                <div class="row gap-4 gap-lg-0">
                    <div class="col-lg-3 mb-4 mb-lg-0">
                        <div class="card h-100">
                            <img src="images/post.png" class="card-img-top" alt="post">
                            <div class="card-body">
                                <h5 class="card-title">What are you looking for?</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, quod.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4 mb-lg-0">
                        <div class="card h-100">
                            <img src="images/post.png" class="card-img-top" alt="post">
                            <div class="card-body">
                                <h5 class="card-title">What are you looking for?</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, quod.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4 mb-lg-0">
                        <div class="card h-100">
                            <img src="images/post.png" class="card-img-top" alt="post">
                            <div class="card-body">
                                <h5 class="card-title">What are you looking for?</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, quod.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4 mb-lg-0">
                        <div
                            class="card border p-5 h-100 background-tranparent align-items-center justify-content-center ">
                            <div class="d-flex">
                                <img src="images/post.png" class="rounded-circle border border-light"
                                    style="aspect-ratio: 1;" width="40px">
                                <img src="images/post.png" class="rounded-circle border border-light"
                                    style="margin-left: -20px;aspect-ratio: 1;" width="40px">
                                <img src="images/post.png" class="rounded-circle border border-light"
                                    style="margin-left: -20px;aspect-ratio: 1;" width="40px">
                            </div>
                            <a href="javascript;;">
                                <h5 class="card-title text-white">Lebih banyak tentang Event Kami <i
                                        class="fa-solid fa-arrow-right"></i></h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- end post --}}
    </main>
@endsection
