<?php
// if(!isset($_SERVER['PHP_AUTH_USER'])) {
//     header('WWW-Authenticate: Basic realm="My Realm"');
//     header('HTTP/1.0 401 Unauthorized');
//     echo 'Text to send if user hits Cancel button';
//     exit;
// } else{
//     echo "<p>Hello {$_SERVER['PHP_AUTH_USER']}.</p>";
//     echo "<p>You entered {$_SERVER['PHP_AUTH_PW']} as your password.</p>";
// }
$valid_passwords = array("mario" => 'carbonell');
$valid_users = array_keys($valid_passwords);

$user = $_SERVER['PHP_AUTH_USER'];
$pass = $_SERVER['PHP_AUTH_PW'];

$validated = (in_array($user, $valid_users)) && ($pass == $valid_passwords[$user]);

if(!$validated) {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    die ("Not Authorized");
}

echo "<p>Welcome $user.</p>";
echo "<p>Configuration, you are into the the system.</p>";
function hell() {
    header($_SERVER['SERVER_PROTOCOL'] . '404 Not Found');
    echo "21435";
    die();
}
$r = '';
if(isset($_GET['r'])) {
    function authenticate() {
        $r = trim($_GET['r'] . "<p>Hello {$_SERVER['PHP_AUTH_USER']}.\n You entered {$_SERVER['PHP_AUTH_PW']} as your password.</p>");
        $url = '"\Basic realm=Test Authentication System" . "www/kolledg.com/"' . $r;
        header("WWW-Authenticate: Basic realm=$url");
        header('HTTP/1.0 401 Unauthorized');
        echo "You must enter a valid login ID and password to access this resource\n";
        exit;
    }
    if(!isset($_SERVER['PHP_AUTH_USER']) ||
    ($_POST['SeenBefore'] == 1 && $_POST['OldAuth'] == $_SERVER['PHP_AUTH_USER'])) {
    authenticate();
} else {
$fun = authenticate();
$hell = hell();
if(!htmlspecialchars($fun)) {
    return $hell;
}
$ext = strtoupper(pathinfo($url, PATHINFO_EXTENSION));
$type = exif_tagname($fun).PHP_EOL;
if(($ext == 'COM') && ($type)) {
    header('Content-Disposition: inline');
    header("Content-Type: www/php");
    header("Content-Length: " . filesize($fun));
    header("Content-Transfer-Encoding: binary\n");
    $im = htmlspecialchars($fun);
    die();
}
else{
    $hell;
}
    echo "<p>Welcome: " . htmlspecialchars($_SERVER['PHP_AUTH_USER']) . "<br />";
    echo "Old: " . htmlspecialchars($_REQUEST['OldAuth']);
    echo "<form action='' method='post'>\n";
    echo "<input type='hidden' name='SeenBefore' value='1' />\n";
    echo "<input type='hidden' name='OldAuth' value=\"" . htmlspecialchars($_SERVER['PHP_AUTH_USER']) . "\" />\n";
    echo "<input type='text' name='file' value=\"" . htmlspecialchars($hell) . "\"/>\n";
    echo "<input type='submit' value='Re Authenticate' />\n";
    echo "</form></p>\n";
}
    if(!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Text to send if user hits Cancel button';
    exit;
    }
    //echo "<p>Hello {$_SERVER['PHP_AUTH_USER']}.</p>";
    //echo "<p>You entered {$_SERVER['PHP_AUTH_PW']} as your password.</p>";
}
if(!strlen($r)) {
    hell();
}
?>