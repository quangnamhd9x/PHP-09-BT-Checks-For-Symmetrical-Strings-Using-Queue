<?php
include_once  'Queue.php';

$queue = new Queue();
var_dump($queue->checkArray("aabbccddccbbaa"));