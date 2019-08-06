<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Romuniverse\User\Models\Permission::unguard();
        \Romuniverse\User\Models\Permission::truncate();

        $permissions_data = array(
            0 => array(
                'key' => 'admin.cms.page.index',
                'category' => 'admin.cms',
                'description' => 'Search Cms Pages',
            ),
            1 => array(
                'key' => 'admin.cms.page.create',
                'category' => 'admin.cms',
                'description' => 'Create Cms Pages',
            ),
            2 => array(
                'key' => 'admin.cms.page.store',
                'category' => 'admin.cms',
                'description' => 'Save Cms Pages',
            ),
            3 => array(
                'key' => 'admin.cms.page.destroy',
                'category' => 'admin.cms',
                'description' => 'Delete Cms Pages',
            ),
            4 => array(
                'key' => 'admin.cms.page.edit',
                'category' => 'admin.cms',
                'description' => 'Edit Cms Pages',
            ),
            5 => array(
                'key' => 'admin.cms.page.update',
                'category' => 'admin.cms',
                'description' => 'Update Cms Pages',
            ),
            6 => array(
                'key' => 'admin.file.category.index',
                'category' => 'admin.file',
                'description' => 'Search Category Files',
            ),
            7 => array(
                'key' => 'admin.user.download.index',
                'category' => 'admin.user.download',
                'description' => 'Search User Downloads',
            ),
            8 => array(
                'key' => 'admin.user.purchase.index',
                'category' => 'admin.user.purchase',
                'description' => 'Search User Purchases',
            ),
            9 => array(
                'key' => 'admin.category.index',
                'category' => 'admin.category',
                'description' => 'Search Categories',
            ),
            10 => array(
                'key' => 'admin.category.create',
                'category' => 'admin.category',
                'description' => 'Create Categories',
            ),
            11 => array(
                'key' => 'admin.category.destroy',
                'category' => 'admin.category',
                'description' => 'Delete Categories',
            ),
            12 => array(
                'key' => 'admin.category.edit',
                'category' => 'admin.category',
                'description' => 'Edit Categories',
            ),
           13 => array(
                'key' => 'admin.category.store',
                'category' => 'admin.category',
                'description' => 'Store Categories',
            ),
            14 => array(
                'key' => 'admin.category.update',
                'category' => 'admin.category',
                'description' => 'Update Categories',
            ),
            15 => array(
                'key' => 'admin.dashboard.index',
                'category' => 'admin.dashboard',
                'description' => 'View Dashboard',
            ),
            16 => array(
                'key' => 'admin.file.index',
                'category' => 'admin.file',
                'description' => 'Search Files',
            ),
            17 => array(
                'key' => 'admin.file.create',
                'category' => 'admin.file',
                'description' => 'Create Files',
            ),
            18 => array(
                'key' => 'admin.file.destroy',
                'category' => 'admin.file',
                'description' => 'Delete Files',
            ),
            19 => array(
                'key' => 'admin.file.edit',
                'category' => 'admin.file',
                'description' => 'Edit Files',
            ),
            20 => array(
                'key' => 'admin.file.store',
                'category' => 'admin.file',
                'description' => 'Store Files',
            ),
            21 => array(
                'key' => 'admin.file.update',
                'category' => 'admin.file',
                'description' => 'Update Files',
            ),
            22 => array(
                'key' => 'admin.product.index',
                'category' => 'admin.product',
                'description' => 'Search Products',
            ),
            23 => array(
                'key' => 'admin.product.create',
                'category' => 'admin.product',
                'description' => 'Create Products',
            ),
            24 => array(
                'key' => 'admin.product.destroy',
                'category' => 'admin.product',
                'description' => 'Delete Products',
            ),
            25 => array(
                'key' => 'admin.product.edit',
                'category' => 'admin.product',
                'description' => 'Edit Products',
            ),
            26 => array(
                'key' => 'admin.product.store',
                'category' => 'admin.product',
                'description' => 'Store Products',
            ),
            27 => array(
                'key' => 'admin.product.update',
                'category' => 'admin.product',
                'description' => 'Update Products',
            ),
            28 => array(
                'key' => 'admin.purchase.index',
                'category' => 'admin.purchase',
                'description' => 'Search Purchases',
            ),
            29 => array(
                'key' => 'admin.purchase.edit',
                'category' => 'admin.purchase',
                'description' => 'Edit Purchases',
            ),
            30 => array(
                'key' => 'admin.view.index',
                'category' => 'admin.purchase',
                'description' => 'View Purchases',
            ),
            31 => array(
                'key' => 'admin.role.index',
                'category' => 'admin.role',
                'description' => 'Search Roles',
            ),
            32 => array(
                'key' => 'admin.role.create',
                'category' => 'admin.role',
                'description' => 'Create Roles',
            ),
            33 => array(
                'key' => 'admin.role.destroy',
                'category' => 'admin.role',
                'description' => 'Destroy Roles',
            ),
            34 => array(
                'key' => 'admin.role.edit',
                'category' => 'admin.role',
                'description' => 'Edit Roles',
            ),
            35 => array(
                'key' => 'admin.role.store',
                'category' => 'admin.role',
                'description' => 'Store Roles',
            ),
            36 => array(
                'key' => 'admin.role.update',
                'category' => 'admin.role',
                'description' => 'Update Roles',
            ),
            37 => array(
                'key' => 'admin.user.index',
                'category' => 'admin.user',
                'description' => 'Search Users',
            ),
            38 => array(
                'key' => 'admin.user.create',
                'category' => 'admin.user',
                'description' => 'Create Users',
            ),
            39 => array(
                'key' => 'admin.user.destroy',
                'category' => 'admin.user',
                'description' => 'Delete Users',
            ),
            40 => array(
                'key' => 'admin.user.edit',
                'category' => 'admin.user',
                'description' => 'Edit Users',
            ),
            41 => array(
                'key' => 'admin.user.store',
                'category' => 'admin.user',
                'description' => 'Store Users',
            ),
            42 => array(
                'key' => 'admin.user.update',
                'category' => 'admin.user',
                'description' => 'Update Users',
            ),
            43 => array(
                'key' => 'admin.user.fake',
                'category' => 'admin.user',
                'description' => 'Update Users',
            ),
            44 => array(
                'key' => 'file.comment.create',
                'category' => 'file.comment',
                'description' => 'Create comment on file',
            ),
            45 => array(
                'key' => 'file.comment.store',
                'category' => 'file.comment',
                'description' => 'Store comment on file',
            ),
            46 => array(
                'key' => 'product.purchase',
                'category' => 'product',
                'description' => 'Purchase a product',
            ),
            47 => array(
                'key' => 'product.index',
                'category' => 'product',
                'description' => 'View Index of products',
            ),
            48 => array(
                'key' => 'file.search.advanced',
                'category' => 'file.search',
                'description' => 'View file search form',
            ),
            49 => array(
                'key' => 'file.search.result',
                'category' => 'file.search',
                'description' => 'Retrieve file search results',
            )

        );


        foreach ($permissions_data as $item) {
            $role = \Romuniverse\User\Models\Permission::create($item);
        }
        \Romuniverse\User\Models\Role::reguard();

    }


}
