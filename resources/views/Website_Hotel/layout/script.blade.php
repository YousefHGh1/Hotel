<!--====== scripts ======-->
<!--====== jquery js ======-->
<script src="{{ asset('WebsiteHotel/assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
<script src="{{ asset('WebsiteHotel/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
<!--====== Bootstrap js ======-->
<script src="{{ asset('WebsiteHotel/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('WebsiteHotel/assets/js/popper.min.js') }}"></script>
<!--====== Slick js ======-->
<script src="{{ asset('WebsiteHotel/assets/js/slick.min.js') }}"></script>
<!--====== Isotope js ======-->
<script src="{{ asset('WebsiteHotel/assets/js/isotope.pkgd.min.js') }}"></script>
<!--====== Magnific Popup js ======-->
<script src="{{ asset('WebsiteHotel/assets/js/jquery.magnific-popup.min.js') }}"></script>
<!--====== inview js ======-->
<script src="{{ asset('WebsiteHotel/assets/js/jquery.inview.min.js') }}"></script>
<!--====== counterup js ======-->
<script src="{{ asset('WebsiteHotel/assets/js/jquery.countTo.js') }}"></script>
<!--====== Nice Select ======-->
<script src="{{ asset('WebsiteHotel/assets/js/jquery.nice-select.min.js') }}"></script>
<!--====== Bootstrap datepicker ======-->
<script src="{{ asset('WebsiteHotel/assets/js/bootstrap-datepicker.js') }}"></script>
<!--====== Wow JS ======-->
<script src="{{ asset('WebsiteHotel/assets/js/wow.min.js') }}"></script>
<!--====== Mapbox Map ======-->
<script src="{{ asset('WebsiteHotel/assets/js/leaflet.js') }}"></script>
<script src="{{ asset('WebsiteHotel/assets/js/mapbox-gl.min.js') }}"></script>
<script src="{{ asset('WebsiteHotel/assets/js/map.js') }}"></script>
<!--====== Main js ======-->
<script src="{{ asset('WebsiteHotel/assets/js/main.js') }}"></script>
<script>
    $(document).ready(function() {
        // var count = parseInt($('.calender-box ul.custom-style li .calender-input-box .calender-input-inner h3').html());
        $('.next-day').click(function(event) {
            event.preventDefault();
            var count = parseInt($(this).parent().siblings('h3 ').find('.counter-number').html());
            count++;
            $(this).parent().siblings('h3 ').find('.counter-number').html(count);
            if (count > 9) {
                $(this).parent().siblings('h3 ').find('.static-zero').addClass('d-none')
            }

            if (count >= 31) {
                parseInt($(this).parent().siblings('h3').find('.counter-number').html('31'))
            }

        });

        $('.prev-day').click(function(event) {
            event.preventDefault();
            var count = parseInt($(this).parent().siblings('h3').find('.counter-number').html());
            count--;
            $(this).parent().siblings('h3').find('.counter-number').html(count);

            if (count <= 9) {
                $(this).parent().siblings('h3 ').find('.static-zero').removeClass('d-none')
            }
            if (count <= 0) {
                parseInt($(this).parent().siblings('h3').find('.counter-number').html('0'))
            }
        });
    });
</script>

<!--end::Page Scripts-->
@yield('scripts')
