<?php


// $name = "My name\n";
// $weight = '80kg';


// echo $name;
// echo $weight;

// $myName = "hein htet zan";

// echo "My name is $myName";
// echo 'My name is $myName';

// $x = null;

// echo $x;


// echo false;

$myName = "hein htet zan";
$myText = "စမ်းကြည့်တာပါဗျာ ရလားမသိဘူး ဟက်လို ဟက်လို";

$text = "xxxabcyzx";


echo md5("asdffdsa");
echo "<br>";
echo "<br>";
echo md5("asdffdsa");
echo "<br>";
echo "<br>";
echo md5("asdffdsa");
echo "<br>";
echo "<br>";

echo password_hash("asdffdsa",PASSWORD_BCRYPT);
echo "<br>";
echo "<br>";
echo password_hash("asdffdsa",PASSWORD_DEFAULT);
echo "<br>";
echo "<br>";
echo password_hash("asdffdsa",PASSWORD_ARGON2ID);
echo "<br>";
echo "<br>";

// echo htmlentities("<h1>san kyi tar</h1>");
// $jsScript = htmlentities("<script>alert('U are hacked')</script>");
// echo html_entity_decode($jsScript);
// echo htmlspecialchars("I'm hein htet \" zan");


// echo trim($text,"x");

// print_r(explode(" ",$myName));

// echo implode("-",["a","b","c"]);

// echo str_pad("aa",8,"X",STR_PAD_BOTH);

// echo mb_substr($myText,4,11);
// echo substr($myName,4,11);

echo "\n";

echo strlen($myName);
echo "\n";
echo str_word_count($myName);
echo "\n";
echo strtolower($myName);
echo "\n";
echo strtoupper($myName);
echo "\n";
echo ucfirst($myName);
echo "\n";
echo ucwords($myName);
echo "\n";
echo strrev($myName);
echo "\n";
echo strpos($myName,"hein");
echo "\n";
echo str_replace("htet","kyaw",$myName);
echo "\n";
echo substr($myName,5,4);
echo "\n";
echo "\n";
echo "\n";
echo "\n";
