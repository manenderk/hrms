<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HrmsWorkSchedule $hrmsWorkSchedule
 */
?>
<div class="row">
    <div class="col-md-12">
        <div class="page-title">Work Schedule
            <span class="pull-right short-ico">

                <a href="<?php echo $_SERVER["HTTP_REFERER"]; ?>"
                    title="Back">
                    <button class="btn btn-labeled btn-default" type="button">
                        <span class="btn-label"><i class="fa fa-hand-o-left"></i>
                        </span>Back</button>
                </a>
                <!-- TODO: HIDE THIS AS PER ACL -->
                <a href="<?php echo $this->Url->build(["controller" => "hrms-work-schedules", "action" => "edit",$hrmsWorkSchedule->id]); ?>"
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
        <div class="col-xs-12 pnl-pl">
            <!-- START panel-->
            <div class="panel panel-primary pnl-mb">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <em class="fa fa-globe fa-5x"></em>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="text-md">Schedule Name</div>
                            <p class="m0"><?= h($hrmsWorkSchedule->schedule_name) ?>
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
        <div class="col-xs-12">
            <h3>Work days</h3>
            <table class="table">                           
                <tr>
                    <th scope="row"><?= __('Monday') ?></th>
                    <td><?= $hrmsWorkSchedule->monday ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Tuesday') ?></th>
                    <td><?= $hrmsWorkSchedule->tuesday ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Wednesday') ?></th>
                    <td><?= $hrmsWorkSchedule->wednesday ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Thursday') ?></th>
                    <td><?= $hrmsWorkSchedule->thursday ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Friday') ?></th>
                    <td><?= $hrmsWorkSchedule->friday ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Saturday') ?></th>
                    <td><?= $hrmsWorkSchedule->saturday ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Sunday') ?></th>
                    <td><?= $hrmsWorkSchedule->sunday ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>    