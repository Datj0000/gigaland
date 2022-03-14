load();

function load() {
    axios.get("all-customer")
        .then(function (response) {
            $("#container").html(response)
        })
        .catch((error) => {
            console.log(error);
        });
}
$(document).ready(function () {
    var a = ".menu-item";
    $(a).on("click", function () {
        $(a).removeClass("menu-item-active");
        $(this).addClass("menu-item-active")
    });
    $(document).on("click", ".changelanguage", function (b) {
        b.preventDefault();
        var c = $(this).data("lang");
        axios.get("change-language/" + c)
            .then(function () {
                location.reload()
            })
            .catch((error) => {
                console.log(error);
            });
    });
    $(document).on("click", "#change_pass", function (b) {
        b.preventDefault();
        $(a).removeClass("menu-item-active");
        axios.get("change-pass")
            .then(function (response) {
                $("#container").html(response)
            })
            .catch((error) => {
                console.log(error);
            });
    });
    $(document).on("click", "#profile", function (b) {
        b.preventDefault();
        $(a).removeClass("menu-item-active");
        axios.get("profile")
            .then(function (response) {
                $("#container").html(response)
            })
            .catch((error) => {
                console.log(error);
            });
    });
    $(document).on("click", "#all_customer", function (b) {
        b.preventDefault();
        load();
    });
    $(document).on("click", "#all_transaction", function (b) {
        b.preventDefault();
        axios.get("all-transaction")
            .then(function (response) {
                $("#container").html(response)
            })
            .catch((error) => {
                console.log(error);
            });
    });
});
