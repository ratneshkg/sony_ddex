<div class="box-header well" data-original-title>
    <?php echo $this->Html->tag('h2','<i class="icon-user"></i> Data',array('escape'=>false))?>
</div>
<div class="box-content">
        <?php
        if(!empty($fileData)) {
            echo $fileData;
        }
        ?>     
    <div class="form-actions">
            <?php 
                echo $this->Html->link('Back',array('controller'=>'reports','action'=>'index'),array('class'=>'btn btn-primary'));
            ?>
    </div>
</div>