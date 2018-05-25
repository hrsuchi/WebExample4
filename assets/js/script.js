$(document).ready(function(){
  $("#formulario").submit(function(event){
    event.preventDefault();
  });
  $("#calcular").submit(function(event){
    event.preventDefault();
  });
});

//getajax
function getajax(){
  this.sendcommand = function(){
    var command = $("#commandinput").val();
    $.ajax({
        type: "POST",
        url: "ajaxcall.php?a=commands",
        data: "command="+command,
        success: function(result){
          $(document).ready(function(){
            $("#resultado").html(result);
          });
        },
        error: function(result){
          $(document).ready(function(){
            $("#resultado").html("Error :(. Please, try again :| or later :D.");
          });
        }
    });
  };
  this.calculate = function(){
    var num1 = $("#num1").val();
    var operator = $("#operator").val();
    var num2 = $("#num2").val();
    $.ajax({
        type: "POST",
        url: "ajaxcall.php?a=calc",
        data: "num1="+num1+"&operator="+operator+"&num2="+num2,
        success: function(result){
          $(document).ready(function(){
            $("#resultadocalc").val(result);
          });
        },
        error: function(result){
          $(document).ready(function(){
            $("#resultadocalc").val("Error :(");
          });
        }
    });
  };
}
var getajax = new getajax();
///getajax

//buttonactions
$(document).ready(function(){
  //commands
    $("#formulariosubmit").click(function(){
      getajax.sendcommand();
    });
  //commands
  //calculator
    //operators
      $("#calcplus").click(function(){
        $("#operator").val("suma");
        $("#operatorsymbol").html("+");
      });
      $("#calcminus").click(function(){
        $("#operator").val("resta");
        $("#operatorsymbol").html("-");
      });
      $("#calcmult").click(function(){
        $("#operator").val("multiplicacion");
        $("#operatorsymbol").html("*");
      });
      $("#calcdiv").click(function(){
        $("#operator").val("division");
        $("#operatorsymbol").html("/");
      });
    ///operators
    //ajax
      $("#calcularsubmit").click(function(){
        getajax.calculate();
      });
    ///ajax
  ///calculator
});
///butonactions
