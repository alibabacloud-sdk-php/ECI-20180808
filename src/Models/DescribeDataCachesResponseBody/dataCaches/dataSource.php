<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeDataCachesResponseBody\dataCaches;

use AlibabaCloud\Tea\Model;

class dataSource extends Model
{
    /**
     * @description The parameters that are configured for the data source.
     *
     * @example {
     * "path": "/",
     * "server": "0ce1f4****-or***.cn-hangzhou.nas.aliyuncs.com",
     * }
     * @var string
     */
    public $options;

    /**
     * @description The type of the data source. Valid values:
     *
     *   NAS
     *   OSS
     *   URL
     *   SNAPSHOT
     *
     * @example URL
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'options' => 'Options',
        'type'    => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataSource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
