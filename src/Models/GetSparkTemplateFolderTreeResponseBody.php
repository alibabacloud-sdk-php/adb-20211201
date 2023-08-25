<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class GetSparkTemplateFolderTreeResponseBody extends Model
{
    /**
     * @description The directory structure of Spark applications, which is in the tree format. Fields in the response parameter:
     *
     *   **Uid**: the UID of the Alibaba Cloud account.
     *
     *   **Type**: the type of the application template. Valid values: **FOLDER**: directory.
     *
     *   **Parent**: indicates whether a child directory exists. Valid values:
     *
     *   **0**: No child directory exists.
     *   **-1**: A child directory exists.
     *
     *   **Children**: the child directory.
     *
     *   **LastModified**: the time when applications in the directory are last modified. The time is displayed in the UNIX timestamp format. Unit: seconds.
     *
     *   **Name**: the name of the directory.
     *
     *   **Id**: the ID of the directory.
     *
     * @example {           "Uid":195813423****,           "Type":"FOLDER",          "Parent":-1,           "Children":[              {                     "LastModified":1647853173,               "Uid":195813423****,                     "Type":"FOLDER",                     "Parent":0,                     "Id":157,                     "Name":"t"         }       ],            "Id":725204,            "Name":"root"      }
     *
     * @var string
     */
    public $data;

    /**
     * @description The ID of the request.
     *
     * @example 1AD222E9-E606-4A42-BF6D-8A4442913CEF
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'data'      => 'Data',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSparkTemplateFolderTreeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
