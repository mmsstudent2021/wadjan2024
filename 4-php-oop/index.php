<?php

echo "<pre>";


require_once "./autoload.php";


$request = new Request;
echo $request->get();
echo $request->post();
echo $request->file();
echo $request->files();
echo $request->length();



// $course = new Course;
// print_r($course->select("*")->all());

// $batch = new Batch;
// print_r($batch->select("*")->all());

// $student = new Student;

// print_r($student->select(["id", "name", "pocket_money"])->limit(3)->all());

// $m = new Model();
// print_r($m->select("*")->limit(3)->all());



// $p = new ParentClass("aaa","bbb","ccc");
// print_r($p);
// echo $p->b;



// $c = new Child("aaa","bbb","ccc","ddd","eee");
// print_r($c);
// echo $c->x();


// class (properties,method) extend childClass


// $p = new Person("hhz", 22, "male");
// print_r($p);


// system("clear");


// require_once "./classes/Person.php";
// require_once "./classes/Phone.php";
// require_once "./classes/Db.php";
// require_once "./classes/FileWriter.php";
// require_once "./classes/QueryBuilder.php";
// require_once "./classes/TextFilter.php";
// require_once "./classes/FacebookUser.php";
// require_once "./classes/BankAccount.php";


// $myBankAccount = new BankAccount("Hein Htet Zan", 3000);
// $myBankAccount->deposit(300);
// $myBankAccount->onlineDeposit("wave money", 500);
// echo "<br>";

// $myBankAccount->transfer("kyaw kyaw",300);
// echo "<br>";

// $myBankAccount->withdraw(1000);
// echo "<br>";
// echo $myBankAccount->checkBalance();
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
