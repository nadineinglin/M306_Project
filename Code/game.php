<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Game</title>
</head>
<body>
    <div class="container center">
        <h2>Bot</h2>
        <p id="ausgabe"></p>

    </div>
      <div class="container">
        <div class="row space">
            <div class="col-lg-4 center">
                <input onclick="spielen('papier')" id="paper" type="image" src="/icon/papier.png" alt="paper">
            </div>
            <div class="col-lg-4 center">
                <input onclick="spielen('schere')" id="scissor" type="image" src="/icon/schere.png" alt="scissor">   
            </div>
            <div class="col-lg-4 center">
                <input onclick="spielen('stein')"id="rock"type="image" src="/icon/stein.png" alt="rock">    
            </div>

            <p class="center" id="ergebnis">Spieler: 0 / Computer: 0</p>

        </div>
    </div>    
    <script src="logic.js"></script>
</body>
</html>