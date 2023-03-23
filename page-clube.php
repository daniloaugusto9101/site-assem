<?php
    // Template Name: Page-clube
?>

<?php get_header(); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <section class="pgClube">
         
         <div class="container pgClube__container">
               <h1 class="tituloHr pgClube__tituloHr">Clube de Campo</h1>      
               
               <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper pgClube__mySwiper2">

                  <div class="swiper-wrapper">
                     <div class="swiper-slide">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-clube/clube-de-campo.jpg" />
                     </div>
                     <div class="swiper-slide">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-pousada/pousada (6).jpg" />
                     </div>
                     <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                     </div>
                     <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                     </div>
                     <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                     </div>
                     <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                     </div>
                     <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                     </div>
                     <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                     </div>
                     <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
                     </div>
                     <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
                     </div>
                  </div>

                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>

               </div>

               <div thumbsSlider="" class="swiper pgClube__mySwiper">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                     </div>
                     <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                     </div>
                     <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                     </div>
                     <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                     </div>
                     <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                     </div>
                     <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                     </div>
                     <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                     </div>
                     <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                     </div>
                     <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
                     </div>
                     <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
                     </div>
                  </div>
               </div>
               
               <div class="pgClube__descricao">
     
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-clube/clube-de-campo.jpg" class="pgClube__descricao-img"/>

                  <div class="pgClube__descricao-texto">
                     <p>
                     O Clube de Campo da ASSEM é um clube que se preocupa em oferecer uma estrutura voltada ao lazer e à qualidade de vida, sempre preservando o meio ambiente e priorizando o bom convívio social.
                     </p>
                     <p>
                     A estrutura do clube serve aos seus associados também por meio de locações, para eventos festivos, esportivos e sociais.
                     </p>
                  </div>
            
               </div>

               <div class="pgClube__servicos">                              
               
                  <div class="pgClube__servicos-col">
                     <ul class="pgClube__servicos-item">
                        <div class="pgClube__servicos-titulo">
                           <i class="fa-solid fa-file"></i>
                           <spa>Regulamento</span>
                        </div>
                        <div class="pgClube__servicos-lista">
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span class="teste">Regulamento do clube <a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/arquivos/regulamento-clube.pdf" target="__blanck">aqui</a></span>
                           </li>
                        </div>
                     </ul>
                     <ul class="pgClube__servicos-item">
                        <div class="pgClube__servicos-titulo">
                           <i class="fa-solid fa-ruler-horizontal"></i>
                           <spa>Tamanho</span>
                        </div>
                        <div class="pgClube__servicos-lista">
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span class="teste">2.400 hectares (24 mil metros quadrados) com área</span>
                           </li>
                        </div>
                     </ul>
                     <ul class="pgClube__servicos-item">
                        <div class="pgClube__servicos-titulo">
                           <i class="fa-solid fa-sack-dollar"></i>
                           <spa>Valores</span>
                        </div>
                        <div class="pgClube__servicos-lista">
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>sócio: entrada gratuita</span>
                           </li>
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>convidado: R$ 20 (exceto pisicna)</span>
                           </li>                           
                        </div>
                     </ul>
                     <ul class="pgClube__servicos-item">
                        <div class="pgClube__servicos-titulo">
                           <i class="fa-solid fa-person-swimming"></i>
                           <spa>parque aquático</span>
                        </div>                    
                        <div class="pgClube__servicos-lista">
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Piscina olímpica</span>
                           </li>
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Escorregador</span>
                           </li>                           
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Piscina infantil</span>
                           </li>                           
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Escorregador</span>
                           </li>                           
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Banheiros</span>
                           </li>                           
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Guarda volume</span>
                           </li>                           
                        </div>
                     </ul>

                     <ul class="pgClube__servicos-item">
                        <div class="pgClube__servicos-titulo">
                           <i class="fa-solid fa-gamepad"></i>
                           <spa>Salão de jogos</span>
                        </div>                    
                        <div class="pgClube__servicos-lista">
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>TV a cabo</span>
                           </li>
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Mesas de bilhar</span>
                           </li>                           
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Mesa de pebolim</span>
                           </li>                           
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Mesa de pin-pong</span>
                           </li>                           
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Mesa flip de ar</span>
                           </li>                           
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Fliperama</span>
                           </li>                           
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Banheiros</span>
                           </li>                           
                        </div>
                     </ul>


                  </div>

                  <div class="pgClube__servicos-col">
                     <ul class="pgClube__servicos-item">
                        <div class="pgClube__servicos-titulo">
                           <i class="fa-solid fa-cake-candles"></i>
                           <span>Salão de festa</span>
                        </div>
                        <div class="pgClube__servicos-lista"> 
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Palco de festa</span>
                           </li>
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>mesa e cadeiras</span>
                           </li>
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Ambiente com Refrigeração</span>
                           </li>
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Som ambiente</span>
                           </li>
                        </div>
                     </ul>
                     <ul class="pgClube__servicos-item">
                        <div class="pgClube__servicos-titulo">
                           <i class="fa-solid fa-burger"></i>
                           <span>Restaurante</span>
                        </div>
                        <div class="pgClube__servicos-lista"> 
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>almoço</span>
                           </li>
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>lanche</span>
                           </li>
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>bebidas</span>
                           </li>
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>sorvetes</span>
                           </li>
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>TV a cabo</span>
                           </li>
                        </div>
                     </ul>
                     <ul class="pgClube__servicos-item">
                        <div class="pgClube__servicos-titulo">
                           <i class="fa-regular fa-futbol"></i>
                           <span>Quadra</span>
                        </div>
                        <div class="pgClube__servicos-lista"> 
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Quadra poliesportiva coberta</span>
                           </li>
                        </div>
                     </ul>
                     <ul class="pgClube__servicos-item">
                        <div class="pgClube__servicos-titulo">
                           <i class="fa-solid fa-file-signature"></i>
                           <span>Reservas</span>
                        </div>
                        <div class="pgClube__servicos-lista"> 
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Quiosques</span>
                           </li>
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Salão de festa</span>
                           </li>
                        </div>
                     </ul>

                  </div>

                  <div class="pgClube__servicos-col">               

                     <ul class="pgClube__servicos-item">
                        <div class="pgClube__servicos-titulo">
                           <i class="fa-solid fa-car"></i>
                           <span>Estacionamento</span>
                        </div>

                        <div class="pgClube__servicos-lista">
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Estacionamento gratuito no local</span>
                           </li>
                        </div>
                     </ul>
                     <ul class="pgClube__servicos-item">
                        <div class="pgClube__servicos-titulo">
                           <i class="fa-solid fa-dice"></i>
                           <span>playground</span>
                        </div>

                        <div class="pgClube__servicos-lista">
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>escorregador</span>
                           </li>
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>escada</span>
                           </li>
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>balança</span>
                           </li>
                        </div>
                     </ul>

                     <ul class="pgClube__servicos-item">
                        <div class="pgClube__servicos-titulo">
                           <i class="fa-solid fa-people-roof"></i>
                           <span>Quiosques</span>
                        </div>

                        <div class="pgClube__servicos-lista">
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Mesa e cadeiras</span>
                           </li>
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Churrasqueira</span>
                           </li>
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Freezer</span>
                           </li>
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Pia</span>
                           </li>
                        </div>
                     </ul>
                     <ul class="pgClube__servicos-item">
                        <div class="pgClube__servicos-titulo">
                           <i class="fa-solid fa-trophy"></i>
                           <span>Troféus</span>
                        </div>

                        <div class="pgClube__servicos-lista">
                           <li>
                              <i class="fa-sharp fa-regular fa-square-check"></i>
                              <span>Sala de troféu da ASSEM</span>
                           </li>
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