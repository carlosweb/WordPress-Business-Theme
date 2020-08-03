<?php get_header(); ?>
<!-- section header -->
<section class="header" id="home">
    <div class="box-header">
        <div class="content">
            <div class="left-content">
                <h1>Aumente suas vendas  <br> Faça parte da Villa</h1>
                <h3>Potencialize a visibilidade da sua empresa, forneça mais e abasteça seu restaurante com os melhores produtos.</h3>
                <a href="#plans" class="btn primary">Conhença nossos Planos</a>
                
            </div>
            <div class="right-content">
                <img class="img-header" src="http://localhost/wordpress/wp-content/uploads/2020/08/SocialGrowth-bro.png" alt="">
            </div>
        </div>
    </div>
</section>

<!-- section about -->
<section class="about" id="about">
    <div class="content">
        <div class="description">
            <h1>Sobre a VillaB2C</h1>
                <div class="text-about">
                    <p>A história da VillaB2C começou em 2001 quando nosso CEO Tércio Farias finalizou o estágio supervisionado na produção da maricultura de Valença.</p>
                    <p>Embarcamos tecnologia no negócio, trouxemos técnicas avançadas para emponderar as pessoas e claro… Estas pessoas felizes irão cuidar bem do nosso cliente e o nosso cliente consequentemente da nossa empresa.</p>
                </div>
            <a href="#services" class="btn primary">Conheça nossos Serviços</a>
        </div>
    </div>
</section>

<!-- section services -->
<section class="services bg-primary" id="services">
    <div class="title text-white">
        <p>Saiba como podemos te ajudar</p>
        <h2>Destaque dos Serviços </h2>
    </div>
    <div class="content">
        <div class="box-card">
            <div class="card" data-aos="fade-up">
                <i class="fas fa-fish fa-4x"></i>
                <h3>Peixes e Camarões</h3>
                <p>Having been around for over a de, Basecamp is considered a reliable tool that excels at giving.</p>
            </div>
            <div class="card" data-aos="fade-up">
                <i class="fas fa-utensils fa-4x"></i>
                <h3>Tenha uma Franquia</h3>
                <p>Having been around for over a de, Basecamp is considered a reliable tool that excels at giving.</p>
            </div>
            <div class="card" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                <i class="fas fa-briefcase fa-4x"></i>
                <h3>Business B2B</h3>
                <p>Having been around for over a de, Basecamp is considered a reliable tool that excels at giving.</p>
            </div>
        </div>
    </div>
</section>

<!-- section jobs -->
<!-- <section class="jobs" id="jobs">
    <div class="title">
        <p>Um pouco do que fazemos com amor</p>
        <h2>Nossos Trabalhos</h2>
    </div>
    <div class="content">
        <div class="gallery">

            <?php 
            $de_query_sql = new WP_Query(array(
                'post_per_page' => 10,
                'post_type'  => 'post',
                'orderby' => 'rand'
            ));
                if($de_query_sql->have_posts()){
                    while($de_query_sql->have_posts()){
                        $de_query_sql->the_post();
                       ?>
                            <div class="img" data-aos="zoom-in">
                                  <a href="<?php the_permalink()?>"><?php if ( has_post_thumbnail()) the_post_thumbnail('home-thumb'); ?></a>  
                            </div>
                        <?php
                    }
                }
            ?>

        </div>
    </div>
    <div class="bt-center">
      
    </div>
</section> -->

<!-- section plans -->
<section class="plans" id="plans">
        <div class="title">
            <h2>Nossos Planos</h2>
        </div>
        <div class="content">
            <div class="box-plan">
                <div class="plan-box">
                    <i class="fas fa-box-open fa-2x"></i>
                    <h2>Plano 1</h2>
                    <ul>
                        <li>Item 1</li>
                        <li>Item 2</li>
                        <li>Item 3</li>
                    </ul>
                    <button class="btn">Quero Assinar</button>
                </div>
                <div class="plan-box">
                    <i class="fas fa-box-open fa-2x"></i>
                    <h2>Plano 2</h2>
                    <ul>
                        <li>Item 1</li>
                        <li>Item 2</li>
                        <li>Item 3</li>
                        <li>Item 4</li>
                    </ul>
                    <button class="btn">Quero Assinar</button>
                </div>
                <div class="plan-box active">
                    <i class="fas fa-box-open fa-2x"></i>
                    <h2>Plano 3</h2>
                    <ul>
                        <li>Item 1</li>
                        <li>Item 2</li>
                        <li>Item 3</li>
                        <li>Item 4</li>
                    </ul>
                    <button class="btn primary active">Quero Assinar</button>
                </div>
                <div class="plan-box">
                    <i class="fas fa-box-open fa-2x"></i>
                    <h2>Plano 4</h2>
                    <ul>
                        <li>Item 1</li>
                        <li>Item 2</li>
                        <li>Item 3</li>
                        <li>Item 4</li>
                    </ul>
                    <button class="btn">Quero Assinar</button>
                </div>
        </div>
    </section>

<!-- section contact -->
<section id="contact" class="contact-form">
        <div class="title">
            <h2>Contato</h2>
            <p>Area de contato para com os clientes</p>
        </div>

        <div class="content">
            <div class="form-contact">
                <?php echo do_shortcode( '[wpforms id="31" title="false" description="false"]' ); ?>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4746.123903964145!2d-38.413841984639824!3d-12.83685156059608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7161b5383e148e9%3A0x3ae94dc3e9d93c17!2sVilla%20Pescados%20-%20Distribuidora%20de%20Camar%C3%A3o!5e1!3m2!1spt-BR!2sbr!4v1596458073851!5m2!1spt-BR!2sbr" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
</section>

<?php get_footer();?>
