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
            <li><a href="blocking.php" class="active">Blocking</a></li>
            <li><a href="casting.php">Casting</a></li>
            <li><a href="hit-recovery.php">Hit Recovery</a></li>
        </ul>
    </nav>
</header>
<main>
    <h2>Blocking</h2>
    <form action="blocking.php" method="post">
        <label for="character">Character<span class="required">*</span></label>
        <select id="character" name="character">
            <option disabled selected>---SELECT A CHARATER---</option>
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
        <div id="divPal"></div>
        <select id="shield" name="shield">
            <option disabled selected>---SELECT A SHIELD---</option>
            <option vaiue="1-socket-normal-shield" class="1-socket">1 Socket Normal Shield</option>
            <option value="2-socket-normal shield" class="2-socket">2 Socket Normal Shield</option>
            <option value="3-socket-normal-shield" class="3-socket">3 Socket Normal Shield</option>
            <option value="4-socket-normal-shield" class="4-socket">4 Socket Normal Shield</option>
            <option value="necromancer-shields" class="2-socket">Necromancer Shields (Necromacer Only)</option>
            <option value="paladin-shields" class="4-socket">Paladin Shields (Paladin Only)</option>
            <option value="1-socket-magic-shield-of-blocking" class="1-socket">1 Socket Magic Shield of Blocking</option>
            <option value="1-socket-magic-shield-of-deflecting" class="1-socket">1 Socket Magic Shield of Deflecting</option>
            <option value="1-socket-magic-shield" class="1-socket">1 Socket Magic Shield</option>
            <option value="2-socket-magic-shield-of-blocking" class="2-socket">2 Socket Magic Shield of Blocking</option>
            <option value="2-socket-magic-shield-of-deflecting" class="2-socket">2 Socket Magic Shield of Deflecting</option>
            <option value="2-socket-magic-shield" class="2-socket">2 Socket Magic Shield</option>
            <option value="3-socket-magic-shield-of-blocking" class="3-socket">3 Socket Magic Shield of Blocking</option>
            <option value="3-socket-magic-shield-of-deflecting" class="3-socket">3 Socket Magic Shield of Deflecting</option>
            <option value="3-socket-magic-shield" class="3-socket">3 Socket Magic Shield</option>
            <option value="4-socket-magic-shield-of-blocking" class="4-socket">4 Socket Magic Shield of Blocking</option>
            <option value="4-socket-magic-shield-of-deflecting" class="4-socket">4 Socket Magic Shield of Deflecting</option>
            <option value="4-socket-magic-shield" class="4-socket">4 Socket Magic Shield</option>
            <option value="1-socket-rare-shield-of-blocking" class="1-socket">1 Socket Rare Shield of Blocking</option>
            <option value="1-socket-rare-shield-of-deflecting" class="1-socket">1 Socket Rare Shield of Deflecting</option>
            <option value="1-socket-rare-shield" class="1-socket">1 Socket Rare Shield</option>
            <option value="2-socket-rare-shield-of-blocking" class="2-socket">2 Socket Rare Shield of Blocking</option>
            <option value="2-socket-rare-shield-of-deflecting" class="2-socket">2 Socket Rare Shield of Deflecting</option>
            <option value="2-socket-rare-shield" class="2-socket">2 Socket Rare Shield</option>
            <option value="crafted-shield-of-blocking" class="1-socket">Crafted Shield of Blocking</option>
            <option value="crafted-shield-of-deflecting" class="1-socket">Crafted Shield of Deflecting</option>
            <option value="socketed-crafted-shield" class="1-socket">Socketed Crafted Shield</option>
            <option value="griswolds-honor-shield" class="1-socket">Griswold's Honor Vortex Shield (Paladin Only)</option>
            <option value="taebaeks-glory-shield" class="1-socket">Taebaek's Glory Ward</option>
            <option value="whitstans-guard-shield" class="1-socket">Whitstan's Guard Round Shield</option>
            <option value="socketed-set-shield" class="1-socket">Socketed Set Shield</option>
            <option value="homunculus-shield" class="1-socket">Homunculus Hierophant Trophy (Necromancer Only)</option>
            <option value="alma-negra-shield" class="1-socket">Alma Negra Sacred Rondache (Paladin Only)</option>
            <option value="hoz-shield" class="1-socket">Herald of Zakarum Gilded Shield (Paladin Only)</option>
            <option value="pelta-lunata-shield" class="1-socket">Pelta Lunata Buckler</option>
            <option value="steelclash-shield" class="1-socket">Steelclash Kite Shield</option>
            <option value="visceratuant-shield" class="1-socket">Visceratuant Defender</option>
            <option value="mosers-shield" class="2-socket">Moser's Blessed Circle Round Shield</option>
            <option value="stormchaser-shield" class="1-socket">Stormchaser Scutum</option>
            <option value="radaments-sphere-shield" class="1-socket">Radament's Sphere Ancient Shield</option>
            <option value="blackoak-shield" class="1-socket">Blackoak Shield Luna</option>
            <option value="stormshield-shield" class="1-socket">Stormshield Monarch</option>
            <option value="head-hunters-glory-shield" class="3-socket">Head Hunter's Glory Troll Nest</option>
            <option value="spirit-ward-shield" class="1-socket">Spirit Ward Ward</option>
            <option value="socketed-unique-shield" class="1-socket">Socketed Unique Shield</option>
            <option value="rhyme-shield" class="runeword">Rhyme Shield</option>
            <option value="exile-shield" class="runeword">Exile Shield (Paladin Only)</option>
            <option value="sanctuary-shield" class="runeword">Sanctuary Shield</option>
            <option value="splendor-shield" class="runeword">Splendor Shield</option>
        </select><br>
        <div id="htmlShael"></div>
        <label for="other-items">Other Items</label>
        <select id="other-items" name="other-items">
            <option selected disabled>---SELECT OTHER ITEMS---</option>
            <option value="guardian-angel-armor">Guardian Angel Templar Coat</option>
        </select><br>
        <button type="submit" id="btn">Calculate</button>
    </form>
    <div id="calc">
        <?php
        $character = filter_input(INPUT_POST, 'character', FILTER_SANITIZE_STRING);
        $holy_shield = filter_input(INPUT_POST, 'holy-shield', FILTER_SANITIZE_STRING);
        $shield = filter_input(INPUT_POST, 'shield', FILTER_SANITIZE_STRING);
        $shael1 = filter_input(INPUT_POST, 'shael1', FILTER_SANITIZE_STRING);
        $shael2 = filter_input(INPUT_POST, 'shael2', FILTER_SANITIZE_STRING);
        $shael3 = filter_input(INPUT_POST, 'shael3', FILTER_SANITIZE_STRING);
        $shael4 = filter_input(INPUT_POST, 'shael4', FILTER_SANITIZE_STRING);
        $items = filter_input(INPUT_POST, 'other-items', FILTER_SANITIZE_STRING);
        $weap = filter_input(INPUT_POST, 'weap', FILTER_SANITIZE_STRING);
        $form = filter_input(INPUT_POST, 'form', FILTER_SANITIZE_STRING);
        $rate = 0;
        if ($shael1) {
	        $rate += 20;
        }
        if ($shael2) {
            $rate += 20;
        }
        if ($shael3) {
	        $rate += 20;
        }
        if ($shael4) {
	        $rate += 20;
        }
        if ($items === 'guardian-angel-armor') {
	        $rate += 30;
        }
        if ($character !== 'nec' && $character !== 'pal') {
	        if ($shield === 'stormchaser-shield') {
		        $rate += 10;
	        } else if ($shield === '1-socket-magic-shield-of-blocking' || $shield === '1-socket-rare-shield-of-blocking' ||
                       $shield === '2-socket-magic-shield-of-blocking' || $shield === '2-socket-rare-shield-of-blocking' ||
                       $shield === '3-socket-magic-shield-of-blocking' || $shield === '4-socket-magic-shield-of-blocking') {
		        $rate += 15;
	        } else if ($shield === 'steelclash-shield' || $shield === 'radaments-sphere-shield' ||
	                   $shield === 'sanctuary-shield' || $shield === 'splendor-shield') {
		        $rate += 20;
	        } else if ($shield === 'spirit-ward-shield') {
		        $rate += 25;
	        } else if ($shield === '1-socket-magic-shield-of-deflecting' || $shield === '1-socket-rare-shield-of-deflecting' ||
                       $shield === '2-socket-magic-shield-of-deflecting' || $shield === '2-socket-rare-shield-of-deflecting' ||
                       $shield === '3-socket-magic-shield-of-deflecting' || $shield === '4-socket-magic-shield-of-deflecting' ||
                       $shield === 'taebaeks-glory-shield' || $shield === 'visceratuant-shield' || $shield === 'mosers-shield') {
		        $rate += 30;
	        } else if ($shield === 'stormshield-shield') {
		        $rate += 35;
	        } else if ($shield === 'whitstans-guard-shield' || $shield === 'pelta-lunata-shield' ||
	                   $shield === 'rhyme-shield') {
		        $rate += 40;
	        } else if ($shield === 'blackoak-shield') {
		        $rate += 50;
	        }
            if ($character === 'ama') {
                if ($weap === 'weap1') {
	                echo '<h3>Amazon</h3>';
	                echo '<table>';
                    echo '<caption>1-H swinging weapon</caption>';
	                echo '<thead>';
	                echo '<tr>';
	                echo '<th>Faster Block Rate</th>';
	                echo '<th>Block Frames</th>';
	                echo '</tr>';
	                echo '</thead>';
	                echo '<tbody>';
	                echo '<tr>';
	                echo '<td>0</td>';
	                echo '<td>17</td>';
	                echo '</tr>';
	                echo '<tr>';
	                echo '<td>4</td>';
	                echo '<td>16</td>';
	                echo '</tr>';
	                echo '<tr>';
	                echo '<td>6</td>';
	                echo '<td>15</td>';
	                echo '</tr>';
	                echo '<tr>';
	                echo '<td>11</td>';
	                echo '<td>14</td>';
	                echo '</tr>';
	                echo '<tr>';
	                echo '<td>15</td>';
	                echo '<td>13</td>';
	                echo '</tr>';
	                echo '<tr>';
	                echo '<td>23</td>';
	                echo '<td>12</td>';
	                echo '</tr>';
	                echo '<tr>';
	                echo '<td>29</td>';
	                echo '<td>11</td>';
	                echo '</tr>';
	                echo '<tr>';
	                echo '<td>40</td>';
	                echo '<td>10</td>';
	                echo '</tr>';
	                echo '<tr>';
	                echo '<td>56</td>';
	                echo '<td>9</td>';
	                echo '</tr>';
	                echo '<tr>';
	                echo '<td>80</td>';
	                echo '<td>8</td>';
	                echo '</tr>';
	                echo '<tr>';
	                echo '<td>120</td>';
	                echo '<td>7</td>';
	                echo '</tr>';
	                echo '</tbody>';
	                echo '</table>';

	                if ($rate < 4) {
		                echo "Faster Block Rate: $rate%<br>";
		                echo "Breakpoint: 17<br>";
		                echo "Required Faster Block Rate for the next breakpoint: " . (4 - $rate) . "%";
	                } else if ($rate < 6) {
		                echo "Faster Block Rate: $rate%<br>";
		                echo "Breakpoint: 16<br>";
		                echo "Required Faster Block Rate for the next breakpoint: " . (6 - $rate) . "%";
	                } else if ($rate < 11) {
		                echo "Faster Block Rate: $rate%<br>";
		                echo "Breakpoint: 15<br>";
		                echo "Required Faster Block Rate for the next breakpoint: " . (11 - $rate) . "%";
	                } else if ($rate < 15) {
		                echo "Faster Block Rate: $rate%<br>";
		                echo "Breakpoint: 14<br>";
		                echo "Required Faster Block Rate for the next breakpoint: " . (15 - $rate) . "%";
	                } else if ($rate < 23) {
		                echo "Faster Block Rate: $rate%<br>";
		                echo "Breakpoint: 13<br>";
		                echo "Required Faster Block Rate for the next breakpoint: " . (23 - $rate) . "%";
	                } else if ($rate < 29) {
		                echo "Faster Block Rate: $rate%<br>";
		                echo "Breakpoint: 12<br>";
		                echo "Required Faster Block Rate for the next breakpoint: " . (29 - $rate) . "%";
	                } else if ($rate < 40) {
		                echo "Faster Block Rate: $rate%<br>";
		                echo "Breakpoint: 11<br>";
		                echo "Required Faster Block Rate for the next breakpoint: " . (40 - $rate) . "%";
	                } else if ($rate < 56) {
		                echo "Faster Block Rate: $rate%<br>";
		                echo "Breakpoint: 10<br>";
		                echo "Required Faster Block Rate for the next breakpoint: " . (56 - $rate) . "%";
	                } else if ($rate < 80) {
		                echo "Faster Block Rate: $rate%<br>";
		                echo "Breakpoint: 9<br>";
		                echo "Required Faster Block Rate for the next breakpoint: " . (80 - $rate) . "%";
	                } else if ($rate < 120) {
		                echo "Faster Block Rate: $rate%<br>";
		                echo "Breakpoint: 8<br>";
		                echo "Required Faster Block Rate for the next breakpoint: " . (120 - $rate) . "%";
	                } else {
		                echo "Faster Block Rate: $rate%<br>";
		                echo "Breakpoint: 7<br>";
		                echo "Further FBR unnecessary.";
	                }
                } else {
	                echo '<h3>Amazon</h3>';
	                echo '<table>';
                    echo '<caption>Any other weapon</caption>';
	                echo '<thead>';
	                echo '<tr>';
	                echo '<th>Faster Block Rate</th>';
	                echo '<th>Block Frames</th>';
	                echo '</tr>';
	                echo '</thead>';
	                echo '<tbody>';
	                echo '<tr>';
	                echo '<td>0</td>';
	                echo '<td>5</td>';
	                echo '</tr>';
	                echo '<tr>';
	                echo '<td>13</td>';
	                echo '<td>4</td>';
	                echo '</tr>';
	                echo '<tr>';
	                echo '<td>32</td>';
	                echo '<td>3</td>';
	                echo '</tr>';
	                echo '<tr>';
	                echo '<td>86</td>';
	                echo '<td>2</td>';
	                echo '</tr>';
	                echo '</tbody>';
	                echo '</table>';

	                if ($rate < 13) {
		                echo "Faster Block Rate: $rate%<br>";
		                echo "Breakpoint: 5<br>";
		                echo "Required Faster Block Rate for the next breakpoint: " . (13 - $rate) . "%";
	                } else if ($rate < 32) {
		                echo "Faster Block Rate: $rate%<br>";
		                echo "Breakpoint: 4<br>";
		                echo "Required Faster Block Rate for the next breakpoint: " . (32 - $rate) . "%";
	                } else if ($rate < 86) {
		                echo "Faster Block Rate: $rate%<br>";
		                echo "Breakpoint: 3<br>";
		                echo "Required Faster Block Rate for the next breakpoint: " . (86 - $rate) . "%";
	                } else {
		                echo "Faster Block Rate: $rate%<br>";
		                echo "Breakpoint: 2<br>";
		                echo "Further FBR unnecessary.";
	                }
                }
            } else if ($character === 'ass') {
		        echo '<h3>Assassin</h3>';
		        echo '<table>';
		        echo '<thead>';
		        echo '<tr>';
		        echo '<th>Faster Block Rate</th>';
		        echo '<th>Block Frames</th>';
		        echo '</tr>';
		        echo '</thead>';
		        echo '<tbody>';
		        echo '<tr>';
		        echo '<td>0</td>';
		        echo '<td>5</td>';
		        echo '</tr>';
		        echo '<tr>';
		        echo '<td>13</td>';
		        echo '<td>4</td>';
		        echo '</tr>';
		        echo '<tr>';
		        echo '<td>32</td>';
		        echo '<td>3</td>';
		        echo '</tr>';
		        echo '<tr>';
		        echo '<td>86</td>';
		        echo '<td>2</td>';
		        echo '</tr>';
		        echo '</tbody>';
		        echo '</table>';

		        if ($rate < 13) {
			        echo "Faster Block Rate: $rate%<br>";
			        echo "Breakpoint: 5<br>";
			        echo "Required Faster Block Rate for the next breakpoint: " . (13 - $rate) . "%";
		        } else if ($rate < 32) {
			        echo "Faster Block Rate: $rate%<br>";
			        echo "Breakpoint: 4<br>";
			        echo "Required Faster Block Rate for the next breakpoint: " . (32 - $rate) . "%";
		        } else if ($rate < 86) {
			        echo "Faster Block Rate: $rate%<br>";
			        echo "Breakpoint: 3<br>";
			        echo "Required Faster Block Rate for the next breakpoint: " . (86 - $rate) . "%";
		        } else {
			        echo "Faster Block Rate: $rate%<br>";
			        echo "Breakpoint: 2<br>";
			        echo "Further FBR unnecessary.";
		        }
	        } else if ($character === 'bar') {
		        echo '<h3>Barbarian</h3>';
		        echo '<table>';
		        echo '<thead>';
		        echo '<tr>';
		        echo '<th>Faster Block Rate</th>';
		        echo '<th>Block Frames</th>';
		        echo '</tr>';
		        echo '</thead>';
		        echo '<tbody>';
		        echo '<tr>';
		        echo '<td>0</td>';
		        echo '<td>7</td>';
		        echo '</tr>';
		        echo '<tr>';
		        echo '<td>9</td>';
		        echo '<td>6</td>';
		        echo '</tr>';
		        echo '<tr>';
		        echo '<td>20</td>';
		        echo '<td>5</td>';
		        echo '</tr>';
		        echo '<tr>';
		        echo '<td>42</td>';
		        echo '<td>4</td>';
		        echo '</tr>';
		        echo '<tr>';
		        echo '<td>86</td>';
		        echo '<td>3</td>';
		        echo '</tr>';
		        echo '</tbody>';
		        echo '</table>';

		        if ($rate < 9) {
			        echo "Faster Block Rate: $rate%<br>";
			        echo "Breakpoint: 7<br>";
			        echo "Required Faster Block Rate for the next breakpoint: " . (9 - $rate) . "%";
		        } else if ($rate < 20) {
			        echo "Faster Block Rate: $rate%<br>";
			        echo "Breakpoint: 6<br>";
			        echo "Required Faster Block Rate for the next breakpoint: " . (20 - $rate) . "%";
		        } else if ($rate < 42) {
			        echo "Faster Block Rate: $rate%<br>";
			        echo "Breakpoint: 5<br>";
			        echo "Required Faster Block Rate for the next breakpoint: " . (42 - $rate) . "%";
                } else if ($rate < 86) {
                    echo "Faster Block Rate: $rate%<br>";
                    echo "Breakpoint: 4<br>";
                    echo "Required Faster Block rate for the next breakpoint: " . (86 - $rate) . "%";
		        } else {
			        echo "Faster Block Rate: $rate%<br>";
			        echo "Breakpoint: 3<br>";
			        echo "Further FBR unnecessary.";
		        }
            } else if ($character === 'dru') {
                if ($form === 'human') {
	                echo '<h3>Druid</h3>';
	                echo '<table>';
                    echo '<caption>Human form</caption>';
	                echo '<thead>';
	                echo '<tr>';
	                echo '<th>Faster Block Rate</th>';
	                echo '<th>Block Frames</th>';
	                echo '</tr>';
	                echo '</thead>';
	                echo '<tbody>';
	                echo '<tr>';
	                echo '<td>0</td>';
	                echo '<td>11</td>';
	                echo '</tr>';
	                echo '<tr>';
	                echo '<td>6</td>';
	                echo '<td>10</td>';
	                echo '</tr>';
	                echo '<tr>';
	                echo '<td>13</td>';
	                echo '<td>9</td>';
	                echo '</tr>';
	                echo '<tr>';
	                echo '<td>20</td>';
	                echo '<td>8</td>';
	                echo '</tr>';
	                echo '<tr>';
	                echo '<td>32</td>';
	                echo '<td>7</td>';
	                echo '</tr>';
	                echo '<tr>';
	                echo '<td>52</td>';
	                echo '<td>6</td>';
	                echo '</tr>';
	                echo '<tr>';
	                echo '<td>86</td>';
	                echo '<td>5</td>';
	                echo '</tr>';
	                echo '</tbody>';
	                echo '</table>';

	                if ($rate < 6) {
		                echo "Faster Block Rate: $rate%<br>";
		                echo "Breakpoint: 11<br>";
		                echo "Required Faster Block Rate for the next breakpoint: " . (6 - $rate) . "%";
	                } else if ($rate < 13) {
		                echo "Faster Block Rate: $rate%<br>";
		                echo "Breakpoint: 10<br>";
		                echo "Required Faster Block Rate for the next breakpoint: " . (13 - $rate) . "%";
	                } else if ($rate < 20) {
		                echo "Faster Block Rate: $rate%<br>";
		                echo "Breakpoint: 9<br>";
		                echo "Required Faster Block Rate for the next breakpoint: " . (20 - $rate) . "%";
	                } else if ($rate < 32) {
		                echo "Faster Block Rate: $rate%<br>";
		                echo "Breakpoint: 8<br>";
		                echo "Required Faster Block Rate for the next breakpoint: " . (32 - $rate) . "%";
	                } else if ($rate < 52) {
		                echo "Faster Block Rate: $rate%<br>";
		                echo "Breakpoint: 7<br>";
		                echo "Required Faster Block Rate for the next breakpoint: " . (52 - $rate) . "%";
	                } else if ($rate < 86) {
		                echo "Faster Block Rate: $rate%<br>";
		                echo "Breakpoint: 6<br>";
		                echo "Required Faster Block rate for the next breakpoint: " . (86 - $rate) . "%";
	                } else {
		                echo "Faster Block Rate: $rate%<br>";
		                echo "Breakpoint: 5<br>";
		                echo "Further FBR unnecessary.";
	                }
                } else if ($form === 'werewolf') {
	                echo '<h3>Druid</h3>';
	                echo '<table>';
                    echo '<caption>Werewolf form</caption>';
	                echo '<thead>';
	                echo '<tr>';
	                echo '<th>Faster Block Rate</th>';
	                echo '<th>Block Frames</th>';
	                echo '</tr>';
	                echo '</thead>';
	                echo '<tbody>';
	                echo '<tr>';
	                echo '<td>0</td>';
	                echo '<td>9</td>';
	                echo '</tr>';
	                echo '<tr>';
	                echo '<td>7</td>';
	                echo '<td>8</td>';
	                echo '</tr>';
	                echo '<tr>';
	                echo '<td>15</td>';
	                echo '<td>7</td>';
	                echo '</tr>';
	                echo '<tr>';
	                echo '<td>27</td>';
	                echo '<td>6</td>';
	                echo '</tr>';
	                echo '<tr>';
	                echo '<td>48</td>';
	                echo '<td>5</td>';
	                echo '</tr>';
	                echo '<tr>';
	                echo '<td>86</td>';
	                echo '<td>4</td>';
	                echo '</tr>';
	                echo '</tbody>';
	                echo '</table>';

	                if ($rate < 7) {
		                echo "Faster Block Rate: $rate%<br>";
		                echo "Breakpoint: 9<br>";
		                echo "Required Faster Block Rate for the next breakpoint: " . (7 - $rate) . "%";
	                } else if ($rate < 15) {
		                echo "Faster Block Rate: $rate%<br>";
		                echo "Breakpoint: 8<br>";
		                echo "Required Faster Block Rate for the next breakpoint: " . (15 - $rate) . "%";
	                } else if ($rate < 27) {
		                echo "Faster Block Rate: $rate%<br>";
		                echo "Breakpoint: 7<br>";
		                echo "Required Faster Block Rate for the next breakpoint: " . (27 - $rate) . "%";
	                } else if ($rate < 48) {
		                echo "Faster Block Rate: $rate%<br>";
		                echo "Breakpoint: 6<br>";
		                echo "Required Faster Block Rate for the next breakpoint: " . (48 - $rate) . "%";
	                } else if ($rate < 86) {
		                echo "Faster Block Rate: $rate%<br>";
		                echo "Breakpoint: 5<br>";
		                echo "Required Faster Block rate for the next breakpoint: " . (86 - $rate) . "%";
	                } else {
		                echo "Faster Block Rate: $rate%<br>";
		                echo "Breakpoint: 4<br>";
		                echo "Further FBR unnecessary.";
	                }
                } else {
	                echo '<h3>Druid</h3>';
	                echo '<table>';
                    echo '<caption>Werebear form</caption>';
	                echo '<thead>';
	                echo '<tr>';
	                echo '<th>Faster Block Rate</th>';
	                echo '<th>Block Frames</th>';
	                echo '</tr>';
	                echo '</thead>';
	                echo '<tbody>';
	                echo '<tr>';
	                echo '<td>0</td>';
	                echo '<td>12</td>';
	                echo '</tr>';
	                echo '<tr>';
	                echo '<td>5</td>';
	                echo '<td>11</td>';
	                echo '</tr>';
	                echo '<tr>';
	                echo '<td>10</td>';
	                echo '<td>10</td>';
	                echo '</tr>';
	                echo '<tr>';
	                echo '<td>16</td>';
	                echo '<td>9</td>';
	                echo '</tr>';
	                echo '<tr>';
	                echo '<td>27</td>';
	                echo '<td>8</td>';
	                echo '</tr>';
	                echo '<tr>';
	                echo '<td>40</td>';
	                echo '<td>7</td>';
	                echo '</tr>';
	                echo '<tr>';
	                echo '<td>65</td>';
	                echo '<td>6</td>';
	                echo '</tr>';
	                echo '<tr>';
	                echo '<td>109</td>';
	                echo '<td>5</td>';
	                echo '</tr>';
	                echo '</tbody>';
	                echo '</table>';

	                if ($rate < 5) {
		                echo "Faster Block Rate: $rate%<br>";
		                echo "Breakpoint: 12<br>";
		                echo "Required Faster Block Rate for the next breakpoint: " . (5 - $rate) . "%";
	                } else if ($rate < 10) {
		                echo "Faster Block Rate: $rate%<br>";
		                echo "Breakpoint: 11<br>";
		                echo "Required Faster Block Rate for the next breakpoint: " . (10 - $rate) . "%";
	                } else if ($rate < 16) {
		                echo "Faster Block Rate: $rate%<br>";
		                echo "Breakpoint: 10<br>";
		                echo "Required Faster Block Rate for the next breakpoint: " . (16 - $rate) . "%";
	                } else if ($rate < 27) {
		                echo "Faster Block Rate: $rate%<br>";
		                echo "Breakpoint: 9<br>";
		                echo "Required Faster Block Rate for the next breakpoint: " . (27 - $rate) . "%";
	                } else if ($rate < 40) {
		                echo "Faster Block Rate: $rate%<br>";
		                echo "Breakpoint: 8<br>";
		                echo "Required Faster Block Rate for the next breakpoint: " . (40 - $rate) . "%";
	                } else if ($rate < 65) {
		                echo "Faster Block Rate: $rate%<br>";
		                echo "Breakpoint: 7<br>";
		                echo "Required Faster Block Rate for the next breakpoint: " . (65 - $rate) . "%";
	                } else if ($rate < 109) {
		                echo "Faster Block Rate: $rate%<br>";
		                echo "Breakpoint: 6<br>";
		                echo "Required Faster Block rate for the next breakpoint: " . (109 - $rate) . "%";
	                } else {
		                echo "Faster Block Rate: $rate%<br>";
		                echo "Breakpoint: 5<br>";
		                echo "Further FBR unnecessary.";
	                }
                }
            } else if ($character === 'sor') {
		        echo '<h3>Sorceress</h3>';
		        echo '<table>';
		        echo '<thead>';
		        echo '<tr>';
		        echo '<th>Faster Block Rate</th>';
		        echo '<th>Block Frames</th>';
		        echo '</tr>';
		        echo '</thead>';
		        echo '<tbody>';
		        echo '<tr>';
		        echo '<td>0</td>';
		        echo '<td>9</td>';
		        echo '</tr>';
		        echo '<tr>';
		        echo '<td>7</td>';
		        echo '<td>8</td>';
		        echo '</tr>';
		        echo '<tr>';
		        echo '<td>15</td>';
		        echo '<td>7</td>';
		        echo '</tr>';
		        echo '<tr>';
		        echo '<td>27</td>';
		        echo '<td>6</td>';
		        echo '</tr>';
		        echo '<tr>';
		        echo '<td>48</td>';
		        echo '<td>5</td>';
		        echo '</tr>';
		        echo '<tr>';
		        echo '<td>86</td>';
		        echo '<td>4</td>';
		        echo '</tr>';
		        echo '</tbody>';
		        echo '</table>';

		        if ($rate < 7) {
			        echo "Faster Block Rate: $rate%<br>";
			        echo "Breakpoint: 9<br>";
			        echo "Required Faster Block Rate for the next breakpoint: " . (7 - $rate) . "%";
		        } else if ($rate < 15) {
			        echo "Faster Block Rate: $rate%<br>";
			        echo "Breakpoint: 8<br>";
			        echo "Required Faster Block Rate for the next breakpoint: " . (15 - $rate) . "%";
		        } else if ($rate < 27) {
			        echo "Faster Block Rate: $rate%<br>";
			        echo "Breakpoint: 7<br>";
			        echo "Required Faster Block Rate for the next breakpoint: " . (27 - $rate) . "%";
                } else if ($rate < 48) {
                    echo "Faster Block Rate: $rate%<br>";
                    echo "Breakpoint: 6<br>";
                    echo "Required Faster Block Rate for the next breakpoint: " . (48 - $rate) . "%";
                } else if ($rate < 86) {
                    echo "Faster Block Rate: $rate%<br>";
                    echo "Breakpoint: 5<br>";
                    echo "Required Faster Block rate for the next breakpoint: " . (86 - $rate) . "%";
		        } else {
			        echo "Faster Block Rate: $rate%<br>";
			        echo "Breakpoint: 4<br>";
			        echo "Further FBR unnecessary.";
		        }
            }
        } else if ($character === 'nec') {
	        echo '<h3>Necromancer</h3>';
	        echo '<table>';
	        echo '<thead>';
	        echo '<tr>';
	        echo '<th>Faster Block Rate</th>';
	        echo '<th>Block Frames</th>';
	        echo '</tr>';
	        echo '</thead>';
	        echo '<tbody>';
	        echo '<tr>';
	        echo '<td>0</td>';
	        echo '<td>11</td>';
	        echo '</tr>';
	        echo '<tr>';
	        echo '<td>6</td>';
	        echo '<td>10</td>';
	        echo '</tr>';
	        echo '<tr>';
	        echo '<td>13</td>';
	        echo '<td>9</td>';
	        echo '</tr>';
	        echo '<tr>';
	        echo '<td>20</td>';
	        echo '<td>8</td>';
	        echo '</tr>';
	        echo '<tr>';
	        echo '<td>32</td>';
	        echo '<td>7</td>';
	        echo '</tr>';
	        echo '<tr>';
	        echo '<td>52</td>';
	        echo '<td>6</td>';
	        echo '</tr>';
	        echo '<tr>';
	        echo '<td>86</td>';
	        echo '<td>5</td>';
	        echo '</tr>';
	        echo '</tbody>';
	        echo '</table>';

	        if ($shield === 'stormchaser-shield') {
		        $rate += 10;
	        } else if ($shield === 'shield-of-blocking') {
		        $rate += 15;
	        } else if ($shield === 'steelclash-shield' || $shield === 'radaments-sphere-shield' ||
	                   $shield === 'sanctuary-shield' || $shield === 'splendor-shield') {
		        $rate += 20;
	        } else if ($shield === 'spirit-ward-shield') {
		        $rate += 25;
	        } else if ($shield === 'shield-of-deflecting' || $shield === 'taebaeks-glory-shield' ||
	                   $shield === 'visceratuant-shield' || $shield === 'mosers-shield' ||
                       $shield === 'homunculus-shield') {
		        $rate += 30;
	        } else if ($shield === 'stormshield-shield') {
		        $rate += 35;
	        } else if ($shield === 'whitstans-guard-shield' || $shield === 'pelta-lunata-shield' ||
	                   $shield === 'rhyme-shield') {
		        $rate += 40;
	        } else if ($shield === 'blackoak-shield') {
		        $rate += 50;
	        }

	        if ($rate < 6) {
		        echo "Faster Block Rate: $rate%<br>";
		        echo "Breakpoint: 11<br>";
		        echo "Required Faster Block Rate for the next breakpoint: " . (6 - $rate) . "%";
	        } else if ($rate < 13) {
		        echo "Faster Block Rate: $rate%<br>";
		        echo "Breakpoint: 10<br>";
		        echo "Required Faster Block Rate for the next breakpoint: " . (13 - $rate) . "%";
	        } else if ($rate < 20) {
		        echo "Faster Block Rate: $rate%<br>";
		        echo "Breakpoint: 9<br>";
		        echo "Required Faster Block Rate for the next breakpoint: " . (20 - $rate) . "%";
	        } else if ($rate < 32) {
		        echo "Faster Block Rate: $rate%<br>";
		        echo "Breakpoint: 8<br>";
		        echo "Required Faster Block Rate for the next breakpoint: " . (32 - $rate) . "%";
                } else if ($rate < 52) {
		        echo "Faster Block Rate: $rate%<br>";
		        echo "Breakpoint: 7<br>";
		        echo "Required Faster Block Rate for the next breakpoint: " . (52 - $rate) . "%";
            } else if ($rate < 86) {
                echo "Faster Block Rate: $rate%<br>";
                echo "Breakpoint: 6<br>";
                echo "Required Faster Block Rate for the next breakpoint: " . (86 - $rate) . "%";
	        } else {
		        echo "Faster Block Rate: $rate%<br>";
		        echo "Breakpoint: 5<br>";
		        echo "Further FBR unnecessary.";
	        }
        } else if ($character === 'pal') {
	        echo '<h3>Paladin</h3>';

	        if ($shield === 'stormchaser-shield') {
		        $rate += 10;
	        } else if ($shield === 'shield-of-blocking') {
		        $rate += 15;
	        } else if ($shield === 'steelclash-shield' || $shield === 'radaments-sphere-shield' ||
	                   $shield === 'sanctuary-shield' || $shield === 'splendor-shield') {
		        $rate += 20;
	        } else if ($shield === 'spirit-ward-shield') {
		        $rate += 25;
	        } else if ($shield === 'shield-of-deflecting' || $shield === 'taebaeks-glory-shield' ||
	                   $shield === 'visceratuant-shield' || $shield === 'mosers-shield' ||
                       $shield === 'alma-negra-shield' || $shield === 'hoz-shield' ||
                       $shield === 'exile-shield' ) {
		        $rate += 30;
	        } else if ($shield === 'stormshield-shield') {
		        $rate += 35;
	        } else if ($shield === 'whitstans-guard-shield' || $shield === 'pelta-lunata-shield' ||
	                   $shield === 'rhyme-shield') {
		        $rate += 40;
	        } else if ($shield === 'blackoak-shield') {
		        $rate += 50;
	        } else if ($shield === 'griswolds-honor-shield') {
                $rate += 65;
            }

            if (!$holy_shield) {
	            echo '<table>';
	            echo '<caption>Without Holy shield</caption>';
	            echo '<thead>';
	            echo '<tr>';
	            echo '<th>Faster Block Rate</th>';
	            echo '<th>Block Frames</th>';
	            echo '</tr>';
	            echo '</thead>';
	            echo '<tbody>';
	            echo '<tr>';
	            echo '<td>0</td>';
	            echo '<td>5</td>';
	            echo '</tr>';
	            echo '<tr>';
	            echo '<td>13</td>';
	            echo '<td>4</td>';
	            echo '</tr>';
	            echo '<tr>';
	            echo '<td>32</td>';
	            echo '<td>3</td>';
	            echo '</tr>';
	            echo '<tr>';
	            echo '<td>86</td>';
	            echo '<td>2</td>';
	            echo '</tr>';
	            echo '</tbody>';
	            echo '</table>';

	            if ( $rate < 13 ) {
		            echo "Faster Block Rate: $rate%<br>";
		            echo "Breakpoint: 5<br>";
		            echo "Required Faster Block Rate for the next breakpoint: " . ( 13 - $rate ) . "%";
	            } elseif ( $rate < 32 ) {
		            echo "Faster Block Rate: $rate%<br>";
		            echo "Breakpoint: 4<br>";
		            echo "Required Faster Block Rate for the next breakpoint: " . ( 32 - $rate ) . "%";
	            } elseif ( $rate < 86 ) {
		            echo "Faster Block Rate: $rate%<br>";
		            echo "Breakpoint: 3<br>";
		            echo "Required Faster Block Rate for the next breakpoint: " . ( 86 - $rate ) . "%";
                } else {
		            echo "Faster Block Rate: $rate%<br>";
		            echo "Breakpoint: 2<br>";
		            echo "Further FBR unnecessary.";
	            }
            } else {
	            echo '<table>';
	            echo '<caption>With Holy shield</caption>';
	            echo '<thead>';
	            echo '<tr>';
	            echo '<th>Faster Block Rate</th>';
	            echo '<th>Block Frames</th>';
	            echo '</tr>';
	            echo '</thead>';
	            echo '<tbody>';
	            echo '<tr>';
	            echo '<td>0</td>';
	            echo '<td>2</td>';
	            echo '</tr>';
	            echo '<td>86</td>';
	            echo '<td>1</td>';
	            echo '</tr>';
	            echo '</tbody>';
	            echo '</table>';

	            if ( $rate < 86 ) {
		            echo "Faster Block Rate: $rate%<br>";
		            echo "Breakpoint: 2<br>";
		            echo "Required Faster Block Rate for the next breakpoint: " . ( 86 - $rate ) . "%";
                } else {
		            echo "Faster Block Rate: $rate%<br>";
		            echo "Breakpoint: 1<br>";
		            echo "Further FBR unnecessary.";
	            }
            }
        }

        ?>
    </div>
</main>
<script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
<script src="js/blocking.js"></script>
</body>
</html>