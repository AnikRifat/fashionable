<!DOCTYPE html>
<html lang="en">

    @include('inc.head')

    <body class="dashboard-page dashboard-nav-fixed" data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">

        <!-- Dashboard Nav Start -->
        <div class="dashboard-nav offcanvas offcanvas-start" id="offcanvasDashboard">

            <!-- Dashboard Nav Wrapper Start -->
            <div class="dashboard-nav__wrapper">
                <!-- Dashboard Nav Header Start -->
                <div class="offcanvas-header dashboard-nav__header dashboard-nav-header">

                    <div class="dashboard-nav__toggle d-xl-none">
                        <button class="toggle-close" data-bs-dismiss="offcanvas"><i class="fas fa-times"></i></button>
                    </div>

                    <div class="dashboard-nav__logo">
                        <a class="logo" href="{{ route('index') }}"><img src="{{ asset('') }}assets/images/dark-logo.png" alt="Logo"
                              width="148" height="62"></a>
                    </div>

                </div>
                <!-- Dashboard Nav Header End -->

                <!-- Dashboard Nav Content Start -->
                <div class="offcanvas-body dashboard-nav__content navScroll ps ps--active-y">

                    <!-- Dashboard Nav Menu Start -->
                    <div class="dashboard-nav__menu">
                        <ul class="dashboard-nav__menu-list">
                            <li class="active">
                                <a href="dashboard-student-{{ route('index') }}">
                                    <i class="edumi edumi-layers"></i>
                                    <span class="text">Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="dashboard-profile.html">
                                    <i class="edumi edumi-follower"></i>
                                    <span class="text">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="dashboard-all-course.html">
                                    <i class="edumi edumi-open-book"></i>
                                    <span class="text">Enrolled Courses</span>
                                </a>
                            </li>
                            <li>
                                <a href="dashboard-wishlist.html">
                                    <i class="edumi edumi-heart"></i>
                                    <span class="text">Wishlist</span>
                                </a>
                            </li>
                            <li>
                                <a href="dashboard-reviews.html">
                                    <i class="edumi edumi-star"></i>
                                    <span class="text">Reviews</span>
                                </a>
                            </li>
                            <li>
                                <a href="dashboard-my-quiz-attempts.html">
                                    <i class="edumi edumi-help"></i>
                                    <span class="text">My Quiz Attempts</span>
                                </a>
                            </li>
                            <li>
                                <a href="dashboard-purchase-history.html">
                                    <i class="edumi edumi-shopping-cart"></i>
                                    <span class="text">Purchase History</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="dashboard-nav__menu-list">
                            <li>
                                <a href="dashboard-settings.html">
                                    <i class="edumi edumi-settings"></i>
                                    <span class="text">Settings</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('index') }}">
                                    <i class="edumi edumi-sign-out"></i>
                                    <span class="text">Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Dashboard Nav Menu End -->

                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px; height: 351px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 257px;"></div>
                    </div>
                </div>
                <!-- Dashboard Nav Content End -->

                <div class="offcanvas-footer"></div>
            </div>
            <!-- Dashboard Nav Wrapper End -->

        </div>
        <!-- Dashboard Nav End -->

        <!-- Dashboard Menu Start -->
        <div class="dashboard-menu">

            <!-- Dashboard Menu Close Start -->
            <div class="dashboard-menu__close">
                <button class="close-btn"><i class="fas fa-times"></i></button>
            </div>
            <!-- Dashboard Menu Close End -->

            <!-- Dashboard Menu Content Start -->
            <div class="dashboard-menu__content">
                <div class="dashboard-menu__image">
                    <img src="{{ asset('') }}assets/images/canvas-menu-image.png" alt="Images" width="984" height="692">
                </div>
                <div class="dashboard-menu__main-menu">
                    <ul class="dashboard-menu__menu-link">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Courses</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                    <div class="dashboard-menu__search">
                        <form action="#">
                            <input type="text" placeholder="Search…">
                            <button class="search-btn"><i class="far fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Dashboard Menu Content End -->

        </div>
        <!-- Dashboard Menu End -->


        <!-- Dashboard Main Wrapper Start -->
        <main class="dashboard-main-wrapper">

            <!-- Dashboard Header Start -->
            <div class="dashboard-header">
                <div class="container">
                    <!-- Dashboard Header Wrapper Start -->
                    <div class="dashboard-header__wrap">

                        <div class="dashboard-header__toggle-menu d-xl-none">
                            <button class="toggle-btn" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDashboard">
                                <svg width="20px" height="18px" viewBox="0 0 20 18" version="1.1"
                                  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <path
                                      d="M18.7179688,2.60581293 L1.28207031,2.60581293 C0.573828125,2.60581293 0,2.02491559 0,1.30798783 C0,0.591060076 0.573828125,0.0101231939 1.28207031,0.0101231939 L18.7179688,0.0101231939 C19.4261719,0.0101231939 20,0.591020532 20,1.30798783 C20,2.02495513 19.4261719,2.60581293 18.7179688,2.60581293 Z">
                                    </path>
                                    <path
                                      d="M11.5384766,10.5957293 L1.28207031,10.5957293 C0.573828125,10.5957293 2.91322522e-13,10.0147924 2.91322522e-13,9.29786464 C2.91322522e-13,8.58093688 0.573828125,8 1.28207031,8 L11.5384766,8 C12.2466797,8 12.8205469,8.58089734 12.8205469,9.29786464 C12.8205469,10.0148319 12.2466797,10.5957293 11.5384766,10.5957293 Z">
                                    </path>
                                    <path
                                      d="M18.7179688,17.6 L1.28207031,17.6 C0.573828125,17.6 0,17.0628683 0,16.4 C0,15.7371317 0.573828125,15.2 1.28207031,15.2 L18.7179688,15.2 C19.4261719,15.2 20,15.7370952 20,16.4 C20,17.0628683 19.4261719,17.6 18.7179688,17.6 Z">
                                    </path>
                                </svg>
                            </button>
                        </div>

                        <div class="dashboard-header__user">
                            <div class="dashboard-header__user-avatar">
                                <img src="{{ asset('') }}assets/images/avatar/avatar-02.jpg" alt="Avatar" width="90" height="90">
                            </div>
                            <div class="dashboard-header__user-info">
                                <h4 class="dashboard-header__user-name"><span class="welcome-text">Howdy,</span> Adeniyi
                                    David</h4>
                            </div>
                        </div>

                        <div class="dashboard-header__btn">
                            <a class="btn btn-outline-primary" href="#"><i class="edumi edumi-user"></i> <span
                                  class="text">Become an instructor</span></a>
                        </div>

                        <div class="dashboard-header__toggle">
                            <button class="btn btn-toggle"><i class="fas fa-bars"></i></button>
                        </div>

                    </div>
                    <!-- Dashboard Header Wrapper End -->
                </div>
            </div>
            <!-- Dashboard Header End -->





            <!-- Dashboard Content Start -->
            <div class="dashboard-content">

                <div class="container">
                    <h4 class="dashboard-title">Dashboard</h4>

                    <!-- Dashboard Info Start -->
                    <div class="dashboard-info">
                        <div class="row gy-2 gy-sm-6">
                            <div class="col-md-4 col-sm-6">
                                <!-- Dashboard Info Card Start -->
                                <div class="dashboard-info__card">
                                    <a class="dashboard-info__card-box" href="#">
                                        <div class="dashboard-info__card-icon icon-color-01">
                                            <i class="edumi edumi-open-book"></i>
                                        </div>
                                        <div class="dashboard-info__card-content">
                                            <div class="dashboard-info__card-value">19</div>
                                            <div class="dashboard-info__card-heading">Enrolled Courses</div>
                                        </div>
                                    </a>
                                </div>
                                <!-- Dashboard Info Card End -->
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <!-- Dashboard Info Card Start -->
                                <div class="dashboard-info__card">
                                    <a class="dashboard-info__card-box" href="#">
                                        <div class="dashboard-info__card-icon icon-color-02">
                                            <i class="edumi edumi-streaming"></i>
                                        </div>
                                        <div class="dashboard-info__card-content">
                                            <div class="dashboard-info__card-value">0</div>
                                            <div class="dashboard-info__card-heading">Active Courses</div>
                                        </div>
                                    </a>
                                </div>
                                <!-- Dashboard Info Card End -->
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <!-- Dashboard Info Card Start -->
                                <div class="dashboard-info__card">
                                    <a class="dashboard-info__card-box" href="#">
                                        <div class="dashboard-info__card-icon icon-color-03">
                                            <i class="edumi edumi-correct"></i>
                                        </div>
                                        <div class="dashboard-info__card-content">
                                            <div class="dashboard-info__card-value">27</div>
                                            <div class="dashboard-info__card-heading">Completed Courses</div>
                                        </div>
                                    </a>
                                </div>
                                <!-- Dashboard Info Card End -->
                            </div>
                        </div>
                    </div>
                    <!-- Dashboard Info End -->
                </div>


            </div>
            <!-- Dashboard Content End -->


        </main>
        <!-- Dashboard Main Wrapper End -->

        <!-- Edumall Demo Option Start -->
        <div class="edumall-demo-option">

            <div class="edumall-demo-option__toolbar">
                <button class="toolbar-action demo-open" data-bs-tooltip="tooltip" data-bs-placement="left" title=""
                  data-bs-original-title="Select Demo" aria-label="Select Demo"><i
                      class="fas fa-pencil-ruler"></i></button>
                <a class="toolbar-action" href="https://hasthemes.com/contact-us/" data-bs-tooltip="tooltip"
                  data-bs-placement="left" title="" data-bs-original-title="Support Channel"
                  aria-label="Support Channel"><i class="far fa-life-ring"></i></a>
                <a class="toolbar-action" href="https://1.envato.market/qnL5nL" data-bs-tooltip="tooltip"
                  data-bs-placement="left" title="" data-bs-original-title="Purchase EduMall"
                  aria-label="Purchase EduMall"><i class="fas fa-shopping-basket"></i></a>
            </div>

            <div class="edumall-demo-option__panel">

                <div class="edumall-demo-option__header">
                    <h5 class="edumall-demo-option__title">EduMall - Professional LMS Education Center HTML Template
                    </h5>
                    <a class="edumall-demo-option__btn btn btn-primary btn-hover-secondary"
                      href="https://1.envato.market/qnL5nL"><i class="fas fa-shopping-basket"></i> Buy Now</a>
                </div>

                <div class="edumall-demo-option__body">
                    <!-- <div class="edumall-demo-option-item">
                <a href="" data-bs-tooltip="tooltip" data-bs-placement="top" title="Landing Page">
                    <img src="{{ asset('') }}assets/images/demo/landing.jpg" alt="">
                </a>
            </div> -->
                    <div class="edumall-demo-option-item">
                        <a href="{{ route('index') }}" data-bs-tooltip="tooltip" data-bs-placement="top" title=""
                          data-bs-original-title="Main Demo">
                            <img src="{{ asset('') }}assets/images/demo/home-01.jpg" alt="Home" width="130" height="158">
                        </a>
                    </div>
                    <div class="edumall-demo-option-item">
                        <a href="index-course-hub.html" data-bs-tooltip="tooltip" data-bs-placement="top" title=""
                          data-bs-original-title="Course Hub">
                            <img src="{{ asset('') }}assets/images/demo/home-02.jpg" alt="Home" width="130" height="158">
                        </a>
                    </div>
                    <div class="edumall-demo-option-item">
                        <a href="index-online-academy.html" data-bs-tooltip="tooltip" data-bs-placement="top" title=""
                          data-bs-original-title="Online Academy">
                            <img src="{{ asset('') }}assets/images/demo/home-03.jpg" alt="Home" width="130" height="158">
                        </a>
                    </div>
                    <div class="edumall-demo-option-item">
                        <a href="index-education-center.html" data-bs-tooltip="tooltip" data-bs-placement="top" title=""
                          data-bs-original-title="Education Center">
                            <img src="{{ asset('') }}assets/images/demo/home-04.jpg" alt="Home" width="130" height="158">
                        </a>
                    </div>
                    <div class="edumall-demo-option-item">
                        <a href="index-university.html" data-bs-tooltip="tooltip" data-bs-placement="top" title=""
                          data-bs-original-title="University">
                            <img src="{{ asset('') }}assets/images/demo/home-05.jpg" alt="Home" width="130" height="158">
                        </a>
                    </div>
                    <div class="edumall-demo-option-item">
                        <a href="index-language-academic.html" data-bs-tooltip="tooltip" data-bs-placement="top"
                          title="" data-bs-original-title="Language Academic">
                            <img src="{{ asset('') }}assets/images/demo/home-06.jpg" alt="Home" width="130" height="158">
                        </a>
                    </div>
                    <div class="edumall-demo-option-item">
                        <a href="index-single-instructor.html" data-bs-tooltip="tooltip" data-bs-placement="top"
                          title="" data-bs-original-title="Single Instructor">
                            <img src="{{ asset('') }}assets/images/demo/home-07.jpg" alt="Home" width="130" height="158">
                        </a>
                    </div>
                    <div class="edumall-demo-option-item">
                        <a href="index-dev.html" data-bs-tooltip="tooltip" data-bs-placement="top" title=""
                          data-bs-original-title="Dev">
                            <img src="{{ asset('') }}assets/images/demo/home-08.jpg" alt="Home" width="130" height="158">
                        </a>
                    </div>
                    <div class="edumall-demo-option-item">
                        <a href="index-online-art.html" data-bs-tooltip="tooltip" data-bs-placement="top" title=""
                          data-bs-original-title="Online Art">
                            <img src="{{ asset('') }}assets/images/demo/home-09.jpg" alt="Home" width="130" height="158">
                        </a>
                    </div>
                </div>

            </div>

        </div>
        <!-- Edumall Demo Option End -->



        <!-- JS Vendor, Plugins & Activation Script Files -->

        @include('inc.script')
    </body>

</html>
