<?php

include "lib/db.php";
include "lib/base.php";

//$this->mysqli = new mysqli("localhost", "blog", "fGM37hbXQ3YMputQ", "blog");


new app(substr($_SERVER['REQUEST_URI'],2));

