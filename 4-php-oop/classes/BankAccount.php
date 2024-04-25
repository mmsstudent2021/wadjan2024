<?php


class BankAccount
{

    private $accountHolderName;
    private $balance = 0;


    function __construct($name, $initialDeposit)
    {
        $this->accountHolderName = $name;
        $this->balance += $initialDeposit;
    }


    // getter
    public function checkBalance()
    {
        return $this->accountHolderName . " has " . $this->balance . " kyat";
    }

    // setter
    public function deposit($amount)
    {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }

    public function onlineDeposit($where, $amount)
    {
        $this->balance += $amount;
        echo $this->accountHolderName . " deposited " . $amount . " from " . $where;
    }

    public function withdraw($amount)
    {
        if ($this->balance >= $amount) {
            $this->balance -= $amount;
        }
    }

    public function transfer($to, $amount)
    {
        if ($this->balance >= $amount) {
            $this->balance -= $amount;
            echo $this->accountHolderName . " transfer " . $amount . " kyat to " . $to;
        }
    }


    // getter 
    // public function getBalance()
    // {
    //     return $this->balance;
    // }
    // // setter
    // public function setBalance($amount){
    //     $this->balance = $amount;
    // }
}
