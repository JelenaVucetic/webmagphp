<?php require APPROOT . '/views/includes/header.php'; ?> 
<!-- section -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- Post content -->
            <div class="col-md-8">
                <div class="section-row sticky-container">
                    <div class="main-post">
                        <div id="test">
                            <h3><?php echo $data['post']->title; ?></h3>

                            <?php if($data['post']->user_id == $_SESSION['user_id']) : ?>
                            <div class="dropdown">
                                <!-- three dots -->
                                <ul class="dropbtn icons btn-right showLeft" onclick="showDropdown()">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                                <!-- menu -->
                                <div id="myDropdown" class="dropdown-content">
                                    <a href="<?php echo URLROOT;?>/posts/edit/<?php echo $data['post']->id; ?>">Edit</a>
                                    <form action="<?php echo URLROOT;?>/posts/delete/<?php echo $data['post']->id;?>" method="post">
                                        <input type="submit" value="Delete" id="deletebtn">
                                    </form>
                                </div>
                            </div>
                            <?php endif ?>
                        </div>
                  
                       

                        <figure class="figure-img">
                            <img class="img-responsive" src="/images/post-4.jpg" alt="">
                            <figcaption> This is figure caption</figcaption>
                        </figure>
                        <?php echo  htmlspecialchars_decode($data['post']->body); ?>
                    </div>
                    <div class="post-shares sticky-shares">
                        <a href="#" class="share-facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="share-twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="share-google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="share-pinterest"><i class="fa fa-pinterest"></i></a>
                        <a href="#" class="share-linkedin"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-envelope"></i></a>
                    </div>
                </div>

                <!-- ad -->
                <div class="section-row text-center">
                    <a href="#" style="display: inline-block;margin: auto;">
                        <img class="img-responsive" src="./img/ad-2.jpg" alt="">
                    </a>
                </div>
                <!-- ad -->
                
                <!-- author -->
                <div class="section-row">
                    <div class="post-author">
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object" src="/images/author.png" alt="">
                            </div>
                            <div class="media-body">
                                <div class="media-heading">
                                    <h3><?php echo $data['user']->name;?></h3>
                                    
                                </div>
                                <p><?php echo $data['user']->created_at;?></p>
                                <ul class="author-social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /author -->

                <!-- comments -->
                <div class="section-row">
                    <div class="section-title">
                        <h2>3 Comments</h2>
                    </div>

                    <div class="post-comments">
                        <!-- comment -->
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object" src="/images/avatar.png" alt="">
                            </div>
                            <div class="media-body">
                                <div class="media-heading">
                                    <h4>John Doe</h4>
                                    <span class="time">March 27, 2018 at 8:00 am</span>
                                    <a href="#" class="reply">Reply</a>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                                <!-- comment -->
                                <div class="media">
                                    <div class="media-left">
                                        <img class="media-object" src="/images/avatar.png" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="media-heading">
                                            <h4>John Doe</h4>
                                            <span class="time">March 27, 2018 at 8:00 am</span>
                                            <a href="#" class="reply">Reply</a>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>
                                </div>
                                <!-- /comment -->
                            </div>
                        </div>
                        <!-- /comment -->
                    </div>
                </div>
                <!-- /comments -->

                <!-- reply -->
                <div class="section-row">
                    <div class="section-title">
                        <h2>Leave a reply</h2>
                        <p>your email address will not be published. required fields are marked *</p>
                    </div>
                    <form class="post-reply">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <span>Name *</span>
                                    <input class="input" type="text" name="name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <span>Email *</span>
                                    <input class="input" type="email" name="email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="input" name="message" placeholder="Message"></textarea>
                                </div>
                                <button class="primary-button">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /reply -->
            </div>
            <!-- /Post content -->

            <!-- aside -->
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
            <!-- /aside -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->


<?php require APPROOT . '/views/includes/footer.php'; ?> 
