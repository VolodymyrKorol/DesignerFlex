<?php

include_once 'libphp/Base.php';

class User
{
    public function getUsers($id = false){
        $base = new Base();

        if ($id){
            $QS = "SELECT * FROM `users` WHERE `id` = '" . $id . "'";
        }else{
            $QS = "SELECT * FROM `users`";
        }

        $base->Query($QS);
        return $base->Items;
    }
    public function deleteUser($post){
        $base =  new Base();
        $QS = "DELETE FROM `users` WHERE `id` = '" . $post['id'] . "'";
        return $base->Query($QS);
    }
    public function updateUser($post){
        $base =  new Base();

        $errors = [];
        if (!$post['fio']){
            $errors['name'] = 'The name is incorrect!';
        }

        if (!preg_match('#^\+?(\(?38\)?)?0[1-9]([0-9\-]{6,9})$#', $post['phone'])){
            $errors['phone'] = 'The phone is incorrect!';
        }

        if (!preg_match('#(.+?)@(.+?)\.(.+?)#', $post['email'])){
            $errors['email'] = 'The email is incorrect!';
        }

        if (strlen($post['password']) < 8){
            $errors['password'] = 'The passwords is too short!';
        }

        if (!count($errors)){
            $QS = "UPDATE `users` SET `fio` = '" . $post['fio'] . "',`phone` = '" . $post['phone'] . "', `email` = '" . $post['email'] . "', `roots` = '" . $post['roots'] . "', `password` = '" . $post['password'] . "' WHERE `id` = '" . $post['id'] . "'";
            if ($base->Query($QS)){
                return ['Yes'];
            }else{
                $errors['error'] = 'Somethig going wrong!';
                return $errors;
            }
        }else{
            return $errors;
        }
    }
}