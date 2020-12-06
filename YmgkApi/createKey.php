
<?php


include "./class.php";
header("Access-Control-Allow-Origin: *");      
header("Access-Control-Allow-Headers:
{$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

    $postdata = file_get_contents("php://input");

    if(isset($postdata)){
        $request = json_decode($postdata);



        if (!empty($request->key)) {
            
            $key = $request->key;
            
            $keyObject = new KeyClass();
            echo json_encode($keyObject->createKey($key), JSON_UNESCAPED_UNICODE);

        }
        
        else
        {
            $result["result"] = "no key value";
            echo json_encode($result, JSON_UNESCAPED_UNICODE);
        }
   
    } 
    else {
     $result["result"] = "no key value";
     echo json_encode($result, JSON_UNESCAPED_UNICODE);
 }
 
    


        


?>