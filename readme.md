Перед созданием приложения нужно настроить среду
добавив хелпер в корень сайта
сам хелпер по адресу
https://github.com/barryvdh/laravel-ide-helper

это тогда дает возможность взаимодействовать с роутером


##Созадние приложения
composer create-project laravel/laravel your-project-name 4.0.

## Запустить встроенный сервер
php artisan serve
Laravel development server started on http://localhost:8000


## в 5,2 5,3 нет аунтификации по умолчанию
для ее создания
php artisan make:auth

потом можно посмотреть тут
http://your-app.dev/register

Для тоого чтобы зерегистрироваться нужно
добавить базу и занести ее в файл .env, убедиться
что в config/database есть подходящий драйвер, выполнить
миграции php artisan migrate, после этого можно регистрироваться


## Подружить blade с angular

нужно переж выводом ангуляра поставить '@'

## Просмотр текущих роутов
php artisan route:list

##Создание контроллера
    php artisan make:controller + Название контролера
    
ВАлидация данных в контролере

https://www.youtube.com/watch?v=3hSJLgRvn-E&list=PLoonZ8wII66gwRthiiZK5UwxIYqNIDmAF&index=6
    
    
Чтобы сделать редирект в контролере нужно

    return redirect()->route('todo-show', $id);

Проверка данных на валидность

при этом надо 
подключить в файле
/home/gordondalos/PhpstormProjects/laravel_app/config/app.php

     'aliases' => [
    Input' => Illuminate\Support\Facades\Input::class,

    use Illuminate\Support\Facades\Validator;
    use Illuminate\Support\Facades\Input;

    $rules = array('id'=>'required');
    $validator = Validator::make(Input::all(), $rules);
    if($validator->fails()){
        return Redirect::route('todo-show')->withErrors($validator);
    }
при этом нужно в файле вывода роутера напистаь вывод ошибок

     @foreach($errors->all()->$error)
        <div class="errors">{{$error}}</div>
    @endforeach


##Созадие и работа с роутерами
**Например:** 
    Route::get('/', ['as'=> 'posts', 'uses'=>'PostController@index']);

##Создание модели, миграций
    php artisan make:model + Название модели -m
Чтобы создались миграции нужно добвать ключ -m


Для создания отдельной миграции
php artisan make:migration create_users_table --table=users --create

Далее мо миграции заполняем поля.
например так

    public function up()
        {
            Schema::create('posts', function (Blueprint $table) {
                $table->increments('id');
                $table->string('title');
                $table->string('slug')->unique(); // это заголовок на латинице чтобы в урл впихнуть
                $table->text('excerpt');
                $table->text('content');
                $table->timestamp('published_at');
                $table->boolean('published')->default(false);
                $table->timestamps();
            });
        }
    
    
Далее выполняем команду для заполнения бд

    php artisan migrate

   
Для удаления таблицы пишем  php artisan migrate:rollback

или можно обновить поля удалив все данные и выполнив миграции заново
php artisan migrate:refresh
    
Получить все данные из какой то таблицы можно так

    class Post extends Model
    {
        public function getAll(){
            $allPost = Post::all();
            return $allPost;
        }
    }

вызвав в контролере метод getAll
или прямо так из контролера

    $allPost = Post::get();

    
    
    
    
## Запускаем заполнение бд тестовыми данными

смотри тут https://www.youtube.com/watch?v=n8kMo9gGHFI&index=5&list=PLoonZ8wII66gwRthiiZK5UwxIYqNIDmAF

Для этого реализовали класс тестирования, добавили его,
в главную функцию ран, и выполнили команду

    php artisan db:seed

Это добавит тестовые данные в указанную таблицу бд

##Передадим полученные данные из контролера в представление

    class PostController extends Controller
    {
        public function index(){
        
        	$posts = Post::All(); // Получить все данные из таблицы
        	
    	    dd($posts); // Ларавельная функция дамп и дай
    	    
        	return view('post.index',['posts'=>$posts]); // Передаем полученные данные из контролера в представление
        }
    }

вываливал ошибку 500
напиал php artisan optimize
помогло


##Работа с шаблоном
Для того ттобы подключить один шаблон в другой
используем




    @include('НазваниеПапки.НазваниеШаблона')
    @include('common.footer')
    

blade подхватит файлы если они называются blade.php
например все это дело может выглядить так

    <!DOCTYPE html>
        
        <html lang="en">
                
            @include('layouts.header')
                
            <body ng-app="myApp">
                
                @include('layouts.navigation')
                                
                @yield('content')
                    
            @include('layouts.footer')
        
    </body>
    </html>
    
    
    
Вывод данных можно реализовать так, здесь 
    
     @if($posts->count())
                    @foreach ($posts as $post)
                        <article >
                            <h2>{{$post->title}}</h2>
                            <p>{{Str::limit($post->body,50)}}</p>
                            <a href="{{$post->slug}}">Читать далее...</a>
                        </article>
                        <div class="clearfix"></div>
                    @endforeach
    
                @else
                    <h1>Посты не найдены</h1>
                @endif

Этот код 
{{ str_limit($post->body, $limit = 150, $end = '...') }}
выведет лимитированный список

ссылки пишут так

    <a href="posts/{{$post->slug}}">Читать далее...</a>
    <a href="{{ route('get-post', $post->slug ) }}">Читать далее...</a>
    
В случае отправки формы нужна защита от крос сайтового скриптинга
нужно добавить
<input type="hidden" name="_token" value="{{ csrf_token() }}">

Для того чтобы форма работала в таком ключе

    {!! Form::open(array('route' => 'close_task', 'method'=>'Post'))!!}
        <input type="hidden" name="id" value="{{$todo->id}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit" class="btn btn-primary pull-right" value="Завершить">
    {!! Form::close()!!}
    
нужно подключить зависимости
в композер

    "require": {
        "laravelcollective/html": "5.2.*"
    }


composer update 

Next, add your new provider to the providers array of config/app.php:

    'providers' => [
        // ...
        Collective\Html\HtmlServiceProvider::class,
        // ...
    ],
  
Finally, add two class aliases to the aliases array of config/app.php:

    'aliases' => [
        // ...
          'Form' => Collective\Html\FormFacade::class,
          'Html' => Collective\Html\HtmlFacade::class,
        // ...
    ],

After making this update this code worked for me on a new installation of Laravel 5.2:

    {!! Form::open(array('url' => 'foo/bar')) !!}
        //
    {!! Form::close() !!}
    
I got this information here: https://laravelcollective.com/docs/5.2/html
