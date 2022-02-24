<?php session_start();?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="js/jquery/jquery-3.6.0.min.js" defer></script>
    <script src="js/main.js" defer></script>
    <script src="../assets/boostrap/js/bootstrap.min.js" defer></script>
    <link rel="stylesheet" href="../assets/boostrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/style.css">
    <title>Школьный портал</title>

</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
        <div class="container-sm">
            <a class="navbar-brand" href="#">
                <img src="../assets/img/logo.svg" alt="" width="60" height="48" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="library.php">Библиотека</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="usp.php">Успеваемость</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="calendar.php">Календарь мероприятий</a>
                    </li>

                </ul>

                <?php
                if(isset($_SESSION['User'])){
                    ?>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php   echo 'Логин: ' . $_SESSION['User']['login'];?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="profile.php">Личный кабиент</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <form action="controllers/exit.php" method="post">
                                    <li><button class="dropdown-item link-danger" name="ExitOnClick" href="#">Выйти</button></li>
                                </form>
                            </ul>
                        </li>
                    </ul>
                    <?php
                }
                else{
                    ?>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Войти
                    </button>
                    <?php
                }
                ?>

            </div>
        </div>
    </nav>
    <div class="container-sm">
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Вход</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <?php require_once 'views/entrance.php'?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>

</body>
