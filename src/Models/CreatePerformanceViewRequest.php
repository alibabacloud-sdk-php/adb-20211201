<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreatePerformanceViewRequest\viewDetail;

class CreatePerformanceViewRequest extends Model
{
    /**
     * @var string
     */
    public $createFromViewType;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var bool
     */
    public $fillOriginViewKeys;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var viewDetail
     */
    public $viewDetail;

    /**
     * @var string
     */
    public $viewName;
    protected $_name = [
        'createFromViewType' => 'CreateFromViewType',
        'DBClusterId' => 'DBClusterId',
        'fillOriginViewKeys' => 'FillOriginViewKeys',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'viewDetail' => 'ViewDetail',
        'viewName' => 'ViewName',
    ];

    public function validate()
    {
        if (null !== $this->viewDetail) {
            $this->viewDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createFromViewType) {
            $res['CreateFromViewType'] = $this->createFromViewType;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->fillOriginViewKeys) {
            $res['FillOriginViewKeys'] = $this->fillOriginViewKeys;
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->viewDetail) {
            $res['ViewDetail'] = null !== $this->viewDetail ? $this->viewDetail->toArray($noStream) : $this->viewDetail;
        }

        if (null !== $this->viewName) {
            $res['ViewName'] = $this->viewName;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateFromViewType'])) {
            $model->createFromViewType = $map['CreateFromViewType'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['FillOriginViewKeys'])) {
            $model->fillOriginViewKeys = $map['FillOriginViewKeys'];
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['ViewDetail'])) {
            $model->viewDetail = viewDetail::fromMap($map['ViewDetail']);
        }

        if (isset($map['ViewName'])) {
            $model->viewName = $map['ViewName'];
        }

        return $model;
    }
}
