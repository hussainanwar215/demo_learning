<?php
// created: 2020-10-27 16:21:29
$dictionary["leads_spots_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'leads_spots_1' => 
    array (
      'lhs_module' => 'Leads',
      'lhs_table' => 'leads',
      'lhs_key' => 'id',
      'rhs_module' => 'Spots',
      'rhs_table' => 'spots',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'leads_spots_1_c',
      'join_key_lhs' => 'leads_spots_1leads_ida',
      'join_key_rhs' => 'leads_spots_1spots_idb',
    ),
  ),
  'table' => 'leads_spots_1_c',
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
      'name' => 'leads_spots_1leads_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'leads_spots_1spots_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'leads_spots_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'leads_spots_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'leads_spots_1leads_ida',
        1 => 'leads_spots_1spots_idb',
      ),
    ),
  ),
);