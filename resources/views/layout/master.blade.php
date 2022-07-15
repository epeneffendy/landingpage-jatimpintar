<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <title>Jatim Pintar</title>
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/template.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/lightbox.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/styles-aos.css')}}"/>
    <link rel="stylesheet" href="{{asset('/assets/css/aos.css')}}"/>
</head>

<body>

<header class="header-area header-sticky" data-aos="fade-down">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <a href="#" class="logo">
                        <img src="{{asset('assets/images/logo.png')}}" alt="Jatim Pintar">
                    </a>
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                        <li><a href="#abouts">Tentang</a></li>
                        <li><a href="#berita">Berita</a></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                </nav>
            </div>
        </div>
    </div>
</header>

<section class="section main-banner" id="top" data-section="section1">
    <video autoplay muted loop id="bg-video">
        <source src="{{asset('assets/images/course-video-01.mp4')}}" type="video/mp4"/>
    </video>
    <div class="video-overlay header-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="caption" data-aos="fade-right">
                        <hr style="color: white; width: 1300px; font-weight: bold; border: 1.5px solid; margin-top: 100px">
                        <h2 style="font-size: 50px">SITR JAWA TIMUR</h2>
                        {{--<h3>Sistem Informasi Tata Ruang Provinsi Jawa Timur</h3>--}}
                        {{--<div class="main-button-red">--}}
                            {{--<a href="https://jatim-pintar.com/webgis/main"  target="_blank"><div class="scroll-to-section">Go To Map!</div></a>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@yield('content')

<div class="footer">
    <p>© Dinas Perumahan Rakyat, Kawasan Permukiman dan Cipta Karya. </p>
</div>
</section>

<script src="{{asset('/assets/js/aos.js')}}"></script>
<script src="{{asset('/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('/assets/js/isotope.min.js')}}"></script>
<script src="{{asset('/assets/js/owl-carousel.js')}}"></script>
<script src="{{asset('/assets/js/lightbox.js')}}"></script>
<script src="{{asset('/assets/js/tabs.js')}}"></script>
<script src="{{asset('/assets/js/video.js')}}"></script>
<script src="{{asset('/assets/js/slick-slider.js')}}"></script>
<script src="{{asset('/assets/js/custom.js')}}"></script>
<script>
    AOS.init({
        easing: 'ease-in-out-sine'
    });

    //according to loftblog tut
    $('.nav li:first').addClass('active');

    var showSection = function showSection(section, isAnimate) {
        var
            direction = section.replace(/#/, ''),
            reqSection = $('.section').filter('[data-section="' + direction + '"]'),
            reqSectionPos = reqSection.offset().top - 0;

        if (isAnimate) {
            $('body, html').animate({
                    scrollTop: reqSectionPos
                },
                800);
        } else {
            $('body, html').scrollTop(reqSectionPos);
        }

    };

    var checkSection = function checkSection() {
        $('.section').each(function () {
            var
                $this = $(this),
                topEdge = $this.offset().top - 80,
                bottomEdge = topEdge + $this.height(),
                wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
                var
                    currentId = $this.data('section'),
                    reqLink = $('a').filter('[href*=\\#' + currentId + ']');
                reqLink.closest('li').addClass('active').siblings().removeClass('active');
            }
        });
    };

    $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
        e.preventDefault();
        showSection($(this).attr('href'), true);
    });

    $(window).scroll(function () {
        checkSection();
    });
</script>
</body>

</body>
</html>
