<?php
 // created: 2020-10-27 16:21:29
$layout_defs["Contacts"]["subpanel_setup"]['surveys_contacts_1'] = array (
  'order' => 100,
  'module' => 'Surveys',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SURVEYS_CONTACTS_1_FROM_SURVEYS_TITLE',
  'get_subpanel_data' => 'surveys_contacts_1',
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
