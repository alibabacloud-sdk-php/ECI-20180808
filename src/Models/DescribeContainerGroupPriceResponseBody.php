<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupPriceResponseBody\priceInfo;
use AlibabaCloud\Tea\Model;

class DescribeContainerGroupPriceResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var priceInfo
     */
    public $priceInfo;
    protected $_name = [
        'requestId' => 'RequestId',
        'priceInfo' => 'PriceInfo',
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
        if (null !== $this->priceInfo) {
            $res['PriceInfo'] = null !== $this->priceInfo ? $this->priceInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeContainerGroupPriceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PriceInfo'])) {
            $model->priceInfo = priceInfo::fromMap($map['PriceInfo']);
        }

        return $model;
    }
}
