<?php

function planeSeat($a): string
{
    $result = 'No Seat!!';
    $number = substr($a, 0, -1);
    $letter = strtoupper($a[strlen($a) - 1]);

    if ($number <= 60 && $number > 0 && stripos('ABCDEFGHK', $letter) !== false) {

        if ($number >= 1 && $number < 21) {
            $result = 'Front';
        } elseif ($number >= 21 && $number < 41) {
            $result = 'Middle';
        } elseif ($number >= 41 && $number < 61) {
            $result = 'Back';
        }

        if (in_array($letter, ['A', 'B', 'C'])) {
            $result .= '-Left';
        } elseif (in_array($letter, ['D', 'E', 'F'])) {
            $result .= '-Middle';
        } elseif (in_array($letter, ['G', 'H', 'K'])) {
            $result .= '-Right';
        }
    }

    return $result;
}

echo planeSeat("2A") . " => Front-Left \n";
echo planeSeat("23D") . " => Middle-Middle \n";
echo planeSeat("49K") . " => Back-Right \n";
echo planeSeat("60A") . " => Back-Left \n";
echo planeSeat("61D") . " => No Seat!! \n";
echo planeSeat("30I") . " => No Seat!!";