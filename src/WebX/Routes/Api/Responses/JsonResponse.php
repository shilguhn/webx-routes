<?php

namespace WebX\Routes\Api\Responses;

use WebX\Routes\Api\Response;

interface JsonResponse extends Response {


    /**
     * @param $value
     * @param null $path '.' notated path of where in the data structure the value is stored.
     * @return mixed
     */
    public function setData($value, $path = null);

}

?>