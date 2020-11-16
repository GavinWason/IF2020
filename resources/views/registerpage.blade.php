@extends('layouts.app')

@section('title', 'Register Account | InfiniteFood')

@section('content')
<body>
    <section>
        <div class="block">
            <div class="fixed-bg" style="background-image: url({{ asset('images/pexels-skitterphoto-48600.jpg') }});"></div>

            <div class="container">
                <div class="row justify-content-center mb-5" style="margin-top: -5%">
                    <h1 itemprop="headline"><a href="{{ url('/') }}" title="Home" itemprop="url">
                            <img src="{{ asset('images/if1.png') }}" alt="logo.png" itemprop="image"></a>
                    </h1>
                </div>
            </div>

            <div class="container">
                <div class="login-register-wrapper">
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <div class="sign-popup-wrapper brd-rd5">
                                <div class="sign-popup-inner brd-rd5">
                                    <div class="sign-popup-title text-center">
                                        <h4 itemprop="headline">Are you a food business/restuarant?Please fill the form and you will receive a confirmation mail.</h4>
                                    </div>
                                    <span class="popup-seprator text-center"><i class="brd-rd50"></i></span>

                                    <form class="sign-form" method="POST" action="{{ url('registerUpdate') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                                                <label>Name/Jina <sup>*</sup></label>
                                                <input type="text" class="brd-rd3 red-round @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Enter firstname..." required autocomplete="firstname" autofocus >

                                                @error('name')
                                                <span role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                                                <label>Company/Kampuni <sup>*</sup></label>
                                                <input type="text" class="brd-rd3 red-round @error('company') is-invalid @enderror" name="company" value="{{ old('company') }}" placeholder="Enter company name..." required autocomplete="company" autofocus >

                                                @error('company')
                                                <span role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                                                <label>Email Address/Barua pepe <sup>*</sup></label>
                                                <input type="email" class="brd-rd3 red-round @error('email') is-invalid @enderror" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="{{ old('email') }}" placeholder="Enter email address..." required autocomplete="email" autofocus >

                                                @error('email')
                                                <span role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                                                <label>Phone Number/Nambari ya Simu <sup>*</sup></label>
                                                <input type="tel" pattern="[0-9]{10}" class="brd-rd3 red-round @error('phone_number') is-invalid @enderror" name="phone_number"  placeholder="Enter phone number..." required autocomplete="phone_number" autofocus >

                                                @error('phone number')
                                                <span role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                                                <label>Password <sup>*</sup></label>
                                                <input type="password" id="password"  class="brd-rd3 @error('password') is-invalid @enderror"  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  placeholder="Enter password..." required autocomplete="new-password">

                                                @error('password')
                                                <span role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                                                <label>Confirm Password <sup>*</sup></label>
                                                <input type="password" id="password_confirmation" onchange='check_pass();' class="brd-rd3"  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" name="password_confirmation"  placeholder="Confirm password..." required autocomplete="new-password">
                                                <span id='message'></span>
                                            </div>


                                            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                                                <button class=" btn-success brd-rd3" id="submit" type="submit"disabled>Submit</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
       
    </body>
    <script type="text/javascript">
               function check_pass() {
    if (document.getElementById('password').value ==
            document.getElementById('password_confirmation').value) {
        document.getElementById('submit').disabled = false;
    } else {
        document.getElementById('submit').disabled = true;
        document.getElementById('message').innerHTML = 'not matching'
    }
}
    </script>
@endsection