<article class="post">
  <?php Theme::plugins('postBegin') ?>
  <section class="post-header">
    <header class="post-title">
      <h1><?php echo $Post->title() ?></h1>
    </header>
    <div class="post-meta">
      <span class="post-author">By <strong><?php if( Text::isNotEmpty($Post->user('firstName')) && Text::isNotEmpty($Post->user('lastName')) ) {echo $Post->user('firstName').' '.$Post->user('lastName');}else {echo $Post->user('username');}?></strong></span>
      <span class="post-date">on <strong><?php echo $Post->date() ?></strong></span>
    </div>
  </section>
  <section class="post-content">
    <?php echo $Post->content() ?>
  </section>
  <section class="post-footer">
    <span class="post-tags"><strong><strong><?php echo $Language->get('Tags') ?>:</strong> </strong><?php echo $Post->tags() ?></span>
  </section>
  <?php Theme::plugins('postEnd') ?>
</article>