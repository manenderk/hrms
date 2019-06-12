<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HrmsAsset[]|\Cake\Collection\CollectionInterface $hrmsAssets
 */
?>
<style>
ul.tclass-head li span{
    width: 16%;
}
ul.tclass-cell li span{
    width: 16%;
}
</style>
<div class="row">
    <div class="col-md-12">
        <div class="page-title">ASSETS
            <span class="pull-right short-ico">
                <a
                    href="<?php echo $_SERVER["HTTP_REFERER"]; ?>">
                    <button type="button" class="btn btn-labeled btn-default">
                        <span class="btn-label"><i class="fa fa-hand-o-left"></i>
                        </span>Back</button>
                </a>
                <!-- TODO: HIDE THIS AS PER ACL -->
                <a
                    href="<?php echo $this->Url->build(["controller" => "hrms-assets", "action" => "add"]); ?>">
                    <button type="button" class="btn btn-labeled btn-default">
                        <span class="btn-label"><i class="fa fa-plus"></i>
                        </span>Add</button>
                </a>
            </span>
        </div>
    </div>
</div>

<?php echo $this->Form->create('hrms-asset', ['role'=>'form', 'url'=>['action' =>'index']]); ?>
<div class="panel panel-body atsborder m-lr">
    <div class="col-xs-3">
        <div class="form-group m-b">
            <input type="text" placeholder="Search asset name here .." class="form-control input-sm" name="name" value = "<?php echo @ $_POST['name']; ?>">
        </div>
    </div>
    <div class="col-xs-3">
        <div class="form-group">
            <input type="text" placeholder="Search serial number here .." class="form-control input-sm" name="serial_number" value = "<?php echo @ $_POST['serial_number']; ?>">
        </div>
    </div>
    <div class="col-xs-3">
        <div class="form-group">
            <input type="text" placeholder="Search tag number here .." class="form-control input-sm" name="tag_number" value = "<?php echo @ $_POST['tag_number']; ?>">
        </div>
    </div>
    <div class="col-xs-3">
        <div class="input-group m-b">
            <?= $this->Form->control('category', ['options' => $hrmsAssetCategories, 'label' => false, 'class="form-control input-sm', 'empty' => 'Search by category', 'value' => @$_POST['category']] ) ?>
            <span class="input-group-addon">
                <button type="submit" class="tp-style"><i class="fa fa-search"></i>
                </button>
            </span>
        </div>
    </div>
</div>
<?php echo $this->Form->end(); ?>
<div class="rTable" id="hrms-assets">
    <div class="rTableRow">
        <ul class="tclass-head">
            <li>
                <span>
                    <div class="rTableHead"><?=$this->Paginator->sort('name', "Name <em class='fa fa-sort-alpha-desc'></em>", ['escape' => false]);?>
                    </div>
                </span>   
                <span>
                    <div class="rTableHead"><?=$this->Paginator->sort('asset_category_id', "Asset Category <em class='fa fa-sort-alpha-desc'></em>", ['escape' => false]);?>
                    </div>
                </span>   
                <span>
                    <div class="rTableHead"><?=$this->Paginator->sort('serial_number', "Serial Number <em class='fa fa-sort-alpha-desc'></em>", ['escape' => false]);?>
                    </div>
                </span>   
                <span>
                    <div class="rTableHead"><?=$this->Paginator->sort('tag_number', "Tag Number <em class='fa fa-sort-alpha-desc'></em>", ['escape' => false]);?>
                    </div>
                </span>   
                <span>
                    <div class="rTableHead"><?=$this->Paginator->sort('allocated_to_id', "Allocated To <em class='fa fa-sort-alpha-desc'></em>", ['escape' => false]);?>
                    </div>
                </span>                  
                <!-- TODO: HIDE THIS AS PER ACL -->
                <span>
                    <div class="rTableHead">&nbsp;</div>
                </span>
            </li>
        </ul>
    </div>

    <div class="rTableRow" id="newrow">
        <ul class="tclass-cell">
            <?php foreach ($hrmsAssets as $hrmsAsset): ?>
            <li><span>
                    <div class="rTableCell">
                        <a href="<?php echo $this->Url->build(["controller" => "hrms-assets", "action" => "view", $hrmsAsset->id]); ?>"
                            title="Click here to view this asset" data-toggle="tooltip" data-placement="bottom"><?= h($hrmsAsset->name) ?></a>
                    </div>
                </span>
                <span>
                    <div class="rTableCell">
                    <?= $hrmsAsset->has('hrms_asset_category') ? $this->Html->link($hrmsAsset->hrms_asset_category->category_name, ['controller' => 'HrmsAssetCategories', 'action' => 'view', $hrmsAsset->hrms_asset_category->id]) : '' ?></a>
                    </div>
                </span>
                <span>
                    <div class="rTableCell">
                        <?= $hrmsAsset->serial_number; ?>
                    </div>
                </span>
                <span>
                    <div class="rTableCell">
                        <?= $hrmsAsset->tag_number; ?>
                    </div>
                </span>
                <span>
                    <div class="rTableCell">
                    <?= $hrmsAsset->has('user') ? $this->Html->link($hrmsAsset->user->login_name, ['controller' => 'Users', 'action' => 'view', $hrmsAsset->user->id]) : '' ?>
                    </div>
                </span>
                
                <!-- TODO: HIDE THIS AS PER ACL -->
                <span>
                    <div class="rTableCell">
                        <a href="<?php echo $this->Url->build(["controller" => "hrms-assets", "action" => "edit",$hrmsAsset->id]); ?>"
                            title="Edit">
                            <em class="fa fa-pencil-square-o pull-right" title="Click to edit this asset"
                                data-toggle="tooltip" data-placement="left"></em>
                        </a>
                    </div>
                </span>                
            </li>
            <?php endforeach; ?>
        </ul>
        
    </div>


</div>
<!--rTable end here-->
<div class="paginator">
    <ul class="pagination">
        <?php echo $this->Paginator->next('Show more hrmsAssets...'); ?>
    </ul>
</div>
<script>
    // For unlimited scrolling by user
    $(function() {
        var $container = $('#hrmsAssets');
        $container.infinitescroll({
            navSelector: '.next', // selector for the paged navigation 
            nextSelector: '.next a', // selector for the NEXT link (to page 2)
            itemSelector: '#newrow', // selector for all items you'll retrieve
            debug: true,
            dataType: 'html',
            loading: {
                finishedMsg: 'No more hrmsAssets',
                img: 'img/spinner.gif'
            }
        });
    });
</script>
