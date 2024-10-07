<?php
$username = 'John';
return view('tasklist')->withTasks($tasks);
$foobar = 'foobar';
return view('tasklist')->withTasks($tasks)->withFoo($foobar);
?>

