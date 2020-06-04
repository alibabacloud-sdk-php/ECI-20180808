<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Eci\V20180808\Models\ExportContainerGroupTemplateResponse\template\spec\volumes;

use AlibabaCloud\Tea\Model;

class emptyDir extends Model {
    protected $_name = [
        'sizeLimit' => 'SizeLimit',
    ];
    public function validate() {
        Model::validateRequired('sizeLimit', $this->sizeLimit, true);
    }
    public function toMap() {
        $res = [];
        $res['SizeLimit'] = $this->sizeLimit;
        return $res;
    }
    /**
     * @param array $map
     * @return emptyDir
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['SizeLimit'])){
            $model->sizeLimit = $map['SizeLimit'];
        }
        return $model;
    }
    /**
     * @description sizeLimit
     * @var string
     */
    public $sizeLimit;

}
