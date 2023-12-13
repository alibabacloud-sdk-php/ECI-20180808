<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\volume;

use AlibabaCloud\Tea\Model;

class emptyDirVolume extends Model
{
    /**
     * @var string
     */
    public $medium;

    /**
     * @var string
     */
    public $sizeLimit;
    protected $_name = [
        'medium'    => 'Medium',
        'sizeLimit' => 'SizeLimit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->medium) {
            $res['Medium'] = $this->medium;
        }
        if (null !== $this->sizeLimit) {
            $res['SizeLimit'] = $this->sizeLimit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return emptyDirVolume
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Medium'])) {
            $model->medium = $map['Medium'];
        }
        if (isset($map['SizeLimit'])) {
            $model->sizeLimit = $map['SizeLimit'];
        }

        return $model;
    }
}
