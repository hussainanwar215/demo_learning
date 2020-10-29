<?php
 // created: 2020-10-27 15:57:40
$layout_defs["Bugs"]["subpanel_setup"]['bugs_spots_1'] = array (
  'order' => 100,
  'module' => 'Spots',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_BUGS_SPOTS_1_FROM_SPOTS_TITLE',
  'get_subpanel_data' => 'bugs_spots_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
