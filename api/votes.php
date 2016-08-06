<?php

/**
 * Implements basic RESTful gateway for votes and communicates both with client as well as manager.
 * At the moment, only implements GET; other methods can be implemented if requirements arise.
 */

namespace Api;
use Manager;
require_once '../autoloader.php';

try {
    $votesManager = new Manager\VotesManager();
    switch ($_SERVER['REQUEST_METHOD']) {
        case 'GET':
            echo json_encode($votesManager->Get($_GET['color_id']));
            http_response_code(HttpCodes::SUCCESS);
            break;
        default:
            echo json_encode('Method not supported yet.');
            http_response_code(HttpCodes::BAD_REQUEST);
            break;
    }
} catch (\RuntimeException $re) {
    http_response_code(HttpCodes::SERVER_ERROR);
    echo json_encode($re->getMessage());
} catch (\Exception $e) {
    http_response_code(HttpCodes::NOT_FOUND);
    echo json_encode($e->getMessage());
}