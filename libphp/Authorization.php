<?php
include_once './libphp/Base.php';

class Authorization
{
    public function authorize($post){
        $base = new Base();
        $QS = "SELECT * FROM `users` WHERE `email` = '" . $post['email'] . "' AND `password` = '" . $post['password'] . "'";

        $base->Query($QS);
        if (!empty($base->Items[0])){
            $data = new stdClass();
            $data->fio = $base->Items[0]->fio;
            $data->email = $base->Items[0]->email;
            $data->roots = $base->Items[0]->roots;
            $data->id = $base->Items[0]->id;
            $_SESSION['user'] = $data;
            return true;
        }else{
            return false;
        }

    }


    public function register($post){
        $errors = [];
        $base = new Base();

        if (!$post['name']){
            $errors['name'] = 'The name is incorrect!';
        }

        if (!preg_match('#\+?(\(?38\)?)?0[1-9][0-9\-]{6,9}#', $post['phone'])){
            $errors['phone'] = 'The phone is incorrect!';
        }

        if (!preg_match('#(.+?)@(.+?)\.(.+?)#', $post['email'])){
            $errors['email'] = 'The email is incorrect!';
        }
        $QS = "SELECT * FROM `users` WHERE `email` = '" . $post['email'] . "'";
        $base->Query($QS);

        if (count($base->Items)){
            $errors['email'] = 'This email is registered!';
        }

        if (strlen($post['password']) < 8){
            $errors['password'] = 'The passwords is too short!';
        }

        if ($post['password'] !== $post['confirm-password']){
            $errors['confirm'] = 'The passwords are different!';
        }

        if (!count($errors)){
            $QS = "INSERT INTO `users`(`fio`, `phone`, `email`, `password`, `roots`) VALUES('" . $post['name'] . "', '" . $post['phone'] . "', '" . $post['email'] . "', '" . $post['password'] . "', '0')";
            if ($base->Query($QS)){
                if ($this->authorize($post)){
                    header('Location: /');
                    exit();
                }else{
                    header('Location: /registration');
                    exit();
                }
            }else{
                $errors['error'] = 'Somethig going wrong';
                return $errors;
            }

        }else{
           return $errors;
        }


    }

}