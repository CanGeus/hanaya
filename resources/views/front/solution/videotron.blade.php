@extends('front.layouts.layout')
@push('meta')
    <meta name="title" content="Penyedia Videotron & Videowall Indonesia">
    <meta name="keywords"
        content="Penyedia Videotron, Penyedia Videowall, videotron, videowall, layar LED, Visual Display, videotron indoor, videotron outdoor">
    <meta name="description"
        content="Penyedia videotron dan videowall berpengalaman lebih dari 9 Tahun dengan garansi replacement selama 1 tahun. Videotron dan videowall kami menghadirkan gambar berkualitas tinggi untuk indoor maupun outdoor.">
@endpush
@section('top')
    <link rel="stylesheet" href="{{ asset('front/css/product.css') }}">
@endsection

@section('content')
    <main class="hny-bg-dark">
        {{-- jumbotron --}}
        <section class="jumbotron hny-bg-primary position-relative">
            <img src="{{ asset('images/smartclass.png') }}" class="" alt="">
            <div class="card">
                <div class="card-body">
                    <p class="text-hny-tertiary text-capitalize">
                        home <i class="fa-solid fa-angle-right"></i>
                        Solution <i class="fa-solid fa-angle-right"></i>
                        Videotron & Video Wall
                    </p>
                    <h2 class="text-dark">
                        Penyedia Videotron & Videowall Terbaik Dengan LED Vision Berkualitas Tinggi
                    </h2>
                    <p class="text-dark">
                        Penyedia videotron & Videowall resmi yang bersertifikat dengan kuualitas produk unggulan dan layanan
                        aftersales terbaik.
                    </p>
                </div>
            </div>
        </section>
        {{-- end jumbotron --}}
        {{-- client --}}
        @include('front.components.client')
        {{-- end client --}}

        {{-- solution --}}
        <section class="solution mt-0 mt-lg-5">
            <div class="container">
                <div class="text-center">
                    <h2 class="text-white">
                        Benefit of Videotron & Videowall Hanaya
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
        {{-- end solution --}}

        {{-- typography --}}
        <section class="topografi py-5">
            <div class="container">
                <div class="row gap-5 gap-lg-0">
                    <div class="col-lg-6 align-self-center text-center">
                        <img src="../../images/topografi 2.png" class="img-fluid" alt="topografi">
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <p class="text-hny-secondary text-uppercase">Topografi sistem</p>
                        <h2 class="text-white">
                            More Interactive with LED Visual Solutions
                        </h2>
                        <p class="text-white mt-4">
                            VIdeotron & Videowall dengan kualitas visual terbaik
                        </p>
                        <ul class="p-0">
                            <li class="text-white d-flex align-items-center">
                                <div class="icon-circle">
                                    <span>1</span>
                                </div>
                                <div class="mx-3">
                                    <h5 class="mb-0">
                                        Produk TKDN 46,69%
                                    </h5>
                                    <p>
                                        Berfungsi mengambil video selama proses pembelajaran.
                                    </p>
                                </div>
                            </li>
                            <li class="text-white d-flex align-items-center">
                                <div class="icon-circle">
                                    <span>2</span>
                                </div>
                                <div class="mx-3">
                                    <h5 class="mb-0">
                                        Resolution : 1920x1080 Full HD
                                    </h5>
                                    <p>
                                        Poses pembelajaran berfokus pada tampilan materi interaktif.
                                    </p>
                                </div>
                            </li>
                            <li class="text-white d-flex align-items-center">
                                <div class="icon-circle">
                                    <span>3</span>
                                </div>
                                <div class="mx-3">
                                    <h5 class="mb-0">
                                        Network Station
                                    </h5>
                                    <p>
                                        Pusat sumber koneksi selama proses pembelajaran.
                                    </p>
                                </div>
                            </li>
                            <li class="text-white d-flex align-items-center">
                                <div class="icon-circle">
                                    <span>4</span>
                                </div>
                                <div class="mx-3">
                                    <h5 class="mb-0">
                                        Control Station
                                    </h5>
                                    <p>
                                        Medium pegajar untuk mengontrol proses pembelajaran.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        {{-- end typography --}}

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
