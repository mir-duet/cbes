
<div class="grid_12">
    <div class="block-border">
        <div class="block-header">
            <h1>Sortable Table (DataTables)</h1><span></span>
        </div>
        <div class="block-content">
            <table id="table-example" class="table">
                <thead>
                    <tr>
                        <th>News Id</th>
                        <th>News Title</th>
                        <th>News Short Description</th>
                        <th>News Long Description</th>
                        <th>Status</th>
                        <th>Action</th>

                    </tr>
                </thead>

                <tbody>
                    <?php
                    //echo '<pre>';
                    //print_r($data['all_category']);
                    //exit();
                    foreach ($all_news as $v_news) {
                        ?>
                        <tr class="gradeX">
                            <td><?php echo $v_news->news_id ?></td>
                            <td><?php echo $v_news->news_title ?></td>
                            <td><?php echo $v_news->news_short_description ?></td>
                            <td><?php echo $v_news->news_long_description ?></td>
                            <td><?php
                                if ($v_news->publication_status == 1) {
                                    echo "Published";
                                } else {
                                    echo "Unpublished";
                                }
                                ?>
                            </td>
                            <td class="center">
                                <a href="<?php echo base_url(); ?>super_admin/edit_news/<?php echo $v_news->news_id ?>">Edit</a> ! 
                                <a href="<?php echo base_url(); ?>super_admin/delete_news/<?php echo $v_news->news_id ?>" onclick=" return checkDelete();">Delete</a> !
                                <?php
                                if ($v_news->publication_status == 1) {
                                    ?>
                                    <a href="<?php echo base_url(); ?>super_admin/unpublish_news/<?php echo $v_news->news_id ?>">Unpublished</a>
                                    <?php
                                } else {
                                    ?>
                                    <a href="<?php echo base_url(); ?>super_admin/publish_news/<?php echo $v_news->news_id ?>">Published</a>
                                    <?php
                                }
                                ?>
                            </td>
                        </tr> 
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>