<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div>
        <?php
        $my_int = 100; #integer //integer /* integer */
        $my_float = 14.12; #float
        $my_string = "This is string"; #string
        $my_array = array(1,2,3,4,5); #array
        ?>
        <?php echo $my_int;
        echo $my_float;
        echo $my_string;
        echo "значение массива my_array под индексом [2]", $my_array[2];
        ?>
    </div>


</body>

</html>