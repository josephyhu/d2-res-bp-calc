<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>D2 Resurrected Breakpoints Calc | Blocking</title>
	<meta name="description" content="A Diablo II: Resurrected breakpoints calculator.">
	<meta name="author" content="Joseph Yhu">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
	<h1>Diablo II: Resurrected Breakpoints Calculator</h1>
	<nav>
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="blocking.php">Blocking</a></li>
			<li><a href="casting.php" class="active">Casting</a></li>
			<li><a href="hit-recovery.php">Hit Recovery</a></li>
		</ul>
	</nav>
</header>
<main>
	<h2>Casting</h2>
	<form action="casting.php" method="post">
		<label for="character">Character<span class="required">*</span></label><br>
		<select id="character" name="character">
			<option disabled selected>---SELECT A CHARACTER---</option>
			<option value="ama">Amazon</option>
			<option value="ass">Assassin</option>
			<option value="bar">Barbarian</option>
			<option value="dru">Druid</option>
			<option value="nec">Necromancer</option>
			<option value="pal">Paladin</option>
			<option value="sor">Sorceress</option>
		</select><br>
        <div id="divAma"></div>
        <div id="divDru"></div>
        <div id="divNec"></div>
        <div id="divSor"></div>
        <label for="set">Partial and Complete Set Items</label><br>
        <select id="set" name="set">
            <option disabled selected>---SELECT A PARTIAL OR A COMPLETE SET---</option>
            <optgroup label="Partial Set">
                <option value="tal-rashas-armor-and-amulet">Tal Rasha's Guardianship Lacquered Plate & Tal Rasha's Adjudication Amulet</option>
                <option value="tal-rashas-armor-and-helm">Tal Rasha's Guardianship Lacquered Plate & Tal Rasha's Horadric Crest Death Mask</option>
                <option value="tal-rashas-armor-and-belt">Tal Rasha's Guardianship Lacquered Plate & Tal Rasha's Fine-Spun Cloth Mesh Belt</option>
                <option value="tal-rashas-armor-and-orb">Tal Rasha's Guardianship Lacquered Plate & Tal Rasha's Lidless Eye Swirling Crystal (Sorceress Only)</option>
                <option value="tal-rashas-belt-amulet-and-helm">Tal Rasha's Belt, Amulet, & Helm</option>
                <option value="tal-rashas-belt-amulet-and-armor">Tal Rasha's Belt, Amulet & Armor</option>
                <option value="tal-rashas-belt-amulet-and-orb">Tal Rasha's Belt, Amulet, & Orb (Sorceress Only)</option>
                <option value="tal-rashas-belt-helm-and-armor">Tal Rasha's Belt, Helm, & Armor</option>
                <option value="tal-rashas-belt-helm-and-orb">Tal Rasha's Belt, Helm, & Orb (Sorceress Only)</option>
                <option value="tal-rashas-belt-armor-and-orb">Tal Rasha's Belt, Armor, & Orb (Sorceress Only)</option>
                <option value="tal-rashas-amulet-helm-armor-and-belt">Tal Rasha's Amulet, Helm, Armor, & Belt</option>
                <option value="tal-rashas-amulet-helm-armor-and-orb">Tal Rasha's Amulet, Helm, Armor, & Orb (Sorceress Only)</option>
                <option value="tal-rashas-amulet-helm-belt-and-orb">Tal Rasha's Amulet, Helm, Belt, & Orb (Sorceress Only)</option>
                <option value="tal-rashas-amulet-armor-belt-and-orb">Tal Rasha's Amulet, Armor, Belt, & Orb (Sorceress Only)</option>
            </optgroup>
            <optgroup label="Complete Set">
                <option value="arcannas-tricks-set">Arcanna's Tricks Complete Set</option>
                <option value="cathans-traps-set">Cathan's Traps Complete Set</option>
            </optgroup>
        </select><br>
        <label for="amulet">Amulet</label><br>
        <select id="amulet" name="amulet">
            <option disabled selected>---SELECT AN AMULET---</option>
            <optgroup label="Magic/Rare">
                <option value="amulet-of-apprentice">Magic/Rare Amulet of Apprentice</option>
            </optgroup>
            <optgroup label="Crafted">
                <option value="caster-amulet">Caster Amulet</option>
                <option value="caster-amulet-of-apprentice">Caster Amulet of Apprentice</option>
            </optgroup>
        </select><br>
        <label for="ring">Ring</label><br>
        <select id="ring" name="ring">
            <option disabled selected>---SELECT A RING---</option>
            <optgroup label="Magic/Rare">
                <option value="ring-of-apprentice">Magic/Rare Ring of Apprentice</option>
            </optgroup>
        </select><br>
        <label for="helm">Helm</label><br>
        <select id="helm" name="helm">
            <option disabled selected>---SELECT A HELM</option>
            <optgroup label="Magic/Rare">
            <option value="circlet-of-apprentice">Magic/Rare Circlet of Apprentice</option>
            <option value="circlet-of-magus">Magic/Rare Circlet of Magus</option>
            </optgroup>
            <optgroup label="Unique">
                <option value="griffons-diadem">Griffon's Eye Diadem</option>
            </optgroup>
        </select><br>
        <label for="armor">Body Armor</label><br>
        <select id="armor" name="armor">
            <option disabled selected>---SELECT A BODY ARMOR---</option>
            <optgroup label="Unique">
                <option value="vipermagi-armor">Skin of the Vipermagi Serpentskin Armor</option>
                <option value="que-hegans-armor">Que-Hegan's Wisdom Mage Plate</option>
                <option value="ormus-robes-armor">Ormus' Robes Dusk Shroud</option>
            </optgroup>
            <optgroup label="Runeword">
                <option value="stealth-armor">Stealth Armor</option>
                <option value="fortitude-armor">Fortitude Armor</option>
            </optgroup>
        </select><br>
        <label for="shield">Shield</label><br>
        <select id="shield" name="shield">
            <option disabled selected>---SELECT A SHIELD---</option>
            <optgroup label="Unique">
                <option value="darkforce-spawn-head">Darkforce Spawn Bloodlord Skull (Necromancer Only)</option>
                <option value="wall-of-the-eyeless-shield">Wall of the Eyeless Bone Shield</option>
                <option value="lidless-wall-shield">Lidless Wall Grim Shield</option>
            </optgroup>
            <optgroup label="Runeword">
                <option value="splendor-shield">Splendor Shield</option>
                <option value="spirit-shield">Spirit Shield</option>
            </optgroup>
        </select><br>
        <label for="gloves">Gloves</label><br>
        <select id="gloves" name="gloves">
            <option disabled selected>---SELECT GLOVES---</option>
            <optgroup label="Set">
                <option value="trang-ouls-gloves">Trang-Oul's Claws Heavy Bracers</option>
            </optgroup>
            <optgroup label="Unique">
                <option value="magefist-gloves">Magefist Light Gauntlets</option>
            </optgroup>
        </select><br>
        <label for="belt">Belt</label><br>
        <select id="belt" name="belt">
            <option disabled selected>---SELECT A BELT---</option>
            <optgroup label="Crafted">
                <option value="caster-belt">Caster Belt</option>
            </optgroup>
            <optgroup label="Unique">
                <option value="arachnid-mesh-belt">Arachnid Mesh Spiderweb Sash</option>
            </optgroup>
        </select><br>
        <label for="weapon">Weapon</label><br>
        <select id="weapon" name="weapon">
            <option disabled selected>---SELECT A WEAPON---</option>
            <optgroup label="Magic/Rare">
                <option value="orb-of-apprentice">Magic/Rare Orb of Apprentice</option>
                <option value="orb-of-magus">Magic/Rare Orb of Magus</option>
                <option value="rod-of-apprentice">Magic/Rare Rod of Apprentice</option>
                <option value="rod-of-magus">Magic/Rare Rod of Magus</option>
            </optgroup>
            <optgroup label="Set">
                <option value="najs-staff">Naj's Puzzler Elder Staff</option>
                <option value="sanders-wand">Sander's Superstition Bone Wand</option>
                <option value="tal-rashas-orb">Tal Rasha's Lidless Eye Swirling Crystal (Sorceress Only)</option>
            </optgroup>
            <optgroup label="Unique">
                <option value="the-oculus-orb">The Oculus Swirling Crystal (Sorceress Only)</option>
                <option value="eschutas-temper-orb">Eschuta's Temper Eldritch Orb (Sorceress Only)</option>
                <option value="deaths-fathom-orb">Death's Fathom Dimensional Shard (Sorceress Only)</option>
                <option value="spectral-shard-blade">Spectral Shard Blade</option>
                <option value="iron-jang-bong-staff">The Iron Jang Bong War Staff</option>
                <option value="maelstrom-wand">Maelstrom Yew Wand</option>
                <option value="umes-lament-wand">Ume's Lament Grim Wand</option>
                <option value="spellsteel-axe">Spellsteel Bearded Axe</option>
                <option value="razorswitch-staff">Razorswitch Jo Staff</option>
                <option value="chromatic-ire-staff">Chromatic Ire Cedar Staff</option>
                <option value="suicide-branch-wand">Suicide Branch Burnt Wand</option>
                <option value="carin-shard-wand">Carin Shard Petrified Wand</option>
                <option value="arm-of-king-leoric-wand">Arm of King Leoric Tomb Wand</option>
                <option value="blackhand-key-wand">Blackhand Key Grave Wand</option>
                <option value="wizardspike-knife">Wizardspike Bone Knife</option>
                <option value="earth-shifter-maul">Earth Shifter Thunder Maul</option>
                <option value="ondals-wisdom-staff">Ondal's Wisdom Elder Staff</option>
                <option value="mang-songs-lesson-staff">Mang Song's Lesson Archon Staff</option>
                <option value="boneshade-wand">Boneshade Lich Wand</option>
            </optgroup>
            <optgroup label="Runeword">
                <option value="memory-staff">Memory Staff</option>
                <option value="white-wand">White Wand</option>
                <option value="hoto-mace">Heart of the Oak Mace</option>
                <option value="hoto-staff">Heart of the Oak Staff</option>
                <option value="fortitude-1h-weapon">Fortitude 1-H Weapon</option>
                <option value="fortitude-2h-weapon">Fortitude 2-H Weapon</option>
                <option value="insight-polearm">Insight Polearm</option>
                <option value="insight-staff">Insight Staff</option>
                <option value="spirit-1h-sword">Spirit 1-H Sword</option>
                <option value="spirit-2h-sword">Spirit 2-H Sword</option>
            </optgroup>
        </select><br>
        <button type="submit" id="btn">Calculate</button>
        <button type="reset" id="reset">Reset</button>
    </form>
    <?php
    $character = $_POST['character'];
    $amulet = $_POST['amulet'];
    $ring = $_POST['ring'];
    $helm = $_POST['helm'];
    $armor = $_POST['armor'];
    $shield = $_POST['shield'];
    $gloves = $_POST['gloves'];
    $belt = $_POST['belt'];
    $weapon = $_POST['weapon'];
    $set = $_POST['set'];
    $weap = $_POST['weap'];
    $druForm = $_POST['druForm'];
    $necForm = $_POST['necForm'];
    $spell = $_POST['spell'];
    $rate = 0;

    if ($amulet === 'amulet-of-apprentice' || $amulet === 'caster-amulet' ||
        $ring === 'ring-of-apprentice ' || $helm === 'circlet-of-apprentice' ||
        $shield === 'splendor-shield' || $belt === 'caster-belt' ||
        $weapon === 'arm-of-king-leoric-wand' || $weapon === 'carin-shard-wand' ||
        $weapon === 'earth-shifter-maul' || $weapon === 'orb-of-apprentice' ||
        $weapon === 'rod of apprentice' || $weapon === 'spellsteel-axe' ||
        $set === 'cathans-traps-set' || $set === 'tal-rashas-armor-and-amulet' ||
        $set === 'tal-rashas-armor-and-helm' || $set === 'tal-rashas-armor-and-belt' ||
        $set === 'tal-rashas-belt-amulet-and-helm') {
        $rate += 10;
    }
    if ($amulet === 'caster-amulet-of-apprentice' || $helm === 'circlet-of-magus' ||
        $armor === 'ormus-robes-armor' || $armor === 'que-hegans-armor' ||
        $shield === 'lidless-wall-shield' || $shield === 'wall-of-the-eyeless-shield' ||
        $set === 'trang-ouls-gloves' || $gloves === 'magefist-gloves' ||
        $belt === 'arachnid-mesh-belt' || $weapon === 'chromatic-ire-staff' ||
        $weapon === 'deaths-fathom-orb' || $weapon === 'iron-jang-bong-staff' ||
        $weapon === 'orb-of-magus' || $weapon === 'rod-of-magus' ||
        $weapon === 'sanders-wand' || $set === 'tal-rashas-orb' ||
        $weapon === 'umes-lament-wand' || $weapon === 'white-wand' ||
        $set === 'arcannas-tricks-set' || $set === 'sanders-wand' ||
        $set === 'tal-rashas-belt-amulet-and-armor' || $set === 'tal-rashas-belt-helm-and-armor') {
        $rate += 20;
    }
    if ($armor === 'stealth-armor' || $weapon === 'boneshade-wand' ||
        $weapon === 'fortitude-1h-weapon' || $weapon === 'fortitude-2h-weapon' ||
        $helm === 'griffons-diadem' || $armor === 'fortitude-armor') {
        $rate += 25;
    }
    if ($set === 'tal-rashas-armor-and-orb' || $set === 'tal-rashas-belt-amulet-and-orb' ||
        $set === 'tal-rashas-belt-helm-and-orb' || $set === 'tal-rashas-amulet-helm-armor-and-belt' ||
        $armor === 'skin-of-the-vipermagi-armor' || $shield === 'darkforce-spawn-head' ||
        $weapon === 'blackhand-key-wand' || $weapon === 'maelstrom-wand' ||
        $weapon === 'mang-songs-lesson-staff' || $set === 'najs-staff' ||
        $weapon === 'the-oculus-orb' || $weapon === 'razorswitch-staff') {
        $rate += 30;
    }
    if ($weapon === 'memory-staff') {
        $rate += 33;
    }
    if ($shield === 'spirit-shield' || $weapon === 'spirit-1h-sword' ||
        $weapon === 'spirit-2h-sword' || $weapon === 'insight-polearm' ||
        $weapon === 'insight-staff') {
        $rate += 35;
    }
    if ($weapon === 'eschutas-temper-orb' || $weapon === 'hoto-mace' ||
        $weapon === 'hoto-staff' || $set === 'tal-rashas-belt-armor-and-orb' ||
        $set === 'tal-rashas-amulet-helm-armor-and-orb' || $set === 'tal-rashas-amulet-helm-belt-and-orb') {
        $rate += 40;
    }
    if ($weapon === 'ondals-wisdom-staff') {
        $rate += 45;
    }
    if ($weapon === 'wizardspike-dagger' || $weapon === 'suicide-branch-wand' ||
        $set === 'tal-rashas-amulet-armor-belt-and-orb') {
        $rate += 50;
    }

    if ($character === 'ama') {
        if ($weap === 'weap1') {
            echo '<table>';
            echo '<caption>Using a Bow</caption>';
            echo '<thead>';
            echo '<tr>';
            echo '<th>Faster Cast Rate</th>';
            echo '<th>Cast Frames</th>';
            echo '<th>Action Flags</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            echo '<tr>';
            echo '<td>0</td>';
            echo '<td>19</td>';
            echo '<td rowspan="2">10</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td>7</td>';
            echo '<td>18</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td>14</td>';
            echo '<td>17</td>';
            echo '<td rowspan="2">9</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td>22</td>';
            echo '<td>16</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td>32</td>';
            echo '<td>15</td>';
            echo '<td rowspan="2">8</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td>48</td>';
            echo '<td>14</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td>68</td>';
            echo '<td>13</td>';
            echo '<td rowspan="2">7</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td>99</td>';
            echo '<td>12</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td>152</td>';
            echo '<td>11</td>';
            echo '<td>6</td>';
            echo '</tr>';
            echo '</tbody>';
            echo '</table>';

	        if ($rate < 7) {
		        echo "Faster Cast Rate: $rate%<br>";
		        echo "Cast Frames: 19<br>";
                echo "Action Flags: 10<br>";
		        echo "Required Faster Cast Rate for the next breakpoint: " . ( 7 - $rate ) . "%";
	        } else if ($rate < 14) {
                echo "Faster Cast Rate: $rate%<br>";
                echo "Cast Frames: 18<br>";
                echo "Action Flags: 10<br>";
                echo "Required Faster Cast Rate for the next breakpoint: " . (14 - $rate) . "%";
            } else if ($rate < 22) {
		        echo "Faster Cast Rate: $rate%<br>";
		        echo "Cast Frames: 17<br>";
                echo "Action Flags: 9<br>";
		        echo "Required Faster Cast Rate for the next breakpoint: " . (22 - $rate) . "%";
            } else if ($rate < 32) {
		        echo "Faster Cast Rate: $rate%<br>";
		        echo "Cast Frames: 16<br>";
                echo "Action Flags: 9<br>";
		        echo "Required Faster Cast Rate for the next breakpoint: " . (32 - $rate) . "%";
            } else if ($rate < 48) {
		        echo "Faster Cast Rate: $rate%<br>";
		        echo "Cast Frames: 15<br>";
                echo "Action Flags: 8<br>";
		        echo "Required Faster Cast Rate for the next breakpoint: " . (48 - $rate) . "%";
            } else if ($rate < 68) {
		        echo "Faster Cast Rate: $rate%<br>";
		        echo "Cast Frames: 14<br>";
                echo "Action Flags: 8<br>";
		        echo "Required Faster Cast Rate for the next breakpoint: " . (68 - $rate) . "%";
            } else if ($rate < 99) {
		        echo "Faster Cast Rate: $rate%<br>";
		        echo "Cast Frames: 13<br>";
                echo "Action Flags: 7<br>";
		        echo "Required Faster Cast Rate for the next breakpoint: " . (99 - $rate) . "%";
            } else if ($rate < 152) {
		        echo "Faster Cast Rate: $rate%<br>";
		        echo "Cast Frames: 12<br>";
                echo "Action Flags: 7<br>";
		        echo "Required Faster Cast Rate for the next breakpoint: " . (152 - $rate) . "%";
            } else {
		        echo "Faster Cast Rate: $rate%<br>";
		        echo "Cast Frames: 11<br>";
                echo "Action Flags: 6<br>";
		        echo "Further FCR useless.";
            }
        } else if ($weap === 'weap2') {
	        echo '<table>';
	        echo '<caption>Using a Crowssbow or 2-H Sword</caption>';
	        echo '<thead>';
	        echo '<tr>';
	        echo '<th>Faster Cast Rate</th>';
	        echo '<th>Cast Frames</th>';
	        echo '<th>Action Flags</th>';
	        echo '</tr>';
	        echo '</thead>';
	        echo '<tbody>';
	        echo '<tr>';
	        echo '<td>0</td>';
	        echo '<td>19</td>';
	        echo '<td rowspan="2">12</td>';
	        echo '</tr>';
	        echo '<tr>';
	        echo '<td>7</td>';
	        echo '<td rowspan="2">18</td>';
	        echo '</tr>';
	        echo '<tr>';
	        echo '<td>11</td>';
	        echo '<td rowspan="3">11</td>';
	        echo '</tr>';
	        echo '<tr>';
	        echo '<td>14</td>';
	        echo '<td>17</td>';
	        echo '</tr>';
	        echo '<tr>';
	        echo '<td>22</td>';
	        echo '<td rowspan="2">16</td>';
	        echo '</tr>';
	        echo '<tr>';
	        echo '<td>26</td>';
	        echo '<td rowspan="2">10</td>';
	        echo '</tr>';
	        echo '<tr>';
	        echo '<td>32</td>';
	        echo '<td>15</td>';
	        echo '</tr>';
	        echo '<tr>';
	        echo '<td>48</td>';
	        echo '<td>14</td>';
            echo '<td rowspan="2">9</td>';
	        echo '</tr>';
	        echo '<tr>';
	        echo '<td>68</td>';
	        echo '<td rowspan="2">13</td>';
	        echo '</tr>';
	        echo '<tr>';
	        echo '<td>86</td>';
	        echo '<td rowspan="3">8</td>';
	        echo '</tr>';
	        echo '<tr>';
	        echo '<td>99</td>';
	        echo '<td>12</td>';
	        echo '</tr>';
	        echo '<tr>';
	        echo '<td>152</td>';
	        echo '<td rowspan="2">11</td>';
	        echo '</tr>';
	        echo '<tr>';
	        echo '<td>180</td>';
            echo '<td>7</td>';
	        echo '</tr>';
	        echo '</tbody>';
	        echo '</table>';

	        if ($rate < 7) {
		        echo "Faster Cast Rate: $rate%<br>";
		        echo "Cast Frames: 19<br>";
		        echo "Action Flags: 12<br>";
		        echo "Required Faster Cast Rate for the next breakpoint: " . ( 7 - $rate ) . "%";
	        } else if ($rate < 11) {
		        echo "Faster Cast Rate: $rate%<br>";
		        echo "Cast Frames: 18<br>";
                echo "Action Flags: 12<br>";
                echo "Required Faster Cast Rate for the next breakpoint: " . (11 - $rate) . "%";
            } else if ($rate < 14) {
		        echo "Faster Cast Rate: $rate%<br>";
		        echo "Cast Frames: 18<br>";
		        echo "Action Flags: 11<br>";
		        echo "Required Faster Cast Rate for the next breakpoint: " . (14 - $rate) . "%";
	        } else if ($rate < 22) {
		        echo "Faster Cast Rate: $rate%<br>";
		        echo "Cast Frames: 17<br>";
		        echo "Action Flags: 11<br>";
		        echo "Required Faster Cast Rate for the next breakpoint: " . (22 - $rate) . "%";
	        } else if ($rate < 26) {
		        echo "Faster Cast Rate: $rate%<br>";
		        echo "Cast Frames: 16<br>";
		        echo "Action Flags: 11<br>";
		        echo "Required Faster Cast Rate for the next breakpoint: " . (26 - $rate) . "%";
	        } else if ($rate < 32) {
		        echo "Faster Cast Rate: $rate%<br>";
		        echo "Cast Frames: 16<br>";
		        echo "Action Flags: 10<br>";
		        echo "Required Faster Cast Rate for the next breakpoint: " . (32 - $rate) . "%";
	        } else if ($rate < 48) {
		        echo "Faster Cast Rate: $rate%<br>";
		        echo "Cast Frames: 15<br>";
		        echo "Action Flags: 10<br>";
		        echo "Required Faster Cast Rate for the next breakpoint: " . (48 - $rate) . "%";
	        } else if ($rate < 68) {
		        echo "Faster Cast Rate: $rate%<br>";
		        echo "Cast Frames: 14<br>";
		        echo "Action Flags: 9<br>";
		        echo "Required Faster Cast Rate for the next breakpoint: " . (68 - $rate) . "%";
	        } else if ($rate < 86) {
		        echo "Faster Cast Rate: $rate%<br>";
		        echo "Cast Frames: 13<br>";
		        echo "Action Flags: 9<br>";
		        echo "Required Faster Cast Rate for the next breakpoint: " . (86 - $rate) . "%";
	        } else if ($rate < 99) {
		        echo "Faster Cast Rate: $rate%<br>";
		        echo "Cast Frames: 13<br>";
		        echo "Action Flags: 8<br>";
		        echo "Required Faster Cast Rate for the next breakpoint: " . (99 - $rate) . "%";
            } else if ($rate < 152) {
		        echo "Faster Cast Rate: $rate%<br>";
		        echo "Cast Frames: 12<br>";
		        echo "Action Flags: 8<br>";
		        echo "Required Faster Cast Rate for the next breakpoint: " . (152 - $rate) . "%";
	        } else if ($rate < 180) {
		        echo "Faster Cast Rate: $rate%<br>";
		        echo "Cast Frames: 11<br>";
		        echo "Action Flags: 8<br>";
		        echo "Required Faster Cast Rate for the next breakpoint: " . (180 - $rate) . "%";
            } else {
		        echo "Faster Cast Rate: $rate%<br>";
		        echo "Cast Frames: 11<br>";
		        echo "Action Flags: 7<br>";
		        echo "Further FCR useless.";
	        }
        } else if ($weap === 'weap3') {
	        echo '<table>';
	        echo '<caption>Using a Staff, Hammer, Axe, Polearm, Knife, or Javelin</caption>';
	        echo '<thead>';
	        echo '<tr>';
	        echo '<th>Faster Cast Rate</th>';
	        echo '<th>Cast Frames</th>';
	        echo '<th>Action Flags</th>';
	        echo '</tr>';
	        echo '</thead>';
	        echo '<tbody>';
	        echo '<tr>';
	        echo '<td>0</td>';
	        echo '<td>19</td>';
	        echo '<td rowspan="2">13</td>';
	        echo '</tr>';
	        echo '<tr>';
	        echo '<td>7</td>';
	        echo '<td rowspan="2">18</td>';
	        echo '</tr>';
	        echo '<tr>';
	        echo '<td>10</td>';
	        echo '<td rowspan="3">12</td>';
	        echo '</tr>';
	        echo '<tr>';
	        echo '<td>14</td>';
	        echo '<td>17</td>';
	        echo '</tr>';
	        echo '<tr>';
	        echo '<td>22</td>';
	        echo '<td rowspan="2">16</td>';
	        echo '</tr>';
	        echo '<tr>';
	        echo '<td>23</td>';
	        echo '<td rowspan="2">11</td>';
	        echo '</tr>';
	        echo '<tr>';
	        echo '<td>32</td>';
	        echo '<td rowspan="2">15</td>';
	        echo '</tr>';
	        echo '<tr>';
	        echo '<td>42</td>';
	        echo '<td rowspan="3">10</td>';
	        echo '</tr>';
	        echo '<tr>';
	        echo '<td>48</td>';
	        echo '<td>14</td>';
	        echo '</tr>';
	        echo '<tr>';
	        echo '<td>68</td>';
	        echo '<td rowspan="2">13</td>';
	        echo '</tr>';
	        echo '<tr>';
	        echo '<td>72</td>';
	        echo '<td rowspan="2">9</td>';
	        echo '</tr>';
	        echo '<tr>';
	        echo '<td>99</td>';
	        echo '<td rowspan="2">12</td>';
	        echo '</tr>';
	        echo '<tr>';
	        echo '<td>133</td>';
	        echo '<td rowspan="2">8</td>';
	        echo '</tr>';
	        echo '<tr>';
	        echo '<td>152</td>';
            echo "<td>11</td>";
	        echo '</tr>';
	        echo '</tbody>';
	        echo '</table>';

	        if ($rate < 7) {
		        echo "Faster Cast Rate: $rate%<br>";
		        echo "Cast Frames: 19<br>";
		        echo "Action Flags: 13<br>";
		        echo "Required Faster Cast Rate for the next breakpoint: " . ( 7 - $rate ) . "%";
	        } else if ($rate < 10) {
		        echo "Faster Cast Rate: $rate%<br>";
		        echo "Cast Frames: 18<br>";
                echo "Action Flags: 13<br>";
                echo "Required Faster Cast Rate for the next breakpoint: " . (10 - $rate) . "%";
            } else if ($rate < 14) {
		        echo "Faster Cast Rate: $rate%<br>";
		        echo "Cast Frames: 18<br>";
		        echo "Action Flags: 12<br>";
		        echo "Required Faster Cast Rate for the next breakpoint: " . (14 - $rate) . "%";
	        } else if ($rate < 22) {
		        echo "Faster Cast Rate: $rate%<br>";
		        echo "Cast Frames: 17<br>";
		        echo "Action Flags: 12<br>";
		        echo "Required Faster Cast Rate for the next breakpoint: " . (22 - $rate) . "%";
	        } else if ($rate < 23) {
		        echo "Faster Cast Rate: $rate%<br>";
		        echo "Cast Frames: 16<br>";
		        echo "Action Flags: 12<br>";
		        echo "Required Faster Cast Rate for the next breakpoint: " . (23 - $rate) . "%";
	        } else if ($rate < 32) {
		        echo "Faster Cast Rate: $rate%<br>";
		        echo "Cast Frames: 16<br>";
		        echo "Action Flags: 11<br>";
		        echo "Required Faster Cast Rate for the next breakpoint: " . (32 - $rate) . "%";
	        } else if ($rate < 42) {
		        echo "Faster Cast Rate: $rate%<br>";
		        echo "Cast Frames: 15<br>";
		        echo "Action Flags: 11<br>";
		        echo "Required Faster Cast Rate for the next breakpoint: " . (42 - $rate) . "%";
	        } else if ($rate < 48) {
		        echo "Faster Cast Rate: $rate%<br>";
		        echo "Cast Frames: 15<br>";
		        echo "Action Flags: 10<br>";
		        echo "Required Faster Cast Rate for the next breakpoint: " . (48 - $rate) . "%";
	        } else if ($rate < 68) {
		        echo "Faster Cast Rate: $rate%<br>";
		        echo "Cast Frames: 14<br>";
		        echo "Action Flags: 10<br>";
		        echo "Required Faster Cast Rate for the next breakpoint: " . (68 - $rate) . "%";
	        } else if ($rate < 72) {
		        echo "Faster Cast Rate: $rate%<br>";
		        echo "Cast Frames: 13<br>";
		        echo "Action Flags: 10<br>";
		        echo "Required Faster Cast Rate for the next breakpoint: " . (72 - $rate) . "%";
            } else if ($rate < 99) {
		        echo "Faster Cast Rate: $rate%<br>";
		        echo "Cast Frames: 13<br>";
		        echo "Action Flags: 9<br>";
		        echo "Required Faster Cast Rate for the next breakpoint: " . (99 - $rate) . "%";
            } else if ($rate < 133) {
		        echo "Faster Cast Rate: $rate%<br>";
		        echo "Cast Frames: 12<br>";
		        echo "Action Flags: 9<br>";
		        echo "Required Faster Cast Rate for the next breakpoint: " . (133 - $rate) . "%";
	        } else if ($rate < 152) {
		        echo "Faster Cast Rate: $rate%<br>";
		        echo "Cast Frames: 12<br>";
		        echo "Action Flags: 8<br>";
		        echo "Required Faster Cast Rate for the next breakpoint: " . (152 - $rate) . "%";
	        } else {
		        echo "Faster Cast Rate: $rate%<br>";
		        echo "Cast Frames: 11<br>";
		        echo "Action Flags: 8<br>";
		        echo "Further FCR useless.";
	        }
        } else if ($weap === 'weap4') {
	        echo '<table>';
	        echo '<caption>Using No Weapon</caption>';
	        echo '<thead>';
	        echo '<tr>';
	        echo '<th>Faster Cast Rate</th>';
	        echo '<th>Cast Frames</th>';
	        echo '<th>Action Flags</th>';
	        echo '</tr>';
	        echo '</thead>';
	        echo '<tbody>';
	        echo '<tr>';
	        echo '<td>0</td>';
	        echo '<td>19</td>';
	        echo '<td rowspan="2">11</td>';
	        echo '</tr>';
	        echo '<tr>';
	        echo '<td>7</td>';
	        echo '<td rowspan="2">18</td>';
	        echo '</tr>';
	        echo '<tr>';
	        echo '<td>13</td>';
	        echo '<td rowspan="3">10</td>';
	        echo '</tr>';
	        echo '<tr>';
	        echo '<td>14</td>';
	        echo '<td>17</td>';
	        echo '</tr>';
	        echo '<tr>';
	        echo '<td>22</td>';
	        echo '<td rowspan="2">16</td>';
	        echo '</tr>';
	        echo '<tr>';
	        echo '<td>29</td>';
	        echo '<td rowspan="3">9</td>';
	        echo '</tr>';
	        echo '<tr>';
	        echo '<td>32</td>';
	        echo '<td>15</td>';
	        echo '</tr>';
	        echo '<tr>';
	        echo '<td>48</td>';
	        echo '<td rowspan="2">14</td>';
	        echo '</tr>';
	        echo '<tr>';
	        echo '<td>56</td>';
	        echo '<td rowspan="3">8</td>';
	        echo '</tr>';
	        echo '<tr>';
	        echo '<td>68</td>';
	        echo '<td>13</td>';
	        echo '</tr>';
	        echo '<tr>';
	        echo '<td>99</td>';
	        echo '<td rowspan="2">12</td>';
	        echo '</tr>';
	        echo '<tr>';
	        echo '<td>113</td>';
	        echo '<td rowspan="2">7</td>';
	        echo '</tr>';
	        echo '<tr>';
	        echo '<td>152</td>';
            echo "<td>11</td>";
	        echo '</tr>';
	        echo '</tbody>';
	        echo '</table>';

	        if ($rate < 7) {
		        echo "Faster Cast Rate: $rate%<br>";
		        echo "Cast Frames: 19<br>";
		        echo "Action Flags: 11<br>";
		        echo "Required Faster Cast Rate for the next breakpoint: " . ( 7 - $rate ) . "%";
	        } else if ($rate < 13) {
		        echo "Faster Cast Rate: $rate%<br>";
		        echo "Cast Frames: 18<br>";
                echo "Action Flags: 11<br>";
                echo "Required Faster Cast Rate for the next breakpoint: " . (13 - $rate) . "%";
            } else if ($rate < 14) {
		        echo "Faster Cast Rate: $rate%<br>";
		        echo "Cast Frames: 18<br>";
		        echo "Action Flags: 10<br>";
		        echo "Required Faster Cast Rate for the next breakpoint: " . (14 - $rate) . "%";
	        } else if ($rate < 22) {
		        echo "Faster Cast Rate: $rate%<br>";
		        echo "Cast Frames: 17<br>";
		        echo "Action Flags: 10<br>";
		        echo "Required Faster Cast Rate for the next breakpoint: " . (22 - $rate) . "%";
	        } else if ($rate < 29) {
		        echo "Faster Cast Rate: $rate%<br>";
		        echo "Cast Frames: 16<br>";
		        echo "Action Flags: 10<br>";
		        echo "Required Faster Cast Rate for the next breakpoint: " . (29 - $rate) . "%";
	        } else if ($rate < 32) {
		        echo "Faster Cast Rate: $rate%<br>";
		        echo "Cast Frames: 16<br>";
		        echo "Action Flags: 9<br>";
		        echo "Required Faster Cast Rate for the next breakpoint: " . (32 - $rate) . "%";
	        } else if ($rate < 48) {
		        echo "Faster Cast Rate: $rate%<br>";
		        echo "Cast Frames: 15<br>";
		        echo "Action Flags: 9<br>";
		        echo "Required Faster Cast Rate for the next breakpoint: " . (48 - $rate) . "%";
	        } else if ($rate < 56) {
		        echo "Faster Cast Rate: $rate%<br>";
		        echo "Cast Frames: 14<br>";
		        echo "Action Flags: 9<br>";
		        echo "Required Faster Cast Rate for the next breakpoint: " . (56 - $rate) . "%";
	        } else if ($rate < 68) {
		        echo "Faster Cast Rate: $rate%<br>";
		        echo "Cast Frames: 14<br>";
		        echo "Action Flags: 8<br>";
		        echo "Required Faster Cast Rate for the next breakpoint: " . (68 - $rate) . "%";
	        } else if ($rate < 99) {
		        echo "Faster Cast Rate: $rate%<br>";
		        echo "Cast Frames: 13<br>";
		        echo "Action Flags: 8<br>";
		        echo "Required Faster Cast Rate for the next breakpoint: " . (99 - $rate) . "%";
            } else if ($rate < 113) {
		        echo "Faster Cast Rate: $rate%<br>";
		        echo "Cast Frames: 12<br>";
		        echo "Action Flags: 8<br>";
		        echo "Required Faster Cast Rate for the next breakpoint: " . (113 - $rate) . "%";
	        } else if ($rate < 152) {
		        echo "Faster Cast Rate: $rate%<br>";
		        echo "Cast Frames: 12<br>";
		        echo "Action Flags: 7<br>";
		        echo "Required Faster Cast Rate for the next breakpoint: " . (152 - $rate) . "%";
	        } else {
		        echo "Faster Cast Rate: $rate%<br>";
		        echo "Cast Frames: 11<br>";
		        echo "Action Flags: 7<br>";
		        echo "Further FCR useless.";
            }
        }
    } else if ($character === 'ass') {
	    echo '<table>';
	    echo '<thead>';
	    echo '<tr>';
	    echo '<th>Faster Cast Rate</th>';
	    echo '<th>Cast Frames</th>';
	    echo '<th>Action Flags</th>';
	    echo '</tr>';
	    echo '</thead>';
	    echo '<tbody>';
	    echo '<tr>';
	    echo '<td>0</td>';
	    echo '<td>16</td>';
	    echo '<td rowspan="2">9</td>';
	    echo '</tr>';
	    echo '<tr>';
	    echo '<td>8</td>';
	    echo '<td rowspan="2">15</td>';
	    echo '</tr>';
	    echo '<tr>';
	    echo '<td>15</td>';
	    echo '<td rowspan="3">8</td>';
	    echo '</tr>';
	    echo '<tr>';
	    echo '<td>16</td>';
	    echo '<td>14</td>';
	    echo '</tr>';
	    echo '<tr>';
	    echo '<td>27</td>';
	    echo '<td rowspan="2">13</td>';
	    echo '</tr>';
	    echo '<tr>';
	    echo '<td>39</td>';
	    echo '<td rowspan="3">7</td>';
	    echo '</tr>';
	    echo '<tr>';
	    echo '<td>42</td>';
	    echo '<td>12</td>';
	    echo '</tr>';
	    echo '<tr>';
	    echo '<td>65</td>';
	    echo '<td rowspan="2">11</td>';
	    echo '</tr>';
	    echo '<tr>';
	    echo '<td>86</td>';
	    echo '<td rowspan="3">6</td>';
	    echo '</tr>';
	    echo '<tr>';
	    echo '<td>102</td>';
	    echo '<td>10</td>';
	    echo '</tr>';
	    echo '<tr>';
	    echo '<td>174</td>';
	    echo '<td>9</td>';
	    echo '</tr>';
	    echo '</tbody>';
	    echo '</table>';

	    if ($rate < 8) {
		    echo "Faster Cast Rate: $rate%<br>";
		    echo "Cast Frames: 16<br>";
		    echo "Action Flags: 9<br>";
		    echo "Required Faster Cast Rate for the next breakpoint: " . ( 8 - $rate ) . "%";
	    } else if ($rate < 15) {
		    echo "Faster Cast Rate: $rate%<br>";
		    echo "Cast Frames: 15<br>";
		    echo "Action Flags: 9<br>";
		    echo "Required Faster Cast Rate for the next breakpoint: " . (15 - $rate) . "%";
	    } else if ($rate < 16) {
		    echo "Faster Cast Rate: $rate%<br>";
		    echo "Cast Frames: 15<br>";
		    echo "Action Flags: 8<br>";
		    echo "Required Faster Cast Rate for the next breakpoint: " . (16 - $rate) . "%";
	    } else if ($rate < 27) {
		    echo "Faster Cast Rate: $rate%<br>";
		    echo "Cast Frames: 14<br>";
		    echo "Action Flags: 8<br>";
		    echo "Required Faster Cast Rate for the next breakpoint: " . (27 - $rate) . "%";
	    } else if ($rate < 39) {
		    echo "Faster Cast Rate: $rate%<br>";
		    echo "Cast Frames: 13<br>";
		    echo "Action Flags: 8<br>";
		    echo "Required Faster Cast Rate for the next breakpoint: " . (39 - $rate) . "%";
	    } else if ($rate < 42) {
		    echo "Faster Cast Rate: $rate%<br>";
		    echo "Cast Frames: 13<br>";
		    echo "Action Flags: 7<br>";
		    echo "Required Faster Cast Rate for the next breakpoint: " . (42 - $rate) . "%";
	    } else if ($rate < 65) {
		    echo "Faster Cast Rate: $rate%<br>";
		    echo "Cast Frames: 12<br>";
		    echo "Action Flags: 7<br>";
		    echo "Required Faster Cast Rate for the next breakpoint: " . (65 - $rate) . "%";
	    } else if ($rate < 86) {
		    echo "Faster Cast Rate: $rate%<br>";
		    echo "Cast Frames: 11<br>";
		    echo "Action Flags: 7<br>";
		    echo "Required Faster Cast Rate for the next breakpoint: " . (86 - $rate) . "%";
        } else if ($rate < 102) {
		    echo "Faster Cast Rate: $rate%<br>";
		    echo "Cast Frames: 11<br>";
		    echo "Action Flags: 6<br>";
		    echo "Required Faster Cast Rate for the next breakpoint: " . (102 - $rate) . "%";
	    } else if ($rate < 174) {
		    echo "Faster Cast Rate: $rate%<br>";
		    echo "Cast Frames: 10<br>";
		    echo "Action Flags: 6<br>";
		    echo "Required Faster Cast Rate for the next breakpoint: " . (174 - $rate) . "%";
	    } else {
		    echo "Faster Cast Rate: $rate%<br>";
		    echo "Cast Frames: 9<br>";
		    echo "Action Flags: 6<br>";
		    echo "Further FCR useless.";
	    }
    }
    ?>
</main>
<script
	src="https://code.jquery.com/jquery-3.6.0.min.js"
	integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
	crossorigin="anonymous"></script>
<script src="js/casting.js"></script>
</body>
</html>