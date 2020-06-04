<?php
print_r($_REQUEST);

$action = filter_input(INPUT_POST, 'action-btn', FILTER_SANITIZE_STRING);
if (isset($action)) {
    $first_name = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_STRING);
    $last_name = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $code = filter_input(INPUT_POST, 'code', FILTER_SANITIZE_STRING);
    
    $user = [
        'firstName' => $first_name,
        'lastName' => $last_name,
        'email' => $email,
        'code' => $code,
    ];
    
    $result = insert($user);
    $user = select(1);

};


?>
<h1>Insert</h1>
<form method="post">
    <div class="form-group">
        <label>First name</label>
        <input type="text" class="form-control" name="first_name">
    </div>
    <div class="form-group">
        <label>Last name</label>
        <input type="text" class="form-control" name="last_name">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" name="email">
    </div>
    <div class="form-group">
        <label>Code</label>
        <input type="number" class="form-control" name="code">
    </div>
    <button name="action-btn" type="submit" class="btn btn-primary">Submit</button>
</form>