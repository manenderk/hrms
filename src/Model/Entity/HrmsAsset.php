<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * HrmsAsset Entity
 *
 * @property int $id
 * @property string $name
 * @property int $asset_category_id
 * @property string|null $serial_number
 * @property string|null $tag_number
 * @property int|null $allocated_to_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int|null $created_by
 * @property int|null $modified_by
 *
 * @property \App\Model\Entity\HrmsAssetCategory $hrms_asset_category
 * @property \App\Model\Entity\User $user
 */
class HrmsAsset extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'asset_category_id' => true,
        'serial_number' => true,
        'tag_number' => true,
        'allocated_to_id' => true,
        'created' => true,
        'modified' => true,
        'created_by' => true,
        'modified_by' => true,
        'hrms_asset_category' => true,
        'user' => true
    ];
}
