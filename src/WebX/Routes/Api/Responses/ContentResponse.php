<?php

namespace WebX\Routes\Api\Responses;

use WebX\Routes\Api\Response;

interface ContentResponse extends Response {


    /**
     * @param $content
     * @return void
     */
    public function setContent($content);

    /**
     * @param $contentType The content type. Default text/html; charset-utf-8
     * @return void
     */
    public function setContentType($contentType);

}

?>