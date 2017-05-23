<link href="<?= base_url('assets/css/bootstrap-toggle.min.css') ?>" rel="stylesheet">
<div>
    <h1><img src="<?= base_url('assets/imgs/orders.png') ?>" class="header-img" style="margin-top:-2px;"> Order Edit</h1>
    <a href="<?= base_url(PATH_ADMIN.'/orders') ?>" class="pull-right orders-settings"><i class="fa fa-angle-left" aria-hidden="true"></i> <span>Back</span></a>
</div>
<hr>
<div class="table-responsive">
    <div class="row booking-detail">
        <?php
        $arrStatus = getArrayStatus();
        ?>
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <span class="h4">Booking</span>
                </header>
                <form id="frm-booking" action="" method="post">
                    <input type="hidden" name="refno" value="<?php echo $booking->id; ?>">
                    <div class="row customer">
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-4">
                                    <label>Customer</label>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" name="customer_name" id="customer_name"
                                           value="<?php echo $traveller->name; ?>"  />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <label>Email</label>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" name="customer_email" id="customer_email"
                                           value="<?php echo $traveller->email; ?>"  />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <label>Phone</label>
                                </div>
                                <div class="col-lg-8">
                                    <input type="tel" name="customer_phone" id="customer_phone"
                                           value="<?php echo $traveller->phone; ?>"  />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <label>Address</label>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" name="customer_address" id="customer_address"
                                           value="<?php echo $traveller->address; ?>"  />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-4">
                                    <label>Status</label>
                                </div>
                                <div class="col-lg-8">
                                    <select name="booking_status" id="booking_status">
                                        <?php foreach ($arrStatus as $code=>$name) {
                                            ?>
                                            <option value="<?php echo $code; ?>" <?php if($booking->status == $code) echo 'selected'; ?>><?php echo $name; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <label>Date</label>
                                </div>
                                <div class="col-lg-8">
                                    <?php echo $booking->created?date('d M Y', $booking->created):''; ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <label>Total</label>
                                </div>
                                <div class="col-lg-8">
                                    <label class="auto-number" id="total-booking"><?php echo (float)$booking->total; ?></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="row">
                    <div class="col-lg-12 div-action"><button id="add-item">Them San Pham</button> </div>
                    <div class="col-lg-12">
                        <table class="table m-b-none text-sm">
                            <thead>
                            <tr>
                                <th width="10%">ID</th>
                                <th width="20%">Product</th>
                                <th width="10%">Color</th>
                                <th width="10%">Size</th>
                                <th width="10%">Quantity</th>
                                <th width="10%">Status</th>
                                <th width="20%">Total</th>
                                <th width="10%"></th>
                            </tr>
                            </thead>
                            <tbody id="list-items">
                            <?php
                            if ( isset($items) && !empty($items)) { ?>
                                <?php foreach ($items as $item) {
                                    /** @var BookingDetailModel $item */
                                    ?>
                                    <tr class="alert-success">
                                        <td>
                                            <?php echo $item->id; ?>
                                        </td>
                                        <td><?php echo $item->product_name; ?></td>
                                        <td><?php echo isset($list_color[$item->color])?$list_color[$item->color]:''; ?></td>
                                        <td><?php echo isset($list_size[$item->size])?$list_size[$item->size]:''; ?></td>
                                        <td>
                                            <?php echo $item->quantity; ?>
                                        </td>
                                        <td><?php echo isset($arrStatus[$item->status])?$arrStatus[$item->status]:''; ?></td>
                                        <td class="auto-number"><?php echo $item->total; ?></td>
                                        <td>
                                            <a href="#" class="edit-item" data-item="<?php echo $item->id; ?>">Edit</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </section>
        </div>
        <div class="col-lg-12 div-action">
            <button type="button" class="btn btn-primary" id="btn-save">Save</button>
            <button type="button" class="btn btn-default" id="btn-close">Close</button>
        </div>
    </div>
    <div id="frm-edit" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Edit</h4>
                </div>
                <div class="modal-body">
                    <form id="frm-edit-item" name="frm-edit-item">
                        <input type="hidden" name="refno" value="<?php echo $booking->id; ?>">
                        <input type="hidden" value="" name="item_id" id="item_id" />
                        <div class="row">
                            <div class="col-lg-3">Product</div>
                            <div class="col-lg-9">
                                <select name="product" id="product">
                                    <?php foreach ($products as $product) {
                                        /**@var Product_model  $product*/
                                        ?>
                                        <option value="<?php echo $product->id; ?>"><?php echo $product->name; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">Color</div>
                            <div class="col-lg-9">
                                <select name="color" id="color">
                                    <?php foreach ($list_color as $code=>$name) {
                                        ?>
                                        <option value="<?php echo $code; ?>"><?php echo $name; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">Size</div>
                            <div class="col-lg-9">
                                <select name="size" id="size">
                                    <?php foreach ($list_size as $code=>$name) {
                                        ?>
                                        <option value="<?php echo $code; ?>"><?php echo $name; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">Quantity</div>
                            <div class="col-lg-9">
                                <select name="quantity" id="quantity">
                                    <?php for ($i=1;$i<10;$i++) {
                                        ?>
                                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">Status</div>
                            <div class="col-lg-9">
                                <select name="status" id="status">
                                    <?php foreach ($arrStatus as $code=>$name) {
                                        ?>
                                        <option value="<?php echo $code; ?>"><?php echo $name; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">Price</div>
                            <div class="col-lg-9">
                                <input type="text" class="price" value="" id="price"/>
                                <input type="hidden" value="" id="price-org" name="price" />
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="btn-save-item" data-dismiss="modal">Save</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        var arr_color = '<?php echo json_encode($list_color); ?>';
        var arr_size = '<?php echo json_encode($list_size); ?>';
        var arr_status = '<?php echo json_encode($arrStatus); ?>';
    </script>
</div>
<script src="<?= base_url('assets/js/bootstrap-toggle.min.js') ?>"></script>
