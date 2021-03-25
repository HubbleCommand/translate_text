<?php
namespace Concrete\Package\TranslateText;

use Concrete\Core\Package\Package;
use Concrete\Core\Block\BlockType\BlockType;

use View;
use Loader;
use Log;
use \Concrete\Core\Page\Single as SinglePage;

use \Concrete\Core\Page\Type\PublishTarget\Type\Type as PublishTargetType;

defined('C5_EXECUTE') or die('Access Denied.');
//require_once __DIR__ . '/vendor/autoload.php'; belongs in on_start()
//Look at C5 Documentation : https://documentation.concrete5.org/developers/packages/overview
//And : https://github.com/cryophallion/C5-BoilerplatePackageController/blob/master/packageName/controller.php
ini_set("memory_limit","256M");
class Controller extends Package
{
    protected $pkgHandle = 'translate_text';
    protected $appVersionRequired = '8.0'; //SHOULD BE ABOVE 8, otherwise the attribute autoload stuff won't work!!!
    protected $pkgVersion = '0.0.0.1';

    //Importing Custom Code namespaces with PSR-4 autoloader (to include REST routes & Timbre class for Timbre attribute type)
    protected $pkgAutoloaderRegistries = [
        'src/TranslateText' => 'TranslateText\\'
    ];

    public function getPackageDescription()
    {
        return t("A package that allows you to add text to translate without writing it in a global area.");
    }

    public function getPackageName()
    {
        return t('Translate Text');
    }

    public function install (){
        $pkg = parent::install();
        SinglePage::add('/dashboard/system/translate_text', $pkg);
        SinglePage::add('/dashboard/system/translate_text/add_translation_text', $pkg);
    }
}
