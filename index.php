<?php
require_once("model.php"); 
 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Liste d'amis</title>
</head>
<body>
    <?php require_once("view/header.php") ?>
    <main>
        <section class="section1 container">
            <h1 class="text-center">My friends list !</h1>
            <?php $amis = getfriendsBD(); 
            foreach($amis as $ami){ ?>
            <ul class="list-group">
                <li class="list-group-item">Firstname : <?= $ami['firstname'] ?> , Lastname : <?= $ami['lastname'] ?></li>
                <li class="list-group-item"></li>
            </ul>
            <?php } ?>
        </section>
        <section class="2">
            <div class="container">
                <div class="bg-dark text-white text-center">Add friends !</div>
            </div>
        </section>
        <section class="section3 container">
            <form action="add.php" method="POST">
                <div class="mb-3 form-group">
                    <label for="firstname" class="form-label">Firstname :</label>
                    <input type="text" class="form-control" maxlength="45" id="firstname" name="firstname" placeholder="Add the firstname" required>
                </div>
                <div class="mb-3 form-group">
                    <label for="lastname" class="form-label">Lastname :</label>
                    <input class="form-control" maxlength="45" id="lastname" name="lastname" placeholder="Add the lastname" required></input>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit">Button</button>
                </div>
            </form>
        </section>
    </main>
    <?php require_once("view/footer.php") ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>