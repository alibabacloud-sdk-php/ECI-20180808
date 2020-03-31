<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI;

use AlibabaCloud\Tea\Model;

class DescribeContainerGroupMetricResponse extends Model
{
    public $requestId;
    public $containerGroupId;
    public $records;
    protected $_required = [
        'requestId'        => true,
        'containerGroupId' => true,
        'records'          => true,
    ];
    protected $_name = [
        'requestId'        => 'RequestId',
        'containerGroupId' => 'ContainerGroupId',
        'records'          => 'Records',
    ];
    protected $_description = [
        'requestId'        => 'requestId',
        'containerGroupId' => 'data.containerGroupId',
        'records'          => 'data.podStats',
    ];
}
