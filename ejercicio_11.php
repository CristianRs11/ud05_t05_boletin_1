<html>
	<body>
		<?php
            for ($i=1; $i <=9 ; $i++) { 
                if ($i==9){
                    for ($m=1; $m <= $i; $m++) { 
                        echo "*";
                    }
                    echo "<br/>";
                }
                else{
                    if ($i<=2){
                        for ($m=1; $m <= $i; $m++) { 
                            echo "*";
                        }
                        echo "<br/>";
                    }
                    else{
                        echo "*";
                        for ($m=1; $m <= $i-2; $m++) { 
                            echo "&nbsp&nbsp";
                        }
                        echo "*";
                        echo "<br/>";
                    }
                }
            };
		?>
	</body>
</html>
