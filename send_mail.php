use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Подключение PHPMailer через Composer

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $company = htmlspecialchars($_POST["company"]);
    $name = htmlspecialchars($_POST["name"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.yandex.ru'; // Укажите SMTP-сервер (например, smtp.gmail.com)
        $mail->SMTPAuth   = true;
        $mail->Username   = 'your_email@yandex.ru'; // Ваш email
        $mail->Password   = 'your_password'; // Пароль от email
        $mail->SMTPSecure = 'ssl'; 
        $mail->Port       = 465;

        $mail->setFrom($email, $name);
        $mail->addAddress('k.savchenko@jenty-spedition.com');

        $mail->isHTML(false);
        $mail->Subject = "Новая заявка с сайта ООО `СПЕЦАВТОГРУЗ`";
        $mail->Body    = "Название компании: $company\nИмя: $name\nТелефон: $phone\nE-mail: $email\nСообщение:\n$message\n";

        $mail->send();
        echo "success";
    } catch (Exception $e) {
        echo "error: {$mail->ErrorInfo}";
    }
} else {
    echo "Метод запроса не поддерживается.";
}
