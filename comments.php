<?php
 if ( post_password_required() ) {
 return;
 }
?>
<div id=”comments” class=”comments-area”>
<?php
 if (have_comments() ) :
 //We have comments
?>
<h2 class=”comment-title”>
<?php
printf(
esc_html( _nx( ‘One Comment’, ‘%1$s comments’, get_comments_number(), ‘comments title’, ‘blogginglovetheme’) ),
number_format_i18n( get_comments_number() )
);
?>
</h2>
<ol class=”comment-list”>
<?php
$args =array ( ‘walker’ => null, ‘max_depth’ => ”, ‘style’ => ‘ol’, ‘callback’ => null, ‘end-callback’ => null, ‘type’ => ‘all’, ‘reply_text’ => ‘Reply’, ‘page’ => ”, ‘per_page’ => ”, ‘avatar_size’ => ’48’, ‘short_ping’ => false, ‘echo’ => true );
wp_list_comments($args);
?>
</ol>
<?php
if( !comments_open() && get_comments_number() ):
?>
<p class=”no-comments”><?php esc_html_e( ‘Comments are closed.’, ‘blogginglovetheme’); ?></p>
<?php
endif;
?>
<?php
endif;
?>
<?php comment_form(); ?>
</div>