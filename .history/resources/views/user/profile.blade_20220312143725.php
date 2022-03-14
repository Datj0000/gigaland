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
                    <form id="form-create-item" class="form-border" method="post" action="email.php">
                        <div class="de_tab tab_simple">
                            <div class="de_tab_content">
                                <div class="tab-1">
                                    <div class="row wow fadeIn">
                                        <div class="col-lg-8 mb-sm-20">
                                            <div class="field-set">
                                                <h5>Full name</h5>
                                                <input type="text" name="name" id="name" class="form-control"
                                                    placeholder="Enter full name" />

                                                <div class="spacer-20"></div>

                                                <h5>Email</h5>
                                                <input type="text" name="email" id="email"
                                                    class="form-control" placeholder="Enter your email" />

                                                <div class="spacer-20"></div>

                                                <h5>Phone number</h5>
                                                <input type="text" name="phone" id="phone"
                                                    class="form-control" placeholder="Enter your phone number" />

                                                <div class="spacer-20"></div>

                                            </div>
                                        </div>

                                        <div id="sidebar" class="col-lg-4">
                                            <h5>Profile image <i class="fa fa-info-circle id-color-2"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Recommend 400 x 400. Max size: 50MB. Click the image to upload."></i>
                                            </h5>

                                            <img src="{{ asset('frontend/images/author_single/author_thumbnail.jpg')}}" id="click_profile_img"
                                                class="d-profile-img-edit img-fluid" alt="">
                                            <input type="file" id="upload_profile_img">

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

@endsection
