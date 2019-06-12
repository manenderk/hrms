<div class="row">
    <div class="col-md-12">
        <div class="page-title">EMPLOYEE SWIPE <small></small>
            <span class="pull-right short-ico">
                <a
                    href="<?php echo $_SERVER["HTTP_REFERER"]; ?>">
                    <button class="btn btn-labeled btn-default" type="button">
                        <span class="btn-label"><i class="fa fa-hand-o-left"></i>
                        </span>Back</button>
                </a>             
            </span>
        </div>
    </div>
</div>
<div class="wrapper bg-white atsborder">
    <!-- START panel-->
    <div class="panel-body">
        <div class="row">
            <div class="col-sm-12 text-center" id="swipe-message">
                
            </div>
            <div class="col-sm-12 text-center">
                <?= $this->Form->create() ?>
                <input type="text" name="action" value="<?= $swipeAction ?>" hidden >
                <button type="submit" class="btn btn-primary"><?= $swipeAction ?></button>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
<script>

</script>