<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\records;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\records\containers\CPU;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\records\containers\memory;
use AlibabaCloud\Tea\Model;

class containers extends Model
{
    /**
     * @var CPU
     */
    public $CPU;

    /**
     * @var memory
     */
    public $memory;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'CPU'    => 'CPU',
        'memory' => 'Memory',
        'name'   => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->CPU) {
            $res['CPU'] = null !== $this->CPU ? $this->CPU->toMap() : null;
        }
        if (null !== $this->memory) {
            $res['Memory'] = null !== $this->memory ? $this->memory->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return containers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CPU'])) {
            $model->CPU = CPU::fromMap($map['CPU']);
        }
        if (isset($map['Memory'])) {
            $model->memory = memory::fromMap($map['Memory']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
