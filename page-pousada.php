<?php
    // Template Name: Page-pousada
?>

<?php get_header(); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <section class="pgPousada">
         
         <div class="container pgPousada__container">
               <h1 class="tituloHr pgPousada__tituloHr">Pousada Litoral</h1>      
               
               <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper pgPousada__mySwiper2">

                  <div class="swiper-wrapper">
                     <?php for ($i = 1; $i <= 35; $i++): ?>
                        <div class="swiper-slide">
                              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-pousada/pousada <?php echo $i; ?>.webp" />
                        </div>
                    <?php endfor; ?>
                  </div>

                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>

               </div>

               <div thumbsSlider="" class="swiper pgPousada__mySwiper">
                  <div class="swiper-wrapper">
                     <?php for ($i = 1; $i <= 35; $i++): ?>
                        <div class="swiper-slide">
                              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-pousada/pousada <?php echo $i; ?>.webp" />
                        </div>
                    <?php endfor; ?>
                  </div>
               </div>
               
               <div class="pgPousada__descricao">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-pousada/pousada.webp" class="pgPousada__descricao-img"/>

                  <div class="pgPousada__descricao-texto">
                     <p>
                        Bem-vindo à nossa Pousada! Localizada na Praia do Massaguaçú, ela oferece um refúgio perfeito para quem busca paz, conforto e relaxamento.
                     </p>
                     <p>
                        Com quartos espaçosos e aconchegantes, equipados com todas as comodidades que você precisa para se sentir em casa, nossa pousada é ideal para quem deseja desfrutar de uma estadia confortável e tranquila. Não perca a oportunidade de desfrutar de uma estadia inesquecível em nossa pousada. Entre em contato conosco agora mesmo e faça sua reserva!
                     </p>
                  </div>
            
               </div>

               <div class="pgPousada__servicos">                              
               
                  <div class="pgPousada__servicos-col">
                     <ul class="pgPousada__servicos-item">
                        <div class="pgPousada__servicos-titulo">
                           <i class="fa-solid fa-file"></i>
                           <spa>Regulamento</span>
                        </div>
                        <div class="pgPousada__servicos-lista">
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span class="teste">Regulamento da Pousada 
                                 <a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-pousada/regulamento-pousada.pdf" target="__blanck">aqui</a>
                              </span>
                           </li>
                        </div>
                     </ul>
                     <ul class="pgPousada__servicos-item">
                        <div class="pgPousada__servicos-titulo">
                           <i class="fa-solid fa-sack-dollar"></i>
                           <span>Valores associados</span>
                        </div>
                        <div class="pgPousada__servicos-lista">
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span class="teste">R$ 89,00 por estadia (a partir de 13 anos)</span>
                           </li>
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>R$ 44,50 por estadia (crianças de 7 a 12 anos)</span>                  
                           </li>
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Gratuito para crianças de 0 a 6 anos</span>                  
                           </li>
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Single: R$ 133,50</span>
                           </li>
                        </div>

                     </ul>

                     <ul class="pgPousada__servicos-item">
                        <div class="pgPousada__servicos-titulo">
                           <i class="fa-solid fa-sack-dollar"></i>
                           <span>Valores não associados</span>
                        </div>
                        <div class="pgPousada__servicos-lista">
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span class="teste">R$ 178,00 por estadia (a partir de 13 anos)</span>
                           </li>
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>R$ 89,00 por estadia (crianças de 7 a 12 anos)</span>                  
                           </li>
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Gratuito para crianças de 0 a 6 anos</span>                  
                           </li>
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Single: R$ 267,00</span>
                           </li>
                        </div>

                     </ul>

                  
                     <ul class="pgPousada__servicos-item">
                        <div class="pgPousada__servicos-titulo">
                           <i class="fa-solid fa-person-swimming"></i>
                           <span>Piscinas</span>
                        </div>
                        <div class="pgPousada__servicos-lista">
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Piscina adulto</span>
                           </li>
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Piscina infantil</span>
                           </li>
                        </div>
                     </ul>


                     <ul class="pgPousada__servicos-item">
                        <div class="pgPousada__servicos-titulo">
                           <i class="fa-solid fa-credit-card"></i>
                           <span>Pagamentos da reserva</span>
                        </div>
                        <div class="pgPousada__servicos-lista">
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Cartão de crédito até 6x</span>
                           </li>
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Débito</span>
                           </li>
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Dinheiro</span>
                           </li>
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Pix</span>
                           </li>
                        </div>
                     </ul>

                     <ul class="pgPousada__servicos-item">
                        <div class="pgPousada__servicos-titulo">
                           <i class="fa-solid fa-sun"></i>
                           <span>Ar-livre</span>
                        </div>
                        <div class="pgPousada__servicos-lista">
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Próxima à praia</span>
                           </li>
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Próximo a restaurantes</span>
                           </li>
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Próximo a farmácias</span>
                           </li>
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Próximo a mercados</span>
                           </li>
                        </div>
                     </ul> 

                  </div>

                  <div class="pgPousada__servicos-col">
                     <ul class="pgPousada__servicos-item">
                        <div class="pgPousada__servicos-titulo">
                           <i class="fa-solid fa-mug-saucer"></i>
                           <span>Café da manhã</span>
                        </div>
                        <div class="pgPousada__servicos-lista"> 
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Café da manhã incluso na estadia</span>
                           </li>
                        </div>
                     </ul>

                     <ul class="pgPousada__servicos-item">
                        <div class="pgPousada__servicos-titulo">
                           <i class="fa-solid fa-paw"></i>
                           <span>Animais de estimação</span>
                        </div>

                        <div class="pgPousada__servicos-lista">
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Animais de estimação: <strong>não permitidos</strong></span>
                           </li>
                        </div>
                     </ul>
                     <ul class="pgPousada__servicos-item">
                        <div class="pgPousada__servicos-titulo">
                           <i class="fa-solid fa-broom"></i>
                           <span>Serviços</span>
                        </div>
                        <div class="pgPousada__servicos-lista"> 
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Serviço diário de limpeza</span>
                           </li>
                           <!-- <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Lavanderia</span>
                           </li> -->
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Guarda sol</span>
                           </li>
                        </div>
                     </ul>                     
                     <ul class="pgPousada__servicos-item">
                        <div class="pgPousada__servicos-titulo">
                           <i class="fa-solid fa-door-open"></i>
                           <span>Quartos</span>
                        </div>

                        <div class="pgPousada__servicos-lista">
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Ar-condicionado</span>
                           </li>
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Berço</span>
                           </li>
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Sabonete</span>
                           </li>
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Toalhas</span>
                           </li>
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Roupa de cama</span>
                           </li>
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Cobertor</span>
                           </li>
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Frigobar</span>
                           </li>
                           </li>
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Tomadas 220v</span>
                           </li>
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Secador de cabelo</span>
                           </li>
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Armários com cabide</span>
                           </li>
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>TV Smart com acesso internet, canais aberto e App de streaming</span>
                           </li>
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Obs: a pousada não possui conta de app de streaming, a conta deve ser usada com a própria conta do hóspede </span>
                           </li>
                        </div>
                     </ul>

                     <ul class="pgPousada__servicos-item">
                        <div class="pgPousada__servicos-titulo">
                           <i class="fa-solid fa-umbrella-beach"></i>
                           <span>Solário</span>
                        </div>
                        <div class="pgPousada__servicos-lista">                        
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Vista para o mar</span>
                           </li>
                        </div>
                     </ul>

                     <ul class="pgPousada__servicos-item">
                        <div class="pgPousada__servicos-titulo">
                           <i class="fa-solid fa-building"></i>
                           <span>Elevador</span>
                        </div>
                        <div class="pgPousada__servicos-lista">    
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Local possui elevador</span>
                           </li>
                        </div>
                     </ul>
                  </div>

                  <div class="pgPousada__servicos-col">               

                     <ul class="pgPousada__servicos-item">
                        <div class="pgPousada__servicos-titulo">
                           <i class="fa-solid fa-car"></i>
                           <span>Estacionamento</span>
                        </div>

                        <div class="pgPousada__servicos-lista">
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Grátis Estacionamento gratuito e privativo disponível no local (não necessita de reserva)</span>
                           </li>
                        </div>
                     </ul>

                     <ul class="pgPousada__servicos-item">
                        <div class="pgPousada__servicos-titulo">
                           <i class="fa-solid fa-wifi"></i>
                           <span>Internet</span>
                        </div>
                        <div class="pgPousada__servicos-lista">
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Grátis! Acesso Wi-Fi disponível nas áreas comuns</span>
                           </li>
                        </div>
                     </ul>

                     <ul class="pgPousada__servicos-item">
                        <div class="pgPousada__servicos-titulo">
                           <i class="fa-solid fa-gamepad"></i>
                           <span>Salão de jogos</span>
                        </div>
                        
                        <div class="pgPousada__servicos-lista">
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Mesa de bilhar</span>
                           </li>
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Mesa de pebolim</span>
                           </li>
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Jogos de dama, baralho, xadrez e dominó</span>
                           </li>
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>TV Smart</span>
                           </li>
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Micro-ondas</span>
                           </li>
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Bebedouro</span>
                           </li>
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Mesas para alimentação</span>
                           </li>
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Ar-condicionado</span>
                           </li>
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Banheiros</span>
                           </li>
                        </div>
                     </ul>

                     <ul class="pgPousada__servicos-item">
                        <div class="pgPousada__servicos-titulo">
                           <i class="fa-solid fa-burger"></i>
                           <span>Alimentação e bebidas</span>
                        </div>
                        
                        <div class="pgPousada__servicos-lista">
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Sorvetes</span>
                           </li>
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Açaí</span>
                           </li>
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Água</span>
                           </li>
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Refrigerante e sucos</span>
                           </li>
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Cervejas</span>
                           </li>
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Bebidas alcoólicas</span>
                           </li>
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Cafezinho</span>
                           </li>
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Lanches e porções</span>
                           </li>
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Bar</span>
                           </li>
                           <!-- <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Cardápio completo: <a href="<?php //echo get_stylesheet_directory_uri(); ?>/assets/img/page-pousada/cardapio-pousada.pdf" target="__blanck">aqui</a></span>
                           </li> -->
                        </div>
                     </ul>

                  </div>       
         
               </div>
         
         </div>

      </section>


   <?php endwhile; else: ?>
   <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
   <?php endif; ?>

<?php get_footer(); ?>