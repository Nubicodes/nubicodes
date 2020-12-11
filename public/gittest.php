<?php

foreach (getallheaders() as $name => $value) { 
    echo "$name: $value <br>"; 
} 

echo $_POST['payload'];
echo $_POST['action'];
echo $_POST['sender'];
echo $_POST['repository'];
echo $_POST['organization'];
echo $_POST['installation'];

?>