<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HrmsWorkSchedule $hrmsWorkSchedule
 */
?>
<style>
    .message{
        color: red;
        min-height: 36px;
    }
</style>
<div class="row">
    <div class="col-md-12">
        <div class="page-title">WORK SCHEDULES <small>Add Work Schedule</small>
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
<?= $this->Form->create($hrmsWorkSchedule, ['id' => 'work-schedule-form']) ?>
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
                <?= $this->Form->control('monday_hours', ['type' => 'text', 'class' => "form-control hours-input", 'required' => false]); ?>
                <p class="message"></p>
            </div>
            <div class="col-sm-2">
                <?= $this->Form->control('tuesday'); ?>
                <?= $this->Form->control('tuesday_hours', ['type' => 'text', 'class' => "form-control hours-input", 'required' => false]); ?>
                <p class="message"></p>
            </div>
            <div class="col-sm-2">
                <?= $this->Form->control('wednesday'); ?>
                <?= $this->Form->control('wednesday_hours', ['type' => 'text', 'class' => "form-control hours-input", 'required' => false]); ?>
                <p class="message"></p>
            </div>
            <div class="col-sm-2">
                <?= $this->Form->control('thursday'); ?>
                <?= $this->Form->control('thursday_hours', ['type' => 'text', 'class' => "form-control hours-input", 'required' => false]); ?>
                <p class="message"></p>
            </div>
            <div class="col-sm-2">
                <?= $this->Form->control('friday'); ?>
                <?= $this->Form->control('friday_hours', ['type' => 'text', 'class' => "form-control hours-input", 'required' => false]); ?>
                <p class="message"></p>
            </div>
            <div class="col-sm-2">
                <?= $this->Form->control('saturday'); ?>
                <?= $this->Form->control('saturday_hours', ['type' => 'text', 'class' => "form-control hours-input", 'required' => false]); ?>
                <p class="message"></p>
            </div>
            <div class="col-sm-2">
                <?= $this->Form->control('sunday'); ?>
                <?= $this->Form->control('sunday_hours', ['type' => 'text', 'class' => "form-control hours-input", 'required' => false]); ?>
                <p class="message"></p>
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

<script>
    $('#work-schedule-form').submit(function(e){
        var decimalPattern = /(\d+)(\.)*(\d)*/;
        var flag = false;
        $('.hours-input').each(function(){
            if($(this).val() == ''){
                $(this).val('0');
            }
            //console.log(decimalPattern.test(parseFloat($(this).val())), $(this).val());
            if(!decimalPattern.test(parseFloat($(this).val())) || parseFloat($(this).val()) > 24){
                flag = true;
                $(this).parent().siblings('.message').text('Enter valid hours');
            }
            else{
                $(this).parent().siblings('.message').text('');
            }           
        })

        if(flag){
            e.preventDefault();
        }
        
    });
</script>

