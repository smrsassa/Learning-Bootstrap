<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css"> 
    <link rel="stylesheet" href="style/css/style.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css">

    <title>bootstrap 4</title>
</head>
<body style="background: #f4f6f9;">

    <!-- nav bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-gradient-dark">
        
        <div class="container">

            <a class="navbar-brand h1 mb-0" href="#">Bootstrap 4</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSite">

                <ul class="navbar-nav mr-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="#"><strong>Inicio</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Depoimentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contatos</a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto">

                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown toggle" href="#" data-toggle="dropdown" id="navDrop">
                            Social
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Facebook</a>
                            <a class="dropdown-item" href="#">Twitter</a>
                            <a class="dropdown-item" href="#">Instagram</a>
                        </div>
                    </li>
                </ul>

                <form class="form-inline">
                    <input class="form-control ml-4 mr-2" type="search" placeholder="Buscar...">
                    <button class="btn btn-dark" type="submit">Ok</button>
                </form>

                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a href="#" class="nav-link" data-toggle="modal" data-target="#loginModal">Login</a>
                    </li>

                    <li class="nav-item">
                        <a href="#form-1" class="nav-link">Registrar</a>
                    </li>                    
                </ul>
            </div>
        </div>
    </nav><!--./nav bar-->
    <!--Carousel-->
    <div id="carouselSite" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
            <li class="active" data-target="#carouselSite" data-slide-to="0"></li>
            <li data-target="#carouselSite" data-slide-to="1"></li>
            <li data-target="#carouselSite" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">

            <div class="carousel-item active">
                
                <img src="img/img1.jpg" class="img-fluid d-block">

                <div class="carousel-caption d-none d-md-block text-dark">
                    <h1>Lorem ipsum dolor</h1>
                    <p>Suspendisse id euismod nulla. Etiam consectetur molestie odio, sit amet mollis dolor interdum non.</p>
                </div>
            </div>
            <div class="carousel-item">
                
                <img src="img/img2.jpg" class="img-fluid d-block">

                <div class="carousel-caption d-none d-md-block text-dark">
                    <h1>Lorem ipsum dolor</h1>
                    <p>Suspendisse id euismod nulla. Etiam consectetur molestie odio, sit amet mollis dolor interdum non.</p>
                </div>
            </div>
            <div class="carousel-item">
                
                <img src="img/img3.jpg" class="img-fluid d-block">

                <div class="carousel-caption d-none d-md-block text-dark">
                    <h1>Lorem ipsum dolor</h1>
                    <p>Suspendisse id euismod nulla. Etiam consectetur molestie odio, sit amet mollis dolor interdum non.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselSite" role="button" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="sr-only">Anterior</span>
        </a>
    </div><!--./Carousel-->
    <!--info-box-->
    <div class="container mt-5">
        <div class="row">

            <div class="col-4">
                <div class="info-box">
                    <div class="info-box mb-3 bg-warning" style="border-radius: 8px; padding: 6px 20px 6px 20px;">
                      <span class="info-box-icon"><i class="fa fa-tag fa-3x"></i></span>
                      <div class="info-box-content" style="display: inline;vertical-align: 12px;">
                        <span class="info-box-text lead ">Inventory: </span>
                        <span class="info-box-number lead"><strong>5,200</strong></span>
                        <button type="button" class="btn btn-outline-warning btn-lg btn-block">
                            <a href="#" class="text-light">More Info <i class="fa fa-arrow-circle-right"></i></a>
                        </button>
                      </div>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="info-box">
                    <div class="info-box mb-3 bg-success" style="border-radius: 8px; padding: 6px 20px 6px 20px;">
                      <span class="info-box-icon"><i class="fa fa-heart fa-3x"></i></span>
                      <div class="info-box-content" style="display: inline;vertical-align: 12px;">
                        <span class="info-box-text lead">Mentions: </span>
                        <span class="info-box-number lead"><strong>92,050</strong></span>
                        <button type="button" class="btn btn-outline-success btn-lg btn-block">
                            <a href="#" class="text-light">More Info <i class="fa fa-arrow-circle-right"></i></a>
                        </button>
                      </div>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="info-box">
                    <div class="info-box mb-3 bg-danger" style="border-radius: 8px; padding: 6px 20px 6px 20px;">
                      <span class="info-box-icon"><i class="fa fa-cloud-download fa-3x" aria-hidden="true"></i></span>
                      <div class="info-box-content" style="display: inline;vertical-align: 12px;">
                        <span class="info-box-text lead">Downloads: </span>
                        <span class="info-box-number lead"><strong>114,381</strong></span>
                        <button type="button" class="btn btn-outline-danger btn-lg btn-block">
                            <a href="#" class="text-light">More Info <i class="fa fa-arrow-circle-right"></i></a>
                        </button>
                      </div>  
                    </div>
                </div>
            </div>
        </div>
    </div><!--./info-box-->
    <!--textual-content-->
    <div class="container">

        <div class="row">

            <div class="col-12 text-center my-5">

                <h1 class="display-3"><i class="fa fa-certificate"></i>Lorem ipsum</h1>
                <p>Fusce quis ligula mollis, egestas libero a, efficitur libero. Vestibulum lobortis varius leo vitae mattis. Praesent et egestas nisl.</p>
            </div>
        </div>
        <div class="row mb-4">

            <div class="col-sm-6 col-md-4 mb-3">

                <nav id="navbarVertical" class="navbar navbar-info bg-light">

                    <nav class="nav nav-pills flex-column">
                        <a class="nav-link mb-2" href="#item1"><i class="fa fa-circle"></i> Lorem ipsum</a>

                        <nav class="nav nav-pills flex-collumn">
                            <a class="nav-link ml-3" href="#item1-1"><i class="fa fa-circle"></i> Etiam consectetur</a>
                            <a class="nav-link ml-3" href="#item1-2"><i class="fa fa-circle"></i> Mauris efficitur</a>
                        </nav>

                        <a class="nav-link my-2" href="#item2"><i class="fa fa-circle"></i> Aliquam erat</a>

                        <a class="nav-link my-2" href="#item3"><i class="fa fa-circle"></i> Duis sed ipsum</a>

                        <nav class="nav nav-pills flex-collumn">
                            <a class="nav-link ml-3" href="#item3-1"><i class="fa fa-circle"></i> Praesent et egestas</a>
                            <a class="nav-link ml-3" href="#item3-2"><i class="fa fa-circle"></i> Proin sit amet</a>
                        </nav>
                    </nav>
                </nav>
            </div>
            <div class="col-sm-6 col-md-8">

                <div data-spy="scroll" data-target="#navbarVertical" data-offset="0" class="scrollspySite">
                    
                    <h4 id="item1">Lorem ipsum</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse id euismod nulla. Etiam consectetur molestie odio, sit amet mollis
                     dolor interdum non. Pellentesque quam massa, tempor id facilisis sit amet, varius in neque. Quisque nec sapien tortor. Cras in lacus
                     vestibulum, consectetur nisl in, facilisis nulla.</p>

                    <h5 id="item1-1">Aliquam erat</h5>
                    <p>Mauris molestie magna et elit sollicitudin, non tincidunt nulla laoreet. Proin sit amet nulla leo. Mauris in velit tortor. Integer gravida lectus ac
                    ullamcorper volutpat. Etiam quis egestas tortor. Cras volutpat viverra odio, et venenatis purus. In et dolor vel libero posuere convallis et commodo
                    leo. In in tortor mi.</p>

                    <h5 id="item1-2">Pellentesque quam</h5>
                    <p>Pellentesque quam massa, tempor id facilisis sit amet, varius in neque. Quisque nec sapien tortor. Cras in lacus vestibulum, 
                    consectetur nisl in, facilisis nulla. In scelerisque placerat augue convallis consequat. Vestibulum interdum maximus pretium. Duis
                    hendrerit, tortor ut molestie imperdiet, lectus massa ullamcorper ex, eu molestie nisl est id nisi. Nulla viverra venenatis libero. Ut ac 
                    tincidunt orci. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                    
                    <h4 id="item2">Lorem ipsum</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse id euismod nulla. Etiam consectetur molestie odio, sit amet mollis
                    dolor interdum non. Pellentesque quam massa, tempor id facilisis sit amet, varius in neque. Quisque nec sapien tortor. Cras in lacus
                    vestibulum, consectetur nisl in, facilisis nulla.</p>
                    
                    <h4 id="item3">Aliquam erat</h4>
                    <p>Mauris molestie magna et elit sollicitudin, non tincidunt nulla laoreet. Proin sit amet nulla leo. Mauris in velit tortor. Integer gravida lectus ac
                    ullamcorper volutpat. Etiam quis egestas tortor. Cras volutpat viverra odio, et venenatis purus. In et dolor vel libero posuere convallis et commodo
                    leo. In in tortor mi.</p>

                    <h5 id="item3-1">Pellentesque quam</h5>
                    <p>Pellentesque quam massa, tempor id facilisis sit amet, varius in neque. Quisque nec sapien tortor. Cras in lacus vestibulum, 
                    consectetur nisl in, facilisis nulla. In    scelerisque placerat augue convallis consequat. Vestibulum interdum maximus pretium. Duis
                    hendrerit, tortor ut molestie imperdiet, lectus massa ullamcorper ex, eu molestie nisl est id nisi. Nulla viverra venenatis libero. Ut ac 
                    tincidunt orci. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                    Pellentesque quam massa, tempor id facilisis sit amet, varius in neque. Quisque nec sapien tortor. Cras in lacus vestibulum, 
                    consectetur nisl in, facilisis nulla. In    scelerisque placerat augue convallis consequat. Vestibulum interdum maximus pretium. Duis
                    hendrerit, tortor ut molestie imperdiet, lectus massa ullamcorper ex, eu molestie nisl est id nisi. Nulla viverra venenatis libero. Ut ac 
                    tincidunt orci. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>

                    <h5 id="item3-2">Lorem ipsum</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse id euismod nulla. Etiam consectetur molestie odio, sit amet mollis
                    dolor interdum non. Pellentesque quam massa, tempor id facilisis sit amet, varius in neque. Quisque nec sapien tortor. Cras in lacus
                    vestibulum, consectetur nisl in, facilisis nulla.</p>
                </div>
            </div>
        </div><!--textual-content-->

        <!--Cards-->
        <div class="row justify-content-sm-center mb-2">

            <div class="col-sm-6 col-md-4">

                <div class="card mb-3">

                    <img class="card-img-top" src="img/img1.jpg">
                    <div class="card-body">
                        <h4 class="card-title">Card 1</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Card 1 Subtitle</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">et netus</li>
                    </ul>

                    <div class="card-body">
                        <a href="#" class="card-link">Opc 1</a>
                        <a href="#" class="card-link">Opc 2</a>
                    </div>
                    <div class="card-footer text-muted">Card Footer</div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">

                <div class="card mb-3">

                    <img class="card-img-top" src="img/img2.jpg">
                    <div class="card-body">
                        <h4 class="card-title">Card 2</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Card 2 Subtitle</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">et netus</li>
                        <li class="list-group-item">malesuada fames</li>
                    </ul>

                    <div class="card-body">
                        <a href="#" class="card-link">Opc 1</a>
                        <a href="#" class="card-link">Opc 2</a>
                    </div>
                    <div class="card-footer text-muted">Card Footer 2</div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 ">

                <div class="card mb-3">

                    <img class="card-img-top" src="img/img3.jpg">
                    <div class="card-body">
                        <h4 class="card-title">Card 3</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Card 3 Subtitle</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">et netus</li>
                        <li class="list-group-item">malesuada fames</li>
                        <li class="list-group-item">Suspendisse potenti</li>
                    </ul>

                    <div class="card-body">
                        <a href="#" class="card-link" data-toggle="modal" data-target="#siteModal">Opc 1</a>
                        <a href="#" class="card-link">Opc 2</a>
                    </div>
                    <div class="card-footer text-muted">Card Footer 3</div>
                </div>
            </div>
        </div><hr>
    </div><!--./Cards-->

    <div class="container">

        <div class="row d-flex justify-content-center">

                <div class="my-2" style="max-height:385px; overflow:auto;">

                    <table class="table">
                
                        <thead class="thead-dark">
                                
                            <tr>

                                <th class="col">id</th>
                                <th class="col">curso</th>
                                <th class="col">descricao</th>
                                <th class="col">carga</th>
                                <th class="col">aulas</th>
                                <th class="col">ano</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                                include "./php/tabela.php"
                            ?>
                        </tbody>
                    </table>
                </div>
            
        </div>
    </div>

    <div class="container">

        <div class="row my-4">

            <div class="col-4">

                <div class="card">

                    <div class="card-body">

                        <h3>Insert</h3>
                        <p>Insira um novo curso na tabela</p>
                    </div>
                    <ul class="list-group list-group-flush">

                        <li class="list-group-item">
                            <a href="#" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#insertModal">Insert</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-4">

                <div class="card">

                    <div class="card-body">

                        <h3>Update</h3>
                        <p>Atualize a informação de um curso</p>
                    </div>
                    <ul class="list-group list-group-flush">

                        <li class="list-group-item">
                            <a href="#" class="btn btn-warning btn-lg btn-block" data-toggle="modal" data-target="#updateModal">Update</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-4">

                <div class="card">

                    <div class="card-body">

                        <h3>Delete</h3>
                        <p>Deleta um curso da tabela</p>
                    </div>
                    <ul class="list-group list-group-flush">

                        <li class="list-group-item">
                            <a href="#" class="btn btn-danger btn-lg btn-block" data-toggle="modal" data-target="#deleteModal">Delete</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div><hr>
    </div>

    <!--Jumbotrom-->
    <div class="jumbotron jumbotron-fluido">

        <div class="container">

            <div class="row">

                <div class="col-12 text-center">

                    <h1 class="display-4"><i class="fa fa-video-camera"></i> Jumbotrom Title</h1>
                    <p class="lead">Nullam ac dapibus ligula. Aliquam id diam vel ex blandit facilisis. Curabitur elementum sem bibendum ornare blandit.</p>
                    <hr>
                </div>
            </div>
            <div class="row">

                <div class="col-12">

                    <ul class="nav nav-pills justify-content-center mb-3" id="pills-nav">

                        <li class="nav-item">

                            <a class="nav-link active" id="nav-pills-01" data-toggle="pill" href="#nav-item-01">nav-item-01</a>
                        </li>
                        <li class="nav-item">

                            <a class="nav-link" id="nav-pills-02" data-toggle="pill" href="#nav-item-02">nav-item-02</a>
                        </li>
                        <li class="nav-item">

                            <a class="nav-link" id="nav-pills-03" data-toggle="pill" href="#nav-item-03">nav-item-03</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="nav-pills-content">

                        <div class="tab-pane fade show active" id="nav-item-01" role="tabpanel">

                            <div class="row">

                                <div class="col-6">

                                    <div class="embed-responsive embed-responsive-16by9">

                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/jWR2pkfwfuA"></iframe>
                                    </div>
                                </div>
                                <div class="col-6">

                                    <h3><i class="fa fa-youtube"></i> Video</h3>
                                    <p>Aenean pellentesque dui arcu, nec rutrum ipsum elementum eget. Nunc convallis venenatis semper. 
                                    Pellentesque ac pharetra mauris, in facilisis nunc.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-item-02" role="tabpanel">

                            ...02
                        </div>
                        <div class="tab-pane fade" id="nav-item-03" role="tabpanel">

                            ...03
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--./Jumbotrom-->
    <!--Formulario-->
    <div class="container mb-3" id="form-1">

        <div class="row">

            <div class="col-12">

                <h1 class="display-4 text-center my-2">Formulario</h1>
            </div>
        </div>

        <div class="row justify-content-center mb-5">

            <div class="col-sm-12 col-sm-10 col-lg-8">

                <form>

                    <div class="form-row">

                        <div class="form-group col-sm-6">

                            <label for="inputNone">Seu Nome</label>
                            <input type="text" class="form-control" id="inputNone" placeholder="Nome">
                        </div>

                        <div class="form-group col-sm-6">

                            <label for="inputSobrenome">Seu Sobrenome</label>
                            <input type="text" class="form-control" id="inputSobrenome" placeholder="Sobrenome">
                        </div>
                    </div>

                    <div class="form-row">

                        <div class="form-group col-sm-12">

                            <label for="inputEmail">Seu E-mail</label>
                            <input type="text" class="form-control" id="inputEmail" placeholder="e-mail">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-12">

                            <label for="inputEnd">Seu Endereço</label>
                            <input type="text" class="form-control" id="inputEnd" placeholder="Endereço completo">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-sm-6">

                            <label for="inputCidade">Sua Cidade</label>
                            <input type="text" class="form-control" id="inputCidade" placeholder="Cidade">
                        </div>

                        <div class="form-group col-sm-4">

                            <label for="inputCep">Seu Estado</label>
                            <select id="inputEstado" class="form-control">
                                <option>...</option>
                                <option>...</option>
                                <option>...</option>
                                <option>...</option>
                                <option>...</option>
                            </select>
                        </div>
                        
                        <div class="form-group col-sm-2">

                            <label for="inputCep">Seu CEP</label>
                            <input type="text" class="form-control" id="inputCep" placeholder="CEP">
                        </div>
                    </div>

                    <div class="form-row">

                        <div class="form-group col-sm-12">

                            <div class="form-check">

                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox"> Desejo receber as novidades no e-mail
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">

                        <div class="form-group col-sm-12">

                            <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane-o" aria-hidden="true"></i> Enviar</button>

                            <a tabindex="0" class="btn btn-secondary ml-2" role="button" data-toggle="popover" data-placement="right" data-trigger="focus"
                            title="Alguma dúvida?" data-content="Fale conosco: help@asdasd.com"><i class="fa fa-question"></i> Ajuda <i class="fa fa-question fa-flip-vertical"></i></a>
                        </div>
                    </div>
                </form>
            </div>
        </div><!--./Formulario-->
        <!--Main Footer-->
        <div class="row">

            <div class="col-12"><hr></div>

            <div class="col-sm-4">
                
                <h3><i class="fa fa-circle"></i> Bootstrap 4</h3>
                <p>Pellentesque quam massa, tempor id facilisis sit amet, varius in neque. Quisque nec sapien tortor. Cras in lacus
                vestibulum, consectetur nisl in, facilisis nulla.</p>
            </div>

            <div class="col-sm-4">
            
                <h3 class="text-center">Menu</h3>
                <div class="list-group text-center">
                    <a chref="#" class="list-group-item list-group-item-action list-group-item-primary">Perfil</a>
                    <a chref="#" class="list-group-item list-group-item-action list-group-item-secondary">Serviços</a>
                    <a chref="#" class="list-group-item list-group-item-action list-group-item-primary">Depoimentos</a>
                    <a chref="#" class="list-group-item list-group-item-action list-group-item-secondary">Contatos</a>
                </div>
            </div>
            <div class="col-sm-4">

                <h3 class="text-center">Social</h3>
                <div class="btn-group-vertical btn-block btn-group-lg" role="group">
                    <a class="btn btn-outline-primary" href="#"><i class="fa fa-facebook"></i> Facebook</a>
                    <a class="btn btn-outline-info" href="#"><i class="fa fa-twitter-square"></i> Twitter</a>
                    <a class="btn btn-outline-warning" href="#"><i class="fa fa-instagram"></i> Instagram</a>
                </div>
            </div>
        </div><hr>
    </div><!--Main Footer-->
    <!--Login Modal-->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog">

        <div class="modal-dialog" role="document">

            <div class="modal-content">

                <div class="modal-header">

                    <h5 class="modal-title">Login</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>x</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                    <div class="row">

                        <div class="col-12">

                            <label for="inputEmail">Seu E-mail</label>
                            <input type="text" class="form-control mb-2" id="inputEmail" placeholder="e-mail">
                        </div>
                        <div class="col-12">

                            <label for="inputSenha">Sua senha</label>
                            <input type="text" class="form-control" id="inputSenha" placeholder="senha">
                        </div>
                    </div>
                </div>

                <div class="modal-footer">

                    <button type="submit" class="btn btn-primary" data-toggle="tooltip" data-html="true" title="Enviar">
                        <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Enviar
                    </button>
                    
                    <a tabindex="0" class="btn btn-secondary ml-2" role="button" data-toggle="popover" data-placement="right" data-trigger="focus"
                    title="Alguma dúvida?" data-content="Fale conosco: help@asdasd.com"><i class="fa fa-question"></i> Ajuda <i class="fa fa-question fa-flip-vertical"></i></a>
                </div>
            </div>
        </div>
    </div><!--./Login Modal-->

    <div class="modal fade" id="insertModal">

        <div class="modal-dialog" role="document">

            <div class="modal-content" style="background: #f4f6f9;">

                <div class="modal-header">

                    <h3>Insert</h3>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>x</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="./php/insert.php" method="POST">

                        Nome do curso:
                        <input type="text" name="curso_nome" class="form-control" placeholder="Nome">
                        Descrição:
                        <input type="text" name="curso_descricao" class="form-control" placeholder="Descrição">
                        <div class="row my-3">

                            <div class="col-4">
                                Carga:
                                <input type="number" name="curso_carga" class="form-control" placeholder="Carga">
                            </div>
                            <div class="col-4">
                                Total de aulas:
                                <input type="number" name="curso_totaulas" class="form-control" placeholder="N° de aulas">
                            </div>
                            <div class="col-4">
                                Lançamento:
                                <input type="number" name="curso_ano" class="form-control" placeholder="Ano">
                            </div>
                        </div>
                        <button type="submit" value="Cadastrar"class="btn btn-primary"><i class="fa fa-paper-plane-o" aria-hidden="true"></i> Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="updateModal">

        <div class="modal-dialog" role="document">

            <div class="modal-content" style="background: #f4f6f9;">

                <div class="modal-header">
                                        
                    <h3>Update</h3>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>x</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="./php/update.php" method="POST">

                        ID:
                        <input type="text" name="update_id" class="form-control" placeholder="ID">
                        Nome:
                        <input type="text" name="update_nome" class="form-control" placeholder="Nome">
                        Descrição:
                        <input type="text" name="update_descricao" class="form-control" placeholder="Descrição">
                        <div class="row my-3">
                            <div class="col-4">
                                Carga:
                                <input type="number" name="update_carga" class="form-control" placeholder="Carga">
                            </div>
                            <div class="col-4">
                                Total de aulas:
                                <input type="number" name="update_totaulas" class="form-control" placeholder="N° de aulas">
                            </div>
                            <div class="col-4">
                                Lançamento:
                                <input type="number" name="update_ano" class="form-control" placeholder="Ano">
                            </div>
                        </div>
                        <button type="submit" value="Cadastrar"class="btn btn-primary"><i class="fa fa-paper-plane-o" aria-hidden="true"></i> Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteModal">

        <div class="modal-dialog" role="document">

            <div class="modal-content" style="background: #f4f6f9;">

                <div class="modal-header">

                    <h3>Delete</h3>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>x</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="./php/delete.php" method="POST">

                        ID do curso:
                        <input type="text" name="delete_id" class="form-control" placeholder="ID"><br>
                        <button type="submit" value="Cadastrar"class="btn btn-primary"><i class="fa fa-paper-plane-o" aria-hidden="true"></i> Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--site Modal-->
    <div class="modal fade" id="siteModal" tabindex="-1" role="dialog">

        <div class="modal-dialog" role="document">

            <div class="modal-content">

                <div class="modal-header">

                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>x</span>
                    </button>
                </div>
                <div class="modal-body">

                    <p>Ut ut finibus tellus. Morbi eget justo tortor. Vestibulum dapibus nunc et pharetra ornare. Nullam scelerisque eget est ac luctus. 
                    Maecenas lectus tortor, pellentesque a neque ut, consequat posuere enim. Vivamus sed neque tellus. Praesent gravida vitae enim ac
                    vulputate. Phasellus sed nunc neque. Nullam ac dapibus ligula.</p>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div><!--/.Modal-->
    <!--Footer-->
    <footer class="main-footer bg-secundary">

    <strong>Copyright <i class="fa fa-copyright" aria-hidden="true"></i> 2019</i></strong>
    
        <div class="float-right d-none d-sm-inline-block">
    
            <b>Version </b>1.0.0
        </div>
    </footer><!--./Footer-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>

    <script>

        $(function () {
            $('[data-toggle="popover"]').popover()
        })

    </script>
    </body>
</html>
