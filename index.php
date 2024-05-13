<!DOCTYPE html>
<html lang="sl">

<head>
    <title>Gambling room</title>
    <link rel="stylesheet" href="style.css">
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
                            <li class="txtin"><input type="text" placeholder="name" required name="p1"></li>
                            <li class="txtin"><input type="text" placeholder="name" required name="p2"></li>
                            <li class="txtin"><input type="text" placeholder="name" required name="p3"></li>
                        </ul>
                        <div class="settings">
                            <a>Število kock: </a><input type="number" class="settings-dice" min="1" max="3" value="1" required name="dice">
                            <a>Število iger:</a><input type="number" class="settings-rounds" min="1" max="5" value="1" required name="rounds">
                            <input type="submit" class="submit" value="submit" name="play">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>