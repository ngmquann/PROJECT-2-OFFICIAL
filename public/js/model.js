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
});
