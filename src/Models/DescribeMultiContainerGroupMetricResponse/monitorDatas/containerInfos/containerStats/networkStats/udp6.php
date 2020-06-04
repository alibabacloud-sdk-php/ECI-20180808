<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponse\monitorDatas\containerInfos\containerStats\networkStats;

use AlibabaCloud\Tea\Model;

class udp6 extends Model {
    protected $_name = [
        'listen' => 'Listen',
        'dropped' => 'Dropped',
        'rxQueued' => 'RxQueued',
        'txQueued' => 'TxQueued',
    ];
    public function validate() {
        Model::validateRequired('listen', $this->listen, true);
        Model::validateRequired('dropped', $this->dropped, true);
        Model::validateRequired('rxQueued', $this->rxQueued, true);
        Model::validateRequired('txQueued', $this->txQueued, true);
    }
    public function toMap() {
        $res = [];
        $res['Listen'] = $this->listen;
        $res['Dropped'] = $this->dropped;
        $res['RxQueued'] = $this->rxQueued;
        $res['TxQueued'] = $this->txQueued;
        return $res;
    }
    /**
     * @param array $map
     * @return udp6
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Listen'])){
            $model->listen = $map['Listen'];
        }
        if(isset($map['Dropped'])){
            $model->dropped = $map['Dropped'];
        }
        if(isset($map['RxQueued'])){
            $model->rxQueued = $map['RxQueued'];
        }
        if(isset($map['TxQueued'])){
            $model->txQueued = $map['TxQueued'];
        }
        return $model;
    }
    /**
     * @description listen
     * @var integer
     */
    public $listen;

    /**
     * @description dropped
     * @var integer
     */
    public $dropped;

    /**
     * @description rxQueued
     * @var integer
     */
    public $rxQueued;

    /**
     * @description txQueued
     * @var integer
     */
    public $txQueued;

}
