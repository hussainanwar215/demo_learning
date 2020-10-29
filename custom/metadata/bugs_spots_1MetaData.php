<?php
// created: 2020-10-27 15:57:40
$dictionary["bugs_spots_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'bugs_spots_1' => 
    array (
      'lhs_module' => 'Bugs',
      'lhs_table' => 'bugs',
      'lhs_key' => 'id',
      'rhs_module' => 'Spots',
      'rhs_table' => 'spots',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ctm_bug_spot',
      'join_key_lhs' => 'bugs_spots_1bugs_ida',
      'join_key_rhs' => 'bugs_spots_1spots_idb',
    ),
  ),
  'table' => 'ctm_bug_spot',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'bugs_spots_1bugs_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'bugs_spots_1spots_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'bugs_spots_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'bugs_spots_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'bugs_spots_1bugs_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'bugs_spots_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'bugs_spots_1spots_idb',
      ),
    ),
  ),
);