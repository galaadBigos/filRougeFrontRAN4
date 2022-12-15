<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/general.css">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/joueurs.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <title>FC Metz | Joueurs</title>
</head>
<body>
    <?php require_once '../includes/header.php' ?>
    <main>
        <div class="bg">
            <h1>Les joueurs</h1>
            <div class="joueurs-container">
                <?php require_once '../includes/joueurs-list.php' ?>
            </div>
        </div>
    </main>

    <?php require_once '../includes/footer.php' ?>
    </body>
</html>