<?php
$numArr = [1, 2, 3, 1, 2, 1, 3];
$length = count($numArr);
$newArr = [];
for ($i = 0; $i < $length; $i++) {
    $isPresent = false;
    for ($j = 0; $j < $length; $j++) {
        if ($numArr[$i] == $newArr[$j]) {
            $isPresent = true;
            break;
        }
    }
    if ($isPresent)
        $newArr[$numArr[$i]]++;
    else {
        $newArr[$numArr[$i]] = 1;
    }
}
foreach ($newArr as $num => $count)
    echo "Number of occurrence of $num: $count<br>";
// for ($i = 0; $i < $length; $i++) {
//     $count = 1;
//     for ($j = $i + 1; $j < $length && $numArr[$i] != -1; $j++) {
//         if ($numArr[$i] == $numArr[$j]) {
//             $count += 1;
//             $numArr[$j] = -1;
//         }
//     }
//     if ($numArr[$i] != -1)
//         echo "The occurrence of " . $numArr[$i] . ": $count<br>";
// }