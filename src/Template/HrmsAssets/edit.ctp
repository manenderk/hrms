<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HrmsAsset $hrmsAsset
 */
?>
<div class="row">
    <div class="col-md-12">
        <div class="page-title">ASSETS <small>Edit Asset</small>
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
<?= $this->Form->create($hrmsAsset, ['id'=>'hrms-asset']); ?>
<div class="wrapper bg-white atsborder">
    <!-- START panel-->
    <div class="panel-body">
        <div class="row form-group">
            <div class="col-lg-12 col-sm-12 col-md-9 col-xs-12">
                <label class="control-label text-center">Asset Name</label>
                <?php echo $this->Form->control('name', ['label'=>false, 'placeholder'=>'Enter asset name','class'=>'bg-gray form-control', 'required']); ?>
                <span id='message'></span>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-lg-12 col-sm-12 col-md-9 col-xs-12">
                <label class="control-label text-center">Asset Name</label>
                <?php echo $this->Form->control('asset_category_id', ['label'=>false, 'empty'=>'Select asset category','class'=>'bg-gray form-control', 'options' => $hrmsAssetCategories, 'required']); ?>
                <span id='message'></span>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-lg-12 col-sm-12 col-md-9 col-xs-12">
                <label class="control-label text-center">Serial Number</label>
                <?php echo $this->Form->control('serial_number', ['label'=>false, 'placeholder'=>'Enter serial number','class'=>'bg-gray form-control']); ?>
                <span id='message'></span>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-lg-12 col-sm-12 col-md-9 col-xs-12">
                <label class="control-label text-center">Tag Number</label>
                <?php echo $this->Form->control('tag_number', ['label'=>false, 'placeholder'=>'Enter tag number','class'=>'bg-gray form-control']); ?>
                <span id='message'></span>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-lg-12 col-sm-12 col-md-9 col-xs-12">
                <label class="control-label text-center">Allocated to</label>
                <?php echo $this->Form->control('allocated_to_id', ['label'=>false, 'empty'=>'Selected allocated to','class'=>'bg-gray form-control', 'options' => $users]); ?>
                <span id='message'></span>
            </div>
        </div>
        
        <div class="form-group row">
            <div class=" col-lg-12 col-sm-12">
                <button class="btn btn-labeled btn-success pull-right" type="submit" id="submitBtn"
                    title="Click here to save this asset" data-toggle="tooltip" data-placement="bottom">
                    <i class="fa fa-hdd-o" aria-hidden="true"></i> Save</button>
                <span id="valid-msg"></span>
            </div>
        </div>
    </div>
</div>


<?= $this->Form->end() ?>
<script>
    $("#cancelBtn").click(function() {
        location.href =
            "<?php echo $this->Url->build(["controller" => "hrms-asset-categories","action" => "index"]);?>";
    });
    $('#departments').submit(function() {
        $('#submitBtn').attr("disabled", true);
        $('#valid-msg').html('Wait...');
    });
</script>