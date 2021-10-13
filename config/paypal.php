<?php
return [
    'client_id' => 'AWIbN7e6zOEjMUS0CGDu0OYSWe66zngaFBzzv0XXnsbAQSt95zGA9oM9eSPtifNOONcJ3xSG07nBzU2U',
	'secret' => 'EGrCXF1l5kcR3LK1FInJWyuy_TA6vFulfj0VOilYRExQKB1K9nzHUNHr5Agz6TZTcwcf_G2y1ShuUPt1',
    'settings' => array(
        'mode' => 'sandbox',
        'http.ConnectionTimeOut' => 1000,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path() . '/logs/paypal.log',
        'log.LogLevel' => 'FINE'
    ),
];