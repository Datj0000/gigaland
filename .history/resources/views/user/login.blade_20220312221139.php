@extends('userlayout')
@section('content')
<!-- header begin -->
<header class="transparent">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="de-flex sm-pt10">
                    <div class="de-flex-col">
                        <div class="de-flex-col customer">
                            <!-- logo begin -->
                            <div id="logo">
                                <a href="{{URL::to('/')}}">
                                    <img alt="" class="logo" src="{{ asset('frontend/images/logo-light.png')}}" />
                                    <img alt="" class="logo-2" src="{{ asset('frontend/images/logo.png')}}" />
                                </a>
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
                                <form name="contactForm" id='contactForm' class="form-border" novalidate>
                                    <div class="field-set">
                                        <input type='text' name='username' id='username' class="form-control"
                                            placeholder="username" required>
                                    </div>
                                    <div class="field-set">
                                        <input type='password' name='password' id='password' class="form-control"
                                            placeholder="password" required>
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
                    Swal.fire('Wrong account or password','')
                        icon: 'warning',
                        title: 'Fail',
                        text: ,
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
