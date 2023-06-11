<?php

interface HasLockerBox{
     public function numberOfLockerBOx();
}

abstract class bank_account{
    protected $amount;
    protected $interestRate;

    public function __construct($opening_balance)
    {
        $this->amount = $opening_balance;

    }
   public  function withdraw ($withdraw_amount){
    if ($this->amount < $withdraw_amount) {
        echo "Insufficient funds <br>";
        return;
        }
    $this->amount=$this->amount-$withdraw_amount;
        echo"withdraw amount $withdraw_amount <br>";
    }
     public function deposit($deposit_amount){
        $this->amount=$deposit_amount;
     }
     public function check_balance(){
        echo "your balance is :".$this->amount ."<br>";
     }
     public function calculateInterest($year){
        echo"interest:".($this->amount * $year *$this->interestRate)/100;
     }
}

// $john_bank_account =new bank_account();
// $john_bank_account->withdraw(2000); // -> is used as . in java 

// $ben_bank_account =new bank_account(2000);
// // $ben_bank_account -> deposit(2000);
// $ben_bank_account -> check_balance();
// $ben_bank_account->withdraw(10000);
// $ben_bank_account->check_balance();

class FixedDepositAccount extends bank_account implements HasLockerBox{
    protected $interestRate=12;
    public function withdraw($withdraw_amount)
    {
        echo"cannot withdraw in fixed account";
        return;
    }
    
     public function NUmberOfLokerBOx(){
       
        return 4;

    }
}
class SavingAccount extends bank_account implements HaslockerBox{
    protected  $interestRate=6;
    public function withdraw($withdraw_amount)
    {
        if($withdraw_amount>10000)
        {
            echo"cannot withdraw amount more than 10000";
            return;
        }
        parent::withdraw($withdraw_amount);
    }
    public function NUmberOfLokerBOx(){
        return 4;
    }
}

// $ben_bank_account=new SavingAccount(10000);
$ben_bank_account=new FixedDepositAccount(1000);
$ben_bank_account->check_balance();
// $ben_bank_account->withdraw(11000);
$ben_bank_account->calculateInterest(2);

//abstract class: cannot make object but can be made other class from it
//abstract method  : those who extends abstract class must have all the abstract method 



?>