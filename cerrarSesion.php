<?php
session_start();

// Destruye todas las variables de sesión
session_unset();

// Finalmente, destruye la sesión
session_destroy();

// Envía una respuesta de éxito a la solicitud AJAX
echo "success";
exit;
?>
