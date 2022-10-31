
<html>
<body>

    <?php
        $variable=10;
        $string="ayush";
        $second=11;
        // echo "it worked!";
        print($variable+$second);

        if($second>6){
            print($second+69969696);
        }
        else{
            print($variable);
        }

        print("<br>");
        for($i=0;$i<5;$i++){
            print($i."<br>");
        }

        $arr=array("1","2","3","4");

        foreach ($arr as $i =>$j){
            print("key=".$i." value=".$j);
        }

        echo "<br>";

        $str="my name is ayush";
        print(ucfirst($str));

        $random_key=array_rand($arr,1);

        print($random_key);

        $strr="<br>skip\tthis char";
        print($strr);

    ?>

</body>
</html
