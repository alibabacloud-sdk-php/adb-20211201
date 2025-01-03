<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBResourceGroupShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $autoStopInterval;

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
     * @description The ID of the AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *
     * This parameter is required.
     * @example amv-bp1r053byu48p****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description Specifies whether to enable the spot instance feature for the resource group. After you enable the spot instance feature, you are charged for resources at a lower unit price but the resources are probably released. You can enable the spot instance feature only for job resource groups. Valid values:
     *
     *   **True**
     *   **False**
     *
     * @example true
     *
     * @var bool
     */
    public $enableSpot;

    /**
     * @var string
     */
    public $engineParamsShrink;

    /**
     * @description The name of the resource group.
     *
     * This parameter is required.
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
     * This parameter is required.
     * @example Interactive
     *
     * @var string
     */
    public $groupType;

    /**
     * @description A reserved parameter.
     *
     * @example N/A
     *
     * @var int
     */
    public $maxClusterCount;

    /**
     * @description The maximum amount of reserved computing resources.
     *
     *   If GroupType is set to Interactive, the maximum amount of reserved computing resources refers to the amount of resources that are not allocated in the cluster. Set this parameter to a value in increments of 16ACU.
     *   If GroupType is set to Job, the maximum amount of reserved computing resources refers to the amount of resources that are not allocated in the cluster. Set this parameter to a value in increments of 8ACU.
     *
     * @example 48ACU
     *
     * @var string
     */
    public $maxComputeResource;

    /**
     * @var int
     */
    public $maxGpuQuantity;

    /**
     * @description A reserved parameter.
     *
     * @example N/A
     *
     * @var int
     */
    public $minClusterCount;

    /**
     * @description The minimum amount of reserved computing resources.
     *
     *   If the GroupType parameter is set to Interactive, set the value to 16ACU.
     *   If GroupType is set to Job, set the value to 0ACU.
     *
     * @example 0ACU
     *
     * @var string
     */
    public $minComputeResource;

    /**
     * @var int
     */
    public $minGpuQuantity;

    /**
     * @description The region ID of the cluster.
     *
     * >  You can call the [DescribeRegions](https://help.aliyun.com/document_detail/454314.html) operation to query the most recent region list.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The job resubmission rules.
     *
     * @var string
     */
    public $rulesShrink;

    /**
     * @var string
     */
    public $specName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $targetResourceGroupName;
    protected $_name = [
        'autoStopInterval'        => 'AutoStopInterval',
        'clusterMode'             => 'ClusterMode',
        'clusterSizeResource'     => 'ClusterSizeResource',
        'DBClusterId'             => 'DBClusterId',
        'enableSpot'              => 'EnableSpot',
        'engineParamsShrink'      => 'EngineParams',
        'groupName'               => 'GroupName',
        'groupType'               => 'GroupType',
        'maxClusterCount'         => 'MaxClusterCount',
        'maxComputeResource'      => 'MaxComputeResource',
        'maxGpuQuantity'          => 'MaxGpuQuantity',
        'minClusterCount'         => 'MinClusterCount',
        'minComputeResource'      => 'MinComputeResource',
        'minGpuQuantity'          => 'MinGpuQuantity',
        'regionId'                => 'RegionId',
        'rulesShrink'             => 'Rules',
        'specName'                => 'SpecName',
        'status'                  => 'Status',
        'targetResourceGroupName' => 'TargetResourceGroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoStopInterval) {
            $res['AutoStopInterval'] = $this->autoStopInterval;
        }
        if (null !== $this->clusterMode) {
            $res['ClusterMode'] = $this->clusterMode;
        }
        if (null !== $this->clusterSizeResource) {
            $res['ClusterSizeResource'] = $this->clusterSizeResource;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->enableSpot) {
            $res['EnableSpot'] = $this->enableSpot;
        }
        if (null !== $this->engineParamsShrink) {
            $res['EngineParams'] = $this->engineParamsShrink;
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
        if (null !== $this->maxGpuQuantity) {
            $res['MaxGpuQuantity'] = $this->maxGpuQuantity;
        }
        if (null !== $this->minClusterCount) {
            $res['MinClusterCount'] = $this->minClusterCount;
        }
        if (null !== $this->minComputeResource) {
            $res['MinComputeResource'] = $this->minComputeResource;
        }
        if (null !== $this->minGpuQuantity) {
            $res['MinGpuQuantity'] = $this->minGpuQuantity;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->rulesShrink) {
            $res['Rules'] = $this->rulesShrink;
        }
        if (null !== $this->specName) {
            $res['SpecName'] = $this->specName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->targetResourceGroupName) {
            $res['TargetResourceGroupName'] = $this->targetResourceGroupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBResourceGroupShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoStopInterval'])) {
            $model->autoStopInterval = $map['AutoStopInterval'];
        }
        if (isset($map['ClusterMode'])) {
            $model->clusterMode = $map['ClusterMode'];
        }
        if (isset($map['ClusterSizeResource'])) {
            $model->clusterSizeResource = $map['ClusterSizeResource'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['EnableSpot'])) {
            $model->enableSpot = $map['EnableSpot'];
        }
        if (isset($map['EngineParams'])) {
            $model->engineParamsShrink = $map['EngineParams'];
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
        if (isset($map['MaxGpuQuantity'])) {
            $model->maxGpuQuantity = $map['MaxGpuQuantity'];
        }
        if (isset($map['MinClusterCount'])) {
            $model->minClusterCount = $map['MinClusterCount'];
        }
        if (isset($map['MinComputeResource'])) {
            $model->minComputeResource = $map['MinComputeResource'];
        }
        if (isset($map['MinGpuQuantity'])) {
            $model->minGpuQuantity = $map['MinGpuQuantity'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Rules'])) {
            $model->rulesShrink = $map['Rules'];
        }
        if (isset($map['SpecName'])) {
            $model->specName = $map['SpecName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TargetResourceGroupName'])) {
            $model->targetResourceGroupName = $map['TargetResourceGroupName'];
        }

        return $model;
    }
}
