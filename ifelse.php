<html>
    <head>
        
    </head>
    <body>
        <?php
        $marks = 136;
        if ($marks < 35) {
            ?>
            <h1> <?php echo $marks; ?> Fail</h1>
            <?php
        } else if ($marks >= 35 && $marks < 50) {
            echo "Pass class";
        } else if ($marks >= 50 && $marks < 60) {
            echo "Sencond class";
        } else if ($marks >= 60 && $marks <= 100) {
            echo "First Class";
        } else {
            echo 'Invalid Marks';
        }
        ?>
    </body>
</html>
