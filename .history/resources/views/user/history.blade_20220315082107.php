@extends('userlayout')
@section('content')
<style>
    .shape {
        width: 200px;
        height: 200px;
        -webkit-clip-path: circle(50% at 50% 50%);
        clip-path: circle(50% at 50% 50%);
        shape-outside: circle(50% at 50% 50%);
        border-radius: 50%;
        border: 1px solid black;
    }

    .shape img {
        width: 100%;
        height: 100%;
    }

    @media screen and (max-width: 374.98px) {
        .shape {
            width: 100px;
            height: 100px;
        }
    }
</style>
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
                                        <img src="{{ asset('uploads/avatar/' . $customer_image . '')}}" class="img-fluid" alt="">
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
                                        <a href="{{ URL::to('/profile') }}">Set display name</a>
                                    </div>
                                    <div class="spacer-10"></div>
                                    <div class="d-wallet">
                                        <h4>Balance</h4>
                                        <span id="wallet"class="d-wallet-address">{{Session::get('customer_balance')}} FPI</span>
                                        <button id="btn_copy"><a href="{{ URL::to('/recharge') }}">recharge</a></button>
                                    </div>
                                    <div class="d-line"></div>
                                    <ul class="de-submenu-profile">
                                        <li><a href="{{ URL::to('/history') }}"><i class="fa fa-history"></i> Transaction history</a>
                                        <li><a href="{{ URL::to('/profile') }}"><i class="fa fa-user"></i> Edit profile</a>
                                        <?php
                                            $check_pass = Session::get('customer_pass');
                                            if($check_pass){
                                        ?>
                                            <li><a href="{{ URL::to('/changepass') }}"><i class="fa fa-pencil"></i> Change your password</a>
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
                        <h1>Transaction history</h1>
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
                <div class="col-lg-8 offset-lg-2">
                    <form id="form-create-item" class="form-border" method="post" action="email.php">
                    <div class="de_tab tab_simple">

                        <ul class="de_nav">
                            <li class="active"><span><i class="fa fa-user"></i>Recharge historyAttendance package purchase history </span></li>
                            <li><span><i class="fa fa-exclamation-circle"></i>Recharge history </span></li>
                            <li><span><i class="fa fa-paint-brush"></i>Appearance</span></li>
                        </ul>

                        <div class="de_tab_content">
                            <div class="tab-1">
                                <div class="row wow fadeIn">
                                    <div class="col-lg-8 mb-sm-20">
                                            <div class="field-set">
                                                <h5>Username</h5>
                                                <input type="text" name="username" id="username" class="form-control" placeholder="Enter username" />

                                                <div class="spacer-20"></div>

                                                <h5>Custom URL</h5>
                                                <input type="text" name="custom_url" id="custom_url" class="form-control" placeholder="Enter your custom URL" />

                                                <div class="spacer-20"></div>

                                                <h5>Bio</h5>
                                                <textarea name="bio" id="bio" class="form-control" placeholder="Tell the world who you are!" ></textarea>

                                                <div class="spacer-20"></div>

                                                <h5>Email Address*</h5>
                                                <input type="text" name="email_address" id="email_address" class="form-control" placeholder="Enter email" />

                                                <div class="spacer-20"></div>

                                                <h5><i class="fa fa-link"></i> Your site</h5>
                                                <input type="text" name="your_site" id="your_site" class="form-control" placeholder="Enter Website URL" />

                                                <div class="spacer-20"></div>

                                                <h5><i class="fa fa-twitter"></i> Twitter username</h5>
                                                <input type="text" name="twitter_usernam" id="twitter_usernam" class="form-control" placeholder="Enter Twitter username" />

                                                <div class="spacer-20"></div>

                                                <h5><i class="fa fa-instagram"></i> Instagram username</h5>
                                                <input type="text" name="instagram_username" id="instagram_username" class="form-control" placeholder="Enter Instagram username" />

                                            </div>
                                    </div>

                                    <div id="sidebar" class="col-lg-4">
                                        <h5>Profile image <i class="fa fa-info-circle id-color-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Recommend 400 x 400. Max size: 50MB. Click the image to upload."></i></h5>

                                        <img src="images/author_single/author_thumbnail.jpg" id="click_profile_img" class="d-profile-img-edit img-fluid" alt="">
                                        <input type="file" id="upload_profile_img">

                                        <div class="spacer-30"></div>

                                        <h5>Profile banner <i class="fa fa-info-circle id-color-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Recommend 1500 x 500. Max size: 50MB. Click the image to upload."></i></h5>
                                        <img src="images/author_single/author_banner.jpg" id="click_banner_img" class="d-banner-img-edit img-fluid" alt="">
                                        <input type="file" id="upload_banner_img">

                                    </div>
                                </div>
                            </div>

                            <div class="tab-2">
                                <div class="row wow fadeIn">
                                    <div class="col-md-6 mb-sm-20">
                                        <div class="switch-with-title s2">
                                            <h5>Item Sold</h5>
                                            <div class="de-switch">
                                              <input type="checkbox" id="notif-item-sold" class="checkbox">
                                              <label for="notif-item-sold"></label>
                                            </div>
                                            <div class="clearfix"></div>
                                            <p class="p-info">When someone purhased your item.</p>
                                        </div>

                                        <div class="spacer-20"></div>

                                        <div class="switch-with-title s2">
                                            <h5>Bid Activity</h5>
                                            <div class="de-switch">
                                              <input type="checkbox" id="notif-bid-activity" class="checkbox">
                                              <label for="notif-bid-activity"></label>
                                            </div>
                                            <div class="clearfix"></div>
                                            <p class="p-info">When someone purhased your item.</p>
                                        </div>

                                        <div class="spacer-20"></div>

                                        <div class="switch-with-title s2">
                                            <h5>Price Change</h5>
                                            <div class="de-switch">
                                              <input type="checkbox" id="notif-price-change" class="checkbox">
                                              <label for="notif-price-change"></label>
                                            </div>
                                            <div class="clearfix"></div>
                                            <p class="p-info">When an item you made an offer on changes in price.</p>
                                        </div>

                                    </div>

                                    <div class="col-md-6">
                                        <div class="switch-with-title s2">
                                            <h5>Auction Expiration</h5>
                                            <div class="de-switch">
                                              <input type="checkbox" id="notif-auction-expiration" class="checkbox">
                                              <label for="notif-auction-expiration"></label>
                                            </div>
                                            <div class="clearfix"></div>
                                            <p class="p-info">When an auction you created ends.</p>
                                        </div>

                                        <div class="spacer-20"></div>

                                        <div class="switch-with-title s2">
                                            <h5>Outbid</h5>
                                            <div class="de-switch">
                                              <input type="checkbox" id="notif-outbid" class="checkbox">
                                              <label for="notif-outbid"></label>
                                            </div>
                                            <div class="clearfix"></div>
                                            <p class="p-info">When an offer you placed is exceeded by another user.</p>
                                        </div>

                                        <div class="spacer-20"></div>

                                        <div class="switch-with-title s2">
                                            <h5>Successful Purchase</h5>
                                            <div class="de-switch">
                                              <input type="checkbox" id="notif-successful-purchase" class="checkbox">
                                              <label for="notif-successful-purchase"></label>
                                            </div>
                                            <div class="clearfix"></div>
                                            <p class="p-info">When you successfully buy an item.</p>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="tab-3">
                                <div class="row wow fadeIn">
                                    <div class="col-md-6 mb-sm-30">
                                        <h5>Language</h5>
                                        <p class="p-info">Select your prefered language.</p>
                                        <div id="select_lang" class="dropdown fullwidth">
                                            <a href="#" class="btn-selector">English</a>
                                            <ul>
                                                <li class="active"><span>English</span></li>
                                                <li><span>France</span></li>
                                                <li><span>German</span></li>
                                                <li><span>Japan</span></li>
                                                <li><span>Italy</span></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <h5>Scheme</h5>
                                        <p class="p-info">Customize how Gigaland looks for you.</p>
                                        <div id="select_scheme" class="dropdown fullwidth">
                                            <a href="#" class="btn-selector">Default scheme</a>
                                            <ul>
                                                <li class="active"><span>Default scheme</span></li>
                                                <li><span>Light scheme</span></li>
                                                <li><span>Dark scheme</span></li>
                                                <li><span>Grey scheme</span></li>
                                                <li><span>Retro scheme</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="spacer-30"></div>
                    <input type="button" id="submit" class="btn-main" value="Update profile">
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script type="text/javascript">
    function ImagesFileAsURL() {
        var fileToLoad = $('#upload_profile_img').get(0).files[0];
        var fileReader = new FileReader();
        fileReader.onload = function(fileLoaderEvent) {
            var srcData = fileLoaderEvent.target.result;
            $('#click_profile_img').attr('src',srcData);
        }
        fileReader.readAsDataURL(fileToLoad);
    }
    load_profile();
    function load_profile(){
        axios.get("load-profile-user")
            .then(function (response) {
                $('#name').val(response.data.data.customer_name);
                $('#email').val(response.data.data.customer_email);
                $('#phone').val(response.data.data.customer_phone);
            })
            .catch((error) => {
                console.log(error);
            });
    }
    document.querySelector('#name').addEventListener('blur', validateName);
    document.querySelector('#email').addEventListener('blur', validateEmail);
    document.querySelector('#phone').addEventListener('blur', validatePhone);
    const reSpaces = /^\S*$/;
    function validateName(e) {
        const name = document.querySelector('#name');
        if (name.value != "") {
            name.classList.remove('is-invalid');
            name.classList.add('is-valid');
            return true;
        } else {
            name.classList.remove('is-valid');
            name.classList.add('is-invalid');
            return false;
        }
    }
    function validateEmail(e) {
        const email = document.querySelector('#email');
        const re = /^([a-zA-Z0-9_\-?\.?]){3,}@([a-zA-Z]){3,}\.([a-zA-Z]){2,5}$/;
        if (reSpaces.test(email.value) && re.test(email.value)) {
            email.classList.remove('is-invalid');
            email.classList.add('is-valid');
            return true;
        } else {
            email.classList.add('is-invalid');
            email.classList.remove('is-valid');
            return false;
        }
    }
    function validatePhone(e) {
        const phone = document.querySelector('#phone');
        const re = /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
        if (reSpaces.test(phone.value) && re.test(phone.value)) {
            phone.classList.remove('is-invalid');
            phone.classList.add('is-valid');
            return true;
        } else {
            phone.classList.add('is-invalid');
            phone.classList.remove('is-valid');
            return false;
        }
    }
    (function () {
    const forms = document.querySelectorAll('.needs-validation');
    for (let form of forms) {
        form.addEventListener(
        'submit',
        function (event) {
            if (
            !form.checkValidity() ||
            !validateEmail() ||
            !validateName() ||
            !validatePhone()
            ) {
                event.preventDefault();
                event.stopPropagation();
                Swal.fire("","Please double check the fields","warning");
            } else {
                event.preventDefault();
                var form_data = new FormData();
                form_data.append("image", $('#upload_profile_img').get(0).files[0]);
                form_data.append("name", $('#name').val());
                form_data.append("email", $('#email').val());
                form_data.append("phone", $('#phone').val());
                axios({
                    url : 'update-profile-user',
                    method : 'POST',
                    data: form_data,
                    headers: {
                        'cache': false,
                        'Content-Type' : false,
                        'processData': false,
                    },
                    withCredentials: true,
                })
                .then(function (response) {
                    if (response.data == 0) {
                        Swal.fire("", "This email has been used then!", "warning");
                    } else if (response.data == 1) {
                        Swal.fire("", "This phone number has been used then!", "warning");
                    }else if (response.data == 2) {
                        Swal.fire({
                            text: "Update information successfully?",
                            icon: "success",
                            showCancelButton: false,
                            confirmButtonText: "Ok!",
                        })
                        .then(function(result) {
                            if (result.value) {
                                location.reload();
                            }
                        });
                    }
                })
                .catch(function (error) {
                    console.log(error);
                });
            }
        },
        false
        );
    }
    })();
</script>
@endsection
