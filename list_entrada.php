<?php
session_start();
include_once("conexao.php");
?>

			


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">        
        <title>DJFF</title>
        <link rel="icon" href="imagem/doge.ico">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
       <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous"> -->
		<script defer src="js/all.js"></script>
		 <script defer src="js/fontawesome-all.min.js"></script>
        <link rel="stylesheet" href="css/fontawesome.min.css">
		<link rel="stylesheet" href="css/dashboard.css">
    </head>
    <body>
        <nav class="navbar navbar-expand navbar-dark bg-warning">
            
			<a class="sidebar-toggle text-light mr-3">
                <span class="navbar-toggler-icon"></span>
            </a>
			
			
			<a class="navbar-brand" href="#">CONTA CORRENTE</a>
			
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle menu-header" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">
                            <img class="rounded-circle" src="imagem/undraw_profile.svg" width="20" height="20"> &nbsp;<span class="d-none d-sm-inline"> Usuário</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#"><i class="fas fa-user"></i> Perfil</a>
							 <a class="dropdown-item" href="#"><i class="fas fa-user-cog"></i> Definições</a>
							  <a class="dropdown-item" href="#"><i class="fas fa-list"></i> Atividade</a>
							    <a class="dropdown-item" href="#"><i class="fas fa-hand-holding-usd"></i> Doação</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i> Sair</a>
                        </div>
                    </li>
                </ul>                
            </div>
        </nav>
        
    <div class="d-flex">
            <nav class="sidebar">
                <ul class="list-unstyled">
				
                    <li><a href="index.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                    
					<li>
					
					<a href="#submenu1" data-toggle="collapse">
                            <i class="fas fa-user"></i> Usuário
                    </a>
					
					<ul id="submenu1" class="list-unstyled collapse">
                            <li><a href="list_usuario.php"><i class="fas fa-users"></i> Usuários</a></li>
                            <li><a href="list_niv_acesso.php"><i class="fas fa-key"></i> Nível de Acesso</a></li>
                    </ul>
					
					
					</li>
                    
					</li>
                    
					
                   <li>
					
					<a href="#submenu3" data-toggle="collapse">
                            <i class="fas fa-wallet"></i> Entrada
                    </a>
					
					<ul id="submenu3" class="list-unstyled collapse">
                            <li><a href="list_entrada.php"><i class="fas fa-wallet"></i> Entrada</a></li>
                            
                    </ul>
					
					
					</li>
                    


                   <li>
					
					<a href="#submenu4" data-toggle="collapse">
                            <i class="fas fa-money-check-alt"></i> Saida
                    </a>
					
					<ul id="submenu4" class="list-unstyled collapse">
                            <li><a href="list_saida.php"><i class="fas fa-money-check-alt"></i> Saida</a></li>
                            
                    </ul>
					
					
					</li>
                    


                   <li>
					
					<a href="#submenu5" data-toggle="collapse">
                            <i class="fas fa-dollar-sign"></i> Saldo
                    </a>
					
					<ul id="submenu5" class="list-unstyled collapse">
                            <li><a href="list_saldo.php"><i class="fas fa-dollar-sign"></i> Saldo</a></li>
                            
                    </ul>
					
					
					</li>
                    
					
					
					<li>
					
					<a href="#submenu2" data-toggle="collapse">
                            <i class="fas fa-bars"></i> Configurações</a></li>
                    </a>
					
					<ul id="submenu2" class="list-unstyled collapse">
                            <li><a href="#"><i class="fas fa-bars"></i> Configurações</a></li>
                            <li><a href="#"><i class="fas fa-file-alt"></i> Menu</a></li>
							<li><a href="#"><i class="fab fa-elementor"></i> Item de Menu</a></li>
							<li><a href="#"><i class="fas fa-key"></i> Empresa</a></li>
                    </ul>
					
					
					</li>
								
					
					<li><a href="#"> Item 4</a></li>
                    <li><a href="#"><i class="fas fa-sign-out-alt"></i> Sair</a></li>
                </ul>
            </nav>
				<!-- Fim do Menu -->
  				
				<!-- Começo Content  DASHBOARD -->
			
		

    
<?php


$result_usuario = "SELECT id, entrada FROM caixa WHERE entrada";
$resultado_usuario = mysqli_query($conn, $result_usuario);

?>



            
			<div class="content p-1">
				<div class="list-group-item">
				    <div class="d-flex">
					  <div class="mr-auto p-2">
					   <h1 class="display-4 titulo">Lista De Entradas</h1> 
					   
					   
					  </div>
					</div>
            <div class="row mb-3">
			 
			 
			 
			 
			   <table class="table table-striped table-bordered table-hover table-sm">
				<thead class="thead-dark">
					<th scope="col">ID</th>
					<th scope="col">Valor</th>
					<th scope="col">Data de Cadastro</th>
				</thead>
				<tbody>
				
<?php
				
while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){ 			


?>

<tr class="table-primary">
<td><?php echo $row_usuario['id']; ?></td>
<td><?php echo $row_usuario['entrada']; ?></td>
<td class="d-none d-sm-table-cell"><?php echo date('d/m/Y H:i:s', strtotime($row_usuario['created'])); ?></td>

<span class="d-none d-md-block">

</tr>


 <?php
    }
 ?>
				</tbody>
			</table>


            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Domingos Filho Dev 2021</span></br>
						<span>Doações em Dogecoin Serão Bem Recebidas</span></br>
						<span>Envie Para o Endereço = DEutEhxH5FH684sXpcDyiRPdanRKdk1heF </span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->




			<!-- div row -->
			</div>
			<!-- group iten -->	
				</div>
			<!-- div content -->	
		    </div>	
<!-- div flex -->	
	</div>
 



        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="js/dashboard.js"></script>
	</body>
</html>
