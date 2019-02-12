
<?php
    // Сумма //////////////////////////////
    function my_array_sum($arr4) {
        static $s=0;
        for ($i=0; $i < count($arr4); $i++) { 
            $s = $s + $arr4[$i];
        }
        return $s;
    }

    function my_array_sum2 ($arr4) {
        $s = 0;
        foreach ($arr4 as $value) { 
            $s = $s + $value;
        }
        return $s;
    }


    // Произведение //////////////////////////////
    function my_array_product($arr4) {
        $s = 1;
        for ($i=0; $i < count($arr4); $i++) { 
            $s = $s * $arr4[$i];
        }
        return $s;
    }
    
    function my_array_product2 ($arr4) {
        $s = 1;
        foreach ($arr4 as $value) { 
            $s = $s * $value;
        }
        return $s;
    }


    // Реверс //////////////////////////////
    function my_array_reverse($arr4){
        for ($i=count($arr4)-1; $i >= 0; $i--) { 
            $arr5[] = $arr4[$i];
        }
        return $arr5;
    }

    function my_array_reverse2($arr4){
        $size = count($arr4);
        foreach ($arr4 as $key => $value) {
            $size--;
            $arr5[$size] = $value;
        }
        return $arr5;
    }


    // Поиск по элементу //////////////////////////////
    function my_array_search($arr4){
        for ($i=0; $i < count($arr4); $i++) { 
            if($arr4[$i] == 5){
                $res = $arr4[$i];

            }
        }
        return $res;
    }

    function my_array_search2($arr4){
        foreach ($arr4 as $key => $value) {
           if ($value == 5){
            $res = $arr4[$i];
           }   
        }
        return $res;
    }
    
    
    // in_array //////////////////////////////
    function my_in_array($arr4){
        for ($i=0; $i < count($arr4); $i++) { 
            if($arr4[$i] == 5){
                return true;
            }
            else {
            return false;
            }
        } 
    }

    function my_in_array2($arr4){
        foreach ($arr4 as $key => $value) {
            if ($value == 5){
                return true;
            }   
            else {
                return false;
            }
        }
    }
    

    // array_key_exists //////////////////////////////
    function my_array_key_exists($arr4){
        for ($i=0; $i < count($arr4); $i++) { 
            if($arr4[$arr4[$i]] == 5){
                return true;
            }
            else {
            return false;
            }
        } 
    }

    function my_array_key_exists2($arr4){
        foreach ($arr4 as $key => $value) {
            if ($key == 5){
                return true;
            }   
            else {
                return false;
            }
        }
    }


    // array_flip //////////////////////////////

    function my_array_flip2($arr4){
        foreach ($arr4 as $key => $value) {
            $arr4[$value] = $key;
        }
    }
 
    // array_keys //////////////////////////////

    function my_array_keys2($arr4){
        foreach ($arr4 as $key => $value) {
            if ($key == 5) {
                $arr5 = $arr4[$key];
            }
           
        }
    }

    ?>