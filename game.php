<?php
    session_start();
    if(isset($_POST["play"])){
        $_SESSION["player1_name"] = $_POST["p1"];
        $_SESSION["player2_name"] = $_POST["p2"];
        $_SESSION["player3_name"] = $_POST["p3"];

        $_SESSION["dice_number"] = $_POST["dice"];
        $_SESSION["rounds"] = $_POST["rounds"];

        $_SESSION["played_rounds"]=0;

        $_SESSION["player1_score"]=0;
        $_SESSION["player2_score"]=0;
        $_SESSION["player3_score"]=0;
    }

    $p1Round = array();
    $p2Round = array();
    $p3Round = array();

    for ($y = 0; $y < $_SESSION["dice_number"]; $y++) {
        array_push($p1Round, rand(1,6));
        array_push($p2Round, rand(1,6));
        array_push($p3Round, rand(1,6));
    }

    if($_SESSION["played_rounds"] < $_SESSION["rounds"]){
        $_SESSION["played_rounds"]++;
        for ($x = 0; $x < sizeof($p1Round); $x++) {
        $_SESSION["player1_score"] += $p1Round[$x];
        $_SESSION["player2_score"] += $p2Round[$x];
        $_SESSION["player3_score"] += $p3Round[$x];
        }
    }
?>

<!DOCTYPE html>
<html lang="sl">

<head>
    <title>Gambling room</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="icon" type="image/x-icon" href="pictures/favicon.ico">
</head>
<body>
    <div class="main">
        <div class="container">
            <div class="filler">

            </div>
            <div class="title">
                <h1>Gambling room</h1>
            </div>
            <div class="menu">
                <div class="players">
                    <form name="form" method="post" autocomplete="off" action="<?php 
                        if($_SESSION["played_rounds"]==$_SESSION["rounds"]){echo 'end.php';}
                        else{echo 'game.php';}?>"
                    >
                        <div class="player">
                            <a><?php echo $_SESSION["player1_name"];?></br></a>
                            <a><?php echo $_SESSION["player1_score"];?></br></a>
                            <?php  for ($x = 0; $x < $_SESSION["dice_number"]; $x++) {
                                echo "<img src='pictures/dice".  $p1Round[$x]. ".gif' alt='dice1' class='kocke'>";
                            }?></br>
                        </div>
                        <div class="player">
                            <a><?php echo $_SESSION["player2_name"];?></br></a>
                            <a><?php echo $_SESSION["player2_score"];?></br></a>
                            <?php  for ($x = 0; $x < $_SESSION["dice_number"]; $x++) {
                                echo "<img src='pictures/dice".  $p2Round[$x]. ".gif' alt='dice1' class='kocke'>";
                            }?></br>
                        </div>
                        <div class="player">
                            <a><?php echo $_SESSION["player3_name"];?></br></a>
                            <a><?php echo $_SESSION["player3_score"];?></br></a>
                            <?php  for ($x = 0; $x < $_SESSION["dice_number"]; $x++) {
                                echo "<img src='pictures/dice".  $p3Round[$x]. ".gif' alt='dice1' class='kocke'>";
                            }?></br>
                        </div>
                        <div class="sub">
                            <a>Current round: <?php echo $_SESSION["played_rounds"]?>/<?php echo $_SESSION["rounds"]?></a></br>
                            <input type="submit" class="submit" value="<?php 
                                if($_SESSION["played_rounds"]==$_SESSION["rounds"]){echo 'Finish';}
                                else {echo 'Play another round';}?>"
                            >
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>