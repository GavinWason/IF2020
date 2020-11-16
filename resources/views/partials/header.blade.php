<header class="stick">
    <div class="topbar">
        <div class="container">
            <div class="select-wrp">
            </div>
            <div class="topbar-register">
                @guest
                <a class="log-popup-btn" href="{{ route('login') }}" title="Login" itemprop="url">Welcome Bruno</a> 
                @else
                    <a class="log-popup-btn" href="{{ route('account.index') }}" title="Account" itemprop="url">MY ACCOUNT</a>
                @endguest
            </div>
        </div>
    </div>
    
    <!-- Topbar -->
    <div class="logo-menu-sec">
        <div class="container">
            <div class="logo"><h1 itemprop="headline"><a href="{{ route('home.index') }}" title="Home" itemprop="url"><img src="{{ asset('images/if1.png') }}" alt="logo" itemprop="image"></a></h1></div>
            <nav>
                <div class="menu-sec">
                    <ul>
                        <li><a href="#" title="ABOUT US" itemprop="url"><span class="red-clr">KNOW MORE</span>ABOUT US</a></li>
                        <li class="menu-item-has-children"><a href="#" title="PARTNERS" itemprop="url"><span class="red-clr">INFORMATION</span>PARTNERS</a>
                            <ul class="sub-dropdown">
                                <li><a href="#" itemprop="url">RESTAURANTS</a></li>
                                <li><a href="#" itemprop="url">FOOD BUSINESSES</a></li>
                                <li><a href="#" itemprop="url">CHARITIES</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="#" title="PARTNERS" itemprop="url"><span class="red-clr">FORM</span>REGISTER HERE</a>
                        
                        <ul class="sub-dropdown">
                                <li><a href="{{ url('/registerpage') }}" itemprop="url">RESTAURANTS/BUSINESS</a></li>
                                <li><a href="{{ route('register') }}" itemprop="url">CHARITIES</a></li>
                            </ul>
                    
                    </ul>
                    <a class="btn-success brd-rd3" href="#" title="Basket" itemprop="url">FOOD BASKET&nbsp;&nbsp;<span class="fa fa-shopping-basket"></span></a>
                </div>
            </nav><!-- Navigation -->
        </div>
    </div><!-- Logo Menu Section -->
</header><!-- Header -->
<!-- {{ route('home.cart.index') }} -->