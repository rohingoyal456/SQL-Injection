<?php

// You will need to send the $_POST data along with the redirect
$first=$_GET['insert'];
echo $first;
if($first=='insert' && $first!='null'){
    header("Location: http://localhost/sql-injection-manav/SQL%20injection%20UI/UI%20design/insertPage/insertStudentDetailPage.html");
    exit();
}

?>
