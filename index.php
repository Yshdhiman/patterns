<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patterns</title>
    <style>
        body {
            display: grid;
            grid-template-columns: auto auto auto auto;
            margin-left: 20px;
            font-size: 15px;
        }

        @media only screen and (max-width: 500px) {
            body {
                display: grid;
                grid-template-columns: auto auto;
            }
        }

        @media only screen and (max-width: 700px) {
            body {
                font-size: 11px;
            }
        }
    </style>
</head>

<body>
    <div>
        <?php
        echo "PHP <br>";
        echo "Pattern 1:-<br>";
        $n = 5;
        for ($x = 1; $x <= $n; $x++) {
            for ($y = 1; $y <= $x; $y++)
                echo $y . " &nbsp";

            echo "<br>";
        }
        for ($x = $n; $x >= 1; $x--) {
            for ($y = 1; $y <= $x; $y++)
                echo $y . " &nbsp";

            echo "<br>";
        }
        ?>
    </div>
    <div>
        <?php
        echo "<br> Pattern 2:- <br>";
        // $n = 5;
        for ($i = $n; $i >= 1; $i--) {
            for ($j = $n; $j >= $i; $j--)
                echo $j . " &nbsp";
            echo "<br>";
        }
        for ($i = 1; $i <= $n; $i++) {
            for ($j = $n; $j >= $i + 1; $j--)
                echo $j . " &nbsp";
            echo "<br>";
        }
        ?>
    </div>
    <div>
        <?php
        echo "<br> Pattern 3:- <br>";
        // $n = 5;
        for ($i = 1; $i <= $n; $i++) {
            for ($k = $n; $k >= $i; $k--)
                echo "&nbsp ";
            for ($j = 1; $j <= $i; $j++) {
                echo $j . " &nbsp";
            }
            echo "<br>";
        }
        for ($i = $n; $i >= 1; $i--) {
            for ($k = $i; $k <= $n; $k++)
                echo "&nbsp ";
            for ($j = 1; $j <= $i; $j++)
                echo $j . " &nbsp";
            echo "<br>";
        }
        ?>
    </div>
    <div>
        <?php
        echo "<br> Pattern 4:- <br>";
        // $n = 5;
        for ($i = 1; $i <= $n; $i++) {
            for ($k = $i; $k <= $n; $k++)
                echo "&nbsp ";
            for ($j = 1; $j <= $i; $j++)
                echo "* &nbsp";
            echo "<br>";
        }
        for ($i = $n - 1; $i >= 1; $i--) {
            for ($k = $i; $k <= $n; $k++)
                echo "&nbsp ";
            for ($j = $i; $j >= 1; $j--)
                echo "* &nbsp";
            echo "<br>";
        }
        ?>
    </div>
    <div>
        <?php
        echo "<br> Pattern 5:- <br>";
        // $n = 5;
        $alpha = 64;
        for ($i = $n; $i >= 1; $i--) {
            for ($k = $n; $k >= $i; $k--)
                echo "&nbsp ";
            for ($j = $i; $j >= 1; $j--)
                echo chr($alpha + $i) . " &nbsp";
            echo "<br>";
        }
        for ($i = 1 + 1; $i <= $n; $i++) {
            for ($k = $i; $k <= $n; $k++)
                echo "&nbsp ";
            for ($j = 1; $j <= $i; $j++)
                echo chr($alpha + $i) . " &nbsp";
            echo "<br>";
        }
        ?>
    </div>
    <div>
        <?php
        echo "<br> Pattern 6:- <br>";
        $num = 5;
        for ($i = 1; $i <= $num; $i++) {
            for ($j = 1; $j <= $i; $j++)
                echo $i . " ";
            for ($k = $num * $num; $k >= $i * $num; $k--)
                echo "&nbsp";
            for ($k = $num; $k >= $i; $k--)
                echo "&nbsp";
            for ($j = 1; $j <= $i; $j++)
                echo $i . " ";
            echo "<br>";
        }
        ?>
    </div>
    <div>
        <?php
        echo "<br> Pattern 7:- <br>";
        $num = 5;
        for ($i = 1; $i <= $num; $i++) {
            for ($j = $i; $j >= 1; $j--)
                echo $i . " ";
            for ($k = $num * $num - 1; $k >= $i * $num; $k--)
                echo "&nbsp";
            for ($k = $num; $k >= $i; $k--)
                echo "&nbsp";
            for ($j = $i; $j >= 1; $j--)
                echo $i . " ";
            echo "<br>";
        }
        for ($i = $num - 1; $i >= 1; $i--) {
            for ($j = $i; $j >= 1; $j--)
                echo $i . " ";
            for ($k = $num * $num - 1; $k >= $i * $num; $k--)
                echo "&nbsp";
            for ($k = $num; $k >= $i; $k--)
                echo "&nbsp";
            for ($j = $i; $j >= 1; $j--)
                echo $i . " ";
            echo "<br>";
        }
        ?>
    </div>
    <div>
        <?php
        echo "<br> Pattern 8:- <br>";
        // $n = 5;
        for ($i = $n; $i >= 1; $i--) {
            for ($k = $i; $k >= 1; $k--)
                echo "&nbsp&nbsp ";
            for ($j = $i; $j <= $n; $j++)
                echo $j . " ";
            for ($j = $n - 1; $j >= $i; $j--)
                echo $j . " ";
            echo "<br>";
        }
        for ($i = 1 + 1; $i <= $n; $i++) {
            for ($k = $i; $k >= 1; $k--)
                echo "&nbsp&nbsp ";
            for ($j = $i; $j <= $n; $j++)
                echo $j . " ";
            for ($j = $n - 1; $j >= $i; $j--)
                echo $j . " ";
            echo "<br>";
        }
        ?>
    </div>
    <div>
        <?php
        echo "<br> Pattern 9:- <br>";
        // $n = 5;
        for ($i = 1; $i <= $n; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                if ($j == 1 || $j == $i)
                    echo "\u{1F600}";
                else
                    echo "&nbsp &nbsp &nbsp ";
            }
            echo "<br>";
        }
        for ($i = $n - 1; $i >= 1; $i--) {
            for ($j = 1; $j <= $n; $j++) {
                if ($j == 1 || $j == $i)
                    echo "\u{1F600}";
                else
                    echo "&nbsp &nbsp &nbsp ";
            }
            echo "<br>";
        }
        ?>
    </div>
    <div>
        <?php
        echo "<br> Pattern 10:- <br>";
        // $n = 5;
        for ($i = 1; $i <= $n; $i++) {
            for ($k = $n; $k >= $i; $k--)
                echo "&nbsp&nbsp ";
            for ($j = 1; $j <= $i; $j++)
                if ($j == 1 || $j == $i)
                    echo " \u{1F600}";
                else
                    echo " &nbsp &nbsp &nbsp";
            echo "<br>";
        }
        for ($i = $n - 1; $i >= 1; $i--) {
            for ($k = $n; $k >= $i; $k--)
                echo "&nbsp&nbsp ";
            for ($j = 1; $j <= $i; $j++)
                if ($j == 1 || $j == $i)
                    echo " \u{1F600}";
                else
                    echo " &nbsp &nbsp &nbsp";
            echo "<br>";
        }
        ?>
    </div>
    <div>
        <?php
        echo "<br> Pattern 11:- <br>";
        // $n = 10;
        for ($i = 1; $i <= $n; $i++) {
            for ($j = 1; $j <= $n; $j++)
                if (($i == $j || $i == 1) || ($j == 1 && $i <= $n))
                    echo "* ";
                else if ($j == $n || $i == $n)
                    echo "* ";
                else
                    echo "&nbsp &nbsp";
            echo "<br>";
        }
        ?>
</body>

</html>
