<?php
session_start();
if (isset($_POST['valider'])) {
        if (!empty($_POST['login']) and !empty($_POST['psw'])) {
        $login_admin ="admin";
        $psw_admin ="admin1234";

        $login_saisi = htmlspecialchars($_POST['login']);
        $psw_saisi = htmlspecialchars($_POST['psw']);
        if($login_saisi == $login_admin AND $psw_saisi ==$psw_admin){
            $_SESSION['psw'] = $psw_saisi;
            header('Location: index.php');
        }else{
            echo "Votre mot de passe ou pseudo est incorrect";
        }
    }else {
        echo "Veuillez completer tous les champs !";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>Espace admin</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section class="text-center ">
        <h1>Espace admin</h1>
        <form method="post" action="">
            <table align="center">
                <legend class="text-center p-2">Connexion</legend>
                <tr>
                    <td class="p-2 text-end">
                        <label for="login"> Votre login :</label>
                    </td>
                    <td>
                        <input type="text" placeholder="Entrez votre login" id="login" name="login">
                    </td>
                </tr>
                <tr>
                    <td class="p-2 text-end">
                        <label for="psw">Votre mot de passe : </label>
                    </td>
                    <td>
                        <input type="text" placeholder="Entrez votre mdp" id="psw" name="psw">
                    </td>
                </tr>
            </table>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="valider" class="m-3 btn btn-primary mx-5 px-5" name="valider">
                </td>

            </tr>

        </form>
    </section>
</body>

</html>
