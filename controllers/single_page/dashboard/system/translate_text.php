<?php
namespace Concrete\Package\TranslateText\Controller\SinglePage\Dashboard\System;

use Concrete\Core\Page\Controller\DashboardPageController;

//NOTE: this is only to redirect from the thinkstory main menu
class ThinkStory extends DashboardPageController    //Not DashboardSitePageController for some reason, look at the migration tool
{
    public function view()
    {
        $this->redirect('/dashboard/system/translate_text/add_translation_text');
    }
}
