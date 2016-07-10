<?php if ( !is_post_type_archive('tribe_events') && !is_singular('tribe_events') ) : ?>
<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>

<?php endif; ?>

