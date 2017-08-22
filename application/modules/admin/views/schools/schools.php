<h1><img src="<?= base_url('assets/imgs/blogger.png') ?>" class="header-img" style="margin-top:-2px;"> Top Comments</h1>
<hr>
<?php if ($this->session->flashdata('result_publish')) { ?>
    <hr>
    <div class="alert alert-info"><?= $this->session->flashdata('result_publish') ?></div>
    <?php
}
?>
<div class="row">
    <div class="col-sm-6">
        <form method="GET">
            <div class="input-group">
                <input type="text" class="form-control" name="search" value="<?= @$_GET['search'] ?>" placeholder="Find here">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="submit">Search</button>
                </span>
            </div>
            <?php if (isset($_GET['search'])) { ?>
                <a href="<?= base_url('admin/comment') ?>">Clear search</a>
            <?php } ?>
        </form>
    </div>
</div>
<hr>
<?php
if (!empty($schools)) {
    ?>
    <h1><?= !isset($_GET['search']) ? $page == 0 ? '' : 'Page: ' . floor($page / 20 + 1) : '' ?></h1>
    <div class="row">

            <div class="col-sm-12 col-md-12">
                <ul>
                    <?php
                    foreach ($schools as $row) {
                    ?>
                        <li> <a href="/admin/editschools/<?= $row->getId() ?>"><?= $row->getName(); ?></a></li>
                    <?php } ?>
                </ul>
            </div>

    </div>
<?php } else { ?>
    <div class="alert alert-danger" role="alert">No Schools</div>
<?php } ?>
<?= $links_pagination ?>
