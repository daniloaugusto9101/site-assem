<?php
    // Template Name: Page-diretoria-executiva
?>

<?php get_header(); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="pgExecutiva">
        <div class="container">
            <!-- <div class="pgExecutiva__header">
                <img src="assets/img/carnaval.jpg" alt="" class="pgNoticias__img">
            </div> -->

            <h1 class="tituloHr pgExecutiva__tituloHr">
                Diretoria Executiva
            </h1>

            <div class="pgExecutiva__presidente">
                <div class="pgExecutiva__presidente-avatar">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-executiva/roberto.webp" class="pgExecutiva__avatar-img">
                </div>
                <div class="pgExecutiva__presidente-depoimento">
                    <p>Roberto Rocha Brandão, mais conhecido como “Montanha”, tomou posse como novo presidente da Assem, em 03 de janeiro de 2022. Como servidor público municipal, ele totalizou 39 anos de trabalho na Prefeitura, sempre no Departamento de Receita/SGAF. Ele se aposentou em janeiro de 2020. Foi Diretor de Esportes da Assem por vários anos. Faz parte também do Conselho da ASSEM e, atualmente, é também  conselheiro vitalício, de acordo com o estatuto. Ele afirmou que suas principais diretrizes, com apoio dos diretores, conselheiros  e funcionários é de executar as iniciativas, em todas as áreas (social, esportiva, administrativa, etc), sempre tendo o sócio como prioridade absoluta, que é a razão da existência da Assem.</p>
                    <p>Roberto Rocha Brandão</p>
                    <p>Presidente</p>
                </div>
            </div>

            <div class="pgExecutiva__content-header">
                <h2 class="pgExecutiva__subtitulo">Diretoria</h2>
            </div>
            <div class="pgExecutiva__content">

                <div class="pgExecutiva__content-col">
     
                    <div class="pgExecutiva__avatar">

                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-executiva/1-secretaria.webp" class="pgExecutiva__avatar-img">

                        <div class="pgExecutiva__avatar-texto">
                            <p>Eliane Milanez da Cunha</p>
                            <p>1ª Secretária</p>
                        </div>

                    </div>      
                    <div class="pgExecutiva__avatar">

                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-executiva/2-secretaria.webp" class="pgExecutiva__avatar-img">

                        <div class="pgExecutiva__avatar-texto">
                            <p>Fátima Regina da Silva</p>
                            <p>2ª Secretária</p>
                        </div>

                    </div>      
                </div>    
                <div class="pgExecutiva__content-col">
                    <div class="pgExecutiva__avatar">

                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-executiva/1-tesoureiro.webp" class="pgExecutiva__avatar-img">

                        <div class="pgExecutiva__avatar-texto">
                            <p>Benedito Sérgio Teixeira</p>
                            <p>1ª Tesoureiro</p>
                        </div>

                    </div> 
                    <div class="pgExecutiva__avatar">

                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-executiva/2-tesoureiro.webp" class="pgExecutiva__avatar-img">

                        <div class="pgExecutiva__avatar-texto">
                            <p>Flávio Carlos dos Santos</p>
                            <p>2ª Tesoureiro</p>
                        </div>

                    </div> 
                </div>            
            </div>

            <div class="pgExecutiva__content-header">
                <h2 class="pgExecutiva__subtitulo">Departamentos</h2>
            </div>
            <div class="pgExecutiva__content">
                <div class="pgExecutiva__content-col">
                    <div class="pgExecutiva__avatar">

                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-executiva/dp-social.webp" class="pgExecutiva__avatar-img">


                        <div class="pgExecutiva__avatar-texto">
                            <p>Silvia Maria Tegão Alcalde Leite</p>
                            <p>Departamento Social/Cultural</p>
                        </div>

                    </div>      
                    <div class="pgExecutiva__avatar">

                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-executiva/dp-fisicas.webp" class="pgExecutiva__avatar-img">

                        <div class="pgExecutiva__avatar-texto">
                            <p>José Valter de Andrade</p>
                            <p>Departamento de Atividades Físicas</p>
                        </div>

                    </div>      
                    <div class="pgExecutiva__avatar">

                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-executiva/dp-esportes.webp" class="pgExecutiva__avatar-img">

                        <div class="pgExecutiva__avatar-texto">
                            <p>Nilton Marcos Pires</p>
                            <p>Departamento de Esportes e Competições</p>
                        </div>

                    </div>      
                    <div class="pgExecutiva__avatar">

                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-executiva/dp-compras.webp" class="pgExecutiva__avatar-img">

                        <div class="pgExecutiva__avatar-texto">
                            <p>José Rubens Cardoso de Morais</p>
                            <p>Departamento de Compras</p>
                        </div>

                    </div>         
    
                </div>
                <div class="pgExecutiva__content-col">
                    <div class="pgExecutiva__avatar">

                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-executiva/dp-social2.webp" class="pgExecutiva__avatar-img">

                        <div class="pgExecutiva__avatar-texto">
                            <p>Maria Aparecida de Souza Teixeira</p>
                            <p>Departamento Social/Cultural (Adjunto)</p>
                        </div>

                    </div> 
                    <div class="pgExecutiva__avatar">

                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-executiva/dp-informatica.webp" class="pgExecutiva__avatar-img">

                        <div class="pgExecutiva__avatar-texto">
                            <p>Ricardo de Oliveira Bruni</p>
                            <p>Departamento de Informática</p>
                        </div>

                    </div>        

                    <div class="pgExecutiva__avatar">

                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-executiva/dp-parcerias.webp" class="pgExecutiva__avatar-img">

                        <div class="pgExecutiva__avatar-texto">
                            <p>Daniel José de Siqueira</p>
                            <p>Departamento do Clube de Campo/ Parcerias</p>
                        </div>

                    </div>   

                    <div class="pgExecutiva__avatar">

                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-executiva/dp-pousada.webp" class="pgExecutiva__avatar-img">

                        <div class="pgExecutiva__avatar-texto">
                            <p>Waldery Teixeira</p>
                            <p>Departamento da Pousada ASSEM Litoral</p>
                        </div>

                    </div>       
                </div>                
            </div>

        </div>
    </div>

    <?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>

<?php get_footer(); ?>