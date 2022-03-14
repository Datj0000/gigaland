<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

<body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <div class="row justify-content-center mb-4">
        <div class="col-lg-12 text-center">
            <h2 class="text-primary">Here You Must Add Your Payment Receive Account Address In: <strong
                    class="text-danger"> {~Your Account Address~} </strong> Area</h2>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-4 text-center">
            <div class="form-group">
                <h3>Enter Amount Here</h3>
                <input type="text" class="form-control" name="amount" id="inp_amount" aria-describedby="helpId"
                    placeholder="Enter Amount In USD">
            </div>
            <button type="button" onClick="startProcess()" class="btn btn-success mt-4">Pay Now</button>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <ul>
                <li>
                    <a href="https://github.com/lathindu1/tutorials">GitHub Repositary</a>
                </li>
                <li>
                    <a href="https://dev.to/lathindu1/metamask-integration-with-laravel-4mng">Article In Dev.to</a>
                </li>
            </ul>
        </div>
        <div class="col-lg-12">
            <h6>Thank You VeryMuch</h6>
            <a href="https://github.com/lathindu1">-Lathindu Pramuditha</a>
        </div>
    </div>
</body>
<script>
    function startProcess() {
            if ($('#inp_amount').val() > 0) {
                // run metamsk functions here
                EThAppDeploy.loadEtherium();
            } else {
                alert('Please Enter Valid Amount');
            }
        }

        
        EThAppDeploy = {
            loadEtherium: async () => {
                if (typeof window.ethereum !== 'undefined') {
                    EThAppDeploy.web3Provider = ethereum;
                    EThAppDeploy.requestAccount(ethereum);
                } else {
                    alert(
                        "Not able to locate an Ethereum connection, please install a Metamask wallet"
                    );
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
                            to: "{~Your Account Addree~}",
                            value: '0x' + ((amount * 1000000000000000000).toString(16)),
                        }, ],
                    })
                    .then((txHash) => {
                        if (txHash) {
                            console.log(txHash);
                            //Store Your Transaction Here
                        } else {
                            console.log("Something went wrong. Please try again");
                        }
                    })
                    .catch((error) => {
                        console.log(error);
                    });
            },
        }
</script>

</html>
