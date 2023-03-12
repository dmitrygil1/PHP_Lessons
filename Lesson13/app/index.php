<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'/PHP_Lessons/Lesson13/app/template/header.php');

?>

<?=
helperDate\getDateAgo(5);
?>
<br/>

<?php
require ($_SERVER['DOCUMENT_ROOT'].'/PHP_Lessons/Lesson13/app/template/footer.php');
?>