<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\CreateContainerGroupRequest;

use AlibabaCloud\Tea\Model;

class volume extends Model
{
    public $name;
    public $NFSVolume;
    public $configFileVolume;
    public $type;
    public $emptyDirVolume;
    public $diskVolume;
    public $flexVolume;
    public $hostPathVolume;
    protected $_name = [
        'name'             => 'Name',
        'NFSVolume'        => 'NFSVolume',
        'configFileVolume' => 'ConfigFileVolume',
        'type'             => 'Type',
        'emptyDirVolume'   => 'EmptyDirVolume',
        'diskVolume'       => 'DiskVolume',
        'flexVolume'       => 'FlexVolume',
        'hostPathVolume'   => 'HostPathVolume',
    ];
    protected $_description = [
        'name'             => 'name',
        'NFSVolume'        => 'NFSVolume',
        'configFileVolume' => 'ConfigFileVolume',
        'type'             => 'type',
        'emptyDirVolume'   => 'EmptyDirVolume',
        'diskVolume'       => 'DiskVolume',
        'flexVolume'       => 'FlexVolume',
        'hostPathVolume'   => 'HostPathVolume',
    ];
    protected $_required = [
        'NFSVolume'        => true,
        'configFileVolume' => true,
        'emptyDirVolume'   => true,
        'diskVolume'       => true,
        'flexVolume'       => true,
        'hostPathVolume'   => true,
    ];
}
