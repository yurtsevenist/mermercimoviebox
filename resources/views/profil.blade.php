@extends('layouts.master')
@section('content')
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-area-content">
                        <h1>{{ Auth::user()->name }} Profil sayfası</h1>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- breadcrumb area end -->
    <!-- transformers area start -->
    <section class="transformers-area">
        <div class="container">
            <div class="transformers-box">
                <div class="row flexbox-center">
                    <div class="col-lg-5 text-lg-left text-center">
                        <div class="transformers-content">
                            <img src="assets/img/slide4.jpg" alt="about" />
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="transformers-content mtr-30">
                            <h2>{{ Auth::user()->name . ' ' . Auth::user()->lastname }}</h2>
                            <a href="mailto:{{ Auth::user()->email }}" title="E-Posta Gönder {{ Auth::user()->email }}" class="theme-btn">{{ Auth::user()->email }}</a>
                            <ul>
                                <li>
                                    <div class="transformers-left">
                                        Height:
                                    </div>
                                    <div class="transformers-right">
                                        5.7”
                                    </div>
                                </li>
                                <li>
                                    <div class="transformers-left">
                                        Weight:
                                    </div>
                                    <div class="transformers-right">
                                        1136LB
                                    </div>
                                </li>
                                <li>
                                    <div class="transformers-left">
                                        Eye Color:
                                    </div>
                                    <div class="transformers-right">
                                        Black
                                    </div>
                                </li>
                                <li>
                                    <div class="transformers-left">
                                        Hair Color:
                                    </div>
                                    <div class="transformers-right">
                                        Black
                                    </div>
                                </li>
                                <li>
                                    <div class="transformers-left">
                                        Birthday:
                                    </div>
                                    <div class="transformers-right">
                                        1985.Jun.20
                                    </div>
                                </li>
                                <li>
                                    <div class="transformers-left">
                                        Language:
                                    </div>
                                    <div class="transformers-right">
                                        English, Russian
                                    </div>
                                </li>
                                <li>
                                    <div class="transformers-left">
                                        Hobby:
                                    </div>
                                    <div class="transformers-right">
                                        Base Ball, Gaming, Exploring, Baook Reading
                                    </div>
                                </li>
                                <li>
                                    <div class="transformers-left">
                                        Follow:
                                    </div>
                                    <div class="transformers-right">
                                        <a href="#"><i class="icofont icofont-social-facebook"></i></a>
                                        <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                                        <a href="#"><i class="icofont icofont-social-google-plus"></i></a>
                                        <a href="#"><i class="icofont icofont-youtube-play"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- transformers area end -->
    <!-- details area start -->
    <section class="details-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="details-content">
                        <div class="details-overview">
                            <h2>Overview</h2>
                            <p>Humans are at war with the Transformers, and Optimus Prime is gone. The key to saving the
                                future lies buried in the secrets of the past and the hidden history of Transformers on
                                Earth. Now it's up to the unlikely alliance of inventor Cade Yeager, Bumblebee, a n English
                                lord and an Oxford professor to save the world. Transformers: The Last Knight has a deeper
                                mythos and bigger spectacle than its predecessors, yet still ends up being mostly hollow and
                                cacophonous. The first "Transformers" movie that could actually be characterized as badass.
                                Which isn't a bad thing. It may, in fact, be better.</p>
                        </div>
                        <div class="details-reply">
                            <h2>Leave a Reply</h2>
                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="select-container">
                                            <input type="text" placeholder="Name" />
                                            <i class="icofont icofont-ui-user"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="select-container">
                                            <input type="text" placeholder="Email" />
                                            <i class="icofont icofont-envelope"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="select-container">
                                            <input type="text" placeholder="Phone" />
                                            <i class="icofont icofont-phone"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="textarea-container">
                                            <textarea placeholder="Type Here Message"></textarea>
                                            <button><i class="icofont icofont-send-mail"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="details-comment">
                            <a class="theme-btn theme-btn2" href="#">Post Comment</a>
                            <p>You may use these HTML tags and attributes: You may use these HTML tags and attributes: You
                                may use these HTML tags and attributes: </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 text-center text-lg-left">
                    <div class="portfolio-sidebar">
                        <img src="{{ asset('tema') }}/assets/img/sidebar/sidebar1.png" alt="sidebar" />
                        <img src="{{ asset('tema') }}/assets/img/sidebar/sidebar2.png" alt="sidebar" />
                        <img src="{{ asset('tema') }}/assets/img/sidebar/sidebar4.png" alt="sidebar" />
                    </div>
                </div>
            </div>
        </div>
    </section><!-- details area end -->
@endsection
