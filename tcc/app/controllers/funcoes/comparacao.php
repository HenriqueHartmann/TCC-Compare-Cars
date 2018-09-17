<?php


function preco2($pre1, $pre2){


    if ($pre1 <= $pre2){
        $melhorPre = $pre1;
        $precofinal = substr($melhorPre, 3,15);
        return $precofinal;
    }

    if ($pre2 <= $pre1){
        $melhorPre = $pre2;
        $precofinal = substr($melhorPre, 3,15);
        return $precofinal;
    }

}

function preco3($pre1, $pre2, $pre3){


    if ($pre1 <= $pre2 and $pre1 <= $pre3){
        $melhorPre = $pre1;
        $precofinal = substr($melhorPre, 3,15);
        return $precofinal;
    }

    if ($pre2 <= $pre1 and $pre2 <= $pre3){
        $melhorPre = $pre2;
        $precofinal = substr($melhorPre, 3,15);
        return $precofinal;
    }

    if ($pre3 <= $pre1 and $pre3 <= $pre2){
        $melhorPre = $pre3;
        $precofinal = substr($melhorPre, 3,15);
        return $precofinal;
    }

}

function preco4($pre1, $pre2, $pre3, $pre4){


    if ($pre1 <= $pre2 and $pre1 <= $pre3 and $pre1 <= $pre4){
        $melhorPre = $pre1;
        $precofinal = substr($melhorPre, 3,15);
        return $precofinal;
    }

    if ($pre2 <= $pre1 and $pre2 <= $pre3 and $pre2 <= $pre4){
        $melhorPre = $pre2;
        $precofinal = substr($melhorPre, 3,15);
        return $precofinal;
    }

    if ($pre3 <= $pre1 and $pre3 <= $pre2 and $pre3 <= $pre4){
        $melhorPre = $pre3;
        $precofinal = substr($melhorPre, 3,15);
        return $precofinal;
    }

    if($pre4 <= $pre1 and $pre4 <= $pre2 and $pre4 <= $pre3){
        $melhorPre = $pre4;
        $precofinal = substr($melhorPre, 3,15);
        return $precofinal;
    }



}

function altura($alt1, $alt2, $alt3=null, $alt4=null){


    if ($alt1 >= $alt2 and $alt1 >= $alt3 and $alt1 >= $alt4){
        $melhorAlt = $alt1;
        $altfinal = substr($melhorAlt, 0,4);
        return $altfinal;
    }

    if ($alt2 >= $alt1 and $alt2 >= $alt3 and $alt2 >= $alt4){
        $melhorAlt = $alt2;
        $altfinal = substr($melhorAlt, 0,4);
        return $altfinal;
    }

    if ($alt3 >= $alt1 and $alt3 >= $alt2 and $alt3 >= $alt4){
        $melhorAlt = $alt3;
        $altfinal = substr($melhorAlt, 0,4);
        return $altfinal;
    }

    if($alt4 >= $alt1 and $alt4 >= $alt2 and $alt4 >= $alt3){
        $melhorAlt = $alt4;
        $altfinal = substr($melhorAlt, 0,4);
        return $altfinal;
    }

}

function comprimento($com1, $com2, $com3=null, $com4=null){


    if ($com1 >= $com2 and $com1 >= $com3 and $com1 >= $com4){
        $melhorCom = $com1;
        $comfinal = substr($melhorCom, 0,4);
        return $comfinal;
    }

    if ($com2 >= $com1 and $com2 >= $com3 and $com2 >= $com4){
        $melhorCom = $com2;
        $comfinal = substr($melhorCom, 0,4);
        return $comfinal;
    }

    if ($com3 >= $com1 and $com3 >= $com2 and $com3 >= $com4){
        $melhorCom = $com3;
        $comfinal = substr($melhorCom, 0,4);
        return $comfinal;
    }

    if($com4 >= $com1 and $com4 >= $com2 and $com4 >= $com3){
        $melhorCom = $com4;
        $comfinal = substr($melhorCom, 0,4);
        return $comfinal;
    }

}

function velocidade($vel1, $vel2, $vel3=null, $vel4=null){


    if ($vel1 >= $vel2 and $vel1 >= $vel3 and $vel1 >= $vel4){
        $melhorVel = $vel1;
        $finalVel = substr($melhorVel, 0, 3);
        return $finalVel;
    } if ($vel2 >= $vel1 and $vel2 >= $vel3 and $vel2 >= $vel4){
        $melhorVel = $vel2;
        $finalVel = substr($melhorVel, 0, 3);
        return $finalVel;
    } if ($vel3 >= $vel1 and $vel3 >= $vel2 and $vel3 >= $vel4){
        $melhorVel = $vel3;
        $finalVel = substr($melhorVel, 0, 3);
        return $finalVel;
    } if ($vel4 >= $vel1 and $vel4 >= $vel2 and $vel4 >= $vel3){
        $melhorVel = $vel4;
        $finalVel = substr($melhorVel, 0, 3);
        return $finalVel;
    }

}

function tq_combustivel($tqc1, $tqc2, $tqc3=null, $tqc4=null){


    if ($tqc1 >= $tqc2 and $tqc1 >= $tqc3 and $tqc1 >= $tqc4){
        $melhorTqc = $tqc1;
        $finalTqc = substr($melhorTqc, 0, 2);
        return $finalTqc;
    } if ($tqc2 >= $tqc1 and $tqc2 >= $tqc3 and $tqc2 >= $tqc4){
        $melhorTqc = $tqc2;
        $finalTqc = substr($melhorTqc, 0, 2);
        return $finalTqc;
    } if ($tqc3 >= $tqc2 and $tqc3 >= $tqc1 and $tqc3 >= $tqc4){
        $melhorTqc = $tqc3;
        $finalTqc = substr($melhorTqc, 0, 2);
        return $finalTqc;
    } if($tqc4 >= $tqc1 and $tqc4 >= $tqc2 and $tqc4 >= $tqc3) {
        $melhorTqc = $tqc4;
        $finalTqc = substr($melhorTqc, 0, 2);
        return $finalTqc;
    }

}

function portaMalas($por1, $por2, $por3=null, $por4=null){


    if ($por1 >= $por2 and $por1 >= $por3 and $por1 >= $por4){
        $melhorPor = $por1;
        $finalPor = substr($melhorPor, 0, 3);
        return $finalPor;
    }

    if ($por2 >= $por1 and $por2 >= $por3 and $por2 >= $por4){
        $melhorPor = $por2;
        $finalPor = substr($melhorPor, 0, 3);
        return $finalPor;
    }

    if ($por3 >= $por1 and $por3 >= $por2 and $por3 >= $por4){
        $melhorPor = $por3;
        $finalPor = substr($melhorPor, 0, 3);
        return $finalPor;
    }

    if ($por4 >= $por1 and $por4 >= $por2 and $por4 >= $por3) {
        $melhorPor = $por4;
        $finalPor = substr($melhorPor, 0, 3);
        return $finalPor;
    }

};

function consumoUrb($conu1, $conu2, $conu3=null, $conu4=null){


    if ($conu1 >= $conu2 and $conu1 >= $conu3 and $conu1 >= $conu4) {
        $melhorConu = $conu1;
        $finalConu = substr($melhorConu, 11, 3);
        return $finalConu;

    } if ($conu2 >= $conu1 and $conu2 >= $conu3 and $conu2 >= $conu4) {
        $melhorConu = $conu2;
        $finalConu = substr($melhorConu, 11, 3);
        return $finalConu;

    } if ($conu3 >= $conu2 and $conu3 >= $conu1 and $conu3 >= $conu4) {
        $melhorConu = $conu3;
        $finalConu = substr($melhorConu, 11, 3);
        return $finalConu;

    } if ($conu4 >= $conu1 and $conu4 >= $conu2 and $conu4 >= $conu4) {
        $melhorConu = $conu4;
        $finalConu = substr($melhorConu, 11, 3);
        return $finalConu;
    }

};

function consumoRod($conr1, $conr2, $conr3=null,$conr4=null){


    if ($conr1 >= $conr2 and $conr1 >= $conr3 and $conr1 >= $conr4) {
        $melhorConr = $conr1;
        $finalConr = substr($melhorConr, 13, 3);
        return $finalConr;

    } if ($conr2 >= $conr1 and $conr2 >= $conr3 and $conr2 >= $conr4) {
        $melhorConr = $conr2;
        $finalConr = substr($melhorConr, 13, 3);
        return $finalConr;

    } if ($conr3 >= $conr2 and $conr3 >= $conr1 and $conr3 >= $conr4) {
        $melhorConr = $conr3;
        $finalConr = substr($melhorConr, 13, 3);
        return $finalConr;

    } if ($conr4 >= $conr1 and $conr4 >= $conr2 and $conr4 >= $conr3) {
        $melhorConr = $conr4;
        $finalConr = substr($melhorConr, 13, 3);
        return $finalConr;
    }

};

function largura($lar1, $lar2, $lar3=null, $lar4=null){



    if ($lar1 >= $lar2 and $lar1 >= $lar3 and $lar1 >= $lar4){
        $melhorLar = $lar1;
        $larfinal = substr($melhorLar, 0,4);
        return $larfinal;
    }

    if ($lar2 >= $lar1 and $lar2 >= $lar3 and $lar2 >= $lar4){
        $melhorLar = $lar2;
        $larfinal = substr($melhorLar, 0,4);
        return $larfinal;
    }

    if ($lar3 >= $lar1 and $lar3 >= $lar2 and $lar3 >= $lar4){
        $melhorLar = $lar3;
        $larfinal = substr($melhorLar, 0,4);
        return $larfinal;
    }

    if ($lar4 >= $lar1 and $lar4 >= $lar2 and $lar4 >= $lar3){
        $melhorLar = $lar4;
        $larfinal = substr($melhorLar, 0,4);
        return $larfinal;
    }

}

function direcao($d1, $d2, $d3=null, $d4=null){

    $direcoes = [
        1=>['nome'=>'Mecânica', 'peso'=>1],
        2=>['nome'=>'Hidráulica', 'peso'=>2],
        3=>['nome'=>'Elétrica', 'peso'=>3],
        4=>['nome'=>'null', 'peso'=>0]
    ];

    if ($d1 == 'Elétrica' or $d2 == 'Elétrica' or $d3 == 'Elétrica' or $d4 == 'Elétrica'){
        return 'Elétrica';
    }
    elseif ($d1 == 'Hidráulica' or $d2 == 'Hidráulica' or $d3 == 'Hidráulica' or $d4 == 'Hidráulica'){
        return 'Hidráulica';
    }
    elseif ($d1 == 'Mecânica' or $d2 == 'Mecânica' or $d3 == 'Mecânica' or $d4 == 'Mecânica'){
        return 'Mecânica';
    }
    elseif ($d1 == 'null' or $d2 == 'null' or $d3 == 'null' or $d4 == 'null'){
        return 'null';
    }
}

function tp_combustivel($tpc1, $tpc2, $tpc3=null, $tpc4=null){

    $tpComb = [
        1=>['nome'=>'Alcool', 'peso'=>1],
        2=>['nome'=>'Gasolina', 'peso'=>2],
        3=>['nome'=>'Fléx', 'peso'=>3],
        4=>['nome'=>'null', 'peso'=>0]
    ];

    if ($tpc1 == 'Fléx' or $tpc2 == 'Fléx' or $tpc3 == 'Fléx' or $tpc4 == 'Fléx'){
        return 'Fléx';
    }
    elseif ($tpc1 == 'Gasolina' or $tpc2 == 'Gasolina' or $tpc3 == 'Gasolina' or $tpc4 == 'Gasolina'){
        return 'Gasolina';
    }
    elseif ($tpc1 == 'Alcool' or $tpc2 == 'Alcool' or $tpc3 == 'Alcool' or $tpc4 == 'Alcool'){
        return 'Alcool';
    }
    elseif ($tpc1 == 'null' or $tpc2 == 'null' or $tpc3 == 'null' or $tpc4 == 'null'){
        return 'null';
    }

}

function ano($ano1, $ano2, $ano3=null, $ano4=null){


    if ($ano1 >= $ano2 and $ano1 >= $ano3 and $ano1 >= $ano4) {
        $melhorAno = $ano1;
        return $melhorAno;
    }

    if ($ano2 >= $ano1 and $ano2 >= $ano3 and $ano2 >= $ano4){
        $MelhorAno = $ano2;
        return $MelhorAno;
    }

    if ($ano3 >= $ano1 and $ano3 >= $ano2 and $ano3 >= $ano4){
        $MelhorAno = $ano3;
        return $MelhorAno;
    }

    if ($ano4 >= $ano1 and $ano4 >= $ano2 and $ano4 >= $ano3){
        $MelhorAno = $ano4;
        return $MelhorAno;
    }
}



function potencia($pot1, $pot2, $pot3=null, $pot4=null){


    if ($pot1 >= $pot2 and $pot1 >= $pot3 and $pot1 >= $pot4) {
        $melhorPot = $pot1;
        $potFinal = substr($melhorPot, 10, 4);
        return $potFinal;

    } if ($pot2 >= $pot1 and $pot2 >= $pot3 and $pot2 >= $pot4) {
        $melhorPot = $pot2;
        $potFinal = substr($melhorPot, 10, 4);
        return $potFinal;

    } if ($pot3 >= $pot2 and $pot3 >= $pot1 and $pot3 >= $pot4) {
        $melhorPot = $pot3;
        $potFinal = substr($melhorPot, 10, 4);
        return $potFinal;

    } if ($pot4 >= $pot1 and $pot4 >= $pot2 and $pot4 >= $pot3) {
        $melhorPot = $pot4;
        $potFinal = substr($melhorPot, 10, 4);
        return $potFinal;

    }

}

function portas($port1, $port2, $port3=null, $port4=null){


    if ($port1 >= $port2 and $port1 >= $port3 and $port1 >= $port4) {
        $melhorPort = $port1;
        $portFinal = substr($melhorPort, 0, 1);
        return $portFinal;

    } if ($port2 >= $port1 and $port2 >= $port3 and $port2 >= $port4) {
        $melhorPort = $port2;
        $portFinal = substr($melhorPort, 0, 1);
        return $portFinal;

    } if ($port3 >= $port2 and $port3 >= $port1 and $port3 >= $port4) {
        $melhorPort = $port3;
        $portFinal = substr($melhorPort, 0, 1);
        return $portFinal;

    } if ($port4 >= $port1 and $port4 >= $port2 and $port4 >= $port3) {
        $melhorPort = $port4;
        $portFinal = substr($melhorPort, 0, 1);
        return $portFinal;

    }
}

function marchas($mar1, $mar2, $mar3=null, $mar4=null){


    if ($mar1 >= $mar2 and $mar1 >= $mar3 and $mar1 >= $mar4) {
        $melhorMar = $mar1;
        $finalMar = substr($melhorMar, 0, 1);
        return $finalMar;

    } if ($mar2 >= $mar1 and $mar2 >= $mar3 and $mar2 >= $mar4) {
        $melhorMar = $mar2;
        $finalMar = substr($melhorMar, 0, 1);
        return $finalMar;

    } if ($mar3 >= $mar1 and $mar3 >= $mar2 and $mar3 >= $mar4) {
        $melhorMar = $mar3;
        $finalMar = substr($melhorMar, 0, 1);
        return $finalMar;

    } if ($mar4 >= $mar1 and $mar4 >= $mar2 and $mar4 >= $mar3) {
        $melhorMar = $mar4;
        $finalMar = substr($melhorMar, 0, 1);
        return $finalMar;

    }
}

function ocupante($ocu1, $ocu2, $ocu3=null, $ocu4=null){


    if ($ocu1 >= $ocu2 and $ocu1 >= $ocu3 and $ocu1 >= $ocu4) {
        $melhorOcu = $ocu1;
        $finalOcu = substr($melhorOcu, 0, 1);
        return $finalOcu;

    } if ($ocu2 >= $ocu1 and $ocu2 >= $ocu3 and $ocu2 >= $ocu4) {
        $melhorOcu = $ocu2;
        $finalOcu = substr($melhorOcu, 0, 1);
        return $finalOcu;

    } if ($$ocu3 >= $ocu1 and $ocu3 >= $ocu2 and $ocu3 >= $ocu4) {
        $melhorOcu = $ocu3;
        $finalOcu = substr($melhorOcu, 0, 1);
        return $finalOcu;

    } if ($ocu4 >= $ocu1 and $ocu4 >= $ocu2 and $ocu4 >= $ocu3) {
        $melhorOcu = $ocu4;
        $finalOcu = substr($melhorOcu, 0, 1);
        return $finalOcu;

    }
}
?>