@extends('userlayout')
@section('content')

<!-- header begin -->
<header class="transparent">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="de-flex sm-pt10">
                    <div class="de-flex-col">
                        <div class="de-flex-col">
                            <!-- logo begin -->
                            <div id="logo">
                                <a href="{{URL::to('/')}}">
                                    <img alt="" class="logo" src="{{ asset('frontend/images/logo-light.png')}}" />
                                    <img alt="" class="logo-2" src="{{ asset('frontend/images/logo.png')}}" />
                                </a>
                            </div>
                            <!-- logo close -->
                        </div>
                        <div class="de-flex-col">
                            <input id="quick_search" class="xs-hide" name="quick_search"
                                placeholder="search item here..." type="text" />
                        </div>
                    </div>
                    <div class="de-flex-col header-col-mid">
                        <!-- mainmenu begin -->
                        <ul id="mainmenu">
                            <li>
                                <a href="index.html">Home<span></span></a>
                                <ul>
                                    <li><a href="03_grey-index.html">Grey Scheme</a></li>
                                    <li><a href="05_black-index.html">Black Scheme</a></li>
                                    <li><a href="06_clivus-index.html">Clivus Scheme</a></li>
                                    <li><a href="04_retro-index.html">Retro Scheme</a></li>
                                    <li><a href="index.html">Homepage 1</a></li>
                                    <li><a href="index-2.html">Homepage 2</a></li>
                                    <li><a href="index-3.html">Homepage 3</a></li>
                                    <li><a href="index-4.html">Homepage 4</a></li>
                                    <li><a href="index-5.html">Homepage 5</a></li>
                                    <li><a href="index-6.html">Homepage 6</a></li>
                                    <li><a href="index-7.html">Homepage 7</a></li>
                                    <li><a href="index-8.html">Homepage 8</a></li>
                                    <li><a href="index-9.html">Homepage 9</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="explore.html">Explore<span></span></a>
                                <ul>
                                    <li><a href="explore.html">Explore</a></li>
                                    <li><a href="explore-2.html">Explore 2</a></li>
                                    <li><a href="explore-music-nft.html">New: Music NFT</a></li>
                                    <li><a href="collection.html">Collections</a></li>
                                    <li><a href="live-auction.html">Live Auction</a></li>
                                    <li><a href="item-details.html">Item Details</a></li>
                                    <li><a href="help-center.html">Help Center</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Pages<span></span></a>
                                <ul>
                                    <li><a href="author.html">Author</a></li>
                                    <li><a href="profile.html">Profile</a></li>
                                    <li><a href="wallet.html">Wallet</a></li>
                                    <li><a href="create-options.html">Create</a></li>
                                    <li><a href="news.html">News</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="login-2.html">Login 2</a></li>
                                    <li><a href="register.html">Register</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Stats<span></span></a>
                                <ul>
                                    <li><a href="activity.html">Activity</a></li>
                                    <li><a href="rankings.html">Rankings</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Elements<span></span></a>
                                <ul>
                                    <li><a href="icons-elegant.html">Elegant Icons</a></li>
                                    <li><a href="icons-etline.html">Etline Icons</a></li>
                                    <li><a href="icons-font-awesome.html">Font Awesome Icons</a></li>
                                    <li><a href="accordion.html">Accordion</a></li>
                                    <li><a href="alerts.html">Alerts</a></li>
                                    <li><a href="counters.html">Counters</a></li>
                                    <li><a href="modal.html">Modal</a></li>
                                    <li><a href="popover.html">Popover</a></li>
                                    <li><a href="pricing-table.html">Pricing Table</a></li>
                                    <li><a href="progress-bar.html">Progress Bar</a></li>
                                    <li><a href="tabs.html">Tabs</a></li>
                                    <li><a href="tooltips.html">Tooltips</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="menu_side_area">
                            <a href="wallet.html" class="btn-main btn-wallet"><i
                                    class="icon_wallet_alt"></i><span>Connect Wallet</span></a>
                            <span id="menu-btn"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header close -->
<!-- content begin -->
<div class="no-bottom no-top" id="content">
    <div id="top"></div>

    <section class="full-height relative no-top no-bottom vertical-center"
        data-bgimage="url({{ asset('frontend/images/background/subheader.jpg')}}) top"
        data-stellar-background-ratio=".5">
        <div class="overlay-gradient t50">
            <div class="center-y relative">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 text-light wow fadeInRight" data-wow-delay=".5s">
                            <div class="spacer-10"></div>
                            <h1>Create, sell or collect digital items.</h1>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua ut enim.</p>
                        </div>

                        <div class="col-lg-4 offset-lg-2 wow fadeIn" data-wow-delay=".5s">
                            <div class="box-rounded padding40" data-bgcolor="#ffffff">
                                <h3 class="mb10">Sign In</h3>
                                <p>Login using an existing account or create a new account <a
                                        href="{{ URL::to('/dang-ki') }}">here<span></span></a>.</p>
                                <form name="contactForm" id='contact_form' class="form-border needs-validation"
                                    novalidate>
                                    <div class="field-set">
                                        <input type='text' name='username' id='username' class="form-control"
                                            placeholder="username">
                                    </div>
                                    <div class="field-set">
                                        <input type='password' name='password' id='password' class="form-control"
                                            placeholder="password">
                                    </div>
                                    <div class="field-set">
                                        <input type='submit' id='login' value='Submit'
                                            class="btn btn-main btn-fullwidth color-2">
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="spacer-single"></div>
                                    <!-- social icons -->
                                    <ul class="list s3">
                                        <li>Login with:</li>
                                        <li><a href="{{ URL::to('/login-facebook') }}">Facebook</a></li>
                                        <li><a href="{{ URL::to('/login-google') }}">Google</a></li>
                                    </ul>
                                    <!-- social icons close -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script type="text/javascript">
    $(document).on('click', '#login', function(e) {
        event.preventDefault()
        var username = $('#username').val();
        var password = $('#password').val();
        if(username != "" || password != ""){
            axios.post("login", {
                username: username,
                password: password,
            })
            .then(function (response) {
                if(response.data == 1){
                     window.location = 'trang-chu';
                }
                else{
                    Swal.fire({
                        icon: 'warning',
                        title: 'Fail',
                        text: 'Wrong account or password',
                    })
                }
            })
        }
        else{
            Swal.fire({
                icon: 'warning',
                title: 'Fail',
                text: 'Please enter your account or password',
                })
            }
        }
    )
</script>
<!-- footer close -->
@endsection
