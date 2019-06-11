<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CustomField $customField
 */
?>
<div class="row">
    <div class="col-md-12">
        <div class="page-title">CUSTOM FIELD
            <span class="pull-right short-ico">

                <a href="<?php echo $_SERVER["HTTP_REFERER"]; ?>"
                    title="Back">
                    <button class="btn btn-labeled btn-default" type="button">
                        <span class="btn-label"><i class="fa fa-hand-o-left"></i>
                        </span>Back</button>
                </a>
                <!-- TODO: HIDE THIS AS PER ACL -->
                <a href="<?php echo $this->Url->build(["controller" => "hrms-departments", "action" => "edit",$customField->id]); ?>"
                    title="Edit">
                    <button class="btn btn-labeled btn-default" type="button">Edit
                        <span class="btn-label btn-label-right"><i class="fa fa-pencil-square-o"></i>
                        </span>
                    </button>
                </a>
            </span>
        </div>
    </div>
</div>
<div class="panel widget">
    <div class="panel-body">
        <div class="col-lg-6 col-md-6">
            <!-- START panel-->
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <em class="fa fa-globe fa-5x"></em>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="text-md">Custom Field Name</div>
                            <p class="m0"><?= h($customField->field_name) ?>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- END panel-->
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <!-- START panel-->
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <em class="fa fa-gear fa-5x"></em>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="text-md">Custom Field Type</div>
                            <p class="m0"><?= h($customField->custom_field_type->field_type) ?>
                            </p>

                        </div>
                    </div>
                </div>
                <!-- END panel-->
            </div>
        </div>
        <?php if (!empty($choices)) : ?>
        <div class="col-lg-6 col-md-6">
            <!-- START panel-->
            <div class="panel panel-success">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <em class="fa fa-bars fa-5x"></em>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="text-md">Dropdown Choices</div>
                            <?php foreach ($choices as $choice) : ?>
                            <p class="m0"><?= h($choice) ?>
                            </p>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <!-- END panel-->
            </div>
        </div>
        <?php endif; ?>

    </div>
</div>