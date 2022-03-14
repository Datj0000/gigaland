load();

function load() {
    axios.get("all-customer")
        .then(function (response) {
            $("#container").html(response.data)
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
    $(document).on("click", ".changelanguage", function (event) {
        event.preventDefault();
        var c = $(this).data("lang");
        axios.get("change-language/" + c)
            .then(function () {
                location.reload()
            })
            .catch((error) => {
                console.log(error);
            });
    });
    $(document).on("click", "#change_pass", function (event) {
        event.preventDefault();
        $(a).removeClass("menu-item-active");
        axios.get("admin/change-pass")
            .then(function (response) {
                $("#container").html(response.data)
            })
            .catch((error) => {
                console.log(error);
            });
    });
    $(document).on("click", "#profile", function (event) {
        event.preventDefault();
        $(a).removeClass("menu-item-active");
        axios.get("profile")
            .then(function (response) {
                $("#container").html(response.data)
            })
            .catch((error) => {
                console.log(error);
            });
    });
    $(document).on("click", "#all_customer", function (event) {
        event.preventDefault();
        load();
    });
    $(document).on("click", "#all_transaction", function (event) {
        event.preventDefault();
        axios.get("all-transaction")
            .then(function (response) {
                $("#container").html(response.data)
            })
            .catch((error) => {
                console.log(error);
            });
    });
});

