<?= $this->extend('templates/base') ?>
<?= $this->section('content') ?>
<div class="card">
    <div class="card-body">
        <h4 class="card-title">let there be light, within.</h4>
        <a href="<?= base_url('login') ?>" class="btn btn-primary">
            login page
        </a>
        <a href="<?= base_url('error') ?>" class="btn btn-danger">
            error page
        </a>
    </div>
</div>
<?= $this->include('templates/footer_script') ?>
<?= $this->endSection() ?>