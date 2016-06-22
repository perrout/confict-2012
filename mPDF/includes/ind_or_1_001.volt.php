<?php
	$volt = array (
  0 => 
  array (
    'match' => '0B4D 200C',
    'replace' => '2018',
  ),
  1 => 
  array (
    'match' => '0B15 0B4D 0B37',
    'replace' => 'E003',
  ),
  2 => 
  array (
    'match' => '0B1C 0B4D 0B1E',
    'replace' => 'E004',
  ),
  3 => 
  array (
    'match' => '((0B15|0B16|0B17|0B18|0B19|0B1A|0B1B|0B1C|0B1D|0B1E|0B1F|0B20|0B21|0B22|0B23|0B24|0B25|0B26|0B27|0B28|0B2A|0B2B|0B2C|0B2D|0B2E|0B2F|0B30|0B32|0B33|0B35|0B36|0B37|0B38|0B39|0B71|E003|E004|E005|E006|E007|E008|E009|E00A|E00B|E00C|E00D|E00E|E00F|E010|E011|E012|E013|E014|E015|E016|E017|E018|E019|E01A|E01B|E01C|E01D|E01E|E01F|E020|E021|E023|E024|E025|E026|E027|E028|E029|E02A|E02B|E02C|E02D|E02E|E02F|E030|E031|E032|E033|E034|E035|E036|E037)) 0B30 0B4D',
    'replace' => '\\1 E069',
  ),
  4 => 
  array (
    'match' => '((0B01|0B3F|0B56|E06B|E041|E064|E06D|E070|E089|E08C)) 0B30 0B4D',
    'replace' => '\\1 E069',
  ),
  5 => 
  array (
    'match' => '((0B3E|0B40|E044|0B57|E068|E074|E08B|E08F)) 0B30 0B4D',
    'replace' => '\\1 E069',
  ),
  6 => 
  array (
    'match' => '(0B3C) 0B30 0B4D',
    'replace' => '\\1 E069',
  ),
  7 => 
  array (
    'match' => '(25CC) 0B30 0B4D',
    'replace' => '\\1 E069',
  ),
  8 => 
  array (
    'match' => '((0B15|0B19|0B1A|0B1B|0B1C|0B1D|0B1E|0B20|0B21|0B22|0B24|0B26|0B28|0B2C|0B2D|0B32|0B33|0B35|0B39|25CC)) E069',
    'replace' => '\\1 E06B',
  ),
  9 => 
  array (
    'match' => '((0B15|0B19|0B1A|0B1B|0B1C|0B1D|0B1E|0B20|0B21|0B22|0B24|0B26|0B28|0B2C|0B2D|0B32|0B33|0B35|0B39|25CC) 0B3C) E069',
    'replace' => '\\1 E06B',
  ),
  10 => 
  array (
    'match' => '0B38 0B4D 0B24 0B4D 0B30',
    'replace' => 'E01B',
  ),
  11 => 
  array (
    'match' => '0B28 0B4D 0B24 0B4D 0B30',
    'replace' => 'E01D',
  ),
  12 => 
  array (
    'match' => '0B28 0B4D 0B24 0B4D 0B30',
    'replace' => 'E01C',
  ),
  13 => 
  array (
    'match' => '0B56 E069',
    'replace' => 'E070',
  ),
  14 => 
  array (
    'match' => '0B57 E069',
    'replace' => 'E074',
  ),
  15 => 
  array (
    'match' => '0B3F E069',
    'replace' => 'E06D',
  ),
  16 => 
  array (
    'match' => '0B40 E069',
    'replace' => 'E14D',
  ),
  17 => 
  array (
    'match' => '0B24 0B4D 0B17 0B4D 0B27',
    'replace' => 'E036',
  ),
  18 => 
  array (
    'match' => '0B24 0B4D 0B38 0B4D 0B28',
    'replace' => 'E030',
  ),
  19 => 
  array (
    'match' => '0B19 0B4D 0B15',
    'replace' => 'E005',
  ),
  20 => 
  array (
    'match' => '0B19 0B4D 0B16',
    'replace' => 'E006',
  ),
  21 => 
  array (
    'match' => '0B19 0B4D 0B17',
    'replace' => 'E007',
  ),
  22 => 
  array (
    'match' => '0B19 0B4D 0B18',
    'replace' => 'E008',
  ),
  23 => 
  array (
    'match' => '0B1A 0B4D 0B1A',
    'replace' => 'E009',
  ),
  24 => 
  array (
    'match' => '0B1F 0B4D 0B1F',
    'replace' => 'E00A',
  ),
  25 => 
  array (
    'match' => '0B24 0B4D 0B24',
    'replace' => 'E00B',
  ),
  26 => 
  array (
    'match' => '0B26 0B4D 0B27',
    'replace' => 'E00C',
  ),
  27 => 
  array (
    'match' => '0B26 0B4D 0B26',
    'replace' => 'E00D',
  ),
  28 => 
  array (
    'match' => '0B23 0B4D 0B23',
    'replace' => 'E00F',
  ),
  29 => 
  array (
    'match' => '0B1E 0B4D 0B1A',
    'replace' => 'E011',
  ),
  30 => 
  array (
    'match' => '0B1E 0B4D 0B1D',
    'replace' => 'E012',
  ),
  31 => 
  array (
    'match' => '0B1E 0B4D 0B1C',
    'replace' => 'E013',
  ),
  32 => 
  array (
    'match' => '0B26 0B4D 0B2D',
    'replace' => 'E014',
  ),
  33 => 
  array (
    'match' => '0B27 0B4D 0B27',
    'replace' => 'E015',
  ),
  34 => 
  array (
    'match' => '0B2C 0B4D 0B26',
    'replace' => 'E016',
  ),
  35 => 
  array (
    'match' => '0B28 0B4D 0B26',
    'replace' => 'E017',
  ),
  36 => 
  array (
    'match' => '0B28 0B4D 0B27',
    'replace' => 'E018',
  ),
  37 => 
  array (
    'match' => '0B2E 0B4D 0B2B',
    'replace' => 'E019',
  ),
  38 => 
  array (
    'match' => '0B2E 0B4D 0B2A',
    'replace' => 'E01A',
  ),
  39 => 
  array (
    'match' => '0B37 0B4D 0B23',
    'replace' => 'E010',
  ),
  40 => 
  array (
    'match' => '0B39 0B4D 0B28',
    'replace' => 'E01E',
  ),
  41 => 
  array (
    'match' => '0B39 0B4D 0B35',
    'replace' => 'E01F',
  ),
  42 => 
  array (
    'match' => '0B39 0B4D 0B2E',
    'replace' => 'E020',
  ),
  43 => 
  array (
    'match' => '0B1A 0B4D 0B1B',
    'replace' => 'E021',
  ),
  44 => 
  array (
    'match' => '0B1E 0B4D 0B1B',
    'replace' => 'E023',
  ),
  45 => 
  array (
    'match' => '0B2E 0B4D 0B2D',
    'replace' => 'E024',
  ),
  46 => 
  array (
    'match' => '0B28 0B4D 0B24',
    'replace' => 'E025',
  ),
  47 => 
  array (
    'match' => '0B38 0B4D 0B24',
    'replace' => 'E026',
  ),
  48 => 
  array (
    'match' => '0B2A 0B4D 0B24',
    'replace' => 'E027',
  ),
  49 => 
  array (
    'match' => '0B15 0B4D 0B24',
    'replace' => 'E028',
  ),
  50 => 
  array (
    'match' => '0B23 0B4D 0B21',
    'replace' => 'E029',
  ),
  51 => 
  array (
    'match' => '0B24 0B4D 0B15',
    'replace' => 'E02A',
  ),
  52 => 
  array (
    'match' => '0B24 0B4D 0B38',
    'replace' => 'E02B',
  ),
  53 => 
  array (
    'match' => '0B24 0B4D 0B2A',
    'replace' => 'E02C',
  ),
  54 => 
  array (
    'match' => '0B23 0B4D 0B22',
    'replace' => 'E031',
  ),
  55 => 
  array (
    'match' => '0B36 0B4D 0B1B',
    'replace' => 'E032',
  ),
  56 => 
  array (
    'match' => '0B24 0B4D 0B28',
    'replace' => 'E033',
  ),
  57 => 
  array (
    'match' => '0B24 0B4D 0B2E',
    'replace' => 'E034',
  ),
  58 => 
  array (
    'match' => '0B17 0B4D 0B27',
    'replace' => 'E035',
  ),
  59 => 
  array (
    'match' => '0B24 0B4D 0B2B',
    'replace' => 'E037',
  ),
  60 => 
  array (
    'match' => '0B2E 0B4D 0B2E',
    'replace' => 'E14A',
  ),
  61 => 
  array (
    'match' => '0B21 0B3C',
    'replace' => '0B5C',
  ),
  62 => 
  array (
    'match' => '0B22 0B3C',
    'replace' => '0B5D',
  ),
  63 => 
  array (
    'match' => '((0B15|0B16|0B17|0B18|0B19|0B1A|0B1B|0B1C|0B1D|0B1E|0B1F|0B20|0B21|0B22|0B23|0B24|0B25|0B26|0B27|0B28|0B2A|0B2B|0B2C|0B2D|0B2E|0B2F|0B30|0B32|0B33|0B35|0B36|0B37|0B38|0B39|0B71|E003|E004|E005|E006|E007|E008|E009|E00A|E00B|E00C|E00D|E00E|E00F|E010|E011|E012|E013|E014|E015|E016|E017|E018|E019|E01A|E01B|E01C|E01D|E01E|E01F|E020|E021|E023|E024|E025|E026|E027|E028|E029|E02A|E02B|E02C|E02D|E02E|E02F|E030|E031|E032|E033|E034|E035|E036|E037)) 0B4D',
    'replace' => '\\1 2019',
  ),
  64 => 
  array (
    'match' => '((0B01|0B3F|0B56|E06B|E041|E064|E06D|E070|E089|E08C)) 0B4D',
    'replace' => '\\1 2019',
  ),
  65 => 
  array (
    'match' => '(E069) 0B4D',
    'replace' => '\\1 2019',
  ),
  66 => 
  array (
    'match' => '((0B41|E045|0B42|0B43|E053|E056|E059|0B3C)) 0B4D',
    'replace' => '\\1 2019',
  ),
  67 => 
  array (
    'match' => '(200D) 0B4D',
    'replace' => '\\1 2019',
  ),
  68 => 
  array (
    'match' => '(25CC) 0B4D',
    'replace' => '\\1 2019',
  ),
  69 => 
  array (
    'match' => '(0020) 0B4D',
    'replace' => '\\1 2019',
  ),
  70 => 
  array (
    'match' => '200D 2019',
    'replace' => '2019',
  ),
  71 => 
  array (
    'match' => '2019 0B30',
    'replace' => 'E075',
  ),
  72 => 
  array (
    'match' => '2019 0B5F',
    'replace' => 'E077',
  ),
  73 => 
  array (
    'match' => '2019 0B35',
    'replace' => 'E078',
  ),
  74 => 
  array (
    'match' => '2019 0B32',
    'replace' => 'E110',
  ),
  75 => 
  array (
    'match' => '2019 0B33',
    'replace' => 'E111',
  ),
  76 => 
  array (
    'match' => '2019 0B2E',
    'replace' => 'E11C',
  ),
  77 => 
  array (
    'match' => '2019 0B15',
    'replace' => 'E0F6',
  ),
  78 => 
  array (
    'match' => '2019 0B16',
    'replace' => 'E0F7',
  ),
  79 => 
  array (
    'match' => '2019 0B17',
    'replace' => 'E0F8',
  ),
  80 => 
  array (
    'match' => '2019 0B18',
    'replace' => 'E0F9',
  ),
  81 => 
  array (
    'match' => '2019 0B19',
    'replace' => 'E0FA',
  ),
  82 => 
  array (
    'match' => '2019 0B1A',
    'replace' => 'E0FB',
  ),
  83 => 
  array (
    'match' => '2019 0B1B',
    'replace' => 'E0FC',
  ),
  84 => 
  array (
    'match' => '2019 0B1C',
    'replace' => 'E0FD',
  ),
  85 => 
  array (
    'match' => '2019 0B1D',
    'replace' => 'E0FE',
  ),
  86 => 
  array (
    'match' => '2019 0B1E',
    'replace' => 'E0FF',
  ),
  87 => 
  array (
    'match' => '2019 0B1F',
    'replace' => 'E100',
  ),
  88 => 
  array (
    'match' => '2019 0B20',
    'replace' => 'E101',
  ),
  89 => 
  array (
    'match' => '2019 0B21',
    'replace' => 'E102',
  ),
  90 => 
  array (
    'match' => '2019 0B22',
    'replace' => 'E103',
  ),
  91 => 
  array (
    'match' => '2019 0B23',
    'replace' => 'E104',
  ),
  92 => 
  array (
    'match' => '2019 0B24',
    'replace' => 'E105',
  ),
  93 => 
  array (
    'match' => '2019 0B25',
    'replace' => 'E106',
  ),
  94 => 
  array (
    'match' => '2019 0B26',
    'replace' => 'E107',
  ),
  95 => 
  array (
    'match' => '2019 0B27',
    'replace' => 'E108',
  ),
  96 => 
  array (
    'match' => '2019 0B28',
    'replace' => 'E109',
  ),
  97 => 
  array (
    'match' => '2019 0B2A',
    'replace' => 'E10A',
  ),
  98 => 
  array (
    'match' => '2019 0B2B',
    'replace' => 'E10B',
  ),
  99 => 
  array (
    'match' => '2019 0B2C',
    'replace' => 'E10C',
  ),
  100 => 
  array (
    'match' => '2019 0B2D',
    'replace' => 'E10D',
  ),
  101 => 
  array (
    'match' => '2019 0B2E',
    'replace' => 'E10E',
  ),
  102 => 
  array (
    'match' => '2019 0B2F',
    'replace' => 'E10F',
  ),
  103 => 
  array (
    'match' => '2019 0B32',
    'replace' => 'E110',
  ),
  104 => 
  array (
    'match' => '2019 0B33',
    'replace' => 'E111',
  ),
  105 => 
  array (
    'match' => '2019 0B35',
    'replace' => 'E112',
  ),
  106 => 
  array (
    'match' => '2019 0B36',
    'replace' => 'E113',
  ),
  107 => 
  array (
    'match' => '2019 0B37',
    'replace' => 'E114',
  ),
  108 => 
  array (
    'match' => '2019 0B38',
    'replace' => 'E115',
  ),
  109 => 
  array (
    'match' => '2019 0B39',
    'replace' => 'E116',
  ),
  110 => 
  array (
    'match' => '2019 E003',
    'replace' => 'E119',
  ),
  111 => 
  array (
    'match' => '2019 E004',
    'replace' => 'E11A',
  ),
  112 => 
  array (
    'match' => '2019 0B35',
    'replace' => 'E078',
  ),
  113 => 
  array (
    'match' => '2019 0B71',
    'replace' => 'E078',
  ),
  114 => 
  array (
    'match' => '0B15 ((E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E090 \\1',
  ),
  115 => 
  array (
    'match' => '0B16 ((E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E091 \\1',
  ),
  116 => 
  array (
    'match' => '0B17 ((E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E092 \\1',
  ),
  117 => 
  array (
    'match' => '0B18 ((E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E093 \\1',
  ),
  118 => 
  array (
    'match' => '0B19 ((E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E094 \\1',
  ),
  119 => 
  array (
    'match' => '0B1A ((E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E095 \\1',
  ),
  120 => 
  array (
    'match' => '0B1B ((E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E096 \\1',
  ),
  121 => 
  array (
    'match' => '0B1C ((E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E097 \\1',
  ),
  122 => 
  array (
    'match' => '0B1D ((E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E098 \\1',
  ),
  123 => 
  array (
    'match' => '0B1E ((E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E099 \\1',
  ),
  124 => 
  array (
    'match' => '0B1F ((E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E09A \\1',
  ),
  125 => 
  array (
    'match' => '0B20 ((E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E09B \\1',
  ),
  126 => 
  array (
    'match' => '0B21 ((E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E09C \\1',
  ),
  127 => 
  array (
    'match' => '0B22 ((E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E09D \\1',
  ),
  128 => 
  array (
    'match' => '0B23 ((E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E09E \\1',
  ),
  129 => 
  array (
    'match' => '0B24 ((E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E09F \\1',
  ),
  130 => 
  array (
    'match' => '0B25 ((E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0A0 \\1',
  ),
  131 => 
  array (
    'match' => '0B26 ((E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0A1 \\1',
  ),
  132 => 
  array (
    'match' => '0B27 ((E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0A2 \\1',
  ),
  133 => 
  array (
    'match' => '0B28 ((E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0A3 \\1',
  ),
  134 => 
  array (
    'match' => '0B2A ((E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0A4 \\1',
  ),
  135 => 
  array (
    'match' => '0B2B ((E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0A5 \\1',
  ),
  136 => 
  array (
    'match' => '0B2C ((E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0A6 \\1',
  ),
  137 => 
  array (
    'match' => '0B2D ((E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0A7 \\1',
  ),
  138 => 
  array (
    'match' => '0B2E ((E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0A8 \\1',
  ),
  139 => 
  array (
    'match' => '0B2F ((E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0A9 \\1',
  ),
  140 => 
  array (
    'match' => '0B32 ((E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0AA \\1',
  ),
  141 => 
  array (
    'match' => '0B33 ((E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0AB \\1',
  ),
  142 => 
  array (
    'match' => '0B35 ((E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0AC \\1',
  ),
  143 => 
  array (
    'match' => '0B36 ((E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0AD \\1',
  ),
  144 => 
  array (
    'match' => '0B37 ((E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0AE \\1',
  ),
  145 => 
  array (
    'match' => '0B38 ((E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0AF \\1',
  ),
  146 => 
  array (
    'match' => '0B39 ((E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0B0 \\1',
  ),
  147 => 
  array (
    'match' => 'E003 ((E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0B1 \\1',
  ),
  148 => 
  array (
    'match' => 'E004 ((E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0B2 \\1',
  ),
  149 => 
  array (
    'match' => '0B15 ((0B01|0B3F|0B56|E06B|E041|E064|E06D|E070|E089|E08C) (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E090 \\1',
  ),
  150 => 
  array (
    'match' => '0B16 ((0B01|0B3F|0B56|E06B|E041|E064|E06D|E070|E089|E08C) (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E091 \\1',
  ),
  151 => 
  array (
    'match' => '0B17 ((0B01|0B3F|0B56|E06B|E041|E064|E06D|E070|E089|E08C) (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E092 \\1',
  ),
  152 => 
  array (
    'match' => '0B18 ((0B01|0B3F|0B56|E06B|E041|E064|E06D|E070|E089|E08C) (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E093 \\1',
  ),
  153 => 
  array (
    'match' => '0B19 ((0B01|0B3F|0B56|E06B|E041|E064|E06D|E070|E089|E08C) (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E094 \\1',
  ),
  154 => 
  array (
    'match' => '0B1A ((0B01|0B3F|0B56|E06B|E041|E064|E06D|E070|E089|E08C) (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E095 \\1',
  ),
  155 => 
  array (
    'match' => '0B1B ((0B01|0B3F|0B56|E06B|E041|E064|E06D|E070|E089|E08C) (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E096 \\1',
  ),
  156 => 
  array (
    'match' => '0B1C ((0B01|0B3F|0B56|E06B|E041|E064|E06D|E070|E089|E08C) (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E097 \\1',
  ),
  157 => 
  array (
    'match' => '0B1D ((0B01|0B3F|0B56|E06B|E041|E064|E06D|E070|E089|E08C) (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E098 \\1',
  ),
  158 => 
  array (
    'match' => '0B1E ((0B01|0B3F|0B56|E06B|E041|E064|E06D|E070|E089|E08C) (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E099 \\1',
  ),
  159 => 
  array (
    'match' => '0B1F ((0B01|0B3F|0B56|E06B|E041|E064|E06D|E070|E089|E08C) (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E09A \\1',
  ),
  160 => 
  array (
    'match' => '0B20 ((0B01|0B3F|0B56|E06B|E041|E064|E06D|E070|E089|E08C) (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E09B \\1',
  ),
  161 => 
  array (
    'match' => '0B21 ((0B01|0B3F|0B56|E06B|E041|E064|E06D|E070|E089|E08C) (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E09C \\1',
  ),
  162 => 
  array (
    'match' => '0B22 ((0B01|0B3F|0B56|E06B|E041|E064|E06D|E070|E089|E08C) (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E09D \\1',
  ),
  163 => 
  array (
    'match' => '0B23 ((0B01|0B3F|0B56|E06B|E041|E064|E06D|E070|E089|E08C) (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E09E \\1',
  ),
  164 => 
  array (
    'match' => '0B24 ((0B01|0B3F|0B56|E06B|E041|E064|E06D|E070|E089|E08C) (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E09F \\1',
  ),
  165 => 
  array (
    'match' => '0B25 ((0B01|0B3F|0B56|E06B|E041|E064|E06D|E070|E089|E08C) (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0A0 \\1',
  ),
  166 => 
  array (
    'match' => '0B26 ((0B01|0B3F|0B56|E06B|E041|E064|E06D|E070|E089|E08C) (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0A1 \\1',
  ),
  167 => 
  array (
    'match' => '0B27 ((0B01|0B3F|0B56|E06B|E041|E064|E06D|E070|E089|E08C) (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0A2 \\1',
  ),
  168 => 
  array (
    'match' => '0B28 ((0B01|0B3F|0B56|E06B|E041|E064|E06D|E070|E089|E08C) (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0A3 \\1',
  ),
  169 => 
  array (
    'match' => '0B2A ((0B01|0B3F|0B56|E06B|E041|E064|E06D|E070|E089|E08C) (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0A4 \\1',
  ),
  170 => 
  array (
    'match' => '0B2B ((0B01|0B3F|0B56|E06B|E041|E064|E06D|E070|E089|E08C) (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0A5 \\1',
  ),
  171 => 
  array (
    'match' => '0B2C ((0B01|0B3F|0B56|E06B|E041|E064|E06D|E070|E089|E08C) (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0A6 \\1',
  ),
  172 => 
  array (
    'match' => '0B2D ((0B01|0B3F|0B56|E06B|E041|E064|E06D|E070|E089|E08C) (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0A7 \\1',
  ),
  173 => 
  array (
    'match' => '0B2E ((0B01|0B3F|0B56|E06B|E041|E064|E06D|E070|E089|E08C) (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0A8 \\1',
  ),
  174 => 
  array (
    'match' => '0B2F ((0B01|0B3F|0B56|E06B|E041|E064|E06D|E070|E089|E08C) (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0A9 \\1',
  ),
  175 => 
  array (
    'match' => '0B32 ((0B01|0B3F|0B56|E06B|E041|E064|E06D|E070|E089|E08C) (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0AA \\1',
  ),
  176 => 
  array (
    'match' => '0B33 ((0B01|0B3F|0B56|E06B|E041|E064|E06D|E070|E089|E08C) (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0AB \\1',
  ),
  177 => 
  array (
    'match' => '0B35 ((0B01|0B3F|0B56|E06B|E041|E064|E06D|E070|E089|E08C) (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0AC \\1',
  ),
  178 => 
  array (
    'match' => '0B36 ((0B01|0B3F|0B56|E06B|E041|E064|E06D|E070|E089|E08C) (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0AD \\1',
  ),
  179 => 
  array (
    'match' => '0B37 ((0B01|0B3F|0B56|E06B|E041|E064|E06D|E070|E089|E08C) (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0AE \\1',
  ),
  180 => 
  array (
    'match' => '0B38 ((0B01|0B3F|0B56|E06B|E041|E064|E06D|E070|E089|E08C) (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0AF \\1',
  ),
  181 => 
  array (
    'match' => '0B39 ((0B01|0B3F|0B56|E06B|E041|E064|E06D|E070|E089|E08C) (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0B0 \\1',
  ),
  182 => 
  array (
    'match' => 'E003 ((0B01|0B3F|0B56|E06B|E041|E064|E06D|E070|E089|E08C) (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0B1 \\1',
  ),
  183 => 
  array (
    'match' => 'E004 ((0B01|0B3F|0B56|E06B|E041|E064|E06D|E070|E089|E08C) (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0B2 \\1',
  ),
  184 => 
  array (
    'match' => '0B15 (0B3C (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E090 \\1',
  ),
  185 => 
  array (
    'match' => '0B16 (0B3C (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E091 \\1',
  ),
  186 => 
  array (
    'match' => '0B17 (0B3C (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E092 \\1',
  ),
  187 => 
  array (
    'match' => '0B18 (0B3C (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E093 \\1',
  ),
  188 => 
  array (
    'match' => '0B19 (0B3C (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E094 \\1',
  ),
  189 => 
  array (
    'match' => '0B1A (0B3C (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E095 \\1',
  ),
  190 => 
  array (
    'match' => '0B1B (0B3C (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E096 \\1',
  ),
  191 => 
  array (
    'match' => '0B1C (0B3C (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E097 \\1',
  ),
  192 => 
  array (
    'match' => '0B1D (0B3C (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E098 \\1',
  ),
  193 => 
  array (
    'match' => '0B1E (0B3C (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E099 \\1',
  ),
  194 => 
  array (
    'match' => '0B1F (0B3C (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E09A \\1',
  ),
  195 => 
  array (
    'match' => '0B20 (0B3C (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E09B \\1',
  ),
  196 => 
  array (
    'match' => '0B21 (0B3C (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E09C \\1',
  ),
  197 => 
  array (
    'match' => '0B22 (0B3C (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E09D \\1',
  ),
  198 => 
  array (
    'match' => '0B23 (0B3C (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E09E \\1',
  ),
  199 => 
  array (
    'match' => '0B24 (0B3C (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E09F \\1',
  ),
  200 => 
  array (
    'match' => '0B25 (0B3C (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0A0 \\1',
  ),
  201 => 
  array (
    'match' => '0B26 (0B3C (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0A1 \\1',
  ),
  202 => 
  array (
    'match' => '0B27 (0B3C (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0A2 \\1',
  ),
  203 => 
  array (
    'match' => '0B28 (0B3C (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0A3 \\1',
  ),
  204 => 
  array (
    'match' => '0B2A (0B3C (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0A4 \\1',
  ),
  205 => 
  array (
    'match' => '0B2B (0B3C (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0A5 \\1',
  ),
  206 => 
  array (
    'match' => '0B2C (0B3C (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0A6 \\1',
  ),
  207 => 
  array (
    'match' => '0B2D (0B3C (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0A7 \\1',
  ),
  208 => 
  array (
    'match' => '0B2E (0B3C (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0A8 \\1',
  ),
  209 => 
  array (
    'match' => '0B2F (0B3C (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0A9 \\1',
  ),
  210 => 
  array (
    'match' => '0B32 (0B3C (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0AA \\1',
  ),
  211 => 
  array (
    'match' => '0B33 (0B3C (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0AB \\1',
  ),
  212 => 
  array (
    'match' => '0B35 (0B3C (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0AC \\1',
  ),
  213 => 
  array (
    'match' => '0B36 (0B3C (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0AD \\1',
  ),
  214 => 
  array (
    'match' => '0B37 (0B3C (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0AE \\1',
  ),
  215 => 
  array (
    'match' => '0B38 (0B3C (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0AF \\1',
  ),
  216 => 
  array (
    'match' => '0B39 (0B3C (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0B0 \\1',
  ),
  217 => 
  array (
    'match' => 'E003 (0B3C (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0B1 \\1',
  ),
  218 => 
  array (
    'match' => 'E004 (0B3C (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0B2 \\1',
  ),
  219 => 
  array (
    'match' => '0B15 (E069 (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E090 \\1',
  ),
  220 => 
  array (
    'match' => '0B16 (E069 (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E091 \\1',
  ),
  221 => 
  array (
    'match' => '0B17 (E069 (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E092 \\1',
  ),
  222 => 
  array (
    'match' => '0B18 (E069 (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E093 \\1',
  ),
  223 => 
  array (
    'match' => '0B19 (E069 (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E094 \\1',
  ),
  224 => 
  array (
    'match' => '0B1A (E069 (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E095 \\1',
  ),
  225 => 
  array (
    'match' => '0B1B (E069 (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E096 \\1',
  ),
  226 => 
  array (
    'match' => '0B1C (E069 (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E097 \\1',
  ),
  227 => 
  array (
    'match' => '0B1D (E069 (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E098 \\1',
  ),
  228 => 
  array (
    'match' => '0B1E (E069 (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E099 \\1',
  ),
  229 => 
  array (
    'match' => '0B1F (E069 (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E09A \\1',
  ),
  230 => 
  array (
    'match' => '0B20 (E069 (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E09B \\1',
  ),
  231 => 
  array (
    'match' => '0B21 (E069 (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E09C \\1',
  ),
  232 => 
  array (
    'match' => '0B22 (E069 (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E09D \\1',
  ),
  233 => 
  array (
    'match' => '0B23 (E069 (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E09E \\1',
  ),
  234 => 
  array (
    'match' => '0B24 (E069 (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E09F \\1',
  ),
  235 => 
  array (
    'match' => '0B25 (E069 (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0A0 \\1',
  ),
  236 => 
  array (
    'match' => '0B26 (E069 (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0A1 \\1',
  ),
  237 => 
  array (
    'match' => '0B27 (E069 (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0A2 \\1',
  ),
  238 => 
  array (
    'match' => '0B28 (E069 (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0A3 \\1',
  ),
  239 => 
  array (
    'match' => '0B2A (E069 (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0A4 \\1',
  ),
  240 => 
  array (
    'match' => '0B2B (E069 (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0A5 \\1',
  ),
  241 => 
  array (
    'match' => '0B2C (E069 (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0A6 \\1',
  ),
  242 => 
  array (
    'match' => '0B2D (E069 (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0A7 \\1',
  ),
  243 => 
  array (
    'match' => '0B2E (E069 (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0A8 \\1',
  ),
  244 => 
  array (
    'match' => '0B2F (E069 (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0A9 \\1',
  ),
  245 => 
  array (
    'match' => '0B32 (E069 (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0AA \\1',
  ),
  246 => 
  array (
    'match' => '0B33 (E069 (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0AB \\1',
  ),
  247 => 
  array (
    'match' => '0B35 (E069 (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0AC \\1',
  ),
  248 => 
  array (
    'match' => '0B36 (E069 (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0AD \\1',
  ),
  249 => 
  array (
    'match' => '0B37 (E069 (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0AE \\1',
  ),
  250 => 
  array (
    'match' => '0B38 (E069 (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0AF \\1',
  ),
  251 => 
  array (
    'match' => '0B39 (E069 (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0B0 \\1',
  ),
  252 => 
  array (
    'match' => 'E003 (E069 (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0B1 \\1',
  ),
  253 => 
  array (
    'match' => 'E004 (E069 (E07B|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E11B|E11C))',
    'replace' => 'E0B2 \\1',
  ),
  254 => 
  array (
    'match' => '0B25 0B3F',
    'replace' => 'E02D',
  ),
  255 => 
  array (
    'match' => '0B27 0B3F',
    'replace' => 'E02E',
  ),
  256 => 
  array (
    'match' => '0B16 0B3F',
    'replace' => 'E02F',
  ),
  257 => 
  array (
    'match' => '(0B3C) 0B4D',
    'replace' => '\\1 E063',
  ),
  258 => 
  array (
    'match' => '(0B3C) E075',
    'replace' => '\\1 E076',
  ),
  259 => 
  array (
    'match' => '2018',
    'replace' => '0B4D',
  ),
  260 => 
  array (
    'match' => '2019',
    'replace' => '0B4D',
  ),
  261 => 
  array (
    'match' => '((0B16|0B17|0B18|0B1F|0B23|0B25|0B27|0B2A|0B2B|0B2E|0B2F|0B37|0B38)) 0B01',
    'replace' => '\\1 E039',
  ),
  262 => 
  array (
    'match' => '((E003|E006|E007|E008|E019|E01A|E00F|E010|E015|E01B|E024|E026|E027|E029|E14A|E02B|E02C|E02D|E02E|E02F|E030|E031|E032|E034|E035|E036|E037)) 0B01',
    'replace' => '\\1 E039',
  ),
  263 => 
  array (
    'match' => '0B3F 0B01',
    'replace' => 'E041',
  ),
  264 => 
  array (
    'match' => 'E03F 0B01',
    'replace' => 'E041',
  ),
  265 => 
  array (
    'match' => 'E040 0B01',
    'replace' => 'E042',
  ),
  266 => 
  array (
    'match' => '0B40 0B01',
    'replace' => 'E044',
  ),
  267 => 
  array (
    'match' => '0B57 0B01',
    'replace' => 'E068',
  ),
  268 => 
  array (
    'match' => '0B56 0B01',
    'replace' => 'E064',
  ),
  269 => 
  array (
    'match' => 'E05D 0B01',
    'replace' => 'E064',
  ),
  270 => 
  array (
    'match' => 'E05E 0B01',
    'replace' => 'E065',
  ),
  271 => 
  array (
    'match' => 'E05F 0B01',
    'replace' => 'E066',
  ),
  272 => 
  array (
    'match' => 'E060 0B01',
    'replace' => 'E067',
  ),
  273 => 
  array (
    'match' => 'E06D 0B01',
    'replace' => 'E089',
  ),
  274 => 
  array (
    'match' => 'E06E 0B01',
    'replace' => 'E08A',
  ),
  275 => 
  array (
    'match' => 'E070 0B01',
    'replace' => 'E08C',
  ),
  276 => 
  array (
    'match' => 'E071 0B01',
    'replace' => 'E08D',
  ),
  277 => 
  array (
    'match' => 'E072 0B01',
    'replace' => 'E08E',
  ),
  278 => 
  array (
    'match' => 'E074 0B01',
    'replace' => 'E08F',
  ),
  279 => 
  array (
    'match' => '((E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FC|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E07B|E084)) 0B3C',
    'replace' => '\\1 E03C',
  ),
  280 => 
  array (
    'match' => '((E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FC|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E07B|E084)) 0B41',
    'replace' => '\\1 E048',
  ),
  281 => 
  array (
    'match' => '((E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FC|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E07B|E084)) 0B42',
    'replace' => '\\1 E04B',
  ),
  282 => 
  array (
    'match' => '((E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FC|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E07B|E084)) 0B43',
    'replace' => '\\1 E04F',
  ),
  283 => 
  array (
    'match' => '((E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FC|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E07B|E084)) E053',
    'replace' => '\\1 E054',
  ),
  284 => 
  array (
    'match' => '((E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FC|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E07B|E084)) E056',
    'replace' => '\\1 E057',
  ),
  285 => 
  array (
    'match' => '((E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FC|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E07B|E084)) E059',
    'replace' => '\\1 E05A',
  ),
  286 => 
  array (
    'match' => '((E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FC|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E07B|E084)) 0B4D',
    'replace' => '\\1 E062',
  ),
  287 => 
  array (
    'match' => '((E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FC|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E07B|E084)) E075',
    'replace' => '\\1 E076',
  ),
  288 => 
  array (
    'match' => '((E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FC|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E07B|E084)) E07B',
    'replace' => '\\1 E07C',
  ),
  289 => 
  array (
    'match' => '((E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FC|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E07B|E084)) E07D',
    'replace' => '\\1 E07F',
  ),
  290 => 
  array (
    'match' => '((E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FC|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E07B|E084)) E082',
    'replace' => '\\1 E083',
  ),
  291 => 
  array (
    'match' => '((E00E|E00F|E010|E011|E012|E013|E01B|E01C|E01E|E01F|E020|E023|E024|E025|E026|E027|E028|E029|E02A|E02B|E02C|E02D|E02E|E02F|E030|E031|E032|E033|E034|E035|E036|E037)) 0B3C',
    'replace' => '\\1 E03C',
  ),
  292 => 
  array (
    'match' => '((E00E|E00F|E010|E011|E012|E013|E01B|E01C|E01E|E01F|E020|E023|E024|E025|E026|E027|E028|E029|E02A|E02B|E02C|E02D|E02E|E02F|E030|E031|E032|E033|E034|E035|E036|E037)) 0B41',
    'replace' => '\\1 E048',
  ),
  293 => 
  array (
    'match' => '((E00E|E00F|E010|E011|E012|E013|E01B|E01C|E01E|E01F|E020|E023|E024|E025|E026|E027|E028|E029|E02A|E02B|E02C|E02D|E02E|E02F|E030|E031|E032|E033|E034|E035|E036|E037)) 0B42',
    'replace' => '\\1 E04B',
  ),
  294 => 
  array (
    'match' => '((E00E|E00F|E010|E011|E012|E013|E01B|E01C|E01E|E01F|E020|E023|E024|E025|E026|E027|E028|E029|E02A|E02B|E02C|E02D|E02E|E02F|E030|E031|E032|E033|E034|E035|E036|E037)) 0B43',
    'replace' => '\\1 E04F',
  ),
  295 => 
  array (
    'match' => '((E00E|E00F|E010|E011|E012|E013|E01B|E01C|E01E|E01F|E020|E023|E024|E025|E026|E027|E028|E029|E02A|E02B|E02C|E02D|E02E|E02F|E030|E031|E032|E033|E034|E035|E036|E037)) E053',
    'replace' => '\\1 E054',
  ),
  296 => 
  array (
    'match' => '((E00E|E00F|E010|E011|E012|E013|E01B|E01C|E01E|E01F|E020|E023|E024|E025|E026|E027|E028|E029|E02A|E02B|E02C|E02D|E02E|E02F|E030|E031|E032|E033|E034|E035|E036|E037)) E056',
    'replace' => '\\1 E057',
  ),
  297 => 
  array (
    'match' => '((E00E|E00F|E010|E011|E012|E013|E01B|E01C|E01E|E01F|E020|E023|E024|E025|E026|E027|E028|E029|E02A|E02B|E02C|E02D|E02E|E02F|E030|E031|E032|E033|E034|E035|E036|E037)) E059',
    'replace' => '\\1 E05A',
  ),
  298 => 
  array (
    'match' => '((E00E|E00F|E010|E011|E012|E013|E01B|E01C|E01E|E01F|E020|E023|E024|E025|E026|E027|E028|E029|E02A|E02B|E02C|E02D|E02E|E02F|E030|E031|E032|E033|E034|E035|E036|E037)) 0B4D',
    'replace' => '\\1 E062',
  ),
  299 => 
  array (
    'match' => '((E00E|E00F|E010|E011|E012|E013|E01B|E01C|E01E|E01F|E020|E023|E024|E025|E026|E027|E028|E029|E02A|E02B|E02C|E02D|E02E|E02F|E030|E031|E032|E033|E034|E035|E036|E037)) E075',
    'replace' => '\\1 E076',
  ),
  300 => 
  array (
    'match' => '((E00E|E00F|E010|E011|E012|E013|E01B|E01C|E01E|E01F|E020|E023|E024|E025|E026|E027|E028|E029|E02A|E02B|E02C|E02D|E02E|E02F|E030|E031|E032|E033|E034|E035|E036|E037)) E07B',
    'replace' => '\\1 E07C',
  ),
  301 => 
  array (
    'match' => '((E00E|E00F|E010|E011|E012|E013|E01B|E01C|E01E|E01F|E020|E023|E024|E025|E026|E027|E028|E029|E02A|E02B|E02C|E02D|E02E|E02F|E030|E031|E032|E033|E034|E035|E036|E037)) E07D',
    'replace' => '\\1 E07F',
  ),
  302 => 
  array (
    'match' => '((E00E|E00F|E010|E011|E012|E013|E01B|E01C|E01E|E01F|E020|E023|E024|E025|E026|E027|E028|E029|E02A|E02B|E02C|E02D|E02E|E02F|E030|E031|E032|E033|E034|E035|E036|E037)) E082',
    'replace' => '\\1 E083',
  ),
  303 => 
  array (
    'match' => '((E00E|E00F|E010|E011|E012|E013|E01B|E01C|E01E|E01F|E020|E023|E024|E025|E026|E027|E028|E029|E02A|E02B|E02C|E02D|E02E|E02F|E030|E031|E032|E033|E034|E035|E036|E037) E069) 0B3C',
    'replace' => '\\1 E03C',
  ),
  304 => 
  array (
    'match' => '((E00E|E00F|E010|E011|E012|E013|E01B|E01C|E01E|E01F|E020|E023|E024|E025|E026|E027|E028|E029|E02A|E02B|E02C|E02D|E02E|E02F|E030|E031|E032|E033|E034|E035|E036|E037) E069) 0B41',
    'replace' => '\\1 E048',
  ),
  305 => 
  array (
    'match' => '((E00E|E00F|E010|E011|E012|E013|E01B|E01C|E01E|E01F|E020|E023|E024|E025|E026|E027|E028|E029|E02A|E02B|E02C|E02D|E02E|E02F|E030|E031|E032|E033|E034|E035|E036|E037) E069) 0B42',
    'replace' => '\\1 E04B',
  ),
  306 => 
  array (
    'match' => '((E00E|E00F|E010|E011|E012|E013|E01B|E01C|E01E|E01F|E020|E023|E024|E025|E026|E027|E028|E029|E02A|E02B|E02C|E02D|E02E|E02F|E030|E031|E032|E033|E034|E035|E036|E037) E069) 0B43',
    'replace' => '\\1 E04F',
  ),
  307 => 
  array (
    'match' => '((E00E|E00F|E010|E011|E012|E013|E01B|E01C|E01E|E01F|E020|E023|E024|E025|E026|E027|E028|E029|E02A|E02B|E02C|E02D|E02E|E02F|E030|E031|E032|E033|E034|E035|E036|E037) E069) E053',
    'replace' => '\\1 E054',
  ),
  308 => 
  array (
    'match' => '((E00E|E00F|E010|E011|E012|E013|E01B|E01C|E01E|E01F|E020|E023|E024|E025|E026|E027|E028|E029|E02A|E02B|E02C|E02D|E02E|E02F|E030|E031|E032|E033|E034|E035|E036|E037) E069) E056',
    'replace' => '\\1 E057',
  ),
  309 => 
  array (
    'match' => '((E00E|E00F|E010|E011|E012|E013|E01B|E01C|E01E|E01F|E020|E023|E024|E025|E026|E027|E028|E029|E02A|E02B|E02C|E02D|E02E|E02F|E030|E031|E032|E033|E034|E035|E036|E037) E069) E059',
    'replace' => '\\1 E05A',
  ),
  310 => 
  array (
    'match' => '((E00E|E00F|E010|E011|E012|E013|E01B|E01C|E01E|E01F|E020|E023|E024|E025|E026|E027|E028|E029|E02A|E02B|E02C|E02D|E02E|E02F|E030|E031|E032|E033|E034|E035|E036|E037) E069) 0B4D',
    'replace' => '\\1 E062',
  ),
  311 => 
  array (
    'match' => '((E00E|E00F|E010|E011|E012|E013|E01B|E01C|E01E|E01F|E020|E023|E024|E025|E026|E027|E028|E029|E02A|E02B|E02C|E02D|E02E|E02F|E030|E031|E032|E033|E034|E035|E036|E037) E069) E075',
    'replace' => '\\1 E076',
  ),
  312 => 
  array (
    'match' => '((E00E|E00F|E010|E011|E012|E013|E01B|E01C|E01E|E01F|E020|E023|E024|E025|E026|E027|E028|E029|E02A|E02B|E02C|E02D|E02E|E02F|E030|E031|E032|E033|E034|E035|E036|E037) E069) E07B',
    'replace' => '\\1 E07C',
  ),
  313 => 
  array (
    'match' => '((E00E|E00F|E010|E011|E012|E013|E01B|E01C|E01E|E01F|E020|E023|E024|E025|E026|E027|E028|E029|E02A|E02B|E02C|E02D|E02E|E02F|E030|E031|E032|E033|E034|E035|E036|E037) E069) E07D',
    'replace' => '\\1 E07F',
  ),
  314 => 
  array (
    'match' => '((E00E|E00F|E010|E011|E012|E013|E01B|E01C|E01E|E01F|E020|E023|E024|E025|E026|E027|E028|E029|E02A|E02B|E02C|E02D|E02E|E02F|E030|E031|E032|E033|E034|E035|E036|E037) E069) E082',
    'replace' => '\\1 E083',
  ),
  315 => 
  array (
    'match' => '((E00E|E00F|E010|E011|E012|E013|E01B|E01C|E01E|E01F|E020|E023|E024|E025|E026|E027|E028|E029|E02A|E02B|E02C|E02D|E02E|E02F|E030|E031|E032|E033|E034|E035|E036|E037) E069 0B01) 0B3C',
    'replace' => '\\1 E03C',
  ),
  316 => 
  array (
    'match' => '((E00E|E00F|E010|E011|E012|E013|E01B|E01C|E01E|E01F|E020|E023|E024|E025|E026|E027|E028|E029|E02A|E02B|E02C|E02D|E02E|E02F|E030|E031|E032|E033|E034|E035|E036|E037) E069 0B01) 0B41',
    'replace' => '\\1 E048',
  ),
  317 => 
  array (
    'match' => '((E00E|E00F|E010|E011|E012|E013|E01B|E01C|E01E|E01F|E020|E023|E024|E025|E026|E027|E028|E029|E02A|E02B|E02C|E02D|E02E|E02F|E030|E031|E032|E033|E034|E035|E036|E037) E069 0B01) 0B42',
    'replace' => '\\1 E04B',
  ),
  318 => 
  array (
    'match' => '((E00E|E00F|E010|E011|E012|E013|E01B|E01C|E01E|E01F|E020|E023|E024|E025|E026|E027|E028|E029|E02A|E02B|E02C|E02D|E02E|E02F|E030|E031|E032|E033|E034|E035|E036|E037) E069 0B01) 0B43',
    'replace' => '\\1 E04F',
  ),
  319 => 
  array (
    'match' => '((E00E|E00F|E010|E011|E012|E013|E01B|E01C|E01E|E01F|E020|E023|E024|E025|E026|E027|E028|E029|E02A|E02B|E02C|E02D|E02E|E02F|E030|E031|E032|E033|E034|E035|E036|E037) E069 0B01) E053',
    'replace' => '\\1 E054',
  ),
  320 => 
  array (
    'match' => '((E00E|E00F|E010|E011|E012|E013|E01B|E01C|E01E|E01F|E020|E023|E024|E025|E026|E027|E028|E029|E02A|E02B|E02C|E02D|E02E|E02F|E030|E031|E032|E033|E034|E035|E036|E037) E069 0B01) E056',
    'replace' => '\\1 E057',
  ),
  321 => 
  array (
    'match' => '((E00E|E00F|E010|E011|E012|E013|E01B|E01C|E01E|E01F|E020|E023|E024|E025|E026|E027|E028|E029|E02A|E02B|E02C|E02D|E02E|E02F|E030|E031|E032|E033|E034|E035|E036|E037) E069 0B01) E059',
    'replace' => '\\1 E05A',
  ),
  322 => 
  array (
    'match' => '((E00E|E00F|E010|E011|E012|E013|E01B|E01C|E01E|E01F|E020|E023|E024|E025|E026|E027|E028|E029|E02A|E02B|E02C|E02D|E02E|E02F|E030|E031|E032|E033|E034|E035|E036|E037) E069 0B01) 0B4D',
    'replace' => '\\1 E062',
  ),
  323 => 
  array (
    'match' => '((E00E|E00F|E010|E011|E012|E013|E01B|E01C|E01E|E01F|E020|E023|E024|E025|E026|E027|E028|E029|E02A|E02B|E02C|E02D|E02E|E02F|E030|E031|E032|E033|E034|E035|E036|E037) E069 0B01) E075',
    'replace' => '\\1 E076',
  ),
  324 => 
  array (
    'match' => '((E00E|E00F|E010|E011|E012|E013|E01B|E01C|E01E|E01F|E020|E023|E024|E025|E026|E027|E028|E029|E02A|E02B|E02C|E02D|E02E|E02F|E030|E031|E032|E033|E034|E035|E036|E037) E069 0B01) E07B',
    'replace' => '\\1 E07C',
  ),
  325 => 
  array (
    'match' => '((E00E|E00F|E010|E011|E012|E013|E01B|E01C|E01E|E01F|E020|E023|E024|E025|E026|E027|E028|E029|E02A|E02B|E02C|E02D|E02E|E02F|E030|E031|E032|E033|E034|E035|E036|E037) E069 0B01) E07D',
    'replace' => '\\1 E07F',
  ),
  326 => 
  array (
    'match' => '((E00E|E00F|E010|E011|E012|E013|E01B|E01C|E01E|E01F|E020|E023|E024|E025|E026|E027|E028|E029|E02A|E02B|E02C|E02D|E02E|E02F|E030|E031|E032|E033|E034|E035|E036|E037) E069 0B01) E082',
    'replace' => '\\1 E083',
  ),
  327 => 
  array (
    'match' => '(E02B) 0B3C',
    'replace' => '\\1 E03C',
  ),
  328 => 
  array (
    'match' => '(E02B) 0B41',
    'replace' => '\\1 E048',
  ),
  329 => 
  array (
    'match' => '(E02B) 0B42',
    'replace' => '\\1 E04B',
  ),
  330 => 
  array (
    'match' => '(E02B) 0B43',
    'replace' => '\\1 E04F',
  ),
  331 => 
  array (
    'match' => '(E02B) E053',
    'replace' => '\\1 E054',
  ),
  332 => 
  array (
    'match' => '(E02B) E056',
    'replace' => '\\1 E057',
  ),
  333 => 
  array (
    'match' => '(E02B) E059',
    'replace' => '\\1 E05A',
  ),
  334 => 
  array (
    'match' => '(E02B) 0B4D',
    'replace' => '\\1 E062',
  ),
  335 => 
  array (
    'match' => '(E02B) E075',
    'replace' => '\\1 E076',
  ),
  336 => 
  array (
    'match' => '(E02B) E07B',
    'replace' => '\\1 E07C',
  ),
  337 => 
  array (
    'match' => '(E02B) E07D',
    'replace' => '\\1 E07F',
  ),
  338 => 
  array (
    'match' => '(E02B) E082',
    'replace' => '\\1 E083',
  ),
  339 => 
  array (
    'match' => '(E02C) 0B3C',
    'replace' => '\\1 E03C',
  ),
  340 => 
  array (
    'match' => '(E02C) 0B41',
    'replace' => '\\1 E048',
  ),
  341 => 
  array (
    'match' => '(E02C) 0B42',
    'replace' => '\\1 E04B',
  ),
  342 => 
  array (
    'match' => '(E02C) 0B43',
    'replace' => '\\1 E04F',
  ),
  343 => 
  array (
    'match' => '(E02C) E053',
    'replace' => '\\1 E054',
  ),
  344 => 
  array (
    'match' => '(E02C) E056',
    'replace' => '\\1 E057',
  ),
  345 => 
  array (
    'match' => '(E02C) E059',
    'replace' => '\\1 E05A',
  ),
  346 => 
  array (
    'match' => '(E02C) 0B4D',
    'replace' => '\\1 E062',
  ),
  347 => 
  array (
    'match' => '(E02C) E075',
    'replace' => '\\1 E076',
  ),
  348 => 
  array (
    'match' => '(E02C) E07B',
    'replace' => '\\1 E07C',
  ),
  349 => 
  array (
    'match' => '(E02C) E07D',
    'replace' => '\\1 E07F',
  ),
  350 => 
  array (
    'match' => '(E02C) E082',
    'replace' => '\\1 E083',
  ),
  351 => 
  array (
    'match' => '(E06B) 0B3C',
    'replace' => '\\1 E03C',
  ),
  352 => 
  array (
    'match' => '(E06B) 0B41',
    'replace' => '\\1 E048',
  ),
  353 => 
  array (
    'match' => '(E06B) 0B42',
    'replace' => '\\1 E04B',
  ),
  354 => 
  array (
    'match' => '(E06B) 0B43',
    'replace' => '\\1 E04F',
  ),
  355 => 
  array (
    'match' => '(E06B) E053',
    'replace' => '\\1 E054',
  ),
  356 => 
  array (
    'match' => '(E06B) E056',
    'replace' => '\\1 E057',
  ),
  357 => 
  array (
    'match' => '(E06B) E059',
    'replace' => '\\1 E05A',
  ),
  358 => 
  array (
    'match' => '(E06B) 0B4D',
    'replace' => '\\1 E062',
  ),
  359 => 
  array (
    'match' => '(E06B) E075',
    'replace' => '\\1 E076',
  ),
  360 => 
  array (
    'match' => '(E06B) E07B',
    'replace' => '\\1 E07C',
  ),
  361 => 
  array (
    'match' => '(E06B) E07D',
    'replace' => '\\1 E07F',
  ),
  362 => 
  array (
    'match' => '(E06B) E082',
    'replace' => '\\1 E083',
  ),
  363 => 
  array (
    'match' => '(0B3C) 0B3C',
    'replace' => '\\1 E03C',
  ),
  364 => 
  array (
    'match' => '(0B3C) 0B41',
    'replace' => '\\1 E048',
  ),
  365 => 
  array (
    'match' => '(0B3C) 0B42',
    'replace' => '\\1 E04B',
  ),
  366 => 
  array (
    'match' => '(0B3C) 0B43',
    'replace' => '\\1 E04F',
  ),
  367 => 
  array (
    'match' => '(0B3C) E053',
    'replace' => '\\1 E054',
  ),
  368 => 
  array (
    'match' => '(0B3C) E056',
    'replace' => '\\1 E057',
  ),
  369 => 
  array (
    'match' => '(0B3C) E059',
    'replace' => '\\1 E05A',
  ),
  370 => 
  array (
    'match' => '(0B3C) 0B4D',
    'replace' => '\\1 E062',
  ),
  371 => 
  array (
    'match' => '(0B3C) E075',
    'replace' => '\\1 E076',
  ),
  372 => 
  array (
    'match' => '(0B3C) E07B',
    'replace' => '\\1 E07C',
  ),
  373 => 
  array (
    'match' => '(0B3C) E07D',
    'replace' => '\\1 E07F',
  ),
  374 => 
  array (
    'match' => '(0B3C) E082',
    'replace' => '\\1 E083',
  ),
  375 => 
  array (
    'match' => '(E075) 0B3C',
    'replace' => '\\1 E03C',
  ),
  376 => 
  array (
    'match' => '(E075) 0B41',
    'replace' => '\\1 E048',
  ),
  377 => 
  array (
    'match' => '(E075) 0B42',
    'replace' => '\\1 E04B',
  ),
  378 => 
  array (
    'match' => '(E075) 0B43',
    'replace' => '\\1 E04F',
  ),
  379 => 
  array (
    'match' => '(E075) E053',
    'replace' => '\\1 E054',
  ),
  380 => 
  array (
    'match' => '(E075) E056',
    'replace' => '\\1 E057',
  ),
  381 => 
  array (
    'match' => '(E075) E059',
    'replace' => '\\1 E05A',
  ),
  382 => 
  array (
    'match' => '(E075) 0B4D',
    'replace' => '\\1 E062',
  ),
  383 => 
  array (
    'match' => '(E075) E075',
    'replace' => '\\1 E076',
  ),
  384 => 
  array (
    'match' => '(E075) E07B',
    'replace' => '\\1 E07C',
  ),
  385 => 
  array (
    'match' => '(E075) E07D',
    'replace' => '\\1 E07F',
  ),
  386 => 
  array (
    'match' => '(E075) E082',
    'replace' => '\\1 E083',
  ),
  387 => 
  array (
    'match' => '(E075) 0B41',
    'replace' => '\\1 E048',
  ),
  388 => 
  array (
    'match' => '(E075) 0B42',
    'replace' => '\\1 E04B',
  ),
  389 => 
  array (
    'match' => '(E075) 0B43',
    'replace' => '\\1 E04F',
  ),
  390 => 
  array (
    'match' => '(E075) E053',
    'replace' => '\\1 E054',
  ),
  391 => 
  array (
    'match' => '(E075) E056',
    'replace' => '\\1 E057',
  ),
  392 => 
  array (
    'match' => '(E075) E059',
    'replace' => '\\1 E05A',
  ),
  393 => 
  array (
    'match' => 'E14D 0B01',
    'replace' => 'E08B',
  ),
  394 => 
  array (
    'match' => 'E14D E038',
    'replace' => 'E08B',
  ),
  395 => 
  array (
    'match' => 'E14D E039',
    'replace' => 'E08B',
  ),
  396 => 
  array (
    'match' => 'E14D E149',
    'replace' => 'E08B',
  ),
  397 => 
  array (
    'match' => '((E00E|E00F|E010|E011|E012|E013|E01B|E01C|E01E|E01F|E020|E023|E024|E025|E026|E027|E028|E029|E02A|E02B|E02C|E02D|E02E|E02F|E030|E031|E032|E033|E034|E035|E036|E037)) E0FD',
    'replace' => '\\1 E11E',
  ),
  398 => 
  array (
    'match' => '((E00E|E00F|E010|E011|E012|E013|E01B|E01C|E01E|E01F|E020|E023|E024|E025|E026|E027|E028|E029|E02A|E02B|E02C|E02D|E02E|E02F|E030|E031|E032|E033|E034|E035|E036|E037)) E109',
    'replace' => '\\1 E121',
  ),
  399 => 
  array (
    'match' => '((E00E|E00F|E010|E011|E012|E013|E01B|E01C|E01E|E01F|E020|E023|E024|E025|E026|E027|E028|E029|E02A|E02B|E02C|E02D|E02E|E02F|E030|E031|E032|E033|E034|E035|E036|E037)) E110',
    'replace' => '\\1 E11F',
  ),
  400 => 
  array (
    'match' => '((E00E|E00F|E010|E011|E012|E013|E01B|E01C|E01E|E01F|E020|E023|E024|E025|E026|E027|E028|E029|E02A|E02B|E02C|E02D|E02E|E02F|E030|E031|E032|E033|E034|E035|E036|E037)) E111',
    'replace' => '\\1 E120',
  ),
  401 => 
  array (
    'match' => '((E00E|E00F|E010|E011|E012|E013|E01B|E01C|E01E|E01F|E020|E023|E024|E025|E026|E027|E028|E029|E02A|E02B|E02C|E02D|E02E|E02F|E030|E031|E032|E033|E034|E035|E036|E037)) E11C',
    'replace' => '\\1 E122',
  ),
  402 => 
  array (
    'match' => '(E076) 0B41',
    'replace' => '\\1 E048',
  ),
  403 => 
  array (
    'match' => '(E076) 0B42',
    'replace' => '\\1 E04B',
  ),
  404 => 
  array (
    'match' => '(E076) 0B43',
    'replace' => '\\1 E04F',
  ),
  405 => 
  array (
    'match' => '(E076) E053',
    'replace' => '\\1 E054',
  ),
  406 => 
  array (
    'match' => '(E076) E056',
    'replace' => '\\1 E057',
  ),
  407 => 
  array (
    'match' => '(E076) E059',
    'replace' => '\\1 E05A',
  ),
  408 => 
  array (
    'match' => '(E076) 0B4D',
    'replace' => '\\1 E062',
  ),
  409 => 
  array (
    'match' => '(E090) E10E',
    'replace' => '\\1 E11C',
  ),
  410 => 
  array (
    'match' => '(E0B1) E10E',
    'replace' => '\\1 E11C',
  ),
  411 => 
  array (
    'match' => '(E09F) E10E',
    'replace' => '\\1 E11C',
  ),
  412 => 
  array (
    'match' => '(E092) E10E',
    'replace' => '\\1 E11C',
  ),
  413 => 
  array (
    'match' => '(E0A8) E10E',
    'replace' => '\\1 E11C',
  ),
  414 => 
  array (
    'match' => '(E0A3) E106',
    'replace' => '\\1 E0FC',
  ),
  415 => 
  array (
    'match' => '(E0AF) E106',
    'replace' => '\\1 E0FC',
  ),
  416 => 
  array (
    'match' => '((0B16|0B17|0B18|0B1F|0B23|0B25|0B27|0B2A|0B2B|0B2E|0B2F|0B37|0B38)) 0B01',
    'replace' => '\\1 E039',
  ),
  417 => 
  array (
    'match' => '(0B10) 0B01',
    'replace' => '\\1 E149',
  ),
  418 => 
  array (
    'match' => '(0B14) 0B01',
    'replace' => '\\1 E149',
  ),
  419 => 
  array (
    'match' => '(E069) 0B01',
    'replace' => '\\1 E149',
  ),
  420 => 
  array (
    'match' => '(E06A) 0B01',
    'replace' => '\\1 E149',
  ),
  421 => 
  array (
    'match' => '(E06B) 0B01',
    'replace' => '\\1 E149',
  ),
  422 => 
  array (
    'match' => '(E06C) 0B01',
    'replace' => '\\1 E149',
  ),
  423 => 
  array (
    'match' => '0B21 0B4D (E035)',
    'replace' => 'E12F \\1',
  ),
  424 => 
  array (
    'match' => ' (E035)',
    'replace' => ' \\1',
  ),
  425 => 
  array (
    'match' => ' (E035)',
    'replace' => ' \\1',
  ),
  426 => 
  array (
    'match' => ' (E035)',
    'replace' => ' \\1',
  ),
  427 => 
  array (
    'match' => ' (E035)',
    'replace' => ' \\1',
  ),
  428 => 
  array (
    'match' => ' (E035)',
    'replace' => ' \\1',
  ),
);
?>