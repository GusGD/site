<!doctype html>
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../views/assets/vendor/css/bootstrap.min.css">
        <link rel="stylesheet" href="../views/assets/css/contato.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>x-Top</title>
        
    </head>
    <body>
        <section id="section__1">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img class="js-tilt img-fluid logoxtop" src="../views/assets/img/logo-xtop.png" 
                            alt="logo xtop" width="200px"> 
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon">X</span>
                        </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active ">
                                <a class="nav-link" href="#">INICIO
                                    <span class="sr-only">(current)</span>
                                    </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h1 class="texto-contato">Entre em contato</h1>
                        </div>
                    </div>
                    <div class="row row-contato">
                        <div class="imagem-contato col-4">
                                <img class="img-fluid js-tilt" src="../views/assets/img/como-jogar/8.png" width="">
                            </div>
                        <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
                            <form class="col-8" action="../views/assets/php/send-email.php">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputNome">Nome</label>
                                        <input type="text" class="form-control" id="txtName" name="txtName" id="inputNome" placeholder="Digite seu Nome">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="txtEmail">Email</label>
                                        <input id="txtEmail" type="email" id="txtEmail" name="txtEmail" class="form-control" placeholder="Digite seu Email">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="txtPhone">Telefone</label>
                                        <input type="text" name="txtPhone" class="form-control" id="txtPhone" placeholder="Digite seu Telefone para contato ">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputMotivo" name="txtServico">Motivo do Contato</label>
                                        <select id="inputState" class="form-control" name="txtServico" placeholder="Selectione o motivo do contato">
                                            <option>Selectione o motivo do contato</option>
                                            <option>Parceria</option>
                                            <option>Sugestão</option>
                                            <option>Falha no Aplicativo</option>
                                            <option>Outros</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="txtPhone">Mensagem</label>
                                        <textarea type="text" rows="4" cols="50" name="txtMessage" class="form-control" id="txtMsg" placeholder="Digite Sua Mensagem">
                                        </textarea>
                                    </div>
                                </div>
                                <button id="btnSend" class="btn float-right" aria-label="Enviar formulário">Enviar</button>
                                <div id="sendSuccess" class="col-12 my-3 d-none alert alert-success alert-dismissible fade show" role="alert">
                                    <strong><i class="fa fa-check-circle mx-2" style="font-size: 20px"></i></strong> Sua mensagem foi enviada com sucesso.
                                </div>
                                <div id="sendError" class="col-12 my-3 d-none alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong><i class="fa fa-exclamation-circle mx-2" style="font-size: 20px"></i></strong> Preencha todos os campos corretamente.
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <?php include '../views/assets/inc/footer.php' ?>
            </section>
            
        <script src="../views/assets/vendor/jquery/jQuery-v3.5.1.min.js"></script>
        <script src="../views/assets/vendor/js/popper.min.js"></script>
        <script src="../views/assets/vendor/js/bootstrap.min.js"></script>        
        <script src="../views/assets/vendor/animation/tilt/tilt.jquery.min.js"></script>
        <script src="../views/assets/js/menu.js"></script>
        
        <script>
            $('.js-tilt').tilt({scale: 1.05})
        </script>
    </body>
</html>