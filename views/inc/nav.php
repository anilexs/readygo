</head>
<body>
    <?php if(isset($_COOKIE['userId'])){ ?>
        <nav>
            <div class="logo">
                <img src="http://localhost/readygo/views/asset/img/logo.png" alt="">
            </div>
            <ul>
                <li><a href="http://localhost/readygo/">Home</a></li>
                <li><a href="http://localhost/readygo/machin">Machin</a></li>
                <li><input type="text"></li>
                <li><button><div><img src="http://localhost/readygo/views/asset/img/profile-defaux.png" alt=""></div> 
                <div><span><?= $userInfo['sold'] ?> €</span></div></button></li>
            </ul>
        </nav>
    <?php }else{ ?>
        <nav>
            <div class="logo">
                <img src="http://localhost/readygo/views/asset/img/logo.png" alt="">
            </div>
            <ul>
                <li><a href="http://localhost/readygo/">Home</a></li>
                <li><a href="http://localhost/readygo/machin">Machin</a></li>
                <li><input type="text"></li>
                <li><a href="http://localhost/readygo/connexion">connexion</a><span class="hr">|</span><a href="http://localhost/readygo/inscription.php">inscription</a></li>
            </ul>
        </nav>
    <?php } ?>