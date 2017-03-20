
<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
</head>
<body>

<div>

    <ol>

        <?php

        $time = "08:00";




        for ($x = 0; $x <= 8; $x++) {

            $time = date('H:i', strtotime( $time .'+1 hour'));
//           echo '<input  id="'.$x.'" name="'.$x.'" type="button" class="btn btn-primary" data-toggle="button" aria-pressed="true" autocomplete="off" value="'.$time.'">
//
//            </input>';
         echo  '<div class="btn-group" data-toggle="buttons">
  <label class="btn btn-primary active">
    <input type="checkbox" autocomplete="off" checked> Checkbox 1 (pre-checked)
            </label>
  <label class="btn btn-primary">
    <input type="checkbox" autocomplete="off"> Checkbox 2
            </label>
  <label class="btn btn-primary">
    <input type="checkbox" autocomplete="off"> Checkbox 3
            </label>
</div>';

           // echo "<li> $time </li>";

        }


        ?>


    </ol>

</div>

</body>
</html>
