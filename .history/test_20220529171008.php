<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
print $name . "さんですね";
