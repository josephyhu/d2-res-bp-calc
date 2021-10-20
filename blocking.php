<?php
$character = $_POST['character'];
?>
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
        <input type="checkbox" id="holy-shield" name="holy-shield">
        <label for="holy-shield">Holy Shield (Paladin Only)</label><br>
        <label for="shield">Shield<span class="required">*</span></label>
        <select id="shield" name="shield">
            <option disabled selected>---SELECT A SHIELD---</option>
            <option value="shield-of-blocking">Magic/Rare/Crafted Shield of Blocking</option>
            <option value="shield-of-deflecting">Magic/Rare/Crafted Shield of Deflecting</option>
            <option value="griswolds-honor-shield">Griswold's Honor Vortex Shield (Paladin Only)</option>
            <option value="taebaeks-glory-shield">Taebaek's Glory Ward</option>
            <option value="whitstans-guard-shield">Whitstan's Guard Round Shield</option>
            <option value="homunculus-shield">Homunculus Hierophant Trophy (Necromancer Only)</option>
            <option value="alma-negra-shield">Alma Negra Sacred Rondache (Paladin Only)</option>
            <option value="hoz-shield">Herald of Zakarum Gilded Shield (Paladin Only)</option>
            <option value="pelta-lunata-shield">Pelta Lunata Buckler</option>
            <option value="steelclash-shield">Steelclash Kite Shield</option>
            <option value="visceratuant-shield">Visceratuant Defender</option>
            <option value="mosers-shield">Moser's Blessed Circle Round Shield</option>
            <option value="stormchaser-shield">Stormchaser Scutum</option>
            <option value="radaments-sphere-shield">Radament's Sphere Ancient Shield</option>
            <option value="blackoak-shield">Blackoak Shield Luna</option>
            <option value="stormshield-shield">Stormshield Monarch</option>
            <option value="spirit-ward-shield">Spirit Ward Ward</option>
            <option value="rhyme-shield">Rhyme Shield</option>
            <option value="exile-shield">Exile Shield (Paladin Only)</option>
            <option value="sanctuary-shield">Sanctuary Shield</option>
            <option value="splendor-shield">Splendor Shield</option>
        </select><br>
        <input type="checkbox" id="shael" name="shael">
        <label for="shael">Socket Shael Rune to shield (Non-runeword shields only)</label><br>
        <label for="other-items">Other Items</label>
        <select id="other-items" name="other-items">
            <option selected disabled>---SELECT OTHER ITEMS---</option>
            <option value="guardian-angel-armor">Guardian Angel Templar Coat</option>
        </select><br>
        <button type="submit" id="btn">Calculate</button>
    </form>
    <div id="calc">
        <?php
        $character = $_POST['character'];
        $holy_shield = $_POST['holy-shield'];
        $shield = $_POST['shield'];
        $shael = $_POST['shael'];
        $items = $_POST['other-items'];
        $weap1h = $_POST['1hweap'];
        $rate = 0;
        if ($shael) {
	        $rate += 20;
        }
        if ($items === 'guardian-angel-armor') {
	        $rate += 30;
        }
        if ($character !== 'nec' && $character !== 'pal') {
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
	                   $shield === 'visceratuant-shield' || $shield === 'mosers-shield') {
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
                if ($weap1h) {
	                echo '<h3>Amazon</h3>';
	                echo '<table>';
                    echo '<caption>1_H Swinging Weapon</caption>';
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
		                echo "Further Faster Block Rate unnecessary.";
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
		                echo "Further Faster Block Rate unnecessary.";
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
			        echo "Further Faster Block Rate unnecessary.";
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
                    echo "Breakpoint: 4";
                    echo "Required Faster Block rate for the next breakpoint: " . (86 - $rate) . "%";
		        } else {
			        echo "Faster Block Rate: $rate%<br>";
			        echo "Breakpoint: 3<br>";
			        echo "Further Faster Block Rate unnecessary.";
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
                    echo "Breakpoint: 5";
                    echo "Required Faster Block rate for the next breakpoint: " . (86 - $rate) . "%";
		        } else {
			        echo "Faster Block Rate: $rate%<br>";
			        echo "Breakpoint: 4<br>";
			        echo "Further Faster Block Rate unnecessary.";
		        }
            }
        } else if ($character !== 'pal') {
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
		        echo "Breakpoint: 7";
		        echo "Required Faster Block Rate for the next breakpoint: " . (52 - $rate) . "%";
            } else if ($rate < 86) {
                echo "Faster Block Rate: $rate%<br>";
                echo "Breakpoint: 6";
                echo "Required Faster Block Rate for the next breakpoint: " . (86 - $rate) . "%";
	        } else {
		        echo "Faster Block Rate: $rate%<br>";
		        echo "Breakpoint: 5<br>";
		        echo "Further Faster Block Rate unnecessary.";
	        }
        } else if ($character !== 'nec') {
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
		            echo "Further Faster Block Rate unnecessary.";
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
		            echo "Further Faster Block Rate unnecessary.";
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
<script src="js/script.js"></script>
</body>
</html>