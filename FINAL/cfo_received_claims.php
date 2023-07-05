<?php
$page_title = 'All cfo claims';
require_once('includes/load.php');


$all_claims = find_all('cfo_claims');

?>

<?php include_once('layouts/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <?php echo display_msg($msg); ?>
    </div>
</div>
<div class="row">
    <div class="col-md-7">
        <div class="panel panel-default" style="width: 1000px">
            <div class="panel-heading">
                <strong>
                    <span class="glyphicon glyphicon-th"></span>
                    <span>All Received Claims</span>
                </strong>
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                    <tr>
                        <th class="text-center" style="width: 50px;">#</th>
                        <th>Claims</th>
                        <th style="width: 100px">Employee ID</th>
                        <th>Employee Name</th>
                        <th class="text-center" style="width: 100px;">Date Received</th>
                        <th>Actions</th>




                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($all_claims as $claims):?>
                        <tr>
                            <td class="text-center"><?php echo $claims['id'];?></td>
                            <td>
                                <span class="label label-success"><?php echo "Claim"; ?></span>
                            </td>
                            <td><?php echo remove_junk(ucfirst($claims['emp_id'])); ?></td>
                            <td><?php echo $claims['emp_name']; ?></td>
                            <td class="text-center"><?php echo $claims['dates']; ?></td>
                            <td>
                                <a href="cfo_view_claim.php?id= <?php echo (int) $claims['id'];?>">
                                    <span class="btn btn-primary"><?php echo "View"; ?></span>
                                </a>
                            </td>

                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include_once('layouts/footer.php'); ?>

