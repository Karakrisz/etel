<?php

function homeController()
{
    $connection = getConnection();
    $getdailyOffer = dailyOffer($connection);
    $getmonday = monday($connection);
    $menuImageSelect = menuImageSelect($connection);
    return [
        "home",
        [
            "title" => "Kezdőlap",
            "getdailyOffer" => $getdailyOffer,
            "getmonday" => $getmonday,
            "menuImageSelect" => $menuImageSelect
        ]
    ];
}


function placingAnOrderController()
{
    return [
        "placing-an-order",
        [
            "title" => "Rendelés leadása",
        ]
    ];
}

function administController()
{
    $connection = getConnection();
    $getdailyOffer = dailyOffer($connection);
    $getmonday = monday($connection);
    $gettuesday = tuesday($connection);
    $getwednesday = wednesday($connection);
    $getthursday = thursday($connection);
    $getfriday = friday($connection);
    return [
        "administ",
        [
            "title" => "Ételek rögzítése",
            "getdailyOffer" => $getdailyOffer,
            "getmonday" => $getmonday,
            "gettuesday" => $gettuesday,
            "getwednesday" => $getwednesday,
            "getthursday" => $getthursday,
            "getfriday" => $getfriday,
        ]
    ];
}

function weeklyMenuController()
{
    $connection = getConnection();
    $getmonday = monday($connection);
    $gettuesday = tuesday($connection);
    $getwednesday = wednesday($connection);
    $getthursday = thursday($connection);
    $getfriday = friday($connection);
    return [
        "weeklymenu",
        [
            "title" => "Heti menü",
            "getmonday" => $getmonday,
            "gettuesday" => $gettuesday,
            "getwednesday" => $getwednesday,
            "getthursday" => $getthursday,
            "getfriday" => $getfriday,
        ]
    ];
}

function galleryController()
{
    return [
        "gallery",
        [
            "title" => "Képtár"
        ]
    ];
}

function blogController()
{
    return [
        "blog",
        [
            "title" => "Blog"
        ]
    ];
}

function dailyOfferSubmitController()
{
    $dailyoffer_name = $_POST['dailyoffer_name'];
    $dailyoffer_price = $_POST['dailyoffer_price'];
    $dailyoffer_characterization = $_POST['dailyoffer_characterization'];
    $connection = getConnection();
    dailyOfferAppend($connection, $dailyoffer_name, $dailyoffer_price, $dailyoffer_characterization);
    return [
        "redirect:/administ", []
    ];
}


function dailyofferDeleteController($params)
{
    $connection = getConnection();
    dailyOfferDelete($connection, $params["id"]);
    return [
        "redirect:/administ",
        []
    ];
}


function mondaySubmitController()
{
    $monday_name = $_POST['monday_name'];
    $monday_price = $_POST['monday_price'];
    $monday_characterization = $_POST['monday_characterization'];
    $connection = getConnection();
    mondayAppend($connection, $monday_name, $monday_price, $monday_characterization);
    return [
        "redirect:/administ", []
    ];
}

function mondayDeleteController($params)
{
    $connection = getConnection();
    mondayDelete($connection, $params["id"]);
    return [
        "redirect:/administ",
        []
    ];
}

function tuesdaySubmitController()
{
    $tuesday_name = $_POST['tuesday_name'];
    $tuesday_price = $_POST['tuesday_price'];
    $tuesday_characterization = $_POST['tuesday_characterization'];
    $connection = getConnection();
    tuesdayAppend($connection, $tuesday_name, $tuesday_price, $tuesday_characterization);
    return [
        "redirect:/administ", []
    ];
}

function tuesdayDeleteController($params)
{
    $connection = getConnection();
    tuesdayDelete($connection, $params["id"]);
    return [
        "redirect:/administ",
        []
    ];
}

function wednesdaySubmitController()
{
    $wednesday_name = $_POST['wednesday_name'];
    $wednesday_price = $_POST['wednesday_price'];
    $wednesday_characterization = $_POST['wednesday_characterization'];
    $connection = getConnection();
    wednesdayAppend($connection, $wednesday_name, $wednesday_price, $wednesday_characterization);
    return [
        "redirect:/administ", []
    ];
}

function wednesdayDeleteController($params)
{
    $connection = getConnection();
    wednesdayDelete($connection, $params["id"]);
    return [
        "redirect:/administ",
        []
    ];
}

function thursdaySubmitController()
{
    $thursday_name = $_POST['thursday_name'];
    $thursday_price = $_POST['thursday_price'];
    $thursday_characterization = $_POST['thursday_characterization'];
    $connection = getConnection();
    thursdayAppend($connection, $thursday_name, $thursday_price, $thursday_characterization);
    return [
        "redirect:/administ", []
    ];
}

function thursdayDeleteController($params)
{
    $connection = getConnection();
    thursdayDelete($connection, $params["id"]);
    return [
        "redirect:/administ",
        []
    ];
}

function fridaySubmitController()
{
    $friday_name = $_POST['friday_name'];
    $friday_price = $_POST['friday_price'];
    $friday_characterization = $_POST['friday_characterization'];
    $connection = getConnection();
    fridayAppend($connection, $friday_name, $friday_price, $friday_characterization);
    return [
        "redirect:/administ", []
    ];
}

function fridayDeleteController($params)
{
    $connection = getConnection();
    fridayDelete($connection, $params["id"]);
    return [
        "redirect:/administ",
        []
    ];
}

function emailSubmitController()
{
    return [
        "redirect:/placing-an-order", []
    ];
}

function menuImageSubmitController()
{
    $filename = $_FILES["image"]["name"];
    $image_file = $_FILES["image"]["tmp_name"];
    $folder = __DIR__ . "/../imagesuploaded/";
    move_uploaded_file($image_file, $folder . $filename);
    $connection = getConnection();
    menuImageAppend($connection, $folder . $filename);
    return [
        "redirect:/administ", []
    ];
}

function notFoundController()
{
    return [
        "404", [
            "title" => "A keresett oldal nem található."
        ]
    ];
}
