
<div class="grid_12">
    <div class="block-border">
        <div class="block-header">
            <h1>Sortable Table (DataTables)</h1><span></span>
        </div>
        <div class="block-content">
            <table id="table-example" class="table">
                <thead>
                    <tr>
                        <th>User Id</th>
                        <th>Full Name</th>
                        <th>Phone Number</th>
                        <th>Email Address</th>
                        <th>User Message</th>
                        <th>Action</th>

                    </tr>
                </thead>

                <tbody>
                    <?php
                    //echo '<pre>';
                    //print_r($data['all_category']);
                    //exit();
                    foreach ($all_user_message as $v_message) {
                        ?>
                        <tr class="gradeX">
                            <td><?php echo $v_message->user_id ?></td>
                            <td><?php echo $v_message->full_name ?></td>
                            <td><?php echo $v_message->phone_number ?></td>
                            <td><?php echo $v_message->email_address ?></td>
                            <td><?php echo $v_message->user_message ?></td>
                            <td class="center">
                                <a href="<?php echo base_url(); ?>super_admin/delete_user_message/<?php echo $v_message->user_id ?>" onclick=" return checkDelete();">Delete</a> !
                            </td>
                        </tr> 
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>