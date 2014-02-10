<?php

for ($i = 1; $i <= 100; $i++) {
    
    if ($i % 2 !== 0) {
        continue;
    }
    	echo $i . "\n";
    
}

?>


<?php

for ($i = 1; $i <= 100; $i++) {
    
    if ($i <= 10) {
    	echo $i . "\n";
        break;
    }
}