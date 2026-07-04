<!DOCTYPE html>

<html lang="en">



<head>



    @include('frontend.layouts.head')

</head>





<body>

<!-- Add this at the end of your body -->

<div id="google_translate_element" style="display:none"></div>

    <div class="loader">

        @if (request()->is('/') || request()->is('index.php'))

            <h3>

                <span>Pioneering</span>

                <span><strong>Creative</strong></span>

                <span>Excellence</span>

            </h3>

            <div class="logo">

                <div class="block"></div>

                <img src="{{ asset('/frontend/images/images/Creative IT Park w.webp') }}" loading="eager" alt="">

            </div>

        @else

            <div class="spinner"></div>

        @endif

    </div>

    <!-- wrapper -->

    <div class="mil-wrapper visible-none">



        @include('frontend.layouts.header')

        {{-- @include('frontend.layouts.test_header') --}}



        @yield('content')



        <!-- footer -->

        @include('frontend.layouts.footer')

        <!-- footer end -->



    </div>

    <!-- wrapper end -->



    @include('frontend.layouts.script')

</body>



</html>

