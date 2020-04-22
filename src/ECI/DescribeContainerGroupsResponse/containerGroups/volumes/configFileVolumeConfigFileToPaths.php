<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeContainerGroupsResponse\containerGroups\volumes;

use AlibabaCloud\Tea\Model;

class configFileVolumeConfigFileToPaths extends Model
{
    /**
     * @description content
     *
     * @var string
     */
    public $content;

    /**
     * @description path
     *
     * @var string
     */
    public $path;
    protected $_name = [
        'content' => 'Content',
        'path'    => 'Path',
    ];

    public function validate()
    {
        Model::validateRequired('content', $this->content, true);
        Model::validateRequired('path', $this->path, true);
    }

    public function toMap()
    {
        $res            = [];
        $res['Content'] = $this->content;
        $res['Path']    = $this->path;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configFileVolumeConfigFileToPaths
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        return $model;
    }
}
