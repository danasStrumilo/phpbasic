<html>
    <head>
        <title>php</title>
        <style>
            img{
                width:  <?php print date('s') . '5'; ?>px;
                heigth: <?php print date('s') . '5'; ?>px;
            }
            .bomb{
                display: flex;
                justify-content: center;
            }
        </style>
    </head>
    <body>
        <div class="bomb">
            <img src="https://images-na.ssl-images-amazon.com/images/I/61V2cX4JqGL.png" > 
            <?php print date('s'); ?>
        </div>
    </body>
</html>
