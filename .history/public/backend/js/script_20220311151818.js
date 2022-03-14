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
    $(document).on("click", ".changelanguage", function (event) {
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
    $(document).on("click", "#change_pass", function (event) {
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
    $(document).on("click", "#profile", function (event) {
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
    $(document).on("click", "#all_customer", function (event) {
        b.preventDefault();
        load()
    });
    $(document).on("click", "#all_transaction", function (event) {
        b.preventDefault();
        $(a).removeClass("menu-item-active");
        axios.get("all-transaction")
        .then(function (c) {
            $("#container").html(c)
        })
        .catch((error) => {
            console.log(error);
        });
    });
});
// load();

// function load() {
//     axios.get("all-customer")
//         .then(function (response) {
//             $("#container").html(response)
//         })
//         .catch((error) => {
//             console.log(error);
//         });
// }
// $(document).ready(function () {
//     var a = ".menu-item";
//     $(a).on("click", function () {
//         $(a).removeClass("menu-item-active");
//         $(this).addClass("menu-item-active")
//     });
//     $(document).on("click", ".changelanguage", function (event) {
//         b.preventDefault();
//         var c = $(this).data("lang");
//         axios.get("change-language/" + c)
//             .then(function () {
//                 location.reload()
//             })
//             .catch((error) => {
//                 console.log(error);
//             });
//     });
//     $(document).on("click", "#change_pass", function (event) {
//         b.preventDefault();
//         $(a).removeClass("menu-item-active");
//         axios.get("change-pass")
//             .then(function (response) {
//                 $("#container").html(response)
//             })
//             .catch((error) => {
//                 console.log(error);
//             });
//     });
//     $(document).on("click", "#profile", function (event) {
//         b.preventDefault();
//         $(a).removeClass("menu-item-active");
//         axios.get("profile")
//             .then(function (response) {
//                 $("#container").html(response)
//             })
//             .catch((error) => {
//                 console.log(error);
//             });
//     });
//     $(document).on("click", "#all_customer", function (event) {
//         b.preventDefault();
//         load();
//     });
//     $(document).on("click", "#all_transaction", function (event) {
//         b.preventDefault();
//         axios.get("all-transaction")
//             .then(function (response) {
//                 $("#container").html(response)
//             })
//             .catch((error) => {
//                 console.log(error);
//             });
//     });
// });
