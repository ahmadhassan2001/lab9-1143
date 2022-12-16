<?php
    
    echo "Email: ";
    echo $_POST ["email"];
    echo "<br>";
    echo "Password: ";
    echo $_POST ["password"];
    echo "<br>";
    echo "Slected: ";
    echo $_POST ["gradio"];
    echo "<br>";
    echo "Check Box: ";
    if(isset($_POST['checkbox'])){
        echo "True";
    }
    else{
        echo"False";
    }
    echo "<br>";
    $arr = array('2','5','4');
    function sorting($arr , $str){
    if($str == "ASC")
    {
        asort($arr);
        echo "Ascending Sort: ";
        foreach($arr as $ascendarray)
        {
            echo $ascendarray;
            echo "<br>"; 
        }

    }
    else if($str == "DESC")
    {
        rsort($arr);
        echo "Descending Sort: ";
        echo "<br>";
        foreach($arr as $descendarray)
        {
            echo $descendarray;
            echo "<br>"; 
        }

    }

 }
        sorting($arr , "DESC");
        
    echo "<br>";
    if($_POST ["gradio"] == "option 1"){
       $array = range(0,100);
       shuffle($array);
       $random_keys = array_slice($array,0,100);
       sorting($random_keys,'DESC');
    }

    else if($_POST ["gradio"] == "option 2")
    {
        $array = range(0,100);
        shuffle($array);
        $random_keys = array_slice($array,0,100);
        print_r($random_keys);
        echo "<br>";
        sorting($random_keys,"DESC");


    }
    
?>