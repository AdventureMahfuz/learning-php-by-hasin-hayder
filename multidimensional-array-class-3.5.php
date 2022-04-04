<?php
$assets = [
    'Rakib' => explode(', ', 'laptop, desktop, home, money,'),
    'Rahim' => explode(', ', 'bike, smart phone, smart watch'),
    'Raihan' => explode(', ', 'book, pen, watch'),
];
print_r($assets);
echo $assets['Raihan'][2] . "\n";

$demo = [
    'test' => [
        'test 2' => [
            'test 3' => [
                'a',
                'b',
                'c',
                'd'
            ],
        ],
    ],
];
print_r($demo);
echo $demo['test']['test 2']['test 3'][3] . "\n";

$demo2 = [
    [2,3,4],
    [22,33,44],
    [222,333,444, ['1' => 'Sohel', '2' => 'Rana'],],
];
print_r($demo2);
echo $demo2[2][3][2];