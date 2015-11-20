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
    <form  class="block-content form" action="<?php echo base_url();?>super_admin/update_news" method="post">
        <div class="_100">
            <p><label for="textfield">News Title</label><input id="textfield" name="news_title" class="required" type="text" value="<?php echo $news_info->news_title;?>" />
                <input id="textfield" name="news_id" class="required" type="hidden" value="<?php echo $news_info->news_id;?>" />
            </p>
        </div>

        <div class="_100">
            <p><label for="textarea">News Short Description</label><textarea id="ck_edit_short" name="news_short_description" class="required" rows="5" cols="40"><?php echo $news_info->news_short_description;?></textarea><?php echo display_ckeditor($edit_short['ckeditor']); ?></p>
        </div>
        
        <div class="_100">
            <p><label for="textarea">News Long Description</label><textarea id="ck_edit_long" name="news_long_description" class="required" rows="5" cols="40"><?php echo $news_info->news_long_description;?></textarea><?php echo display_ckeditor($edit_long['ckeditor']); ?></p>
        </div>
        <div class="_50">
            <p>
                <span class="label">Publication Status</span>
                <?php
                if($news_info->publication_status==1)
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
                <li><input type="submit" class="button" value="Update News"></li>
            </ul>
        </div>
    </form>
</div>