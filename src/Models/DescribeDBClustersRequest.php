<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBClustersRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeDBClustersRequest extends Model
{
    /**
     * @description The description of the cluster.
     *
     *   The description cannot start with `http://` or `https://`.
     *   The description must be 2 to 256 characters in length
     *
     * @example test
     *
     * @var string
     */
    public $DBClusterDescription;

    /**
     * @description The ID of the AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *
     * If you do not specify this parameter, the information about all clusters that reside in the region is returned.
     * @example amv-bp1r053byu48p****
     *
     * @var string
     */
    public $DBClusterIds;

    /**
     * @description The state of the cluster. Valid values:
     *
     *   **Preparing**
     *
     * <!---->
     *
     *   **Creating**
     *   **Running**
     *   **Deleting**
     *
     * <!---->
     *
     *   **Restoring**
     *
     * <!---->
     *
     *   **ClassChanging**
     *   **NetAddressCreating**
     *   **NetAddressDeleting**
     *   **NetAddressModifying**
     *
     * @example Running
     *
     * @var string
     */
    public $DBClusterStatus;

    /**
     * @var string
     */
    public $DBClusterVersion;

    /**
     * @description The page number. Pages start from page 1. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Valid values:
     *
     *   **30** (default)
     *   **50**
     *   **100**
     *
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $productVersion;

    /**
     * @description The region ID of the cluster.
     *
     * >  You can call the [DescribeRegions](~~454314~~) operation to query the most recent region list.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource group ID. If you do not specify this parameter, the information about all resource groups in the cluster is returned.
     *
     * @example rg-4690g37929****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The tags that are added to the cluster.
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'DBClusterDescription' => 'DBClusterDescription',
        'DBClusterIds'         => 'DBClusterIds',
        'DBClusterStatus'      => 'DBClusterStatus',
        'DBClusterVersion'     => 'DBClusterVersion',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'productVersion'       => 'ProductVersion',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'tag'                  => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterDescription) {
            $res['DBClusterDescription'] = $this->DBClusterDescription;
        }
        if (null !== $this->DBClusterIds) {
            $res['DBClusterIds'] = $this->DBClusterIds;
        }
        if (null !== $this->DBClusterStatus) {
            $res['DBClusterStatus'] = $this->DBClusterStatus;
        }
        if (null !== $this->DBClusterVersion) {
            $res['DBClusterVersion'] = $this->DBClusterVersion;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->productVersion) {
            $res['ProductVersion'] = $this->productVersion;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBClustersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterDescription'])) {
            $model->DBClusterDescription = $map['DBClusterDescription'];
        }
        if (isset($map['DBClusterIds'])) {
            $model->DBClusterIds = $map['DBClusterIds'];
        }
        if (isset($map['DBClusterStatus'])) {
            $model->DBClusterStatus = $map['DBClusterStatus'];
        }
        if (isset($map['DBClusterVersion'])) {
            $model->DBClusterVersion = $map['DBClusterVersion'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProductVersion'])) {
            $model->productVersion = $map['ProductVersion'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
