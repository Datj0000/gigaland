<form class="form" autocomplete="off" novalidate="novalidate" id="form_edit_setting">
    <div class="card card-custom card-stretch">
        <div class="card-header py-3">
            <div class="card-acc align-items-start flex-column">
                <h3 class="card-label font-weight-bolder text-dark">{{ __('lang.setting') }}</h3>
                <span class="text-muted font-weight-bold font-size-sm mt-1">{{ __('lang.setting_manager') }}</span>
            </div>
            <div class="card-toolbar">
                <button type="button" id="update_setting" class="btn btn-success mr-2">{{ __('lang.save') }}</button>
                <button type="reset" onclick="load_setting()" class="btn btn-secondary">{{ __('lang.reset') }}</button>
            </div>
        </div>
        <div class="card-body">
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">{{__('lang.setting_acc')}}:</label>
                    <div class="col-lg-9 col-xl-6">
                        <input id="setting_acc" name="acc" class="form-control form-control-lg form-control-solid"
                            type="text" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<script>
    var form = KTUtil.getById('form_edit_setting');
    var validation = FormValidation.formValidation(
        form, {
            fields: {
                acc: {
                    validators: {
                        notEmpty: {
                            message: '{{ __('lang.notempty') }}'
                        },
                    }
                },
            },
            plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                bootstrap: new FormValidation.plugins.Bootstrap()
            }
        }
    );

    load_setting();
    function load_setting() {
        $.ajax({
            url: 'view-setting',
            method: 'GET',
            success: function(response) {
                $('#setting_acc').val(response.data.data.setting_acc);
                new Tagify(document.querySelector("#setting_keywords"));
                validation.validate();
            }
        })
    }
    $(document).ready(function() {
        $('#update_setting').click(function(e) {
            var setting_acc = $('#setting_acc').val();
            validation.validate().then(function(status) {
                if (status == 'Valid') {
                    $.ajax({
                        url: 'update-setting',
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': $('setting[name = "csrf-token" ]').attr(
                                'content')
                        },
                        data: {
                            setting_acc: setting_acc,
                        },
                        success: function(data) {
                            Swal.fire("", "C???p nh???t th??ng tin th??nh c??ng!","success");
                        }
                    })
                } else {
                    swal.fire({
                        text: "Xin l???i, c?? v??? nh?? ???? ph??t hi???n th???y m???t s??? l???i, vui l??ng th??? l???i .",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "?????ng ??!",
                        customClass: {
                            confirmButton: "btn font-weight-bold btn-light-primary"
                        }
                    }).then(function() {
                        KTUtil.scrollTop();
                    });
                }
            });
        });
    })
</script>
