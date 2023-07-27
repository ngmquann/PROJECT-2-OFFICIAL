$(document).ready(function () {
    function updateValue(value) {
        $("#value").val(value);
        if (value > 1) {
            $("#btn-minus").removeClass("disabled");
        } else {
            $("#btn-minus").addClass("disabled");
        }
    }

    // plus minus value
    $("#btn-plus").click(function () {
        let currentValue = parseInt($("#value").val());
        updateValue(currentValue + 1);
    });

    $("#btn-minus").click(function () {
        let currentValue = parseInt($("#value").val());
        if (currentValue > 1) {
            updateValue(currentValue - 1);
        }
    });

    $("#value").on("input", function () {
        let currentValue = parseInt($(this).val());
        if (!isNaN(currentValue)) {
            updateValue(currentValue);
        }
    });

    $("#value").keydown(function (e) {
        if (
            (e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
            (e.keyCode >= 35 && e.keyCode <= 40) ||
            $.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1
        ) {
            return;
        }
        if (
            (e.shiftKey || e.keyCode < 49 || e.keyCode > 57) &&
            (e.keyCode < 96 || e.keyCode > 105)
        ) {
            e.preventDefault();
        }
    });
});
