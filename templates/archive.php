<?php include "templates/include/header.php" ?>

      <h1>All Posts</h1>

      <ul id="headlines" class="archive">

<?php foreach ( $results['articles'] as $article ) { ?>

        <div class="row">
<div class="date_info col-lg-3 col-md-3"">
<span class="day"><?php echo date('j', $article->publicationDate)?></span>
<span class="month"><?php echo date(' F ', $article->publicationDate)?></span>
<span class="year"><?php echo date('Y', $article->publicationDate)?></span>
</div>

<div class="blog-content col-md-9 col-lg-9">
<div class="content-header"><a href=".?action=viewArticle&amp;articleId=<?php echo $article->id?>"><?php echo htmlspecialchars( $article->title )?></a></div>
<div class="content_text"><?php echo htmlspecialchars( $article->summary )?></div></div></div>

<?php } ?>

      </ul>

      <h2><?php echo $results['totalRows']?> post<?php echo ( $results['totalRows'] != 1 ) ? 's' : '' ?> in total.</h2>

      <!-- <p><a href="./">Return to Homepage</a></p> -->

<?php include "templates/include/footer.php" ?>

