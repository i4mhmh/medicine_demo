

# 药品区域化销售

### 数据库

* medicine

#### 数据表

>  adm_table

| 字段名   | 解释                 |
| -------- | -------------------- |
| adm_id   | 管理员id             |
| adm_name | 管理员账号           |
| adm_pass | 管理员密码(加密保存) |

> drug_table

| 字段名          | 解释                                         |
| --------------- | -------------------------------------------- |
| medicine_number | 药品分类序号                                 |
| medicine_name   | 药品分类名称(与以下药品详细分类成主从键关系) |



> Chinese_medicine_table

| 字段名               | 解释                       |
| -------------------- | -------------------------- |
| cm_id                | 药品id                     |
| cm_name              | 药品名称                   |
| cm_price             | 药品价格                   |
| cm_GDP               | 药品准字序号               |
| cm_produce_date      | 药品生产日期               |
| cm_dose              | 药品计量(单位mg)           |
| cm_size              | 药品规格                   |
| cm_ud                | 药品用法用量               |
| cm_element           | 药品成分                   |
| cm_effect            | 药品功效                   |
| cm_expiration_date   | 药品保质期                 |
| cm_storage_condition | 药品储存条件               |
| cm_certification     | 企业执行标准               |
| cm_kind              | 药品种类,从属medicine_name |

  > Western_medicine_table

| 字段名              | 解释           |
| ------------------- | -------------- |
| wm_id               | 药品id         |
| wm_name             | 药品名称       |
| wm_bases            | 药品主要成分   |
| wm_character        | 药品性状       |
| wm_pharmacologic    | 药品药理作用   |
| wm_interaction      | 药品相互作用   |
| wm_indication       | 药品适应症     |
| wm_usage            | 药品用法与用量 |
| wm_adverse_reaction | 药品不良反应   |
| wm_attention        | 药品注意事项   |
| wm_withdrawal_time  | 休药期         |
| wm_specification    | 规格           |
| wm_pack             | 包装           |
| wm_storage          | 储存           |
| wm_standard         | 执行标准       |
| wm_approval_number  | 批准文号       |
| wm_produce_date     | 生产日期       |
| wm_produce_number   | 生产编号       |
| wm_batch_number     | 生产批号       |
| wm_date_of_expiry   | 有效期至       |
| wm_license_key      | 许可证号       |
| wm_kind             | 药品分类       |

> salesman_tables

| 字段名             | 解释         |
| ------------------ | ------------ |
| employee_id        | 员工id       |
| employee_number    | 员工账号     |
| employee_name      | 员工姓名     |
| employee_pass      | 员工密码     |
| employee_sex       | 员工性别     |
| employee_home      | 员工家庭住址 |
| employee_pnumber   | 员工手机号   |
| employee_salary    | 员工薪资     |
| employee_sale_data | 员工销售数量 |
| employee_sale_area | 员工销售地区 |

> shopper_table

| 字段名    | 解释         |
| --------- | ------------ |
| s_id      | 顾客id       |
| s_number  | 顾客账号     |
| s_pass    | 顾客密码     |
| s_name    | 顾客姓名     |
| s_pnumber | 顾客电话号码 |
| s_home    | 顾客家庭住址 |
| s_age     | 顾客年龄     |
| s_sex     | 顾客性别     |



~~~markdown
mysql数据库外键问题:
设置外键成功创建索引,然而并没有起到作用,明天早上再试zzz
~~~

### Coding储备

#### 语法

> $_REQUEST

~~~php
#用于接收html发回来的参数
<html>
<body>
 
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name: <input type="text" name="fname">
<input type="submit">
</form>

<?php 
$name = $_REQUEST['fname']; 
echo $name; 
?>
</body>
</html>
~~~

#### 函数

~~~php
#创建函数
<?php
    function foo(){
    	#函数体
}		  
    ?>
#return 返回函数值
        
#添加参数
function foo($a){
        echo $a;
    }
foo('nice')
#多个参数照旧
~~~

#### 魔术常量

> 不区分大小写

#####  _\_LINE__

~~~markdown
<?php
	echo __line__;#输出行号
?>
~~~

##### \_\_FILE__

~~~php
#语法可同上	输出当前文件位于xxx绝对路径
~~~

##### \_\_FUNCTION__

~~~php
#返回当前函数名
~~~

##### \_\_CLASS__

~~~php
#返回当前类名
~~~

#### 面向对象

~~~markdown
# 类
− 定义了一件事物的抽象特点。类的定义包含了数据的形式以及对数据的操作。

# 对象
− 是类的实例。

# 成员变量
− 定义在类内部的变量。该变量的值对外是不可见的，但是可以通过成员函数访问，在类被实例化为对象后，该变量即可称为对象的属性。

# 成员函数
− 定义在类的内部，可用于访问对象的数据。

# 继承
− 继承性是子类自动共享父类数据结构和方法的机制，这是类之间的一种关系。在定义和实现一个类的时候，可以在一个已经存在的类的基础之上来进行，把这个已经存在的类所定义的内容作为自己的内容，并加入若干新的内容。

# 父类
− 一个类被其他类继承，可将该类称为父类，或基类，或超类。

# 子类
− 一个类继承其他类称为子类，也可称为派生类。

# 多态
− 多态性是指相同的函数或方法可作用于多种类型的对象上并获得不同的结果。不同的对象，收到同一消息可以产生不同的结果，这种现象称为多态性。

# 重载
− 简单说，就是函数或者方法有同样的名称，但是参数列表不相同的情形，这样的同名不同参数的函数或者方法之间，互相称之为重载函数或者方法。

# 抽象性
− 抽象性是指将具有一致的数据结构（属性）和行为（操作）的对象抽象成类。一个类就是这样一种抽象，它反映了与应用有关的重要性质，而忽略其他一些无关内容。任何类的划分都是主观的，但必须与具体的应用有关。

# 封装
− 封装是指将现实世界中存在的某个客体的属性与行为绑定在一起，并放置在一个逻辑单元内。

# 构造函数
− 主要用来在创建对象时初始化对象， 即为对象成员变量赋初始值，总与new运算符一起使用在创建对象的语句中。

# 析构函数
− 析构函数(destructor) 与构造函数相反，当对象结束其生命周期时（例如对象所在的函数已调用完毕），系统自动执行析构函数。析构函数往往用来做"清理善后" 的工作（例如在建立对象时用new开辟了一片内存空间，应在退出前在析构函数中用delete释放）。
~~~

##### 什么是面向对象

~~~markdown
	对象是现实世界的抽象,用自己的话来讲就是一个事物对另一个事物动作信息的接收以及处理的方法集合.
~~~

##### 类定义

~~~php
<?php
    class phpClass{ # class 后跟类名
		var $foo = 1;#类中用var定义变量
    	function fun1($a){
            ...
        }
    ...
}
?>
~~~

##### 关键字

~~~php
$this 代表当前对象
# 片段代码表述
<?php
class foo{
    function fun1(){
       $this -> url ='aaaa';
    }
}
$f = new foo;#新建一个对象
$f -> fun1();# 调用fun1

$self 代表当前类
$parent 代表父类
~~~

##### 构造函数 __construct

> 就是把变量加到类后边???

##### 析构函数 __destruct

> 对象生命周期结束时自动执行

##### 继承

> extends

~~~php
<?php
    class child extends parents{
    ...
}
?>
    #不支持多继承
    #子类可以重写父类
~~~

##### 访问控制

~~~php
public protected private
~~~

##### 接口





#### Laravel框架

##### phpstudy

~~~markdown
在phpstudy里边新建网站,流程不懂可以百度很简单不再做赘述
~~~

##### composer

~~~markdown
注: php版本需要7.x.x
1. phpstudy内置composer,切换中国国内镜像
    ` composer config -g repo.packagist composer https://packagist.phpcomposer.com
2. 创建laravel项目
    ` composer create-project laravel/laravel --prefer-dist ./
    # create-project : 新建项目
    # laravel/laravel : 项目为laravel
    # --prefer-dist  : 用压缩包形式下载
    # ./              :目录./后可以跟一个目录名也可以直接下载到当前文件夹
    #####	可以在laravel/laravel后跟=x.x.x   指定版本号
3. composer更新 
    ` composer self-update
~~~

##### laravel目录结构大致解析

~~~markdown
# 目录    
    ├── app         	:存放核心代码文件   	      
    ├── bootstrap       :启动目录,存放laravel自动载入需要的类文件
    ├── config          :存放项目的配置文件 ps 数据库等
    ├── database        :数据迁移目录
    ├── public        !!:这个相当于网站的根目录(用户可访问的)里边放静态文件
    ├── resources      	:存放视图文件,存放图片
    ├── routes          :路由目录
    ├── storage         :缓存,日志记录
    ├── tests          	xx
    ├── vendor         	:存放第三方文件
# 文件
	.env	:主要是设置一些系统相关的环境配置文件信息
	artisan	!!!!:用于自动生成代码,用户写好后执行 ~php artisan
~~~

##### laravel框架启动

> 到根目录执行 ~php artisan serve启动,跟apache无关 不推荐
>
> 可以直接启动apache

##### 路由规则

~~~php
#./routes/web.php
<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

#语法
/*
	Route::get($uri, $callback);
    Route::post($uri, $callback);
    Route::put($uri, $callback);
    Route::patch($uri, $callback);
    Route::delete($uri, $callback);
    Route::options($uri, $callback);
*/

#当需要响应多种HTTP请求时
/*	
	#get post
	法1	推荐:
	Route:match(['get','post'],'url',function(){
	//function是回调函数就是$callback
	})
	法2	方便:
	Route:any('url',function(){
	//
	})
*/

#传参
/*
	法1:
    Route::get('/test/{id?}',function($id=''){
        echo '这是id'.$id;
    });
    #指定可选参数在参数名后面加?,然后指定一个默认变量即可
	
	法2:
	Route::get('/test',function(){
    echo '这是id'.$_GET['id'];
    });
    #直接在url后跟?id=xxx然后用get接收参数即可
*/
~~~

##### 路由别名

> 命名路由为生成 URL 或重定向提供了便利。实现也很简单，在路由定义之后使用 name 方法链的方式来实现

~~~markdown
例子:
Route::get('/test',function(){
    echo '这是id'.$_GET['id'];
})->name('route1');
格式 		->name('别名');
查看已经设置的路由:
	php artisan route:list
~~~

##### 路由群组

> 当有类似以下:
>
> /admin/index
>
> /admin/login
>
> /admin/add
>
> 等共有admin前缀 

~~~markdown
处理方法:
	使用prefix属性指定前缀
	Route::group(['prefix' => 'admin'],function(){
        Route::get('demo',function(){
            echo 'a';
        });
	});
~~~

##### 控制器

> ./app/Http/Controllers

~~~markdown
1. 命名规范
		大驼峰 + Controller.php
2. 结构代码的书写
		可以一键自动生成
		方法:	>php artisan make:controller TestController
		当要创建分目录控制器
		方法:	>php artisan make:controller 目录/控制器名
3. 绑定路由
		路由命名规范: PCA P是平台目录 C是Controller控制器 A是函数名称
		1.生成TestController.php
			<?php
                namespace App\Http\Controllers;
                use Illuminate\Http\Request;
                class TestController extends Controller
                {
                    public function test1(){
                        phpinfo();
                    }
                }
			?>
		2.在./routes/web.php里添加:
				Route::get('/home/test/test1','TestController@test1');
				格式: Route::请求方式('urls','控制器名称@函数名')
		3.在浏览器中输入相应地址即可看到效果
4. 分目录控制器的路由
		例:
			1.	新建home/TestController.php php artisan home\TestController
					public function demo(){
                        echo 'ok';
                    }
			2.	在./routes/web.php里添加
					Route::get('/home/test/test2','home\TestController@demo');
					语法 Route::请求方式('urls','目录\控制器名称@函数名')
5. 接受用户输入
		
~~~

##### 数据库操作

> mysql

~~~markdown
# 1. 修改配置文件
		直接修改根目录下./env文件,
            DB_CONNECTION=mysql
            DB_HOST=127.0.0.1
            DB_PORT=3306
            DB_DATABASE=数据库名
            DB_USERNAME=用户名
            DB_PASSWORD=密码
# 2. 构造方法(增删改查)
		在./app/Http/Controllers/ 目录下新建控制器/db/TestController
			php artisan make:controller db/TestController 
		/db/TestController.php
			use DB; //引入DB类
            class TestController extends Controller
            {
                //新建add类
                public function add(){
                    $db = DB::table('chinese_medicine_table'); //指定表
                    $res = $db -> insert(
                        [
                            'cm_id' => 2,	// '字段名' => '数据'
                            'cm_name' => '三味散',
                            'cm_price' => 33.20,
                            'medicine_number' => 30,
                        ]
                    );
                    dd($res);
                }
                
                //新增update类
                public function update(){
                	
                    //where判断('字段','运算符','修改后的值')
                    $db = DB::table('chinese_medicine_table');
            //自增1 减用decrement
            //$res = $db -> where('cm_id', '=', 2) ->increment('medicine_number',1)
                    $res = $db -> where('cm_id', '=', 2) -> update(
                        [
                            'cm_price' => 20,
                        ],
                        );
                    dd($res);//执行后返回1表示受到影响的行数
                }
                
                //新增select类
                public function select(){
                	// get()
                    $db = DB::table('chinese_medicine_table')-> where('cm_id','=',2) -> 				get();
                    foreach($db as $key => $value){
                        echo "药名是:{$value -> cm_name}";
                    }
                }
                
                //新增del类
                public function del(){
                    $db = DB::table('chinese_medicine_table');
                    $res = $db -> where('cm_name','=','三味散') -> delete();
                    dd($res);
                }
            }           
# 3. 建立路由与方法组合
		./routes/web.php	新增
			Route::group(['prefix' => 'db'], function () {
            Route::get('add','db\TestController@add');
            Route::get('update','db\TestController@update');
            Route::get('select','db\TestController@select');
            Route::get('del','db\TestController@del');
            });
# 4. 访问http://demo.com/db/xxx 查看效果

# 总结
	1. 增删改查前先指定数据表DB::table('数据表');
	2. 增加用->insert([],[],[])
	3. 删除用->delete();
	4. 修改用->update()
    5. 查询用->get()
    6. where('字段','运算符','修改后的值')用于指定条件后跟 -> xxx
       where('','','') -> first();	等价于limit 1
 	   where('','','') -> value('')	等价于取出指定单个值 
 	   where('','','') -> select('','') -> get();
        -> orderby('','排序规则') -> get();
# 拓展
	1. 执行任意sql语句
		DB::statement("insert into chinese_medicine_table values(null,'')");
		DB::select("select * from medicine");
	2. 
~~~

