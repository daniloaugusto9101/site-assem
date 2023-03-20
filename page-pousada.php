<?php
    // Template Name: Page-pousada
?>

<?php get_header(); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <section class="pgPousada">
        <div class="container pgPousada__container">
            <h1 class="tituloHr pgPousada__tituloHr">Pousada</h1>      
           
               <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper pgPousada__mySwiper2">

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

                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>

               </div>

               <div thumbsSlider="" class="swiper pgPousada__mySwiper">
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


            <div class="pgPousada__descricao">
               <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-pousada/pousada.jpg" alt="" class="pgPousada__descricao-img">
               <div class="pgPousada__descricao-texto">
                  <p>
                     Bem-vindo à nossa Pousada! Localizada em uma área tranquila, ela oferece um refúgio perfeito para quem busca paz, conforto e relaxamento.
                  </p>
                  <p>
                     Com quartos espaçosos e aconchegantes, equipados com todas as comodidades que você precisa para se sentir em casa, nossa pousada é ideal para quem deseja desfrutar de uma estadia confortável e tranquila. Oferecemos uma variedade de opções de acomodação, desde quartos para casais até suítes para famílias e grupos maiores.
                  </p>
                     
                  <p>
                     Além disso, nossa pousada conta com uma piscina ao ar livre, perfeita para se refrescar em dias quentes, e uma área de lazer com jogos e atividades para toda a família.
                  </p>
                  <p>
                     E para completar sua estadia, nossa pousada oferece um delicioso café da manhã com opções de pratos quentes e frios, preparados com ingredientes frescos e locais.
                  </p>
                  <p>
                     Não perca a oportunidade de desfrutar de uma estadia inesquecível em nossa pousada. Entre em contato conosco agora mesmo e faça sua reserva!
                  </p>                 

               </div>
            </div>

            <div class="pgPousada__servicos">
            <ul class="pgPousada__servicos-item">
               <i class="fa-solid fa-sack-dollar"></i>
               <span>Valores da diária por pessoa</span>
               <li>
                  <i class="fa-sharp fa-regular fa-square-check"></i>
                  <span>Sócio adulto: R$ 84</span>
               </li>
               <li>
                  <i class="fa-sharp fa-regular fa-square-check"></i>
                  <span>Convidado adulto: R$ 168</span>                  
               </li>
               <li>
                  <i class="fa-sharp fa-regular fa-square-check"></i>
                  <span>Sócio Criança 7 a 12: R$ 42</span>                  
               </li>
               <li>
                  <i class="fa-sharp fa-regular fa-square-check"></i>
                  <span>Convidado Criança 7 a 12: R$ 84</span>
               </li>
               <li>
                  <i class="fa-sharp fa-regular fa-square-check"></i>
                  Criança 0 a 6: cortesia
               </li>
            </ul>

         
            <ul class="pgPousada__servicos-item">
               <i class="fa-solid fa-person-swimming"></i>
               <span>Piscinas</span>
               <li>
                  <i class="fa-sharp fa-regular fa-square-check"></i>
                  <span>Piscina adulto</span>
                  <span>Piscina infantil</span>
               </li>
            </ul>


            <ul class="pgPousada__servicos-item">
               <i class="fa-solid fa-credit-card"></i>
               <span>Formas de pagamentos</span>
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
            </ul>

            <ul class="pgPousada__servicos-item">
               <i class="fa-solid fa-sun"></i>
               <span>Ar-livre</span>
               <li>
                  <i class="fa-sharp fa-regular fa-square-check"></i>
                  <span>próxima à praia</span>
               </li>
               <li>
                  <i class="fa-sharp fa-regular fa-square-check"></i>
                  <span>próximo a restaurantes</span>
               </li>
               <li>
                  <i class="fa-sharp fa-regular fa-square-check"></i>
                  <span>próximo a farmácias</span>
               </li>
               <li>
                  <i class="fa-sharp fa-regular fa-square-check"></i>
                  <span>próximo a mercados</span>
               </li>
            </ul>

            <ul class="pgPousada__servicos-item">
               <i class="fa-solid fa-broom"></i>
               <span>Serviços</span>
               <li>
                  <i class="fa-sharp fa-regular fa-square-check"></i>
                  <span>serviço diário de limpeza</span>
               </li>
               <li>
                  <i class="fa-sharp fa-regular fa-square-check"></i>
                  <span>lavanderia (custo adicional)</span>
               </li>
               <li>
                  <i class="fa-sharp fa-regular fa-square-check"></i>
                  <span>guarda sol  (custo adicional)</span>
               </li>
               <li>
                  <i class="fa-sharp fa-regular fa-square-check"></i>
                  <span>próximo a mercados</span>
               </li>
            </ul>
            
            <ul class="pgPousada__servicos-item">
               <i class="fa-solid fa-door-open"></i>
               <span>Quartos</span>
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
                  <span>Cama extra</span>
               </li>
               <li>
                  <i class="fa-sharp fa-regular fa-square-check"></i>
                  <span>Shampoo e sabonete</span>
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
                  <span>Coberto</span>
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
                  <span>TV Smart com acesso internet, canais aberto e App de streaming</span>
               </li>
               <li>
                  <i class="fa-sharp fa-regular fa-square-check"></i>
                  <span>Obs: a pousada não possui conta de app de streaming, a conta deve ser usada com a própria conta do hóspede </span>
               </li>
            </ul>


            <ul class="pgPousada__servicos-item">
               <i class="fa-solid fa-mug-saucer"></i>
               <span>Café da manhã</span>
               <li>
                  <i class="fa-sharp fa-regular fa-square-check"></i>
                  <span>Café da manhã incluso na diária</span>
               </li>
            </ul>



            <ul class="pgPousada__servicos-item">
               <i class="fa-solid fa-paw"></i>
               <span>Animais de estimação</span>
               <li>
                  <i class="fa-sharp fa-regular fa-square-check"></i>
                  <span>Animais de estimação: não permitidos</span>
               </li>
            </ul>

            <ul class="pgPousada__servicos-item">
               <i class="fa-solid fa-car"></i>
               <span>Estacionamento</span>
               <li>
                  <i class="fa-sharp fa-regular fa-square-check"></i>
                  <span>Grátis Estacionamento gratuito e privativo disponível no local (não necessita de reserva)</span>
               </li>
            </ul>

            <ul class="pgPousada__servicos-item">
               <i class="fa-solid fa-wifi"></i>
               <span>Internet</span>
               <li>
                  <i class="fa-sharp fa-regular fa-square-check"></i>
                  <span>Grátis! Acesso Wi-Fi disponível nas áreas comuns</span>
               </li>
            </ul>
            <ul class="pgPousada__servicos-item">
               <i class="fa-solid fa-gamepad"></i>
               <span>Salão de jogos</span>
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
                  <span>TV Smart</span>
               </li>
               <li>
                  <i class="fa-sharp fa-regular fa-square-check"></i>
                  <span>Ar-condicionado</span>
               </li>
               <li>
                  <i class="fa-sharp fa-regular fa-square-check"></i>
                  <span>Banheiros</span>
               </li>
            </ul>





            <ul class="pgPousada__servicos-item">
               <i class="fa-solid fa-burger"></i>
               <span>Alimentação e bebidas</span>
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
               <li>
                  <i class="fa-sharp fa-regular fa-square-check"></i>
                  <span>Cardápio completo: clique aqui</span>
               </li>
            </ul>

            <ul class="pgPousada__servicos-item">
               <i class="fa-solid fa-umbrella-beach"></i>
               <span>Solário</span>
               <li>
                  <i class="fa-sharp fa-regular fa-square-check"></i>
                  <span>Vista para o mar</span>
               </li>
            </ul>

            <ul class="pgPousada__servicos-item">
               <i class="fa-solid fa-building"></i>
               <span>Elevador</span>
               <li>
                  <i class="fa-sharp fa-regular fa-square-check"></i>
                  <span>Local possui elevador</span>
               </li>
            </ul>

               <!-- <div class="pgPousada__servicos-col">col2</div>
               <div class="pgPousada__servicos-col">col3</div> -->
            </div>
           
        </div>
    </section>


    <?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>

<?php get_footer(); ?>