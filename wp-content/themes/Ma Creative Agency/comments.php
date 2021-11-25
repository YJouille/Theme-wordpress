<div id="commentaires" class="comments">
<div class="row justify-content-center">
<?php if (have_comments()) : ?>
<div class="col-4">
<h2 class="comments__title">
<?php echo get_comments_number(); // Nombre de commentaires
?> Commentaire(s)
</h2>
<?php
// La fonction qui liste les commentaires
wp_list_comments(array(
'walker' => null,
'max_depth' => '',
'style' => 'div',
'callback' => null,
'end-callback' => null,
'type' => 'all',
'page' => '',
'per_page' => '4',
'avatar_size' => 40,
'reverse_top_level' => true,
'reverse_children' => '',
'format' => current_theme_supports('html5', 'comment-list') ? 'html5' : 'xhtml',
'short_ping' => true,
'echo' => true,
));
?>
</div>
<?php
// S'il n'y a pas de commentaires
else :
?>
<p class="comments__none">
Il n'y a pas de commentaires pour le moment. Soyez le premier à participer !
</p>
<?php endif; ?>


<div id="form_comments" class="col-4">
<?php
//Declare Vars
$comment_send = 'envoyer';
$comment_reply = 'Mettre un commentaire';
$comment_reply_to = 'Répondre';

$comment_author = 'Votre nom';
$comment_email = 'Votre E-Mail';
$comment_body = 'Votre commentaire';
$comment_cookies_1 = ' By commenting you accept the';
$comment_cookies_2 = ' Privacy Policy';

$comment_before = '<p>Tous les champs sont obligatoires</p>';

$comment_cancel = 'Annuler reponse';

//Array
$comments_args = array(
//Define Fields
'fields' => array(
//Author field
'author' => '<p class="comment-form-author"><br /><input id="author" name="author" aria-required="true" placeholder="' . $comment_author . '"></input></p>',
//Email Field
'email' => '<p class="comment-form-email"><br /><input id="email" name="email" placeholder="' . $comment_email . '"></input></p>',
//Cookies
'cookies' => '<input type="checkbox" required>' . $comment_cookies_1 . '<a href="' . get_privacy_policy_url() . '">' . $comment_cookies_2 . '</a>',
),
// Change the title of send button
'label_submit' => __($comment_send),
// Change the title of the reply section
'title_reply' => __($comment_reply),
// Change the title of the reply section
'title_reply_to' => __($comment_reply_to),
//Cancel Reply Text
'cancel_reply_link' => __($comment_cancel),
// Redefine your own textarea (the comment body).
'comment_field' => '<p class="comment-form-comment"><br /><textarea class="form-control" id="comment" name="comment" aria-required="true" placeholder="' . $comment_body . '" style="height:100px" ></textarea></p>',
//Message Before Comment
'comment_notes_before' => __($comment_before),
// Remove "Text or HTML to be displayed after the set of comment fields".
'comment_notes_after' => '',
//Submit Button ID
'id_submit' => __('comment-submit'),

'class_submit' => __('btn btn-danger comment_btn'),
);
comment_form($comments_args);
?>
</div>
</div>
</div>