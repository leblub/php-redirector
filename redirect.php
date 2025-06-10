<?php
$urls = ['https://docs.google.com/document/d/13REdgUPqEAtuctizVS-GOYWYH2vrgvgFWqlRQ-mcxr0/edit?usp=sharing', 'https://docs.google.com/document/d/1jt-9aifC3J-mathl8U40jtLBNgYbvm7ExOia7OdCvi4/edit?usp=sharing'];
$random_url = $urls[array_rand($urls)];
header("Location: $random_url");
exit;
