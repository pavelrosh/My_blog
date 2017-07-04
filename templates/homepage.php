<?php include "templates/include/header.php" ?>
 <?php include "templates/include/menu.php" ?> 

      <ul id="headlines">
<?php foreach ( $results['articles'] as $article ) { ?>
<div class="row">
<div class="date_info col-lg-3 col-md-3"">
<span class="day"><?php echo date('j', $article->publicationDate)?></span>
<span class="month"><?php echo date(' F ', $article->publicationDate)?></span>
<span class="year"><?php echo date('Y', $article->publicationDate)?></span>
</div>

<div class="blog-content col-md-9 col-lg-9">
<div class="content-header"><a href=".?action=viewArticle&amp;articleId=<?php echo $article->id?>"><?php echo htmlspecialchars( $article->title )?></a></div>
<div class="content_text"><?php echo htmlspecialchars( $article->summary )?></div></div>
</div>
<?php } ?>

      </ul>
<?php include "templates/include/footer.php" ?>

