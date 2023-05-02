

<?php

if (!defined('ABSPATH')) {
    die('-1');
}

console("services_single");
function services_single_script()
{
    replace_txt_add_to_cart();
}

function replace_txt_add_to_cart(){
    ?>
    <script>
        for(var i = 0 ; i <= 3 ; i++){
            document.getElementById("moein_product").innerHTML = document.getElementById("moein_product").innerHTML.replace("افزودن به سبد خرید" , "جزییات بیشتر");
        }
    </script>
<?php
}
?>