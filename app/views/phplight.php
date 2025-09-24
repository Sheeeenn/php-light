<html>
    
    <head>

        <title>PHP Light</title>

    </head>

    <body>

        <h1> TEST PHP-LIGHT </h1>

        <hr>

        <p>Made By: <?php echo $name; ?></p>

        <p>items: <?php foreach ($items as $item) {

            echo $item . " ";
            
        } ?></p>

        <p>equip: <?php echo $items[1]; ?></p>

    </body>

</html>