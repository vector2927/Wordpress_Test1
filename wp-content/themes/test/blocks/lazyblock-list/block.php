<?php
/**
 * List Block.
 *
 * @var  array  $attributes Block attributes.
 * @var  array  $block Block data.
 * @var  string $context Preview context [editor,frontend].
 */
 
?>
<?php if ( $attributes['listType'] ==="ol" ) : ?>
<ol>
  <?php foreach( $attributes['items'] as $inner ): ?>
  <li>
    <?php if(!$inner['description']) : ?>
      <strong><?php echo $inner['heading']; ?></strong>
    <?php else: ?>
      <h4><?php echo $inner['heading']; ?></h4>
      <?php echo $inner['description']; ?>
    <?php endif;?>
  </li>
  <?php endforeach; ?>
</ol>
<?php else: ?>
<ul>
  <?php foreach( $attributes['items'] as $inner ): ?>
  <li>
    <?php if(!$inner['description']) : ?>
      <strong><?php echo $inner['heading']; ?></strong>
    <?php else: ?>
      <h4><?php echo $inner['heading']; ?></h4>
      <?php echo $inner['description']; ?>
    <?php endif;?>
  </li>
  <?php endforeach; ?>
</ul>
<?php endif; ?>