<?php

$myArray = ["Hello", 5, "world"];

foreach($myArray as $varNameWhereValueWillBeStored => $value) {
    print_r([$varNameWhereValueWillBeStored, $value]);    
}