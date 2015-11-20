<div class="panel panel-default">
    <div class="panel-heading">
        <h2><i class="fa fa-fw fa-gift"></i>Notice Details</h2>
    </div>
    <div class="panel-body">

        <!-- All Content Start -->
        <div class="row">
            <div class="panel-body">


                <!-- Content Here -->
                <div class="col-lg-8">

                    <!-- Blog Post -->

                    <hr>
                    <h3 style="color:#ff9933; font-weight: bold;"><?php echo $news_info->news_title; ?></h3>
                    <!-- Date/Time -->
                    <p class="load"><i class="fa fa-clock-o"></i> Posted on: <?php echo $news_info->created_date_time; ?> <span style="margin-left: 20px;" >Posted by: <a href="#"><?php echo $news_info->author_name; ?></a></span></p>

                    <hr>

                    <!-- Preview Image -->
                    <img class="img-responsive detail_img" src="<?php echo base_url(); ?>images/chairman.jpg" alt="">

                    <hr>

                    <!-- Post Content -->
                    <p><?php echo $news_info->news_long_description; ?>

                    <hr>

                    <!-- Blog Comments -->

                    <!-- Comments Form -->
                    <div class="well">
                        <h4>Leave a Comment:</h4>
                        <form role="form">
                            <div class="form-group">
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>

                    <hr>

                    <!-- Posted Comments -->

                    <!-- Comment -->
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" src="http://placehold.it/64x64" alt="">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">Start Bootstrap
                                <small>August 25, 2014 at 9:30 PM</small>
                            </h4>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </div>
                    </div>

                    <!-- Comment -->
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" src="http://placehold.it/64x64" alt="">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">Start Bootstrap
                                <small>August 25, 2014 at 9:30 PM</small>
                            </h4>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            <!-- Nested Comment -->
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object" src="http://placehold.it/64x64" alt="">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Nested Start Bootstrap
                                        <small>August 25, 2014 at 9:30 PM</small>
                                    </h4>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                </div>
                            </div>
                            <!-- End Nested Comment -->
                        </div>
                    </div>

                </div>

                <!-- Blog Sidebar Widgets Column -->
                <div class="col-md-4">

                    <!-- Blog Search Well -->
                    <div class="well">
                        <h4>Notice and News Search</h4>
                        <div class="input-group">
                            <input type="text" class="form-control">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                        <!-- /.input-group -->
                    </div>

                    <!-- Blog Categories Well -->
                    <div class="well">
                        <h4>Notice and News</h4>
                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="nav">
                                    <?php
                                    foreach ($all_news as $v_news) {
                                        ?>
                                        <li class="">
                                            <div class="upw-content">
                                                <p class="post-title">
                                                    <a href="<?php echo base_url(); ?>home/notice_details/<?php echo $v_news->news_id ?>"><?php echo $v_news->news_title; ?></a>
                                                </p>
                                            </div>
                                        </li>

                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>

                    <!-- Side Widget Well -->
                    <div class="well">
                        <h4>Side Widget Well</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                    </div>

                </div>


            </div>
        </div>

        <!-- All Content End -->
    </div>
</div>
<!-- /.row -->