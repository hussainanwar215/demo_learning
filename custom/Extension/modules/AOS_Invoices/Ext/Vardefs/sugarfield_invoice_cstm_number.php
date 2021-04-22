<?php
     $dictionary['AOS_Invoices']['fields']['cstm_number'] =  array(
            'name' => 'cstm_number',
            'vname' => 'LBL_CSTM_NUMBER',
            'type' => 'int',
            'readonly' => true,
            'len' => 11,
            'auto_increment' => true,
           'disable_num_format' => true,
        );

        $dictionary['AOS_Invoices']['indices']['cstm_number_autoincrement'] = array(
            'name' => 'cstm_number_autoincrement',
            'type' =>'index',
            'fields' => array('cstm_number'),
        );
?>