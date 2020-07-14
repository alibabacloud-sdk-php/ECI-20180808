<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\Tea\Model;

class ExecContainerCommandRequest extends Model
{
    /**
     * @description regionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description containerGroupId
     *
     * @var string
     */
    public $containerGroupId;

    /**
     * @description containerName
     *
     * @var string
     */
    public $containerName;

    /**
     * @description command
     *
     * @var string
     */
    public $command;

    /**
     * @description tty
     *
     * @var bool
     */
    public $TTY;

    /**
     * @description stdin
     *
     * @var bool
     */
    public $stdin;
    protected $_name = [
        'regionId'         => 'RegionId',
        'containerGroupId' => 'ContainerGroupId',
        'containerName'    => 'ContainerName',
        'command'          => 'Command',
        'TTY'              => 'TTY',
        'stdin'            => 'Stdin',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('containerGroupId', $this->containerGroupId, true);
        Model::validateRequired('containerName', $this->containerName, true);
        Model::validateRequired('command', $this->command, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->containerGroupId) {
            $res['ContainerGroupId'] = $this->containerGroupId;
        }
        if (null !== $this->containerName) {
            $res['ContainerName'] = $this->containerName;
        }
        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }
        if (null !== $this->TTY) {
            $res['TTY'] = $this->TTY;
        }
        if (null !== $this->stdin) {
            $res['Stdin'] = $this->stdin;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExecContainerCommandRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ContainerGroupId'])) {
            $model->containerGroupId = $map['ContainerGroupId'];
        }
        if (isset($map['ContainerName'])) {
            $model->containerName = $map['ContainerName'];
        }
        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }
        if (isset($map['TTY'])) {
            $model->TTY = $map['TTY'];
        }
        if (isset($map['Stdin'])) {
            $model->stdin = $map['Stdin'];
        }

        return $model;
    }
}
