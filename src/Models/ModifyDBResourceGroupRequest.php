<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBResourceGroupRequest extends Model
{
    /**
     * @var string
     */
    public $clusterMode;

    /**
     * @var string
     */
    public $clusterSizeResource;

    /**
     * @description The ID of the AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *
     * @example amv-bp1r053byu48p****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The name of the resource group.
     *
     * > You can call the [DescribeDBResourceGroup](~~459446~~) operation to query the name of a resource group in a cluster.
     * @example test
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The type of the resource group. Valid values:
     *
     *   **Interactive**
     *   **Job**
     *
     * > For information about resource groups of Data Lakehouse Edition, see [Resource groups](~~428610~~).
     * @example Interactive
     *
     * @var string
     */
    public $groupType;

    /**
     * @var int
     */
    public $maxClusterCount;

    /**
     * @description The maximum amount of reserved computing resources. Unit: ACU.
     *
     *   If GroupType is set to Interactive, the maximum amount of reserved computing resources refers to the amount of resources that are not allocated in the cluster. Set this parameter to a value in increments of 16 ACUs.
     *   If GroupType is set to Job, the maximum amount of reserved computing resources refers to the amount of resources that are not allocated in the cluster. Set this parameter to a value in increments of 8 ACUs.
     *
     * @example 48ACU
     *
     * @var string
     */
    public $maxComputeResource;

    /**
     * @var int
     */
    public $minClusterCount;

    /**
     * @description The minimum amount of reserved computing resources. Unit: AnalyticDB compute unit (ACU).
     *
     *   If GroupType is set to Interactive, set the value to 16ACU.
     *   If GroupType is set to Job, set the value to 0ACU.
     *
     * @example 0ACU
     *
     * @var string
     */
    public $minComputeResource;
    protected $_name = [
        'clusterMode'         => 'ClusterMode',
        'clusterSizeResource' => 'ClusterSizeResource',
        'DBClusterId'         => 'DBClusterId',
        'groupName'           => 'GroupName',
        'groupType'           => 'GroupType',
        'maxClusterCount'     => 'MaxClusterCount',
        'maxComputeResource'  => 'MaxComputeResource',
        'minClusterCount'     => 'MinClusterCount',
        'minComputeResource'  => 'MinComputeResource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterMode) {
            $res['ClusterMode'] = $this->clusterMode;
        }
        if (null !== $this->clusterSizeResource) {
            $res['ClusterSizeResource'] = $this->clusterSizeResource;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->groupType) {
            $res['GroupType'] = $this->groupType;
        }
        if (null !== $this->maxClusterCount) {
            $res['MaxClusterCount'] = $this->maxClusterCount;
        }
        if (null !== $this->maxComputeResource) {
            $res['MaxComputeResource'] = $this->maxComputeResource;
        }
        if (null !== $this->minClusterCount) {
            $res['MinClusterCount'] = $this->minClusterCount;
        }
        if (null !== $this->minComputeResource) {
            $res['MinComputeResource'] = $this->minComputeResource;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBResourceGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterMode'])) {
            $model->clusterMode = $map['ClusterMode'];
        }
        if (isset($map['ClusterSizeResource'])) {
            $model->clusterSizeResource = $map['ClusterSizeResource'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['GroupType'])) {
            $model->groupType = $map['GroupType'];
        }
        if (isset($map['MaxClusterCount'])) {
            $model->maxClusterCount = $map['MaxClusterCount'];
        }
        if (isset($map['MaxComputeResource'])) {
            $model->maxComputeResource = $map['MaxComputeResource'];
        }
        if (isset($map['MinClusterCount'])) {
            $model->minClusterCount = $map['MinClusterCount'];
        }
        if (isset($map['MinComputeResource'])) {
            $model->minComputeResource = $map['MinComputeResource'];
        }

        return $model;
    }
}
