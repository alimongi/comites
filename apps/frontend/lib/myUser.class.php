<?php

class myUser extends sfGuardSecurityUser
{
    public function getIdsEstados($rsEstados) {
        $_ids = array();
        if (count($rsEstados) > 0) {
            foreach ($rsEstados as $value) {
                $_ids[] = $value->getId();
            }
        }  else {
            $_ids[] = 0;
        }
        return $_ids;
    }

    public function cambiarPassword($user, $password, $new_pass, $confirm) {
        if($user->checkPassword($password)) {
            if($new_pass == $confirm) {
                $user->setPassword($new_pass);
                $user->save();
                return 'Su contraseña ha sido cambiada con éxito';
            } else {
                return 'Las contraseñas no coinciden';
            }
        } else {
            return 'Contraseña actual incorrecta';
        }
    }

}