


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Colors</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-2.2.2.js" integrity="sha256-4/zUCqiq0kqxhZIyp4G0Gk+AOtCJsY1TA00k5ClsZYE=" crossorigin="anonymous"></script>
    <link type="text/css" rel="stylesheet" href="stylesheet.css">

</head>
<body>
    <main class="container">
        <div id="desired_color">
            <form method="post" action="<?= $_SERVER['PHP_SELF']; ?>">
                <div class="form-group">
                    <label for="colorDesired" class="form-control text-center" id="labelForColor">What Color Do You Want To Make? </label>
                    <input type="text" name="color" id="colorDesired" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Submit Here, Princess!</button>
            </form>
        </div>
        <!--todo: make text areas dynamic, might need more than 2-->
        <?php
            include "functions.php";
            $colorsNeeded = '';
            if(isset($_POST['color'])){
                $color = strtolower($_POST['color']);
                $colorsNeeded = getColor($color);
            } else {
                $color = 'empty';
            }

            $display = '<div class="row">';

            $colorsNeededLength = count($colorsNeeded);
            if($color == 'empty'){

            } else {
                if(is_array($colorsNeeded)) {
                    for ($i = 0; $i < $colorsNeededLength; $i++) {
                        $colorNum = $i + 1;
                        $colSize = 12 / ($i + 2);
                        $colorForBox = $colorsNeeded[$i];
                        $display .= "<div class='col-md-$colSize'><h3>Color: $colorNum</h3>";
                        $display .= "<textarea> $colorForBox </textarea></div>";
                    }
                }  else {
                    $display .= $colorsNeeded;
                }
            }
            $display .= '</div>';
            echo $display;
        ?>

    </main>
</body>
</html>