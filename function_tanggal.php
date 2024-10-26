<?php function tgl($tgl_id){
    $tgl_id = explode('-', $tgl_id);
    $bu = $tgl_id['1'];
    if ($bu == 1){
        $bu_id = 'Januari';
    } else if($bu == 2){
        $bu_id = 'Februari';
    } else if($bu == 3){
        $bu_id = 'Maret';
    } else if($bu == 4){
        $bu_id = 'April';
    } else if($bu == 5){
        $bu_id = 'Mei';
    } else if($bu == 6){
        $bu_id = 'Juni';
    } else if($bu == 7){
        $bu_id = 'Juli';
    } else if($bu == 8){
        $bu_id = 'Agustus';
    } else if($bu == 9){
        $bu_id = 'September';
    } else if($bu == 10){
        $bu_id = 'Oktober';
    } else if($bu == 11){
        $bu_id = 'November';
    } else{
        $bu_id = 'Desember';
    }

    $tanggal_utuh_yang_sangat_benar = $tgl_id['2']." ".$bu_id." ".$tgl_id['0'];
    return $tanggal_utuh_yang_sangat_benar;
}
?>