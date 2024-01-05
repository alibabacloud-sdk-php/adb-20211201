<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeStorageResourceUsageResponseBody\data;

use AlibabaCloud\Tea\Model;

class acuInfo extends Model
{
    /**
     * @description The resource usage metric. Valid values:
     *
     *   `TotalAcuNumber`: the total number of ACUs.
     *   `ReservedAcuNumber`: the number of ACUs for the reserved resources.
     *
     * @example TotalAcuNumber
     *
     * @var string
     */
    public $name;

    /**
     * @description The values of the metric at specific points in time.
     *
     * @var string[]
     */
    public $values;
    protected $_name = [
        'name'   => 'Name',
        'values' => 'Values',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->values) {
            $res['Values'] = $this->values;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return acuInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = $map['Values'];
            }
        }

        return $model;
    }
}
