@extends('layouts.master')
@section('title', Auth::user()->name . ' Profil')
@section('content')
@include('layouts.alert')
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
                            <img src="{{ asset('tema') }}/assets/img/slide4.jpg" alt="about" />
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="transformers-content mtr-30">
                            <h2>{{ Auth::user()->name . ' ' . Auth::user()->lastname }}</h2>
                            <a href="mailto:{{ Auth::user()->email }}" title="E-Posta Gönder {{ Auth::user()->email }}"
                                class="theme-btn">{{ Auth::user()->email }}</a>
                            <ul>
                                <li>
                                    <div class="transformers-left">
                                        İsim:
                                    </div>
                                    <div class="transformers-right">
                                        {{ Auth::user()->name }}
                                    </div>
                                </li>
                                <li>
                                    <div class="transformers-left">
                                        Soyisim:
                                    </div>
                                    <div class="transformers-right">
                                        {{ Auth::user()->lastname }}
                                    </div>
                                </li>
                                <li>
                                    <div class="transformers-left">
                                        Doğum tarihi:
                                    </div>
                                    <div class="transformers-right">
                                        NULL
                                    </div>
                                </li>
                                <li>
                                    <div class="transformers-left">
                                        Cinsiyet:
                                    </div>
                                    <div class="transformers-right">
                                        NULL
                                    </div>
                                </li>
                                <li>
                                    <div class="transformers-left">
                                        Video sayısı:
                                    </div>
                                    <div class="transformers-right">
                                        NULL
                                    </div>
                                </li>
                                <li>
                                    <div class="transformers-left">
                                        Ülke:
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
                                        Sosyal medya:
                                    </div>
                                    <div class="transformers-right mss-2">
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
                            <h2>Hakkında</h2>
                            <p>Humans are at war with the Transformers, and Optimus Prime is gone. The key to saving the
                                future lies buried in the secrets of the past and the hidden history of Transformers on
                                Earth. Now it's up to the unlikely alliance of inventor Cade Yeager, Bumblebee, a n English
                                lord and an Oxford professor to save the world. Transformers: The Last Knight has a deeper
                                mythos and bigger spectacle than its predecessors, yet still ends up being mostly hollow and
                                cacophonous. The first "Transformers" movie that could actually be characterized as badass.
                                Which isn't a bad thing. It may, in fact, be better.</p>
                        </div>
                        <div class="details-reply">
                            <h2>Profil Güncelle</h2>
                            <form action="{{ route('profilUpdate') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="select-container">
                                            <input type="text" placeholder="İsim" name="name" required
                                                value="{{ Auth::user()->name }}" />
                                            <i class="icofont icofont-ui-user"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="select-container">
                                            <input type="text" placeholder="Soyisim" name="lastname" required
                                                value="{{ Auth::user()->lastname }}" />
                                            <i class="icofont icofont-ui-user"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="select-container">
                                            <input type="text" placeholder="E-Posta" required
                                                value="{{ Auth::user()->email }}" name="email" />
                                            <i class="icofont icofont-email"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="select-container">
                                            <input type="date" placeholder="D.Tarihi" name="date" required />
                                            <i class="icofont icofont-email"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="select-container">
                                            <select class="form-select" name="gender" required aria-label="Default select example">
                                                <option selected class="text-light">Cinsiyet</option>
                                                <option value="1" class="text-light">Erkek</option>
                                                <option value="2" class="text-light">Kadın</option>
                                                <option value="3" class="text-light">Diğer</option>
                                                <option value="0" class="text-light">Belirtmek İstemiyorum</option>
                                            </select>
                                            <i class="icofont icofont-users-alt-1 mss-2"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="textarea-container">
                                            <textarea placeholder="Hakkınızda" required name="comment"></textarea>
                                            <button><i class="icofont icofont-send-mail"></i></button>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="details-comment">
                            <button class="theme-btn theme-btn2" type="submit">Güncelle</button>
                            <p>Profil bilgilerini güncelleme için üst deki formu eksiksiz doldurunuz: </p>
                        </div>
                        </form>

                    </div>
                </div>
                <div class="col-lg-3 text-center text-lg-left">
                    <div class="portfolio-sidebar mb-5">
                        <img src="{{ asset('tema') }}/assets/img/sidebar/reklam.png" alt="sidebar" />
                        <img src="{{ asset('tema') }}/assets/img/sidebar/reklam.png" alt="sidebar" />
                        <img src="{{ asset('tema') }}/assets/img/sidebar/reklam.png" alt="sidebar" />
                    </div>
                </div>
            </div>
        </div>
    </section><!-- details area end -->
@endsection
