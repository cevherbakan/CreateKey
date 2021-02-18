<?php




class KeyClass
{
 
 
 
    function createKey($key)  // createKey fonksiyonu sha3-256 formatında bir milyon defa key üretir.
    {

    $new_key = hash('sha3-256' , rand());
    
        
        for($x = 0; $x < 10000000; $x++)
        {
            
                
            $new_key = $this->xorKey($key,$new_key);  // yeni üretilen anahtar değeri her seferinde xorKey methoduna gönderilir
            $key = $new_key;
            $new_key = hash('sha3-256' , $new_key);
            

        
        }
        
        $result["key"] = $new_key;
        
        
        return $result;
    }
    
    
    function xorKey($key,$new_key)  // xorKey methodu gelen anahtar değerlerine xor işlemi uygular ve tekrar dönderir.
    {
        
            $sLength = strlen($key);
            $xLength = strlen($new_key); 
                    
                    
            for($i = 0; $i < $sLength; $i++) {
            
                for($j = 0; $j < $xLength; $j++) {
                    

                    $new_key[$i] = $new_key[$i]^$key[$j];
                                
                }
                
            }
            
        return $new_key;
    }
    
    
    
}


?>
