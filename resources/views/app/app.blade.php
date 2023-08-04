<!DOCTYPE html>

<html lang="en">

    @include('inc.head')

    <body>

        <main class="main-wrapper">

            <!-- Header start -->
            @include('inc.header')
            <!-- Header End -->


            @yield('main-body')


            <!-- Footer Start -->
            @include('inc.footer')
            <!-- Footer End -->

            <!--Back To Start-->
            <button id="backBtn" class="back-to-top backBtn">
                <i class="arrow-top fas fa-arrow-up"></i>
                <i class="arrow-bottom fas fa-arrow-up"></i>
            </button>
            <!--Back To End-->


        </main>
        @include('inc.modals')




        <!-- JS Vendor, Plugins & Activation Script Files -->
        @include('inc.script')


    </body>



</html>