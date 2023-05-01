

<?php

if (!defined('ABSPATH')) {
    die('-1');
}

console("services_single");
function services_single_script()
{
    console("function services_single");
?>
    <script>
        console.log("replace");
        for(var i = 0 ; i <= 3 ; i++){
            document.getElementById("moein_product").innerHTML.replace("افزودن به سبد خرید" , "جزییات بیشتر");
        }
    </script>
<?php
}

?>