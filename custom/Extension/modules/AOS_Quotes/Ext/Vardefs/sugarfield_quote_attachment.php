<?php

$dictionary['AOS_Quotes']['fields']['quote_file_url'] = array(
  'name'=>'quote_file_url',
  'vname' => 'LBL_QUOTE_FILE_URL',
  'type'=>'function',
  'function_class'=>'CstmUploadFile',
  'function_name'=>'get_upload_url',
  'function_params'=> array('$this'),
  'source'=>'function',
  'reportable'=>false,
  'importable' => false,
);
$dictionary['AOS_Quotes']['fields']['quote_filename'] = array(
  'name' => 'quote_filename',
  'vname' => 'LBL_QUOTE_FILENAME',
  'type' => 'multifile',
  'dbType' => 'varchar',
  'len' => '255',
  'reportable'=>true,
  'importable' => false,
);