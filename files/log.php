<?php
//NOTE: This also serves as the reference file for how to do One Click Edit with UserSpice. See comments below.
require_once '../../../../users/init.php';
$db = DB::getInstance();

$ms = Input::get('ms');
$queries = Input::get('queries');
$p_mem = Input::get('p_mem');
$c_mem = Input::get('c_mem');
$type = Input::get('type');
$page = Input::get('page');

if($user->isLoggedIn()){
  

if($type == 'log'){


      $fields=array(
        'ms'=>$ms,
        'queries'=>$queries,
        'p_mem'=>$p_mem,
        'c_mem'=>$c_mem,
        'page'=>$page,
        'ref'=>$_SERVER['HTTP_REFERER'],
        'by'=>$user->data()->id,
      );

        $db->insert('plg_perf_log',$fields);
  
  }
}else{

  if($type == 'log'){


    $fields=array(
      'ms'=>$ms,
      'queries'=>$queries,
      'p_mem'=>$p_mem,
      'c_mem'=>$c_mem,
      'page'=>$page,
      'ref'=>$_SERVER['HTTP_REFERER'],
      'by'=>"Unknown",
    );

      $db->insert('plg_perf_log',$fields);

} 
}
