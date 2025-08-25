<?php
    // Template Name: Page-convenio
?>

<?php get_header(); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <section class="pgConvenios">       
         
         <div class="pgConvenios__banner">
            <h1 class="pgConvenios__banner-titulo">Convênios <br>  Médicos</h1>    
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-convenios/banner.webp" class="pgConvenios__banner-img"/> 
         </div>

         <div class="sobre">
            <div class="sobre__col">
               <h2 class="sobre__subtitulo">Sobre</h2>
               <p class="sobre__resumo">
                  A ASSEM é especializada em oferecer planos de convênios médicos acessíveis e de qualidade. Com nossos planos, você terá acesso a uma ampla rede de médicos e especialistas, hospitais e clínicas credenciadas. Nossa equipe está à disposição para ajudá-lo a escolher o plano que melhor atenda às suas necessidades. Invista em sua saúde com a ASSEM. Contato: (12) 3922-7424 - opção 1
               </p>

            </div>

            <div class="sobre__col">
               <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-convenios/convenios3.webp" class="sobre__img"/> 
            </div>
         </div>

         <div class="operadoras">
            <h2 class="operadoras__subtitulo">Operadoras de planos <br>de Saúde</h2>
            <div class="operadoras__imgs">
               <!-- <div class="operadoras__imgs-item">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-convenios/logo-aussel.webp" /> 
               </div> -->
               <div class="operadoras__imgs-item">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-convenios/logo-emercor.webp" /> 
               </div>
               <div class="operadoras__imgs-item">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-convenios/logo-policlin.webp" /> 
               </div>
               <div class="operadoras__imgs-item">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-convenios/logo-santa-casa.webp" /> 
               </div>
               <div class="operadoras__imgs-item">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-convenios/logo-unimed.webp" /> 
               </div>
            </div>
            <a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-convenios/catalago-operadoras.pdf" target="_blank"class="btn operadoras__btn">
               Catálago de Planos
            </a>
         </div>

         <div class="portabilidade">
            <div class="portabilidade__col">
               <h2 class="portabilidade__subtitulo">Portabilidade</h2>
               <p class="portabilidade__resumo">
                  Portabilidade de convênios médicos é a possibilidade de um beneficiário de plano de saúde trocar de operadora sem perder as suas condições de cobertura e carências já cumpridas. Ou seja, é uma forma de mudar de plano de saúde mantendo as mesmas condições do plano anterior. Consulte o nosso catálago de planos para mais detalhes.
               </p>
            </div>

            <div class="portabilidade__col">
               <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-convenios/convenios1.webp" class="portabilidade__img"/> 
            </div>
         </div>

         <div class="carencia">
            <div class="carencia__col">
               <h2 class="carencia__subtitulo">Carência</h2>
               <p class="carencia__resumo">
                  Carência de convênios médicos é o período de tempo em que o beneficiário do plano de saúde precisa esperar antes de ter direito a determinados procedimentos ou serviços de saúde previstos no contrato. Em outras palavras, é o tempo de espera que o beneficiário precisa cumprir para utilizar alguns serviços do plano. Consulte o nosso catálago de planos para mais detalhes
               </p>
            </div>

            <div class="carencia__col">
               <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-convenios/convenios2.webp" class="carencia__img"/> 
            </div>
         </div>      


         <div class="documentos">
            <h2 class="documentos__subtitulo">Documentos</h2>
            <p class="documentos__resumo">Para a contração de plano de saúde pela ASSEM é necessário a cópia dos documentos abaixo:</p>
            <ul class="documentos__lista">
               <li>
                  <i class="fa-sharp fa-regular fa-square-check"></i>
                  <span>
                     Declaração de Saúde – preenchimento no ato, se informar com antecedência no caso de inclusão de dependentes;
                  </span>
                  
               </li>
               <li>
               <i class="fa-sharp fa-regular fa-square-check"></i>
                  Certidão de nascimento para menores de 12 anos;
               </li>
               <li>
                  <i class="fa-sharp fa-regular fa-square-check"></i>
                  Certidão de nascimento ATUALIZADA para filhos Maiores de 21 anos;
               </li>
               <li>
                  <i class="fa-sharp fa-regular fa-square-check"></i>
                  Titulo de Eleitor;
               </li>
               <li>
                  <i class="fa-sharp fa-regular fa-square-check"></i>
                  CPF (de todos os dependentes);
               </li>
               <li>
                  <i class="fa-sharp fa-regular fa-square-check"></i>
                  RG ou documento de identidade (CRC, CNH, OAB, etc.); 
               </li>
               <li>
               <i class="fa-sharp fa-regular fa-square-check"></i>
                  Último Comprovante de Pagamento na Empresa;
               </li>
               </li>
               <li>
                  <i class="fa-sharp fa-regular fa-square-check"></i>
                  Comprovante de endereço no nome (Água, Energia Elétrica, Gás, Telefone ou Contrato de Locação);
               </li>
               <li>
               <i class="fa-sharp fa-regular fa-square-check"></i>
                  Certidão de Casamento ou Declaração de União Estável (registrada em Cartório e com mais de 30 dias);
               </li>
               <li>
               <i class="fa-sharp fa-regular fa-square-check"></i>
                  Cartão SUS (obtido na UBS mais próxima da residência).
               </li>
            </ul>
         </div>

      </section>


   <?php endwhile; else: ?>
   <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
   <?php endif; ?>

<?php get_footer(); ?>