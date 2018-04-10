<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <style>
        body{        
            background: url(2.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            text-align: center;
        }

        h1{
            text-align: center;
            font-family: Roboto;
            font-style: normal;
            font-weight: normal;
            line-height: normal;
            font-size: 72px;
            color: #fcfafa;
            margin-top:10%;
        }
        p{
            color: #fcfafa;
        }
                    

    </style>
</head>
<body>
    <div class="things">
        <h1> HELLO WORLD</h1>
        <p>The current date and time are: </p>
        <button>
            <?php
                echo(date("Y-m-d h:i:sa"));
            ?>
        </button>
    </div>
</body>
</html>