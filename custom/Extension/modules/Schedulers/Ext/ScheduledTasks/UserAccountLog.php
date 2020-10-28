<?php
 /*
  * We add the method name to the $job_strings array.
  * This is the method that jobs for this scheduler will call.
  */
 $job_strings[] = 'account_log';

 /**
  * Example scheduled job to change any 'Planned' meetings older than a month
  * to 'Not Held'.
  * @return bool
  */
 function account_log(){

   $name = 'test user';
  //  $query = "SELECT * FROM accounts WHERE name = '$name'";
  //  $GLOBALS['log']->fatal($query);
   $query = 'SELECT * FROM accounts WHERE name = ' . $GLOBALS['db']->quoted($name);
   $results = $GLOBALS['db']->query($query, true);

  while($row = $GLOBALS['db']->fetchByAssoc($results) )
  {
    $GLOBALS['log']->fatal(print_r($row, true));
    // $GLOBALS['log']->security('security');
    // $GLOBALS['log']->error('error');
  }
 
  return true;
}