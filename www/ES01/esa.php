<!DOCTYPE html> 
<html lang="en"> 
    <head> <title>Esempio ciclo for</title> </head> 
<body> 
    <h1>Generazione dinamica di una tabella html</h1> 
    <?php 
        echo '<table border="1">'; 
        for($i=0; $i<11; $i++) { 
            echo "<tr><td>$i</td></tr>"; 
            for($j=0; $j<11; $j++) { 
                echo "<tr><tr>$j</td></tr>"; 
                
            } 
        } 
        echo "</table>";
    ?> 
</body>
</html>