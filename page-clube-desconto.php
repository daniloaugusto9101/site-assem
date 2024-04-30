<?php
    // Template Name: Page-clube-desconto
?>

<?php get_header(); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <section class="pgDesconto">         

         <h1 class="tituloHr">Clube de Desconto</h1>

         <div class="container pgDesconto__container">
            
            <div class="pgDesconto__left">
               <ul class="pgDesconto__menu">
                  <li class="pgDesconto__menu-item" data-value="pgDesconto-list-seguros">
                     <i class="fa-solid fa-house"></i>
                     <span>Seguros</span>                      
                  </li>
                  <li class="pgDesconto__menu-item" data-value="pgDesconto-list-edubasica">
                     <i class="fa-solid fa-book"></i>
                     <span>Educação Básica</span>                     
                  </li>
                  <li class="pgDesconto__menu-item" data-value="pgDesconto-list-idiomas">
                     <i class="fa-solid fa-comments"></i>
                     <span>Idiomas</span>                     
                  </li>
                  <li class="pgDesconto__menu-item" data-value="pgDesconto-list-edusuprior">
                     <i class="fa-solid fa-building-columns"></i>
                     <span>Ensino superior/ médio</span>                     
                  </li>
                  <li class="pgDesconto__menu-item" data-value="pgDesconto-list-utensilios">
                     <i class="fa-solid fa-fish-fins"></i>
                     <span>Utensílios</span>                     
                  </li>
                  <!-- <li class="pgDesconto__menu-item" data-value="pgDesconto-list-pet">
                     <i class="fa-solid fa-dog"></i>
                     <span>PET</span>                     
                  </li> -->
                  <li class="pgDesconto__menu-item" data-value="pgDesconto-list-lazer">
                     <i class="fa-solid fa-ticket"></i>
                     <span>Lazer/ Cultura</span>                     
                  </li>
                  <li class="pgDesconto__menu-item" data-value="pgDesconto-list-saude">
                     <i class="fa-solid fa-briefcase-medical"></i>
                     <span>Saúde/ Esporte</span>                     
                  </li>
                  <!-- <li class="pgDesconto__menu-item" data-value="pgDesconto-list-prestador">
                     <i class="fa-solid fa-stethoscope"></i>
                     <span>Psicanálise/ Psicologia</span>                     
                  </li> -->
                  <li class="pgDesconto__menu-item" data-value="pgDesconto-list-vestuarios">
                     <i class="fa-solid fa-shirt"></i>
                     <span>Vestuário</span>                     
                  </li>
                  <!-- <li class="pgDesconto__menu-item" data-value="pgDesconto-list-odontologia">
                     <i class="fa-solid fa-tooth"></i>
                     <span>Odontologia</span>                     
                  </li> -->
                  <!-- <li class="pgDesconto__menu-item" data-value="pgDesconto-list-beleza">
                     <i class="fa-regular fa-gem"></i>
                     <span>Beleza</span>                     
                  </li> -->
                  <!-- <li class="pgDesconto__menu-item" data-value="pgDesconto-list-automotivo">
                     <i class="fa-solid fa-car"></i>
                     <span>Automotivo</span>                     
                  </li> -->
               </ul>
            </div>


            <div class="pgDesconto__right">
               <div id="pgDesconto-list-seguros" class="pgDesconto__empresas" >
                  <div class="pgDesconto__card">
                     <div class="pgDesconto__card-col">  
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-clube-desconto/logo-vale.png" class="pgDesconto__card-img">
                     </div>
                     <div class="pgDesconto__card-col">                     
                        <div class="pgDesconto__card-empresa">
                           <p>VALE MAIS SEGUROS</p>
                           <p>Desc. de 5% a 10% (varia de perfil e veículo) referente aos custos da seguradora.</p>
                           <p>Telefone: (12) 3308-3310</p>
                           <p>Conselheiro Rodrigues Alves, nº 364, sala 4 – Centro/SJC</p>
                        </div>                     
                        <div class="pgDesconto__card-social">
                           <i class="fa-brands fa-square-facebook"></i>
                           <i class="fa-brands fa-square-instagram"></i>
                              <a href="http://www.valemaisseguros.com.br" target="__blank">
                           <i class="fa-solid fa-globe"></i>
                           </a>
                        </div>
                     </div>
                  </div>                  
                  <div class="pgDesconto__card">
                     <div class="pgDesconto__card-col">  
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-clube-desconto/logo-sulamerica.svg" class="pgDesconto__card-img">
                     </div>
                     <div class="pgDesconto__card-col">                     
                        <div class="pgDesconto__card-empresa">
                           <p>SULAMÉRICA</p>
                           <p>Cobertura de seguro e também assistência funeral. Oconvênio prevê ainda “Medico na Tela” (consulta on-line), clube de vantagens para descontos, sorteios mensais, descontos em farmácias e assistência residencial. O valor da mensalidade é a partir de R$ 10 e as coberturas de seguro podem chegar a R$ 5 milhões</p>
                           
                        </div>                     
                        <div class="pgDesconto__card-social">
                           <i class="fa-brands fa-square-facebook"></i>
                           <i class="fa-brands fa-square-instagram"></i>
                           <a href="https://contratafacil-segurovida.paas.sulamerica.com.br/?corretor_id=3a010ed8-94ce-49ae-8ca7-183a59c11717&utm_source=vida" target="__blank">
                              <i class="fa-solid fa-globe"></i>
                           </a>                           
                        </div>
                     </div>
                  </div>
               </div>   

               <div id="pgDesconto-list-edubasica" class="pgDesconto__empresas">
                  <div class="pgDesconto__card">
                     <div class="pgDesconto__card-col">  
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-clube-desconto/not_found.webp" class="pgDesconto__card-img">
                     </div>
                     <div class="pgDesconto__card-col">      
                        <div class="pgDesconto__card-empresa">
                           <p>OBJETIVA TREINAMENTOS E CURSOS PREPARATÓRIOS</p>
                           <p>Desc. de 15% na matrícula do curso Pós e segunda Licenciatura | Desc. de 15% nas mensalidades nos demais cursos</p>
                           <!-- <p>Email:<br> objetivasolucoespedagogicas29@gmail.com</p> -->
                           <p>Telefone: 12 3209-1585</p>
                           <p>Av. Andromeda, 864, sala 3, JD. Satélite – SJC</p>
                        </div>                

                        <div class="pgDesconto__card-social">
                           <i class="fa-brands fa-square-facebook"></i>
                           <i class="fa-brands fa-square-instagram"></i>
                           <a href="https://objetivacursos.com.br" target="__blank">
                              <i class="fa-solid fa-globe"></i>
                           </a>
                        </div>
                     </div>
                  </div>   

                  <div class="pgDesconto__card">
                     <div class="pgDesconto__card-col">  
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-clube-desconto/not_found.webp" class="pgDesconto__card-img">
                     </div>
                     <div class="pgDesconto__card-col">                     
                        <div class="pgDesconto__card-empresa">
                           <p>DAMASIO EDUCACIONAL</p>
                           <p>10% de desconto no valor total do curso</p>
                           <p>Telefone: (11) 0800 771 8040</p>
                           <p>R. Euclídes Miragaia, 103 – Centro</p>
                        </div>                     
                        <div class="pgDesconto__card-social">
                           <i class="fa-brands fa-square-facebook"></i>
                           <i class="fa-brands fa-square-instagram"></i>
                           <a href="http://www.damasio.com.br" target="__blank">
                              <i class="fa-solid fa-globe"></i>
                           </a>
                           
                        </div>
                     </div>
                  </div>

                  <div class="pgDesconto__card">
                     <div class="pgDesconto__card-col">  
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-clube-desconto/not_found.webp" class="pgDesconto__card-img">
                     </div>
                     <div class="pgDesconto__card-col">                     
                        <div class="pgDesconto__card-empresa">
                           <p>COLÉGIO COC SÃO JOSÉ DOS CAMPOS</p>
                           <p>10% de desconto no valor total do curso</p>
                           <p>Concurso de bolsas – desc. de 5% até 60%</p>
                           <p>Telefone: 12 2134-9300</p>
                           <p>Av. Dr Nélson D’ávila, 1202, 2º pavimento – Centro/SJC</p>
                        </div>                     
                        <div class="pgDesconto__card-social">
                           <i class="fa-brands fa-square-facebook"></i>
                           <i class="fa-brands fa-square-instagram"></i>
                           <i class="fa-solid fa-globe"></i>
                        </div>
                     </div>
                  </div>

                  <div class="pgDesconto__card">
                     <div class="pgDesconto__card-col">  
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-clube-desconto/not_found.webp" class="pgDesconto__card-img">
                     </div>
                     <div class="pgDesconto__card-col">                     
                        <div class="pgDesconto__card-empresa">
                           <p>COLÉGIO OBJETIVO JARDIM AQUARIUS</p>
                           <p>Oferece descontos sobre o valor das mensalidades escolares para o curso pré-vestibular, ensino médio, ensino fundamental e educação infantil. Associados, funcionários e os respectivos dependentes do convenente deverão comprovar vínculo por meio de documentação, tal como holerite do mês vigente com carteira de trabalho (no caso de empregado), carteira de identificação, cartão ou qualquer outro documento comprovante ao atendimento.</p>
                           <p>Telefone: 12 3904-2100</p>       
                        </div>                     
                        <div class="pgDesconto__card-social">
                           <i class="fa-brands fa-square-facebook"></i>
                           <i class="fa-brands fa-square-instagram"></i>
                           <i class="fa-solid fa-globe"></i>
                        </div>
                     </div>
                  </div>
               </div>   

               <div id="pgDesconto-list-idiomas" class="pgDesconto__empresas" >
                  <div class="pgDesconto__card">
                     <div class="pgDesconto__card-col">  
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-clube-desconto/not_found.webp" class="pgDesconto__card-img">
                     </div>
                     <div class="pgDesconto__card-col">                     
                        <div class="pgDesconto__card-empresa">
                           <p>ICBEU CURSO DE IDIOMAS</p>
                           <p>Desc. 20% válidos para os cursos de inglês, espanhol e francês em diversas modalidades</p>
                           <p>Ensino de idiomas (inglês, espanhol e francês)</p>
                           <p>Av. Paulo Becker, 27, Vila Adyana/SJC</p>
                        </div>                     
                        <div class="pgDesconto__card-social">
                           <i class="fa-brands fa-square-facebook"></i>
                           <i class="fa-brands fa-square-instagram"></i>
                           <i class="fa-solid fa-globe"></i>
                        </div>
                     </div>
                  </div>                  
                  <div class="pgDesconto__card">
                     <div class="pgDesconto__card-col">  
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-clube-desconto/not_found.webp" class="pgDesconto__card-img">
                     </div>
                     <div class="pgDesconto__card-col">                     
                        <div class="pgDesconto__card-empresa">
                           <p>KNN IDIOMAS</p>
                           <p>Desc. 25% nas mensalidades por 2 anos | Isenção de matrícula | Transporte Gratuito para alunos até 14 anos |  Aulas de acompanhamento pedagógico (na escola, uma vez por mês) – para fins acadêmicos/profissionais | Aulas de reforço ilimitadas (na escola) | Aulas de reposição (na escola – as quatro primeiras horas de aula semestrais são gratuitas) | Senha de acesso ao portal exclusivo com atividades de áudio</p>
                           <p>Email: sjc-sp@knnidiomas.com.br</p>
                           <p>Telefone: (12) 3923-2327 | 3942-4600</p>
                           <p>Av. Anchieta, 455 – Jd. Esplanada</p>
                        </div>                     
                        <div class="pgDesconto__card-social">
                           <a href="https://www.facebook.com/knnidiomassjc" target="__blank">
                              <i class="fa-brands fa-square-facebook"></i>
                           </a>
                           <a href="https://www.instagram.com/knnidiomassjc/
                           " target="__blank">
                              <i class="fa-brands fa-square-instagram"></i>
                           </a>
                           <a href="http://www.knnidiomas.com.br" target="__blank">
                              <i class="fa-solid fa-globe"></i>
                           </a>
                        </div>
                     </div>
                  </div>
               </div> 

               <div id="pgDesconto-list-edusuprior" class="pgDesconto__empresas" >
                  <div class="pgDesconto__card">
                     <div class="pgDesconto__card-col">  
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-clube-desconto/not_found.webp" class="pgDesconto__card-img">
                     </div>
                     <div class="pgDesconto__card-col">                     
                        <div class="pgDesconto__card-empresa">
                           <p>UNIVAP: Colégio e Faculdades</p>
                           <p>Matrículas abertas para 2024</p>
                           <p>Em breve divulgação do Concurso de Bolsas</p>
                           <p>Telefone: (12) 3947–1206</p>

                        </div>                     
                        <div class="pgDesconto__card-social">

                           <a href="http://www.univap.br" target="__blank">
                              <i class="fa-solid fa-globe"></i>
                           </a>
                           <a href="http://www.colegiosunivap.com.br" target="__blank">
                              <i class="fa-solid fa-globe"></i>
                           </a>
                        </div>
                     </div>
                  </div>                  
                  <div class="pgDesconto__card">
                     <div class="pgDesconto__card-col">  
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-clube-desconto/not_found.webp" class="pgDesconto__card-img">
                     </div>
                     <div class="pgDesconto__card-col">                     
                        <div class="pgDesconto__card-empresa">
                           <p>UNIVAP - Fundação Valeparaibana de Ensino</p>
                           <p>Desc. de 15% nas mensalidades, inclusive nas matrículas e renovações, que forem pagas no respectivo vencimento, válidas para os cursos de Graduação, Pós-Graduação e Strictu Sensu da UNIVAP e da Educação Básica nos Colégios mantidos pelo sistema FVE. Este desconto se destina a alunos adimplentes, ingressantes no curso no ano letivo de 2022 ou já participantes no ano letivo anterior que usufruíram desse desconto em razão de contrato de convênio anterior.</p>
                           <p>Telefone: (12) 3947-1206</p>
                           <p>Pça Cândido Dias Castejón – Centro / SJC</p>
                        </div>                     
                        <div class="pgDesconto__card-social">
                           <i class="fa-brands fa-square-facebook"></i>
                           <i class="fa-brands fa-square-instagram"></i>
                           <a href="http://www.univap.br" target="__blank">
                              <i class="fa-solid fa-globe"></i>
                           </a>
                        </div>
                     </div>
                  </div>                  
                  <div class="pgDesconto__card">
                     <div class="pgDesconto__card-col">  
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-clube-desconto/not_found.webp" class="pgDesconto__card-img">
                     </div>
                     <div class="pgDesconto__card-col">                     
                        <div class="pgDesconto__card-empresa">
                           <p>ANHANGUERA EDUCACIONAL</p>
                           <p>Desc. a partir de 10% para pagamento das mensalidades até a data de vencimento, dos cursos de graduação e pós-graduação, conforme IES escolhida</p>
                        </div>                     
                        <div class="pgDesconto__card-social">
                           <i class="fa-brands fa-square-facebook"></i>
                           <i class="fa-brands fa-square-instagram"></i>
                           <a href="https://anhanguera.com/" target="__blank">
                              <i class="fa-solid fa-globe"></i>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="pgDesconto__card">
                     <div class="pgDesconto__card-col">  
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-clube-desconto/not_found.webp" class="pgDesconto__card-img">
                     </div>
                     <div class="pgDesconto__card-col">                     
                        <div class="pgDesconto__card-empresa">
                           <p>FACULDADE CATÓLICA DE SJC</p>
                           <p>Desc. de 5% nas mensalidades</p>
                           <p>email:secretaria.teologia@yahoo.com.br</p>
                           <p>Telefone (12) 4009-8383</p>
                           <p>Av. São João, 2650, Jd. das Colinas</p>
                        </div>                     
                        <div class="pgDesconto__card-social">
                           <i class="fa-brands fa-square-facebook"></i>
                           <i class="fa-brands fa-square-instagram"></i>
                           <a href="https://www.faculdadecatolicasjc.edu.br
                           " target="__blank">
                              <i class="fa-solid fa-globe"></i>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="pgDesconto__card">
                     <div class="pgDesconto__card-col">  
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-clube-desconto/not_found.webp" class="pgDesconto__card-img">
                     </div>
                     <div class="pgDesconto__card-col">                     
                        <div class="pgDesconto__card-empresa">
                           <p>FAAP</p>
                           <p>Desc. 10% (não cumulativo) para pagamento das mensalidades até a data de vencimento, dos cursos de Pós-graduação (latu sensu) ou extensão.</p>
                           <p>Telefone: (12) 3925-6400</p>
                           <p>Av. Jorge Zarur, 650 – Jardim Aquarius/ SJC</p>
                        </div>                     
                        <div class="pgDesconto__card-social">
                           <i class="fa-brands fa-square-facebook"></i>
                           <i class="fa-brands fa-square-instagram"></i>
                           <a href="https://www.faap.br" target="__blank">
                              <i class="fa-solid fa-globe"></i>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="pgDesconto__card">
                     <div class="pgDesconto__card-col">  
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-clube-desconto/not_found.webp" class="pgDesconto__card-img">
                     </div>
                     <div class="pgDesconto__card-col">                     
                        <div class="pgDesconto__card-empresa">
                           <p>UNIP</p>
                           <p>Desc. 10% (acumulativo) para todos os cursos do ensino superior e pós graduação(OBS: Desconto válido e acumulativo somente até o vencimento da mensalidade)</p>
                           <p>Telefone: (12) 2136-9000</p>
                           <p>Rod. Presid. Dutra, Km 157,5, Sentido SP/SJC</p>
                        </div>                     
                        <div class="pgDesconto__card-social">
                           <i class="fa-brands fa-square-facebook"></i>
                           <i class="fa-brands fa-square-instagram"></i>
                           <i class="fa-solid fa-globe"></i>
                        </div>
                     </div>
                  </div>

                  <div class="pgDesconto__card">
                     <div class="pgDesconto__card-col">  
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-clube-desconto/not_found.webp" class="pgDesconto__card-img">
                     </div>
                     <div class="pgDesconto__card-col">                     
                        <div class="pgDesconto__card-empresa">
                           <p>FACULDE BILAC | ETEP | IBTA</p>
                           <p>Desc. de 20% nas mensalidades</p>
                        </div>                     
                        <div class="pgDesconto__card-social">
                           <i class="fa-brands fa-square-facebook"></i>
                           <i class="fa-brands fa-square-instagram"></i>
                           <i class="fa-solid fa-globe"></i>
                        </div>
                     </div>
                  </div>
                  <div class="pgDesconto__card">
                     <div class="pgDesconto__card-col">  
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-clube-desconto/not_found.webp" class="pgDesconto__card-img">
                     </div>
                     <div class="pgDesconto__card-col">                     
                        <div class="pgDesconto__card-empresa">
                           <p>FACULDADE VANGUARDA</p>
                           <p>Desc. 50% sobre o valor das mensalidades nos cursos superiores de Licenciatura em Pedagogia, Bacharelado em Ciências Contábeis e Administração, conforme disponibilidade de vagas no curso. Isenção de taxa do vestibular dos mesmos cursos acima</p>
                           <p>Av. Tivoli, 475 – Vila Betânia</p>
                        </div>                     
                        <div class="pgDesconto__card-social">
                           <i class="fa-brands fa-square-facebook"></i>
                           <i class="fa-brands fa-square-instagram"></i>
                           <i class="fa-solid fa-globe"></i>
                        </div>
                     </div>
                  </div>
                  <div class="pgDesconto__card">
                     <div class="pgDesconto__card-col">  
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-clube-desconto/not_found.webp" class="pgDesconto__card-img">
                     </div>
                     <div class="pgDesconto__card-col">                     
                        <div class="pgDesconto__card-empresa">
                           <p>ITS – INSTITUTO DE TECNOLOGIA E SAÚDE</p>
                           <p>Desc. 30% sobre as mensalidades nos cursos técnicos em Radiologia e Segurança do Trabalho, conforme disponibilidade de vagas no curso| Desc. 50% sobre as mensalidades nos cursos profissionalizantes (livres) | Isenção da taxa do vestibular dos cursos de Graduação na UNINTER | Descontos especiais nos cursos IN COMPANY (na Instituição ou Empresa) e treinamentos a colaboradores | Nos cursos de Graduação e Pós-Graduação será concedido um desconto de 10% mediante contrato celebrado diretamente com a Uninter por intermediação do ITS| Desconto não será concedido em caso de atraso no pagamento.</p>
                           <p>Av. Tivoli, 475 – Vila Betânia</p>
                        </div>                     
                        <div class="pgDesconto__card-social">
                           <i class="fa-brands fa-square-facebook"></i>
                           <i class="fa-brands fa-square-instagram"></i>
                           <a href="http://www.escolaits.com.br" target="__blank">
                              <i class="fa-solid fa-globe"></i>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="pgDesconto__card">
                     <div class="pgDesconto__card-col">  
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-clube-desconto/not_found.webp" class="pgDesconto__card-img">
                     </div>
                     <div class="pgDesconto__card-col">                     
                        <div class="pgDesconto__card-empresa">
                           <p>UNIP</p>
                           <p>Pólo EAD (Ensino a Distância) – Desconto de 10%</p>
                           <p>Telefone: (12) 3904-2100</p>
                        </div>                     
                        <div class="pgDesconto__card-social">
                           <i class="fa-brands fa-square-facebook"></i>
                           <i class="fa-brands fa-square-instagram"></i>
                           <i class="fa-solid fa-globe"></i>
                        </div>
                     </div>
                  </div>
                  <div class="pgDesconto__card">
                     <div class="pgDesconto__card-col">  
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-clube-desconto/not_found.webp" class="pgDesconto__card-img">
                     </div>
                     <div class="pgDesconto__card-col">                     
                        <div class="pgDesconto__card-empresa">
                           <p>UNIVERSIDADE ANHEMBI MORUMBI</p>
                           <p>Graduação: Isenção da 1ª mensalidade + 55% de desconto até o final do curso | Pós-graduação: Isenção da 1ª mensalidade +73% de desconto até o final do curso.</p>
                           <p>Telefone: 0800 015 9020</p>
                           <p>Av. Dep. Benedito Matarazzo, 6070 – Jardim Aquarius-SJC</p>
                        </div>                     
                        <div class="pgDesconto__card-social">
                           <i class="fa-brands fa-square-facebook"></i>
                           <i class="fa-brands fa-square-instagram"></i>
                           <a href="https://portal.anhembi.br/unidades/sao-jose-dos-campos/" target="__blank">
                              <i class="fa-solid fa-globe"></i>
                           </a>                           
                        </div>
                     </div>
                  </div>

               </div> 

               <div id="pgDesconto-list-utensilios" class="pgDesconto__empresas" >
                  <div class="pgDesconto__card">
                     <div class="pgDesconto__card-col">  
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-clube-desconto/not_found.webp" class="pgDesconto__card-img">
                     </div>
                     <div class="pgDesconto__card-col">                     
                        <div class="pgDesconto__card-empresa">
                           <p>REI DAS TRALHAS</p>
                           <p>Associado da Assem tem 10% de desconto nas compras realizadas na loja, além da participação em eventuais sorteios de brindes, mediante apresentação da carteirinha.</p>
                           <p>Telefone: (12) 3308-2556</p>
                           <p>Endereço: Rua Rubião Junior, 91- centro</p>
                        </div>                     
                        <div class="pgDesconto__card-social">
                           <i class="fa-brands fa-square-facebook"></i>
                           <a href="https://www.instagram.com/reidastralhasrt/" target="__blank">
                              <i class="fa-brands fa-square-instagram"></i>
                           </a>
                           <a href="https://www.reidastralhas.com.br" target="__blank">
                              <i class="fa-solid fa-globe"></i>
                           </a>                           
                        </div>
                     </div>
                  </div>                  
               </div>   
               
               <div id="pgDesconto-list-lazer" class="pgDesconto__empresas" >
                  <div class="pgDesconto__card">
                     <div class="pgDesconto__card-col">  
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-clube-desconto/not_found.webp" class="pgDesconto__card-img">
                     </div>
                     <div class="pgDesconto__card-col">                     
                        <div class="pgDesconto__card-empresa">
                           <p>HILLARIUS COMEDY</p>
                           <p>Desconto no ingresso para associados da ASSEM | De R$ 50,00 por R$ 30,00 + R$ 6,00 de taxa de serviço | Obrigatória a apresentação da carteirinha da ASSEM</p>
                           <p>Classificação: 18 anos</p>
                           <p>Rua Luis Jacinto, 241, Centro/SJC</p>
                        </div>                     
                        <div class="pgDesconto__card-social">
                           <i class="fa-brands fa-square-facebook"></i>
                           <i class="fa-brands fa-square-instagram"></i>
                           <a href="https://www.ticketnamao.com.br/produto/promocional-exclusivo-assem/" target="__blank">
                              <i class="fa-solid fa-globe"></i>
                           </a>
                        </div>
                     </div>
                  </div>                  
               </div>   
               
               <div id="pgDesconto-list-saude" class="pgDesconto__empresas" >
                  <div class="pgDesconto__card">
                     <div class="pgDesconto__card-col">  
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-clube-desconto/not_found.webp" class="pgDesconto__card-img">
                     </div>
                     <div class="pgDesconto__card-col">                     
                        <div class="pgDesconto__card-empresa">
                           <p>CLÁUDIA NAGAU</p>
                           <p>Psicopedagoga - Neuropsicopedagoga</p>
                           <p>Desconto de 10%: Avaliação neuro psicopedagógica (pacote 10 seções) </p>
                           <p>Desconto de 20%: Psicanálise (a partir de 12 anos), presencial ou on line.</p>
                           <p>Telefone: (12) 99755-9423</p>
                           <p>Rua Arnaldo Ricardo Monteiro, 71, Jardim Maringá.</p>
                        </div>                     
                        <div class="pgDesconto__card-social">
                           <i class="fa-brands fa-square-facebook"></i>
                           <i class="fa-brands fa-square-instagram"></i>
                           <i class="fa-solid fa-globe"></i>
                        </div>
                     </div>
                  </div>          
                  <div class="pgDesconto__card">
                     <div class="pgDesconto__card-col">  
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-clube-desconto/not_found.webp" class="pgDesconto__card-img">
                     </div>
                     <div class="pgDesconto__card-col">                     
                        <div class="pgDesconto__card-empresa">
                           <p>BREAK LIMITS – Escola de Bem Estar e Qualidade de Vida</p>
                           <p>Desc. 15% na matrícula e mensalidades</p>
                           <p>Telefone: (12) 3911-3068</p>
                           <p>Av. Comendador Vicente de Paulo Penido, 524 – Parque Res. Aquarius-SJC</p>
                        </div>                     
                        <div class="pgDesconto__card-social">
                           <a href="https://www.facebook.com/breaklimitso{cial/" target="__blank">
                              <i class="fa-brands fa-square-facebook"></i>
                           </a>
                           <i class="fa-brands fa-square-instagram"></i>
                           <a href="http://breaklimits.com.br/" target="__blank">
                              <i class="fa-solid fa-globe"></i>
                           </a>
                        </div>
                     </div>
                  </div>          
                  <div class="pgDesconto__card">
                     <div class="pgDesconto__card-col">  
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-clube-desconto/not_found.webp" class="pgDesconto__card-img">
                     </div>
                     <div class="pgDesconto__card-col">                     
                        <div class="pgDesconto__card-empresa">
                           <p>CHRISTIMAS APARECIDA TANNUS</p>
                           <p>Descontos especiais de 25 a 35%</p>
                           <p>Psicanalista / Neuropsicopedagoga | Especialista em Ed. Especial e Inclusão</p>
                           <p>WhatsApp: 12 99787-6632</p>
                           <p>R Orlando Feirabend Filho, 230 – Torre A, sl. 1401, Jd. Aquárius-SJC</p>
                        </div>                     
                        <div class="pgDesconto__card-social">
                           <i class="fa-brands fa-square-facebook"></i>
                           <a href="https://www.instagram.com/christimastannus_psicanalista/" target="__blank">
                              <i class="fa-brands fa-square-instagram"></i>
                           </a>
                           <i class="fa-solid fa-globe"></i>
                        </div>
                     </div>
                  </div>          
                  <div class="pgDesconto__card">
                     <div class="pgDesconto__card-col">  
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-clube-desconto/not_found.webp" class="pgDesconto__card-img">
                     </div>
                     <div class="pgDesconto__card-col">                     
                        <div class="pgDesconto__card-empresa">
                           <p>ANA CAROLINA DE PAULA SOUZA – CRP06/104401</p>
                           <p>Desc. de 40% nas consultas</p>
                           <p>Psicoterapia</p>
                           <p>Email: anacarolinapsico@hotmail.com</p>
                           <p>Whatsapp: (12) 98139-1628</p>
                           <p>Av. B. S Queiroz Jr., 1080 – sala 03 – Jd das Indústrias/SJC</p>
                        </div>                     
                        <div class="pgDesconto__card-social">
                           <i class="fa-brands fa-square-facebook"></i>
                           <i class="fa-brands fa-square-instagram"></i>
                           <i class="fa-solid fa-globe"></i>
                        </div>
                     </div>
                  </div>          
                  <div class="pgDesconto__card">
                     <div class="pgDesconto__card-col">  
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-clube-desconto/not_found.webp" class="pgDesconto__card-img">
                     </div>
                     <div class="pgDesconto__card-col">                     
                        <div class="pgDesconto__card-empresa">
                           <p>DANIELLE CLEIDEANE SANTOS</p>
                           <p>Desc. de 50%</p>
                           <p>Psicólogia Clínica</p>
                           <p>Email: contato@psicologadaniellesantos.com.br</p>
                           <p>Telefone: (12) 97401-6384</p>
                           <p>Espaço Fenix – R. Euclides Miragaia, 464, Sala 25, Centro – SJC</p>
                        </div>                     
                        <div class="pgDesconto__card-social">
                           <i class="fa-brands fa-square-facebook"></i>
                           <i class="fa-brands fa-square-instagram"></i>
                           <i class="fa-solid fa-globe"></i>
                        </div>
                     </div>
                  </div>          
                  <div class="pgDesconto__card">
                     <div class="pgDesconto__card-col">  
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-clube-desconto/not_found.webp" class="pgDesconto__card-img">
                     </div>
                     <div class="pgDesconto__card-col">                     
                        <div class="pgDesconto__card-empresa">
                           <p>NUTRIÇÃO ESPORTIVA</p>
                           <p>Jessica Tannus</p>
                           <p>Desc. de 25% nas consultas</p>
                           <p>WhatsApp: 12 97412-9728</p>
                           <p>R Orlando Feirabend Filho, 230 – Torre A, sl. 1401, Jd. Aquárius</p>
                        </div>                     
                        <div class="pgDesconto__card-social">
                           <a href="https://www.facebook.com/jessicatannusnutri/?ref=page_internal" target="__blank">
                              <i class="fa-brands fa-square-facebook"></i>
                           </a>
                           <i class="fa-brands fa-square-instagram"></i>
                           <i class="fa-solid fa-globe"></i>
                        </div>
                     </div>
                  </div>  

                  <div class="pgDesconto__card">
                     <div class="pgDesconto__card-col">  
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-clube-desconto/not_found.webp" class="pgDesconto__card-img">
                     </div>
                     <div class="pgDesconto__card-col">                     
                        <div class="pgDesconto__card-empresa">
                           <p>REDE OFTALMOCLÍNICA</p>
                           <p>Desc. 35 a 65% (da tabela particular) nos serviços</p>
                           <p>Email: comercialmkt@oftalmoclinicavale.com.br</p>
                           <p>Telefone: (12) 3932-7760 | (12) 9.9661-0004</p>
                           <p>Av. Andrômeda, 227 – Jd. Satélite</p>
                        </div>                     
                        <div class="pgDesconto__card-social">
                           <i class="fa-brands fa-square-facebook"></i>
                           <a href="https://www.instagram.com/redeoftalmoclinica/" target="__blank">
                              <i class="fa-brands fa-square-instagram"></i>
                           </a>
                           <a href="http://www.oftalmoclinicavale.com.br" target="__blank">
                              <i class="fa-solid fa-globe"></i>
                           </a>
                        </div>
                     </div>
                  </div>         

                  <div class="pgDesconto__card">
                     <div class="pgDesconto__card-col">  
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-clube-desconto/not_found.webp" class="pgDesconto__card-img">
                     </div>
                     <div class="pgDesconto__card-col">                     
                        <div class="pgDesconto__card-empresa">
                           <p>OLHAR CERTO CLINICAS OFTALMOLÓGICAS</p>
                           <p>Valor especial para associados | Consulta: R$ 80 – Inclui os exames: Refração, Tonometria de aplanação, Fundoscopia e Biomicroscopia anterior (realizados na clínica).</p>
                           <p>Telefone: (12) 3922-5663</p>
                           <p>Rua Vilaça 356 – Centro SJC</p>
                        </div>                     
                        <div class="pgDesconto__card-social">
                           <a href="https://www.facebook.com/olharcertosjccentro" target="__blank">
                              <i class="fa-brands fa-square-facebook"></i>
                           </a>
                           <a href="https://www.instagram.com/olharcerto.sjccentro/" target="__blank">
                              <i class="fa-brands fa-square-instagram"></i>
                           </a>
                           <a href="http://www.olharcerto.com.br" target="__blank">
                              <i class="fa-solid fa-globe"></i>
                           </a>
                        </div>
                     </div>
                  </div>          

                  <div class="pgDesconto__card">
                     <div class="pgDesconto__card-col">  
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-clube-desconto/not_found.webp" class="pgDesconto__card-img">
                     </div>
                     <div class="pgDesconto__card-col">                     
                        <div class="pgDesconto__card-empresa">
                           <p>ESPAÇO FÍSIO REABILITAR</p>
                           <p>Fisioterapia ortopédica, Pilates solo e acessórios, reeducação postural global (RPG) Desc. 10% nos tratamentos realizados e indicando uma pessoa que faça um tratamento, o associado faz uma sessão experimental de RPG ou Pilates solo e acessórios</p>
                           <p>Telefone: (12) 98100-7680</p>
                           <p>Rua Bacabal, 140, sl 115, 11º andar/SJC</p>
                        </div>                     
                        <div class="pgDesconto__card-social">
                           <i class="fa-brands fa-square-facebook"></i>
                           <i class="fa-brands fa-square-instagram"></i>
                           <i class="fa-solid fa-globe"></i>
                        </div>
                     </div>
                  </div>          

                  <div class="pgDesconto__card">
                     <div class="pgDesconto__card-col">  
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-clube-desconto/not_found.webp" class="pgDesconto__card-img">
                     </div>
                     <div class="pgDesconto__card-col">                     
                        <div class="pgDesconto__card-empresa">
                           <p>CLÍNICA MÉDICA EVIVA</p>
                           <p>Desc. 10% em consultas e/ou exames.</p>
                           <p>Consultas ambulatoriais, exames laboratoriais e ultrassom.</p>
                           <p>Telefone: (12) 4003-3756</p>
                           <p>Av. Perseu, 950, Jardim Satélite, SJC/SP</p>
                        </div>                     
                        <div class="pgDesconto__card-social">
                           <a href="https://www.facebook.com/evivasaude/" target="__blank">
                              <i class="fa-brands fa-square-facebook"></i>
                           </a>
                           <a href="https://www.instagram.com/evivasaude/" target="__blank">
                              <i class="fa-brands fa-square-instagram"></i>
                           </a>
                           <a href="http://www.evivasaude.com.br" target="__blank">
                              <i class="fa-solid fa-globe"></i>
                           </a>
                        </div>
                     </div>
                  </div>          

                  <div class="pgDesconto__card">
                     <div class="pgDesconto__card-col">  
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-clube-desconto/not_found.webp" class="pgDesconto__card-img">
                     </div>
                     <div class="pgDesconto__card-col">                     
                        <div class="pgDesconto__card-empresa">
                           <p>SOLUÇÃO AUDITIVA</p>
                           <p>Solução Auditiva para aparelhos auditivos de última geração. Empresa representante dos aparelhos auditivos Bernafon.</p>
                           <p>15% de desconto para pagamento à vista | 10% desconto para pagamento até 6 vezes no cartão de crédito | 5% de desconto para pagamento até 12 vezes no cartão de crédito | Acompanhamento vitalício para os aparelhos adquiridos na Solução Auditiva</p>
                           <p>Telefone: (12) 98142-7736</p>
                           <p>Espaço Andrômeda Shopping Av. Andrômeda, 693, térreo, loja 0, Jardim Satélite</p>
                        </div>                     
                        <div class="pgDesconto__card-social">
                           <i class="fa-brands fa-square-facebook"></i>
                           <i class="fa-brands fa-square-instagram"></i>
                           <i class="fa-solid fa-globe"></i>
                        </div>
                     </div>
                  </div>
                  <div class="pgDesconto__card">
                     <div class="pgDesconto__card-col">  
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-clube-desconto/not_found.webp" class="pgDesconto__card-img">
                     </div>
                     <div class="pgDesconto__card-col">                     
                        <div class="pgDesconto__card-empresa">
                           <p>Isabella Cristina Alcalde Morciani - Psicóloga</p>
                           <p>20% de desconto no valor das sessões</p>
                           <p>Telefone: (12) 98297-1500</p>
                           <p>Av: João Paulo 1, 421 Jardim Satélite</p>
                        </div>                     
                        <div class="pgDesconto__card-social">
                           <i class="fa-brands fa-square-facebook"></i>
                           <a href="https://www.instagram.com/isabellamorciani.psi/" target="__blank">
                              <i class="fa-brands fa-square-instagram"></i>
                           </a>
                           <i class="fa-solid fa-globe"></i>
                        </div>
                     </div>
                  </div>        

                  <div class="pgDesconto__card">
                     <div class="pgDesconto__card-col">  
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-clube-desconto/not_found.webp" class="pgDesconto__card-img">
                     </div>
                     <div class="pgDesconto__card-col">                     
                        <div class="pgDesconto__card-empresa">
                           <p>Paulo Henrique de Avila  - Prof. Tênis de Campo e Beach Tennis</p>
                           <p>Telefone: (12) 3923-1304 / (12) 98167-7664</p>
                           <p>Descontos para Associados</p>
                        </div>                     
                        <div class="pgDesconto__card-social">
                           <i class="fa-brands fa-square-facebook"></i>
                           <a href="https://www.instagram.com/isabellamorciani.psi/" target="__blank">
                              <i class="fa-brands fa-square-instagram"></i>
                           </a>
                           <i class="fa-solid fa-globe"></i>
                        </div>
                     </div>
                  </div>           

               </div>   

               <div id="pgDesconto-list-vestuarios" class="pgDesconto__empresas" >
                  <div class="pgDesconto__card">
                     <div class="pgDesconto__card-col">  
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-clube-desconto/not_found.webp" class="pgDesconto__card-img">
                     </div>
                     <div class="pgDesconto__card-col">                     
                        <div class="pgDesconto__card-empresa">
                           <p>ROTA JEANS</p>
                           <p>Desconto de 10%</p>
                           <p>Vestuários e acessórios</p>
                           <p>Whatsapp: 9120 98301-4355</p>
                        </div>                     
                        <div class="pgDesconto__card-social">
                           <i class="fa-brands fa-square-facebook"></i>
                           <i class="fa-brands fa-square-instagram"></i>
                           <i class="fa-solid fa-globe"></i>
                        </div>
                     </div>
                  </div>                  
               </div>   

            </div>
         </div>



      </section>

   <?php endwhile; else: ?>
   <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
   <?php endif; ?>

<?php get_footer(); ?>