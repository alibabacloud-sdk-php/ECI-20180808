<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeRegionsResponse\regions;

class DescribeRegionsResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'regions' => 'Regions',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('regions', $this->regions, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Regions'] = [];
        if(null !== $this->regions && is_array($this->regions)){
            $n = 0;
            foreach($this->regions as $item){
                $res['Regions'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeRegionsResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Regions'])){
            if(!empty($map['Regions'])){
                $model->regions = [];
                $n = 0;
                foreach($map['Regions'] as $item) {
                    $model->regions[$n++] = null !== $item ? regions::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data
     * @var array
     */
    public $regions;

}
