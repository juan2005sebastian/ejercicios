<?php
interface Notificable {
    public function enviarNotificacion($mensaje);
}

class EmailNotificacion implements Notificable {
    public function enviarNotificacion($mensaje) {
        echo "Notificación enviada por email: " . $mensaje . "<br>";
    }
}

class SmsNotificacion implements Notificable {
    public function enviarNotificacion($mensaje) {
        echo "Notificación enviada por SMS: " . $mensaje . "<br>";
    }
}

// Crear instancias y enviar notificaciones
$emailNotif = new EmailNotificacion();
$emailNotif->enviarNotificacion("Hola por email");

$smsNotif = new SmsNotificacion();
$smsNotif->enviarNotificacion("Hola por SMS");

