<!-- Navbar STart -->
<header id="topnav" class="defaultscroll sticky">
    <div class="container">
        <!-- Logo container-->
        <div>
            <a class="logo" href="{{route('welcome')}}">
                <img src="{{url('assest/images/logo.png')}}"  class="logo-light-mode" alt="">
                <img src="{{url('assest/images/logo.png')}}"  class="logo-dark-mode" alt="">
            </a>
        </div>
        <div class="buy-button">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#demoModal">Book Demo</button>
        </div><!--end login button-->
        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        

        <div id="navigation">
            <!-- Navigation Menu-->   
            <ul class="navigation-menu nav-right">
                <li><a href="{{route('welcome')}}" class="sub-menu-item">Home</a></li>
                <li class="sub-menu-item"><a href="{{route('about')}}">About</a></li>

                {{-- <li class="has-submenu parent-parent-menu-item"><a href="javascript:void(0)">Services</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="page-about.html" class="sub-menu-item"> API Integrations</a></li>
                        <li><a href="page-team.html" class="sub-menu-item">AI Driven CRM </a></li>
                        <li><a href="page-pricing.html" class="sub-menu-item">Lead Automations</a></li>
                        <li><a href="page-faqs.html" class="sub-menu-item">Social Media AI Integrations</a></li>
                    </ul>
                </li> --}}
                <li><a href="{{route('products')}}" class="sub-menu-item">Products</a></li>
                <li><a href="{{route('contact')}}" class="sub-menu-item">Contact</a></li>
            </ul><!--end navigation menu-->
            <div class="buy-menu-btn d-none">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#demoModal">Book Demo</button>
            </div><!--end login button-->
        </div><!--end navigation-->
    </div><!--end container-->
</header><!--end header-->
<!-- Navbar End -->

