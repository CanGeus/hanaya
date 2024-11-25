@extends('front.layouts.layout')
@push('meta')
    <meta name="title"
        content="Interactive Flat Panel (IFP) – Solusi Teknologi Terbaik untuk Kelas dan Bisnis | PT Hanaya Inovasi Teknologi">
    <meta name="keywords"
        content="interactive flat panel, IFP, layar interaktif, smart board, teknologi pendidikan, smart classroom, layar sentuh, teknologi bisnis, interactive whiteboard, interactive display, solusi teknologi interaktif">
    <meta name="description"
        content="Temukan solusi teknologi canggih dengan Interactive Flat Panel (IFP) – layar interaktif yang dirancang untuk meningkatkan pengalaman belajar di kelas dan kolaborasi bisnis. Dengan desain inovatif dan fitur canggih, IFP ideal untuk ruang kelas pintar dan ruang rapat modern. Cari tahu lebih lanjut di PT Hanaya Inovasi Teknologi.">
@endpush
@section('top')
    <link rel="stylesheet" href="{{ asset('front/css/product.css') }}">
@endsection

@section('content')
    <main class="hny-bg-dark">

        <!-- jumbotron -->
        <section class="jumbotron hny-bg-primary position-relative">
            <img src="{{ asset('images/starlink.png') }}" class="" alt="">
            <div class="card">
                <div class="card-body">
                    <p class="text-hny-tertiary text-capitalize">
                        home <i class="fa-solid fa-angle-right"></i>
                        Product <i class="fa-solid fa-angle-right"></i>
                        IFP
                    </p>
                    <h2 class="text-dark">
                        Benefit of Interactive Flat Panel Hanaya
                    </h2>
                    <p class="text-dark">
                        Tingkatkan produktivitas bisnis anda dengan jangkauan internet lebih luas & tanpa hambatan
                        menggunakan Starlink
                    </p>
                </div>
            </div>
        </section>
        <!-- end jumbotron -->

        <!-- client -->
        @include('front.components.client')
        <!-- end client -->

        {{-- benefit --}}
        <section class="solution mt-0 mt-lg-5">
            <div class="container">
                <div class="text-center">
                    <h2 class="text-white">
                        Benefit of Our Starlink
                    </h2>
                    <p class="text-white mt-5 mb-0">
                        Layanan aftersales terbaik dan ditangani oleh tenaga ahli bersertifikat
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-4 mt-4mt-lg-0">
                        <div class="card bg-white text-left text-dark border-0 h-100">
                            <img src="{{ asset('images/icon/ic_expert.png') }}" class="" width="50px"
                                alt="videotrone">
                            <div class="card-body p-0">
                                <h5 class="card-title text-dark">Tenaga Ahli & Bersertifikat</h5>
                                <p class="card-text text-secondary">
                                    Teknisi yang memiliki keterampilan khusus yang sudah ber-sertifikat dan mempunyai jam
                                    terbang tinggi.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="card bg-white text-left text-dark border-0 h-100">
                            <img src="{{ asset('images/icon/ic_service.png') }}" class=""
                                width="50px
                                alt="videotrone">
                            <div class="card-body p-0">
                                <h5 class="card-title text-dark">
                                    Service Onsite
                                </h5>
                                <p class="card-text text-secondary">
                                    Pelayanan yang diberikan secara langsung di lokasi atau tempat fisik di mana layanan
                                    tersebut dibutuhkan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="card bg-white text-left text-dark border-0 h-100">
                            <img src="{{ asset('images/icon/ic_warranty.png') }}" class=""
                                width="50px
                                alt="videotrone">
                            <div class="card-body p-0">
                                <h5 class="card-title text-dark">
                                    Garansi Replacement Produk
                                </h5>
                                <p class="card-text text-secondary">
                                    Jaminan produk kami ganti dengan yang baru jika ada kerusakan dengan ketentuan pabrikan.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- benefit --}}

        {{-- product --}}
        @include('front.components.product')
        {{-- end product --}}

        {{-- story --}}
        @include('front.components.story')
        {{-- end story --}}

        {{-- review --}}
        @include('front.components.review')
        {{-- end review --}}

        {{-- price --}}
        @include('front.components.price')
        {{-- end price --}}

    </main>
@endsection
