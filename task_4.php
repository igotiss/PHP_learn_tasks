<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
    </head>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <?php
                                $array = [
                                    [
                                        'divClassName1'     => 'mt-2',
                                        'description'       => 'My Tasks',
                                        'spanContent'       => '130 / 500',
                                        'divClassName2'     => 'bg-fusion-400',
                                        'styleWidth'        => '65',
                                    ],
                                    [
                                        'divClassName1'     => '',
                                        'description'       => 'Transfered',
                                        'spanContent'       => '440 TB',
                                        'divClassName2'     => 'bg-success-500',
                                        'styleWidth'        => '34',
                                    ],
                                    [
                                        'divClassName1'     => '',
                                        'description'       => 'Bugs Squashed',
                                        'spanContent'       => '77%',
                                        'divClassName2'     => 'bg-info-400',
                                        'styleWidth'        => '77'
                                    ],
                                    [
                                        'divClassName1'     => '',
                                        'description'       => 'User Testing',
                                        'spanContent'       => '7 days',
                                        'divClassName2'     => 'bg-primary-300',
                                        'styleWidth'        => '84'
                                    ]
                                ];

                           foreach ($array as $item) : ?>
                            <div class="d-flex <?php echo $item["divClassName1"];?>">
                                <?php echo $item['description'];?>
                                <span class="d-inline-block ml-auto"><?php echo $item['spanContent'];?></span>
                            </div>
                            <div class="progress progress-sm mb-3">
                                <div class="progress-bar <?php echo $item['divClassName2'];?>" role="progressbar" style="width:  <?php echo $item['styleWidth'];?>%;" aria-valuenow="<?php echo $item['styleWidth'];?>" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <?php endforeach;?>

                        </div>
                    </div>
                </div>
            </div>
        </main>
        

        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>
