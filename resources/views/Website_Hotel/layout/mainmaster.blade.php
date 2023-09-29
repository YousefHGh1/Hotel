<!DOCTYPE html>
<html lang="en" dir="ltr">
<!--begin::Head-->

<head>
    @include('Website_Hotel.layout.head')
</head>

<body>
    <!--[if lte IE 9]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!--====== HEADER START ======-->
    @include('Website_Hotel.layout.main-header')
    <!--====== HEADER END ======-->
    <!--====== OFF CANVAS START ======-->
    <!--====== OFF CANVAS END ======-->


    <!--====== content START ======-->
    @yield('content')
    <!--====== content END ======-->



    <!--====== Back to Top ======-->
    <!--====== FOOTER START ======-->
    @include('Website_Hotel.layout.footer')
    <!--====== FOOTER END ======-->

    <!--====== jquery js ======-->
    @include('Website_Hotel.layout.script')

</body>

</html>
