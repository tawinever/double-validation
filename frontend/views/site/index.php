<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class = "row">
        <div class="col-md-8 col-md-offset-2">
            <div class="jumbotron">
                <h1>Double Validation</h1>
                <br>
                <br>
                <p>
                    Cookies
                    <code>
                        <?php
                        echo Yii::$app->request->cookies['device_id'];
                        ?>
                    </code>
                </p>
                <br>
                <p>
                    Remote IP
                    <code>
                        <?php
                        echo Yii::$app->getRequest()->getUserIP();
                        ?>
                    </code>
                </p>

            </div>

        </div>

    </div>

</div>
