<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"content="width=device-width,initial-scale=1">
        <title>Perfil - Shyme</title>
        <script src="js/jquery.min.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/perfil.css" />
    </head>
    <body>

        <?php include("header.php"); ?>
        
        <div class="container-fluid corpo">
            
            <div class="row">
                <div class="col-md-offset-1 col-md-10 base">
                    <div class="row">
                        
                        <div class="col-md-2 img-perfil">
                            <a id="upload-img" data-toggle="modal" data-target="#myModal">
                                <img src="" alt="Perfil do usuário" />
                            </a>
                        </div> 
                        
                        <!-- Modal -->
                        <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Upload foto de perfil</h4>
                                    </div>
                                    <div class="modal-body">
                                          <?php include("sub_pags/upload.php"); ?>
                                    </div>
                                      
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                    </div>
                                </div> <!-- Modal content -->
                            </div><!-- Modal dialog -->
                        </div> <!-- modal -->
                        
                        <div class="col-md-6 usr-info">
                            <h2><?php echo '*Nome de usuário*'; ?></h2> <!-- banco -->
                            <h3><?php echo'*Curso:*'; ?></h3> <!-- banco -->
                        </div>
                        
                        <div class="col-md-1 pts-usr"><p><?php echo '*20pts*'; ?></p></div><!-- banco -->
                    </div>    
                    
                </div>    
            </div>
            
            <div class="row">

                <div class="col-md-offset-1 col-md-2 list-group usr-group">
                    <h4>Grupos Principais   <button class="btn-shyme-add">+</button></h4>
                    <a class="list-group-item" href="#"><?php echo'*Fatec*'; ?></a>
                    <a class="list-group-item" href="#"><?php echo'*ADS*';?></a>
			    <a class="list-group-item" href="#"><?php echo'*Programador*';?></a>
			    <a class="list-group-item" href="#"><?php echo'*banco*';?></a>

 			    <h4>Grupos</h4>
                    <a class="list-group-item" href="#"><?php echo'*Grupo 5*'; ?></a>
                    <a class="list-group-item" href="#"><?php echo'*Grupo 6*';?></a>
			    <a class="list-group-item" href="#"><?php echo'*Grupo 7*';?></a>
			    <a class="list-group-item" href="#"><?php echo'*Grupo 8*';?></a>

                    <!-- Adicionar outros grupos -->   
                </div>
                    
                
                <div class="col-md-8">
                    <!-- comunicados -->
                    <div class="div-comunicado">
                        <h3>Comunicados</h3>
                        <div> <!-- loop para gerar os comunicados -->
                            <a href="#"><h4><?php echo'*Titulo comunicado 1*'; ?></h4></a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            </p>
                            
                        </div>
                        
                        <div>
                            <a href="#"><h4><?php echo'*Titulo comunicado 2*'; ?></h4></a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            </p>
                            
                        </div> <!-- fim do loop -->
                        
                        <div>
                            <a href="#"><h4><?php echo'*Titulo comunicado 3*';?></h4></a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            </p>
                            
                        </div> 
                    </div>
                    
                
                    <div class="div-noticias">
                        <!-- Noticias -->
                        <h3>Mais avaliadas</h3>
                        <div> <!-- loop para gerar os comunicados -->
                            <a href="#"><h4><?php echo'*Titulo noticia 1*'; ?></h4></a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            </p>
                        </div>
                        
                        <div>
                            <a href="#"><h4><?php echo'*Titulo noticia 2*'; ?></h4></a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            </p>
                        </div> 
                        
                        <div>
                            <a href="#"><h4><?php echo'*Titulo noticia 3*'; ?></h4></a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            </p>
                        </div> <!-- fim do loop -->
                    
                    </div>
                </div>
            </div>
            
        
            <div class="row">
                <div class="col-md-12 rodape">
                    <div class="row">
                        <h2>Rodape</h2>
                    </div>
                </div>    
            </div>
            
        </div> <!-- container- fluid -->
        
        
        <script src="js/bootstrap.min.js"></script>
        <script src="js/temas.js"></script>
        
    </body>
</html>