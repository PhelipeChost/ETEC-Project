<?php

    require 'seguranca.php';

    session_start();

?>

<!DOCTYPE html>

<html>

    <title>Cadastro NSA</title>

    <head>

        

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css1/bootstrap.min.css">

        

        <link rel="icon" href="images/icon-etec.png">

        

        

        

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">





        <style>

            

            body {

                background: url("Imagens/Fundo-pagcadastro.png")  black;

                background-repeat: no-repeat;



            }

            

            /* Logo */



            .logo-circular-principal {

                padding: 10px;

                text-align: center;
                


            }


            /* FIM logo */



            /* Iniciar Sessão */

            

            .container-sessão {

                background: black;

                color: white;

                width: 650px;

                height: 600px;

                margin-left: auto;

                margin-right: 100px;

                margin-top: 60px;

                padding: 20px;

                margin-bottom: 50px;

                box-shadow: 0px 0px 0px 1px white;

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

            .usuario-container {  

                width: 450px;

                margin-left: auto;

                margin-right: auto;

                margin-top: 40px;

                padding: 10px;

            }

            .input {

                font-size: 18px;

                font-family: monospace;

                font-weight: 700;

                width: 450px;

                color: white;

                background: black;

                box-shadow: 0px 0px 0px 1px white;

            }

            #email {

                

                margin-top: 5px;

                display: block;

                padding: 25px;

                border-radius: 5px;   

            }



            #email::placeholder {

                font-weight: 700;

                font-size: 20px;

            }

            

            #email:placeholder-shown {

                border: 2px solid black;  

            }



            #usuario {

                

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

                <img src="images/etec-logo.jpg" class="img-fluid logo-circular-principal" width="120">

            </div>



                <div class="img-responsive container-sessão">

                    <h1 class="col titulo">NOS INFORME:</h1>
                    <h3 class="col titulo2">Cadastro</h3>

                    <form class="form-floating" method="POST" onsubmit="senhaOK();" action="cadastrar.php">    

                        <div class="img-responsive usuario-container">

                            <!-- <input class="img-responsive input" type="email" maxlength="50"  name="text" placeholder="Email" id="email" maxlength="40"> -->
                            

                            <input class="img-responsive input" name="usuario"  name="text" placeholder="RM" id="usuario" style="margin-top: 30px;" minlength="5" maxlength="5">

                            <input class="img-responsive input display" name="senha" type="password" placeholder="Senha" name="senha" require onchange='confereSenha()' id="senha" minlength="8" maxlength="16">
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

                            <center><button type="submit" class="avancar">ENTRAR</button></center>

                            <center><a href="index.php" class="criar-conta">Já estou Cadastrado</a></center>

                        </div>

                    </form>

                </div>

        </body>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>

    

</html>