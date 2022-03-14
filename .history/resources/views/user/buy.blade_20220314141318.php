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
    <section aria-label="section">
        <div class="container">
            <div class="row wow fadeIn">
                <div class="col-md-6 offset-md-3">
                    <p>Select the attendance package you want to buy. Attend attendance continuously for 7 days from 6:00 am to 6:30 am to get back the money spent and get more rewards</p>
                    <span data-package="1" class="opt-create buy-package">
                        <img src="{{asset('frontend/images/misc/coll-single.png')}}" alt="">
                        <h3>1.000.000 FPI</h3>
                    </span>
                    <span data-package="2" class="opt-create buy-package">
                        <img src="{{asset('frontend/images/misc/coll-single.png')}}" alt="">
                        <h3>3.000.000 FPI</h3>
                    </span>
                    <span data-package="3" class="opt-create buy-package">
                        <img src="{{asset('frontend/images/misc/coll-single.png')}}" alt="">
                        <h3>7.000.000 FPI</h3>
                    </span>
                    <span data-package="4" class="opt-create buy-package">
                        <img src="{{asset('frontend/images/misc/coll-single.png')}}" alt="">
                        <h3>10.000.000 FPI</h3>
                    </span>
                </div>
            </div>
        </div>
    </section>

</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script type="text/javascript">
    $(document).on('click', '.buy-package', function(e) {
        e.preventDefault();
        var package = $(this).data('package');
        Swal.fire({
            title: "{{__('lang.question')}}",
            text: "
Are you sure you want to buy this package??",
            icon: "question",
            showCancelButton: true,
            confirmButtonText: "{{__('lang.ok')}}!",
            cancelButtonText: "{{__('lang.no')}}"
        })
        .then(function(result) {
            if (result.value) {
                axios.get('delete-customer/' + customer_id)
                .then(function (response) {
                    Swal.fire({
                        icon: "success",
                        title: "{{__('lang.success')}}",
                        text: "{{__('lang.delete_success')}}",
                        showConfirmButton: false,
                        timer: 1500
                    });
                    i = 0;
                    table.ajax.reload();
                })
                .catch((error) => {
                    console.log(error);
                });
            }
        });
        e.preventDefault();
    })
</script>
@endsection
