<?php

class User
{
    private string $name;
    private string $surname;
    private int $payment;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    public function setPayment($payment)
    {
        $this->payment = $payment;
    }
}