<?php
    $wisata = [
        [
            "image" => "bali.png",
            "country" => "Indonesia",
            "destination" => "Deratan, Bali"
        ],
        [
            "image" => "bromo.png",
            "country" => "Indonesia",
            "destination" => "Bromo"
        ],
        [
            "image" => "nusa-penida.png",
            "country" => "Indonesia",
            "destination" => "Nusa Penida"
        ],
        [
            "image" => "paris.png",
            "country" => "France",
            "destination" => "Paris"
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisata Popular</title>

    <style>
        .container {
            margin: 30px 90px;
            box-sizing: border-box;
        }

        .section-title {
            text-align: center;
            margin-bottom: 100px;
        }

        .section-title h2 {
            margin-bottom: 0;
            font-family: Playfair Display;
            font-style: normal;
            font-weight: bold;
            font-size: 40px;
            line-height: 53px;
        }
        
        .section-title p {
            margin-top: 14px;
            font-family: Volte;
            font-style: normal;
            font-weight: normal;
            font-size: 18px;
            line-height: 24px;
            text-align: center;
        }

        .contents {
            display: flex;
            justify-content: space-between;
            
        }

        .item-content {
            padding: 12px 16px;
            background-color: #f1f1f1;
            text-align: center;
            border-radius: 10px;
            text-transform: uppercase;
        }

        .content-img {
            padding: 0;
            border-radius: 10px;
        }

        .content-desc h3 {
            font-family: Volte;
            font-style: normal;
            font-weight: normal;
            font-size: 18px;
            line-height: 24px;
            margin-top: 14px;
            margin-bottom: 0;
        }

        .content-desc h4 {
            font-family: Volte;
            font-style: normal;
            font-weight: 600;
            font-size: 26px;
            line-height: 34px;
            margin-top: 4px;
            margin-bottom: 18px;
        }

        .view-btn {
            padding: 14px 60px;
            font-family: Volte;
            font-weight: 500;
            font-size: 20px;
            color: white;
            line-height: 26px;
            background-color: #EE6F57;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            transition: 0.5s;
        }

        .view-btn:hover {
            background-color: #c25d4a;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="popular">
            <div class="section-title">
                <h2>Wisata Popular</h2>
                <p>
                Something that you never try
                <br />before in this world
                </p>
            </div>
                <div class="contents">
                <?php foreach($wisata as $wst) : ?>
                    <div class="item-content">
                        <img class="content-img" src="img/<?= $wst["image"]; ?>" alt="">
                        <div class="content-desc">
                            <h3><?= $wst["country"] ; ?></h3>
                            <h4><?= $wst["destination"] ; ?></h4>
                            <button class="view-btn">View Details</button>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
        </div>
    </div>
    
</body>
</html>