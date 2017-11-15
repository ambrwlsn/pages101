<?php

require ('page.php');

class Contact extends Page
{

    protected $email = 'ambrwlsn90@gmail.com';

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        return $this->email = $email;
    }
}