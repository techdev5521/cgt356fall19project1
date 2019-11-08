<!-- Start billingDeleteModal<?php echo $i; ?>.php -->

<!-- Edit Shipping Record Modal -->
<div class="modal fade" id="billingDeleteModal<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="billingDeleteModal<?php echo $i; ?>" aria-hidden="true">
    <form action="doBillingDelete.php" method="post">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="billingDeleteModal<?php echo $i; ?>">Delete Billing Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete billing info for that card ending in <strong><?php echo substr($_SESSION['billing'][$i]['cardNumber'], 12); ?></strong> ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times mr-2"></i>Close</button>
                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt mr-2"></i>Delete</button>
                </div>
            </div>
        </div>
    </form>
</div>

<!-- End billingDeleteModal<?php echo $i; ?>.php -->