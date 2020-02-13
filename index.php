<?php
$output = shell_exec(wget https://download.contao.org/contao-manager/stable/contao-manager.phar);
echo "<pre>$output</pre>";
