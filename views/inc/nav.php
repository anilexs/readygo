</head>
<body>
    <?php if(isset($_COOKIE['user_id'])){ ?>
        <nav>
            <div class="logo">
                <img src="<?= $host ?>views/asset/img/logo.png" alt="">
            </div>
            <ul>
                <li><a href="<?= $host ?>">Home</a></li>
                <li><a href="<?= $host ?>machin">Machin</a></li>
                <li><input type="text"></li>
                <li><a href="<?= $host ?>sold" class="soldPage"><div class="userSold"><?= $userInfo['sold'] ?> € <i class="fa-solid fa-plus"></i></div></a></li>
                <li><button><div><img src="<?= $host ?>views/asset/img/profile-defaux.png" alt=""></div> 
                <div class="pseudo"><span><?= $userInfo['pseudo'] ?></span></div></button></li>
            </ul>
        </nav>
    <?php }else{ ?>
        <nav>
            <div class="logo">
                <img src="<?= $host ?>views/asset/img/logo.png" alt="">
            </div>
            <ul>
                <li><a href="<?= $host ?>">Home</a></li>
                <li><a href="<?= $host ?>machin">Machin</a></li>
                <li><input type="text"></li>
                <li><a href="<?= $host ?>connexion">connexion</a><span class="hr">|</span><a href="<?= $host ?>inscription.php">inscription</a></li>
            </ul>
        </nav>
    <?php } ?>