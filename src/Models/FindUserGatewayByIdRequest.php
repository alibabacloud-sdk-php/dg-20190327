<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dg\V20190327\Models;

use AlibabaCloud\Tea\Model;

class FindUserGatewayByIdRequest extends Model
{
    /**
     * @example dg-yhss6sdlaff****
     *
     * @var string
     */
    public $gatewayId;
    protected $_name = [
        'gatewayId' => 'GatewayId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FindUserGatewayByIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }

        return $model;
    }
}
