<div class="card card-custom">
    <div class="card-header flex-wrap py-5">
        <div class="card-title">
            <h3 class="card-label">{{__('lang.customer')}}
                <span class="d-block text-muted pt-2 font-size-sm">{{__('lang.accemployeemanager')}}</span>
            </h3>
        </div>
    </div>
    {{-- <div class="modal fade" id="exampleModalPopovers" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
    </div> --}}
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
                            url: 'delete-customer/' + customer_id,
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
