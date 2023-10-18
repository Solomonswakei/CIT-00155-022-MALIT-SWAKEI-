<?
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["name"])){
        $nameErr="name is required field";
        echo $nameErr;
    }
}
else{
    $name=test_input($_POST["name"]);
    echo $name."<br>";
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["website"])){
        echo"website is required field";
    }
    else{
        $website=test_input($_POST["website"]);
        echo $website."<br>";
    }
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
    echo"gender is a required field";
}
else{
    $gender=test_input($_POST["gender"]);
    echo $gender."<br>";

}
function test_input($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}
?>