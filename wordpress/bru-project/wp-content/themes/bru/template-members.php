<?php
/*
*   Template Name: Single Miembros
*/
?>

<?php
    function get_members( $slug ) {
        $loop = new WP_Query(array(
            'post_type' => 'miembros',
            'tax_query' => array(
                array(
                    'taxonomy' => 'jerarquia', // Taxonomy name
                    'field' => 'slug', // You can use 'id', 'slug', or 'name'
                    'terms' => $slug, // Taxonomy term
                ),
            ),
        ));
        if( $loop->have_posts() ) :
            while( $loop->have_posts() ) : $loop->the_post();
        ?>
                <div class="card" style="order:<?php echo get_field('order'); ?>;">
                    <div class="card-container">
                        <div class="front">
                            <h3><?php echo get_the_title(); ?></h3>
                            <?php if( get_field('date') ) : ?>
                                <p>Año de ingreso: <?php echo get_field('date'); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
        <?php
            endwhile;
        endif;
        wp_reset_postdata();
    }
?>

<?php get_header(); ?>
    <div id="members">
        <section class="members">
            <div class="container">
                <div class="group-name">
                    <h2>Junta Coordinadora</h2>
                </div>
                <div class="group junta-coordinadora">
                    <?php get_members( 'junta-coordinadora' ); ?>
                </div>
                <div class="group-name">
                    <h2>Miembros Activo</h2>
                </div>
                <div class="group activos">
                    <?php get_members( 'activo' ); ?>
                </div>
                <div class="group-name">
                    <h2>Acesor Academico</h2>
                </div>
                <div class="group acesor">
                    <?php get_members( 'acesor-academico' ); ?>
                </div>
                <div class="group-name">
                    <h2>Miembros Reserva</h2>
                </div>
                <div class="group reservas">
                    <?php get_members( 'reserva' ); ?>
                </div>
            </div>
        </section>
    </div>

<?php get_footer(); ?>