$(document).ready(function () {
    $("#slider-range").slider({
        orientation: "horizontal",
        range: true,
        min: 0,
        max: 3000,
        step: 100,
        values: [100, 3000],
        slide: function (event, ui) {
            $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
            $("#start_price").val(ui.values[0]);
            $("#end_price").val(ui.values[1]);
        },
    });
    $("#amount").val(
        "$" +
            $("#slider-range").slider("values", 0) +
            " - $" +
            $("#slider-range").slider("values", 1)
    );

    function checkDisplay() {
        localStorage.setItem("display", "grid");
    }

    function clickList() {
        localStorage.display = "list";
    }

    function clickGrid() {
        localStorage.display = "grid";
    }

    if (localStorage.display == "list") {
        $(".item").removeClass("col-lg-4");
        $(".item").removeClass("col-md-6");
        $(".item").addClass("col-lg-12");
    }

    if (localStorage.display == "grid") {
        $(".item").removeClass("col-lg-12");
        $(".item").addClass("col-lg-4");
    }
    $("#list").click(function () {
        clickList();
        $(".item").removeClass("col-lg-4");
        $(".item").removeClass("col-md-6");
        $(".item").addClass("col-lg-12");
    });
    $("#grid").click(function () {
        clickGrid();
        $(".item").removeClass("col-lg-12");
        $(".item").addClass("col-lg-4");
    });
});
