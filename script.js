function lightMode() {
    $("body").addClass("light-mode");
}

function darkMode() {
    $("body").removeClass("light-mode");
}

$("document").ready(function () {
    darkMode();
    $("#toggle").change(function () {
        if ($("#toggle").is(":checked")) {
            darkMode();
        } else {
            lightMode();
        }
    });
});
