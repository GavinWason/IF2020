@extends('layouts.app')

@section('title')
  | InfineFood
@endsection

@section('content')
  

    <body >
    <div class="container">
                <div class="login-register-wrapper">
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <div class="sign-popup-wrapper brd-rd5">
                                <div class="sign-popup-inner brd-rd5">
                                    <div class="sign-popup-title text-center">
                                        <h4 itemprop="headline">Post Food</h4>
                                    </div>
                                    <span class="popup-seprator text-center"><i class="brd-rd50"></i></span>

                                    <form class="sign-form" onsubmit="return confirm('Are you sure you want to submit this post?')" method="POST" action="{{ url('postUpdate') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                                                <label>Foodname <sup>*</sup></label>
                                                <input type="text" class="brd-rd3 red-round @error('foodname') is-invalid @enderror" name="foodname" value="{{ old('foodname') }}" placeholder="Enter foodname..." required autocomplete="foodname" autofocus >

                                                @error('foodname')
                                                <span role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                                                <label>Description <sup>*</sup></label>
                                                <textarea   cols="30" rows="6" class="  @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" placeholder="Enter description..." required autocomplete="description" autofocus ></textarea>

                                                @error('description')
                                                <span role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>

                                           

                                            <div class="col-md-12  pt-3 col-sm-12 col-lg-12 col-xs-12">
                                                <label>Location <sup>*</sup></label>
                                                <input type="location" class="brd-rd3 red-round @error('location') is-invalid @enderror" name="location" value="{{ old('location') }}" placeholder="Enter location..." required autocomplete="location" autofocus >

                                                @error('location')
                                                <span role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                                                <label> Upload Image <sup>*</sup></label>
                                                <input type="file" class="brd-rd3 red-round @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" placeholder="Enter image..." required autocomplete="image" autofocus >

                                                @error('location')
                                                <span role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="row d-flex align-bottom">
                                                <div class="col ">
                                                    <label for="donate" class="col-sm-4" >Donate</label>
                                               
                                                    <input type="radio" class="col-sm-3 " id="donate" name="ptag" value="donate" onclick="dona()">
                                                   
                                                </div >
                                                <div class="col">
                                                        <label for="sell" class="col-sm-4">Sell</label>
                                                   
                                                        <input type="radio" class="col-sm-3" id="sell" onclick="seller()" name="ptag" value="sell">
                                                        <br>
                                                </div>
                                            </div>

                                           
                                            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 pt-3" id="price_div" style="display: none;">
                                                <label>Price <sup>*</sup></label>
                                                <input type="number" class="brd-rd3 red-round @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" placeholder="Enter price..." autocomplete="price" autofocus >

                                                @error('price')
                                                <span role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 pt-3">
                                                <button class="btn-info" type="submit">CONFIRM</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </body>

            <script>

                

                function seller() {
                    var x = document.getElementById("price_div");
                    var z = document.getElementsByTagName("input")[6];
                if (x.style.display === "none") {
                    x.style.display = "block";
                    z.setAttribute ("required");
                 } else {
                    x.style.display = "block";
                 }
                }

                function dona() {
                    var x = document.getElementById("price_div");
                    var z = document.getElementsByTagName("input")[6];
                if (x.style.display === "block") {
                    x.style.display = "none";
                    z.removeAttribute ("required","required");
                 } else {
                    x.style.display = "none";
                 }
                }

            </script>

               

   

   <!-- @include('partials.footer')-->
@endsection