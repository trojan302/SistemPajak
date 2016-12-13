<?php

session_start();
session_destroy();

$hosted = "http://anonymous/SistemPajak/";

echo "<meta http-equiv='refresh' content='0; url=$hosted' />";