<?php
    echo isset($a);
    echo empty($a);
    $a = NULL;
    echo isset($a);
    echo empty($a);
    
    $a = TRUE;
    echo isset($a);
    echo empty($a);

    $a = FALSE;
    echo isset($a);
    echo empty($a);
    $a = 0;
    echo isset($a);
    echo empty($a);

    $a = -3;
    echo isset($a);
    echo empty($a);
    $a = 1.36;
    echo isset($a);
    echo empty($a);

    $a = '';
    echo isset($a);
    echo empty($a);
    $a = '0';
    echo isset($a);
    echo empty($a);

    $a = '000';
    echo isset($a);
    echo empty($a);
    $a = '';
    echo isset($a);
    echo empty($a);
    $a = 'Ala ma 3/4 kota';
    echo isset($a);
    echo empty($a);

    $a = array();
    echo isset($a);
    echo empty($a);

    $a = array(NULL);
    echo isset($a);
    echo empty($a);
    $a = array(FALSE);
    echo isset($a);
    echo empty($a);
    $a = array(0);
    echo isset($a);
    echo empty($a);
    $a = array('');
    echo isset($a);
    echo empty($a);

    $a = array('kolor' => 'zielony');
    echo isset($a['ksztalt']);
    echo empty($a['ksztalt']);
    $a = array('krokodyl', 'zaba', 'hipopotam');
    echo isset($a[8]);
    echo empty($a[8]);
    class Test
    {
        var $a;
    }
    $a = new Test();
?>