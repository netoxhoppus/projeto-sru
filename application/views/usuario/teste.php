<h1>Teste</h1>

<?php

// print_r($listagem);



foreach($listagem as $lista){
    if($lista->genero =='F')
            echo "Feminino {$lista->qtde}";
            ?> <br /> <?php
            
    if($lista->genero =='M')            
            echo "Masculino {$lista->qtde}";
}

// foreach($listagem as $lista){
    
//             echo "Curso - {$lista->curso}\n";
//             echo "Qtde - {$lista->qtde}";
                
            
// }

?>

