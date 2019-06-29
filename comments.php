<h1 class="h5">Comentarios <?php comments_number('No hay Comentarios', 'Un Comentario', '% Comentarios') ;?></h1>

<br>

<?php comment_form(); ?>

<?php 
    wp_list_comments(array(
        'callback' => function($comment, $args, $depth) { ?>

        <div class="media">
            <div class="mr-3">
                <?php
                    if($args['avatar_size'] != 0) {
                        echo get_avatar($comment, $args['avatar_size']);
                    }
                ?>
            </div>
            <div class="media-body">
                    <h5 class="mt-0">
                        <?php
                            printf( __( '<cite>%s</cite> <span>Dice:</span>'), get_comment_author_link());
                        ?>
                    </h5>
                    <?php
                        if($comment->comment_approved == '0') {?>
                            <em><?php _e('Comentario en espera de aprobación'); ?></em><br><?php
                        } 
                    ?>

                    <?php comment_text(); ?>

                    <span>
                        <?php comment_reply_link(
                            array_merge(
                                $args,
                                array(
                                    'reply_text' => 'Responder',
                                    'depth' => $depth,
                                    'max_depth' => $args['max_depth']
                                )
                            )
                        ); ?>
                    </span>

                    <span>
                        <?php edit_comment_link( __('Editar'), ' ', ''); ?>
                    </span>
            </div>
        </div>
        <?php
        }
    ));
?>