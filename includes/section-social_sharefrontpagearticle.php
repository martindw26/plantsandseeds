<?php
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>

<hr class="horizontal-line">
<div class="d-inline-flex align-items-start p-3">
  <div class="row">
  Share this:

    <div class="col">
	<a class="bi bi-facebook text-dark m-2 p-2" width="48" height="48" href="http://www.facebook.com/sharer.php?u=<?php the_permalink() ?>" 				target="_blank" /></a>
    </div>

    <div class="col">
	<a class="bi bi-twitter text-dark m-1 p-2" width="48" height="48" href="http://twitter.com/share?u=<?php echo $actual_link;?>&text=plantsandseeds.co.uk-<?php 	the_permalink() ?>&hashtags=plantsandseeds.co.uk" target="_blank" /></a>
    </div>

    <div class="col">
	<a class="bi bi-reddit text-dark m-1 p-2" width="48" height="48" href="http://reddit.com/submit?url=<?php the_permalink() ?>&title=plantsandseeds.co.uk" target="_blank" />	</a>	
    </div>

    <div class="col">
                     <a class="bi bi-linkedin text-dark m-1 p-2" width="48" height="48" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink() ?>" 	target="_blank" /></a>
    </div>

    <div class="col">
       <a class="bi bi-envelope text-dark m-1 p-2" width="48" height="48" 
         href="mailto:?Subject=plantsandseeds.co.uk.co.uk | <?php echo get_the_title();?>&body=Check%20out%20this%20artile!%20<?php echo get_the_title();?><?php the_permalink()  
        ?>" target="_blank" /></a>    
    </div>
  </div>
</div>
<hr class="horizontal-line">

