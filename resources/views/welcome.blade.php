@extends('layouts.app')

@section('title', 'InfiniteFood | Welcome')

@section('content')
    @include('partials.header')
    @include('partials.header-resp')

    <section>
        <div class="block">
            <div style="background-image: url('{{ asset('images/dave-hoefler-g1NR2UZjjws-unsplash.jpg') }}');" class="fixed-bg"></div>
            <div class="restaurant-searching text-center">
                <div class="restaurant-searching-inner">
                    <h2 itemprop="headline"><i>Better Option To Redistribute and Sell Food</i></h2>
                    <form class="restaurant-search-form brd-rd2">
                        <!--search bar-->
                        <div class="row mrg10 justify-content-center">
                            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
                                <div class="input-field brd-rd2"><i class="fa fa-map-marker"></i><input class="brd-rd2" type="text" placeholder="Search Location"><i class="fa fa-location-arrow"></i></div>
                            </div>
                            <div class="col-md-2 col-sm-3 col-lg-3 col-xs-12">
                                <button class="brd-rd2 red-bg" type="submit">SEARCH</button>
                            </div>
                        </div>
                    </form>
                    <hr>
                    <div>
                    <a href="{{'postUpdateDisplay'}}" >
                    <button class="bg-success text-white" >Post</button></a>
                    <a href="{{'foodDisplay'}}" >
                    <button class="brd-rd2 red-bg text-white" >Food Catalogue</button></a>
                    </div>
                    <hr>
                    <div class="funfacts">
                        <div class="col-md-3 col-sm-6 col-lg-3">
                            <div class="fact-box">
                                <i class="brd-rd50"><img src="{{ asset('images/resource/fact-icon1.png') }}" alt="fact-icon1" itemprop="image"></i>
                                <div class="fact-inner">
                                    <strong><span class="counter">137</span></strong>
                                    <h5>Restaurants</h5>
                                </div>
                            </div>
                            <!-- Fact Box -->
                        </div>
                        <div class="col-md-3 col-sm-6 col-lg-3">
                            <div class="fact-box">
                                <i class="brd-rd50"><img src="{{ asset('images/resource/fact-icon2.png') }}" alt="fact-icon2" itemprop="image"></i>
                                <div class="fact-inner">
                                    <strong><span class="counter">158</span></strong>
                                    <h5>Registered Charities</h5>
                                </div>
                            </div>
                            <!-- Fact Box -->
                        </div>
                        <div class="col-md-3 col-sm-6 col-lg-3">
                            <div class="fact-box">
                                <i class="brd-rd50"><img src="{{ asset('images/resource/fact-icon3.png') }}" alt="fact-icon3" itemprop="image"></i>
                                <div class="fact-inner">
                                    <strong><span class="counter">659</span>K</strong>
                                    <h5>Food Businesses</h5>
                                </div>
                            </div>
                            <!-- Fact Box -->
                        </div>
                        
                    </div>
                    <!-- Fun Facts -->
                </div>
            </div>
            <!-- Restaurant Searching -->
        </div>
    </section>

  


    <section>
        <div class="block blackish low-opacity">
            <div class="fixed-bg" style="background-image: url({{ asset('images/dave-hoefler-g1NR2UZjjws-unsplash.jpg') }});"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="title1-wrapper text-center">
                            <div class="title1-inner">
                                <h2 class="text-white" itemprop="headline">easy collection in 3 steps</h2>
                            </div>
                        </div>
                        <div class="remove-ext text-center">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-lg-4">
                                    <div class="step-box wow fadeIn" data-wow-delay="0.2s">
                                        <i><img src="{{ asset('images/resource/setp-img1.png') }}" alt="setp-img1.png" itemprop="image"> <span class="brd-rd50 red-bg">1</span></i>
                                        <div class="setp-box-inner">
                                            <h4 itemprop="headline">Explore Restaurants</h4>
                                            <p itemprop="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                        </div>
                                    </div>
                                    <!-- Step Box -->
                                </div>
                                <div class="col-md-4 col-sm-4 col-lg-4">
                                    <div class="step-box wow fadeIn" data-wow-delay="0.4s">
                                        <i><img src="{{ asset('images/resource/setp-img2.png') }}" alt="setp-img2.png" itemprop="image"> <span class="brd-rd50 red-bg">2</span></i>
                                        <div class="setp-box-inner">
                                            <h4 itemprop="headline">Choose a Tasty Dish</h4>
                                            <p itemprop="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                        </div>
                                    </div>
                                    <!-- Step Box -->
                                </div>
                                <div class="col-md-4 col-sm-4 col-lg-4">
                                    <div class="step-box wow fadeIn" data-wow-delay="0.6s">
                                        <i><img src="{{ asset('images/resource/setp-img3.png') }}" alt="setp-img3.png" itemprop="image"> <span class="brd-rd50 red-bg">3</span></i>
                                        <div class="setp-box-inner">
                                            <h4 itemprop="headline">Follow To Checkout</h4>
                                            <p itemprop="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                        </div>
                                    </div>
                                    <!-- Step Box -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
      
   

   
@endsection
