<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\ExportContainerGroupTemplateResponse\template\spec;

use AlibabaCloud\Tea\Model;

class dnsConfig extends Model
{
    public $options;
    public $nameServers;
    public $searches;
    protected $_required = [
        'options'     => true,
        'nameServers' => true,
        'searches'    => true,
    ];
    protected $_name = [
        'options'     => 'Options',
        'nameServers' => 'NameServers',
        'searches'    => 'Searches',
    ];
    protected $_description = [
        'options'     => 'dnsConfigOptions',
        'nameServers' => 'dnsConfigNameServers',
        'searches'    => 'dnsConfigSearches',
    ];
}
