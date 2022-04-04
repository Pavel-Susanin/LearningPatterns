<?php

class UserBuilder extends Builder
{
    public function __construct()
    {
        $this->createUser();
    }

    public function createUser()
    {
        $this->user = new User;
    }

    public function addName($userName)
    {
        $this->user->setName($userName);
    }

    public function addSurname($userSurname)
    {
        $this->user->setSurname($userSurname);
    }

    public function addPayment($userPayment)
    {
        $this->user->setPayment($userPayment);
    }
}


