<style>
    /* Barra de busca */
nav {
    z-index: 1;
}
.sb_dropdown {
    background-color: rgb(238, 238, 238);
    display: none;
    position: absolute;
    height: 0;    
    min-width: 245px;
    top: 50px;
    left: 100px;
    z-index: 2;
}
.sb_dropdown:after {
    
}
.sb_dropdown-open {
    display: block;
	height: 100px !important;
	transition: all .2s;
}
</style>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
            data-target="#btn-collapse-nav" aria-expanded="false">
                <span class="sr-only">Recolher barra de navegação</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Shyme</a>
        </div>  
        
        <div class="collapse navbar-collapse" id="btn-collapse-nav">
            
            
            
            
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input id="sc_box" class="form-control sb_input" type="text" name="q" placeholder"Procurar" />
                    <div class="sb_dropdown">
                		<input type="radio" name="qType" id="sc_usr"/><label for="Usuario">Usuario</label>
                		<input type="radio" name="qType" id="sc_grp"/><label for="Grupo">Grupo</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-default sb_search">Buscar</button>
                
            </form>
        
            <ul class="nav navbar-nav navbar-right"><!-- Dropdown Usuario.-->
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">*Nome usuario*<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a id="change-theme" href="#">Mudar tema</a></li>
                        <li><a href="#">Pontuação</a></li>
                        <li role="separator" class="divider"></li>
                        
                        <?php
                        /*
                            Poderá fazer o sair com o $_GET['sair'];
                            usando um 
                            
                            
                            if(isset($_GET['sair']){
                                $logout = $_GET['sair'];
                                if($logout==1){
                                    metodo para destruir a session, não sei como é em codeIgniter
                                }
                            }
                        */
                        ?>
                        <li><a href="?sair=1">Sair</a></li> <!-- Fechar a session quando clicar em sair, ver acima -->
                    </ul>
                </li>
            </ul><!-- fim dropdown -->

        </div>
        
    </div>
</nav>

    <script>

            $(document).ready(function() {
				var $ui = $('#sc_box');
				
				$ui.click(function(){
					$('.sb_dropdown').toggleClass("sb_dropdown-open");
					console.log("div apareceu");
				});
        				
				$(document).click(function(e){
					if(!$(e.target).closest($ui).length){
					    
					    $('.sb_dropdown').removeClass("sb_dropdown-open");
					    console.log("div desapareceu");
					}
				});
            });
        
    </script>