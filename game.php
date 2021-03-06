<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Wi-Fi Site Simulator</title>

    <style>
        html,
        body,
        #container {
            min-width: 100vw;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 0 ;
            padding: 0;

        }

        #game-container {
            margin: 0;
            padding: 0;
        }

        #game-container>canvas {
            border-radius: 5px;
        }

        .instructions{

        }
    </style>
</head>

<body>

    <input type="hidden" id="username" value="<?php echo $_POST['username'];?>" />
    <input type="hidden" id="student" value="<?php echo $_POST['student'];?>" />
    <div class="container">

        <div id="game-container">

        </div>
        <div class="instructions">
            <h1>Instructions</h1>
            <p>
                Phase 1: Walk around the map and keep an eye on your radar. <br>
                It will react to Wi-Fi interference objects. <br>
                Click on the map where you think there could be a source of Wi-Fi interference. <br>
                When you feel like you found all the interference sources click the Next phase button.
            </p>
            <p>
                Phase 2: Walk around the map and place antennas to try and get the best coverage. <br>
                If you place antennas too close to interference sources the antennas range will decrease. <br>
                If you place antennas too close to other antennas the score will decrease. <br>

            </p>
            <p>
                Once you are satisfied, hit the submit button to generate a screenshot of the entire level and your score.

            </p>
        </div>
    </div>


    <script src="./outTurf.js">
    </script>
    <script src="//cdn.jsdelivr.net/npm/phaser@3.54.0/dist/phaser.js"></script>
     <script src="./index.js"></script>
</body>

</html>
