<?php

function what_list_am_i_on(array $actions): string
{
    $naughty = 0;
    $nice = 0;
    foreach ($actions as $a) {
        if (str_contains("bfk", $a[0])) {
            $naughty += 1;
        } else if (str_contains("gsn", $a[0])) {
            $nice += 1;
        }
    }

    return $naughty >= $nice ? "naughty" : "nice";
}

echo what_list_am_i_on(['broke someone\'s window', 'fought over a toaster', 'killed a bug']) . " => naughty \n";
echo what_list_am_i_on(["got someone a new car", "saved a man from drowning", "never got into a fight"]) . " => nice \n";
echo what_list_am_i_on(["broke a vending machine", "never got into a fight", "tied someone's shoes"]) . " => naughty";