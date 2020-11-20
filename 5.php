<?php
$course = array("PHP", "Java", "Javascript", "C#");
print_r($course); echo '</br>';
function removeItems(&$array, $location = "first", $total = 2){
    $result = array();
    if(!empty($array)){
        if($total >= count($array)){
            $result = "null";   
        }else{
            if($location == "first"){
                for($i = 1; $i <= $total; $i++){
                    $result[] = array_shift($array);
                }
            }elseif($location == "last"){
                for($i = 1; $i <= $total; $i++){
                    $result[] = array_pop($array);
                }
            }else{
                $result = "Not";
            }
        }
    }
    return $result;
}
$arr = removeItems($course, "first", 3);

echo 'arr :';
echo '<pre>';
print_r($arr);
echo '</pre>';

echo 'course :';
echo '<pre>';
print_r($course);
echo '</pre>';
?>