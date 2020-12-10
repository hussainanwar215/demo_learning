<?php
// created: 2020-10-27 16:21:29
$dictionary["surveys_contacts_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'surveys_contacts_1' => 
    array (
      'lhs_module' => 'Surveys',
      'lhs_table' => 'surveys',
      'lhs_key' => 'id',
      'rhs_module' => 'Contacts',
      'rhs_table' => 'contacts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ctm_surveys_contacts',
      'join_key_lhs' => 'surveys_contacts_1surveys_ida',
      'join_key_rhs' => 'surveys_contacts_1contacts_idb',
    ),
  ),
  'table' => 'ctm_surveys_contacts',
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
      'name' => 'surveys_contacts_1surveys_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'surveys_contacts_1contacts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'surveys_contacts_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'surveys_contacts_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'surveys_contacts_1surveys_ida',
        1 => 'surveys_contacts_1contacts_idb',
      ),
    ),
  ),
);