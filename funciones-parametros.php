<?php
echo rand(1,10);
function es_estudiante_legend($platzi_rank){
    if($platzi_rank>= 20000){
        echo "Eres estuduante Legend! \n";
    }
    else {
        echo "Aun no alcanzas el nivel Legend \n";

    }

}
$platzi_rank_user=(int)readline("Por favor dinos cual es tu puntaje en platzi");
es_estudiante_legend($platzi_rank_user);

echo "\n";
