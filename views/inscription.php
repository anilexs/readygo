<?php require_once "inc/header.php"; ?>
<link rel="stylesheet" href="asset/css/inscription.css">
<title>Document</title>
<?php require_once "inc/nav.php"; ?>
<form action="traitement/action.php" method="post">
    <div>
        <label for="">nom :</label>
        <input type="text" name="nom" id="">
    </div>
    <div>
        <label for="">prenom :</label>
        <input type="text" name="prenom" id="">
    </div>
    <div>
        <label for="">pseudo :</label>
        <input type="text" name="pseudo" id="">
    </div>
    <div>
        <label for="">email :</label>
        <input type="email" name="email" id="">
    </div>
    <div>
        <label for="">password :</label>
        <input type="password" name="password" id="">
    </div>
    <input type="submit" value="s'inscrire" name="inscription">
</form>
<?php require_once "inc/footer.php"; ?>