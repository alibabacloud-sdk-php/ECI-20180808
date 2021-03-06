<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\Tea\Model;

class ExecContainerCommandResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $webSocketUri;
    protected $_name = [
        'requestId'    => 'RequestId',
        'webSocketUri' => 'WebSocketUri',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->webSocketUri) {
            $res['WebSocketUri'] = $this->webSocketUri;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExecContainerCommandResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['WebSocketUri'])) {
            $model->webSocketUri = $map['WebSocketUri'];
        }

        return $model;
    }
}
