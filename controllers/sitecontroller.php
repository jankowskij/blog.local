<?php 

namespace Controllers;

class SiteController 
{
    public function actionContact()
    {   
        $mail = '';
        $subject = '';
        $message = '';
        $errors = false;

        if (isset($_POST['submit'])) {
            $mail = $_POST['mail'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];

            if (!\models\User::checkEmail($mail)) {
                $errors[] = 'Неверно указанный email-адрес';
            }

            $rezult = mail($mail, $subject, $message);

        }
        
        require_once (ROOT.'/view/feedback/contactform.php');
        return true;
    }
}