<?php
$user = "USER";
$password = "PASSWORD";
$dsn = "DSN";
try{
    $dbh = new PDO($dsn, $user, $password);
    echo "it worked!";
    $SQL = "INSERT INTO user (email, password, access) VALUES ('mDSm@teoo.io','1234',1)";
    $dbh->query($SQL);
    $SQL = 'SELECT * FROM user';
    $rows = $dbh->query($SQL, PDO::FETCH_ASSOC);

} catch(PDException $e){
    echo 'Connection failed: ' . $e->getMessage();
}

foreach ($rows as $row){
    echo print_r($row,1);
}
?>
