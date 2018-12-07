<?php

$path = "src/router/";

require_once($path."Router.php");
require_once($path."MainRouter.php");
require_once($path."UserRouter.php");
require_once($path."LoginRouter.php");
require_once($path."AdminRouter.php");

$mainRouter = new MainRouter();
$userRouter = new UserRouter();
$loginRouter = new LoginRouter();
$adminRouter = new AdminRouter();
