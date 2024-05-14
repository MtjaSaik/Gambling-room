<!DOCTYPE html>
<html lang="sl">

<head>
    <title>Gambling room</title>
    <link rel="stylesheet" href="style.css">
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
                    <form action="game.php" method="post" name="form">
                        <ul>
                            <li class="list">Player 1</li>
                            <li class="list">Player 2</li>
                            <li class="list">Player 3</li>
                        </ul>
                        <ul>
                            <li class="txtin"><input type="text" placeholder="name" required name="p1" maxlength="8" min="1"></li>
                            <li class="txtin"><input type="text" placeholder="name" required name="p2" maxlength="8" min="1"></li>
                            <li class="txtin"><input type="text" placeholder="name" required name="p3" maxlength="8" min="1"></li>
                        </ul>
                        <div class="settings">
                            <a>Number of dice: </a><input type="number" class="settings-dice" min="1" max="3" value="1" required name="dice">
                            <a>Number of rounds::</a><input type="number" class="settings-rounds" min="1" max="5" value="1" required name="rounds">
                            <input type="submit" class="submit" value="submit" name="play">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>