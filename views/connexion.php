<?php require_once "inc/header.php"; ?>
<title>Document</title>
<?php require_once "inc/nav.php"; ?>
<form action="traitement/action.php" method="post">
    <div>
        <label for="">email :</label>
        <input type="email" name="email" id="">
    </div>
    <div>
        <label for="">password :</label>
        <input type="password" name="password" id="">
    </div>
    <input type="submit" value="connexion" name="connexion">
</form>
<?php require_once "inc/footer.php"; ?>