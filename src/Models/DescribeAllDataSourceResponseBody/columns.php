<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAllDataSourceResponseBody;

use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAllDataSourceResponseBody\columns\column;
use AlibabaCloud\Tea\Model;

class columns extends Model
{
    /**
     * @var column[]
     */
    public $column;
    protected $_name = [
        'column' => 'Column',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->column) {
            $res['Column'] = [];
            if (null !== $this->column && \is_array($this->column)) {
                $n = 0;
                foreach ($this->column as $item) {
                    $res['Column'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return columns
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Column'])) {
            if (!empty($map['Column'])) {
                $model->column = [];
                $n             = 0;
                foreach ($map['Column'] as $item) {
                    $model->column[$n++] = null !== $item ? column::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
