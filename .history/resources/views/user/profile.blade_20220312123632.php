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
                                            <img alt="" src="images/logo-1.png" />
                                        </a>
                                    </div>
                                    <!-- logo close -->
                                </div>
                                <div class="de-flex-col">
                                    <input id="quick_search" class="xs-hide" name="quick_search" placeholder="search item here..." type="text" />
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
                                    <div class="de-login-menu">
                                        <a href="create-options.html" class="btn-main"><i class="fa fa-plus"></i><span>Create</span></a>

                                        <span id="de-click-menu-notification" class="de-menu-notification">
                                            <span class="d-count">8</span>
                                            <i class="fa fa-bell"></i>
                                        </span>

                                        <span id="de-click-menu-profile" class="de-menu-profile">
                                            <img src="images/author_single/author_thumbnail.jpg" class="img-fluid" alt="">
                                        </span>

                                        <div id="de-submenu-notification" class="de-submenu">
                                            <div class="de-flex">
                                                <div><h4>Notifications</h4></div>
                                                <a href="#">Show all</a>
                                            </div>

                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <img class="lazy" src="images/author/author-2.jpg" alt="">
                                                        <div class="d-desc">
                                                            <span class="d-name"><b>Mamie Barnett</b> started following you</span>
                                                            <span class="d-time">1 hour ago</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img class="lazy" src="images/author/author-3.jpg" alt="">
                                                        <div class="d-desc">
                                                            <span class="d-name"><b>Nicholas Daniels</b> liked your item</span>
                                                            <span class="d-time">2 hours ago</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img class="lazy" src="images/author/author-4.jpg" alt="">
                                                        <div class="d-desc">
                                                            <span class="d-name"><b>Lori Hart</b> started following you</span>
                                                            <span class="d-time">18 hours ago</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img class="lazy" src="images/author/author-5.jpg" alt="">
                                                        <div class="d-desc">
                                                            <span class="d-name"><b>Jimmy Wright</b> liked your item</span>
                                                            <span class="d-time">1 day ago</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img class="lazy" src="images/author/author-6.jpg" alt="">
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
                                                <h4>Monica Lucas</h4>
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
                                                <span id="wallet" class="d-wallet-address">DdzFFzCqrhshMSxb9oW3mRo4MJrQkusV3fGFSTwaiu4wPBqMryA9DYVJCkW9n7twCffG5f5wX2sSkoDXGiZB1HPa7K7f865Kk4LqnrME</span>
                                                <button id="btn_copy" title="Copy Text">Copy</button>
                                            </div>

                                            <div class="d-line"></div>

                                            <ul class="de-submenu-profile">
                                                <li><a href="author.html"><i class="fa fa-user"></i> My profile</a>
                                                <li><a href="profile.html"><i class="fa fa-pencil"></i> Edit profile</a>
                                                <li><a href="#"><i class="fa fa-sign-out"></i> Sign out</a>
                                            </ul>
                                        </div>
                                        <span id="menu-btn"></span>
                                    </div>
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
            <section id="subheader" class="text-light" data-bgimage="url(images/background/subheader.jpg) top">
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

                                <ul class="de_nav">
                                    <li class="active"><span><i class="fa fa-user"></i>Profile</span></li>
                                    <li><span><i class="fa fa-exclamation-circle"></i>Notifications</span></li>
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
                            <form action="blank.php" class="row form-dark" id="form_subscribe" method="post" name="form_subscribe">
                                <div class="col text-center">
                                    <input class="form-control" id="txt_subscribe" name="txt_subscribe" placeholder="enter your email" type="text" /> <a href="#" id="btn-subscribe"><i class="arrow_right bg-color-secondary"></i></a>
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
                                        <img alt="" class="f-logo" src="images/logo.png" /><span class="copy">&copy; Copyright 2022 - Gigaland by Designesia</span>
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


@end