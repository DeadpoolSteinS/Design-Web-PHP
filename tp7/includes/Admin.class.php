<?php
// https://novaldis.c120.me/tp6-prakdesweb/login.php
require 'DB.class.php';

class Admin extends DB
{
    function __construct($db_host = '', $db_user = '', $db_password = '', $db_name = '')
    {
        session_start();
        $this->DB($db_host, $db_user, $db_password, $db_name);
    }

    function getDetailAdmin($id)
    {
        $query = "SELECT * FROM admin WHERE username = '$id'";
        return $this->execute($query);
    }

    function checkCookie()
    {
        if (isset($_COOKIE["username"]) && isset($_COOKIE["password"])) {
            // get information about username cookie on database
            $this->getDetailAdmin($_COOKIE["username"]);
            $data = $this->getResult();

            // compare cookie and database
            if ($data != NULL) {
                if ($data[0]["password"] == $_COOKIE["password"]) $_SESSION["login"] = true;
            }
        }
    }

    function login()
    {
        // init
        $username = $_POST["username"];
        $password = $_POST["password"];

        // get information about username in database
        $this->getDetailAdmin($username);
        $dataUsername = $this->getResult();

        // check username
        if ($dataUsername == NULL) return "Username is not registered!";
        if ($password != $dataUsername[0]["password"]) return "Password is wrong";

        // set session and cookie
        $_SESSION["login"] = true;
        setcookie("username", $username, time() + 3600);
        setcookie("password", $dataUsername[0]["password"], time() + 3600);

        header("Location: index.php");
        exit;

        return "Login Successful";
    }

    function signup()
    {
        // init
        $username = $_POST["username"];
        $password = $_POST["password"];
        $confirm  = $_POST["confirm"];

        // get information about username in database
        $this->getDetailAdmin($username);
        $dataUsername = $this->getResult();

        // check registration data
        if ($dataUsername != NULL) return "Username is taken";
        else if ($password !== $confirm) return "Password is not same";

        // add data user to database
        $query = "INSERT INTO admin VALUES (NULL, '$username', '$password')";
        $this->execute($query);
        return ($this->changed() > 0) ? "Registration Successful" : "Registration Failed";
    }

    function logout()
    {
        // delete session
        $_SESSION = [];
        session_destroy();
        session_unset();

        // delete cookie
        setcookie("username", "", time() - 3600);
        setcookie("password", "", time() - 3600);

        // back to login page
        header("Location: login.php");
        exit;
    }
}
