<?php
/**
 * @file
 * D7Compatible comments template.
 *
 * Available variables:
 * - $author: Comment author. Can be link or plain text.
 * - $bundle: The bundle the comment belongs to, e.g. 'comment_node_post'.
 * - $content: An array of comment items. Use render($content) to print them
 *   all, or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $created: Formatted date and time for when the comment was created.
 *   Preprocess functions can reformat it by calling format_date() with the
 *   desired parameters on the $comment->created variable.
 * - $changed: Formatted date and time for when the comment was last changed.
 *   Preprocess functions can reformat it by calling format_date() with the
 *   desired parameters on the $comment->changed variable.
 * - $new: New comment marker.
 * - $permalink: Comment permalink.
 * - $permalink_path: Available to build your own permalink.
 * - $submitted: Submission information created from $author and $created during
 *   template_preprocess_comment().
 * - $user_picture: The comment author's picture from user-picture.tpl.php.
 * - $signature: Authors signature.
 * - $status: Comment status. Possible values are:
 *   comment-unpublished, comment-published or comment-preview.
 * - $title: Linked title.
 * - $title_display: Should the title be displayed (TRUE or FALSE).
 * - $title_classes: Specific classes for the title. Default is:
 *   - comment-title: Title of the specific comment.
 * - $classes: Array of classes that can be used to style contextually through
 *   CSS. The default values can be one or more of the following:
 *   - comment: The current template type, i.e., "theme hook".
 *   - comment-by-anonymous: Comment by an unregistered user.
 *   - comment-by-node-author: Comment by the author of the parent node.
 *   - comment-preview: When previewing a new or edited comment.
 *   - comment-title-hidden: Comment titles should be hidden.
 *   - comment-title-auto: Comment titles are automatically generated.
 *   - comment-title-custom: Comment titles are custom for each comment.
 *   The following applies only to viewers who are registered users:
 *   - comment-unpublished: An unpublished comment visible only to
 *     administrators.
 *   - comment-by-viewer: Comment by the user currently viewing the page.
 *   - comment-new: New comment since last the visit.
 * - $attributes: Array of additional HTML attributes that should be added to
 *   the wrapper element. Flatten with backdrop_attributes().
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $view_mode: Display mode, e.g. 'full', or 'default'.
 *
 * These two variables are provided for context:
 * - $comment: Full comment object.
 * - $node: Node entity the comments are attached to.
 *
 * @see template_preprocess()
 * @see template_preprocess_comment()
 * @see theme_comment()
 *
 * @ingroup themeable
 */
?>
<div class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <?php print $user_picture; ?>

  <?php if ($new): ?>
    <mark class="new"><?php print $new; ?></mark>
  <?php endif; ?>

  <?php if ($title_display): ?>
    <?php print render($title_prefix); ?>
    <h3<?php print $title_attributes; ?>><?php print $title ?></h3>
    <?php print render($title_suffix); ?>
  <?php endif; ?>

  <p class="submitted">
    <?php print $permalink; ?>
    <?php print $submitted; ?>
  </p>

  <div class="content"<?php print $content_attributes; ?>>
    <?php
      // We hide the links now so that we can render them later.
      hide($content['links']);
      print render($content);
    ?>
    <?php if ($signature): ?>
    <div class="user-signature clearfix">
      <?php print $signature; ?>
    </div>
    <?php endif; ?>
  </div>

  <?php print render($content['links']) ?>
</article>
