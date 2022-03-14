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
                                    <div class="d-wallet">
                                        <h4>Balance</h4>
                                        <span id="wallet" class="d-wallet-address">12.858 ETH</span>
                                        <button id="btn_copy"><a href="{{ URL::to('/recharge') }}">recharge</a></button>
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
<div class="no-bottom no-top" id="content">
    <div id="top"></div>
    <section id="subheader" class="text-light" data-bgimage="url(frontend/images/background/subheader.jpg) top">
        <div class="center-y relative text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>Recharge</h1>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>
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
                                                <h5>Amount</h5>
                                                <input type="text" name="amount" id="inp_amount" class="form-control"
                                                    placeholder="Enter Amount Here" />
                                                <div class="spacer-10"></div>
                                                <div class="invalid-feedback">Please check amount</div>
                                                <div class="spacer-10"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="spacer-30"></div>
                        <input type="submit" id="submit" class="btn-main" value="Pay Now">
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
<script type="text/javascript">
    document.querySelector('#inp_amount').addEventListener('blur', validateAmount);
    const reSpaces = /^\S*$/;
    function validateAmount(e) {
        const amount = document.querySelector('#inp_amount');
        if (amount.value > 0 && amount.value != "" && reSpaces.test(amount.value)) {
            amount.classList.remove('is-invalid');
            amount.classList.add('is-valid');
            return true;
        } else {
            amount.classList.remove('is-valid');
            amount.classList.add('is-invalid');
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
            !validateAmount()
            ) {
                event.preventDefault();
                event.stopPropagation();
                Swal.fire("","Please double check the fields","warning");
            } else {
                event.preventDefault();
                EThAppDeploy.loadEtherium();
            }
        },
        false
        );
    }
    })();
    EThAppDeploy = {
            loadEtherium: async () => {
                if (typeof window.ethereum !== 'undefined') {
                    EThAppDeploy.web3Provider = ethereum;
                    EThAppDeploy.requestAccount(ethereum);
                } else {
                    Swal.fire('','Not able to locate an Ethereum connection, please install a Metamask wallet','warning')

                }
            },
            /****
             * Request A Account
             * **/
            requestAccount: async (ethereum) => {
                ethereum
                    .request({
                        method: 'eth_requestAccounts'
                    })
                    .then((resp) => {
                        //do payments with activated account
                        EThAppDeploy.payNow(ethereum, resp[0]);
                    })
                    .catch((err) => {
                        // Some unexpected error.
                        console.log(err);
                        Swal.fire('','Please login metamask','warning')
                    });
            },
            /***
             *
             * Do Payment
             * */
            payNow: async (ethereum, from) => {
                var amount = $('#inp_amount').val();
                var tran_from = from;
                var tran_to = "0x369A9a894ae91235c06D96Ff5f09140303558E7E";
                ethereum
                    .request({
                        method: 'eth_sendTransaction',
                        params: [{
                            from: tran_from,
                            to: tran_to,
                            value: '0x' + ((amount * 1000000000000000000).toString(16)),
                        }, ],
                    })
                    .then((txHash) => {
                        if (txHash) {
                            storeTransaction(txHash, amount, tran_from, tran_to)
                        } else {
                            Swal.fire({
                                icon: 'warning',
                                title: 'Warning',
                                text: 'Something went wrong. Please try again',
                            })
                        }
                    })
                    .catch((error) => {
                        console.log(error);
                    });
            },
        }
        function storeTransaction(txHash, amount, tran_from, tran_to){
            axios.post("create-transaction", {
                txHash: txHash,
                amount: amount,
                from: tran_from,
                to: tran_to
            })
            .then(function (response) {
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: 'Payment success',
                })
            })
            .catch((error) => {
                console.log(error);
            });
        }
</script>
@endsection
