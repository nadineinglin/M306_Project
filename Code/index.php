<!DOCTYPE html>
<html lang="de">
<head>
    <link rel="stylesheet" href="https://use.typekit.net/tri3onz.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container" id="login-container">
        <div class="row space">
            <div class="col-sm-2">
                <br>
                <h2 class="index-h2">REGELN:</h2>
                <p>Sobald der Spieler 3x hintereinander verliert ist das Spiel vorbei</p>
            </div>
            <div class="col-sm-1"></div>
            <div class="jumbotron col-sm-6">
                <div class="center">
                <h1>LOGIN</h1>
                <form action="game.php">
                    <input class="username" type="text" placeholder="Benutzername">
                    <br>
                    <button type="submit" class="sub" id="login-button">Los geht's!</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row space">
            <div class="col-lg-4 center">
                <input id="paper" type="image" src="/icon/papier.png" alt="paper">
            </div>
            <div class="col-lg-4 center">
                <input id="scissor" type="image" src="/icon/schere.png" alt="scissor">   
            </div>
            <div class="col-lg-4 center">
                <input  id="rock"type="image" src="/icon/stein.png" alt="rock">    
            </div>
        </div>
    </div>    

<script src="logic.js"></script>        
</body>
</html>