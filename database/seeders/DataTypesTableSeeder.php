<?php

namespace Joy\VoyagerBreadProject\Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataType;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'projects');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'projects',
                'display_name_singular' => __('joy-voyager-bread-project::seeders.data_types.project.singular'),
                'display_name_plural'   => __('joy-voyager-bread-project::seeders.data_types.project.plural'),
                'icon'                  => 'voyager-bread voyager-bread-project voyager-sun',
                'model_name'            => 'Joy\\VoyagerBreadProject\\Models\\Project',
                // 'policy_name'           => 'Joy\\VoyagerBreadProject\\Policies\\ProjectPolicy',
                // 'controller'            => 'Joy\\VoyagerBreadProject\\Http\\Controllers\\VoyagerBreadProjectController',
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
