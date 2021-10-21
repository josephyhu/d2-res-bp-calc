$(document).ready(function() {
    $("#character").on("change", function() {
        if ($(this).val() !== "pal") {
            $("#shield option[value='paladin-shields']").attr("disabled", "disabled");
            $("#shield option[value='alma-negra-shield']").attr("disabled", "disabled");
            $("#shield option[value='hoz-shield']").attr("disabled", "disabled");
            $("#shield option[value='exile-shield']").attr("disabled", "disabled");
            $("#divPal").html("");
        } else {
            htmlPal = "<input type='checkbox' id='holy-shield' name='holy-shield'>";
            htmlPal += "<label for='holy-shield'>Holy Shield</label>";
            $("#shield option[value='paladin-shields']").removeAttr("disabled");
            $("#shield option[value='alma-negra-shield']").removeAttr("disabled");
            $("#shield option[value='hoz-shield']").removeAttr("disabled");
            $("#shield option[value='exile-shield']").removeAttr("disabled");
            $("#divPal").html(htmlPal);
        }
        if ($(this).val() === "ama") {
            htmlAma = "<label>Type of Weapon (Amazon Only)<span class='required'>*</span></label><br>";
            htmlAma += "<input type='radio' id='weap1' name='weap' required>";
            htmlAma += "<label for='weap1'>1-H Swinging Weapon (Axe, Club, Mace, Scepter, Sword, Throwing Axe, or Wand)</label><br>";
            htmlAma += "<input type='radio' id='weap2' name='weap'>";
            htmlAma += "<label for='weap2'>Any other weapon</label><br>";
            $("#divAma").html(htmlAma);
        } else {
            $("#divAma").html("");
        }
        if ($(this).val() === 'dru') {
            htmlDru = "<label for='form'>Form (Druid Only)<span class='required'>*</span></label>";
            htmlDru += "<select id='form' name='form' required>";
            htmlDru += "<option disabled selected>---SELECT DRUID FORM---</option>";
            htmlDru += "<option value='human'>Human</option>";
            htmlDru += "<option value='werewolf'>Werewolf</option>";
            htmlDru += "<option value='werebear'>Werebear</option>";
            $("#divDru").html(htmlDru);
        } else {
            $("#divDru").html("");
        }
        if ($(this).val() !== "nec") {
            $("#shield option[value='necromancer-shields']").attr("disabled", "disabled");
            $("#shield option[value='homunculus-shield']").attr("disabled", "disabled");
        } else {
            $("#shield option[value='necromancer-shields']").removeAttr("disabled");
            $("#shield option[value='homunculus-shield']").removeAttr("disabled");
        }
    });
    $("#shield").on("change", function() {
        if ($(this).find(":selected").hasClass("1-socket")) {
            htmlShael = "<input type='checkbox' id='shael1' name='shael1'>";
            htmlShael += "<label for='shael1'>Socket a Shael Rune to shield</label><br>";
        } else if ($(this).find(":selected").hasClass("2-socket")) {
            htmlShael = "<input type='checkbox' id='shael1' name='shael1'>";
            htmlShael += "<label for='shael1'>Socket a Shael Rune to shield</label><br>";
            htmlShael += "<input type='checkbox' id='shael2' name='shael2'>";
            htmlShael += "<label for='shael2'>Socket another Shael Rune to shield</label><br>";
        } else if ($(this).find(":selected").hasClass("3-socket")) {
            htmlShael = "<input type='checkbox' id='shael1' name='shael1'>";
            htmlShael += "<label for='shael1'>Socket a Shael Rune to shield</label><br>";
            htmlShael += "<input type='checkbox' id='shael2' name='shael2'>";
            htmlShael += "<label for='shael2'>Socket another Shael Rune to shield</label><br>";
            htmlShael += "<input type='checkbox' id='shael3' name='shael3'>";
            htmlShael += "<label for='shael3'>Socket a 3rd Shael Rune to shield</label><br>";
        } else if($(this).find(":selected").hasClass("4-socket")) {
            htmlShael = "<input type='checkbox' id='shael1' name='shael1'>";
            htmlShael += "<label for='shael1'>Socket a Shael Rune to shield</label><br>";
            htmlShael += "<input type='checkbox' id='shael2' name='shael2'>";
            htmlShael += "<label for='shael2'>Socket another Shael Rune to shield</label><br>";
            htmlShael += "<input type='checkbox' id='shael3' name='shael3'>";
            htmlShael += "<label for='shael3'>Socket a 3rd Shael Rune to shield</label><br>";
            htmlShael += "<input type='checkbox' id='shael4' name='shael4'>";
            htmlShael += "<label for='shael4'>Socket a 4th Shael Rune to shield</label><br>";
        }
        $("#htmlShael").html(htmlShael);
    });
    $("#btn").click(function() {
        if ($("#character").find(":selected").prop("disabled")) {
            alert("Please select a character.");
        } else if ($("#shield").find(":selected").prop("disabled")) {
            alert ("Please select a shield.");
        } else if($("#form").find(":selected").prop("disabled")) {
            alert ("Please select Druid form.");
        }
    });
});