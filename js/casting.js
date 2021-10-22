$(document).ready(function() {
    $("#character").on("change", function () {
        if ($(this).val() === "ama") {
            htmlAma = "<label>Type of Weapon (Amazon Only)<span class='required'>*</span></label><br>";
            htmlAma += "<input type='radio' id='weap1' name='weap' value='weap1' required>";
            htmlAma += "<label for='weap1'>Bow</label><br>";
            htmlAma += "<input type='radio' id='weap2' name='weap' value='weap2'>";
            htmlAma += "<label for='weap2'>Crossbow or 2-H Sword</label><br>";
            htmlAma += "<input type='radio' id='weap3' name='weap' value='weap3'>";
            htmlAma += "<label for='weap3'>Staff, Hammer, Axe, Polearm, Spear, Knife, or Javelin</label><br>";
            htmlAma += "<input type='radio' id='weap4' name='weap' value='weap4'>";
            htmlAma += "<label for='weap4'>No Weapon</label>";
            $("#divAma").html(htmlAma);
        } else {
            $("#divAma").html("");
        }
        if ($(this).val() === "dru") {
            htmlDru = "<label>Form (Druid Only)<span class='required'>*</span></label><br>";
            htmlDru += "<input type='radio' id='human' name='druForm' value='human' required>";
            htmlDru += "<label for='human'>Human</label><br>"
            htmlDru += "<input type='radio' id='werewolf' name='druForm' value='werewolf'>";
            htmlDru += "<label for='werewolf'>Werewolf</label><br>";
            htmlDru += "<input type='radio' id='werebear' name='druForm' value='werebear'>";
            htmlDru += "<label for='werebear'>Werebear</label>"
            $("#divDru").html(htmlDru);
        } else {
            $("#divDru").html("");
        }
        if ($(this).val() === 'nec') {
            htmlNec = "<label>Form (Necromancer Only)<span class='required'>*</span><br>";
            htmlNec += "<input type='radio' id='normal' name='necForm' value='normal' required>";
            htmlNec += "<label for='normal'>Human</label><br>";
            htmlNec += "<input type='radio' id='vampire' name='necForm' value='vampire'>";
            htmlNec += "<label for='vampire'>Vampire</label>";
            $("#divNec").html(htmlNec);
            $("#shield option[value='darkforce-spawn-head']").removeAttr("disabled");
        } else {
            $("#shield option[value='darkforce-spawn-head']").attr("disabled", "disabled");
            $("#divNec").html("");
        }
        if ($(this).val() === 'sor') {
            htmlSor = "<label>Type of Spell (Sorceress Only)<span class='required'>*</span><br>";
            htmlSor += "<input type='radio' id='light' name='spell' value='light' required>";
            htmlSor += "<label for='light'>Lightning or Chain Lightning</label><br>";
            htmlSor += "<input type='radio' id='other-spells' name='spell' value='other'>";
            htmlSor += "<label for='other-spells'>Other Spells</label>";
            $("#divSor").html(htmlSor);
            $("#weapon option[value='orb-of-apprentice']").removeAttr("disabled", "disabled");
            $("#weapon option[value='orb-of-magus']").removeAttr("disabled");
            $("#set option[value='tal-rashas-orb']").removeAttr("disabled");
            $("#set option[value='tal-rashas-belt-amulet-and-orb']").removeAttr("disabled");
            $("#set option[value='tal-rashas-belt-helm-and-orb']").removeAttr("disabled");
            $("#set option[value='tal-rashas-belt-armor-and-orb']").removeAttr("disabled");
            $("#set option[value='tal-rashas-amulet-helm-armor-and-orb']").removeAttr("disabled");
            $("#set option[value='tal-rashas-amulet-helm-belt-and-orb']").removeAttr("disabled");
            $("#set option[value='tal-rashas-amulet-armor-belt-and-orb']").removeAttr("disabled");
            $("#weapon option[value='the-oculus-orb']").removeAttr("disabled");
            $("#weapon option[value='eschutas-temper-orb']").removeAttr("disabled");
            $("#weapon option[value='deaths-fathom-orb']").removeAttr("disabled");
        } else {
            $("#divSor").html("");
            $("#weapon option[value='orb-of-apprentice']").attr("disabled", "disabled");
            $("#weapon option[value='orb-of-magus']").attr("disabled", "disabled");
            $("#set option[value='tal-rashas-orb']").attr("disabled", "disabled");
            $("#set option[value='tal-rashas-armor-and-orb']").attr("disabled", "disabled");
            $("#set option[value='tal-rashas-belt-amulet-and-orb']").attr("disabled", "disabled");
            $("#set option[value='tal-rashas-belt-helm-and-orb']").attr("disabled", "disabled");
            $("#set option[value='tal-rashas-belt-armor-and-orb']").attr("disabled", "disabled");
            $("#set option[value='tal-rashas-amulet-helm-armor-and-orb']").attr("disabled", "disabled");
            $("#set option[value='tal-rashas-amulet-helm-belt-and-orb']").attr("disabled", "disabled");
            $("#set option[value='tal-rashas-amulet-armor-belt-and-orb']").attr("disabled", "disabled");
            $("#weapon option[value='the-oculus-orb']").attr("disabled", "disabled");
            $("#weapon option[value='eschutas-temper-orb']").attr("disabled", "disabled");
            $("#weapon option[value='deaths-fathom-orb']").attr("disabled", "disabled");
        }
    });
    $("#set").on("change", function() {
        if ($(this).val() === 'arcannas-tricks-set') {
            $("#amulet").attr("disabled", "disabled");
            $("#helm").attr("disabled", "disabled");
            $("#armor").attr("disabled", "disabled");
            $("#shield").attr("disabled", "disabled");
            $("#weapon").attr("disabled", "disabled");
            $("#ring").removeAttr("disabled");
        } else if ($(this).val() === 'cathans-traps-set') {
            $("#amulet").attr("disabled", "disabled");
            $("#ring").attr("disabled", "disabled");
            $("#helm").attr("disabled", "disabled");
            $("#armor").attr("disabled", "disabled");
            $("#shield").attr("disabled", "disabled");
            $("#weapon").attr("disabled", "disabled");
        } else {
            $("#amulet").removeAttr("disabled");
            $("#ring").removeAttr("disabled");
            $("#helm").removeAttr("disabled");
            $("#armor").removeAttr("disabled");
            $("#shield").removeAttr("disabled");
            $("#weapon").removeAttr("disabled");
        }
        if ($(this).val() === 'tal-rashas-armor-and-amulet') {
            $("#amulet").attr("disabled", "disabled");
            $("#armor").attr("disabled", "disabled");
        } else
        {
            $("#amulet").removeAttr("disabled");
            $("#armor").removeAttr("disabled");
        }
        if ($(this).val() === 'tal-rashas-armor-and-helm') {
            $("#helm").attr("disabled", "disabled");
            $("#armor").attr("disabled", "disabled");
        } else
        {
            $("#helm").removeAttr("disabled");
            $("#armor").removeAttr("disabled");
        }
        if ($(this).val() === 'tal-rashas-armor-and-belt') {
            $("#belt").attr("disabled", "disabled");
            $("#armor").attr("disabled", "disabled");
        } else
        {
            $("#amulet").removeAttr("disabled");
            $("#belt").removeAttr("disabled");
        }
        if ($(this).val() === 'tal-rashas-armor-and-orb') {
            $("#orb").attr("disabled", "disabled");
            $("#armor").attr("disabled", "disabled");
        } else
        {
            $("#amulet").removeAttr("disabled");
            $("#orb").removeAttr("disabled");
        }
        if ($(this).val() === 'tal-rashas-belt-amulet-and-helm') {
            $("#helm").attr("disabled", "disabled");
            $("#amulet").attr("disabled", "disabled");
            $("#belt").attr("disabled", "disabled");
        } else {
            $("#helm").removeAttr("disabled");
            $("#amulet").removeAttr("disabled");
            $("#belt").removeAttr("disabled");
        }
        if ($(this).val() === 'tal-rashas-belt-amulet-and-armor') {
            $("#armor").attr("disabled", "disabled");
            $("#amulet").attr("disabled", "disabled");
            $("#belt").attr("disabled", "disabled");
        } else {
            $("#armor").removeAttr("disabled");
            $("#amulet").removeAttr("disabled");
            $("#belt").removeAttr("disabled");
        }
        if ($(this).val() === 'tal-rashas-belt-amulet-and-orb') {
            $("#orb").attr("disabled", "disabled");
            $("#amulet").attr("disabled", "disabled");
            $("#belt").attr("disabled", "disabled");
        } else {
            $("#orb").removeAttr("disabled");
            $("#amulet").removeAttr("disabled");
            $("#belt").removeAttr("disabled");
        }
        if ($(this).val() === 'tal-rashas-belt-helm-and-armor') {
            $("#helm").attr("disabled", "disabled");
            $("#armor").attr("disabled", "disabled");
            $("#belt").attr("disabled", "disabled");
        } else {
            $("#helm").removeAttr("disabled");
            $("#armor").removeAttr("disabled");
            $("#belt").removeAttr("disabled");
        }
        if ($(this).val() === 'tal-rashas-belt-helm-and-orb') {
            $("#helm").attr("disabled", "disabled");
            $("#orb").attr("disabled", "disabled");
            $("#belt").attr("disabled", "disabled");
        } else {
            $("#helm").removeAttr("disabled");
            $("#orb").removeAttr("disabled");
            $("#belt").removeAttr("disabled");
        }
        if ($(this).val() === 'tal-rashas-belt-armor-and-orb') {
            $("#armor").attr("disabled", "disabled");
            $("#orb").attr("disabled", "disabled");
            $("#belt").attr("disabled", "disabled");
        } else {
            $("#armor").removeAttr("disabled");
            $("#orb").removeAttr("disabled");
            $("#belt").removeAttr("disabled");
        }
        if ($(this).val() === 'tal-rashas-amulet-helm-armor-and-belt') {
            $("#helm").attr("disabled", "disabled");
            $("#armor").attr("disabled", "disabled");
            $("#amulet").attr("disabled", "disabled");
            $("#belt").attr("disabled", "disabled");
        } else {
            $("#helm").removeAttr("disabled");
            $("#armor").removeAttr("disabled");
            $("#amulet").removeAttr("disabled");
            $("#belt").removeAttr("disabled");
        }
        if ($(this).val() === 'tal-rashas-amulet-helm-armor-and-orb') {
            $("#helm").attr("disabled", "disabled");
            $("#armor").attr("disabled", "disabled");
            $("#amulet").attr("disabled", "disabled");
            $("#orb").attr("disabled", "disabled");
        } else {
            $("#helm").removeAttr("disabled");
            $("#armor").removeAttr("disabled");
            $("#amulet").removeAttr("disabled");
            $("#orb").removeAttr("disabled");
        }
        if ($(this).val() === 'tal-rashas-amulet-helm-belt-and-orb') {
            $("#helm").attr("disabled", "disabled");
            $("#orb").attr("disabled", "disabled");
            $("#amulet").attr("disabled", "disabled");
            $("#belt").attr("disabled", "disabled");
        } else {
            $("#helm").removeAttr("disabled");
            $("#orb").removeAttr("disabled");
            $("#amulet").removeAttr("disabled");
            $("#belt").removeAttr("disabled");
        }
        if ($(this).val() === 'tal-rashas-amulet-armor-and-belt-orb') {
            $("#orb").attr("disabled", "disabled");
            $("#armor").attr("disabled", "disabled");
            $("#amulet").attr("disabled", "disabled");
            $("#belt").attr("disabled", "disabled");
        } else {
            $("#orb").removeAttr("disabled");
            $("#armor").removeAttr("disabled");
            $("#amulet").removeAttr("disabled");
            $("#belt").removeAttr("disabled");
        }
    });
    $("#shield").on("change", function() {
        if (!$(this).find(":selected").prop("disabled")) {
            $("#weapon option[value='najs-staff']").attr("disabled", "disabled");
            $("#weapon option[value='iron-jang-bong-staff']").attr("disabled", "disabled");
            $("#weapon option[value='razorswitch-staff']").attr("disabled", "disabled");
            $("#weapon option[value='chromatic-ire-staff']").attr("disabled", "disabled");
            $("#weapon option[value='earth-shifter-maul']").attr("disabled", "disabled");
            $("#weapon option[value='ondals-wisdom-staff']").attr("disabled", "disabled");
            $("#weapon option[value='mang-songs-lesson-staff']").attr("disabled", "disabled");
            $("#weapon option[value='memory-staff']").attr("disabled", "disabled");
            $("#weapon option[value='hoto-staff']").attr("disabled", "disabled");
            $("#weapon option[value='fortitude-2h-weapon']").attr("disabled", "disabled");
            $("#weapon option[value='insight-polearm']").attr("disabled", "disabled");
            $("#weapon option[value='insight-staff']").attr("disabled", "disabled");
            $("#weapon option[value='spirit-2h-sword']").attr("disabled", "disabled");
        } else {
            $("#weapon option[value='najs-staff']").removeAttr("disabled");
            $("#weapon option[value='iron-jang-bong-staff']").removeAttr("disabled");
            $("#weapon option[value='razorswitch-staff']").removeAttr("disabled");
            $("#weapon option[value='chromatic-ire-staff']").removeAttr("disabled");
            $("#weapon option[value='earth-shifter-maul']").removeAttr("disabled");
            $("#weapon option[value='ondals-wisdom-staff']").removeAttr("disabled");
            $("#weapon option[value='mang-songs-lesson-staff']").removeAttr("disabled");
            $("#weapon option[value='memory-staff']").removeAttr("disabled");
            $("#weapon option[value='hoto-staff']").removeAttr("disabled");
            $("#weapon option[value='fortitude-2h-weapon']").removeAttr("disabled");
            $("#weapon option[value='insight-polearm']").removeAttr("disabled");
            $("#weapon option[value='insight-staff']").removeAttr("disabled");
            $("#weapon option[value='spirit-2h-sword']").removeAttr("disabled");
        }
    });
    $("#weapon").on("change", function() {
        if ($(this).val() === 'najs-staff' || $(this).val() === 'iron-jang-bong-staff' ||
            $(this).val() === 'razorswitch-staff' || $(this).val() === 'chromatic-ire-staff' ||
            $(this).val() === 'earth-shifter-maul' || $(this).val() === 'ondals-wisdom-staff' ||
            $(this).val() === 'mang-songs-lesson-staff' || $(this).val() === 'memory-staff' ||
            $(this).val() === 'hoto-staff' || $(this).val() === 'fortitude-2h-weapon' ||
            $(this).val() === 'insight-polearm' || $(this).val() === 'insight-staff' ||
            $(this).val() === 'spirit-2h-sword') {
            $("#shield").attr("disabled", "disabled");
        } else {
            $("#shield").removeAttr("disabled");
        }
    });
    $("#btn").click(function() {
        if ($("#character").find(":selected").prop("disabled")) {
            alert("Please select a character.");
        }
    });
});