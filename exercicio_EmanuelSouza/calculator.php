
<?php


if ($_POST['sinal']==='+'){

    $result=$_POST['num1']+$_POST['num2'];
    
}

if ($_POST['sinal']==='-'){

    $result=$_POST['num1']-$_POST['num2'];
    
}

if ($_POST['sinal']==='/'){

    $result=$_POST['num1']/$_POST['num2'];
    
}

if ($_POST['sinal']==='x'){

    $result=$_POST['num1']*$_POST['num2'];
    
}

?>

<form method='POST' action ='#'>
<input name='num1' placeholder='primeiro numero'  ></input>
<input name='sinal' placeholder='sinal da operação' ></input>
<input name='num2' placeholder='segundo numero' ></input>
<input type="submit" value="enviar"></input>
<p>resultado: <?php echo $result?></p>
</form>

