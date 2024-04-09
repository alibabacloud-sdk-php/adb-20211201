<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBResourceGroupResponseBody;

use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBResourceGroupResponseBody\groupsInfo\rules;
use AlibabaCloud\Tea\Model;

class groupsInfo extends Model
{
    /**
     * @description A reserved parameter.
     *
     * @example N/A
     *
     * @var string
     */
    public $clusterMode;

    /**
     * @description A reserved parameter.
     *
     * @example N/A
     *
     * @var string
     */
    public $clusterSizeResource;

    /**
     * @description The time when the resource group was created. The time follows the ISO 8601 standard in the *yyyy-MM-ddTHH:mm:ssZ* format. The time is displayed in UTC.
     *
     * @example 2022-08-29T03:34:30Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The minimum amount of elastic computing resources. Unit: ACU.
     *
     * @example 16ACU
     *
     * @var string
     */
    public $elasticMinComputeResource;

    /**
     * @example True
     *
     * @var string
     */
    public $enableSpot;

    /**
     * @description The name of the resource group.
     *
     * @example test1
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
     * >  For more information about resource groups, see [Resource groups](~~428610~~).
     * @example Job
     *
     * @var string
     */
    public $groupType;

    /**
     * @description The Resource Access Management (RAM) user that is associated with the resource group.
     *
     * @example testb,testc
     *
     * @var string
     */
    public $groupUsers;

    /**
     * @description A reserved parameter.
     *
     * @example N/A
     *
     * @var int
     */
    public $maxClusterCount;

    /**
     * @description The maximum amount of reserved computing resources. Unit: ACU.
     *
     * @example 512ACU
     *
     * @var string
     */
    public $maxComputeResource;

    /**
     * @description A reserved parameter.
     *
     * @example N/A
     *
     * @var int
     */
    public $minClusterCount;

    /**
     * @description The minimum amount of reserved computing resources. Unit: AnalyticDB compute unit (ACU).
     *
     * @example 0ACU
     *
     * @var string
     */
    public $minComputeResource;

    /**
     * @var rules[]
     */
    public $rules;

    /**
     * @description A reserved parameter.
     *
     * @example N/A
     *
     * @var int
     */
    public $runningClusterCount;

    /**
     * @description The status of the resource group. Valid values:
     *
     *   **creating**: The resource group is being created.
     *   **ok**: The resource group is created.
     *   **pendingdelete**: The resource group is pending to be deleted.
     *
     * @example ok
     *
     * @var string
     */
    public $status;

    /**
     * @description The time when the resource group was updated. The time follows the ISO 8601 standard in the *yyyy-MM-ddTHH:mm:ssZ* format. The time is displayed in UTC.
     *
     * @example 2022-08-31T03:34:30Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'clusterMode'               => 'ClusterMode',
        'clusterSizeResource'       => 'ClusterSizeResource',
        'createTime'                => 'CreateTime',
        'elasticMinComputeResource' => 'ElasticMinComputeResource',
        'enableSpot'                => 'EnableSpot',
        'groupName'                 => 'GroupName',
        'groupType'                 => 'GroupType',
        'groupUsers'                => 'GroupUsers',
        'maxClusterCount'           => 'MaxClusterCount',
        'maxComputeResource'        => 'MaxComputeResource',
        'minClusterCount'           => 'MinClusterCount',
        'minComputeResource'        => 'MinComputeResource',
        'rules'                     => 'Rules',
        'runningClusterCount'       => 'RunningClusterCount',
        'status'                    => 'Status',
        'updateTime'                => 'UpdateTime',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->elasticMinComputeResource) {
            $res['ElasticMinComputeResource'] = $this->elasticMinComputeResource;
        }
        if (null !== $this->enableSpot) {
            $res['EnableSpot'] = $this->enableSpot;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->groupType) {
            $res['GroupType'] = $this->groupType;
        }
        if (null !== $this->groupUsers) {
            $res['GroupUsers'] = $this->groupUsers;
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
        if (null !== $this->rules) {
            $res['Rules'] = [];
            if (null !== $this->rules && \is_array($this->rules)) {
                $n = 0;
                foreach ($this->rules as $item) {
                    $res['Rules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->runningClusterCount) {
            $res['RunningClusterCount'] = $this->runningClusterCount;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groupsInfo
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ElasticMinComputeResource'])) {
            $model->elasticMinComputeResource = $map['ElasticMinComputeResource'];
        }
        if (isset($map['EnableSpot'])) {
            $model->enableSpot = $map['EnableSpot'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['GroupType'])) {
            $model->groupType = $map['GroupType'];
        }
        if (isset($map['GroupUsers'])) {
            $model->groupUsers = $map['GroupUsers'];
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
        if (isset($map['Rules'])) {
            if (!empty($map['Rules'])) {
                $model->rules = [];
                $n            = 0;
                foreach ($map['Rules'] as $item) {
                    $model->rules[$n++] = null !== $item ? rules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RunningClusterCount'])) {
            $model->runningClusterCount = $map['RunningClusterCount'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
