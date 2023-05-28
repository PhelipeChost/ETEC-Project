<?php

session_start();

?>

<!DOCTYPE html>

<html>

<title>Login</title>

    <head>

        

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css1/bootstrap.min.css">

        

        <link rel="icon" href="Imagens/home-logo.png">

        

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">





        <style>

            

            body {

                background: black;

            }
            
            .logo-circular-principal {

                border-radius: 100%; 

                padding: 10px;

                text-align: center;

            }

            

            /* Iniciar Sessão */

            

            .container-sessão {

                width: 650px;

                height: 600px;

                margin-left: auto;

                margin-right: auto;

                margin-top: 80px;

                padding: 20px;

                margin-bottom: 80px;

                color: white;

                background: black;

                box-shadow: 0px 0px 0px 1px gray;

            }

            

            .titulo {

                font-family: sans-serif;

                margin-top: 50px;

                text-align: center;

                font-size: 40px;

                font-weight: 600;

            }

            .titulo2 {

                font-family: sans-serif;

                text-align: center;

                font-size: 20px;

                font-weight: 600;


            }


            .nao_autenticado {

                font-size: 18px;

                color: red;

                margin-left: auto;

                margin-right: auto;

                text-align: center;

                margin-top: 10px;

                margin-bottom: -50px;

                padding: 10px;

            }
            

            .usuario-container {  

                width: 450px;

                margin-left: auto;

                margin-right: auto;

                margin-top: 10px;

                padding: 10px;

            }



            input {

                font-size: 20px;

                font-family: monospace;

                font-weight: 50;

                background: black;

                color: white;
                
                box-shadow: 0px 0px 0px 1px white;

            }

            

            #usuario {

                width: 450px;

                margin-top: 5px;

                display: block;

                padding: 25px;

                border-radius: 5px;

            }

            

            #usuario::placeholder {

                font-weight: 700;

                font-size: 20px;

            }

            

            #usuario:placeholder-shown {

                border: 2px solid black;

            }



            #senha {

                width: 450px;

                margin-top: 5px;

                display: block;

                padding: 25px;

                border-radius: 5px;

            }

            

            #senha::placeholder {

                font-weight: 700;

                font-size: 20px;

            }

            

            #senha:placeholder-shown {

                border: 2px solid black;

            }

            .btn {
                position: relative;
                float: right;
                left: 10px;
                border: none;
                top: auto;
                margin-top: -65px;
                margin-right: 20px;
            }

            .avancar {

                background: black;
                
                color: white;

                margin-top: 10px; 

                width: 150px;

                border-radius: 25px;

                padding: 10px;

                margin-bottom: 25px;

                font-weight: 500;

                box-shadow: 0px 0px 0px 1px white;

                font-family: sans-serif;

                transition: all 0.5s;

            }

            .avancar:hover {
                width: 200px;
            }


            .criar-conta {

                padding: 5px;

                font-size: 18px; 

                color: white; 

                text-decoration: none; 

                font-weight: 500;

                transition: all 0.5s;

            }



            .criar-conta:hover {
                color: red;
                box-shadow: 0px 2px 0px black;
                text-decoration: none;

            }




            /* FIM Iniciar Sessão */

        </style>



    </head>

        <body>

            <div style="background: black; box-shadow: 0px 0px 2px white;">

                <img src="Imagens/home-logo-circular.png" class="img-fluid logo-circular-principal" width="100">

            </div>



                <div  class="img-responsive container-sessão">
                    <h1 class="col titulo">NSA - ONLINE</h1><h3 class="col titulo2">Login</h3>
                    <form class="form-floating" method="POST" action="login.php">
                        <div class="container-fluid">
                            <?php
                                if(isset($_SESSION['nao_autenticado'])):
                            ?>
                            <h3 class="text h6 nao_autenticado">Usuário ou senha Incorretos</h3>
                            <?php
                                unset($_SESSION['nao_autenticado']);
                                endif;
                            ?>   
                        </div>
                        <div class="img-responsive usuario-container">
                            <input class="img-responsive" name="usuario" name="text" placeholder="RM" id="usuario" style="margin-top: 30px;" minlength="5" maxlength="16">
                            
                            <input class="img-responsive" id="senha" name="senha" type="password" name="senha" placeholder="Senha" minlength="8" maxlength="16">

                            <button type="button" class="btn display" onclick="mostrarSenha()"><img src="images/olho2.png" width="40"></button> 
                        </div>
                        <script>
                            function mostrarSenha() {
                                var tipo = document.getElementById("senha");
                                if(tipo.type == "password") {
                                    tipo.type = "text";
                                }else{
                                    tipo.type = "password";
                                }
                            };
                        </script>
                        <div class="img-responsive" style="margin-top: 30px;">
                            <center><button type="submit" class="avancar">Entrar</button></center>
                            <!-- <center><a href="recuperar-conta.php" id="criar-conta">Esqueceu a senha?</a></center> -->
                            <center><a href="cadastro-pag.php" class="criar-conta">Sou aluno novo</a></center>
                        </div>
                    </form>
                </div>
        </body>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>

    

</html>