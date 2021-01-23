
<?php


include "./class.php";
header("Access-Control-Allow-Origin: *");      
header("Access-Control-Allow-Headers:
{$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

    $postdata = file_get_contents("php://input");

    if(isset($postdata)){   //Verinin gönderilip gönderilmediğini kontrol eder
        $request = json_decode($postdata);  // json formatında alınan veri değişkene aktarılır.


        if (!empty($request->key)) {
            
            $key = $request->key;   // Verinin key değeri alınır
            
            $keyObject = new KeyClass();    // KeyClass sınıfından bir nesne üretilir
            echo json_encode($keyObject->createKey($key), JSON_UNESCAPED_UNICODE); // işlem sonucu dönderilir

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
