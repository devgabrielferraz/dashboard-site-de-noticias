<!DOCTYPE html>
<html>
<head>
	<title>Dashboard - Global News</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
	<div class="sidebar">
		<div class="topo">
			<h3>Global News</h3>
		</div><!--topo-->
		<div class="menu">
			<ul>
				<li><i class="fas fa-angle-double-right"></i><a href=""> Painel</a></li>
				<li>
				<i class="fas fa-angle-double-right"></i>
				<a href="#" onclick="smoothScroll(event, 'visao-geral')">Estatísticas</a></li>
				<li>
    			<i class="fas fa-angle-double-right"></i>
    			<a href="#" onclick="smoothScroll(event, 'conteudo')">Conteúdo</a>
				</li>
				<li><i class="fas fa-angle-double-right"></i><a href=""> Configurações</a></li>
				<li class="logout"><i class="fas fa-angle-double-right"></i><a href=""> Logout</a></li>
			</ul>
		</div><!--menu-->
	</div><!--sidebar-->

	<!--FIM DA SIDEBAR-->

	<div class="main-content">
		<header>

			<div class="nome-usuario">
				<h2><i class="fas fa-align-justify"></i></h2>
			</div>

			<div class="pesquisa-campo">
				<div class="icone-pesquisa"><i class="fas fa-search"></i></div><form><input type="text" /></form>
			</div><!--pesquisa-campo-->

			<div class="icone-alerta">
				<p>5</p>
				<i class="fas fa-bell"></i>
			</div><!--icone-alerta-->

			<div class="clear"></div>
		</header>

		<div class="content1">
			<div class="panel">
				<h2>Bem-vindo, Painel Global News!</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed purus libero. Nam iaculis felis sed dignissim tincidunt. Sed eu odio enim. Morbi leo orci, ultricies eget pretium imperdiet, bibendum sit amet dui. Aliquam sit amet consequat ligula. Nam accumsan quis nisl vel maximus. Quisque malesuada mauris sit amet elit feugiat placerat. Vestibulum consequat vel diam a aliquam. Pellentesque iaculis congue dui vitae hendrerit. Mauris consequat facilisis nisi non vulputate. Integer et suscipit nisl. Sed nec ligula erat.</p>
			</div><!--panel-->
			<div id="visao-geral" class="visao-geral">
			<h2> Estatísticas: Visão Geral </h2>
			</div><!--visao geral-->
		<div style="width: 49%;margin-right: 1%;" class="panel">
				<h2>Notícias Mais Vistas</h2>
				<canvas id="mostViewedNewsChart" width="400" height="300"></canvas>
			</div><!--panel-->
			
		<div style="width: 49%;margin-left: 1%;" class="panel">
				<h2>Estatísticas de Visitas</h2>
				<canvas id="visitsChart" width="400" height="300"></canvas>
			</div><!--panel-->
			<div class="clear"></div>
			<div id="conteudo" class="conteudo">
			<h2> Conteúdo </h2>
			</div><!--conteúdo-->
			<div class="panel">
				<h2>Notícia 1</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed purus libero. Nam iaculis felis sed dignissim tincidunt. Sed eu odio enim. Morbi leo orci, ultricies eget pretium imperdiet, bibendum sit amet dui. Aliquam sit amet consequat ligula. Nam accumsan quis nisl vel maximus. Quisque malesuada mauris sit amet elit feugiat placerat. Vestibulum consequat vel diam a aliquam. Pellentesque iaculis congue dui vitae hendrerit. Mauris consequat facilisis nisi non vulputate. Integer et suscipit nisl. Sed nec ligula erat.</p>
			</div><!--panel-->
			<div class="panel">
				<h2>Notícia 2</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed purus libero. Nam iaculis felis sed dignissim tincidunt. Sed eu odio enim. Morbi leo orci, ultricies eget pretium imperdiet, bibendum sit amet dui. Aliquam sit amet consequat ligula. Nam accumsan quis nisl vel maximus. Quisque malesuada mauris sit amet elit feugiat placerat. Vestibulum consequat vel diam a aliquam. Pellentesque iaculis congue dui vitae hendrerit. Mauris consequat facilisis nisi non vulputate. Integer et suscipit nisl. Sed nec ligula erat.</p>
			</div><!--panel-->
			<div class="panel">
				<h2>Notícia 3</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed purus libero. Nam iaculis felis sed dignissim tincidunt. Sed eu odio enim. Morbi leo orci, ultricies eget pretium imperdiet, bibendum sit amet dui. Aliquam sit amet consequat ligula. Nam accumsan quis nisl vel maximus. Quisque malesuada mauris sit amet elit feugiat placerat. Vestibulum consequat vel diam a aliquam. Pellentesque iaculis congue dui vitae hendrerit. Mauris consequat facilisis nisi non vulputate. Integer et suscipit nisl. Sed nec ligula erat.</p>
			</div><!--panel-->
			<div class="panel">
				<h2>Notícia 4</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed purus libero. Nam iaculis felis sed dignissim tincidunt. Sed eu odio enim. Morbi leo orci, ultricies eget pretium imperdiet, bibendum sit amet dui. Aliquam sit amet consequat ligula. Nam accumsan quis nisl vel maximus. Quisque malesuada mauris sit amet elit feugiat placerat. Vestibulum consequat vel diam a aliquam. Pellentesque iaculis congue dui vitae hendrerit. Mauris consequat facilisis nisi non vulputate. Integer et suscipit nisl. Sed nec ligula erat.</p>
			</div><!--panel-->
			<div class="panel">
				<h2>Notícia 5</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed purus libero. Nam iaculis felis sed dignissim tincidunt. Sed eu odio enim. Morbi leo orci, ultricies eget pretium imperdiet, bibendum sit amet dui. Aliquam sit amet consequat ligula. Nam accumsan quis nisl vel maximus. Quisque malesuada mauris sit amet elit feugiat placerat. Vestibulum consequat vel diam a aliquam. Pellentesque iaculis congue dui vitae hendrerit. Mauris consequat facilisis nisi non vulputate. Integer et suscipit nisl. Sed nec ligula erat.</p>
			</div><!--panel-->
		</div><!--content1-->

		<div class="ultimas-atividades">
			<div class="atividades-topo">
				<h2>Últimas atividades</h2>
			</div><!--atividades-topo--->
			<br />
			<div class="atividade-registro">
				<div class="circle-atividade"></div>
				<h2>Há 2 minutos</h2>
				<p>Uma nova <b>notícia</b> foi inserida</p>
			</div>
			<div class="atividade-registro">
				<div class="circle-atividade"></div>
				<h2>Há 5 minutos</h2>
				<p>Uma nova <b>notícia</b> foi inserida</p>
			</div>
			<div class="atividade-registro">
				<div class="circle-atividade"></div>
				<h2>Há 20 minutos</h2>
				<p>Uma nova <b>notícia</b> foi inserida</p>
			</div>
						<div class="atividade-registro">
				<div class="circle-atividade"></div>
				<h2>Há 45 minutos</h2>
				<p>Uma nova <b>notícia</b> foi inserida</p>
			</div>

						<div class="atividade-registro">
				<div class="circle-atividade"></div>
				<h2>Há 2 horas</h2>
				<p>Uma nova <b>notícia</b> foi inserida</p>
			</div>
		</div>

	</div><!--main-content-->



	<div class="clear"></div>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<!-- Sistema de Ancoragem SmoothScroll -->

<script>
        function smoothScroll(event, elementId) {
            event.preventDefault(); // Impede o comportamento padrão do link
            const element = document.getElementById(elementId);
            if (element) {
                element.scrollIntoView({ behavior: "smooth" });
            }
        }
    </script>


<!--Grafico de noticias mais vistas-->

<script>
    var ctx = document.getElementById('mostViewedNewsChart').getContext('2d');
    var mostViewedNewsChart = new Chart(ctx, {
        type: 'bar', // Gráfico de barras
        data: {
            labels: ['Notícia 1', 'Notícia 2', 'Notícia 3', 'Notícia 4', 'Notícia 5'], // Títulos das notícias
            datasets: [{
                label: 'Visitas',
                data: [500, 300, 450, 600, 350], // Quantidade de visitas 
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)'
                ], // Cores das barras
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)'
                ],
                borderWidth: 1 // Espessura da borda das barras
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true // Iniciar o gráfico em zero
                }
            }
        }
    });
</script>



<!--Graficos de ultimas visitas-->

<script>
    var ctx = document.getElementById('visitsChart').getContext('2d');
    var visitsChart = new Chart(ctx, {
        type: 'line', // Tipo de gráfico: 'line', 'bar', 'pie', etc.
        data: {
            labels: ['Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb', 'Dom'], // Dias da semana
            datasets: [{
                label: 'Visitas',
                data: [120, 190, 300, 250, 400, 450, 320], // Dados 
                backgroundColor: 'rgba(54, 162, 235, 0.2)', // Cor de fundo
                borderColor: 'rgba(54, 162, 235, 1)', // Cor da linha
                borderWidth: 1 // Espessura da linha
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true // Iniciar o gráfico em zero
                }
            }
        }
    });
</script>


<!--Jquery Menu Mobile-->

<script>
	
	$(document).ready(function(){
        // Função para ajustar o menu conforme o tamanho da janela
        function ajustarMenu(){
            var windowWidth = $(window).width();

            // Se a largura da janela for menor ou igual a 768px, aplicamos o comportamento de mobile
            if(windowWidth <= 768){
                $('.nome-usuario h2').off('click').on('click', function(){
                    var el = $('.sidebar');
                    if(el.is(':visible')){
                        el.hide();
                        $('.main-content').css('left','0');
                    } else {
                        el.show();
                        $('.main-content').css('left','300px');
                    }
                });
            } else {
                // No desktop, o menu deve ficar visível
                $('.sidebar').show();
                $('.main-content').css('left','300px');
            }
        }

        // Executa a função no carregamento da página
        ajustarMenu();

        // Atualiza em tempo real quando a janela é redimensionada
        $(window).resize(function(){
            ajustarMenu();  // Executa a função de ajuste do menu
        });
    }); 

</script>

</body>
</html>