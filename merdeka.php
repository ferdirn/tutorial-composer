<?php
require "vendor/autoload.php";

use Carbon\Carbon;

date_default_timezone_set("Asia/Jakarta");

$date = Carbon::createFromDate(1945, 8, 17);

printf("Indonesia independence day is %s\n", $date->diffForHumans());
