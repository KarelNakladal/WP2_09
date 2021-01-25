<?php 
const MONSTER_COUNT = 4;    
for($i =0; $i < MONSTER_COUNT; $i++ ){
drawMonster(rand(0,3),rand(100,1000));
}
function drawMonster($type,$size){
    echo("$size");
    echo("<br>");
    echo("$type");
    echo("<br>");

    echo("<img src=\"monster$type.jpg\" width=\"$size\" height=\"$size\">");

}

?>