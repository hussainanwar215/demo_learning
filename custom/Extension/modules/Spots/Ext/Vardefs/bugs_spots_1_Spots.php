<?php
// created: 2020-10-27 15:57:40

$dictionary["Spots"]["fields"]["bugs_spots_1_name"] = array (
  'name' => 'bugs_spots_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BUGS_SPOTS_1_FROM_BUGS_TITLE',
  'save' => true,
  'id_name' => 'bugs_spots_1bugs_ida',
  'link' => 'bugs_spots_1',
  'table' => 'bugs',
  'module' => 'Bugs',
  'rname' => 'name',
);

$dictionary["Spots"]["fields"]["bugs_spots_1"] = array (
  'name' => 'bugs_spots_1',
  'type' => 'link',
  'relationship' => 'bugs_quotes_1',
  'source' => 'non-db',
  'module' => 'Bugs',
  'bean_name' => 'Bug',
  'vname' => 'LBL_BUGS_SPOTS_1_FROM_SPOTS_TITLE',
  'id_name' => 'bugs_leads_1bugs_ida',
);

$dictionary["Spots"]["fields"]["bugs_spots_1bugs_ida"] = array (
  'name' => 'bugs_spots_1bugs_ida',
  'type' => 'link',
  'relationship' => 'bugs_spots_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_BUGS_SPOTS_1_FROM_SPOTS_TITLE',
);
