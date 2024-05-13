<?php
    session_start();

        $_SESSION["player1_score"];
        $_SESSION["player2_score"];
        $_SESSION["player3_score"];
        $_SESSION["player1_name"];
        $_SESSION["player2_name"];
        $_SESSION["player3_name"];
        $_SESSION["dice_number"];
        $_SESSION["rounds"];
        $_SESSION["played_rounds"];

        $max=$_SESSION["player1_score"];
        for($x=0;$x<3;$x++){
            if($max<$_SESSION["player2_score"])
                $max=$_SESSION["player2_score"];
            else if($max<$_SESSION["player3_score"]){
                $max=$_SESSION["player3_score"];
            }
        }
?>
<!DOCTYPE html>
<html lang="sl">

<head>
    <title>Gambling room</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body onload="">
    <div class="main">
        <div class="container">
            <div class="filler">

            </div>
            <div class="title">
                <h1>Gambling room</h1>
            </div>
            <div class="menu">
            <div class="players">
                    <form name="form" method="post" autocomplete="off" action="<?php if($_SESSION["played_rounds"]==$_SESSION["rounds"]){echo 'end.php';}else{echo 'game.php';}?>">
                        <div class="player">
                            <a><?php echo $_SESSION["player1_name"];  ?></br></a>
                            <a><?php echo $_SESSION["player1_score"];  ?></br></a>
                        </div>
                        <div class="player">
                            <a><?php echo $_SESSION["player2_name"];  ?></br></a>
                            <a><?php echo $_SESSION["player2_score"];  ?></br></a>
                        </div>
                        <div class="player">
                            <a><?php echo $_SESSION["player3_name"];  ?></br></a>
                            <a><?php echo $_SESSION["player3_score"];  ?></br></a>
                        </div>
                        <div class="sub">
                            <a>
                                <?php
                                    if($max==$_SESSION["player1_score"] && $max==$_SESSION["player2_score"]){echo 'Draw between player '.$_SESSION["player1_name"].' and player '.$_SESSION["player2_name"];}
                                    elseif($max==$_SESSION["player1_score"] && $max==$_SESSION["player3_score"]){echo 'Draw between player '.$_SESSION["player1_name"].' and player'.$_SESSION["player3_name"];}
                                    elseif($max==$_SESSION["player3_score"] && $max==$_SESSION["player2_score"]){echo 'Draw between player '.$_SESSION["player3_name"].' and player'.$_SESSION["player2_name"];}
                                    elseif($max==$_SESSION["player1_score"]){echo 'Congratulations player '.$_SESSION["player1_name"].' you won!';}
                                    elseif($max==$_SESSION["player2_score"]){echo 'Congratulations player '.$_SESSION["player2_name"].' you won!';}
                                    elseif($max==$_SESSION["player3_score"]){echo 'Congratulations player '.$_SESSION["player3_name"].' you won!';}
                                    else{
                                        echo 'An error occurred (No winners found).';
                                    }
                                    ?>
                            </a>
                            <input type="button" value="Back to main menu" onclick="goBack();">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="JavaScript/script.js"></script>
</html>