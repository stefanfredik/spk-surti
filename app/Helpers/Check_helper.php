<?php


function checkdata($peserta, $kriteria, $subkriteria)
{
    $err = [];

    if ($kriteria == null) {
        array_push($err, 'Data Kriteria Masih Kosong');
    }

    if ($subkriteria == null) {
        array_push($err, 'Data Subkriteria Masih Kosong');
    }

    if ($peserta == null) {
        array_push($err, 'Data Peserta Masih Kosong');
    }

    if ($err) {
        return $err;
    } else {
        true;
    }
}
