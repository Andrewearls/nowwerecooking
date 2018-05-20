<?php
// var_dump($_POST);
ini_set("SMTP","smtp.gmail.com");
ini_set("sendmail_from","andrew@nowwerecooking");
mail('andrew@nowwerecooking.io','Contact Request', $_POST['message']);
header("nowwerecooking.test");
?>