<?php
$surname = 'сергеева';
$name = 'ольга';
$dadname = 'денисовна';

echo mb_convert_case($surname, MB_CASE_TITLE, "UTF-8") . ' ' . mb_strtoupper(mb_substr($name, 0, 1, "UTF-8")) . '. ' . mb_strtoupper(mb_substr($dadname, 0, 1, "UTF-8")) . '. <br>';

for ($month = 1; $month <= 12; $month++){
    for ($day = 1; $day <=20; $day++){
        $tempDate = new DateTime("2021-$month-$day");
        if ($tempDate->format('N') == 6){
            echo $tempDate->format('d.m.Y') . '<br>';
        }
    }
}
