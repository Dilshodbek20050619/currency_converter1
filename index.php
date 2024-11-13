<?php

require "current.php";
$currency=new Currency();
$currencies=$currency->getCurrencies();

require "views/currency-convertor.php";