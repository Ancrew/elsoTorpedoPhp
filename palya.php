<?php
$teszt="teszt";
        echo file_get_contents('templates/head.tpl');
        echo file_get_contents('templates/topAnimacio.tpl');
        echo file_get_contents('templates/menu.tpl');
        echo file_get_contents('templates/palya.tpl');      
?>
<script>

<?php
    echo "var e = '$teszt';";
     ?>
    console.log(e);
   
</script>

        