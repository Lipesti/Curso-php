<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <?php
        
        
        function calcularImposto ($salario){
            $imposto = 0;
            echo '<h1>Funçao para calcular imposto de renda</h1> <br/>';

            if($salario <= 1903.98){
                echo "Seu salario é de <strong>R$ {$salario}</strong> <br> Isento do imposto de renda ";
            }
            else if($salario >= 1903.99 && $salario <= 2826.65){
                $imposto = ($salario * 7.5) /100;
                echo "Seu salario é de <strong>R$ {$salario}</strong> <br>  Para esse salario a alíquota é de 7,5%, valor a ser pago do imposto é de R$ ";
            }
            else if($salario >= 2826.66 && $salario <= 3751.05 ){
                $imposto = ($salario * 15) /100;
                echo "Seu salario é de <strong>R$ {$salario}</strong> <br>  Para esse salario a alíquota é de 15%, valor a ser pago do imposto é de R$ ";
            }
            else if($salario >= 3751.06 && $salario <= 4664.68 ){
                $imposto = ($salario * 22.5)/100;
                echo "Seu salario é de <strong>R$ {$salario}</strong> <br>  Para esse salario a alíquota é de 22,5%, valor a ser pago do imposto é de R$ ";
            } else{
                $imposto = ($salario * 27.5)/100;
                echo "Seu salario é de <strong>R$ {$salario}</strong> <br>  Para esse salario a alíquota é de 22,5%, valor a ser pago do imposto é de R$";
            }
            return "<strong>" . round($imposto, 2) . "</strong>";

        }

       echo calcularImposto(3751.06);
    ?>

    
      
   
    
</body>
</html>