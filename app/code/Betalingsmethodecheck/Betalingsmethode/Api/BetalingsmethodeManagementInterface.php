<?php


namespace Betalingsmethodecheck\Betalingsmethode\Api;

interface BetalingsmethodeManagementInterface
{


    /**
     * POST for betalingsmethode api
     * @param string $param
     * @return string
     */
    public function postBetalingsmethode($param);
}
