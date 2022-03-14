const form = document.getElementById('login_form');
    var validator = FormValidation.formValidation(
        form,
        {
            fields: {
                username: {
                    validators: {
                        notEmpty: {
                            message: 'Text input is required'
                        }
                    }
                },
                password: {
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
