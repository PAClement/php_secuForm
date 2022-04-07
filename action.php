<?php
session_start();

function errorRedirect()
{
    header('Location: form.php');
    exit();
}

function formCheck(array $data): bool
{
    $isOk = true;

    foreach ($data as $key => $value) {
        $value = htmlspecialchars($value);

        switch ($key) {
            case 'email':
                $value = filter_var($value, FILTER_SANITIZE_EMAIL);
                if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
                    $isOk = false;
                }
                break;
            case 'pass':
                if (!preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,})$/", $value) == 1) {
                    $isOk = false;
                }
                break;
            case 'name' || 'lastname':
                if (!preg_match("/^[a-zA-Z][\p{L}-]*$/", $value) == 1) {
                    $isOk = false;
                }
                break;
            default:
                $isOk = false;
                break;
        }
    }

    return $isOk;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST)) {
    if (formCheck($_POST)) {
        //traitement du formulaire 
        echo 'tout est ok';
    } else {
        errorRedirect();
    }
} else {
    errorRedirect();
}
