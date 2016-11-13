<?php 
require_once __DIR__.'/library.php';
/*read_file();*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <div id="wrap">
        <svg width="900" height="900">
            <?php 
            $handle = fopen('./data.txt', 'r+');
            $y=0;
            $size=90;
            while($line = fgets($handle)){
                for($i=0; $i<strlen($line); $i++)
                {
                    $x=$i*$size;

                    if ('*' === $line[$i]) 
                    {
                        echo '<rect x="'.$x.'" y="'.$y.'" width="'.$size.'" height="'.$size.'"style="fill:rgb(255,0,0)"/>';
                    }elseif ('#' === $line[$i]) {
                        echo '<rect x="'.$x.'" y="'.$y.'" width="'.$size.'" height="'.$size.'" style="fill:rgb(240,240,240)"/>';
                    }
                }
                $y += $size;
            } 
            fclose($handle)
            ?>
        </svg>
    </div>
</body>
</html>
