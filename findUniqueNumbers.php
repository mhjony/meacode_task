<?php

function findUniqueNumbers(array $numbers)
{
    $array = array();   
    $length = count($numbers);
    $i = 0;
    
    while ($i < $length - 1)
    {
        $j = $i + 1;
        while ($j < $length)
        {
            if ($numbers[$i] == $numbers[$j])
            {
                foreach (array_keys($numbers, $numbers[$i]) as $key) 
                {
                    unset($numbers[$key]);
                }
            }
            $j++;
        }
        $i++;
    }
    return ($numbers);
}
print_r(findUniqueNumbers([1, 2, 1, 3, 6, 4, 5, 6]));

?>