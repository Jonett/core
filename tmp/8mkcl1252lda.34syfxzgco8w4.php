<!DOCTYPE html>
<html lang="<?= ($LANGUAGE) ?>">
    <head>
        <?php echo $this->render($headers,NULL,get_defined_vars(),0); ?>
    </head>
    <body>
        <div class="container">
            <?php echo $this->render($view,NULL,get_defined_vars(),0); ?>
        </div>
    </body>
</html>
