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
                                <a href="index.html">
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

    <!-- section begin -->
    <section id="subheader" class="text-light"
        data-bgimage="url({{ asset('frontend/images/background/subheader.jpg')}}) top">
        <div class="center-y relative text-center">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 text-center">
                        <h1>Register</h1>
                        <p>Anim pariatur cliche reprehenderit</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->


    <section aria-label="section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h3>Don't have an account? Register now.</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                        dicta sunt explicabo.</p>

                    <div class="spacer-10"></div>

                    <form name="contactForm" id='contact_form' class="form-border">

                        <div class="row">

                            <div class="col-md-6">
                                <div class="field-set">
                                    <label>Name:</label>
                                    <input type='text' name='name' id='name' class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="field-set">
                                    <label>Email Address:</label>
                                    <input type='email' name='email' id='email' class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="field-set">
                                    <label>Choose a Username:</label>
                                    <input type='text' name='username' id='username' class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="field-set">
                                    <label>Phone:</label>
                                    <input type='text' name='phone' id='phone' class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="field-set">
                                    <label>Password:</label>
                                    <input type='password' name='password' id='password' class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="field-set">
                                    <label>Re-enter Password:</label>
                                    <input type='password' name='re-password' id='re-password' class="form-control">
                                </div>
                            </div>


                            <div class="col-md-12">

                                <div class="pull-left">
                                    <input type='submit' id='register' value='Register Now'
                                        class="btn btn-main color-2">
                                </div>

                                <div id='mail_success' class='success'>Your message has been sent successfully.</div>
                                <div id='mail_fail' class='error'>Sorry, error occured this time sending your message.
                                </div>
                                <div class="clearfix"></div>

                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>


</div>
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
                    <div class="spacer-10"></div>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $(document).on('click', '#register', function(e) {
            e.preventDefault();
                var email = $('#username').val();
                var name = $('#name').val();
                var username = $('#username').val();
                var phone = $('#phone').val();
                var password = $('#password').val();
                var repassword = $('#re-password').val();
                var phoneRegex = /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
                var emailRegex = /[A-Z0-9._%+-]+@[A-Z0-9-]+.+.[A-Z]{2,4}/igm;
                var passRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;

                if (email == "" || name == "" || repassword == "" || password == "" || phone == "") {
                    Swal.fire("", "Vui lòng điền đủ thông tin!", "warning");
                } else if (!emailRegex.test(email)) {
                    Swal.fire("", "Email không hợp lệ!", "warning");
                } else if (!phoneRegex.test(phone)) {
                    Swal.fire("", "Vui lòng kiểm tra lại số điện thoại!", "warning");
                } else if (repassword != password) {
                    Swal.fire("", "Mật khẩu và mật khẩu nhập lại phải trùng với nhau!", "warning");
                } else if (password.length < 8) {
                    Swal.fire("", "Mật khẩu quá ngắn!", "warning");
                } else if (password.length > 20) {
                    Swal.fire("", "Mật khẩu quá dài!", "warning");
                } else if (!passRegex.test(password)) {
                    Swal.fire("", "Mật khẩu cần ít nhất 1 chữ cái hoặc 1 số!", "warning");
                } else {
                    axios.post("register", {
                        name: name,
                        email: email,
                        phone: phone,
                        username: $('#username').val(),
                        pass: $('#password').val(),
                    })
                    .then(function (response) {
                        switch(response.data) {
                            case 0:
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'Thất bại',
                                    text: 'Tài khoản này đã có người sử dụng',
                                })
                                break;
                            case 1:
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'Thất bại',
                                    text: 'Email này đã được sử dụng',
                                })
                                break;
                            case 2:
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'Thất bại',
                                    text: 'Số điện thoại này đã được sử dụng',
                                })
                                break;
                            case 3:
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Thành công',
                                    text: 'Đăng kí tài khoản thành công',
                                })
                                break;
                            }
                    })
                }
        });
    });
</script>
@endsection
