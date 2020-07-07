<?php

use CThomas87\ScormCloudGateway\ScormCloudGateway;

if (! function_exists('scormcloud')) {
    function scormcloud(): ScormCloudGateway
    {
        return app(ScormCloudGateway::class);
    }
}
