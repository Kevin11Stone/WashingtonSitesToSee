<?php
class Validate
{
    static function validFirstName($firstName) {
        return preg_match("/^[a-zA-Z-' ]*$/", $firstName);
    }
    static function validLastName($lastName) {
        return preg_match("/^[a-zA-Z-' ]*$/", $lastName);
    }
    static function validPhone($phone) {
    return preg_match("/^[0-9]{3}[0-9]{3}[0-9]{4}$/", $phone);
}
    static function validEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    static function validPassword($password) {
        $password = test_input($password);
        if(!empty($password)) {
            if (strlen($password) <= 8) {
                return "Your Password Must Contain At Least 8 Characters!";
            }
            elseif(!preg_match("#[0-9]+#",$password)) {
                return "Your Password Must Contain At Least 1 Number!";
            }
            elseif(!preg_match("#[A-Z]+#",$password)) {
                return "Your Password Must Contain At Least 1 Capital Letter!";
            }
            elseif(!preg_match("#[a-z]+#",$password)) {
                return "Your Password Must Contain At Least 1 Lowercase Letter!";
            }
            elseif(!preg_match("#[\W]+#",$password)) {
                return "Your Password Must Contain At Least 1 Special Character!";
            }
        } else {
            return "Please enter password";
        }
    }


}