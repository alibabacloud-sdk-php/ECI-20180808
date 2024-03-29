<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupPriceResponseBody\priceInfo\price\detailInfos\detailInfo\rules;

use AlibabaCloud\Tea\Model;

class rule extends Model
{
    /**
     * @description The description of the rule.
     *
     * @example Receive a 15% discount on a 1-year subscription
     *
     * @var string
     */
    public $description;

    /**
     * @description The rule ID.
     *
     * @example 123456
     *
     * @var int
     */
    public $ruleId;
    protected $_name = [
        'description' => 'Description',
        'ruleId'      => 'RuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
