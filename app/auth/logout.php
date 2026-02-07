<?php

session_destroy();
header('Location: ../auth/login');
exit;
?>