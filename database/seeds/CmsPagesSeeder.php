<?php

use Illuminate\Database\Seeder;

class CmsPagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Romuniverse\Cms\Models\Page::unguard();
        \Romuniverse\Cms\Models\Page::truncate();

        $pages = array(
            0 => array(
                'slug' => 'about-us',
                'title' => 'About Us',
                'description' => 'About Us Description',
                'template' => 'frontend::pages.cms.pages.about-us',
                'meta_title' => 'meta title for about us',
                'meta_description' => 'meta description for about us',
            ),
            1 => array(
                'slug' => 'home',
                'title' => 'Home',
                'description' => 'Description',
                'template' => null,
                'meta_title' => 'Home',
                'meta_description' => 'home',
            )
        );

        foreach($pages as $page)
        {
            \Romuniverse\Cms\Models\Page::create($page);
        }
        \Romuniverse\Cms\Models\Page::reguard();
    }
}
