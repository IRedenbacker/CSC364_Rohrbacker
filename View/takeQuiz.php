<?php include 'header.php';

$number = 0;
$message = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['favChamp'] == 'Ziggs') {
        $number += 1;
    } 
    if ($_POST['hateChamp'] == "Teemo") {
        $number += 1;
    }
    if ($_POST['moneySpent'] == 1100) {
        $number += 1;
    }
    if ($number == 3) {
        $message = "Yay, you listened to my presentation!";
    }
    else if ($number == 2) {
        $message = "Eh, everyone makes mistakes...";
    }
 else {
        $message = "You didn't pay any attention did you...";
    }
}

?>
<h1><img src="../Namespace/view.png"></h1>
<form method="post">
    <fieldset>
        <legend>League Review</legend>
        <label for="favChamp">Who is Isaiah's favorite champion?</label>
        <select id="favChamp" name="favChamp">
            <option value="Lucian">Lucian</option>
            <option value="Ziggs">Ziggs</option>
            <option value="Teemo">Teemo</option>
        </select>
        <br>
        <label for="hateChamp">Who is Isaiah's most hated champion?</label>
        <select id="hateChamp" name="hateChamp">
            <option value="Udyr">Udyr</option>
            <option value="Garen">Garen</option>
            <option value="Teemo">Teemo</option>
        </select>
        <br>
        <label for="moneySpent">How much money has Isaiah Spent?</label>
        <select id="moneySpent" name="moneySpent">
            <option value="50">$50</option>
            <option value="100">$100</option>
            <option value="1100">$1100</option>
        </select>
        <br>
        <input type="submit" value="Save">
    </fieldset>
</form>
<h3><?php echo $message ?></h3>



