<!-- Marketing Icons Section -->
<div class="row">
    <div class="col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4><i class="fa fa-fw fa-check"></i> Notice and News</h4>
            </div>
            <div class="panel-body">
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
                <a href="<?php echo base_url(); ?>home/notice.php" class="btn btn-default">Past Notice and News</a>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4><i class="fa fa-fw fa-check"></i>Important Link</h4>
            </div>
            <div class="panel-body">
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
    </div>
    <div class="col-md-9">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4><i class="fa fa-fw fa-gift"></i>BOF English Medium School</h4>
            </div>
            <div class="panel-body">
                <h1 class="msg_title">Message form Chairman</h1>
                <div class="clr"> </div>
                <img class="img-responsive img-thumbnail imageContainer" src="<?php echo base_url(); ?>images/chairman.jpg" alt="LOGO">
                <p>Welcome to <span style="font-weight: bold; color: #4f6228;font-size: 120%;">BOF English School.</span> We afford top-level research, analysis, planning and strategic counsel in support of clients’ Energy Efficiency (EE) and Renewable Energy (RE) goals for new industries as well as to enhance efficiency for prevailing industries. Our clients include leading utilities, government agencies, non-profits and private firms throughout the home and abroad Asia, Europe, Canada and America. They seek our help to achieve energy efficiency, economic or environmental goals through EE/RE. They may ask us to pinpoint options, to assess their relative costs and benefits, to define policy and regulatory frameworks, to develop or evaluate tiny and longstanding plans, and to design and implement the strategies needed to achieve their goals. </p>
                <a href="<?php echo base_url(); ?>/home/chairman_message.php" class="btn btn-default">Read More</a>
            </div>
            <div class="panel-body">
                <h1 class="msg_title">Message form Principal</h1>
                <div class="clr"> </div>
                <img class="img-responsive img-thumbnail imageContainer" src="<?php echo base_url(); ?>images/chairman.jpg" alt="LOGO">
                <p>Welcome to <span style="font-weight: bold; color: #4f6228;font-size: 120%;">BOF English School.</span> We afford top-level research, analysis, planning and strategic counsel in support of clients’ Energy Efficiency (EE) and Renewable Energy (RE) goals for new industries as well as to enhance efficiency for prevailing industries. Our clients include leading utilities, government agencies, non-profits and private firms throughout the home and abroad Asia, Europe, Canada and America. They seek our help to achieve energy efficiency, economic or environmental goals through EE/RE. They may ask us to pinpoint options, to assess their relative costs and benefits, to define policy and regulatory frameworks, to develop or evaluate tiny and longstanding plans, and to design and implement the strategies needed to achieve their goals. </p>
                <a href="<?php echo base_url(); ?>/home/principal_message.php" class="btn btn-default">Read More</a>
            </div>
        </div>
    </div>
</div>