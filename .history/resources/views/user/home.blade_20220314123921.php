@extends('userlayout')
@section('content')
<!-- header begin -->
<header class="transparent header-light scroll-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="de-flex sm-pt10">
                    <div class="de-flex-col">
                        <div class="de-flex-col">
                            <!-- logo begin -->
                            <div id="logo">
                                <a href="{{URL::to('/')}}">
                                    <img alt="" src="{{ asset('frontend/images/logo-1.png')}}" />
                                </a>
                            </div>
                            <!-- logo close -->
                        </div>
                    </div>
                    <div class="de-flex-col header-col-mid customer">
                        <!-- mainmenu begin -->
                        <div class="menu_side_area">
                            <?php
                                $customer_id = Session::get('customer_id');
                                $customer_name = Session::get('customer_name');
                                $customer_image = Session::get('customer_image');
                                $customer_type = Session::get('customer_type');
                                if(isset($customer_id)){
                            ?>
                            <div class="de-login-menu">
                                <a href="{{ URL::to('/buy-package')}}" class="btn-main">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <span>Attendance package</span>
                                </a>
                                <span id="de-click-menu-notification" class="de-menu-notification">
                                    <span class="d-count">8</span>
                                    <i class="fa fa-bell"></i>
                                </span>

                                <span id="de-click-menu-profile" class="de-menu-profile">
                                    <?php
                                            $customer_image = Session::get('customer_image');
                                            if(isset($customer_image) && isset($customer_type)){
                                        ?>
                                    <img src="{{ $customer_image}}" class="img-fluid" alt="">
                                    <?php
                                        }else if(isset($customer_image)){
                                        ?>
                                    <img src="{{ asset('uploads/avatar/' . $customer_image . '')}}" class="img-fluid"
                                        alt="">
                                    <?php
                                        }else{
                                        ?>
                                    <img src="{{ asset('backend/media/users/blank.png')}}" class="img-fluid" alt="">
                                    <?php
                                        }
                                        ?>
                                </span>

                                <div id="de-submenu-notification" class="de-submenu">
                                    <div class="de-flex">
                                        <div>
                                            <h4>Notifications</h4>
                                        </div>
                                        <a href="#">Show all</a>
                                    </div>

                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img class="lazy"
                                                    src="{{ asset('frontend/images/author/author-2.jpg')}}" alt="">
                                                <div class="d-desc">
                                                    <span class="d-name"><b>Mamie Barnett</b> started following
                                                        you</span>
                                                    <span class="d-time">1 hour ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="lazy"
                                                    src="{{ asset('frontend/images/author/author-3.jpg')}}" alt="">
                                                <div class="d-desc">
                                                    <span class="d-name"><b>Nicholas Daniels</b> liked your item</span>
                                                    <span class="d-time">2 hours ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="lazy"
                                                    src="{{ asset('frontend/images/author/author-4.jpg')}}" alt="">
                                                <div class="d-desc">
                                                    <span class="d-name"><b>Lori Hart</b> started following you</span>
                                                    <span class="d-time">18 hours ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="lazy"
                                                    src="{{ asset('frontend/images/author/author-5.jpg')}}" alt="">
                                                <div class="d-desc">
                                                    <span class="d-name"><b>Jimmy Wright</b> liked your item</span>
                                                    <span class="d-time">1 day ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="lazy"
                                                    src="{{ asset('frontend/images/author/author-6.jpg')}}" alt="">
                                                <div class="d-desc">
                                                    <span class="d-name"><b>Karla Sharp</b> started following you</span>
                                                    <span class="d-time">3 days ago</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div id="de-submenu-profile" class="de-submenu">
                                    <div class="d-name">
                                        <h4>{{$customer_name}}</h4>
                                        <a href="profile.html">Set display name</a>
                                    </div>
                                    <div class="spacer-10"></div>
                                    <div class="d-balance">
                                        <h4>Balance</h4>
                                        12.858 ETH
                                    </div>
                                    <div class="spacer-10"></div>
                                    <div class="d-wallet">
                                        <h4>My Wallet</h4>
                                        <span id="wallet"
                                            class="d-wallet-address">DdzFFzCqrhshMSxb9oW3mRo4MJrQkusV3fGFSTwaiu4wPBqMryA9DYVJCkW9n7twCffG5f5wX2sSkoDXGiZB1HPa7K7f865Kk4LqnrME</span>
                                        <button id="btn_copy" title="Copy Text">Copy</button>
                                    </div>

                                    <div class="d-line"></div>

                                    <ul class="de-submenu-profile">
                                        <li><a href="{{ URL::to('/profile') }}"><i class="fa fa-user"></i> Edit
                                                profile</a>
                                            <?php
                                        $check_pass = Session::get('customer_pass');
                                        if($check_pass){
                                        ?>
                                        <li><a href="{{ URL::to('/changepass') }}"><i class="fa fa-pencil"></i> Change
                                                your password</a>
                                            <?php
                                        }
                                        ?>
                                        <li><a href="#" id="logout"><i class="fa fa-sign-out"></i> Sign out</a>
                                    </ul>
                                </div>
                            </div>
                            <?php
                            }
                            else {
                                ?>
                            <a href="{{ URL::to('/login') }}" class="btn-main btn-wallet"><i
                                    class="icon_wallet_alt"></i><span>Login</span></a>
                            <a href="{{ URL::to('/register') }}" class="btn-main btn-wallet"><i
                                    class="icon_wallet_alt"></i><span>Register</span></a>
                            <?php
                            }
                            ?>
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
    <section id="section-hero" aria-label="section" class="no-top no-bottom vh-100"
        data-bgimage="url({{ asset('frontend/images/background/bg-shape-1.jpg') }}) bottom">
        <div class="v-center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="spacer-single"></div>
                        <h6 class="wow fadeInUp" data-wow-delay=".5s"><span class="text-uppercase id-color-2">Happy Pi
                                Day!</span></h6>
                        <div class="spacer-10"></div>
                        <h1 class="wow fadeInUp" data-wow-delay=".75s">Fan Pi Network Token</h1>
                        <p class="wow fadeInUp lead" data-wow-delay="1s">
                            The coin was created and built by the Pi Network community. <br>
                            Used as peer-to-peer payments.<br>
                            Contract Address: 0x8A751ab17A5E81acf3CcBE2a695f84bF55A3523A
                        </p>
                        <div class="spacer-10"></div>
                        <a href="#" id="attendance" class="btn-main wow fadeInUp lead" data-wow-delay="1.25s">Attendance</a>
                        <div class="mb-sm-30"></div>

                        {{-- <div class="col wow fadeInUp" style="margin-top:20px;" data-wow-delay="1s">
                            <a class="app-apple" href="#" title="Download">
                                <img src="https://imgmainsite.be.com.vn/2020/11/b4d3eb95-app_apple@2x.png" alt=""
                                    style="width: 138px;">
                            </a>

                            <a class="app-android" href="#" title="Download">
                                <img src="https://imgmainsite.be.com.vn/2020/11/425a09db-app_android@2x.png" alt=""
                                    style="width: 151px;">
                            </a>
                        </div> --}}

                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('frontend/images/misc/app-mobile.png')}}" class="lazy img-fluid wow fadeIn"
                            data-wow-delay="1.25s" alt="" style="width: 270px;margin-left: 66px;">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="section-intro" class="no-bottom" style="background-size: cover;padding-top: 200px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2>Simpler to easily pay</h2>
                        <div class="small-border bg-color-2"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-sm-30">
                    <div class="feature-box f-boxed style-3">
                        <i class="wow fadeInUp bg-color-2 i-boxed icon_genius"></i>
                        <div class="text">
                            <h4 class="wow fadeInUp">Decentralized</h4>
                            <p class="wow fadeInUp" data-wow-delay=".25s">
                                Decentralized
                                Secure, Immutable, non-counterfeitable and interoperable digital money.</p>
                        </div>
                        <i class="wm icon_genius"></i>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-sm-30">
                    <div class="feature-box f-boxed style-3">
                        <i class="wow fadeInUp bg-color-2 i-boxed icon_ribbon"></i>
                        <div class="text">
                            <h4 class="wow fadeInUp">Ownership of rights</h4>
                            <p class="wow fadeInUp" data-wow-delay=".25s">Relinquishment of token ownership by
                                the founder<br><br><br></p>
                        </div>
                        <i class="wm icon_ribbon"></i>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-sm-30">
                    <div class="feature-box f-boxed style-3">
                        <i class="wow fadeInUp bg-color-2 i-boxed icon_chat"></i>
                        <div class="text">
                            <h4 class="wow fadeInUp">Community</h4>
                            <p class="wow fadeInUp" data-wow-delay=".25s">Over 10 million members
                                worldwide<br><br><br></p>
                        </div>
                        <i class="wm icon_chat"></i>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-sm-30">
                    <div class="feature-box f-boxed style-3">
                        <i class="wow fadeInUp bg-color-2 i-boxed icon_target"></i>
                        <div class="text">
                            <h4 class="wow fadeInUp">Mission</h4>
                            <p class="wow fadeInUp" data-wow-delay=".25s">We are created to replace
                                BTC<br><br><br></p>
                        </div>
                        <i class="wm icon_target"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="section-collections" class="no-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2>Distribution</h2>
                        <div class="small-border bg-color-2"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 mb-sm-30">
                    <img src="{{ asset('frontend/images/misc/pi-background.png')}}" class="lazy img-fluid wow fadeIn"
                        data-wow-delay="1.25s" alt="">
                </div>

                <div class="col-lg-6 col-md-6 mb-sm-30">
                    <img src="{{ asset('frontend/images/misc/distribution.png')}}" class="lazy img-fluid wow fadeIn"
                        data-wow-delay="1.25s" alt="">
                </div>
            </div>
    </section>
    <section id="section-items" class="no-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2>Information</h2>
                        <div class="small-border bg-color-2"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 mb-sm-30">
                        <h6 class="wow fadeInUp" data-wow-delay=".5s"><span
                                class="text-uppercase id-color-2"><br><br><br><br><br>Happy Pi
                                Day!<br><br><br><br></span></h6>
                        <p class="wow fadeInUp lead" data-wow-delay="1s">
                            Today the FPi is worth around $0/euro etc. similar to Bitcoin in 2008. <br>The value
                            of FPi will be backed by the time, attention, goods and services provided by other
                            members of the network.<br>

                            By pooling our attention, goods and services around a common currency, FPi members
                            seek to capture more value than is normally reserved for banks, tech giants (e.g.
                            Facebook, Amazon) and other intermediaries.<br>

                            Today, we are laying the groundwork for this digital currency and marketplace by
                            distributing the currency, building the community, and developing the technology to
                            ensure its security.
                        </p>
                    </div>

                    <div class="col-lg-6 col-md-6 mb-sm-30">
                        <img src="{{ asset('frontend/images/misc/app-mobile.png')}}" class="lazy img-fluid wow fadeIn"
                            data-wow-delay="1.25s" alt="" style="width: 270px;margin-left: 66px;">
                    </div>
                </div>
            </div>
    </section>
    <section id="section-popular" class="pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2>Road Map</h2>
                        <div class="small-border bg-color-2"></div>
                    </div>
                </div>
                <div class="col-md-12 wow fadeIn">
                    <div class="timeline2">
                        <div class="container2 left2">
                            <div class="date2">15 Dec</div>
                            <i class="icon fa fa-home"></i>
                            <div class="content2">
                                <h2>Lorem ipsum dolor sit amet</h2>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat
                                    sagittis non. Ut blandit semper pretium.
                                </p>
                            </div>
                        </div>
                        <div class="container2 right2">
                            <div class="date2">22 Oct</div>
                            <i class="icon fa fa-gift"></i>
                            <div class="content2">
                                <h2>Lorem ipsum dolor sit amet</h2>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat
                                    sagittis non. Ut blandit semper pretium.
                                </p>
                            </div>
                        </div>
                        <div class="container2 left2">
                            <div class="date2">10 Jul</div>
                            <i class="icon fa fa-user"></i>
                            <div class="content2">
                                <h2>Lorem ipsum dolor sit amet</h2>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat
                                    sagittis non. Ut blandit semper pretium.
                                </p>
                            </div>
                        </div>
                        <div class="container2 right2">
                            <div class="date2">18 May</div>
                            <i class="icon fa fa-running"></i>
                            <div class="content2">
                                <h2>Lorem ipsum dolor sit amet</h2>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat
                                    sagittis non. Ut blandit semper pretium.
                                </p>
                            </div>
                        </div>
                        <div class="container2 left2">
                            <div class="date2">10 Feb</div>
                            <i class="icon fa fa-cog"></i>
                            <div class="content2">
                                <h2>Lorem ipsum dolor sit amet</h2>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat
                                    sagittis non. Ut blandit semper pretium.
                                </p>
                            </div>
                        </div>
                        <div class="container2 right2">
                            <div class="date2">01 Jan</div>
                            <i class="icon fa fa-certificate"></i>
                            <div class="content2">
                                <h2>Lorem ipsum dolor sit amet</h2>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat
                                    sagittis non. Ut blandit semper pretium.
                                </p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <section id="section-category" class="no-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2>Frequently Questions</h2>
                        <div class="small-border bg-color-2"></div>
                    </div>
                </div>
                <!-- Th??m c??u h???i + Js poup -->
                <div class="col-md-12 wow fadeIn">
                    <div class="accordion__item">
                        <button class="accordion__btn">

                            <span class="accordion__caption"><i class="far fa-lightbulb"></i>How do I figure out
                                what to learn?</span>
                            <span class="accordion__icon"><i class="fa fa-plus"></i></span>
                        </button>

                        <div class="accordion__content">
                            <p>The most important thing is that you want to learn something that interests you,
                                because once you start learning, you???ll be with this topic for a while. Choosing
                                something just because it???s popular or what others are doing isn???t the way to go
                                because if you don???t have a true interest in it, you???ll lose the motivation to
                                learn! Spend some time seriously looking into the different tech career paths
                                before choosing one to go down.</p>
                        </div>
                    </div>

                    <div class="accordion__item">
                        <button class="accordion__btn">

                            <span class="accordion__caption"><i class="far fa-lightbulb"></i>Which programming
                                language is the best to learn?</span>
                            <span class="accordion__icon"><i class="fa fa-plus"></i></span>
                        </button>

                        <div class="accordion__content">
                            <p>I usually tell most people to start by learning HTML and CSS, then move into
                                learning JavaScript. The reason is that JavaScript is used everywhere: frontend,
                                backend, and even to build mobile apps. It has many use cases, which is why I
                                think it???s smart to learn.</p>
                        </div>
                    </div>

                    <div class="accordion__item">
                        <button class="accordion__btn">

                            <span class="accordion__caption"><i class="far fa-lightbulb"></i>Is it possible to
                                do both graphic design and coding?</span>
                            <span class="accordion__icon"><i class="fa fa-plus"></i></span>
                        </button>

                        <div class="accordion__content">
                            <p>If you have an interest in coding and graphic design, then there???s nothing to say
                                you shouldn???t learn skills in both areas. They often work hand-in-hand, so
                                having knowledge and skills in both areas could be desirable for certain career
                                paths. You could also think about pursuing something in between like UI design,
                                which is a very in-demand career right now!
                                <br><br>
                                In general, having design skills along with coding skills is helpful. But it???s
                                also okay to do one over the other. My advice would be to just get started! You
                                can always change directions later??? as long as you???re changing directions to the
                                final destination you???re looking for!
                            </p>
                        </div>
                    </div>

                    <div class="accordion__item">
                        <button class="accordion__btn">

                            <span class="accordion__caption"><i class="far fa-lightbulb"></i>Should I learn
                                Python 2 or Python 3?</span>
                            <span class="accordion__icon"><i class="fa fa-plus"></i></span>
                        </button>

                        <div class="accordion__content">
                            <p>Now, in 2020, it???s a no-brainer: Python 3 is definitely the way to go. There are
                                still some situations where picking up Python 2 might be advantageous, or you
                                may just want to learn a little of the history and the differences between
                                Python 2 and 3 for curiosity???s sake, but job-wise, Python 3 is the clear winner.
                            </p>
                        </div>
                    </div>

                    <div class="accordion__item">
                        <button class="accordion__btn">

                            <span class="accordion__caption"><i class="far fa-lightbulb"></i>Should I learn
                                skills in several areas?</span>
                            <span class="accordion__icon"><i class="fa fa-plus"></i></span>
                        </button>

                        <div class="accordion__content">
                            <p>Personally, I???d say choose a path and stick to it! Learning too many things at
                                once will slow you down. Here are a few ideas of things you can choose to focus
                                on, and a little bit about each one.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
    $(document).on('click', '#attendance', function(e) {
        event.preventDefault()
        axios.post("login-user")
        .then(function (response) {
            if(response.data == 1){
                    window.location = 'home';
            }
            else{
                Swal.fire('','Wrong account or password','warning')
            }
        })
    })
</script>
@endsection
