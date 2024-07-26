<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/fonts/fonts.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>

    <header class="position-sticky top-0" style="background:rgba(255 255 255 / 90%);backdrop-filter:blur(2px); z-index:11; height:100px;">
        <div class="container-xl">
            <div class="d-flex justify-content-between align-items-center">
                <div class="logo" style="max-width: 170px; object-fit:cover; padding:10px">
                    <a href="<?= base_url() ?>">
                        <img class="w-100" src="<?= base_url() ?>assets/images/Omnicore-new-logo-4.svg" id="logo-img" alt="logo">
                    </a>
                </div>
                <ul style="margin-bottom: 0; padding-left:0;" class="d-flex flex-wrap gap-1 list-style-none"></ul>
                <ul class="d-flex list-style-none" style="margin-bottom: 0;">

                    <li class="subscriptions text-center d-flex justify-content-center align-items-center py-2 px-3 border cursor-pointer" style="padding:13px 37px;background-color:#0f3f6e;">
                        <a href="<?= base_url('subscribe') ?>" class="text-white" style="line-height:20px" target="_blank" rel="noopener noreferrer">Subscriptions</a>
                    </li>
                    <li class="NewsLetter  text-center d-flex justify-content-center align-items-center  py-2 px-3 border cursor-pointer" style="border-width:1px;border-style:solid;padding:13px 37px;">
                        <a href="<?= base_url('newsletter') ?>" class="text-dark" target="_blank" rel="noopener noreferrer">NewsLetter</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>