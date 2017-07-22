<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Incêndio Brasília</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/carousel.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link rel="shortcut icon" href="favicon.ico" />

</head>
<body>


 <!-- Fixed navbar -->
<!--     <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#home">Home</a></li>
            <li><a href="#sobre">Sobre nós</a></li>
            <li><a href="#credenciamento">Credenciamento/Certificações</a></li>
            <li><a href="#servicos">Serviços</a></li>
            <li><a href="#testemunhos">Testemunhos</a></li>
            <li><a href="#contato">Contato</a></li>
          </ul>
        </div>
      </div>
    </nav> -->

    <div class="col-12">
      <!-- <br /><br /> -->
      <?php
      if (isset($_GET['mensagem'])) {
        echo "<script>alert('".$_GET['mensagem']."');</script>";
      }
      ?>

      <div class="jumbotron">
        <h1><img src="logo.png" style="width: 205px; margin: -50px;" /></h1></p>
      </div>

      <div class="container">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            <li data-target="#myCarousel" data-slide-to="3" class=""></li>
            <li data-target="#myCarousel" data-slide-to="4" class=""></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="imagens/banner/1.png" />
            </div>
            <div class="item">
              <img src="imagens/banner/2.png" />
            </div>
            <div class="item">
              <img src="imagens/banner/3.png" />
            </div>
            <div class="item">
              <img src="imagens/banner/4.png" />
            </div>
            <div class="item">
              <img src="imagens/banner/5.png" />
            </div>
          </div>
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row col-12">
          <div class="col-md-4">
            <h2>História</h2>
            <p>A incêndio Brasília foi fundada por uma equipe técnica no ano de 2010.</p>
          </div>
          <div class="col-md-4">
            <h2>Visão</h2>
            <p>Nossa missão é prevenir incêndio sendo nosso foco a norma CBMDF. Temos com visão ser a melhor empresa de prevenção de incêndio em Brasília.</p>
          </div>
          <div class="col-md-4">
            <p><span class="aspas">“</span>Investir em prevenção contra incêndio, é a melhor forma de garantir a segurança da sua família, e do seu negócio. Conte conosco da Incêncio Brasília.<span class="aspas">”</span></p>
          </div>
        </div>

        <div class="row col-md-12">

          <div class="col-md-8">
            <div class="panel panel-default">
              <div class="panel-heading">Empresa Credenciada</div>
              <div class="panel-body">
                <div class="col-md-6">
                  <br /><br />
                  <img class="img" src="imagens/credenciais/1.png" alt="Generic placeholder image" height="70" width="250">
                </div>
                <div class="col-md-6">
                  <img class="img" src="imagens/credenciais/2.jpg" alt="Generic placeholder image" width="140">
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Certificação Internacional</h3>
              </div>
              <div class="panel-body">
                <div class="col-md-12">
                  <img class="img" src="imagens/credenciais/3.png" alt="Generic placeholder image" width="250">
                  <br /><br />
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="row col-12">
          <h2>Nossos serviços</h2>
        </div>
        <br /><br />


        <div class="row col-12">
          <div class="col-md-4">
            <img class="img-circle teste-imagem" src="imagens/servicos/1.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Escada Pressurizada</h2>
            <p>O objetivo principal é evitar a entrada de fumaça na escada, visando facilitar a fuga das pessoas e o trabalho dos bombeiros em caso de incêndio.</p>
          </div>
          <div class="col-md-4">
            <img class="img-circle teste-imagem" src="imagens/servicos/2.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Dectetor de Fumaça</h2>
            <p>São dispositivos encarregados de fazer a vigilância automática permanente de um local.</p>
          </div>
          <div class="col-md-4">
            <img class="img-circle teste-imagem" src="imagens/servicos/3.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Linha completa para Hidrantes</h2>
            <p>São utilizados na luta contra o fogo. São instalados em pontos estratégicos das redes de distribuição, onde devem ser cabazes de fornecer água em quantidades e pressão satisfatórias.</p>
          </div>
          <br /><br />
        </div>
        <div class="row col-12">
          <div class="col-md-4">
            <img class="img-circle teste-imagem" src="imagens/servicos/4.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Rota de Fuga</h2>
            <p>É um mapa que representa, através de símbolos apropriados, o trajeto a ser seguido pelo indivíduo no caso de necessidade urgente de evacuação do local.</p>
          </div>
          <div class="col-md-4">
            <img class="img-circle teste-imagem" src="imagens/servicos/5.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Iluminação de Emergência</h2>
            <p>Fornecem a iluminação necessária para garantir segurança na continuidade das atividades e possível abandono do ambiente por meio das rotas de fuga, em caso de emergência e/ou falta de energia elétrica.</p>
          </div>
          <div class="col-md-4">
            <img class="img-circle teste-imagem" src="imagens/servicos/6.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Projeto contra Incêndio</h2>
            <p>É um mapa que descreve um sistema de segurança contra incêndio, ou seja, os tipos de acessórios que existirão no local e suas localizações.</p>
          </div>
          <br /><br />
        </div>
        <div class="row col-12">
          <div class="col-md-4">
            <img class="img-circle teste-imagem" src="imagens/servicos/7.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Alarmes Contra Incêndio</h2>
            <p>É o sistema responsável pela informação de todos os usuários envolvidos em uma determinada área de ocorrência de um incêndio ou no principio do mesmo.</p>
          </div>
          <div class="col-md-4">
            <img class="img-circle teste-imagem" src="imagens/servicos/8.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Sistema co2 para cozinha industrial</h2>
            <p>Tem como objetivo detectar e extinguir o fogo através de inundação total do gás na área efetiva de risco. Isto ocorre pois o CO2 diminui a concentração de oxigênio do ambiente fazendo com que o fogo não possa mais realizar o trabalho de combustão.</p>
          </div>
          <div class="col-md-4">
            <img class="img-circle teste-imagem" src="imagens/servicos/9.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Laudos Técnicos</h2>
            <p>É o relato do técnico ou especialista designado para avaliar determinada situação que estava dentro de seus conhecimentos, como a tradução das medições captadas pelo técnico ou especialista.</p>
          </div>
          <br /><br />
        </div>
        <div class="row col-12">
          <div class="col-md-4">
            <img class="img-circle teste-imagem" src="imagens/servicos/10.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Gerador de emergência</h2>
            <p>Projeto de Lei prevê obrigatoriedade de instalação de Grupos Geradores em prédios que tenham elevadores.<p>

              <p>A lei diz que para que o Auto de Vistoria do Corpo de Bombeiros seja aprovado, um Gerador de Energia deva funcionar automaticamente em caso de falta de energia.</p>

              <p>A justificativa para a criação desta regra é que pessoas podem ficar presas por horas dentro dos elevadores em casos de queda de energia, além de cadeirantes e indivíduos com dificuldades de locomoção que não podem depender de escadas para se deslocar nos edifícios.</p>
            </div>

            <div class="col-md-4">
              <img class="img-circle teste-imagem" src="imagens/servicos/11.png" alt="Generic placeholder image" width="140" height="140">
              <h2>Para-raio</h2>
              <p>É destinado a dar proteção aos edifícios atraindo as descargas elétricas atmosféricas, raios, para as suas pontas e desviando-as para o solo através de cabos de pequena resistência elétrica.</p>
            </div>
            <div class="col-md-4">
              <img class="img-circle teste-imagem" src="imagens/servicos/12.png" alt="Generic placeholder image" width="140" height="140">
              <h2>Eletrotécnica e telecomunicações</h2>
              <p>Monta e repara instalações em edifícios ou outros locais, guiando-se por esquemas e outras especificações, utilizando ferramentas manuais comuns e especiais, aparelhos de medições elétrica e eletrônica, material isolante e equipamentos de soldar, para possibilitar o funcionamento dos mesmos.</p>
            </div>

          </div>


          <h2>Testemunhos</h2>

          <div class="row col-12">
            <div class="col-md-4">
              <p><span class="aspas">“</span>Equipe altamente qualificada, responsável e ótimo atendimento.<span class="aspas">”</span></p>
            </div><!-- /.col-md-4 -->
            <div class="col-md-4">
              <p><span class="aspas">“</span>Melhor empresa no ramo de Brasília, excelente resposta as nossas necessidades.<span class="aspas">”</span></p>
            </div><!-- /.col-md-4 -->
            <div class="col-md-4">
              <p><span class="aspas">“</span>Trouxeram inovação para nossos negócios, com excelentes preços.<span class="aspas">”</span></p>
            </div><!-- /.col-md-4 -->
          </div>

          <div id="contato col-12">

            <h2>Contato</h2>

            <div class="col-md-6">
              <h4><span class="glyphicon glyphicon-earphone"></span> (61) 3392-7247</h4>
              <h4><img src="imagens/icon/whatsapp.png" width="20px"></span> (61) 9 9157-7821</h4>
              <h4><span class="glyphicon glyphicon-earphone"></span> (61) 9 8115-5464</h4>
              <h4><span class="glyphicon glyphicon-envelope"></span> incendiobrasilia@yahoo.com.br </h4>
              <h4><span class="glyphicon glyphicon-envelope"></span> incendiobrasilia@gmail.com</h4>

              <br />
              <div class="alert alert-info col-md-10" role="alert">
                <strong>Fale consoco</strong> Utilize o formulário para solicitar um orçamento gratuito.<br>Responderemos o mais breve possível.
              </div>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7678.762421384803!2d-47.891338580720344!3d-15.783840781429083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a3af928339a5f%3A0x533f52faf55ec720!2sBras%C3%ADlia+R%C3%A1dio+Center!5e0!3m2!1spt-BR!2sbr!4v1437168812343" width="80%" height="250PX" frameborder="0" style="border:0"></iframe>
            </div>
            <div class="col-md-6 form-group" >
             <form id="form1" name="form1" method="post" action="form.php">
               <input type="hidden" name="assunto" value="CONTATO SITE INCÊNDIO BRASÍLIA">
               <h3> Fale Conosco</h3>

               <br />

               <label for="nome">Nome:</label><br>
               <input type="text" class="form-control" name="nome"><br><br>

               <label>Telefone:</label><br>
               <input type="text" class="form-control" name="telefone"><br><br>

               <label>E-mail:</label><br>
               <input type="text" class="form-control" name="email"><br><br>

               <label>Mensagem:</label><br><br>
               <textarea name="mensagem" class="form-control"> </textarea>
               <br>
               <input type="submit" class="btn btn-primary" name="button" id="button" value="Enviar">
               <input type="reset" class="btn btn-danger" value="Limpar">
             </form> 
           </div>
         </div>
       </div>
     </div>
     <br /> <br />
     <hr>
     <footer class="footer">
      <div class="container">
        <span class="text-muted">&#169; <?php echo date('Y'); ?> - Incêndio Brasília</span>
      </div>
    </footer>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>

  </html>