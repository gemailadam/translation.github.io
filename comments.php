<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package WordPress
 * @subpackage 3Davinci-one
 * @since 3Davinci-one 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
  return;
}

?>

<?php if (have_comments()) {

?>
 <h4 id="comments"><?php comments_number( 'No comments', 'One Comment', '% Comments' , 'Strange Strange Strange'); ?> , in &#8220;<?php the_title( ); ?>&#8221; </h4>
<?php
echo '<ul class="comment-list">';
 wp_list_comments();
echo "</ul>";

next_comments_link(); 
previous_comments_link(); 

} 
else {echo "<h2> There are No Comment So Far ? </h2>";}


$fields =  array(

  'author' =>
    '<p class="comment-form-author"><label for="author">' . 'Name : ' . '</label>' .
    ( $req ? '<span class="required">*</span>' : '' ) .
    '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
    '" size="30"' . $aria_req . ' /></p>',

  'email' =>
    '<p class="comment-form-email"><label for="email">' . 'Email : ' . '</label>' .
    ( $req ? '<span class="required">*</span>' : '' ) .
    '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
    '" size="30"' . $aria_req . ' /></p>',

  'url' =>
    '<p class="comment-form-url"><label for="url">' . 'Website : ' . '</label>' .
    '<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
    '" size="30" /></p>',
);

$args = array(
  'id_form'                => 'commentform',
  'class_form'             => 'comment-form',
  'id_submit'              => 'submit',
  'class_submit'           => 'submit',
  'name_submit'            => 'submit',
  'title_reply'            => 'Leave a Reply',
  'title_reply_to'         => 'Leave a Reply to %s',
  'cancel_reply_link'      => 'Cancel Reply',
  'label_submit'           => 'Post Comment',
  'format'                 => 'xhtml',

  'comment_field'          =>  '<p class="comment-form-comment"><label for="comment">' . 'Comment' .
    '</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true">' .
    '</textarea></p>',

  'must_log_in'            => '<p class="must-log-in">' .
    sprintf(
      'You must be <a href="%s">logged in</a> to post a comment.',
      wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
    ) . '</p>',

  'logged_in_as'           => '<p class="logged-in-as">' .
    sprintf('Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>',
      admin_url( 'profile.php' ),
      $user_identity,
      wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
    ) . '</p>',

  'comment_notes_before'   => '<p class="comment-notes">' .
    'Your email address will not be published.' . ( $req ? $required_text : '' ) .
    '</p>',

  'comment_notes_after' => '<p class="form-allowed-tags">' .
    sprintf('You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes: %s',
      ' <code>' . allowed_tags() . '</code>'
    ) . '</p>',

  'fields' => apply_filters( 'comment_form_default_fields', $fields ),

);

// comment_form( $args, $post_id ); 
comment_form( $args ); 

 ?>