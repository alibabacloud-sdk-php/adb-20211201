<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeSchemasResponseBody\items;
use AlibabaCloud\Tea\Model;

class DescribeSchemasResponseBody extends Model
{
    /**
     * @description The queried databases.
     *
     * @var items
     */
    public $items;

    /**
     * @description The request ID.
     *
     * @example 25B56BC7-4978-40B3-9E48-4B7067******
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'items'     => 'Items',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->items) {
            $res['Items'] = null !== $this->items ? $this->items->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSchemasResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Items'])) {
            $model->items = items::fromMap($map['Items']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
