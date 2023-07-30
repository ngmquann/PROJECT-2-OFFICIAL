$(document).ready(function () {
    $("#changePass, #ticket").hide();
    $("#changePassword").click(function () {
        $("#contentProfile").hide();
        $("#ticket").hide();
        $("#changePass").show();
    });
    $("#booking").click(function () {
        $("#contentProfile").hide();
        $("#changePass").hide();
        $("#ticket").show();
    });
    $("#editProfile").click(function () {
        $("#contentProfile").show();
        $("#changePass").hide();
        $("#ticket").hide();
    });
});
