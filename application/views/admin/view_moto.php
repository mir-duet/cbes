
<div class="grid_12">
    <div class="block-border">
        <div class="block-header">
            <h1>Sortable Table (DataTables)</h1><span></span>
        </div>
        <div class="block-content">
            <table id="table-example" class="table">
                <thead>
                    <tr>
                        <th>Moto Id</th>
                        <th>Moto Title</th>
                        <th>Moto Description</th>
                        <th>Moto Logo</th>
                        <th>Status</th>
                        <th>Action</th>

                    </tr>
                </thead>

                <tbody>
                    <?php
                    //echo '<pre>';
                    //print_r($data['all_category']);
                    //exit();
                    foreach ($all_moto as $v_moto) {
                        ?>
                        <tr class="gradeX">
                            <td><?php echo $v_moto->moto_id ?></td>
                            <td><?php echo $v_moto->moto_title ?></td>
                            <td><?php echo $v_moto->moto_description ?></td>
                            <td><?php echo $v_moto->moto_logo ?></td>
                            <td><?php
                                if ($v_moto->publication_status == 1) {
                                    echo "Published";
                                } else {
                                    echo "Unpublished";
                                }
                                ?>
                            </td>
                            <td class="center">
                                <a href="<?php echo base_url(); ?>super_admin/edit_moto/<?php echo $v_moto->moto_id ?>">Edit</a> ! 
                                <a href="<?php echo base_url(); ?>super_admin/delete_moto/<?php echo $v_moto->moto_id ?>" onclick=" return checkDelete();">Delete</a> !
                                <?php
                                if ($v_moto->publication_status == 1) {
                                    ?>
                                    <a href="<?php echo base_url(); ?>super_admin/unpublish_moto/<?php echo $v_moto->moto_id ?>">Unpublished</a>
                                    <?php
                                } else {
                                    ?>
                                    <a href="<?php echo base_url(); ?>super_admin/publish_moto/<?php echo $v_moto->moto_id ?>">Published</a>
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