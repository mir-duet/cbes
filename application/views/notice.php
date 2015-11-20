<div class="panel panel-default">
    <div class="panel-heading">
        <h2><i class="fa fa-fw fa-gift"></i>Notice</h2>
    </div>
    <div class="panel-body">

        <!-- All Content Start -->
        <div class="row">
            <div class="panel-body">


                <!-- Content Here -->
                <!-- Blog Post Row -->
                <?php
                foreach ($all_news as $v_news) {
                    ?>
                    <div class="row">
                        <div class="col-md-1 text-center">
                            <p><i class="fa fa-camera fa-4x"></i>
                            </p>
                            <p><?php echo $v_news->created_date_time; ?></p>
                        </div>
                        <div class="col-md-5">
                            <a href="<?php echo base_url(); ?>home/notice_details/<?php echo $v_news->news_id ?>">
                                <img class="img-responsive img-hover" src="<?php echo base_url(); ?>images/chairman.jpg" alt="">
                            </a>
                        </div>
                        <div class="col-md-6">
                            <h3>
                                <a href="<?php echo base_url(); ?>home/notice_details/<?php echo $v_news->news_id ?>"><?php echo $v_news->news_title; ?></a>
                            </h3>
                            <p>by <a href="#"><?php echo $v_news->author_name; ?></a>
                            </p>
                            <p><?php echo $v_news->news_short_description; ?></p>
                            <a class="btn btn-primary" href="<?php echo base_url(); ?>home/notice_details/<?php echo $v_news->news_id ?>">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <br />
                <?php } ?>
                <!-- /.row -->
                <!-- Pager -->
                <div class="row">
                    <ul class="pager">
                        <li class="previous"><a href="#">&larr; Older</a>
                        </li>
                        <li class="next"><a href="#">Newer &rarr;</a>
                        </li>
                    </ul>
                </div>


            </div>
        </div>

        <!-- All Content End -->
    </div>
</div>
<!-- /.row -->