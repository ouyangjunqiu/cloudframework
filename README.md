# cloudframework
云框架，yii扩展框架，支持包命名空间

yii

Yii 是一个高性能，基于组件的 PHP 框架，用于快速开发现代 Web 应用程序。
名字 Yii （读作 易）在中文里有“极致简单与不断演变”两重含义，也可看作 Yes It Is! 的缩写。

云框架

云框架在yii的基础上扩展了部分功能，以至于更好的支持包命名空间


使用：

1. 创建一个web项目,项目的目录结构为

     |- data 运行后的资源目录
     
     |- library cloudframework或者其它第三方包(需要完成自动加载命令)
     
     |- system 应用程序目录
     
     |- web  web入口文件目录
     

2. 创建一个项目,web/index.php

    <?php
    
         use cloud\Cloud;
         include dirname(dirname(__FILE__))."/library/cloud/bootstrap.php";
         error_reporting( E_ALL | E_STRICT );
         header('Access-Control-Allow-Headers: Origin, Accept, Content-Type, Authorization, ISCORS');
         header('Access-Control-Allow-Credentials: true');
         header('Access-Control-Allow-Methods: POST, GET, PUT, OPTIONS, DELETE');
         header('Access-Control-Allow-Origin:*');
         if( $_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
             exit();
         }
         $app = Cloud::createWebApplication();
         $app->run();
         exit;


3. 创建一个module,案例main.

     3.1创建 system/modules/main/MainModule.php

    <?php
    
            namespace application\modules\main;
            use cloud\core\modules\Module;
            class MainModule extends Module {
            }

     3.2 创建 system/modules/main/install/config.php 为模块配置文件


    <?php
    
         return array(
             'param' => array(
                 'name' => '核心模块',
                 'description' => '系统核心模块',
                 'author' => 'oShine',
                 'version' => '1.0',
                 'indexShow' => array(
                     'link' => 'main/default/index',
                 ),
             ),
             'config' => array(
                 'modules' => array(
                     'main' => array(
                         'class' => 'application\modules\main\MainModule'
                     )
                 ),
                 'components' => array(
                     'errorHandler' => array(
                         'errorAction' => 'main/default/error',
                     ),
                     'messages' => array(
                         'extensionPaths' => array(
                             'main' => 'application.modules.main.language'
                         )
                     )
                 ),
             ),
         );
    

     3.3 创建 system/modules/main/controllers/DefaultController.php 为控制器文件
     
    <?php
    
        namespace application\modules\main\controllers;
        use cloud\core\controllers\Controller;
        class DefaultController extends Controller
        {
            public function actionIndex(){
                return $this->render('index');
            }
        }

     3.4   创建 system/modules/main/views/default/index.php 为视图文件
     
          <p>hello world!</p>

     3.5 访问:http://localhost/web/index.php?r=main/default/index
