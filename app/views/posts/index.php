<?php require APPROOT . '/views/includes/header.php'; ?> 

<!-- section -->
<div class="section">
<!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-8">
            <?php flash('post_message'); ?> 
                <div class="row">
                    <!-- post -->
                   <?php foreach($data['posts'] as $post) : ?>
    
                   <div class="col-md-6">
                  
						<div class="post post-thumb">
							<a class="post-img" href="<?php echo URLROOT; ?>/posts/show/<?php echo $post->postId; ?>"><img src="/images/post-1.jpg" alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-2" href="category.html">JavaScript</a>
									<span class="post-date"><?php echo $post->postCreated;?></span>
                                </div>
								<h3 class="post-title"><a href="<?php echo URLROOT;?>/posts/show/<?php echo $post->postId; ?>"> <?php echo $post->title; ?></a></h3>
                                <h4 id="post-author">Written by <?php echo $post->name; ?></h4>
                                
							</div>
						</div>
					</div>
                   <?php endforeach?>
                    
                    <!-- /post -->
                </div>
            </div>

            <div class="col-md-4">

        <!-- catagories -->
                <div class="aside-widget">
                    <div class="section-title">
                        <h2>Catagories</h2>
                    </div>
                    <div class="category-widget">
                        <ul>
                            <li><a href="#" class="cat-1">Web Design<span>340</span></a></li>
                            <li><a href="#" class="cat-2">JavaScript<span>74</span></a></li>
                            <li><a href="#" class="cat-4">JQuery<span>41</span></a></li>
                            <li><a href="#" class="cat-3">CSS<span>35</span></a></li>
                        </ul>
                    </div>
                </div>
                <!-- /catagories -->
                
                <!-- tags -->
                <div class="aside-widget">
                    <div class="tags-widget">
                        <ul>
                            <li><a href="#">Chrome</a></li>
                            <li><a href="#">CSS</a></li>
                            <li><a href="#">Tutorial</a></li>
                            <li><a href="#">Backend</a></li>
                            <li><a href="#">JQuery</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">JavaScript</a></li>
                            <li><a href="#">Website</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /tags -->
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->


<?php require APPROOT . '/views/includes/footer.php'; ?> 
