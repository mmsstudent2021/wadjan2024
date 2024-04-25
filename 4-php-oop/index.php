<?php

echo "<pre>";
// system("clear");


// require_once "./classes/Person.php";
// require_once "./classes/Phone.php";
// require_once "./classes/Db.php";
// require_once "./classes/FileWriter.php";
// require_once "./classes/QueryBuilder.php";
// require_once "./classes/TextFilter.php";
// require_once "./classes/FacebookUser.php";

require_once "./classes/BankAccount.php";


$myBankAccount = new BankAccount("Hein Htet Zan", 3000);
$myBankAccount->deposit(300);
$myBankAccount->onlineDeposit("wave money", 500);
echo "<br>";

$myBankAccount->transfer("kyaw kyaw",300);
echo "<br>";

$myBankAccount->withdraw(1000);
echo "<br>";
echo $myBankAccount->checkBalance();
// $myBankAccount->balance = 100000;
// print_r($myBankAccount);
// $myBankAccount->setBalance(1000);
// echo $myBankAccount->getBalance();




// $fbu = new FacebookUser("hein htet zan", "asdffdsa", ["a", "b", "c"]);
// echo $fbu->facebookPassword;
// print_r($fbu->posts);

// $tf = new TextFilter("     San Kyi Tar     ");
// echo $tf->trim()->replace("Kyi","pya")->toUpper()->get();

// $queryBuilder = new QueryBuilder("courses");
// $db = new Db;


// $courses = $db->all(
//     $queryBuilder->select()->sql()
// );

// print_r($courses);

// $students = $db->all(

//     $queryBuilder->select()
//         ->where("gender_id", "=", 1)
//         ->where("pocket_money", ">", 500)
//         ->orderBy("id", "DESC")
//         ->limit(5)
//         ->sql()

// );

// print_r($students);

            

// $qb = new QueryBuilder;
// print_r($qb->a()->b()->c()->a()->getData());


// $fw = new FileWriter(__DIR__."/notes/test.txt");
// $fw->write("hello");
// $fw->write("san");
// $fw->write("kyi");
// $fw->write("tar");


// $db = new Db;
// $students = $db->all("select * from students limit 10");

// print_r($students);


// $me = new Person("hein htet zan", 22, "male");
// print_r($me);
// echo $me->learn("php");
// echo "<br>";


// $you = new Person("Su Su", 19, "female");
// print_r($you);

// $myPhone = new Phone;
// $myPhone->brand = "iPhone";
// $myPhone->model = "15 Pro";
// print_r($myPhone);
// echo $myPhone->makeCall();


// $me = new Person;
// $me->name = "hein htet zan";
// $me->age = 22;
// $me->gender = "male";
// // $me->bag = "phone";
// echo "<br>";

// print_r($me);
// echo "<br>";
// echo $me->name;
// echo "<br>";

// echo $me->speak("thai");
// echo "<br>";


// $you = new Person;
// $you->name = "Su Su";
// $you->age = 19;
// $you->gender = "female";
// print_r($you);
// echo $you->speak();
