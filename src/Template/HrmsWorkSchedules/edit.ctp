<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HrmsWorkSchedule $hrmsWorkSchedule
 */
?>

<div class="row">
    <div class="col-md-12">
        <div class="page-title">WORK SCHEDULES <small>Edit Work Schedule</small>
            <span class="pull-right short-ico">
                <a
                    href="<?php echo $_SERVER["HTTP_REFERER"]; ?>">
                    <button class="btn btn-labeled btn-default" type="button">
                        <span class="btn-label"><i class="fa fa-hand-o-left"></i>
                        </span>Back</button>
                </a>
                <a id="cancelBtn" title="Cancel">
                    <button class="btn btn-labeled btn-default" type="button">Close
                        <span class="btn-label btn-label-right"><i class="fa fa-close"></i>
                        </span>
                    </button>
                </a>
            </span>
        </div>
    </div>
</div>
<?= $this->Form->create($hrmsWorkSchedule) ?>
<div class="wrapper bg-white atsborder">
    <!-- START panel-->
    <div class="panel-body">
        <div class="row form-group">
            <div class="col-lg-12 col-sm-12 col-md-9 col-xs-12">
                <label class="control-label text-center">Schedule Name</label>
                <?php echo $this->Form->control('schedule_name', ['label'=>false, 'placeholder'=>'Enter schedule name','class'=>'bg-gray form-control', 'required']); ?>
                <span id='message'></span>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <h3>Work Days</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                <?= $this->Form->control('monday'); ?>
            </div>
            <div class="col-sm-2">
                <?= $this->Form->control('tuesday'); ?>
            </div>
            <div class="col-sm-2">
                <?= $this->Form->control('wednesday'); ?>
            </div>
            <div class="col-sm-2">
                <?= $this->Form->control('thursday'); ?>
            </div>
            <div class="col-sm-2">
                <?= $this->Form->control('friday'); ?>
            </div>
            <div class="col-sm-2">
                <?= $this->Form->control('saturday'); ?>
            </div>
            <div class="col-sm-2">
                <?= $this->Form->control('sunday'); ?>
            </div>
        </div>
        <div class="form-group row">
            <div class=" col-lg-12 col-sm-12">
                <button class="btn btn-labeled btn-success pull-right" type="submit" id="submitBtn"
                    title="Click here to save this schedule" data-toggle="tooltip" data-placement="bottom">
                    <i class="fa fa-hdd-o" aria-hidden="true"></i> Save</button>
                <span id="valid-msg"></span>
            </div>
        </div>
    </div>
</div>
<?= $this->Form->end() ?>