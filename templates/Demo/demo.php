<?php
use function Jaxon\jq;
?>
<?= $this->element('includes/header') ?>

    <div class="container-fluid">
        <div class="row" style="margin-top:30px;">
<?= $this->element('includes/nav') ?>
            <div class="col-sm-9 content">
                <h3 class="page-header"><?= $pageTitle ?></h3>
                <div class="row">
                    <div class="col-md-12" <?= $this->Jaxon->bind($appTest) ?>>
                        Initial content : <?= $this->Jaxon->html($appTest) ?>
                    </div>
                    <div class="col-md-4 margin-vert-10">
                        <select class="form-control" <?= $this->Jaxon->on('change', $appTest->setColor(jq()->val())) ?>>
                            <option value="black" selected="selected">Black</option>
                            <option value="red">Red</option>
                            <option value="green">Green</option>
                            <option value="blue">Blue</option>
                        </select>
                    </div>
                    <div class="col-md-8 margin-vert-10" <?= $this->Jaxon->bind($rqAppButtons) ?>>
                    </div>

                    <div class="col-md-12" <?= $this->Jaxon->bind($extTest) ?>>
                        Initial content : <?= $this->Jaxon->html($extTest) ?>
                    </div>
                    <div class="col-md-4 margin-vert-10">
                        <select class="form-control" <?= $this->Jaxon->on('change', $extTest->setColor(jq()->val())) ?>>
                            <option value="black" selected="selected">Black</option>
                            <option value="red">Red</option>
                            <option value="green">Green</option>
                            <option value="blue">Blue</option>
                        </select>
                    </div>
                    <div class="col-md-8 margin-vert-10" <?= $this->Jaxon->bind($rqExtButtons) ?>>
                    </div>
                </div>
            </div> <!-- class="content" -->
       </div> <!-- class="row" -->
    </div>
<div id="jaxon-init">
<script type='text/javascript'>
    /* <![CDATA[ */
    window.onload = function() {
        <?= $appTest->sayHello(false) ?>;
        <?= $extTest->sayHello(false) ?>;
    };
    /* ]]> */
</script>
</div>

<?= $this->element('includes/footer') ?>
