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
}