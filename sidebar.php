
<div class="col-md-3 offset-md-1 bg-dark text-white rounded" style="height:180px;" id="sidebar">
   <!-- <h1 class="h5 text-center">otros links</h1>
    <hr> -->
    <?php if( is_active_sidebar( 'widgets-derecha' ) ) : ?>
        <?php dynamic_sidebar( 'widgets-derecha' ); ?>
    <?php else : ?>

    <?php endif; ?>
</div>