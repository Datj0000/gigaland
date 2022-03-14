<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>

<body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <div class="row justify-content-center">
        <div class="col-lg-4 text-center">
            <div class="form-group">
                <h3>Enter Amount Here</h3>
                <input type="text" class="form-control" name="amount" id="inp_amount" aria-describedby="helpId"
                    placeholder="Enter Amount In USD">
            </div>
            <button type="button" onClick="startProcess()" class="btn btn-success mt-4">Pay Now</button>
            <button type="button" onClick="attendance()" class="btn btn-success mt-4">Attendance</button>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function attendance(){
        
    }
    function startProcess() {
            if ($('#inp_amount').val() > 0) {
                // run metamsk functions here
                EThAppDeploy.loadEtherium();
            } else {
                Swal.fire({
                    icon: 'warning',
                    title: 'Warning',
                    text: 'Please Enter Valid Amount',
                })
            }
    }

        EThAppDeploy = {
            loadEtherium: async () => {
                if (typeof window.ethereum !== 'undefined') {
                    EThAppDeploy.web3Provider = ethereum;
                    EThAppDeploy.requestAccount(ethereum);
                } else {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Warning',
                        text: 'Not able to locate an Ethereum connection, please install a Metamask wallet',
                    })
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
                    });
            },
            /***
             *
             * Do Payment
             * */
            payNow: async (ethereum, from) => {
                var amount = $('#inp_amount').val();
                ethereum
                    .request({
                        method: 'eth_sendTransaction',
                        params: [{
                            from: from,
                            to: "0x369A9a894ae91235c06D96Ff5f09140303558E7E",
                            value: '0x' + ((amount * 1000000000000000000).toString(16)),
                        }, ],
                    })
                    .then((txHash) => {
                        if (txHash) {
                            storeTransaction(txHash, amount, from, to)
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
        function storeTransaction(txHash, amount){
            axios.post("create-transaction", {
                txHash: txHash,
                amount: amount,
                from: from,
                to: to,
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

</html>
