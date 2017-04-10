<?php
/**
 * Created by FS.
 * User: FS
 * Date: 2017/3/14
 * Time: 22:52
 */
require_once 'vendor/autoload.php';

use FS\Ken;

$m = new Mustache_Engine(array(
    'template_class_prefix' => '__MyTemplates_',
    'cache' => dirname(__FILE__).'/tmp/cache/mustache',
    'cache_file_mode' => 0666, // Please, configure your umask instead of doing this :)
    'cache_lambda_templates' => true,
    'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__).'/views'),
    'partials_loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__).'/views/partials'),
    'helpers' => array('i18n' => function($text) {
        // do something translatey here...
    }),
    'escape' => function($value) {
        return htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
    },
    'charset' => 'ISO-8859-1',
    'logger' => new Mustache_Logger_StreamLogger('php://stderr'),
    'strict_callables' => true,
    'pragmas' => [Mustache_Engine::PRAGMA_FILTERS],
));

$ken = new Ken();
$ken->setInCa(false);
$ken->setName('Kwan');
$ken->setValue(3000);

//echo $m->render('hello, {{ planet }}', ['planet'=>'World']);
//$template = './views/user.mustache';
echo $m->loadTemplate('user')->render($ken);