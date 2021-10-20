$(document).ready(function() {
    $("#character").on("change", function() {
        if ($(this).val() !== "pal") {
            $("#holy-shield").attr("disabled", "disabled");
            $("#shield option[value='alma-negra-shield']").attr("disabled", "disabled");
            $("#shield option[value='hoz-shield']").attr("disabled", "disabled");
            $("#shield option[value='exile-shield']").attr("disabled", "disabled");
        } else {
            $("#holy-shield").removeAttr("disabled");
            $("#shield option[value='alma-negra-shield']").removeAttr("disabled");
            $("#shield option[value='hoz-shield']").removeAttr("disabled");
            $("#shield option[value='exile-shield']").removeAttr("disabled");
        }
    });
    $("#character").on("change", function() {
        if ($(this).val() !== "nec") {
            $("#shield option[value='homunculus-shield']").attr("disabled", "disabled");
        } else {
            $("#shield option[value='homunculus-shield']").removeAttr("disabled");
        }
    });
    $("#shield").on("change", function() {
        if ($(this).find(':selected').hasClass("runeword")) {
            $("#shael").attr("disabled", "disabled");
        } else {
            $("#shael").removeAttr("disabled");
        }
    });
});