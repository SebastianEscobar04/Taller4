<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Aquí puedes agregar validación y envío de email

    if (!empty($name) && !empty($email) && !empty($message)) {
        // Enviar el correo
        $to = "tuemail@dominio.com"; // Cambia a tu correo real
        $subject = "Nuevo mensaje de contacto";
        $body = "Nombre: $name\nCorreo: $email\nMensaje: $message";
        $headers = "From: $email";

        if (mail($to, $subject, $body, $headers)) {
            echo "Mensaje enviado correctamente.";
        } else {
            echo "Hubo un error al enviar el mensaje.";
        }
    } else {
        echo "Por favor, complete todos los campos.";
    }
} else {
    echo "Método no permitido.";
}
?>
