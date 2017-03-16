
<html>
<head>

</head>
<body>

<div>

    <ol>
        <?php

            $startTime = "09:00";




        for ($x = 0; $x <= 8; $x++) {
            $time = date('H:i', strtotime($startTime.'+1 hour'));
            $daylabel = '<li>$time</li>';

        }

        ?>


    </ol>

</div>

</body>
</html>
