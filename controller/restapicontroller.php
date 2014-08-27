<?php


namespace OCA\Tasks\Controller;

use \OCP\AppFramework\ApiController;
use \OCP\IRequest;


class RESTApiController extends ApiController {

    public function __construct($appName, IRequest $request) {
        parent::__construct($appName, $request);
    }
    
    /**
     * CORS
     */
    public function index() {
    }

} // class RESTApiController