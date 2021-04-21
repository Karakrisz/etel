<?php
require_once "config.php";
ob_start();

$uri = $_SERVER["REQUEST_URI"];
$cleaned = explode("?", $uri)[0];

route('/', 'homeController');
route('/placing-an-order', 'placingAnOrderController');
route('/administ', 'administController');
route('/weeklymenu', 'weeklyMenuController');
route('/gallery', 'galleryController');
route('/blog', 'blogController');

route('/dailyOfferSubmit', 'dailyOfferSubmitController', "POST");
route('/administ/(?<id>[\d]+)/dailyofferdelete', 'dailyofferDeleteController', "POST");

route('/mondaySubmit', 'mondaySubmitController', "POST");
route('/administ/(?<id>[\d]+)/mondaydelete', 'mondayDeleteController', "POST");

route('/tuesdaySubmit', 'tuesdaySubmitController', "POST");
route('/administ/(?<id>[\d]+)/tuesdaydelete', 'tuesdayDeleteController', "POST");

route('/wednesdaySubmit', 'wednesdaySubmitController', "POST");
route('/administ/(?<id>[\d]+)/wednesdaydelete', 'wednesdayDeleteController', "POST");

route('/thursdaySubmit', 'thursdaySubmitController', "POST");
route('/administ/(?<id>[\d]+)/thursdaydelete', 'thursdayDeleteController', "POST");

route('/fridaySubmit', 'fridaySubmitController', "POST");
route('/administ/(?<id>[\d]+)/fridaydelete', 'fridayDeleteController', "POST");

route('/placing-an-order', 'emailSubmitController', "POST");

route('/addMenuimageSubmit', 'menuImageSubmitController', "POST");

list($view, $data) = dispatch($cleaned, 'notFoundController');

if (preg_match("%^redirect\:%", $view)) {
    $redirectTarget = substr($view, 9);
    header("Location:" . $redirectTarget);
    die;
}
extract($data);

ob_clean();
require_once "tamplates/layout.php";
