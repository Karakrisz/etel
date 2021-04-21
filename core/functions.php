<?php

function logMessage($level, $message)
{
    // $file = fopen('app.log', "a");
    // fwrite($file, "[$level] $message" . PHP_EOL);
    // fclose($file);

    $backtrace = debug_backtrace(DEBUG_BACKTRACE_PROVIDE_OBJECT, 2)[0];
    $file = fopen('app.log', "a");
    fwrite($file, "[$level] " . date(DATE_ISO8601) . " " . $backtrace["file"] . ":" . $backtrace["line"] .
        " $message" . PHP_EOL);
    fclose($file);
}

function errorPage()
{
    include "tamplates/error.php";
    die();
}

$routes = [];

function route($action, $callable, $method = 'GET')
{
    global $routes;
    $pattern = "%^$action$%";
    $routes[strtoupper($method)][$pattern] = $callable;
}

function dispatch($action, $notFound)
{
    global $routes;
    $method = $_SERVER["REQUEST_METHOD"];
    if (array_key_exists($method, $routes)) {
        foreach ($routes[$method] as $pattern => $callable) {
            if (preg_match($pattern, $action, $matches)) {
                return $callable($matches);
            }
        }
    }
    return $notFound();
}

function esc($string)
{
    echo htmlspecialchars($string);
}

function getConnection()
{
    global $config;
    $connection = mysqli_connect($config['DB_HOST'], $config['DB_USER'], $config['DB_PASS'], $config['DB_NAME']);
    if (!$connection) {
        logMessage('ERROR', 'Connection error:' . mysqli_connect_error());
        errorPage();
    }
    return $connection;
}

function dailyOfferAppend($connection, $dailyoffer_name, $dailyoffer_price, $dailyoffer_characterization)
{
    if ($statement = mysqli_prepare($connection, 'INSERT INTO daily_offer (dailyoffer_name, dailyoffer_price,dailyoffer_characterization) VALUES (?,?,?)')) {
        mysqli_stmt_bind_param($statement, 'sss', $dailyoffer_name, $dailyoffer_price, $dailyoffer_characterization);
        mysqli_stmt_execute($statement);
        mysqli_stmt_close($statement);
    } else {
        logMessage('ERROR', 'Query error:' . mysqli_error($connection));
        errorPage();
    }
}

function dailyOffer($connection)
{
    if ($statement = mysqli_prepare($connection, 'SELECT * from daily_offer')) {
        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        logMessage('ERROR', 'Query error: ' . mysqli_error($connection));
        errorPage();
    }
}


function dailyOfferDelete($connection, $id)
{
    if ($statement = mysqli_prepare($connection, 'DELETE FROM daily_offer WHERE id = ?')) {
        mysqli_stmt_bind_param($statement, 'i', $id);
        mysqli_stmt_execute($statement);
    } else {
        logMessage('ERROR', 'Query error:' . mysqli_error($connection));
        errorPage();
    }
}

function mondayAppend($connection, $monday_name, $monday_price, $monday_characterization)
{
    if ($statement = mysqli_prepare($connection, 'INSERT INTO monday (monday_name, monday_price,monday_characterization) VALUES (?,?,?)')) {
        mysqli_stmt_bind_param($statement, 'sss', $monday_name, $monday_price, $monday_characterization);
        mysqli_stmt_execute($statement);
        mysqli_stmt_close($statement);
    } else {
        logMessage('ERROR', 'Query error:' . mysqli_error($connection));
        errorPage();
    }
}

function monday($connection)
{
    if ($statement = mysqli_prepare($connection, 'SELECT * from monday')) {
        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        logMessage('ERROR', 'Query error: ' . mysqli_error($connection));
        errorPage();
    }
}




function mondayDelete($connection, $id)
{
    if ($statement = mysqli_prepare($connection, 'DELETE FROM monday WHERE id = ?')) {
        mysqli_stmt_bind_param($statement, 'i', $id);
        mysqli_stmt_execute($statement);
    } else {
        logMessage('ERROR', 'Query error:' . mysqli_error($connection));
        errorPage();
    }
}


function tuesdayAppend($connection, $tuesday_name, $tuesday_price, $tuesday_characterization)
{
    if ($statement = mysqli_prepare($connection, 'INSERT INTO tuesday (tuesday_name, tuesday_price,tuesday_characterization) VALUES (?,?,?)')) {
        mysqli_stmt_bind_param($statement, 'sss', $tuesday_name, $tuesday_price, $tuesday_characterization);
        mysqli_stmt_execute($statement);
        mysqli_stmt_close($statement);
    } else {
        logMessage('ERROR', 'Query error:' . mysqli_error($connection));
        errorPage();
    }
}

function tuesday($connection)
{
    if ($statement = mysqli_prepare($connection, 'SELECT * from tuesday')) {
        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        logMessage('ERROR', 'Query error: ' . mysqli_error($connection));
        errorPage();
    }
}


function tuesdayDelete($connection, $id)
{
    if ($statement = mysqli_prepare($connection, 'DELETE FROM tuesday WHERE id = ?')) {
        mysqli_stmt_bind_param($statement, 'i', $id);
        mysqli_stmt_execute($statement);
    } else {
        logMessage('ERROR', 'Query error:' . mysqli_error($connection));
        errorPage();
    }
}

function wednesdayAppend($connection, $wednesday_name, $wednesday_price, $wednesday_characterization)
{
    if ($statement = mysqli_prepare($connection, 'INSERT INTO wednesday (wednesday_name, wednesday_price,wednesday_characterization) VALUES (?,?,?)')) {
        mysqli_stmt_bind_param($statement, 'sss', $wednesday_name, $wednesday_price, $wednesday_characterization);
        mysqli_stmt_execute($statement);
        mysqli_stmt_close($statement);
    } else {
        logMessage('ERROR', 'Query error:' . mysqli_error($connection));
        errorPage();
    }
}

function wednesday($connection)
{
    if ($statement = mysqli_prepare($connection, 'SELECT * from wednesday')) {
        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        logMessage('ERROR', 'Query error: ' . mysqli_error($connection));
        errorPage();
    }
}


function wednesdayDelete($connection, $id)
{
    if ($statement = mysqli_prepare($connection, 'DELETE FROM wednesday WHERE id = ?')) {
        mysqli_stmt_bind_param($statement, 'i', $id);
        mysqli_stmt_execute($statement);
    } else {
        logMessage('ERROR', 'Query error:' . mysqli_error($connection));
        errorPage();
    }
}

function thursdayAppend($connection, $thursday_name, $thursday_price, $thursday_characterization)
{
    if ($statement = mysqli_prepare($connection, 'INSERT INTO thursday (thursday_name, thursday_price,thursday_characterization) VALUES (?,?,?)')) {
        mysqli_stmt_bind_param($statement, 'sss', $thursday_name, $thursday_price, $thursday_characterization);
        mysqli_stmt_execute($statement);
        mysqli_stmt_close($statement);
    } else {
        logMessage('ERROR', 'Query error:' . mysqli_error($connection));
        errorPage();
    }
}

function thursday($connection)
{
    if ($statement = mysqli_prepare($connection, 'SELECT * from thursday')) {
        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        logMessage('ERROR', 'Query error: ' . mysqli_error($connection));
        errorPage();
    }
}


function thursdayDelete($connection, $id)
{
    if ($statement = mysqli_prepare($connection, 'DELETE FROM thursday WHERE id = ?')) {
        mysqli_stmt_bind_param($statement, 'i', $id);
        mysqli_stmt_execute($statement);
    } else {
        logMessage('ERROR', 'Query error:' . mysqli_error($connection));
        errorPage();
    }
}

function fridayAppend($connection, $friday_name, $friday_price, $friday_characterization)
{
    if ($statement = mysqli_prepare($connection, 'INSERT INTO friday (friday_name, friday_price,friday_characterization) VALUES (?,?,?)')) {
        mysqli_stmt_bind_param($statement, 'sss', $friday_name, $friday_price, $friday_characterization);
        mysqli_stmt_execute($statement);
        mysqli_stmt_close($statement);
    } else {
        logMessage('ERROR', 'Query error:' . mysqli_error($connection));
        errorPage();
    }
}

function friday($connection)
{
    if ($statement = mysqli_prepare($connection, 'SELECT * from friday')) {
        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        logMessage('ERROR', 'Query error: ' . mysqli_error($connection));
        errorPage();
    }
}

$data = friday($connection);
echo json_encode($data);



function fridayDelete($connection, $id)
{
    if ($statement = mysqli_prepare($connection, 'DELETE FROM friday WHERE id = ?')) {
        mysqli_stmt_bind_param($statement, 'i', $id);
        mysqli_stmt_execute($statement);
    } else {
        logMessage('ERROR', 'Query error:' . mysqli_error($connection));
        errorPage();
    }
}



function menuImageAppend($connection, $image)
{
    if ($statement = mysqli_prepare($connection, 'INSERT INTO image (image) VALUES (?)')) {
        $null = NULL;
        mysqli_stmt_bind_param($statement, 'b', $null);
        mysqli_stmt_send_long_data($statement, 0, file_get_contents($image));
        mysqli_stmt_execute($statement);
        mysqli_stmt_close($statement);
    } else {
        logMessage('ERROR', 'Query error:' . mysqli_error($connection));
        errorPage();
    }
}


function menuImageSelect($connection)
{
    if ($statement = mysqli_prepare($connection, 'SELECT image FROM image ORDER BY id DESC LIMIT 1')) {
        mysqli_stmt_execute($statement);
        mysqli_stmt_store_result($statement);
        mysqli_stmt_bind_result($statement, $image);
        $images = [];
        while (mysqli_stmt_fetch($statement)) {
            $images[] = ["image" => $image];
        }
        mysqli_stmt_close($statement);
        return $images;
    } else {
        logMessage('ERROR', 'Query error:' . mysqli_error($connection));
        errorPage();
    }
}

define('EMAIL', 'eteljo282@etelellato.hu');
define('PASS', 'Nemes1978');

$pEvent = filter_input(INPUT_POST, "event", FILTER_SANITIZE_SPECIAL_CHARS);
$sendemail = filter_input(INPUT_POST, "sendemail", FILTER_SANITIZE_SPECIAL_CHARS);
$name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
$tel = filter_input(INPUT_POST, "tel", FILTER_SANITIZE_SPECIAL_CHARS);
$house_number = filter_input(INPUT_POST, "house-number", FILTER_SANITIZE_SPECIAL_CHARS);
$floor = filter_input(INPUT_POST, "floor", FILTER_SANITIZE_SPECIAL_CHARS);
$door = filter_input(INPUT_POST, "door", FILTER_SANITIZE_SPECIAL_CHARS);
$doorbell = filter_input(INPUT_POST, "doorbell", FILTER_SANITIZE_SPECIAL_CHARS);
$comment = filter_input(INPUT_POST, "comment", FILTER_SANITIZE_SPECIAL_CHARS);
$soup_one = filter_input(INPUT_POST, "soup_one", FILTER_SANITIZE_SPECIAL_CHARS);
$soup_two = filter_input(INPUT_POST, "soup_two", FILTER_SANITIZE_SPECIAL_CHARS);
$course_one = filter_input(INPUT_POST, "course_one", FILTER_SANITIZE_SPECIAL_CHARS);
$course_two = filter_input(INPUT_POST, "course_two", FILTER_SANITIZE_SPECIAL_CHARS);
$dessert = filter_input(INPUT_POST, "dessert", FILTER_SANITIZE_SPECIAL_CHARS);
$soup_one_name = filter_input(INPUT_POST, "soup_one_name", FILTER_SANITIZE_SPECIAL_CHARS);
$soup_two_name = filter_input(INPUT_POST, "soup_two_name", FILTER_SANITIZE_SPECIAL_CHARS);
$course_one_name = filter_input(INPUT_POST, "course_one_name", FILTER_SANITIZE_SPECIAL_CHARS);
$course_two_name = filter_input(INPUT_POST, "course_two_name", FILTER_SANITIZE_SPECIAL_CHARS);
$dessert_name = filter_input(INPUT_POST, "dessert_name", FILTER_SANITIZE_SPECIAL_CHARS);


if ($pEvent == 'sendemail') {
    require_once 'vendor/autoload.php';
    // Create the Transport
    $transport = (new Swift_SmtpTransport('smtp.forpsi.com', 587, 'ssl'))
        ->setUsername(EMAIL)
        ->setPassword(PASS);

    // Create the Mailer using your created Transport
    $mailer = new Swift_Mailer($transport);
    $confirmation_email = new Swift_Mailer($transport);

    // Create a message
    $message = (new Swift_Message('Ételellátó rendelés'))
        ->setFrom([EMAIL => $name])
        // ->setCc('rrd@webmania.cc') copy
        ->setTo([EMAIL])
        ->setBody(
            'Új rendelés rögzítve, a ' . "$house_number" . ' szállítási címre!
            Megrendelő neve: ' . "$name" . '
            Megrendelő email címe: ' . "$email" . '
            Megrendelő telefon száma: ' . "$tel" . '
            Emelet: ' . "$floor" . '
            Ajtó:  ' . $door . '
            Kapucsengő: ' . $doorbell . '
            Megrendelt tételek: ' . $soup_one . 'db  ' . $soup_one_name . ', ' . $soup_two . 'db  ' . $soup_two_name . ', ' . $course_one . 'db  ' . $course_one_name . ', ' . $course_two . 'db  ' . $course_two_name . ', ' . $dessert . 'db  ' . $dessert_name . ' 
            Megjegyzés: ' . $comment . '
            '
        );

    $confirmation_email_message = (new Swift_Message('Ételellátó rendelés'))
        ->setFrom([EMAIL => $name])
        ->setTo([$email])
        ->setBody(
            'Köszönjük megrendelését, kívánt ételeit máris készítjük!
            Az Ön megrendelt tételei: ' . $soup_one . 'db  ' . $soup_one_name . ', ' . $soup_two . 'db  ' . $soup_two_name . ', ' . $course_one . 'db  ' . $course_one_name . ', ' . $course_two . 'db  ' . $course_two_name . ', ' . $dessert . 'db  ' . $dessert_name . '
            '
        );

    // Send the message
    // if ($mailer->send($message) and $confirmation_email->send($confirmation_email_message)) {
    //     echo "Mail Send...!!";
    // } else {
    //     echo "No";
    // }
}
