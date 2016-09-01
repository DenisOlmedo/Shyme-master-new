<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"content="width=device-width,initial-scale=1">
        <title>Perfil - busca</title>
        <script src="js/jquery.min.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/grupo.css" />
    </head>

    <body>
        <?php include("header.php"); ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-offset-1 col-md-10">
                  <ul class="nav nav-tabs nav-justified" role="tablist">
                    <li role="presentation" class="active"><a href="#posts" aria-controls="posts" role="tab" data-toggle="tab">Postagens</a></li>
                    <li role="presentation"><a href="#membros" aria-controls="membros" role="tab" data-toggle="tab">Membros</a></li>
                    <li role="presentation"><a href="#info" aria-controls="info" role="tab" data-toggle="tab">Informações</a></li>
                  </ul>      
                </div>
                
              <div class="tab-content">
                
                <div role="tabpanel" class="tab-pane active" id="posts">
                    <?php include_once("./sub_pags/grupo-post.php"); ?>
                </div>
                <div role="tabpanel" class="tab-pane" id="membros">
                    <?php include_once("./sub_pags/grupo-membro.php"); ?>
                </div>
                <div role="tabpanel" class="tab-pane" id="info">
                    <?php include_once("./sub_pags/grupo-info.php"); ?>
                </div>
              </div>
              
            </div>
        </div>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/grupo.js"></script>
    </body>
</html>