<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\container;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\container\environmentVar\fieldRef;

class environmentVar extends Model {
    protected $_name = [
        'key' => 'Key',
        'value' => 'Value',
        'fieldRef' => 'FieldRef',
    ];
    public function validate() {
        Model::validateRequired('fieldRef', $this->fieldRef, true);
    }
    public function toMap() {
        $res = [];
        $res['Key'] = $this->key;
        $res['Value'] = $this->value;
        $res['FieldRef'] = null !== $this->fieldRef ? $this->fieldRef->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return environmentVar
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Key'])){
            $model->key = $map['Key'];
        }
        if(isset($map['Value'])){
            $model->value = $map['Value'];
        }
        if(isset($map['FieldRef'])){
            $model->fieldRef = fieldRef::fromMap($map['FieldRef']);
        }
        return $model;
    }
    /**
     * @description key
     * @var string
     */
    public $key;

    /**
     * @description value
     * @var string
     */
    public $value;

    /**
     * @description FieldRef
     * @var fieldRef
     */
    public $fieldRef;

}
