<div class="card card-custom">
    <div class="card-header flex-wrap py-5">
        <div class="card-title">
            <h3 class="card-label">{{__('lang.customer')}}
                <span class="d-block text-muted pt-2 font-size-sm">{{__('lang.accemployeemanager')}}</span>
            </h3>
        </div>
        {{-- <div class="card-toolbar">
            <span class="btn btn-primary font-weight-bolder" data-toggle="modal" data-target="#exampleModalPopovers2">
                <span class="svg-icon svg-icon-md">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <circle fill="#000000" cx="9" cy="15" r="6" />
                            <path
                                d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z"
                                fill="#000000" opacity="0.3" />
                        </g>
                    </svg>
                </span>{{__('lang.new')}}</span>
        </div> --}}
    </div>
    {{-- Add --}}
    <div class="modal fade" id="exampleModalPopovers2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{__('lang.new')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form" id="form_add_staff">
                        <div class="card-body">
                            <div class="form-group">
                                <label>{{__('lang.fullname')}}:</label>
                                <input name="name" type="text" class="form-control form-control-solid" id="customer_name"
                                    placeholder="{{__('lang.fullname')}}" />
                            </div>
                            <div class="form-group">
                                <label>Email:</label>
                                <input autocomplete="off" name="email" type="email"
                                    class="form-control form-control-solid" id="customer_email" placeholder="Email" />
                            </div>
                            <div class="form-group">
                                <label>{{__('lang.phone')}}:</label>
                                <input name="phone" type="text" class="form-control form-control-solid" id="customer_phone"
                                    placeholder="{{__('lang.phone')}}" />
                            </div>
                            <div class="form-group">
                                <label>{{__('lang.pass')}}:</label>
                                <input autocomplete="new-password" name="password" type="password"
                                    class="form-control form-control-solid" id="customer_password"
                                    placeholder="{{__('lang.pass')}}" />
                            </div>
                            <div class="form-group">
                                <label>{{__('lang.repass')}}:</label>
                                <input name="cpassword" type="password" class="form-control form-control-solid"
                                    placeholder="{{__('lang.repass')}}" />
                            </div>
                            <div class="form-group">
                                <label>{{__('lang.role')}}:</label>
                                <select name="role" id="customer_role" class="form-control">
                                    <option value disabled selected hidden>{{__('lang.decentralization')}}</option>
                                    <option value="1">{{__('lang.boss')}}</option>
                                    <option value="0">{{__('lang.staff')}}</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button id="add_staff" type="button"
                                class="btn btn-primary mr-2">{{__('lang.save')}}</button>
                            <button type="reset" class="btn btn-secondary">{{__('lang.reset')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalPopovers" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{__('lang.decentralization')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form">
                        <div class="card-body">
                            <input type="hidden" id="edit_customer_id">
                            <div class="form-group">
                                <label>{{__('lang.fullname')}}:</label>
                                <input readonly type="text" class="form-control form-control-solid"
                                    id="edit_customer_name" />
                            </div>
                            <div class="form-group">
                                <label>{{__('lang.decentralization')}}:</label>
                                <select id="edit_customer_role" class="form-control">
                                    <option value="1">{{__('lang.boss')}}</option>
                                    <option value="0">{{__('lang.staff')}}</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button id="update_staff" type="button" class="btn btn-primary mr-2">Submit</button>
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-separate table-head-custom table-checkable display nowrap" cellspacing="0"
            width="100%" id="kt_datatable">
            <thead>
                <tr>
                    <th>{{__('lang.no')}}</th>
                    <th>{{__('lang.fullname')}}</th>
                    <th>Email</th>
                    <th>{{__('lang.phone')}}</th>
                    <th>{{__('lang.money')}}</th>
                    <th>{{__('lang.function')}}</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        var i = 0;
        var table = $('#kt_datatable').DataTable({
            ajax: '{{ url('/fetchdata-customer') }}',
            columns: [{
                    'data': null,
                    render: function() {
                        return i = i + 1
                    }
                },
                {
                    'data': 'customer_name'
                },
                {
                    'data': 'customer_email'
                },
                {
                    'data': 'customer_phone'
                },
                {
                    'data': 'customer_money'
                },
                {
                    'data': null,
                    sortable: false,
                    width: '75px',
                    overflow: 'visible',
                    autoHide: false,
                    render: function(data, type, row) {
                        return `\
                            <span data-id_customer='${row.customer_id}' class="delete btn btn-sm btn-clean btn-icon" title="Xoá">\
								<i class="la la-trash"></i>\
							</span>\
                            `
                    }
                },
            ],
            responsive: true,
            language: {
                processing: "{{__('lang.loading')}}",
                search: "{{__('lang.search')}}:",
                lengthMenu: "{{__('lang.lengthMenu')}} _MENU_ {{__('lang.lengthMenu2')}}",
                info: "{{__('lang.info')}} _START_ {{__('lang.info2')}} _END_ {{__('lang.info3')}} _TOTAL_ {{__('lang.info4')}}",
                infoEmpty: "{{__('lang.infoEmpty')}}",
                loadingRecords: "{{__('lang.loading')}}",
                zeroRecords: "{{__('lang.zeroRecords')}}",
                emptyTable: "{{__('lang.infoEmpty')}}",
            },
        });
        const strongPassword = function() {
            return {
                validate: function(input) {
                    const value = input.value;
                    if (value === '') {
                        return {
                            valid: true,
                        };
                    }

                    if (value.length < 8) {
                        return {
                            valid: false,
                        };
                    }

                    if (value === value.toLowerCase()) {
                        return {
                            valid: false,
                        };
                    }

                    if (value === value.toUpperCase()) {
                        return {
                            valid: false,
                        };
                    }

                    if (value.search(/[0-9]/) < 0) {
                        return {
                            valid: false,
                        };
                    }

                    return {
                        valid: true,
                    };
                },
            };
        };
        var validation;
        var form = KTUtil.getById('form_add_staff');
        FormValidation.validators.checkPassword = strongPassword;
        validation = FormValidation.formValidation(
            form, {
                fields: {
                    name: {
                        validators: {
                            notEmpty: {
                                message: '{{__('lang.notempty')}}'
                            },
                        }
                    },
                    phone: {
                        validators: {
                            notEmpty: {
                                message: '{{__('lang.notempty')}}'
                            },
                            phone: {
                                country: 'US',
                                message: '{{__('lang.notphone')}}'
                            }
                        }
                    },
                    email: {
                        validators: {
                            notEmpty: {
                                message: '{{__('lang.notempty')}}'
                            },
                            emailAddress: {
                                message: '{{__('lang.notemail')}}'
                            }
                        }
                    },
                    password: {
                        validators: {
                            notEmpty: {
                                message: '{{__('lang.notempty')}}'
                            },
                            checkPassword: {
                                message: '{{__('lang.notpass')}}'
                            },
                        }
                    },
                    cpassword: {
                        validators: {
                            notEmpty: {
                                message: '{{__('lang.notempty')}}'
                            },
                            identical: {
                                compare: function() {
                                    return form.querySelector('[name="password"]').value;
                                },
                                message: '{{__('lang.notrepass')}}'
                            }
                        }
                    },
                    role: {
                        validators: {
                            notEmpty: {
                                message: '{{__('lang.notchoose')}}'
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
        $(document).on('click', '.view_role', function(e) {
            e.preventDefault();
            var customer_id = $(this).data('id_customer');
            $.ajax({
                url: 'view-role/' + customer_id,
                method: 'GET',
                success: function(response) {
                    $('#edit_customer_id').val(response.data.customer_id);
                    $('#edit_customer_name').val(response.data.customer_name);
                    $('#edit_customer_role').val(response.data.customer_role);
                }
            })
        });

        $(document).on('click', '.delete', function(e) {
            e.preventDefault();
            var customer_id = $(this).data('id_customer');
            Swal.fire({
                    title: "Xoá tài khoản",
                    text: "Bạn có chắc là muốn xóa tài khoản không?",
                    icon: "question",
                    showCancelButton: true,
                    confirmButtonText: "Đồng ý!",
                    cancelButtonText: "Không"
                })
                .then(function(result) {
                    if (result.value) {
                        $.ajax({
                            url: 'delete-staff/' + customer_id,
                            method: 'GET',
                            success: function(data) {
                                if (data == 2) {
                                    Swal.fire("", "Bạn không được xoá chính mình!", "warning");
                                } else if (data == 0) {
                                    Swal.fire("", "Bạn không được xoá quản lý!", "warning");
                                } else {
                                    Swal.fire({
                                        icon: "success",
                                        title: "Thành công",
                                        text: "Xoá tài khoản thành công!",
                                        showConfirmButton: false,
                                        timer: 1500
                                    });
                                    i = 0;
                                    table.ajax.reload();
                                }
                            },
                        });
                    }
                });
            e.preventDefault();
        });
    })
</script>
