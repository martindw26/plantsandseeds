<?php
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>


<div class="container d-inline-flex bg-white pt-2 pb-2 border border-1 border-dark">
  <div class="row">
   <h6>Share this: </h6>

    <div class="col">
	<a class="bi bi-facebook text-dark  p-2" width="48" height="48" href="http://www.facebook.com/sharer.php?u=<?php the_permalink() ?>" 				target="_blank" /></a>
    </div>

    <div class="col">
	<a class="bi bi-twitter text-dark  p-2" width="48" height="48" href="http://twitter.com/share?u=<?php echo $actual_link;?>&text=techhobbyist-<?php 	the_permalink() ?>&hashtags=techhobbyist" target="_blank" /></a>
    </div>

    <div class="col">
	<a class="bi bi-reddit text-dark p-2" width="48" height="48" href="http://reddit.com/submit?url=<?php the_permalink() ?>&title=techhobbyist" target="_blank" />	</a>	
    </div>

    <div class="col">
                     <a class="bi bi-linkedin text-dark p-2" width="48" height="48" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink() ?>" 	target="_blank" /></a>
    </div>

    <div class="col">
       <a class="bi bi-envelope text-dark  p-2" width="48" height="48" 
         href="mailto:?Subject=techhobbyist.co.uk | <?php echo get_the_title();?>&body=Check%20out%20this%20artile!%20<?php echo get_the_title();?><?php the_permalink()  
        ?>" target="_blank" /></a>    
    </div>
  </div>
</div>
