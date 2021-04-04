<?php

shell_exec('git clone https://github.com/elistero/TRPO.git core');

shell_exec('git symbolic-ref --short -q HEAD>version');

?>