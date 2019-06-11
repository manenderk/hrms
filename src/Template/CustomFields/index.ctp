<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CustomField[]|\Cake\Collection\CollectionInterface $customFields
 */
?>
<div class="row">
    <div class="col-md-12">
        <div class="page-title">EMPLOYEE CUSTOM FIELDS
            <span class="pull-right short-ico">
                <a
                    href="<?php echo $_SERVER["HTTP_REFERER"]; ?>">
                    <button type="button" class="btn btn-labeled btn-default">
                        <span class="btn-label"><i class="fa fa-hand-o-left"></i>
                        </span>Back</button>
                </a>
                <!-- TODO: HIDE THIS AS PER ACL -->
                <a
                    href="<?php echo $this->Url->build(["controller" => "CustomFields", "action" => "add"]); ?>">
                    <button type="button" class="btn btn-labeled btn-default">
                        <span class="btn-label"><i class="fa fa-plus"></i>
                        </span>Add</button>
                </a>
            </span>
        </div>
    </div>
</div>

<?php echo $this->Form->create('custom-fields', ['role'=>'form', 'url'=>['action' =>'index']]); ?>
<div class="panel panel-body atsborder m-lr">
    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
        <div class="input-group m-b">
            <input type="text" placeholder="Search custom field here .." class="form-control input-sm" name="name" value = "<?php echo @ $_POST['name']; ?>">
            <span class="input-group-addon">
                <button type="submit" class="tp-style"><i class="fa fa-search"></i>
                </button>
            </span>
        </div>
    </div>
</div>
<?php echo $this->Form->end(); ?>
<div class="rTable" id="job-titles">
    <div class="rTableRow">
        <ul class="tclass-head">
            <li>
                <span>
                    <div class="rTableHead"><?=$this->Paginator->sort('field_name', "Field Name <em class='fa fa-sort-alpha-desc'></em>", ['escape' => false]);?>
                    </div>                   
                </span>   
                <span>
                     <div class="rTableHead"><?=$this->Paginator->sort('field_type_id', "Field Type <em class='fa fa-sort-alpha-desc'></em>", ['escape' => false]);?>
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
            <?php foreach ($customFields as $customField): ?>
            <li><span>
                    <div class="rTableCell">
                        <a href="<?php echo $this->Url->build(["controller" => "CustomFields", "action" => "view", $customField->id]); ?>"
                            title="Click here to view this Custom Field" data-toggle="tooltip" data-placement="bottom"><?= h($customField->field_name) ?></a>
                    </div>
                </span>
                <span>
                    <div class="rTableCell">
                        <?= $customField->custom_field_type->field_type ?>
                    </div>
                </span>

                
                <!-- TODO: HIDE THIS AS PER ACL -->
                <span>
                    <div class="rTableCell">
                        <a href="<?php echo $this->Url->build(["controller" => "CustomFields", "action" => "edit",$customField->id]); ?>"
                            title="Edit">
                            <em class="fa fa-pencil-square-o pull-right" title="Click to edit this custom field"
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
        <?php echo $this->Paginator->next('Show more departments...'); ?>
    </ul>
</div>
<script>
    // For unlimited scrolling by user
    $(function() {
        var $container = $('#job-titles');
        $container.infinitescroll({
            navSelector: '.next', // selector for the paged navigation 
            nextSelector: '.next a', // selector for the NEXT link (to page 2)
            itemSelector: '#newrow', // selector for all items you'll retrieve
            debug: true,
            dataType: 'html',
            loading: {
                finishedMsg: 'No more departments',
                img: 'img/spinner.gif'
            }
        });
    });
</script>
