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
                            <!-- logo close -->
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/es6-shim/0.35.3/es6-shim.min.js"></script>
        <script src="https://formvalidation.io/vendors/formvalidation/dist/js/FormValidation.min.js"></script>
        <script src="https://formvalidation.io/vendors/formvalidation/dist/js/plugins/Tachyons.min.js"></script>

        <script>
            document.addEventListener('DOMContentLoaded', function (e) {
                const strongPassword = function () {
                    return {
                        validate: function (input) {
                            const value = input.value;
                            if (value === '') {
                                return {
                                    valid: true,
                                };
                            }

                            // Check the password strength
                            if (value.length < 8) {
                                return {
                                    valid: false,
                                    message: 'The password must be more than 8 characters long',
                                };
                            }

                            // The password doesn't contain any uppercase character
                            if (value === value.toLowerCase()) {
                                return {
                                    valid: false,
                                    message: 'The password must contain at least one upper case character',
                                };
                            }

                            // The password doesn't contain any uppercase character
                            if (value === value.toUpperCase()) {
                                return {
                                    valid: false,
                                    message: 'The password must contain at least one lower case character',
                                };
                            }

                            // The password doesn't contain any digit
                            if (value.search(/[0-9]/) < 0) {
                                return {
                                    valid: false,
                                    message: 'The password must contain at least one digit',
                                };
                            }

                            return {
                                valid: true,
                            };
                        },
                    };
                };

                FormValidation.formValidation(document.getElementById('demoForm'), {
                    fields: {
                        pwd: {
                            validators: {
                                notEmpty: {
                                    message: 'The password is required and cannot be empty',
                                },
                                checkPassword: {
                                    message: 'The password is too weak',
                                },
                            },
                        },
                    },
                    plugins: {
                        trigger: new FormValidation.plugins.Trigger(),
                        tachyons: new FormValidation.plugins.Tachyons(),
                        submitButton: new FormValidation.plugins.SubmitButton(),
                        icon: new FormValidation.plugins.Icon({
                            valid: 'fa fa-check',
                            invalid: 'fa fa-times',
                            validating: 'fa fa-refresh',
                        }),
                    },
                })
                    // Register new validator named checkPassword
                    .registerValidator('checkPassword', strongPassword);
            });
        </script>
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

                if (email == "" || name == ""  || username == "" || repassword == "" || password == "" || phone == "") {
                    Swal.fire("", "Please fill in all the information!", "warning");
                } else if (!emailRegex.test(email)) {
                    Swal.fire("", "Invalid email!", "warning");
                } else if (!phoneRegex.test(phone)) {
                    Swal.fire("", "Please check your phone number again!", "warning");
                } else if (repassword != password) {
                    Swal.fire("", "Password and re-entered password must match!", "warning");
                } else if (password.length < 8) {
                    Swal.fire("", "Password is too short!", "warning");
                } else if (password.length > 20) {
                    Swal.fire("", "Password is too long!", "warning");
                } else if (!passRegex.test(password)) {
                    Swal.fire("", "Password needs at least 1 letter or 1 number!", "warning");
                } else {
                    axios.post("register", {
                        name: name,
                        email: email,
                        phone: phone,
                        username: username,
                        pass: password,
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
                            case 3:
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Success',
                                    text: 'Successful account registration',
                                })
                                break;
                            }
                    })
                }
        });
    });
</script>
@endsection
