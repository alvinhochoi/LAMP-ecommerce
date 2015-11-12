<!doctype html>
<html>
<head>
    <title>Products Page</title>
    <meta charset='utf-8'>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-2.1.3.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <style>

    div.header4{
        background-image: url(http://i.imgur.com/ykV5YUr.png);
        height: 120px;
        padding: 10px 20px;
    }

    #catchem{
        height: 90px;
    }

    .search{
        width: 300px;
        height: 40px;
        border-radius: 10px;
    }

    #catchem, #searchBar, #types, #cart{
        display: inline-block;
        margin-right: 5px;
    }

    #searchBar, #types, #cart{
        vertical-align: bottom;
    }

    #searchBar{
        margin-left: 50px;
    }

    div.container{
        width: 95%;
    }

    div.right_nav{
        min-height: 700px;
        padding: 30px;
        background-image: url('http://pre07.deviantart.net/ded8/th/pre/f/2013/295/1/1/chrome_pokeball_wallpaper_by_aleksparx-d6rf3se.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
    }

    .box{
        display: inline-block;
        margin: 5px;
    }

    </style>
</head>
<body>

    <div class='header4'>
        <img id='catchem' src="http://cdn.bulbagarden.net/upload/thumb/1/13/English_motto.png/250px-English_motto.png">
        <form id='searchBar' action='/products/load_search' method='post'>
            <input class='search' type='text' name='search' width='200px' placeholder=' Search by Product Name'>
            <input type='submit' class='btn btn-primary' value="Search">
        </form>

        <div id='types' class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Search by Type
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
<?php               foreach($types as $type){  ?>
                    <li><a href="/products/category/<?=$type['category'];?>"><?=$type['category'];?></a></li>
<?php               } ?>
            </ul>
        </div>

        <div id='cart' class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"> View Cart
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
<?php               $cart_info = $this->session->userdata('cart');
                    if ($cart_info){
                        foreach($cart_info as $cart){ ?>
                            <li><?= $cart['amount']; ?> : <?= $cart['name']; ?></li>
<?php                   }
                    }
                    else{ echo " Cart : Empty"; } ?>
                    
                    <li><h5><a href="/dashboards/checkout">Checkout</a></h5></li>
            </ul>
        </div>
    </div>
        
    <div class='container'>
        <div class='right_nav'>
<?php       foreach($products as $pokemon){
                echo "<div class='box'><a href='/products/one_pokemon/".$pokemon['id']."'><img src='/" . $pokemon['image'] . "' width='130px' height='130px' alt='img'></a></div>";
            }?>
        </div>
        COPYRIGHT@2015
    </div>
</body>
</html>
