<?php

class User{
    public $username;
    public $password;
    public $email;
    public $firstname;
    public $lastname;
    public $course;
    public $section;

    function __construct($username,$password,$email,$firstname,$lastname,$course,$section){
        $this->username=$username;
        $this->password=$password;
        $this->email=$email;
        $this->firstname=$firstname;
        $this->lastname=$lastname;
        $this->course=$course;
        $this->section=$section;
    }

    function validate(){
        if(empty(trim($this->username)) or empty(trim($this->password)) or empty(trim($this->email)) or empty(trim($this->firstname)) or empty(trim($this->lastname)) or empty(trim($this->course)) or empty(trim($this->section))) {
            throw new Exception("All fields are required. Try again!<a href='signup.php'>Go back to signup again</a>?");
        }
        if (strlen($this->password) <8 ){  
            throw new Exception("Password must be atleast 8 characters <a href='signup.php'>Go back to signup again</a>"); 
        }
        if (!preg_match("/^[a-zA-Z0-9]+$/", $this->username)){
            throw new Exception ("Username can only contain letter, number! <a href='signup.php'>Go back to signup again</a>");
        }
        if (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z]+\.[a-zA-Z]{2,}$/", $this->email)) {
            throw new Exception ("Email is invalid <br>");
        }
        if(filter_var($this->email, FILTER_VALIDATE_EMAIL) === false) {
            throw new Exception ("Email is invalid <br>");

        }
        if (!preg_match("/^[a-zA-Z\s]+$/", $this->firstname.$this->lastname)) {
            throw new Exception ("First Name or Last Name contains a special character. <br>");
        }
    }
}
?>