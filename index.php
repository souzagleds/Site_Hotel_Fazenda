<?php
include "conexao.php";

$depoimento = null;

$sql = "SELECT * FROM Depoimento WHERE codigo_depoimento_cliente = 1;";

$resultado = $conector->query($sql);
$num_rows = $resultado->num_rows;

if($num_rows <= 0){
    echo "Nenhum depoimento encontrado!";

} else {
  for($i=0; $i<$num_rows;$i++){
    $resultado->data_seek($i);
    $row = $resultado -> fetch_assoc();
    $depoimento = $row;
  }
}



$conector -> close();

?>

<!DOCTYPE html>
<html lang="pt_BR">
  <head>
    <!-- PAGE INFO -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hotel Fazenda CBJ</title>

    <!-- Icones -->
    <link rel="stylesheet" href="assets/fonts/style.css" />

    <!-- Swiper -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />

    <!-- STYLES -->
    <link rel="stylesheet" href="style.css" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Poppins:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <header id="header">
      <nav class="container">
        <a class="logo" href="#">Hotel<span>FazendaCBJ</span>.</a>
        <!-- menu -->
        <div class="menu">
          <ul class="grid">
            <li><a class="title" href="#home">Início</a></li>
            <li><a class="title" href="#about">Sobre</a></li>
            <li><a class="title" href="#services">Serviços</a></li>
            <li><a class="title" href="#testimonials">Depoimentos</a></li>
            <li><a class="title" href="#contact">Contato</a></li>
            <li><a class="title" href="#reserve_now">Reserve já</a></li>
          </ul>
        </div>
        <!-- /menu -->
        <div class="toggle icon-menu"></div>
        <div class="toggle icon-close"></div>
      </nav>
    </header>

    <main>
      <!-- HOME -->
      <section class="section" id="home">
        <div class="container grid">
          <div class="image">
            <img
              src="image/1.jpg"
              alt="Mulher sorrindo penteando outra mulher"
            />
          </div>
          <div class="text">
            <h2 class="title">Todo conforto para você e sua família!</h2>
            <p>Um hotel exclusivo para passar com sua família.</p>
            <a class="button" href="#reserve_now">Faça sua reserva</a>
          </div>
        </div>
      </section>

      <div class="divider-1"></div>

      <!-- ABOUT -->
      <section class="section" id="about">
        <div class="container grid">
          <div class="image">
            <img src="image/3.jpg" alt="3 mulheres sorrindo" />
          </div>
          <div class="text">
            <h2 class="title">Sobre nós</h2>
            <p>
              Com construções em estilo colonial, camas em tear e móveis da
              linha rústica mineira: Hotel Fazenda Córrego do Bom Jesus. Para o
              melhor benefício dos nossos clientes, disponibilizamos um lindo
              salão aquecido com lareira, varandas com vista directa para a
              Pedra de São Domingos e um amplo quintal onde são guardados os
              animais de estimação. Entre esses animais estão cavalos, vacas,
              bois, patos, galinhas e outros. Trazendo de forma lúdica toda a
              ideia de campo.
            </p>
            <br />
            <p>
              Para diversão também oferecemos passeios a cavalo, de charrete,
              trilhas até a Pedra de São Domingos, uma ampla piscina externa,
              espaço para crianças, e uma linda área de lazer para você e sua
              família. Oferecemos ainda uma capela para a realização de eventos
              festivos, como casamentos, baptizados e também um amplo salão de
              festas. Estamos no mercado desde 1992, buscando sempre atender
              nossos clientes da melhor forma, proporcionando alegria em cada
              detalhe e tornando esta experiência inesquecível. Nosso foco é
              você, cliente, pois o afastamos do dinâmico cotidiano, acalmando e
              relaxando cada um com o melhor que o país pode oferecer.
            </p>
            <br />
            <p>
              A estrutura de todos os espaços do Hotel foi desenhada e
              implementada pelos nossos antepassados, proveniente de uma longa e
              tradicional cultura familiar; de onde vislumbramos um nicho que
              pode, acima de tudo, alegrar os outros. Nosso Farm Hotel está
              localizado na estrada para Pedra de São Domingos, Km 16,5, no
              município de Córrego do Bom Jesus, Minas Gerais. Localizada a 6 Km
              de Cambuí, e 155 Km da capital São Paulo
            </p>
            <br />
            <p>
              Conheça nosso Hotel Fazenda Córrego do Bom Jesus. Nas cores e
              sabores, uma viagem pela vida no campo nas mais ricas tradições
              mineiras. Córrego do Bom Jesus: quem te conhece nunca te
              esquecerá!
            </p>
          </div>
        </div>
      </section>

      <div class="divider-2"></div>

      <!-- SERVICES -->
      <section class="section" id="services">
        <div class="container grid">
          <header>
            <h2 class="title">Serviços</h2>
            <p class="subtitle">
              Com mais de 5 anos no mercado, o
              <strong> Hotel Fazenda CBJ </strong> já conquistou clientes de
              inúmeras cidades com seu ótimo ambiente aconchegante e tranquilo.
            </p>
          </header>
          <div class="cards grid">
            <div class="card">
              <i class="icon-coffee"></i>
              <h3 class="title">Café da manhã</h3>
              <p>
                Nosso café da manhã é com pratos típicos da região de Minas
                Gerais, um café light para aproveitar o dia. E, claro, não vamos
                perder aquele famoso pão de queijo.
              </p>
            </div>
            <div class="card">
              <i class="icon-restaurant"></i>
              <h3 class="title">Almoço</h3>
              <p>
                Aqui você encontra uma grande variedade de pratos, tanto
                mineiros quanto de outras regiões. E o melhor é que todo o
                cardápio é feito aqui mesmo no local.
              </p>
            </div>
            <div class="card">
              <i class="icon-travel-car"></i>
              <h3 class="title">Passeios</h3>
              <p>
                Temos passeios incríveis: cavalgadas, lindas cachoeiras, e
                também a incrível Pedra de São Domingos, com uma vista
                maravilhosa do pôr do sol.
              </p>
            </div>
          </div>
        </div>
      </section>

      <div class="divider-1"></div>

      <!-- TESTIMONIALS -->
      <section class="section" id="testimonials">
        <div class="container">
          <header>
            <h2 class="title">Depoimentos de quem já passou por aqui</h2>
          </header>
          <div class="testimonials swiper-container">
            <div class="swiper-wrapper">
              <div class="testimonial swiper-slide">
                <blockquote>
                  <p>
                    <span>&ldquo;</span>
                    <?php
                    
                    echo $depoimento['comentario'];


                    ?>
                  </p>
                  <cite>
                    <?php
                    echo '<img src="image/'.$depoimento['foto'].'" alt="Foto de Carlos Eduardo">';
                    ?>
                    
                    </br>
                    <?php echo $depoimento['nome']?>
                  </cite>
                </blockquote>
              </div>
            </div>

            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>

      <div class="divider-2"></div>

      <!-- Reservas -->

      <div class="main-10" id="reserve_now">
        <!--MAIN-container-->

        
        <div class="container-10">
          <h2>Faça já sua reserva !</h2>
          <form method= "POST" action="novo_reserva" enctype="multipart/form-data" name="formulario_html5" autocomplete="off">
      
            <label for="nombre">Nome completo</label></br>
            <input type="text" name="nome" id="nome" class="caixas"></br>
      
            <label for="email">Email</label></br>
            <input type="email" name="email" id="email" class="caixas"></br>
      
            <label for="telefono">Telefone</label></br>
            <input type="number" name="telefone" id="telefone" class="caixas"></br>
      
            <label for="llegada">Data e hora da entrada</label></br>
            <input type="datetime-local" id="llegada" name="data_entrada" class="caixas">
            </br>
      
            <label for="llegada">Data e hora da saida</label></br>
            <input type="datetime-local" id="llegada" name="data_saida" class="caixas">
            </br>
          
            
            
            <label for="estadia">Adultos</label></br>
            <select name="adulto" id="adulto" class="caixas">
              <option value="1" label="1">
              <option value="2" label="2">
              <option value="3" label="3">
              <option value="4" label="4">
              <option value="5" label="5">
              <option value="6" label="6">
              <option value="7" label="7">
              <option value="8" label="8">
              <option value="9" label="9">
              <option value="10" label="10">
              <option value="11" label="11">
              <option value="12" label="12">
              <option value="13" label="13">
              <option value="14" label="14">
              <option value="15" label="15">     
      
            </select>
          </br>

      
            <label for="estadia">Crianças</label></br>
            <select name="criancas" id="criancas" class="caixas">
              <option value="1" label="1">
              <option value="2" label="2">
              <option value="3" label="3">
              <option value="4" label="4">
              <option value="5" label="5">
              <option value="6" label="6">
              <option value="7" label="7">
              <option value="8" label="8">
              <option value="9" label="9">
              <option value="10" label="10">
              <option value="11" label="11">
              <option value="12" label="12">
              <option value="13" label="13">
              <option value="14" label="14">
              <option value="15" label="15">     
      
            </select><br>
      
            <input type="submit" value="Reserve já" name="submit" class="btn">
      
          </form>
      
        </div>
      </div>

      <!-- CONTACT -->
      <section class="section" id="contact">
        <div class="container grid">
          <div class="text">
            <h2 class="title">Entre em contato com a gente!</h2>
            <p>
              Entre em contato com Hotel FazendaCBJ, queremos tirar suas
              dúvidas, ouvir suas críticas e sugestões.
            </p>
            <a
              href="https://api.whatsapp.com/send?phone=+5511998456754&text=Oi! Gostaria de agendar um horário"
              class="button"
              target="_blank"
              ><i class="icon-whatsapp"></i> Entrar em contato</a
            >
          </div>

          <div class="links">
            <ul class="grid">
              <li><i class="icon-phone"></i> 35 99999-9999</li>
              <li><i class="icon-map-pin"></i> R. Amauri Souza, 346</li>
              <li><i class="icon-mail"></i> contato@hotelcbj.com</li>
            </ul>
          </div>
        </div>
      </section>

      <div class="divider-1"></div>
    </main>

    <footer class="section">
      <div class="container grid">
        <div class="brand">
          <a class="logo logo-alt" href="#home"
            >Hotel<span>FazendaCBJ</span>.</a
          >
          <p>©2021 HotelFazendaCBJ.</p>
          <p>Todos os direitos reservados.</p>
        </div>

        <div class="social grid">
          <a href="https://www.instagram.com/duuh.ed/" target="_blank">
            <i class="icon-instagram"></i>
          </a>
          <a
            href="https://www.facebook.com/carlos.eduardo.121772/"
            target="_blank"
          >
            <i class="icon-facebook"></i
          ></a>
          <a href="https://youtube.com" target="_blank"
            ><i class="icon-youtube"></i
          ></a>
        </div>
      </div>
    </footer>

    <a href="#home" class="back-to-top"><i class="icon-arrow-up"></i></a>

    <!-- swiper -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- scrollreveal -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- main.js -->
    <script src="main.js"></script>
  </body>
</html>
