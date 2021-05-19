<?php
function productCard($productID, $name, $img, $price)
{
    echo "
<div class='card'>
<img src='public/uploads/$img' alt='porduct.png'>
<h3>$name</h3>
<h3>$price</h3>
<button>See More</button>
</div>
";
}
