<?php

namespace Joy\VoyagerBreadLocation\Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataType;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'locations');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'locations',
                'display_name_singular' => __('joy-voyager-bread-location::seeders.data_types.location.singular'),
                'display_name_plural'   => __('joy-voyager-bread-location::seeders.data_types.location.plural'),
                'icon'                  => 'voyager-bread voyager-bread-location voyager-location',
                'model_name'            => 'Joy\\VoyagerBreadLocation\\Models\\Location',
                // 'policy_name'           => 'Joy\\VoyagerBreadLocation\\Policies\\LocationPolicy',
                // 'controller'            => 'Joy\\VoyagerBreadLocation\\Http\\Controllers\\VoyagerBreadLocationController',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }
    }

    /**
     * [dataType description].
     *
     * @param [type] $field [description]
     * @param [type] $for   [description]
     *
     * @return [type] [description]
     */
    protected function dataType($field, $for)
    {
        return DataType::firstOrNew([$field => $for]);
    }
}
