<div class="panel panel-default">
    <div class="panel-body">

        <?php echo make_form_open() ?>
        <?php foreach ($this->setting->forms('create') as $key => $input) { ?>
            <div class="form-group">
                <?php echo make_input($input) ?>
            </div>
        <?php } ?>
        <?php echo make_form_submit() ?>
        <?php echo make_form_close() ?>

    </div>
</div>