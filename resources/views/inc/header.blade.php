<div class="header-section header-sticky">

    <!-- Header Top Start -->
    <div class="header-top d-none d-sm-block">
        <div class="container">

            <!-- Header Top Bar Wrapper Start -->
            <div class="header-top-bar-wrap d-sm-flex justify-content-between">

                <div class="header-top-bar-wrap__info">
                    <ul class="header-top-bar-wrap__info-list">
                        <li><a href="tel:+8819906886"><i class="fas fa-phone"></i> <span class="info-text">(+88) 1990
                                    6886</span></a></li>
                        <li><a href="mailto:agency@example.com"><i class="far fa-envelope"></i> <span
                                  class="info-text">agency@example.com</span></a></li>
                    </ul>
                </div>

                <div class="header-top-bar-wrap__info d-sm-flex">
                    <ul class="header-top-bar-wrap__info-list d-none d-lg-flex">
                        <li><button data-bs-toggle="modal" data-bs-target="#loginModal">Log in</button></li>
                        <li><button data-bs-toggle="modal" data-bs-target="#registerModal">Register</button>
                        </li>
                    </ul>
                    <ul class="header-top-bar-wrap__info-social">
                        <li><a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li><a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li><a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                    </ul>
                </div>

            </div>
            <!-- Header Top Bar Wrapper End -->

        </div>
    </div>
    <!-- Header Top End -->

    <!-- Header Main Start -->
    <div class="header-main">
        <div class="container">
            <!-- Header Main Wrapper Start -->
            <div class="header-main-wrapper">

                <!-- Header Logo Start -->
                <div class="header-logo">
                    <a class="header-logo__logo" href="{{ route('index') }}"><img
                          src="{{ asset('') }}assets/images/dark-logo.png" width="296" height="64" alt="Logo"></a>
                </div>
                <!-- Header Logo End -->



                <!-- Header Inner Start -->
                <div class="header-inner">

                    <!-- Header Search Start -->
                    <div class="header-serach">
                        <form action="#">
                            <input type="text" class="header-serach__input" placeholder="Search...">
                            <button class="header-serach__btn"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                    <!-- Header Search End -->

                    <!-- Header Navigation Start -->
                    <div class="header-navigation d-none d-xl-block">
                        <nav class="menu-primary">
                            <ul class="menu-primary__container">
                                <li><a class="active" href="{{ route('index') }}"><span>Home</span></a> </li>
                                <li><a class="" href="{{ route('course.index') }}"><span>Courses</span></a> </li>
                                <li><a class="" href="{{ route('shop.index') }}"><span>Shop</span></a> </li>
                                <li><a class="" href="{{ route('student') }}"><span>Student</span></a> </li>
                                <li><a class="" href="{{ route('teacher') }}"><span>Instructor</span></a> </li>

                            </ul>
                        </nav>
                    </div>
                    <!-- Header Navigation End -->



                    <!-- Header Mobile Toggle Start -->
                    <div class="header-toggle">
                        <button class="header-toggle__btn d-xl-none" data-bs-toggle="offcanvas"
                          data-bs-target="#offcanvasMobileMenu">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </button>
                        <button class="header-toggle__btn search-open d-flex d-md-none">
                            <span class="dots"></span>
                            <span class="dots"></span>
                            <span class="dots"></span>
                        </button>
                    </div>
                    <!-- Header Mobile Toggle End -->

                </div>
                <!-- Header Inner End -->

            </div>
            <!-- Header Main Wrapper End -->
        </div>
    </div>
    <!-- Header Main End -->

</div>