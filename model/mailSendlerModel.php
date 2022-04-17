<?php

class MailSendlerModel
{
    function __construct()
    {
    }

    function SendMail($address)
    {
        $address = "camalovalsu@outlook.com"; 
        // Сообщение
        $message = "Line 1\r\nLine 2\r\nLine 3";

        // На случай если какая-то строка письма длиннее 70 символов мы используем wordwrap()
        $message = wordwrap($message, 70, "\r\n");

        // Отправляем
        $isSended = mail($address, 'My Subject', $message);

        return $isSended;
    }
}
