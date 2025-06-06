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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-executiva/presidente.webp" class="pgExecutiva__avatar-img">
                </div>
                <div class="pgExecutiva__presidente-depoimento">
                    <p>
                        Estou vivendo um momento especial. Há dois anos recebi a missão de administrar a ASSEM ... um desafio, mas que está sendo gratificante pelos resultados alcançados. <br/><br/>
                        As melhorias realizadas foram bem aceitas pelos associados, principalmente a reforma do gramado, o redário e a reabertura da lanchonete/ restaurante. Outra conquista foi a regularização de nossa Sede Social, que estávamos aguardando com muita ansiedade. <br/><br/>
                        Mas ainda temos muito trabalho e desafios para  que nossa entidade cresça e assim proporcionar o melhor para o nosso associado. Para isso contamos com o apoio, talento de toda nossa equipe, Diretores e Conselheiros.
                    </p>
                    <!-- <p>
                        Roberto Rocha Brandão, carinhosamente chamado “Montanha”, está no exercício da presidência da ASSEM desde janeiro de 2022, antes de ocupar o cargo já houvera sido Diretor de Esportes e também membro do Conselho Deliberativo da Associação. Aposentado do quadro de servidores públicos municipais em 2020, Roberto tem perfeita sintonia com os associados e além de dar continuidade nas ações da diretoria anterior, tem se esmerado em dotar nossos prédios de melhores estruturas para atendimento de nossos associados. Na perda da quadra de esportes de nossa sede, em razão das obras de acessibilidade, com instalação do elevador, fez edificar nova quadra em nosso Clube de Campo, com dimensões apropriadas, cobertura e iluminação, além de pintura especial, para receber nossas competições desportivas! E promete seguir fazendo mais em favor de todos! 
                    </p> -->
                    <p>Roberto Rocha Brandão</p>
                    <p>Presidente</p>
                </div>
            </div>

            <div class="pgExecutiva__content-header">
                <h2 class="pgExecutiva__subtitulo">Vice-Presidente</h2>
            </div>            
            <div class="pgExecutiva__content">
                <div class="pgExecutiva__content-col">     
                    <div class="pgExecutiva__avatar">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-executiva/silvia-maria-tegão-alcalde-leite.webp" class="pgExecutiva__avatar-img">
                        <div class="pgExecutiva__avatar-texto">
                            <p>Silvia Maria Tegão Alcalde Leite</p>
                            <!-- <p>1ª Secretária</p> -->
                        </div>
                    </div>     
                </div>     
            </div>                      


            <div class="pgExecutiva__content-header">
                <h2 class="pgExecutiva__subtitulo">Diretoria</h2>
            </div>
            <div class="pgExecutiva__content">

                <div class="pgExecutiva__content-col">
     
                    <div class="pgExecutiva__avatar">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-executiva/eliane-milanez-cunha.webp" class="pgExecutiva__avatar-img">
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

                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-executiva/flavio-carlos-santos.webp" class="pgExecutiva__avatar-img">

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

                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-executiva/silvia-maria-tegão-alcalde-leite.webp" class="pgExecutiva__avatar-img">

                        <div class="pgExecutiva__avatar-texto">
                            <p>Silvia Maria Tegão Alcalde Leite</p>
                            <p>Departamento Social/Cultural</p>
                        </div>

                    </div>      

                    <div class="pgExecutiva__avatar">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-executiva/dp-compras.webp" class="pgExecutiva__avatar-img">

                        <div class="pgExecutiva__avatar-texto">
                            <p>José Rubens Cardoso de Morais</p>
                            <p>Departamento de Esportes e Competições</p>
                        </div>
                    </div>         

                    <div class="pgExecutiva__avatar">                    
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-executiva/eliane-milanez-cunha.webp" class="pgExecutiva__avatar-img">
                        <div class="pgExecutiva__avatar-texto">
                            <p>Eliane Milanez da Cunha</p>
                            <p>Departamento de Comunicação</p>
                        </div>
                    </div>         
                    <div class="pgExecutiva__avatar">                    
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-executiva/flavio-carlos-santos.webp" class="pgExecutiva__avatar-img">
                        <div class="pgExecutiva__avatar-texto">
                            <p>Flávio Carlos dos Santos</p>
                            <p>Departamento de Compras</p>
                        </div>
                    </div>         
                    <div class="pgExecutiva__avatar">                    
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-executiva/jose-valter-andrade.webp" class="pgExecutiva__avatar-img">
                        <div class="pgExecutiva__avatar-texto">
                            <p>José Valter de Andrade</p>
                            <p>Departamento da Academia</p>
                        </div>
                    </div>         
    
                </div>
                <div class="pgExecutiva__content-col">

                    <!-- <div class="pgExecutiva__avatar">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-executiva/dp-social2.webp" class="pgExecutiva__avatar-img">
                        <div class="pgExecutiva__avatar-texto">
                            <p>Maria Aparecida de Souza Teixeira</p>
                            <p>Departamento Social/Cultural (Adjunto)</p>
                        </div>
                    </div>  -->

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

                    <div class="pgExecutiva__avatar">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-executiva/eder-vanderson-felicio.webp" class="pgExecutiva__avatar-img">
                        <div class="pgExecutiva__avatar-texto">
                            <p>Eder Vanderson Felicio</p>
                            <p>Departamento de RH</p>
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