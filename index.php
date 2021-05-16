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
                            <li><a href="#"><i class="fas fa-key"></i> Nível de Acesso</a></li>
                    </ul>
					
					
					</li>
                    
					<li><a href="#"><i class="fas fa-wallet"></i> Entrada</a></li>
                    <li><a href="#"><i class="fas fa-money-check-alt"></i> Saída</a></li>
                    <li><a href="#"><i class="fas fa-dollar-sign"></i> Saldo</a></li>
					
					
					<li class="active">
					
					<a href="#submenu2" data-toggle="collapse">
                            <i class="fas fa-bars"></i> Configurações</a></li>
                    </a>
					
					<ul id="submenu2" class="list-unstyled collapse">
                            <li><a href="#"><i class="fas fa-bars"></i> Configurações</a></li>
                            <li class="active"><a href="#"><i class="fas fa-file-alt"></i> Menu</a></li>
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
    
	        <div class="content p-1">
				<div class="list-group-item">
				    <div class="d-flex">
					  <div class="mr-auto p-2">
					   <h2 class="display-4 titulo">Dashboard</h2> 
					  </div>
					</div>
            <div class="row mb-3">
			
			            <!-- 1 card -->
						
					<?php		
					$result_qnt_user= "SELECT COUNT(id) AS qnt_entrada FROM usuarios";
					$resultado_qnt_user = mysqli_query($conn, $result_qnt_user);
					$row_qnt_user = mysqli_fetch_assoc($resultado_qnt_user);
				
					?>			


			
						
						<div class="col-lg-3 col-sm-6 mb-4">
                            <div class="card bg-success text-white">
                                <div class="card-body">
                                    <i class="fas fa-users fa-3x"></i>
                                    <h6 class="card-title">Usuários</h6>
									
                                <h6 class="lead"> <h6> Total Usuários: <span class="badge badge-warning"><?php echo "<h6>" . $row_qnt_user['qnt_entrada'] . "</h6>";?></span></h6></h6>								
                                <h6 class="lead"> <h6> Usuários: <span class="badge badge-warning"><?php echo "<h6>" . $row_qnt_user['qnt_entrada'] . "</h6>";?></span></h6></h6>
								
								</div>
                            </div>
                        </div>
						
						<!-- 1 card -->
						
						<!-- 2 card -->
						
			<?php
  	        $result_qnt_rend= "SELECT sum(entrada) AS qnt_rendas FROM caixa";
			$resultado_qnt_rend = mysqli_query($conn, $result_qnt_rend);
			$row_qnt_rend = mysqli_fetch_assoc($resultado_qnt_rend);
				
            ?>
		
			<?php
  	        $result_qnt_rend__entr= "SELECT COUNT(entrada) AS qnt_rendas_entr FROM caixa";
			$resultado_qnt_rend__entr = mysqli_query($conn, $result_qnt_rend__entr);
			$row_qnt_rend__entr = mysqli_fetch_assoc($resultado_qnt_rend__entr);
				
			?>

						
						
						
						<div class="col-lg-3 col-sm-6 mb-4">
                            <div class="card bg-danger text-white">
                                <div class="card-body">
                                    <i class="fas fa-percent fa-3x"></i>
                                    <h6 class="card-title">Entradas</h6>
                                <h6 class="lead">Total: R$  <span class="badge badge-primary"><?php echo "<h6>" . $row_qnt_rend['qnt_rendas'] . "</h6>";?></span></h6></h6>
								<h6 class="lead">Entradas:  <span class="badge badge-primary"><?php echo "<h6>" . $row_qnt_rend__entr['qnt_rendas_entr'] . "</h6>";?></span></h6></h6>
                                </div>
                            </div>
                        </div>
						<!-- 2 card -->
						
						<!-- 3 card -->
				<!-- Banco Saída -->					
			<?php
			
  	        $result_qnt_said= "SELECT sum(saida) AS qnt_saidas FROM caixa";
			$resultado_qnt_said = mysqli_query($conn, $result_qnt_said);
			$row_qnt_said = mysqli_fetch_assoc($resultado_qnt_said);
				
            ?>
		
			<?php
  	        $result_qnt_said_saidx= "SELECT COUNT(saida) AS qnt_saidas_said FROM caixa";
			$resultado_qnt_said_saidx = mysqli_query($conn, $result_qnt_said_saidx);
			$row_qnt_said_saidx = mysqli_fetch_assoc($resultado_qnt_said_saidx);
				
           ?>
	<!-- Banco Saída -->							
			
						<div class="col-lg-3 col-sm-6 mb-4">
                            <div class="card bg-warning text-white">
                                <div class="card-body">
                                    <i class="fas fa-eye fa-3x"></i>
                                    <h6 class="card-title">Saídas</h6>
                                <h6 class="lead">Total: R$  <span class="badge badge-danger"><?php echo "<h6>" . $row_qnt_said['qnt_saidas'] . "</h6>";?></span></h6></h6>
								<h6 class="lead">Saídas:  <span class="badge badge-danger"><?php echo "<h6>" . $row_qnt_said_saidx['qnt_saidas_said'] . "</h6>";?></span></h6></h6>
                                </div>
                            </div>
                        </div>
						<!-- 3 card -->
						<!-- 4 card -->
						
						
			
	<!-- Banco Saldo -->					
			
			<?php
			// tem de decorar esse selec de somar e diminuir campos
  	        $result_qnt_sald= "SELECT entrada, saida, sum(entrada) - sum(saida) AS qnt_saldo FROM caixa";
			$resultado_qnt_sald = mysqli_query($conn, $result_qnt_sald);
			$row_qnt_sald = mysqli_fetch_assoc($resultado_qnt_sald);
			// tem de decorar esse selec de somar e diminuir campos	
            ?>
		
			
			
			<?php
			// tem de decorar esse selec de somar e diminuir campos
			// preciso ACHAR OS VALORES EM PORCENTAGEM ENTRE OS campos
			// usar MOD == modulo ==v achar 10 porcento de comissao em cima do saldo
  	        $result_porct_sald= "SELECT entrada, saida, sum(entrada / 100 * 10) - sum(saida / 100 * 10) AS porct_saldo FROM caixa";
			$resultado_porct_sald = mysqli_query($conn, $result_porct_sald);
			$row_porct_sald = mysqli_fetch_assoc($resultado_porct_sald);
			// preciso ACHAR OS VALORES EM PORCENTAGEM ENTRE OS campos
			// tem de decorar esse selec de somar e diminuir campos	
            ?>
		
			
			
			
	<!-- Banco Saldo -->							
									
						
						<div class="col-lg-3 col-sm-6 mb-4">
                            <div class="card bg-info text-white">
                                <div class="card-body">
                                    <i class="fas fa-comments fa-3x"></i>
                                    <h6 class="card-title">Saldo</h6>
									                            
<h6 class="lead">Total: R$  <span class="badge badge-danger"><?php echo "<h6>" . $row_qnt_sald['qnt_saldo'] . "</h6>";?></span></h6></h6>
									                            
<h6 class="lead">10% - R$ <span class="badge badge-warning"><?php echo "<h6>" . $row_porct_sald['porct_saldo'] . "</h6>";?></span></h6></h6>
										
                                </div>
                            </div>
                        </div>
						<!-- 4 card -->
						






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
