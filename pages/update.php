<h1>Update</h1>
<?php

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

$user = select($id);

print_r($user);