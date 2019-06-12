<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HrmsAsset $hrmsAsset
 */
?>
<div class="row">
    <div class="col-md-12">
        <div class="page-title">ASSET 
            <span class="pull-right short-ico">

                <a href="<?php echo $_SERVER["HTTP_REFERER"]; ?>"
                    title="Back">
                    <button class="btn btn-labeled btn-default" type="button">
                        <span class="btn-label"><i class="fa fa-hand-o-left"></i>
                        </span>Back</button>
                </a>
                <!-- TODO: HIDE THIS AS PER ACL -->
                <a href="<?php echo $this->Url->build(["controller" => "hrms-assets", "action" => "edit",$hrmsAsset->id]); ?>"
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
                            <div class="text-md">Asset Name</div>
                            <p class="m0"><?= h($hrmsAsset->name) ?>
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
                            <div class="text-md">Asset Category</div>
                            <p class="m0">
                                <?= $hrmsAsset->has('hrms_asset_category') ? $this->Html->link($hrmsAsset->hrms_asset_category->category_name, ['controller' => 'HrmsAssetCategories', 'action' => 'view', $hrmsAsset->hrms_asset_category->id]) : '' ?>
                            </p>

                        </div>
                    </div>
                </div>
                <!-- END panel-->
            </div>
        </div>
    </div>
</div>
<div class="panel widget">
    <div class="panel-body">
        <table class='table table-responsive'>
            <tr>
                <th>Serial Number</th>
                <td><?= $hrmsAsset->serial_number ?></td>
            </tr>
            <tr>
                <th>Tag Number</th>
                <td><?= $hrmsAsset->tag_number ?></td>
            </tr>
            <tr>
                <th>Allocated to</th>
                <td><?= $hrmsAsset->has('user') ? $this->Html->link($hrmsAsset->user->login_name, ['controller' => 'Users', 'action' => 'view', $hrmsAsset->user->id]) : '' ?></td>
            </tr>
        </table>
    </div>
</div>