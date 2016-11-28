<?php if( $this->editmode && $this->notifications['error'] === TRUE ) { ?>
    <div class="alert alert-danger"><?= $this->notifications['message']; ?></div>
<?php } ?>

<?php if ($this->form) { ?>

    <?php if( !empty( $this->messages ) ) { ?>
        <?= $this->messages; ?>
    <?php } ?>

    <div class="row">

        <div class="form-wrapper">

            <div class="col-xs-12">
                <?=$this->form;?>
            </div>

        </div>

    </div>

<?php } ?>