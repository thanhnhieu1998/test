<?php
    $students = array(
        "SV001" => array("name" => "Peter", "sex" => 1, "score" => array(6, 7, 8)),
        "SV002" => array("name" => "John" , "sex" => 1, "score" => array(7,8,9)),
        "SV003" => array("name" => "Marry" , "sex" => 0, "score" => array(5,7,9))
    );
    echo '<pre>';
    print_r($students);
    echo '</pre>';

    foreach($students as $key => $value){
        $name = $value["name"];

        if( $value["sex"] == 1 ){
            $value["sex"] = "Boy";
        }elseif($value["sex"] == 0){
                $value["sex"] = "Girl";
        }else{
            $value["sex"] = "Không xác định";
        };

        $sex = $value["sex"];
        $score = $value["score"];
        // $score = array_sum($value["score"]);        có thể tính tổng nhanh bằng cách này
        $total = 0;
        for($i = 0; $i < count($score); $i++){
            $total += $score[$i]; 
        }
       
        echo $key . ": " . $name . " - " . $sex . " - " . $total . "</br>";
    }
?>