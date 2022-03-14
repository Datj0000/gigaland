<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Fan Pi Network Token</title>
    <link rel="icon" href="{{ asset('frontend/images/icon.png')}}" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Fan Pi Network Token" name="description" />
    <meta content="" name="keywords" />
    <meta content="" name="author" />
    <meta name=csrf-token content="{{ csrf_token() }}">
    <!-- CSS Files
    ================================================== -->
    <link id="bootstrap" href="{{ asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link id="bootstrap-grid" href="{{ asset('frontend/css/bootstrap-grid.min.css')}}" rel="stylesheet"
        type="text/css" />
    <link id="bootstrap-reboot" href="{{ asset('frontend/css/bootstrap-reboot.min.css')}}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('frontend/css/animate.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/css/owl.carousel.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/css/owl.theme.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/css/owl.transitions.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/css/magnific-popup.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/css/jquery.countdown.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/css/style.css')}}" rel="stylesheet" type="text/css" />
    <!-- color scheme -->
    <link id="colors" href="{{ asset('frontend/css/colors/scheme-01.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/css/coloring.css')}}" rel="stylesheet" type="text/css" />
</head>

<body>

    <div id="wrapper">
        @yield('content')
        <!-- content close -->

        <a href="#" id="back-to-top"></a>

        <!-- footer begin -->
        <footer class="footer-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-1">
                        <div class="widget">
                            <h5>Marketplace</h5>
                            <ul>
                                <li><a href="#">All NFTs</a></li>
                                <li><a href="#">Art</a></li>
                                <li><a href="#">Music</a></li>
                                <li><a href="#">Domain Names</a></li>
                                <li><a href="#">Virtual World</a></li>
                                <li><a href="#">Collectibles</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-1">
                        <div class="widget">
                            <h5>Resources</h5>
                            <ul>
                                <li><a href="#">Help Center</a></li>
                                <li><a href="#">Partners</a></li>
                                <li><a href="#">Suggestions</a></li>
                                <li><a href="#">Discord</a></li>
                                <li><a href="#">Docs</a></li>
                                <li><a href="#">Newsletter</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-1">
                        <div class="widget">
                            <h5>Community</h5>
                            <ul>
                                <li><a href="#">Community</a></li>
                                <li><a href="#">Documentation</a></li>
                                <li><a href="#">Brand Assets</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Forum</a></li>
                                <li><a href="#">Mailing List</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-1">
                        <div class="widget">
                            <h5>Newsletter</h5>
                            <p>Signup for our newsletter to get the latest news in your inbox.</p>
                            <form action="blank.php" class="row form-dark" id="form_subscribe" method="post"
                                name="form_subscribe">
                                <div class="col text-center">
                                    <input class="form-control" id="txt_subscribe" name="txt_subscribe"
                                        placeholder="enter your email" type="text" /> <a href="#" id="btn-subscribe"><i
                                            class="arrow_right bg-color-secondary"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                            <div class="spacer-20"></div>
                            <small>Your email is safe with us. We don't spam.</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="subfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="de-flex">
                                <div class="de-flex-col">
                                    <a href="index.html">
                                        <img alt="" class="f-logo" src="{{ asset('frontend/images/logo.png')}}" /><span
                                            class="copy">&copy; Copyright
                                            2022 - Gigaland by Designesia</span>
                                    </a>
                                </div>
                                <div class="de-flex-col">
                                    <div class="social-icons">
                                        <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-rss fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer close -->

    </div>
    <!-- Javascript Files
    ================================================== -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    {{-- <script src="{{ asset('frontend/js/jquery.min.js')}}"></script> --}}
    <script src="{{ asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('frontend/js/wow.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.isotope.min.js')}}"></script>
    <script src="{{ asset('frontend/js/easing.js')}}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('frontend/js/enquire.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.plugin.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.countTo.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.countdown.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.lazy.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.lazy.plugins.min.js')}}"></script>
    <script src="{{ asset('frontend/js/designesia.js')}}"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- COOKIES NOTICE  -->
    <script src="{{ asset('frontend/js/cookit.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
    $(document).on('click', '#logout', function(e) {
        event.preventDefault()
        axios.get("logout")
            .then(function (response) {
                location.reload();
            });
        })
</script>
    <!-- FAQ JS -->
    <script>
        // select all accordion items
        const accItems = document.querySelectorAll(".accordion__item");

        // add a click event for all items
        accItems.forEach((acc) => acc.addEventListener("click", toggleAcc));

        function toggleAcc() {
        // remove active class from all items exept the current item (this)
        accItems.forEach((item) => item != this ? item.classList.remove("accordion__item--active") : null
        );

        // toggle active class on current item
        if (this.classList != "accordion__item--active") {
            this.classList.toggle("accordion__item--active");
        }
        }
    </script>

    <script>
        $(document).ready(function() {
        $.cookit({
          backgroundColor: '#101010',
          messageColor: '#fff',
          linkColor: '#FEF006',
          buttonColor: '#FEF006',
          messageText: "This website uses cookies to ensure you get the best experience on our website.",
          linkText: "Learn more",
          linkUrl: "index.html",
          buttonText: "I accept",
        });
      });
    </script>

</body>

</html>
