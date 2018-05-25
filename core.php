<?php
  /**
   *
   */
  class core{
    function __construct(){

    }
    //Commands
      function hi(){
        echo "Hi, User.";
      }
      function bye(){
        echo "Bye, User.";
      }
      function git(){
        echo "Visit <a href=\"http://github.com/lsyk4\">http://github.com/lsyk4</a>";
      }
      function tellmesomething(){
        $randtms = rand(1,5);
        if ($randtms == 1) {
          echo " \"Something\"? well... Something ";
        }elseif ($randtms == 2) {
          echo "Ok, this program was writen using php and javascript, using ajax";
        }elseif ($randtms == 3) {
          echo "My creator is Lsyk";
        }elseif ($randtms == 4) {
          echo "I don't wanna say nothing";
        }elseif ($randtms == 5) {
          echo "Ok, there is a secret command: git";
        }
      }
    ///Commands
    //Calculator
      function calculate($num1, $operator, $num2){
        if($operator == "suma"){
          echo $num1+$num2;
        }elseif($operator == "resta"){
          echo $num1-$num2;
        }elseif($operator == "multiplicacion"){
          echo $num1*$num2;
        }elseif($operator == "division"){
          echo $num1/$num2;
        }else{
          echo "Error :( ( How you do that? D: )";
        }
      }
    ///Calculator
  }

?>
