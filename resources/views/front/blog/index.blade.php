@extends('front.layouts.layout')
@section('top')
    <link rel="stylesheet" href="{{ asset('front/css/product.css') }}">
@endsection

@section('content')
    <!-- main -->
    <main class="hny-bg-primary">
        <!-- jumbotron -->
        <section class="jumbotron hny-bg-primary position-relative">
            <img src="{{ asset('images/blog.png') }}" class="" alt="">
            <div class="card">
                <div class="card-body">
                    <p class="text-hny-tertiary text-capitalize">
                        home <i class="fa-solid fa-angle-right"></i>
                        Blog
                    </p>
                    <h2 class="text-dark">
                        Tetap up to date informasi tentang kami
                    </h2>
                    <p class="text-dark">
                        Teknologi smart classroom yang terintegrasi dengan Artifical intelegent & Internet Of Think
                    </p>
                </div>
            </div>
        </section>
        <!-- end jumbotron -->

        {{-- post --}}
        <section class="new-post hny-bg-black py-5">
            @include('front.components.post')
        </section>
        {{-- end post --}}

        <section class="news py-5">
            <div class="container">
                <h2 class="text-white mb-5">Semua Berita</h2>
                <div class="row">
                    <div class="col-lg-3 mb-4">
                        <div class="card">
                            <img src="../images/post.png" class="card-img-top" alt="post">
                            <div class="card-body">
                                <h6 class="card-title">Komitmen Kami dalam Bidang Teknologi ...</h6>
                                <p class="card-text">
                                    Menjadi pelopor global dalam memanfaatkan kekuatan ...
                                </p>
                                <p class="card-text">
                                    <small class="text-hny-quaternary">
                                        Alec Whitten • 17 Jan 2022
                                    </small>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4">
                        <div class="card">
                            <img src="../images/post.png" class="card-img-top" alt="post">
                            <div class="card-body">
                                <h6 class="card-title">Komitmen Kami dalam Bidang Teknologi ...</h6>
                                <p class="card-text">
                                    Menjadi pelopor global dalam memanfaatkan kekuatan ...
                                </p>
                                <p class="card-text">
                                    <small class="text-hny-quaternary">
                                        Alec Whitten • 17 Jan 2022
                                    </small>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4">
                        <div class="card">
                            <img src="../images/post.png" class="card-img-top" alt="post">
                            <div class="card-body">
                                <h6 class="card-title">Komitmen Kami dalam Bidang Teknologi ...</h6>
                                <p class="card-text">
                                    Menjadi pelopor global dalam memanfaatkan kekuatan ...
                                </p>
                                <p class="card-text">
                                    <small class="text-hny-quaternary">
                                        Alec Whitten • 17 Jan 2022
                                    </small>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4">
                        <div class="card">
                            <img src="../images/post.png" class="card-img-top" alt="post">
                            <div class="card-body">
                                <h6 class="card-title">Komitmen Kami dalam Bidang Teknologi ...</h6>
                                <p class="card-text">
                                    Menjadi pelopor global dalam memanfaatkan kekuatan ...
                                </p>
                                <p class="card-text">
                                    <small class="text-hny-quaternary">
                                        Alec Whitten • 17 Jan 2022
                                    </small>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4">
                        <div class="card">
                            <img src="../images/post.png" class="card-img-top" alt="post">
                            <div class="card-body">
                                <h6 class="card-title">Komitmen Kami dalam Bidang Teknologi ...</h6>
                                <p class="card-text">
                                    Menjadi pelopor global dalam memanfaatkan kekuatan ...
                                </p>
                                <p class="card-text">
                                    <small class="text-hny-quaternary">
                                        Alec Whitten • 17 Jan 2022
                                    </small>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4">
                        <div class="card">
                            <img src="../images/post.png" class="card-img-top" alt="post">
                            <div class="card-body">
                                <h6 class="card-title">Komitmen Kami dalam Bidang Teknologi ...</h6>
                                <p class="card-text">
                                    Menjadi pelopor global dalam memanfaatkan kekuatan ...
                                </p>
                                <p class="card-text">
                                    <small class="text-hny-quaternary">
                                        Alec Whitten • 17 Jan 2022
                                    </small>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4">
                        <div class="card">
                            <img src="../images/post.png" class="card-img-top" alt="post">
                            <div class="card-body">
                                <h6 class="card-title">Komitmen Kami dalam Bidang Teknologi ...</h6>
                                <p class="card-text">
                                    Menjadi pelopor global dalam memanfaatkan kekuatan ...
                                </p>
                                <p class="card-text">
                                    <small class="text-hny-quaternary">
                                        Alec Whitten • 17 Jan 2022
                                    </small>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4">
                        <div class="card">
                            <img src="../images/post.png" class="card-img-top" alt="post">
                            <div class="card-body">
                                <h6 class="card-title">Komitmen Kami dalam Bidang Teknologi ...</h6>
                                <p class="card-text">
                                    Menjadi pelopor global dalam memanfaatkan kekuatan ...
                                </p>
                                <p class="card-text">
                                    <small class="text-hny-quaternary">
                                        Alec Whitten • 17 Jan 2022
                                    </small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-5 text-hny-secondary" height="5px">
            </div>
        </section>

    </main>
    <!-- end main -->
@endsection
