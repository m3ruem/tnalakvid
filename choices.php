<?php
session_start()

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TNALAKTABULATION</title>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <style>
        .backvid {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            z-index: -1;
            
        }

        .backvid video {
            width: 100%;
            height: 100vh;
            object-fit: cover;
        }

        .button {
            display: inline-block;
            padding: 15px 25px;
            font-size: 17px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            outline: none;
            color: #080c0a;
            background-color: #fbfcfc;
            border: none;
            border-radius: 15px;
            box-shadow: 0 9px #999;
            width: calc(50% - 20px);
            /* adjust the width to fit the screen */
            margin: 10px;
        }

        .buttons {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            /* adjust the height to fit the screen */
            margin: 0 auto;
            /* center the container horizontally */
        }

        .button:hover {
            background-color: #4af7b0
        }

        .button:active {
            background-color: #040605;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
        }
    </style>

</head>

<body>
    <div class="backvid">
        <video autoplay loop muted>
            <source src="tnalak1080.mp4" type="video/mp4">
            
        </video>
        <!-- <img src="tnnn.png" alt=""> -->
    </div>

    <div class="buttons">
        <button class="button" style="width:20%; margin-top:45%; margin-left: 0%; font-family:Josefin Sans; vertical-align:middle;">Float Competition</button>
        <button class="button" style="width:20%; margin-top:45%; margin-left: 10%; font-family:Josefin Sans; vertical-align:middle;">Most Festive Contingent</button>
    </div>
    <!-- Your content here -->
    <div class="content">
        <!-- Your HTML content goes here -->
    </div>
</body>

</html>