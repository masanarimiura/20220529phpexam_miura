<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
print "「"<div class=""></div>$name . "さんご登録ありがとうございます」";
