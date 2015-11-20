<div class="block-border">
    <div class="block-header">
        <h1>Form-Elements with Validation
            <?php
            $message=$this->session->userdata('message');
            if(isset($message))
            {
                echo "--".$message;
                $this->session->unset_userdata('message');
                        
            }
            ?>
        </h1><span></span>
    </div>
    <form  class="block-content form" action="<?php echo base_url();?>super_admin/update_moto" method="post">
        <div class="_100">
            <p><label for="textfield">Moto Title</label><input id="textfield" name="moto_title" class="required" type="text" value="<?php echo $moto_info->moto_title;?>" />
                <input id="textfield" name="moto_id" class="required" type="hidden" value="<?php echo $moto_info->moto_id;?>" />
            </p>
        </div>

        <div class="_100">
            <p><label for="textarea">Moto Description</label><textarea id="textarea" name="moto_description" class="required" rows="5" cols="40"><?php echo $moto_info->moto_description;?></textarea></p>
        </div>
        <div class="_100">
            <p>
                <label for="textfield">Moto Logo</label>
                <input id="textfield" name="moto_logo" class="required" type="file" value="<?php echo $moto_info->moto_logo;?>" />
            </p>
        </div>
        <div class="_50">
            <p>
                <span class="label">Publication Status</span>
                <?php
                if($moto_info->publication_status==1)
                {
                ?>
                <label><input checked="checked" type="radio" name="publication_status" value="1" />Published</label>
                <label><input type="radio" name="publication_status" value="0" />Unpublished</label>
               <?php
                }
                else{
               ?> 
                <label><input  type="radio" name="publication_status" value="1" />Published</label>
                <label><input checked="checked" type="radio" name="publication_status" value="0" />Unpublished</label>
                <?php } ?>
            </p>
        </div>
        

        <div class="clear"></div>
        <div class="block-actions">
            <ul class="actions-left">
                <li><a class="button red" id="reset-validate-form" href="javascript:void(0);">Reset</a></li>
            </ul>
            <ul class="actions-right">
                <li><input type="submit" class="button" value="Update Moto"></li>
            </ul>
        </div>
    </form>
</div>