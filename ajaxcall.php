<?php require_once("core.php"); ?>
<?php $core = new core(); ?>
<?php
  if(isset($_GET["a"]) && $_GET["a"] != "" && $_GET["a"] != " "){
    if($_GET["a"] == "commands"){
      //commands
        if(isset($_POST["command"]) && $_POST["command"] != "" && $_POST["command"] != " "){
          if($_POST["command"] == "hi"){
            $core->hi();
          }elseif($_POST["command"] == "tellmesomething"){
            $core->tellmesomething();
          }elseif($_POST["command"] == "bye"){
            $core->bye();
          }elseif($_POST["command"] == "git"){
            $core->git();
          }else{
            echo "Not available :(. Please, try another command :D.";
          }
        }else{
          echo "Error :(. Please, try again :D.";
        }
      ///commands
    }elseif($_GET["a"] == "calc"){
      echo $core->calculate($_POST["num1"],$_POST["operator"],$_POST["num2"]);
    }else{
      echo "Error :(. Please, try again :D.";
    }
  }else{
    echo "error";
  }
?>
