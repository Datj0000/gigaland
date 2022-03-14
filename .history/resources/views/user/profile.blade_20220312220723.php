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
                                        <li><a href="author.html"><i class="fa fa-user"></i> My profile</a>
                                        <li><a href="{{ URL::to('/ho-so') }}"><i class="fa fa-pencil"></i> Edit
                                                profile</a>
                                        <li><a href="#" id="logout"><i class="fa fa-sign-out"></i> Sign out</a>
                                    </ul>
                                </div>
                            </div>
                            <?php
                            }
                            else {
                                ?>
                            <a href="{{ URL::to('/dang-nhap') }}" class="btn-main btn-wallet"><i
                                    class="icon_wallet_alt"></i><span>Login</span></a>
                            <a href="{{ URL::to('/dang-ki') }}" class="btn-main btn-wallet"><i
                                    class="icon_wallet_alt"></i><span>Register</span></a>
                            <span id="menu-btn"></span>
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
                        <h1>Edit Profile</h1>
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
                    <form id="form-create-item" class="form-border needs-validation">
                        <div class="de_tab tab_simple">
                            <div class="de_tab_content">
                                <div class="tab-1">
                                    <div class="row wow fadeIn">
                                        <div class="col-lg-8 mb-sm-20">
                                            <div class="field-set">
                                                <h5>Full name</h5>
                                                <input type="text" name="name" id="name" class="form-control"
                                                    placeholder="Enter full name" />

                                                <div class="spacer-10"></div>
                                                <div class="invalid-feedback">Full name field cannot be blank!</div>
                                                <div class="spacer-10"></div>
                                                <h5>Email</h5>
                                                <input type="text" name="email" id="email" class="form-control"
                                                    placeholder="Enter your email" />

                                                <div class="spacer-10"></div>
                                                <div class="invalid-feedback">Please check email again.</div>
                                                <div class="spacer-10"></div>

                                                <h5>Phone number</h5>
                                                <input type="text" name="phone" id="phone" class="form-control"
                                                    placeholder="Enter your phone number" />

                                                <div class="spacer-10"></div>
                                                <div class="invalid-feedback">Please check phone number again.</div>
                                                <div class="spacer-10"></div>
                                            </div>
                                        </div>

                                        <div id="sidebar" class="col-lg-4">
                                            <h5>Profile image <i class="fa fa-info-circle id-color-2"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Recommend 400 x 400. Max size: 50MB. Click the image to upload."></i>
                                            </h5>

                                            <img src="{{ asset('frontend/images/author_single/author_thumbnail.jpg')}}"
                                                id="click_profile_img" class="d-profile-img-edit img-fluid" alt="">
                                            <input type="file" id="upload_profile_img">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="spacer-30"></div>
                        <input type="submit" id="submit" class="btn-main" value="Update profile">
                    </form>
                </div>
            </div>
        </div>
    </section>

</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script type="text/javascript">
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
                Swal.fire({
                    icon: 'warning',
                    title: 'Warning',
                    text: 'Please double check the fields',
                })
            } else {
                event.preventDefault();
                form_data.append("admin_image", $('#name').val());
                form_data.append("admin_name", name);
                form_data.append("admin_email", email);
                axios.post("update-profile-user", {
                    name: $('#name').val(),
                    email: $('#email').val(),
                    phone: $('#phone').val(),
                })
                .then(function (response) {
                    switch(response.data) {
                        case 0:
                            Swal.fire({
                                icon: 'warning',
                                title: 'Fail',
                                text: 'This account already has users',
                            })
                            break;
                        case 1:
                            Swal.fire({
                                icon: 'warning',
                                title: 'Fail',
                                text: 'This e-mail is already taken',
                            })
                            break;
                        case 2:
                            Swal.fire({
                                icon: 'warning',
                                title: 'Fail',
                                text: 'This phone number is already in use',
                            })
                            break;
                    }
                })
            }
        },
        false
        );
    }
    })();
</script>
@endsection
