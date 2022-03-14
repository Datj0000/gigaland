<div class="card card-custom">
    <div class="card-header flex-wrap py-5">
        <div class="card-title">
            <h3 class="card-label">{{__('lang.transaction')}}
                <span class="d-block text-muted pt-2 font-size-sm">{{__('lang.accemployeemanager')}}</span>
            </h3>
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
                            <div class="form-group">
                                <label>{{__('lang.fullname')}}:</label>
                                <input id="customer_name" readonly type="text"
                                    class="form-control form-control-solid" />
                            </div>
                            <div class="form-group">
                                <label>Email:</label>
                                <input id="customer_email" readonly type="text"
                                    class="form-control form-control-solid" />
                            </div>
                            <div class="form-group">
                                <label>{{__('lang.phone')}}:</label>
                                <input id="customer_phone" readonly type="text"
                                    class="form-control form-control-solid" />
                            </div>
                            <div class="form-group">
                                <label>{{__('lang.tran_form')}}:</label>
                                <input id="tran_form" readonly type="text" class="form-control form-control-solid" />
                            </div>
                            <div class="form-group">
                                <label>{{__('lang.tran_to')}}:</label>
                                <input id="tran_to" readonly type="text" class="form-control form-control-solid" />
                            </div>
                            <div class="form-group">
                                <label>{{__('lang.txHash')}}:</label>
                                <input id="txHash" readonly type="text" class="form-control form-control-solid" />
                            </div>
                            <div class="form-group">
                                <label>{{__('lang.amount')}}:</label>
                                <input id="amount" readonly type="text" class="form-control form-control-solid" />
                            </div>
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
                    <th>{{__('lang.customer_name')}}</th>
                    <th>{{__('lang.amount')}}</th>
                    <th>{{__('lang.created_at')}}</th>
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
            ajax: '{{ url('/fetchdata-transaction') }}',
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
                    'data': 'amount'
                },
                {
                    'data': 'created_at'
                },
                {
                    'data': null,
                    sortable: false,
                    width: '75px',
                    overflow: 'visible',
                    autoHide: false,
                    render: function(data, type, row) {
                        return `\
                            <span data-toggle="modal" data-target="#exampleModalPopovers" data-id_transaction='${row.customer_id}' class="view btn btn-sm btn-clean btn-icon" title="View detail">\
								<i class="la la-eye"></i>\
							</span>\
                            <span data-id_transaction='${row.customer_id}' class="delete btn btn-sm btn-clean btn-icon" title="Delete">\
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
        $(document).on('click', '.view', function(e) {
            e.preventDefault();
            var transaction_id = $(this).data('id_transaction');
            axios.get('view-transaction/' + transaction_id)
            .then(function (response) {
                $('#customer_name').val(response.data.customer_name);
                    $('#customer_email').val(response.data.customer_email);
                    $('#customer_phone').val(response.data.customer_phone);
                    $('#tran_form').val(response.data.tran_form);
                    $('#tran_to').val(response.data.tran_to);
                    $('#txHash').val(response.data.txHash);
                    $('#amount').val(response.data.amount);
            })
            .catch((error) => {
                console.log(error);
            });
        });

        $(document).on('click', '.delete', function(e) {
            e.preventDefault();
            var transaction_id = $(this).data('id_transaction');
            Swal.fire({
                    title: "Question",
                    text: "Are you sure you want to delete this transaction?",
                    icon: "question",
                    showCancelButton: true,
                    confirmButtonText: "Ok!",
                    cancelButtonText: "No"
                })
                .then(function(result) {
                    if (result.value) {
                        axios.get('view-transaction/' + transaction_id)
                        $.ajax({
                            url: 'delete-transaction/' + transaction_id,
                            method: 'GET',
                            success: function(data) {
                                Swal.fire({
                                        icon: "success",
                                        title: "Success",
                                        text: "Delete successfully !",
                                        showConfirmButton: false,
                                        timer: 1500
                                    });
                                    i = 0;
                                    table.ajax.reload();
                            },
                        });
                    }
                });
            e.preventDefault();
        });
    })
</script>
