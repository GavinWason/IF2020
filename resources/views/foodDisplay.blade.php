@extends('layouts.app')

@section('title')
    | InfiniteFood
@endsection

@section('content')
    @include('partials.header')
    @include('partials.header-resp')

    <div class="bread-crumbs-wrapper">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home.index') }}" title="Welcome Page" itemprop="url">Home</a></li>
            </ol>
        </div>
    </div>

    <section>
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="title1-wrapper text-center">
                            <div class="title1-inner">
                                <span>Your Favourite Food</span>
                                <h2 itemprop="headline">Choose & Enjoy</h2>
                            </div>
                        </div>
                        <div class="row remove-ext5">
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="popular-dish-box wow fadeIn" data-wow-delay="0.2s">
                                    <div class="popular-dish-thumb">
                                    
                                        <img src="{{ asset('images/resource/canned-foods.jpg') }}" alt="your image" width="450" height="200" itemprop="image">
                                
                                        <span class="post-rate yellow-bg brd-rd2"><i class="fa fa-star-o"></i> 4.25</span>
                                        <span class="post-likes brd-rd4"><i class="fa fa-heart-o"></i> 12</span>
                                    </div>
                                    <div class="popular-dish-info">
                                        <h4 itemprop="headline"><a href="#" title="" itemprop="url">
                                                Canned cereals</a>
                                        </h4>
                                        <p itemprop="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                        <span class="price">ksh80.00/can</span>
                                        <a class="brd-rd2" href="#" title="Order Now" itemprop="url">Order Now</a>
                                        <div class="restaurant-info">
                                            <img src="{{ asset('images/resource/restaurant-logo1.png') }}" alt="restaurant-logo1" itemprop="image">
                                            <div class="restaurant-info-inner">
                                                <h6 itemprop="headline"><a href="#" title="" itemprop="url">Kentaste</a></h6>
                                                <span class="red-clr">Langata</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Popular Dish Box -->
                            </div>
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="popular-dish-box wow fadeIn" data-wow-delay="0.4s">
                                    <div class="popular-dish-thumb">
                                        <a href="#" title="" itemprop="url"><img src="{{ asset('images/resource/cabbage2.jpg') }}" alt="popular-dish-img2.jpg" width="450" height="200" itemprop="image"></a>
                                        <span class="post-rate yellow-bg brd-rd2"><i class="fa fa-star-o"></i> 3.25</span>
                                        <span class="post-likes brd-rd4"><i class="fa fa-heart-o"></i> 10</span>
                                    </div>
                                    <div class="popular-dish-info">
                                        <h4 itemprop="headline"><a href="#" title="" itemprop="url">
                                                Cabbage</a>
                                        </h4>
                                        <p itemprop="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                        <span class="price">ksh100.00/kg</span>
                                        <a class="brd-rd2" href="#" title="Order Now" itemprop="url">Order Now</a>
                                        <div class="restaurant-info">
                                            <img src="{{ asset('images/resource/restaurant-logo1.png') }}" alt="restaurant-logo2.png" itemprop="image">
                                            <div class="restaurant-info-inner">
                                                <h6 itemprop="headline"><a href="#" title="" itemprop="url">Kentaste</a></h6>
                                                <span class="red-clr"> Kenyatta Avenue</span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- Popular Dish Box -->
                            </div>
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="popular-dish-box wow fadeIn" data-wow-delay="0.6s">
                                    <div class="popular-dish-thumb">
                                        <a href="#" title="" itemprop="url"><img  src="{{ asset('images/resource/cabbage.jpg') }}" alt="popular-dish-img3.jpg" width="450" height="200" itemprop="image"></a>
                                        <span class="post-rate yellow-bg brd-rd2"><i class="fa fa-star-o"></i> 5.00</span>
                                        <span class="post-likes brd-rd4"><i class="fa fa-heart-o"></i> 15</span>
                                    </div>
                                    <div class="popular-dish-info">
                                        <h4 itemprop="headline"><a href="#" title="" itemprop="url">
                                                Purple and Green Cabbages</a></h4>
                                        <p itemprop="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                        <span class="price"></span>
                                        <a class="brd-rd2" href="#" title="Order Now" itemprop="url">Free item</a>
                                        <div class="restaurant-info">
                                            <img src="{{ asset('images/resource/restaurant-logo1.png') }}" alt="restaurant-logo3.png" itemprop="image">
                                            <div class="restaurant-info-inner">
                                                <h6 itemprop="headline"><a href="#" title="" itemprop="url">Kentaste</a></h6>
                                                <span class="red-clr">Moi Avenue</span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- Popular Dish Box -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.footer')
@endsection
