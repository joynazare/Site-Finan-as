<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/0d6dca1a9b.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>

    <link rel="stylesheet" href="css/estilo.css">

    <title>Ministério do Planeamento, Finanças e Economia Azul da República Democrática de São Tomé e Príncipe</title>
    <link rel="icon" href="imagens/logo.png">
  </head>
  <body>

  <?php 
  require 'connexao.php';
  $query_slides = "select titulo_imagem from tb_imagem";
  $result_slide = $pdo->prepare($query_slides);
  $result_slide->execute();
  $quantidade_slide = $result_slide->rowCount();
  //var_dump($quantidade_slide);

  
  ?>
    <header>
      <nav class="navbar navbar-expand-md navbar-light fixed-top 
      navbar-transparente">
        
        <div class="container">
          <a href="index.html" class="navbar-brand">
            <img src="imagens/logo.png" alt="" width="142"></a>

            <div style=" height: 180px;  color: white; text-align: center; margin-right: -250px; ">
              <p>Ministério do Planeamento, Finanças e Economia Azul da República Democrática de São Tomé e Príncipe
              </p>
          </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-principal">
              <i class="fa-solid fa-bars text-white"></i>
            </button>

          <div class="collapse navbar-collapse" id="nav-principal">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="" class="nav-link">ENTRADA</a>
              
             </li>
              <li class="nav-item dropdown">
                <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" >DIRECÇÕES</a>
                <div class="dropdown-menu">
                  <a href="./direcçoes/tesouro.html" class="dropdown-item">Diracção de Tesouro</a>
                  <a href="/direcçoes/orcamento.html" class="dropdown-item">Diracção de Orçamento</a>
                  <a href="/direcçoes/patrimonio.html" class="dropdown-item">Diracção do Património</a>
                  <a href="/direcçoes/impostos.html" class="dropdown-item">Diracção dos Impostos</a>
                  <a href="direcçoes/contabilidade.html" class="dropdown-item">Diracção de Contabilidade</a>
                  <a href="direcçoes/tecnologia_info.html" class="dropdown-item">Diracção de Tecnologia de Informação</a>
                  <a href="direcçoes/alfandegas.html" class="dropdown-item">Diracção das Alfândigas</a>
                  <a href="direcçoes/planeamento.html" class="dropdown-item">Diracção do Planeamento</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">PUBLICAÇÕES</a>
                <div class="dropdown-menu">
                  <a href="publicações/noticia.html" class="dropdown-item">Notícias</a>
                  <a href="publicações/comunicado_impre.html" class="dropdown-item">Comunicado de Imprensa</a>
                  <a href="publicações/anuncio.html" class="dropdown-item">Anúncios</a>
                  <a href="publicações/entrevista.html" class="dropdown-item">Entrevistas</a>
                  <a href="publicações/eventos.html" class="dropdown-item">Eventos</a>
                  <a href="publicações/galeria.html" class="dropdown-item">Galeria de Imagens</a>
                  <a href="publicações/multimedia.html" class="dropdown-item">Multimédia</a>
                  <a href="publicações/documentos.html" class="dropdown-item">Documentos</a>
              </div>
              </li>
              
              <li class="nav-item"><a href="" class="nav-link">CONTACTO</a> </li>
            </ul>

          </div>
        </div>
      </nav>
    </header>

    <section id="home" class="d-flex" style="background-color: black; margin-top: 210px; ">
      <div class="container align-self-center">
        
        <div class="row">
          <div class="col-md-12 capa">
            <div class="slider" style="  height: 700px;">
            <div id="carousel-controles" class="carousel slide" data-ride="carousel" >
                        
              <div class="carousel-inner" style="padding-right: 300px;">


              <?php 
              $controle = 0;
              while ($row_slide = $result_slide->fetch(PDO::FETCH_ASSOC)) {
                # code...
                //var_dump($row_slide);
                extract($row_slide);
                $ativo = "";
                if ($controle == 0) {
                  $ativo = "active";
                  # code...
                }
                echo "<div class='carousel-item $ativo'>";
                    echo  "<img class='imagem' src='imagens/slides/$titulo_imagem' alt='img-fluid'>";
                   // echo  "<div class='carousel-caption'>";
                    //echo     "<h3>Primeiro-Ministro representa São Tomé e Príncipe na Cimeira – EUA/África</h3>" ;
                     //echo "</div>";
                 echo "</div>";
                 $controle ++;



              }
              
              ?>

            <!--
                  <div class="carousel-item active">
                      <img class="imagem" src="imagens/slides/cimeira001.jpg" alt="img-fluid">
                      <div class="carousel-caption">
                          <h3>Primeiro-Ministro representa São Tomé e Príncipe na Cimeira – EUA/África</h3>
                      </div>
                  </div>
                  <div class="carousel-item">
                      <img class="imagem" src="imagens/slides/cimeira03.jpg" alt="img-fluid">
                      <div class="carousel-caption">
                          <h3>Primeiro-Ministro representa São Tomé e Príncipe na Cimeira – EUA/África</h3>
                      </div>
                  </div>
                  <div class="carousel-item">
                      <img class="imagem" src="imagens/slides/cimeira02.jpg" alt="img-fluid">
                      <div class="carousel-caption">
                          <h3>Primeiro-Ministro representa São Tomé e Príncipe na Cimeira – EUA/África</h3>
                      </div>
                  </div>
                  <div class="carousel-item">
                      <img class="imagem" src="imagens/slides/governo03.jpg" alt="img-fluid">
                      <div class="carousel-caption">
                          <h3>Primeiro-Ministro representa São Tomé e Príncipe na Cimeira – EUA/África</h3>
                      </div>
                  </div>-->
              </div>

              <a href="#carousel-controles" class="carousel-control-prev" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
              </a>
              <a href="#carousel-controles" class="carousel-control-next" data-slide="next" style="padding-right: 0px; margin-right:300px;" >
                  <span class="carousel-control-next-icon"></span>
              </a>
          </div>
          </div>
        </div>
      </div>
    </div>
    </section>

    <section id="servicos" class="caixa">
      
        <div class="container">
            <div class="row">
                
                <div class="col-md-4">
                    <div class="caixa-conteudo">
                    <img src="imagens/img1.jpg" class="img-fluid" alt="" style="padding-top: 10px;">
                    <h3>Sobre Nós</h3>
                    <p>Conheça o Ministério do Planeamento, Finanças e Economia Azul de São Tomé e Príncipe.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="caixa-conteudo">
                    <img src="imagens/img2.jpg" class="img-fluid" alt="" style="padding-top: 10px;">
                    <h3>O que fazemos</h3>
                    <p>Saiba o que fazemos e para onde caminhamos. Que política orinta as nossas acções</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="caixa-conteudo">
                    <img src="imagens/img3.jpg" class="img-fluid" alt="" style="padding-top: 10px;">
                    <h3>Rede de Serviços</h3>
                    <p>Conheça a nossa Rede de Serviços Públicos. As Direcções e Empresas Públicas. Saiba onde estão e o que fazem.</p>
                </div>
            </div>
        </div>
      </div>
    </div>
  </section>



  <section id="recursos" class="caixa" style="background-color: white;">
    <div class="container">
      <div class="row">
        <div class="col-md-9" style=" margin-top: 5px; margin-left: 15px; margin-right: -40px;">
          <div class="caixa-noticia" style="background-color: black">
              <h5>ÚLTIMAS NOTÍCIAS</h5>
          </div>
          <div class="row">
              <div class="col-md-4">
                  <div class="caixa-conteudo2">
                      <img src="imagens/MPF.jpg" class="img-fluid" alt="">
                      <a href="">
                          <h6>MPF - Unité de Coordination du Projet ISP-CAPEM</h6>
                      </a> 
                      <p >PUBLICATION DE L’ATTRIBUTION DE CONTRAT DE CONSULTANT

                          DANS LE CADRE DU PROJET D’APPUI INSTITUTIONNEL À L’ADMINSITRATION</p>
                      </div> 
              </div>
              <div class="col-md-4">
                  <div class="caixa-conteudo2">
                      <img src="imagens/Projeto Zuntamon.jpg" class="img-fluid" alt="">
                      <h6>ZLCI/004/2024- AMI - Empresas de Consultoria</h6>
                      <p>RECRUTEMENT D'UN CABINET DE CONSEILS POUR LA CONCEPTION

                          D'UN MÉCANISME DE FINANCEMENT FLEXIBLE DU GOUVERNEMENT (MFF)</p>
                      </div>
              </div>
              <div class="col-md-4">
                  <div class="carousel ">

                  </div>
                  <div class="caixa-conteudo2">
                      <img src="imagens/ContaGeraldeEstado.jpg" class="img-fluid" alt="">
                      <h6>MPF - Conta Geral do Estado -2022</h6>
                      <p></p>
                      </div>
              </div>
              <div class="col-md-4">
                  <div class="caixa-conteudo2">
                      <img src="imagens/ContaGeraldeEstado.jpg" class="img-fluid" alt="">
                      <h6>MPF - Conta Geral do Estado -2022</h6>
                      <p></p>
                      </div>
              </div>
              <div class="col-md-4">
                  <div class="caixa-conteudo2">
                      <img src="imagens/ContaGeraldeEstado.jpg" class="img-fluid" alt="">
                      <h6>MPF - Conta Geral do Estado -2022</h6>
                      <p></p>
                      </div>
              </div>
              <div class="col-md-4">
                  <div class="caixa-conteudo2">
                      <img src="imagens/ContaGeraldeEstado.jpg" class="img-fluid" alt="">
                      <h6>MPF - Conta Geral do Estado -2022</h6>
                      <p></p>
                      </div>
              </div>
              <div class="benvindo" style="margin-top: 80px; margin-left: 10px; margin-bottom: 80px;">
                  <h2 style="color: black;">BEM VINDO</h2>
              </div>
              
          </div>
      </div>
      <div class="col-md-3"style="">

        <form class="form" action="home.php" method="POST">
        
          <h4  style="margin-top: 40px; margin-left: 50px; color: black;">LOGIN</h4>
          <div>
          <label for="email" style="color: black; margin-left: 50px;">Usuario:</label>
          <input style="margin-left: 50px;" type="text" name="usuario" id="usuario" placeholder="usuario">
        </div>
        <div>
          <label for="email" style="color: black; margin-left: 50px;">Senha:</label>
          <input style="margin-left: 50px;" type="password" name="senha" id="senha" placeholder="senha">
        </div>
        <div>
          <button style="margin-left: 50px;" type="submit" >Entrar</button>
        </div>
       
          <div style="margin-top: 20px; margin-left: 50px;">
            
              <a href="" > Esquece o usuario </a> <br>
              <a  href="" > Esquece a senha </a>
          </div>
        </form>
          

          <h4  style="margin-top: 50px; margin-left: 50px; color: black;">ANUNCIOS</h4>

          <div style= "background-color: black; width: 200px; height: 300px; margin-left: 50px; ">
              
              <img class="img" src="imagens/stpinlondon1.jpg" height="160px" width="190px" alt="img-fluid" style="padding-left: 20px; margin-top: 70px; margin-right: 10px;">
          </div>
          <div style= "background-color: black; width: 200px; height: 200px; margin-top: 10px; margin-left: 50px; margin-bottom: 10px;">
              
              <img class="img2" src="imagens/e-fatura.png" alt="img-fluid">
          </div>
      </div>
    </div>
  </section>

 
    
   




    <section id="recursos" class="multimidia" style="background-color: white;">
      <div class="container" style="">
        
      <div class="row">
          <div class="col-md-12 "  >
            <div class="caixa-noticia" style="background-color: black;" >
              
                      <h5>MULTIMÉDIA</h5>
                
            </div>
          </div>
      </div>
      
  <div class="row">
    <div class="col-md-5" style="  margin: 10px; margin-top: 30px; ">
            <article id="video">
              <iframe width="315" height="250" src="https://www.youtube.com/embed/oVuWJymbYVA"
               title="Discurso do presidente de São Tomé e Príncipe, Carlos Manuel Vila Nova, na Assembleia Geral da ONU" 
               frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
               referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          </article>
    </div>
  
    <div class="col-md-6" style="  margin: 10px; margin-top: 30px; ">
      <div class="row">
        <div class="col-md-3" style="">
                <article id="video1">
                        
                  <iframe width="100" height="100" src="https://www.youtube.com/embed/oVuWJymbYVA"
                   title="Discurso do presidente de São Tomé e Príncipe, Carlos Manuel Vila Nova, na Assembleia Geral da ONU" 
                   frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                   referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </article>
              <article id="video2">
                  <iframe width="100" height="100" src="https://www.youtube.com/embed/LxJdH9RR_m0" title="Íntegra do discurso do presidente Lula, do Brasil, na Assembleia Geral da ONU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                  referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </article>
              <article id="video3">
                  <iframe width="100" height="100" src="https://www.youtube.com/embed/6tAj_1Kvv1k" title="OMS: 99% da população mundial respira ar “tóxico”" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" ~
                  referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </article>
        </div>
          <div class="col-md-3"  style="  margin: 10px; margin-top: 30px; ">
              <div>
                  <h4 style="width: 300px;">
                     <a href="">Discurso do presidente de São Tomé e Príncipe</a> </h4>
              </div>
              <div>
                  <h4 style="width: 300px;">
                     <a href="">Íntegra do discurso do presidente Lula, do Brasil, na Assembleia Geral da ONU</a> </h4>
              </div>
              <div>
                  <h4 style="width: 300px;">
                     <a href="">OMS: 99% da população mundial respira ar “tóxico”</a> </h4>
              </div>
          </div>
      </div>         
    </div>

        </div>
      </div>
      
    </section>


    <footer>
      <div class="container">
        <div class="row">
          
          <div class="col-md-4">
            <h4>NOSSA LOCALIZAÇÃO</h4>
            <ul class="navbar-nav">
              <li><a href="">Ministério do Planeamento, Finanças e Economia Azul, Largo das Alfândigas</a></li>
              <li><a href="">Água Grande, São Tomé</a></li>
              <li><a href="">Caixa Postal nº 168</a></li>
              <li><a href="">São Tomé e Principe</a></li>
              <li><a href="">Nossa Localização</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <h4>FALE CONOSCO</h4>
            <ul class="navbar-nav">
              <li><a href="">Para qualquer informação ou solicitação dos nossos serviços</a></li>
              <li><a href="">Fale conosco aqui</a></li>
              <li><a href="">Liga-nos +239 2221083 / 2224172 </a></li>
              <li><a href="">Email: mfcea@financas.gov.st</a></li>
            </ul>
          </div>
          
          <div class="col-md-4">
            <ul>
              <li>
                <a href=""><img src="imagens/facebook.png" alt=""></a>
              </li>
              <li>
                <a href=""><img src="imagens/twitter.png" alt=""></a>
              </li>
              <li>
                <a href=""><img src="imagens/instagram.png" alt=""></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>