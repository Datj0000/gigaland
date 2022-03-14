<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Fan Pi Network Token</title>
    <link rel="icon" href="{{ asset('frontend/images/icon.png')}}" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Fan Pi Network Token" name="description" />
    <meta content="" name="keywords" />
    <meta content="" name="author" />
    <meta name=csrf-token content="{{ csrf_token() }}">
    <!-- CSS Files
    ================================================== -->
    {{-- <link id="bootstrap" href="{{ asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" /> --}}
    <link id="bootstrap-grid" href="{{ asset('frontend/css/bootstrap-grid.min.css')}}" rel="stylesheet"
        type="text/css" />
    <link id="bootstrap-reboot" href="{{ asset('frontend/css/bootstrap-reboot.min.css')}}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('frontend/css/animate.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/css/owl.carousel.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/css/owl.theme.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/css/owl.transitions.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/css/magnific-popup.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/css/jquery.countdown.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/css/style.css')}}" rel="stylesheet" type="text/css" />
    <!-- color scheme -->
    <link id="colors" href="{{ asset('frontend/css/colors/scheme-01.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/css/coloring.css')}}" rel="stylesheet" type="text/css" />
</head>

<body>
    <form id="kt_docs_formvalidation_text" class="form" action="#" autocomplete="off">
        <!--begin::Input group-->
        <div class="fv-row mb-10">
            <!--begin::Label-->
            <label class="required fw-bold fs-6 mb-2">Text Input</label>
            <!--end::Label-->

            <!--begin::Input-->
            <input type="text" name="text_input" class="form-control form-control-solid mb-3 mb-lg-0" placeholder=""
                value="" />
            <!--end::Input-->
        </div>
        <!--end::Input group-->

        <!--begin::Actions-->
        <button id="kt_docs_formvalidation_text_submit" type="submit" class="btn btn-primary">
            <span class="indicator-label">
                Validation Form
            </span>
            <span class="indicator-progress">
                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
            </span>
        </button>
        <!--end::Actions-->
    </form>
    <div id="wrapper">
        @yield('content')
    </div>
    <!-- Javascript Files
    ================================================== -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    {{-- <script src="{{ asset('frontend/js/jquery.min.js')}}"></script> --}}
    <script src="{{ asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('frontend/js/wow.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.isotope.min.js')}}"></script>
    <script src="{{ asset('frontend/js/easing.js')}}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('frontend/js/enquire.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.plugin.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.countTo.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.countdown.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.lazy.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.lazy.plugins.min.js')}}"></script>
    <script src="{{ asset('frontend/js/designesia.js')}}"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
    <!-- COOKIES NOTICE  -->
    {{-- <script src="https://preview.keenthemes.com/craft/assets/plugins/global/plugins.bundle.js"></script> --}}
    <script src="{{ asset('frontend/js/cookit.js')}}"></script>
    <!-- <script src="https://preview.keenthemes.com/craft/assets/plugins/custom/prismjs/prismjs.bundle.js"></script> -->
<script src="https://preview.keenthemes.com/craft/assets/plugins/global/plugins.bundle.js"></script>
<!-- <script src="https://preview.keenthemes.com/craft/assets/js/scripts.bundle.js"></script> -->
<script>
    // Define form element
    const form = document.getElementById('kt_docs_formvalidation_text');

    // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
    var validator = FormValidation.formValidation(
        form,
        {
            fields: {
                'text_input': {
                    validators: {
                        notEmpty: {
                            message: 'Text input is required'
                        }
                    }
                },
            },

            plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                bootstrap: new FormValidation.plugins.Bootstrap5({
                    rowSelector: '.fv-row',
                    eleInvalidClass: '',
                    eleValidClass: ''
                })
            }
        }
    );

    // Submit button handler
    const submitButton = document.getElementById('kt_docs_formvalidation_text_submit');
    submitButton.addEventListener('click', function (e) {
        // Prevent default button action
        e.preventDefault();

        // Validate form before submit
        if (validator) {
            validator.validate().then(function (status) {
                console.log('validated!');

                if (status == 'Valid') {
                    // Show loading indication
                    submitButton.setAttribute('data-kt-indicator', 'on');

                    // Disable button to avoid multiple click
                    submitButton.disabled = true;

                    // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                    setTimeout(function () {
                        // Remove loading indication
                        submitButton.removeAttribute('data-kt-indicator');

                        // Enable button
                        submitButton.disabled = false;

                        // Show popup confirmation
                        Swal.fire({
                            text: "Form has been successfully submitted!",
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        });

                        //form.submit(); // Submit form
                    }, 2000);
                }
            });
        }
    });
</script>
    <!-- FAQ JS -->
    <script>
        // select all accordion items
        const accItems = document.querySelectorAll(".accordion__item");

        // add a click event for all items
        accItems.forEach((acc) => acc.addEventListener("click", toggleAcc));

        function toggleAcc() {
        // remove active class from all items exept the current item (this)
        accItems.forEach((item) => item != this ? item.classList.remove("accordion__item--active") : null
        );

        // toggle active class on current item
        if (this.classList != "accordion__item--active") {
            this.classList.toggle("accordion__item--active");
        }
        }
    </script>

    <script>
        $(document).ready(function() {
        $.cookit({
          backgroundColor: '#101010',
          messageColor: '#fff',
          linkColor: '#FEF006',
          buttonColor: '#FEF006',
          messageText: "This website uses cookies to ensure you get the best experience on our website.",
          linkText: "Learn more",
          linkUrl: "index.html",
          buttonText: "I accept",
        });
      });
    </script>

</body>

</html>
