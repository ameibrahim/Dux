<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dux Teacher</title>
        <page data-id="Exam"></page> 

        <?php include '../include/teacherImports.php'; ?>

    </head>

    <style>

        .full-width {
            height: 100%;
            width: 100%;

        }
    </style>
    <body>

        <?php include 'components/header.php'; ?>

        <div class="outer-container">
            <?php include 'components/sidebar.php'; ?>
            <div class="main-container">
                <h1 class="large-title">Exam</h1>
                <iframe class="full-width" src="http://dux.aiiot.website/modules/qs/index.html" frameborder="0"></iframe>
            </div>
        </div>
    </body>
</html>