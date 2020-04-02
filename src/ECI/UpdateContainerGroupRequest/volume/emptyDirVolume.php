<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\UpdateContainerGroupRequest\volume;

use AlibabaCloud\Tea\Model;

class emptyDirVolume extends Model
{
    /**
     * @description emptyDirVolumeMedium
     *
     * @var string
     */
    public $medium;
    protected $_name = [
        'medium' => 'Medium',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res           = [];
        $res['Medium'] = $this->medium;

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

        return $model;
    }
}
