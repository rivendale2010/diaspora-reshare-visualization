<?php


require_once('DiasporaWalker.php');
require_once('ResultTree.php');

// Set correct json headers and disable caching
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');

// browser backspace and history navigation to no work, not sure why

$url =  empty($_GET['startUrl']) ? null : $_GET['startUrl'] ;
$url = $url . ".json" ;
// $url = 'https://joindiaspora.com/posts/2772581';

if ($url !== null) {
    // create Result Object for DI
    $results = new ResultTree();
// var_dump ( $results ) ;
    // Creating the recursive walker
    $dispatcher = new DiasporaWalker($results, $url, DiasporaWalker::MODE_TOROOT);
// var_dump ( $results ) ;
    $dispatcher->start();
// var_dump ( $results ) ;
    // return our json-encoded array
    echo $dispatcher->getResults();
// var_dump ( $dispatcher ) ;
}
else {
    return json_encode(array('error' => true));
}


?>