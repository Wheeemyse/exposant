<?php

$path = "src/controler/";

require_once($path."Controler.php");
require_once($path."MainControler.php");
require_once($path."LoginControler.php");
require_once($path."UserControler.php");
require_once($path."AdminControler.php");

$mainControler = new MainControler();
$loginControler = new LoginControler();
$userControler = new UserControler();
$adminControler = new AdminControler();
