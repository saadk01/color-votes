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
            http_response_code(Manager\HttpCodes::SUCCESS);
            echo json_encode($votesManager->Get($_GET['color_id']));
            break;
        default:
            http_response_code(Manager\HttpCodes::BAD_REQUEST);
            throw new Exception('Method not supported yet.');
            break;
    }
} catch (Exception $e) {
    if (Manager\HttpCodes::BAD_REQUEST != http_response_code()) {
        http_response_code(Manager\HttpCodes::NOT_FOUND);
    }
    echo json_encode(array('msg' => $e->getMessage()));
}