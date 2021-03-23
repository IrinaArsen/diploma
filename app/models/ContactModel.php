<?php

    require 'C:/MAMP/htdocs/Mailer/phpmailer/PHPMailerAutoload.php';




       $name = $_POST['name'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $message = $_POST['message'];


        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'arsen.irisha';
        $mail->Password = 'fhg213';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = '465';

        $mail->CharSet = 'UTF-8';
        $mail->From = 'arsen.irisha@gmail.com';
        $mail->FromName = 'Ирина';
        $mail->addAddress('example8@i.ua');
        $mail->addAddress('example8@mail.ru');
        $mail->addCC('example978@gmail.com');

        $mail->isHTML(true);

        $mail->Subject = 'Тема письма';
        $mail->Body = 'Привет';
        $mail->AltBody = 'Привет. Альтернативное письмо';

  /*  class ContactModel {

    private $name;
    private $email;
    private $age;
    private $message;

    public function setData($name, $email, $age, $message) {
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
        $this->message = $message;
    }

    public function validForm() {
        if (strlen($this->name) < 3)
            return "Имя слишком короткое";
        else if (strlen($this->email) < 3)
            return "Email слишком короткий";
        else if (!is_numeric($this->age) || $this->age <= 0 || $this->age > 90)
            return "Вы ввели не возраст";
        else if (strlen($this->message) < 10)
            return "Сообщение слишком короткое";
        else
            return "Верно";
    }

}*/

        if ($mail->send()) {
            echo 'Письмо отправлено';

        } else {
            echo 'Сообщение было не отправлено! ' . 'Причина: ' . $mail->ErrorInfo;

        }





