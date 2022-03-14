load();

function load() {
    $.ajax({
        url: "all-customer",
        method: "GET",
        success: function (a) {
            $("#container").html(a)
        }
    })
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
        $.ajax({
            url: "change-language/" + c,
            method: "GET",
            success: function () {
                location.reload()
            }
        })
    });
    $(document).on("click", "#change_pass", function (b) {
        b.preventDefault();
        $(a).removeClass("menu-item-active");
        $.ajax({
            url: "change-pass",
            method: "GET",
            success: function (c) {
                $("#container").html(c)
            }
        })
    });
    $(document).on("click", "#profile", function (b) {
        b.preventDefault();
        $(a).removeClass("menu-item-active");
        $.ajax({
            url: "profile",
            method: "GET",
            success: function (c) {
                $("#container").html(c)
            }
        })
    });
    $(document).on("click", "#all_customer", function (b) {
        b.preventDefault();
        load()
    });
    $(document).on("click", "#all_transaction", function (b) {
        b.preventDefault();
        axios.get("all-transaction")
        .then(function (response) {
            $("#container").html(a)
        })
        .catch((error) => {
            console.log(error);
        });
    });
});
