<?php require_once("header.php"); ?>


<!--Content-->
<main>

  <div class="commands-container">
    <form id="formulario" method="post" class="text-center">
      <input type="text" name="command" id="commandinput">
      <input type="submit" value="Enviar" id="formulariosubmit">
    </form>

    <div class="text-center" id="resultadocontainer">
      <label id="resultado">Write one available command in the input...</label>
    </div>

    <ul id="commandlist">
      <strong>Commands:</strong>
      <li>hi</li>
      <li>tellmesomething <sub>(Note: you can try this command several times)</sub></li>
      <li>bye</li>
    </ul>
  </div>

  <div class="calculator-container">
    <form id="calcular" method="post" class="text-center">
      <label>A little calculator using ajax too. Enjoy it!</label><br>
      <label>Num1:</label><br>
      <input type="number" name="num1" id="num1"><br>
      <button type="button" name="calcplus" id="calcplus">+</button>
      <button type="button" name="calcminus" id="calcminus">-</button>
      <button type="button" name="calcmult" id="calcmult">*</button>
      <button type="button" name="calcdiv" id="calcdiv">/</button>
      <br>
      <label id="operatorsymbol"></label>
      <input type="text" name="operator" id="operator" disabled hidden><br>
      <label>Num2:</label><br>
      <input type="number" name="num2" id="num2"><br>
      <input type="submit" value="=" id="calcularsubmit">
    </form>
    <div class="text-center">
      <strong>Resultado:</strong><br>
      <input type="text" name="resultadocalc" id="resultadocalc" disabled><br>
    </div>
  </div>

</main>
<!--Content-->


<?php require_once("footer.php"); ?>
