<?php
$sheet = getSheet('home', 'Section');
//showDebugging(3,$sheet->group, PleaseDie);
foreach ($sheet->group as $section => $items) {
    h2($section);
	$tpl = getThemeSection('home', urlize($section), SITEPATH . '/themes/');
    $vars = [];
    foreach ($items as $item)
        $vars[urlize($sheet->getValue($item, 'Name'))] = $sheet->getValue($item, 'Text');
	print_r($vars);
    echo replaceItems($tpl, $vars, '%');
    echo HRTAG;
} 