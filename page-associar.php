<?php
    // Template Name: Page-associar
?>

<?php get_header(); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <section class="pgAssociar">       
         <div class="pgAssociar__banner">
            <div class="pgAssociar__container">
                  <iframe width="600" height="300" src="https://www.youtube.com/embed/HKV6pqcdHVw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
         </div>

         <div class="pgAssociar__sobre">
            <div class="pgAssociar__sobre-col">
               <h2 class="pgAssociar__sobre-subtitulo">Por que me associar?</h2>
               <p class="pgAssociar__sobre-resumo">
                  Junte-se a nós, como associado, você terá acesso a uma variedade de atividades e eventos emocionantes, ter experiência e diversão com nossa Pousada e Clube de Campo. Não perca mais tempo, torne-se um associado hoje mesmo.
               </p>
            </div>

            <div class="pgAssociar__sobre-col">
               <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-associar/associar.webp" class="pgAssociar__sobre-img"/> 
            </div>
         </div>

         <div class="pgAssociar__dependentes">
            <div class="pgAssociar__dependentes-col">
               <h2 class="pgAssociar__dependentes-subtitulo">
                  Quem pode ser dependente
               </h2>
               <p class="pgAssociar__dependentes-resumo">
                  Cônjuge, pai, mãe, sogro, sogra, filhos solteiros, enteados e netos até 12 anos
               </p>
            </div>

            <div class="pgAssociar__dependentes-col">
               <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-associar/familia.webp" class="pgAssociar__sobre-img"/> 
            </div>
         </div>

         <div class="pgAssociar__vantagens">
            <div class="pgAssociar__vantagens-card">

               <div class="pgAssociar__vantagens-header">
                  <p>Tudo isso por apenas</p>
                  <p>R$ 40,09</p>
                  <p>Preço sujeito a alterações</p>
                  <p>O valor da mensalidade é cobrado <br>somente do sócio titular</p>
               </div>

               <div class="pgAssociar__vantagens-body">
                  <ul>
                     <li>Acesso grátis ao Clube de Campo </li>
                     <li>Atividades Físicas* </li>
                     <li>Escolinhas* </li>
                     <li>Eventos esportivos* </li>
                     <li>Excursões* </li>
                     <li>Convênio médico* </li>
                     <li>Clube de desconto*</li>
                  </ul>
                  <p>*Consulte os valores</p>
               </div>

            </div>
         </div>

         <div class="pgAssociar__documentos">
            <h2 class="pgAssociar__documentos-subtitulo">Documentos</h2>
            <p class="pgAssociar__documentos-resumo">Documentos necessários para associar</p>
            <ul class="pgAssociar__documentos-lista">
               <li>
                  <i class="fa-sharp fa-regular fa-square-check"></i>
                  <span>
                     <strong>Titular:</strong> último holerite ou senha de consignação já cadastradoa e com margem para desconto | RG e CPF | Comprovante de endereço no próprio nome
                  </span>                  
               </li>
               <li>
                  <i class="fa-sharp fa-regular fa-square-check"></i>
                  Filhos e enteados solteiros: RG e CPF (maiores de 21 anos: certidão de nascimento atualizada)
               </li>
               <li>
                  <i class="fa-sharp fa-regular fa-square-check"></i>
                  Filhos e enteados universitários solteiros  entre 18 a 24 anos devem apresentar declaração escolar
               </li>
               <li>
                  <i class="fa-sharp fa-regular fa-square-check"></i>
                  Pai, mãe, sogro, sogra: RG e CPF (em caso de estrangeiros, RGE e CPF)
               </li>
               <li>
                  <i class="fa-sharp fa-regular fa-square-check"></i>
                  Netos até 12 anos: RG e CPF | Certidão de nascimento
               </li>
               <li>
                  <i class="fa-sharp fa-regular fa-square-check"></i>
                  Cônjuge: RG e CPF | Certidão de casamento ou declaração de união estável
               </li>
            </ul>
         </div>

      </section>


   <?php endwhile; else: ?>
   <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
   <?php endif; ?>

<?php get_footer(); ?>