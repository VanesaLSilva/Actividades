<?php
// parcial(9);
// exa_final(6);
// tps(4);
function examen_parcial($nota_parcial){
    
    if(($nota_parcial < 0) || ($nota_parcial > 10)){
        echo "Error al cargar nota. Debe estar entre 0 y 10."."<br>";
    } else {
        echo(($nota_parcial == 4)?"Alumno No Aprobado":"Nota de examen parcial ingresada") . "<br>";
        return $nota_parcial;
    };
};

function examen_final($nota_final){
    if(($nota_final < 0) || ($nota_final > 10)){
        echo "Error al ingresar nota. Debe estar entre 0 y 10."."<br>";
    } else {
        echo(($nota_final == 4)?"Alumno No Aprobado":"Nota de examen final ingresada")."<br>";
        return $nota_final;
    };
};

function trabajos($nota_trabajos){
    if(($nota_trabajos < 0) || ($nota_trabajos> 10)){
        echo "Error al ingresar nota. Debe estar entre 0 y 10."."<br>";
    } else {
        echo(($nota_trabajos == 4)?"Alumno No Aprobado":"Nota de trabajos prácticos ingresada")."<br>";
       return $nota_trabajos;
    };
};

$nota_final = ((examen_parcial(9) * 0.3) + (examen_final(6) * 0.5) + (trabajos(4) * 0.2));


if($nota_final>= 6){
    echo "Alumno Aprobado. Nota final: $nota_final"."<br>";
} else {
    echo "Alumno No Aprobado. Nota final: $nota_final"."<br>";
}

//mach($nota_final){
//     ($nota_final =< 6)==>:"Alumno No Aprobado"."<br>";
//     ($nota_final=> 6):==>"Alumno Aprobado"."<br>";
// };