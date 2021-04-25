<?php
/*
------------------------------boolval---------------------------
    echo boolval(1) ? "true" : "false"; // return true
    echo boolval(-1) ? "true" : "false"; // return true
    echo boolval(0) ? "true" : "false"; // return false
    echo boolval('') ? "true" : "false"; // return false
    echo boolval([]) ? "true" : "false"; // return false
    echo boolval([1,2,3]) ? "true" : "false"; // return true
    echo boolval('0') ? "true" : "false"; // return false
    echo boolval(true) ? "true" : "false"; // return true
    echo boolval(false) ? "true" : "false"; // return false
*/
/*
------------------------------doubleval & floatval---------------------------
    echo doubleval(123); // return 123
    echo doubleval(123.123); // return 123.123
    echo doubleval('123.123'); // return 123.123
    echo doubleval('123.123 Hello'); // return 123.123
*/
/*
------------------------------is_countable---------------------------
    echo is_countable(123) ? 'yes' : 'no'; // return no
    echo is_countable([1,2,3]) ? 'yes' : 'no'; // return yes
    echo is_countable(['A','B','C']) ? 'yes' : 'no'; // return yes
    $isCountable = [
        'A' => 'Apple',
        'B' => 'Ball',
        'C' => 'Cat'
    ];
    echo is_countable($isCountable) ? 'yes' : 'no'; // return yes
*/
/*
------------------------------empty---------------------------
    $emptyInt = 0;
    $notEmptyInt = 10;
    $emptyString = "";
    $notEmptyString = "Sakib";
    $emptyArray = [];
    $notEmptyArray = [1,2,3];
    echo empty($emptyInt) ? 'Empty' : 'Not empty'; // return true
    echo empty($notEmptyInt) ? 'Empty' : 'Not empty'; // return false
    echo empty($emptyString) ? 'Empty' : 'Not empty'; // return true
    echo empty($notEmptyString) ? 'Empty' : 'Not empty'; // return false
    echo empty($emptyArray) ? 'Empty' : 'Not empty'; // return true
    echo empty($notEmptyArray) ? 'Empty' : 'Not empty'; // return false
*/
/*
------------------------------gettype---------------------------
    echo gettype(1); // return int
    echo gettype(-1); // return int
    echo gettype("Sakib"); // return string
    echo gettype(true); // return boolean
    echo gettype([1,2,3]); // return boolean
*/
/*
------------------------------intval---------------------------
    echo intval(12, 10); // 2nd param is base (default 10) // return 12
    echo intval(12.12); // return 12
    echo intval('12.12'); // return 12
*/
/*
------------------------------is_array---------------------------
    echo is_array(123); // return false
    echo is_array([123]); // return true
*/
/*
------------------------------is_bool---------------------------
    echo is_bool(123); // return false
    echo is_bool(true); // return true
*/
/*
------------------------------is_callable---------------------------
    function test1()
    {
        echo 'Test1';
    }
    echo is_callable('test1'); // return true
    echo is_callable('test2'); // return false
*/
/*
------------------------------is_double & is_float & is_real---------------------------
    echo is_double(1) ? 'Yes' : 'No'; // return No
    echo is_double(1.1) ? 'Yes' : 'No'; // return Yes
*/
/*
------------------------------is_int & is_integer & is_long---------------------------
    echo is_int(1) ? 'Yes' : 'No'; // return Yes
    echo is_int(1.1) ? 'Yes' : 'No'; // return No
    echo is_int('1.1') ? 'Yes' : 'No'; // return No
*/
/*
------------------------------is_null---------------------------
    echo is_null(null); // return true
    echo is_null(123); // return false
*/
/*
------------------------------is_numeric---------------------------
    echo is_numeric(1) ? 'Yes' : 'No'; // return Yes
    echo is_numeric(1.1) ? 'Yes' : 'No'; // return Yes
    echo is_numeric('1.1') ? 'Yes' : 'No'; // return Yes
*/
/*
------------------------------is_object---------------------------
    $myObject = new stdClass();
    $myArray = [1,2,3,4,5];
    echo is_object($myObject); // return true
    echo is_object($myArray); // return false
*/
/*
------------------------------is_string---------------------------
    $myString = "This is a string";
    $myArray = [1,2,3,4,5];
    echo is_string($myString); // return true
    echo is_string($myArray); // return false
*/
/*
------------------------------is_string---------------------------
    $myIsset = "This is a sentence";
    echo isset($myIsset); // return true
    echo isset($myArray); // return false
*/
/*
------------------------------settype & gettype---------------------------
    $string = "100";
    settype($string, 'integer');
    echo gettype($string); // return integer

    settype($string, 'string');
    echo gettype($string); // return string
*/
/*
------------------------------unset---------------------------
    $set = 'Hello dear !';
    echo $set; // return Hello dear !

    unset($set);
    echo $set; // return Undefined variable: set
*/