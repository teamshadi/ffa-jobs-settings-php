<?php

//run python with shell exec()

//$result= shell_exec("python -m http://localhost:8000/emailffa/36/");
//var_dump($result); //output should be in here
// create a new cURL resource
$ch = curl_init();

// set URL and other appropriate options
curl_setopt($ch, CURLOPT_URL, "http://localhost:8000/emailffa/20/");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// grab URL and pass it to the browser
//curl_exec($ch);
//curl_close($ch);


$contents = curl_exec($ch);
//$response_start = strPos($buffer, "<li>");
//$response_end = strPos($buffer, "</li>", $response_start);
//$temp_code = substr($buffer, $response_start + 4, ($response_end - $response_start - 4));

//var_dump($temp_code);



//while (strpos($contents, '<li>'))
//{
   // $start = strpos($contents, '<li>');
    //$end = strpos($contents, '</li>', $start) + 7;
    //$rstring = substr($contents, $start, $end - $start);
    
   // echo $rstring;
//}
    

?>





