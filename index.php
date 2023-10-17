<?php
require_once __DIR__. '/Book.php';
require_once __DIR__. '/Customer.php';

$book1 = new Book("9876543210", "Myself", "Mominur", 10);
$book2 = new Book("9876543211","My dream","Sumon",5);
$book3 = new Book(9876543212,"Day Dremaers", "Mostafiz",0);
$customer1 = new Customer(1,"Md. Saddam Hafiz","Subho","subjo1@gmail.com");
$customer2 = new Customer(2,"Md. Aynul", "Haque", "aynul@gmail.com");

$info1 = (string) $book1 ;
$info2 = (string) $book2 ;
$info3 = (string) $book3 ;
$book1-> name = "About Myself";
$customer1Info = (string) $customer1;
$customer2Info = (string) $customer2 ;
$book1Updated = $book1 ;

echo $info1 ;
echo "<br>";
echo $info2 ;
echo "<br>";
echo $book3;
echo "<br>";
echo $book1Updated ;
echo "<br>";

echo $customer1Info;
echo "<br>";
echo $customer2Info;
echo "<br>";

if($book3->addCoppy(4)){
    echo "Book added succesfully!";

}else{
    echo "Add Operation fail due to invalid input";
}

?>
