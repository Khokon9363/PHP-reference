<?php
// ----------------------------------------Array-------------------------------------
echo "<pre>";
/*
    // index array
    $myArray = ['A', 'B', 'C', 'D', 'E'];
    foreach ($myArray as $key => $value) {
        echo $key . ' => ' . $value . '<br/>';
    }

    echo "<hr/>";
*/
/*
    for ($i=0; $i < count($myArray); $i++) { 
        echo $i . ' => ' . $myArray[$i] . '<br/>';
    }

    echo "<hr/>";
*/
/*
    $i = 0;
    while ($i < count($myArray)) {
        echo $i . ' => ' . $myArray[$i] . '<br/>';
        $i++;
    }

    echo "<hr/><hr/>";
*/
/*
    // associative array
    $cars = [
        'X' => 1500,
        'Y' => 2100,
        'Z' => 3210
    ];

    foreach ($cars as $key => $car) {
        echo $key . ' => ' . $car . ' TK<br/>';
    }

    echo "<hr/><hr/>";
*/
/*
    $cars = [
        'X' => 1500,
        'Y' => 2100,
        'Z' => 3210
    ];

    // multidimensional array (2 Dimensional)
    $cars = [
        ['A', 100, 120],
        ['B', 90, 100],
        ['C', 110, 150],
        ['D', 120, 135]
    ];
    foreach ($cars as $item) {
        foreach($item as $car) {
            echo $car . ' ';
        }
        echo '<br/>';
    }

    echo "<hr/><hr/>";
*/
/*
    // multidimensional array (3 Dimensional)
    $fruits = [
        'A' => [5, 10, 15, 20, 25],
        'B' => [10, 20, 30, 40, 50, 60, 70],
        'C' => [20, 40, 60]
    ];

    foreach ($fruits as $key => $fruit) {
        echo $key .' ';
        foreach ($fruit as $price) {
            echo $price . ' ';
        }
        echo '<br/>';
    }

    echo "<hr/><hr/>";
*/
/*
    // multidimensional array (4 Dimensional)
    $myFruits = [
        'A' => [
            1 => 2,
            3 => 4,
            5 => 6
        ],
        'B' => [
            7 => 8,
            9 => 10
        ],
        'C' => [
            11 => 12,
            13 => 14,
            15 => 16,
            17 => 18,
            19 => 20
        ]
    ];

    foreach ($myFruits as $key => $myFruit) {
        echo $key . ' ';
        foreach ($myFruit as $key => $item) {
            echo $key .' '. $item . ' ';
        }
        echo '<br/>';
    }

    echo "<hr/><hr/>";
*/
/*
    // ----------------------------------------array_change_key_case-------------------------------------
    // upper and lower the array's key
    $alphabets1 = [
        'a' => 5,
        'b' => 10,
        'c' => 15
    ];

    print_r(array_change_key_case($alphabets1, CASE_UPPER));

    echo '<hr/>';
    */
    /*
    $alphabets2 = [
        'A' => 5,
        'b' => 10,
        'C' => 15
    ];

    print_r(array_change_key_case($alphabets2, CASE_LOWER));

    echo '<hr/><hr/>';
*/
/*
    // ----------------------------------------array_chunk-------------------------------------
    // make new arrays from an array
    $alphabets3 = [
        'a' => 5,
        'b' => 10,
        'c' => 15,
        'd' => 20,
        'e' => 25
    ];

    print_r(array_chunk($alphabets3, 2));

    echo '<hr/><hr/>';
*/
/*
    // ----------------------------------------array_column-------------------------------------
    //get specific indexs from single array or multi-dimensional arrays
    $myArray2 = [
        [
            'first_name' => 'A',
            'last_name'  => 'B'
        ],
        [
            'first_name' => 'C',
            'last_name'  => 'D'
        ],
        [
            'first_name' => 'E',
            'last_name'  => 'F'
        ],
    ];

    print_r(array_column($myArray2, 'last_name'));
    print_r(array_column($myArray2, 'last_name', 'first_name'));

    echo '<hr/><hr/>';
*/
/*
    // ----------------------------------------array_combine-------------------------------------
    // combine keys & value of two arrays
    $myArray3 = ['A', 'B', 'C'];
    $myArray4 = [5, 10, 15];

    print_r(array_combine($myArray3, $myArray4));

    echo '<hr/><hr/>';
*/
/*
    // ----------------------------------------array_count_values-------------------------------------
    // count how many same values are in a array
    $myArray4 = ['A', 'B', 'C', 'D', 'A', 'B', 'A'];

    print_r(array_count_values($myArray4));

    echo '<hr/><hr/>';
*/
/*
    // ----------------------------------------array_diff-------------------------------------
    // differences between two or more arrays
    $myArray5 = [
        'A' => 10,
        'B' => 20,
        'C' => 30,
    ];
    $myArray6 = [
        'X' => 10
    ];

    print_r(array_diff($myArray5, $myArray6)); // return the differences according to Value

    $myArray7 = [
        'A' => 10,
        'B' => 20,
        'C' => 30,
    ];
    $myArray8 = [
        'X' => 10
    ];
    $myArray9 = [
        'Y' => 30
    ];

    print_r(array_diff($myArray7, $myArray8, $myArray9));

    echo '<hr/><hr/>';
*/
/*
    // ----------------------------------------array_diff_assoc-------------------------------------
    $myArray10 = [
        'Ajit'  => 10,
        'faruk' => 20,
        'Lipi'  => 30
    ];
    $myArray11 = [
        'Ajit' => 10
    ];

    print_r(array_diff_assoc($myArray10, $myArray11)); // return the differences according to key & value

    echo '<hr/><hr/>';
*/
/*
    // ----------------------------------------array_diff_key-------------------------------------
    $myArray12 = [
        'A' => 4,
        'B' => 10,
        'C' => 15,
        'D' => 20
    ];
    $myArray13 = [
        'A' => 5,
        'B' => 8,
    ];

    print_r(array_diff_key($myArray12, $myArray13)); // return the differences according to key

    echo '<hr/><hr/>';
    */
    /*
    // ----------------------------------------array_fill-------------------------------------

    print_r(array_fill(0, 10, 'anyValue')); // make an array an fill it by a string or number as value
    print_r(array_fill(0, 5, [1, 2])); // make an array an fill it by another array as value

    echo '<hr/><hr/>';
*/
/*
    // ----------------------------------------array_fill_keys-------------------------------------

    $mykeys = ['A', 'B', 'X', 'Y'];

    print_r(array_fill_keys($mykeys, 'Blue')); // make an array with specific key and static string or number as value

    $myValues = ['P', 'Q'];
    print_r(array_fill_keys($mykeys, $myValues)); // make an array with specific key and static array as value

    echo '<hr/><hr/>';
*/
/*
    // ----------------------------------------array_filter-------------------------------------
    $filterArray = [1,2,3,4,5];

    function odd ($array){
        return ($array & 1); // return odd
    }
    function even ($array){
        return !($array & 1); // return even
    }
    print_r(array_filter($filterArray, 'odd')); // return the odd values of the array
    print_r(array_filter($filterArray, 'even')); // return the even values of the array

    $filterArray2 = [true, 100, false, -50, 'This is string', 10.23, '', 0];

    print_r(array_filter($filterArray2)); // return everything what has real value

    echo '<hr/><hr/>';
*/
/*
    // ----------------------------------------array_flip-------------------------------------
    $flipArray = [
        'kamal'  => 10,
        'Hasan'  => 12,
        'Kamrul' => 15
    ];
    print_r(array_flip($flipArray));

    echo '<hr/><hr/>';
*/
/*
    // ----------------------------------------array_intersect-------------------------------------
    $intersect1 = [
        'A' => 'Apple',
        'B' => 'Ball',
        'C' => 'Cat'
    ];
    $intersect2 = [
        'X' => 'Apple',
        'Y' => 'Ball'
    ];

    print_r(array_intersect($intersect1, $intersect2)); // filter the array according to value

    echo '<hr/><hr/>';
*/
/*
    // ----------------------------------------array_intersect_assoc-------------------------------------
    $intersect3 = [
        'A' => 'Apple',
        'B' => 'Ball',
        'C' => 'Cat'
    ];
    $intersect4 = [
        'B' => 'Ball',
        'C' => 'Cat'
    ];

    print_r(array_intersect_assoc($intersect3, $intersect4)); // filter the array according to key & value

    echo '<hr/><hr/>';
*/
/*
    // ----------------------------------------array_intersect_key-------------------------------------
    $intersect5 = [
        'A' => 'Apple',
        'B' => 'Ball',
        'C' => 'Cat'
    ];
    $intersect6 = [
        'B' => 'Ballaaaaaaaaaaaaaaa',
        'X' => 'Cat'
    ];

    print_r(array_intersect_key($intersect5, $intersect6)); // filter the array according to key

    echo '<hr/><hr/>';
*/
/*
    // ----------------------------------------array_keys & array_key_exists-------------------------------------
    $arraykeys = [
        'Roni'  => 10,
        'Rafiq' => 15,
        'Rabbi' => 25
    ];
    print_r(array_keys($arraykeys)); // return the keys with a  new indexed array

    echo array_key_exists('Rabbi', $arraykeys) ? 'Exists' : 'Not exists'; // return an item exists or not

    echo '<br/>';

    print_r(array_key_first($arraykeys)); // return the first key of an array

    echo '<br/>';

    print_r(array_key_last($arraykeys)); // return the last key of an array

    echo '<hr/><hr/>';
*/
/*
    // ----------------------------------------array_map-------------------------------------
    $arrayMap = [1,2,3,4,5,6,7,8,9];

    print_r(array_map(function($item){
        return $item;
    }, $arrayMap)); // call a callback function on each item

    $arrayMap2 = ['a', 'B', 'c', 'D'];

    print_r(array_map(function($item){
        return ucfirst($item);
    }, $arrayMap2)); // call a callback function on each item

    print_r(array_map(function($item, $item2){
        return $item . ' ' . $item2;
    }, $arrayMap, $arrayMap2));

    echo '<hr/><hr/>';
*/
/*
    // ----------------------------------------array_merge-------------------------------------
    $arrayMarge = [1,2,3,4,5];
    $arrayMarge2 = [6,7,8,9];
    print_r(array_merge($arrayMarge, $arrayMarge2)); // combine array items and return a new array

    $arrayMarge3 = [
        'A' => 1,
        'B' => 2
    ];
    $arrayMarge4 = [
        'X' => 1,
        'Y' => 4
    ];
    print_r(array_merge($arrayMarge3, $arrayMarge4));
    echo '<hr/><hr/>';
*/
/*
    // ----------------------------------------array_merge_recursive-------------------------------------
    $arrayMargeRecursive = [
        'A' => 1,
        'B' => 2
    ];
    $arrayMargeRecursive2 = [
        'A' => 4,
        'X' => 5
    ];
    print_r(array_merge_recursive($arrayMargeRecursive, $arrayMargeRecursive2)); // array elements have the same key makes the value as an array
    echo '<hr/><hr/>';
*/
/*
    // ----------------------------------------array_multisort-------------------------------------
    $arrayMultiSort = ['A', 'C', 'B', 'E', 'D', 'F'];
    array_multisort($arrayMultiSort); // Sort the array GLOBALLY
    print_r($arrayMultiSort);
    
    array_multisort($arrayMultiSort, SORT_DESC); // Sort the array GLOBALLY
    print_r($arrayMultiSort);
*/
/*
    // ----------------------------------------array_pad-------------------------------------
    $arrayPad = [1,2,3];
    print_r(array_pad($arrayPad, 10, 'Blue')); // fill an array with default value
*/
/*
    // ----------------------------------------array_pop-------------------------------------
    $arrayPop = [1,2,3,4,5];

    array_pop($arrayPop); // remove the last element of an array
    print_r($arrayPop);
*/
/*
    // ----------------------------------------array_product-------------------------------------
    $arrayProduct = [5,5,7,10];
    print_r(array_product($arrayProduct)); // Product means multiply, return the multiply result of an array elements
*/
/*
    // ----------------------------------------array_push-------------------------------------
    $arrayPush = [1,2,3,4,5];
    array_push($arrayPush, 6, 7, 8, 9); // Insert an value in an array as a element
    print_r($arrayPush);

    array_push($arrayPush, ['X', 'Y']); // Insert an array in an array as a element
    print_r($arrayPush);
*/
/*
    // ----------------------------------------array_rand-------------------------------------
    $arrayRand = ['A','B','C','D','E'];
    print_r(array_rand($arrayRand)); // return an key from this array rendomly

    print_r(array_rand($arrayRand, 2)); // return an new array with 2 elements with rendomly key
*/
/*
    // ----------------------------------------array_reduce-------------------------------------
    $arrayReduce = [5, 5, 10, 20];
    print_r(array_reduce($arrayReduce, function($array1, $array2){
        return $array1 + $array2; // we can apply a logic or calculation on the elements of the array
    }));
    echo "<br/>";
    print_r(array_reduce($arrayReduce, function($array1, $array2){
        return $array1 + $array2; // we can apply a logic or calculation on the elements of the array with a default NUMBER (5 in here)
    }, 100));  
*/
/*
    // ----------------------------------------array_replace-------------------------------------
    $arrayReplace1 = [1, 2, 3];
    $arrayReplace2 = [4, 5, 6, 7];

    print_r(array_replace($arrayReplace1, $arrayReplace2)); // replace the first array into second array when matches the keys

    $arrayReplace3 = [10 ,20 ,30];

    print_r(array_replace($arrayReplace1, $arrayReplace2, $arrayReplace3)); // replace the first & second array into third array when matches the keys
*/
/*
    // ----------------------------------------array_replace_recursive-------------------------------------
    $arrayReplaceRecursive1 = [1, 2, 3, 4, 5];
    $arrayReplaceRecursive2 = [6, 7, 8, 9];
    print_r(array_replace_recursive($arrayReplaceRecursive1, $arrayReplaceRecursive2)); // replace the first array into second array when matches the keys

    $arrayReplaceRecursive3 = [0 , 0, 0];
    print_r(array_replace_recursive($arrayReplaceRecursive1, $arrayReplaceRecursive2, $arrayReplaceRecursive3)); // replace the first & second array into third array when matches the keys

*/
/*
    // ----------------------------------------array_reverse-------------------------------------
    $arrayReverse = [1,2,3,4,5];
    print_r(array_reverse($arrayReverse)); // reverse the values bcoz there are default keys 0, 1, 2, 3
    print_r(array_reverse($arrayReverse, true)); // reverse the keys also

    $arrayReverse2 = [
        'A' => 'X',
        'B' => 'Y', 
        'C' => 'Z'
    ];
    print_r(array_reverse($arrayReverse2)); // reverse the keys & values

    $arrayReverse3 = [
        'A' => 'X',
        'B' => 'Y', 
        'C' => [
            'a' => 'b',
            'c' => 'd'
        ]
    ];
    print_r(array_reverse($arrayReverse3)); // reverse the entire array also
*/
/*
    // ----------------------------------------array_search-------------------------------------
    $arraySearch = [
        'A' => 'Akbar',
        'B' => 'Badshah',
        'X' => 'Xylophone'
    ];
    print_r(array_search('Xylophone', $arraySearch)); // return the matched value's key  
*/
/*
    // ----------------------------------------array_shift-------------------------------------
    $arrayShift = ['Red', 'Green', 'Blue'];
    print_r(array_shift($arrayShift)); // remove the first element of first array and return the removed value
    print_r($arrayShift);
*/
/*
    // ----------------------------------------array_slice-------------------------------------
    $arraySlice = ['A', 'B', 'C', 'D', 'F'];
    print_r(array_slice($arraySlice, 1, 2)); // slice from index 1 & return an array included 2 key & value
    print_r(array_slice($arraySlice, -2, 2)); // here -2 is the previous index of the last index
*/
/*
    // ----------------------------------------array_splice-------------------------------------
    $arraySplice = [1, 2, 3, 4, 5];
    print_r(array_splice($arraySplice, 1, 3)); // remove 1 element & return an array with 2 elements
*/
/*
    // ----------------------------------------array_sum-------------------------------------
    $arraySum = [1, 2, 3];
    $arraySum2 = [
        'Bangla' => 100,
        'English' => 85,
        'Mathematics' => 95
    ];
    print_r(array_sum($arraySum)); // return the value's SUM
    echo "<br/>";
    print_r(array_sum($arraySum2)); // return the value's SUM
*/

// ARRAY_U... FUNCTIONS ARE JUST ACCCEPTS USER DEFIEND FUNCTIONS

/*
    // ----------------------------------------array_unique-------------------------------------
    $arrayUnique = [
        'Bangla' => 10,
        'English' => 20,
        'Biology' => 50,
        'Bangla' => 15
    ];
    print_r(array_unique($arrayUnique)); // remove the duplicate keys and accept the last one of the duplicates
*/
/*
    // ----------------------------------------array_unshift-------------------------------------
    $arrayUnshift = [1,2,3,4,5];
    array_unshift($arrayUnshift, 'A', 'B', 'C'); // insert items at the first
    print_r($arrayUnshift);
*/
/*
    // ----------------------------------------array_values-------------------------------------
    $arrayValues = [
        'Bangla' => 10,
        'English' => 20,
        'Biology' => 50
    ];
    print_r(array_values($arrayValues)); // return an array with just the values
*/
/*
    // ----------------------------------------array_walk-------------------------------------
    $arrayWalk = [
        'Bangla' => 10,
        'English' => 20,
        'Biology' => 50
    ];
    array_walk($arrayWalk, function($value, $key, $userInput){
        echo $userInput . ' ' . $key . ' ' . $value . '<br/>';
    }, 'He got'); // call a function for each element and accept an userInput
*/
/*
    // ----------------------------------------asort & arsort-------------------------------------
    $asort = ['A', 'C', 'D', 'B'];
    asort($asort);
    print_r($asort);
    arsort($asort);
    print_r($asort);
*/
/*
    // ----------------------------------------compact-------------------------------------
    $name = 'Ahmed';
    $age = 21;

    print_r(compact('name', 'age')); // return an array with key as their variable name
*/
/*
    // ----------------------------------------count / sizeof-------------------------------------
    $count = [1,2,3,4,5];
    print_r(count($count)); // return the count
*/
/*
    // ----------------------------------------current / pos / prev / reset-------------------------------------
    $current = [1,2,3,4,5];
    echo current($current); // return the first / current element
*/
/*
    // ----------------------------------------end-------------------------------------
    $end = [1,2,3,4,5];
    echo end($end); // return the last / end element
*/
/*
    // ----------------------------------------extract-------------------------------------
    $extract = [
        'first_name' => 'Sakib',
        'last_name' => 'Ahmed'
    ];
    extract($extract); // extract the array an make the keys as variable
    echo $first_name;
*/
/*
    // ----------------------------------------in_array-------------------------------------
    $inArray = [1,2,3,4,5];
    echo in_array(2, $inArray) ? 'Yes' : 'No' ;
*/
/*
    // ----------------------------------------list-------------------------------------
    $list = [1, 2];
    list($first, $last) = $list; // assign array elements into specific variable
    echo $first;
*/
/*
    // ----------------------------------------next-------------------------------------
    $next = [1,2,3,4,5];
    echo next($next); // return the second / next element
*/
/*
    // ----------------------------------------range-------------------------------------
    print_r(range(1, 10)); // make an array containing element 1 to 10 and return that array
    print_r(range(1, 10, 2)); // make an array containing element 1 to 10 including a step of 2 and return that array
*/
/*

// -------------------------END-------------------------------