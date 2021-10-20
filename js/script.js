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
        if ($(this).val() === "ama") {
            htmlAma = "<label>Type of Weapon (Amazon Only)</label><br>";
            htmlAma += "<input type='radio' id='weap1' name='weap1'>";
            htmlAma += "<label for='weap1'>1-H Swinging Weapon (Axe, Club, Mace, Scepter, Sword, Throwing Axe, or Wand)</label><br>";
            htmlAma += "<input type='radio' id='weap2'>";
            htmlAma += "<label for='weap2'>Any Other Weapon</label><br>";
            $("#divAma").html(htmlAma);
        } else {
            $("#divAma").html("");
        }
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
    $("#btn").click(function() {
        if ($("#character") === '') {
            alert("Please select a character.");
        } else if ($("#shield") === '') {
            alert("Please select a shield.");
        }
    });
});