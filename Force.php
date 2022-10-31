<?PHP
$username = $_POST['username'];
print($username);
if ($username == "you will let me in") {
print ("Welcome back, friend!");
}
else {
print ("You're not a member of this site");
}

$brow=$_SERVER["HTTP_USER_AGENT"];

if(strpos(($brow),'MSIE')){
    print("Internet Explorer");
}
else if(strpos(($brow),'Firefox')){
    print("Firefox");
}
else{
    print($brow);
}
?>
