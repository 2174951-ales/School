<?php  

for ($i = 1; $i <= 50; $i++) {
    echo $i . " ";
    }
echo "<br>";

$namen = array("Mikey", "Bronny", "Adin", "Jonathan", "levinio", "Lamelo", "jaquavius", "Javontay", "Tim", "9lokknine");


foreach ($namen as $names) {
    echo $names . "<br>" ;
}



$maanden = ['Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December']; 


for ($i = 0; $i < count($maanden); $i++) {
    
    
    echo "<br>" . 'Maand ' . ($i + 1) . ' is ' . $maanden[$i] . ".";

}


?>