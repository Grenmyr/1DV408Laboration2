<?php
class LoginView {
    private $message;


    public  function __construct(){

    }
    public function GetUsername(){
        if(isset($_POST["username"])){
        return($_POST["username"]);
        }
    }

    Public function GetPassword(){
        if(isset($_POST["password"])){
        return($_POST["password"]);
        }
    }

    Public function wantCookie() {
        if(isset($_POST["LoginView::Checked"])){
            return true;
        }
        return false;
    }

    public  function successMSG(){
        $this->message = "Du har nu loggat ut.";
    }


    public function FailedMSG($username,$password) {
        if($username===""){
        $this->message = 'Användarnamn saknas: ';
        }
        else if($password === ""){
            $this->message .= "Lösenord saknas";
        }
        else{
            $this->message .= "Felaktigt användarnamn och/eller lösenord.";
        }
    }
    public function failedCookieMSG(){
        $this->message = "Felaktig information i cookie.";
    }


    // Return true if submit.
    public function userSubmit(){
        return isset($_POST['submitButton']);
    }

    public function show (){
        $username = $this->GetUsername();
        $password = $this->GetPassword();
        $ret ="<h1>Laborationskod dg222cs</h1>
        <h2>
    Ej Inloggad
</h2>
<p> För testning:Kakors tid är 2 minuter.</p>
<form enctype=multipart/form-data method=post action='?Login'>

    <fieldset>
        <legend>
            Login - Skriv in användarnamn och lösenord
        </legend>
        <p>$this->message<p>
        <label>
        Användarnamn:
        </label>
        <input type='text' size='25' name='username' value='$username'>
        <label> Lösenord </label>
        <input type='password' size='25' name='password' value='$password'>
        <label>Håll mig inloggad</label>
        <input type='checkbox' name='LoginView::Checked' id='AutologinID'/>
        <input type='submit' value='Logga in' name='submitButton'>
    </fieldset>
</form>

        ";
        return $ret;
    }
}
/**
 * Created by PhpStorm.
 * User: dav
 * Date: 2014-09-06
 * Time: 13:05
 */ 