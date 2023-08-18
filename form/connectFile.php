<?php
$title= "Haupt site";
require_once "./blocks/header.php";
?>


<h1>Haupt site</h1>




<h2> Hi every one, this is my frist PHP page</h2>

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam ut maiores dolore, quasi voluptas veritatis minima nam totam, consectetur dicta aliquid impedit. Aliquid, illo possimus. Maxime praesentium maiores natus porro at est, ullam odio. Placeat eos rem vero consectetur dolores aliquam dolorem animi obcaecati fuga voluptas reiciendis aperiam adipisci omnis laborum ut natus, minus quod. Consectetur quisquam eaque rem similique repudiandae ab. Assumenda quos consequatur ab non recusandae earum voluptatum in placeat iure, quam, natus mollitia! Alias dolorum deserunt ipsam hic provident accusamus expedita omnis recusandae? Aliquam error dolores libero molestias dolor! Ipsum similique rerum accusamus sint illum, aperiam nemo ad illo atque amet quisquam earum eum ea vel, accusantium laborum dignissimos animi voluptate eaque nam? Exercitationem incidunt corrupti asperiores aut, hic quo deserunt, aliquid fugiat facere laborum ratione voluptatum dolor, a consequatur sed. Pariatur voluptatum vero nulla, porro aspernatur dolorum corporis nisi non itaque quia eum aliquid. Sunt earum autem ducimus cumque repellat cum quidem temporibus deserunt deleniti omnis. Unde aspernatur voluptatem et expedita natus perferendis voluptates qui. Eligendi fugit maiores dignissimos dolores illum et, laudantium possimus blanditiis sit, aut officiis, corrupti harum corporis labore necessitatibus cupiditate excepturi temporibus voluptatum id numquam incidunt nesciunt. Iure sequi minima tenetur soluta?</p>








<?php
// date
// echo date('m-l-h:i:s'). '<br>';
echo gmdate("F j, Y, g:i a"). '<br>';
echo date('m-d H:i:s', strtotime("+1 Hour")). '<br>';
// echo time(). '<br>';
require_once "./blocks/footer.php";
?>

