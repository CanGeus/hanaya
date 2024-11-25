@extends('front.layouts.layout')
@section('top')
    <link rel="stylesheet" href="{{ asset('front/css/product.css') }}">
@endsection

@section('bottom')
    <script src="{{ asset('front/js/counter.js') }}"></script>
@endsection

@section('content')
    <!-- main -->
    <main class="hny-bg-dark">
        <!-- jumbotron -->
        <section class="jumbotron hny-bg-primary position-relative">
            <img src="{{ asset('images/blog.png') }}" class="" alt="">
            <div class="card">
                <div class="card-body">
                    <p class="text-hny-tertiary text-capitalize">
                        home <i class="fa-solid fa-angle-right"></i>
                        About Us
                    </p>
                    <h2 class="text-dark">
                        kami adalah hanaya inovasi teknologi
                    </h2>
                    <p class="text-dark">
                        Merupakan perusahaan yang bergerak dibidang teknologi masa kini yang menggunakan Ai & IoT untuk
                        membuat suatu sistem yang dapat membuat bisnis lebih produktif & efisien
                    </p>
                </div>
            </div>
        </section>
        <!-- end jumbotron -->

        {{-- visi --}}
        <section class="hny-bg-dark py-5">
            <div class="container">
                <div class="row gap-5 gap-lg-0">
                    <div class="col-lg-6">
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
                    </div>
                    <div class="col-lg-6">
                        <h4 class="text-white">
                            "Menjadi pelopor global dalam memanfaatkan kekuatan Internet of Things (IoT) dan Artificial
                            Intelligence (AI) untuk menciptakan solusi yang cerdas dan terhubung yang mengubah bisnis anda
                            menjadi lebih produktif & efisien."
                        </h4>
                    </div>
                </div>
            </div>
        </section>
        {{-- end visi --}}

        {{-- misi --}}
        <section class="misi py-5 hny-bg-primary">
            <div class="container">
                <h2 class="text-white mb-5">Misi Kami</h2>
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <img src="{{ asset('images/handshake.png') }}" width="60px" alt="" srcset="">
                            <div class="card-body">
                                <h6 class="card-title">
                                    Inovasi Terdepan
                                </h6>
                                <p class="card-text text-secondary ">
                                    Kami berkomitmen untuk terus-menerus memimpin dalam mengembangkan solusi loT dan Al yang
                                    revolusioner, yang memungkinkan efisiensi, kecerdasan, dan kenyamanan yang tak
                                    tertandingi dalam berbagai aspek kehidupan sehari-hari.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <img src="{{ asset('images/handshake.png') }}" width="60px" alt="" srcset="">
                            <div class="card-body">
                                <h6 class="card-title">
                                    Peningkatan Kualitas Hidup
                                </h6>
                                <p class="card-text text-secondary ">
                                    Kami bertujuan untuk meningkatkan kualitas hidup manusia dengan menghadirkan teknologi
                                    yang dapat mengoptimalkan proses, mengurangi limbah, meningkatkan produktivitas, dan
                                    memberikan solusi yang cerdas untuk tantangan global.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <img src="{{ asset('images/handshake.png') }}" width="60px" alt="" srcset="">
                            <div class="card-body">
                                <h6 class="card-title">Kemitraan Kolaboratif</h6>
                                <p class="card-text text-secondary ">
                                    Kami akan berkolaborasi dengan perusahaan, pemerintah, dan komunitas untuk menciptakan
                                    ekosistem yang mendukung perkembangan teknologi IoT dan Al.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <img src="{{ asset('images/handshake.png') }}" width="60px" alt="" srcset="">
                            <div class="card-body">
                                <h6 class="card-title">Keberlanjutan</h6>
                                <p class="card-text text-secondary ">
                                    Kami akan mendukung keberlanjutan lingkungan dengan mengembangkan solusi yang
                                    meminimalkan dampak lingkungan dan memberikan solusi berkelanjutan untuk masalah global.

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <img src="{{ asset('images/handshake.png') }}" width="60px" alt="" srcset="">
                            <div class="card-body">
                                <h6 class="card-title">
                                    Kepuasan Pelanggan
                                </h6>
                                <p class="card-text text-secondary ">
                                    Pelanggan adalah aset berharga kami. Kami akan terus mendengarkan dan memahami kebutuhan
                                    pelanggan kami, serta memberikan layanan yang melebihi harapan mereka.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <img src="{{ asset('images/handshake.png') }}" width="60px" alt="" srcset="">
                            <div class="card-body">
                                <h6 class="card-title">
                                    Etika dan Keamanan
                                </h6>
                                <p class="card-text text-secondary ">
                                    Kami akan menjalankan bisnis dengan integritas dan berkomitmen untuk menjaga etika yang
                                    ketat dalam pengembangan dan penggunaan teknologi IoT dan Al, serta memprioritaskan
                                    keamanan data dan privasi pengguna.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- end misi --}}

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
                                    <img src="{{ asset('images/icon/ic_service.png') }}" width="50"
                                        alt="videotrone">
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

        {{-- client --}}
        <section class="hny-bg-primary mt-5">
            @include('front.components.client')
        </section>
        {{-- end client --}}

    </main>
    <!-- end main -->
@endsection
