$(document).ready(function () {
    function updateValue(id, value) {
        $("#value_" + id).val(value);
        if (value > 1) {
            $(".btn-minus[data-id='" + id + "']").removeClass("disabled");
        } else {
            $(".btn-minus[data-id='" + id + "']").addClass("disabled");
        }
    }

    // plus minus value
    $(".btn-plus").click(function () {
        let id = $(this).data("id");
        let currentValue = parseInt($("#value_" + id).val());
        updateValue(id, currentValue + 1);
        console.log(data);
    });

    $(".btn-minus").click(function () {
        let id = $(this).data("id");
        let currentValue = parseInt($("#value_" + id).val());
        if (currentValue > 1) {
            updateValue(id, currentValue - 1);
        }
    });

    $(".qty input").on("keydown", function (e) {
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
            if (e.key === "0" && $(this).val() === "") {
                e.preventDefault();
            } else if (e.key === "0" && $(this).val().length > 0) {
                return;
            }
        }
    });
});
