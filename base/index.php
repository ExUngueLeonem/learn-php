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
        $my_string = 'This is string'; #string
        $my_array = array(1, 2, "абыр абыр", 4, 5); #array
        $my_bool = true; #boolean
        ?>

        <div>
            <?php echo $my_int;
            echo $my_float, '<br>';
            echo $my_string, '<br>';
            echo "значение массива my_array под индексом [2] $my_array[2] <br>";
            ?>
        </div>

        <div>
            <?php #ассоциативный массив - можно задать индекс самостоятельно
            $f = array(
                'name' => 'Иван',
                'surname' => 'Иванов',
                'age' => 26,
                'byear' => 1996,
                'education' => array(
                    'ПТУ',
                    'колледж',
                    'институт'
                ),
                'married' => false,
                'smoking' => false,
                'geek' => true
            );
            echo $f['surname'], ' ';
            echo $f['education'][0];
            ?>
        </div>

    </div>

    <div>
        <?php
        $a = 'переменная А';
        #разница между одинарными и двойными кавычками
        echo 'test: $a <br>';
        echo "test: $a <br>";
        ?>
    </div>
    <div>
        <?php
        #конкатенация 
        echo 'name: ' . $f['name'] . '<br>' . 'surname: ' . $f['surname'];
        ?>
    </div>
    <div>
        <?php
        $a = 100;
        $b = 15;
        # + - * / %
        echo 5 + 10, '<br>';
        echo 10 - 15, '<br>';
        echo $a % $b, '<br>';
        ?>
    </div>
    <div>
        <?php
        #условия
        $weather = 'снег'; //снег, дождь, ясно, облачно
        if ($weather == 'снег') {
            echo 'сиди лучше дома <br>';
        }

        if ($a > 40) {
            echo '$a больше 40';
        } else if ($a < 40) {
            echo '$a меньше 40';
        } else {
            echo '$a равно 40';
        }

        echo '<br>';

        #операторы сравнения <, >, <=, >=, ==, !=
        #логическе операторы or, and

        if ($b < 40 and $b < 60) {
            echo 'молодость';
        }

        echo '<br>';
        ?>
        <div>
            <?php
            #for
            for ($i = 0; $i < 10; $i++) {
                echo " i = $i <br>";
            }
            #while
            $test = 10;
            while ($test <= 100) {
                echo "test: $test";
                $test++;
            }
            #foreach

            $names_array = array(
                'Alex',
                'Tomas',
                'Ter',
                'asdfg',
                'Anna'
            );

            foreach ($names_array as $value) {
                echo $value . '<br>';
            }
            ?>
        </div>
        <div>
            <?php
            function myFunction($a = 0, $b = 0)
            {
                echo "Моя первая функция, $a, $b";
                return "возвращаю значение из функции";
            }
            myFunction(100, 500);

            echo '<br>';
            $bar = myFunction();
            echo '<br>';
            echo $bar;
            ?>
        </div>
        <div>
            <?php
            # некоторые полезные матетматические функции
            # abs, round, ceil, floor, rand, min, max
            /* 
            abs - возвращает модуль
            round - округление по правилам математики
            ceil - округление в меньшую сторону
            floor - округление в большую сторону
            rand - случайное число из диапазона
            min - минимальное из 
            max - максимальное из
            */
            echo abs(-3000)
            ?>
        </div>
    </div>
</body>

</html>