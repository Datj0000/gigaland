@extends('userlayout')
@section('content')
<!-- header begin -->
<style>
    .card {
        perspective: 150rem;
        position: relative;
        height: 30rem;
    }

    .card__side {
        backface-visibility: hidden;
        width: 100%;
        position: absolute;
        top: 0;
        left: 0;
        cursor: pointer;
        color: white;
        font-size: 2rem;
        height: 30rem;
        transition: all .8s ease;
        border-radius: 5rem;
        overflow: hidden;
        box-shadow: 0 1.5rem 4rem rgba(0, 0, 0, 0.15);
    }

    .card__side--front {
        background-color: #fff;
    }

    .card__side--back {
        transform: rotateY(180deg);
    }

    .card__side--back-1 {
        background-image: linear-gradient(to right, #ffb900, #ff7730);
    }

    .card__side--back-2 {
        background-image: linear-gradient(to right, #8e9efc, #1c3eff);
    }

    .card__side--back-3 {
        background-image: linear-gradient(to right, #55c57a, #28b485);
    }

    /* .card:hover .card__side--front {
        transform: rotateY(-180deg);
    }

    .card:hover .card__side--back {
        transform: rotateY(0);
    } */

    .card__picture {
        background-size: cover;
        background-blend-mode: screen;
        height: 20rem;
        clip-path: ellipse(80% 70% at 50% 30%);
    }

    .card__picture--1 {
        background-image: linear-gradient(to right, #ffb900, #ff7730), url("frontend/images/involve1.jpg");
    }

    .card__picture--2 {
        background-image: linear-gradient(to right, #8e9efc, #1c3eff), url("frontend/images/involve2.jpg");
    }

    .card__picture--3 {
        background-image: linear-gradient(to right, #55c57a, #28b485), url("frontend/images/involve3.jpg");
    }

    .card__heading {
        font-size: 2rem;
        font-weight: 300;
        text-align: right;
        text-transform: uppercase;
        position: absolute;
        top: 10rem;
        right: 1.5rem;
        width: 75%;
    }

    .card__heading-span {
        border-radius: 5rem;
        padding: .3rem .8rem;
        -webkit-box-decoration-break: clone;
    }

    .card__heading-span--1 {
        background-image: linear-gradient(to right bottom, rgba(255, 185, 0, 0.85), rgba(255, 119, 48, 0.85));
    }

    .card__heading-span--2 {
        background-image: linear-gradient(to right bottom, rgba(142, 158, 252, 0.85), rgba(28, 62, 255, 0.85));
    }

    .card__heading-span--3 {
        background-image: linear-gradient(to right bottom, rgba(85, 197, 122, 0.85), rgba(40, 180, 133, 0.85));
    }

    .card__details {
        /* padding: 3rem; */
        color: #777777;
    }

    .card__details ul {
        /* list-style: none; */
        width: 70%;
        margin: 0 auto;
    }

    .card__details ul li {
        text-align: center;
        font-size: 1rem;
        padding: .7rem;
    }

    .card__details ul li:not(:last-child) {
        border-bottom: 1px solid #dbdbdb;
    }

    .card__cta {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 90%;
        text-align: center;
    }

    .card__price-only {
        font-size: 1.4rem;
        margin-bottom: 3rem;
        text-transform: uppercase;
    }

    .card__price-box {
        text-align: center;
        color: #fff;
        margin-bottom: 8rem;
    }

    .card__price-value {
        font-size: 6rem;
        font-weight: 100;
        margin-bottom: 5rem;
    }

    /* @media (max-width: 900px) {
        .card {
            height: auto;
        }

        .card__side {
            height: auto;
            border-radius: 5rem 5rem 0rem 0rem;
            position: relative;
        }

        .card__side--back {
            transform: rotateY(0);
            border-radius: 0rem 0rem 5rem 5rem;
        }

        .card:hover .card__side--front {
            transform: rotateY(0);
        }

        .card__cta {
            position: relative;
            top: 0;
            left: 0;
            transform: translate(0);
            width: 100%;
            padding: 4rem;
        }

        .card__price-box {
            margin-bottom: 3rem;
        }

        .card__price-value {
            font-size: 6rem;
        }
    } */
</style>
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
                                <a href="create-options.html" class="btn-main"><i
                                        class="fa fa-plus"></i><span>Create</span></a>

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

    <!-- section begin -->
    <section id="subheader" class="text-light" data-bgimage="url(frontend/images/background/subheader.jpg) top">
        <div class="center-y relative text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>Buy attendance package</h1>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->


    <!-- section begin -->
    <section id="section-main" aria-label="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card__side card__side--front">
                            <div class="card__picture card__picture--1">
                                &nbsp;
                            </div>
                            <h4 class="card__heading">
                                <span class="card__heading-span card__heading-span--1">
                                    Control <br> your time
                                </span>

                            </h4>
                            <div class="card__details">
                                <ul>
                                    <li>3 hours</li>
                                    <li>1000 students</li>
                                    <li>5 star rated</li>
                                </ul>

                            </div>
                        </div>

                        {{-- <div class="card__side card__side--back card__side--back-1">
                            <div class="card__cta">
                                <div class="card__price-box">
                                    <p class="card__price-only">
                                        Only
                                    </p>
                                    <p class="card__price-value">
                                        $16
                                    </p>
                                    <a href="#popup" class="btn btn--white">Buy now</a>
                                </div>
                            </div>
                        </div> --}}

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card__side card__side--front">
                            <div class="card__picture card__picture--2">
                                &nbsp;
                            </div>
                            <h4 class="card__heading">
                                <span class="card__heading-span card__heading-span--2">
                                    make <br> mindmap
                                </span>

                            </h4>
                            <div class="card__details">
                                <ul>
                                    <li>10 hours</li>
                                    <li>5000 students</li>
                                    <li>5 star rated</li>
                                </ul>

                            </div>
                        </div>
                        <div class="card__side card__side--back card__side--back-2">
                            <div class="card__cta">
                                <div class="card__price-box">
                                    <p class="card__price-only">
                                        Only
                                    </p>
                                    <p class="card__price-value">
                                        $20
                                    </p>
                                    <a href="#popup" class="btn btn--white">Buy now</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card__side card__side--front">
                            <div class="card__picture card__picture--3">
                                &nbsp;
                            </div>
                            <h4 class="card__heading">
                                <span class="card__heading-span card__heading-span--3">
                                    make<br> your target
                                </span>

                            </h4>
                            <div class="card__details">
                                <ul>
                                    <li>15 hours</li>
                                    <li>5000 students</li>
                                    <li>5 star rated</li>
                                </ul>

                            </div>
                        </div>
                        <div class="card__side card__side--back card__side--back-3">
                            <div class="card__cta">
                                <div class="card__price-box">
                                    <p class="card__price-only">
                                        Only
                                    </p>
                                    <p class="card__price-value">
                                        $25
                                    </p>
                                    <a href="#popup" class="btn btn--white">Buy now</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script type="text/javascript">

</script>
@endsection
