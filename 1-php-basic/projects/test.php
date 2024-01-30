<?php


// touch("myname.txt");
// mkdir("mytest",0777,true);

// var_dump(is_file("myname.txt"));
// var_dump(is_file("mytest"));
// var_dump(is_dir("myname.txt"));
// var_dump(is_dir("mytest"));

// var_dump(file_exists("mynameaa.txt"));

// print_r(scandir("."));

// unlink("myname.txt");

// rmdir("mytest");

// $fileName = "saveRecord.txt";

// $fileStream = fopen($fileName, "r");

// echo fread($fileStream,1024);

// echo fread($fileStream,1024);

// echo fgetc($fileStream);
// echo fgetc($fileStream);
// echo fgetc($fileStream);
// echo fgetc($fileStream);
// echo fgetc($fileStream);
// echo fgetc($fileStream);
// echo fgetc($fileStream);
// echo fgetc($fileStream);

// echo fgets($fileStream);
// echo fgets($fileStream);
// var_dump(feof($fileStream));

// while(!feof($fileStream)){
//     echo fgets($fileStream);
// }


// fclose($fileStream);


// if (file_exists($fileName)) {
//     touch($fileName);
// }

// $fileStream = fopen($fileName, "a");

// fwrite($fileStream, "hein");

// fclose($fileStream);


// $fileStream = fopen($fileName, "a");

// fwrite($fileStream, " htet");

// fclose($fileStream);


// $fileStream = fopen($fileName, "a");

// fwrite($fileStream, " zan");

// fclose($fileStream);


$content = file_get_contents("http://forex.cbm.gov.mm/api/latest");
print_r(json_decode($content)->rates);
