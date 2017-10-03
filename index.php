<?php

   $obj = new main();
   //$myname='Michael Ajala';

   class main{
      
      public function __construct (){
      
      $myname='michael ajala'; 
      $phone_number = array (7,3,2,7,7,1,4,6,6,2);
      $obj = new stringFunctions('Prints');
      $obj ->printString($myname);
      $obj ->lenghtofstring($myname);
      $obj ->reverseofstring($myname);
      $obj ->uppercase($myname);
      $obj ->lowercase($myname);
      $obj ->replacing($myname);
      $obj ->firstletter($myname);
      $obj ->shufflestring($myname);  
      $obj ->repeatstring($myname);  
      $obj ->formatname($myname);
      $obj ->arraycount($total_number,$values);      
          }
      }

      class stringFunctions {
        
        public function __construct($functionName) {
        echo  '<h1>List of String Functions</h1>';
        $this->getline();
      
        }

        public function getHeadings($inputHeader) {
        echo "<h1> <ul><li>$inputHeader</li></ul> </h1>";
        }

        public function getline ($line) {
        echo '<hr>';
        }


        public function printString($text){
        $this-> getHeadings("Print");
        print ($text);
        $this-> getline();
        } 
        public function lenghtofstring($value){
        $this-> getHeadings("Lenght of string");
        echo strlen($value);
        $this-> getline();
        }

        public function reverseofstring($word){
        $this-> getHeadings("Reverses The String");
        echo strrev ($word);
        $this-> getline();
        }

        public function uppercase ($uppercase ){
        $this-> getHeadings("Changes String To Uppercase");
        echo strtoupper($uppercase);
        $this-> getline();
        }

        public function lowercase ($lowercase ){
        $this-> getHeadings("Changes String To Lowercase");
        echo strtolower($lowercase);
        $this-> getline();
        }

        public function replacing ($substitute ){
        $this-> getHeadings("Substitutes One String For Another");
        echo substr_replace("-",$substitute, "");
        $this-> getline();
        }

        public function firstletter ($firstletterstring ){
        $this-> getHeadings("Makes First Letter of the String Uppercase");
        echo ucfirst($firstletterstring);
        $this-> getline();
        }

        public function shufflestring ($shuffle ){
        $this-> getHeadings("Shuffles The String");
        echo str_shuffle($shuffle);
        $this-> getline();
        }

        public function repeatstring ($repeat ){
        $this-> getHeadings("Repeats String");
        echo str_repeat($repeat,2);
        $this-> getline();
        }


        public function formatname  ($name ){
        $this-> getHeadings("First Letter Of Each String is Uppercase");
        echo ucwords($name);
        $this-> getline();
        }
        public function __destruct(){
        }
  
     }
    class arrayfunctions {

       public function getHeadings2($inputHeader2) {
        echo "<h1> <ul><li>$inputHeader2</li></ul> </h1>";
        }

        public function getline2 () {
        echo '<hr>';
        }
        public function arraycount ($count_elements, $total_number){
        $this-> getHeadings2("Number of elements in an array");
        $total_number = count ($count_elements);
        echo $total_number;
        $this ->getline2();
        }



    }
      

?>
