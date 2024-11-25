@extends('front.layouts.layout')
@section('top')
    <link rel="stylesheet" href="{{ asset('front/css/product.css') }}">
@endsection

@section('content')
    <!-- main -->
    <main class="hny-bg-dark">

        <!-- jumbotron -->
        <section class="hny-bg-dark">
            <img src="{{ asset('images/detailblog.png') }}" class="bg-white img-fluid w-100" alt="">
        </section>
        <!-- end jumbotron -->

        {{-- article --}}
        <div class="container py-5">
            <div class="row gap-5 gap-lg-0">
                <div class="col-lg-4">
                    <p class="text-hny-quaternary text-uppercase">
                        home > Blog
                    </p>
                    <aside>
                        <div class="card hny-bg-primary d-flex flex-column gap-3" style="padding: 32px 42px">
                            <h5 class="text-white">
                                Table of Content
                            </h5>
                            <a href="" class="text-hny-quaternary">
                                Introduction
                            </a>
                            <a href="" class="text-hny-secondary">
                                Software $ Tools
                            </a>
                            <a href="" class="text-hny-secondary">
                                Development Methode
                            </a>
                            <a href="" class="text-hny-secondary">
                                Conclusion
                            </a>
                        </div>
                    </aside>
                </div>
                <div class="col-lg-8">
                    <article class="d-flex flex-column gap-3">
                        <h1 class="text-white">
                            Komitmen Kami dalam Bidang Teknologi di Indonesia
                        </h1>
                        <p class="text-hny-quaternary">
                            17 Jan 2022
                        </p>
                        <hr class="text-hny-secondary">
                        <h5 class="text-white">
                            Introduction
                        </h5>
                        <p class="text-white">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ullamcorper mattis lorem non.
                            Ultrices praesent amet ipsum justo massa. Eu dolor aliquet risus gravida nunc at feugiat
                            consequat purus. Non massa enim vitae duis mattis. Vel in ultricies vel fringilla.
                        </p>
                        <div class="">
                            <img src="{{ asset('images/detail-blog.png') }}" class="img-fluid" alt=""
                                srcset="">
                            <p class="text-white mt-3 mb-0 text-sm fs-6 fw-lighter fst-italic">
                                Image courtesy of Laura Davidson via Unsplash
                            </p>
                        </div>
                        <div class="text-white border-start border-info-subtle px-4">
                            <h5>
                                “In a world older and more complete than ours they move finished and complete, gifted with
                                extensions of the senses we have lost or never attained, living by voices we shall never
                                hear.”
                            </h5>
                            <p>— Olivia Rhye, Product Designer</p>
                        </div>
                        <h5 class="text-white">
                            Software & Tools
                        </h5>
                        <p class="text-white">
                            Pharetra morbi libero id aliquam elit massa integer tellus. Quis felis aliquam ullamcorper
                            porttitor. Pulvinar ullamcorper sit dictumst ut eget a, elementum eu. Maecenas est morbi mattis
                            id in ac pellentesque ac.
                        </p>
                        <div class="card hny-bg-primary" style="padding: 32px 42px">
                            <h2 class="text-hny-quaternary">
                                Conclusion
                            </h2>
                            <p class="text-white">
                                Morbi sed imperdiet in ipsum, adipiscing elit dui lectus. Tellus id scelerisque est
                                ultricies ultricies. Duis est sit sed leo nisl, blandit elit sagittis. Quisque tristique
                                consequat quam sed. Nisl at scelerisque amet nulla purus habitasse.
                                <br><br>
                                Nunc sed faucibus bibendum feugiat sed interdum. Ipsum egestas condimentum mi massa. In
                                tincidunt pharetra consectetur sed duis facilisis metus. Etiam egestas in nec sed et. Quis
                                lobortis at sit dictum eget nibh tortor commodo cursus.
                                <br><br>
                                Odio felis sagittis, morbi feugiat tortor vitae feugiat fusce aliquet. Nam elementum urna
                                nisi aliquet erat dolor enim. Ornare id morbi eget ipsum. Aliquam senectus neque ut id eget
                                consectetur dictum. Donec posuere pharetra odio consequat scelerisque et, nunc tortor.
                                <br><br>
                                Nulla adipiscing erat a erat. Condimentum lorem posuere gravida enim posuere cursus diam.
                            </p>
                        </div>
                    </article>
                    <hr class="text-hny-secondary">
                    <div class="author d-flex justify-content-between align-items-center">
                        <div class="author-info d-flex gap-4">
                            <img src="{{ asset('images/Avatar.png') }}" alt="" width="45px" style="">
                            <div class="detail d-flex flex-column text-white">
                                <p class="mb-0">Olivia Rhye</p>
                                <p class="fs-6 mb-0">Business Management, Gentara</p>
                            </div>
                        </div>
                        <div class="media d-flex gap-2 ">
                            <a href="" class="btn btn-hny-primary border d-flex align-items-center gap-2">
                                <i class="text-white fa-regular fa-copy"></i>
                                <p class="text-white mb-0">Copy Link</p>
                            </a>
                            <a href="" class="btn btn-hny-primary border d-flex align-items-center">
                                <i class="text-white fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="" class="btn btn-hny-primary border d-flex align-items-center">
                                <i class="text-white fa-brands fa-twitter"></i>
                            </a>
                            <a href="" class="btn btn-hny-primary border d-flex align-items-center">
                                <i class="text-white fa-brands fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- end article --}}

        {{-- post --}}
        <section class="new-post hny-bg-primary py-5">
            @include('front.components.post')
        </section>
        {{-- end post --}}

    </main>
    <!-- end main -->
@endsection
