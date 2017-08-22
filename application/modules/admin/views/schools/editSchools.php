<script src="<?= base_url('assets/ckeditor/ckeditor.js') ?>"></script>

<h1><img src="<?= base_url('assets/imgs/blogger.png') ?>" class="header-img" style="margin-top:-2px;"> Publish post</h1>
<hr>
<div class="row">
    <div class="col-sm-8 col-md-7">
        <?php
        /** @var SchoolsModel $schools */
        if (validation_errors()) { ?>
            <hr>
            <div class="alert alert-danger"><?= validation_errors() ?></div>
            <hr>
        <?php }
        ?>
        <?php if ($this->session->flashdata('result_publish')) { ?>
            <hr>
            <div class="alert alert-danger"><?= $this->session->flashdata('result_publish'); ?></div>
            <hr>
        <?php }
        ?>
        <form method="POST" action="/admin/schoolssave" enctype="multipart/form-data">
            <div class="form-group">
                <label>Name </label>
                <input type="text" name="name" value="<?= $schools->getName() ?>" class="form-control">
            </div>
            <div class="form-group">
                <label>Province </label>
                <select name="province" id="province" class="form-control">
                    <?php foreach ($listProvince as $province){ ?>
                        <option value="<?= $province['id'] ?>"><?= $province['name'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label>District </label>
                <select name="district" id="district" class="form-control">
                    <?php foreach ($listDistrict as $district){ ?>
                        <option value="<?= $district['id'] ?>"><?= $district['name'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label>Url </label>
                <input type="text" name="url" value="<?= $schools->getUrl()?>" class="form-control">
            </div>
            <div class="form-group">
                <label>Address </label>
                <input type="text" name="address" value="<?= $schools->getAddress() ?>" class="form-control">
            </div>
            <div class="form-group">
                <label>Phone </label>
                <input type="text" name="phone" value="<?= $schools->getPhone() ?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="description">Description </label>
                <textarea name="description" id="description" rows="50" class="form-control"><?= $schools->getDescription() ?></textarea>
                <script>
                    CKEDITOR.replace('description');
                </script>
            </div>
            <input type="hidden" name="id" value="<?= $schools->getId()?>" >
            <button type="submit" name="submit" class="btn btn-default">Publish</button>
            <?php if ($schools->getId() > 0) { ?>
                <a href="<?= base_url('admin/schools') ?>" class="btn btn-info">Cancel</a>
            <?php } ?>
        </form>
    </div>
</div>
<script>
    var list_district = "<?= json_encode($listDistrict)?>";
</script>