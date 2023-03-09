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
        return preg_match("/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/",$password);
    }


}