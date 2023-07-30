<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If-Else PHP</title>
</head>
<body>

   
    <?php
     // == Sinal de igualdade
     // === Sinal de identico
     // != ou <> Sinal de diferente
     // !== Sinal de não identico 
     // < Sinal de menor 
     // > Sinal de maior 
     // <= Ou >=  Sinal de menor ou igual / maior ou igual 
        $usuario_possui_cartao = true;
        $valor_compra = 225;

        $valor_frete = 50;
        $recebeu_desconto = false;

        if($usuario_possui_cartao == true && $valor_compra >= 225){
            $valor_frete = 0;
            $recebeu_desconto = true;
        }
    ?>

    
</body>
</html>