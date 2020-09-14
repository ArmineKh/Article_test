
<?php
$articleTesxt = "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
Tempore inventore vitae maxime accusantium dolores repellendus quam eos dignissimos 
aspernatur saepe quia et laboriosam natus reiciendis delectus facilis aliquam, ullam 
eius est minus molestias nihil. Vero, reiciendis, quas necessitatibus eum non odit 
tempora molestiae dicta quo laboriosam deserunt quam repudiandae nisi sint voluptatem. 
Ut odio ullam, perspiciatis inventore non, magni ad optio alias labore quia aut eligendi 
voluptatibus a omnis excepturi error quas repellat cupiditate distinctio tempora sed tempore! 
Voluptatem tenetur distinctio nisi corporis quasi? Ea soluta sed quidem in aliquid veritatis 
tempora commodi numquam ut doloremque. Dolor nobis maxime dolorum, molestias vel tempora 
provident soluta excepturi numquam sed assumenda aliquam reprehenderit molestiae est 
delectus fuga magnam aperiam saepe sapiente corporis! Alias fuga odit iste! Voluptatibus 
corrupti distinctio dicta eum illo consectetur perferendis architecto amet inventore nobis 
dolores consequatur, optio provident. Nemo, autem laboriosam. Tempora consectetur praesentium 
corrupti, tempore nesciunt reprehenderit!";
function articleContentFunction($articleTesxt){
    return $articleTesxt;
}


$articleLink = "page.php";

$articlePreview = "";

function readMoreFunction($articleTesxt){
    global $articleLink;
    if(strlen ($articleTesxt) > 200){
        $articlePreview = substr($articleTesxt, 0, 200);
        $articlePreviewArray = explode(" ", $articlePreview);
        $last3words = array_slice($articlePreviewArray, count($articlePreviewArray) - 3, 3, true);
        array_splice($articlePreviewArray, count($articlePreviewArray) - 3);
        $articlePreview = implode(" " , $articlePreviewArray);
        $articleLinkName = "<a href=".$articleLink." class='readMore'> ".implode(" " , $last3words)."..."."</a>";
        $articlePreview = $articlePreview.$articleLinkName;

        return $articlePreview;
    }else{
        return $articleTesxt;
    }
}

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Article</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8 m-auto">
            <div class="card" style="width: 100%;">
            <div class="card-body">
                <h5 class="card-title">Article</h5>
                <p class="card-text"><?php echo readMoreFunction($articleTesxt) ?></p>
            </div>
            </div>
        </div>
    </div>
</div>


   
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>