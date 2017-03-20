
<html>
<head>

</head>
<body>

<div>

    <ol>

        <?php

        $time = "08:00";




        for ($x = 0; $x <= 8; $x++) {

            $time = date('H:i', strtotime( $time .'+1 hour'));
           echo '<input type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off" value="'.$time.'">

            </input>';
           // echo "<li> $time </li>";

        }


        ?>


    </ol>

</div>

</body>
</html>
