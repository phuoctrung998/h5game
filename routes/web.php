<?php

use Illuminate\Support\Facades\Route;

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





Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function() {

        //dashboard
        Route::get('/dashboard', 'Admin\AdminController@show_dashboard')->name('dashboard')->middleware('checkadmin');
        //login.logout
        Route::get('/login', 'Admin\LoginController@getLogin')->name('admin.login');
        Route::post('/login', 'Admin\LoginController@postLogin')->name('admin.uplogin');
        //admin
        Route::get('/list', 'Admin\AdminController@list')->name('admin.manager.list')->middleware('checkadmin');
        //edit
        Route::get('/edit/{id}','Admin\AdminController@showFormEditAdmin')->middleware('checkadmin');
        Route::Post('/edit/{id}','Admin\AdminController@edit')->middleware('checkadmin');
        Route::get('/delete/{id}','Admin\AdminController@delete')->middleware('checkadmin');
        //add
        Route::get('/add','Admin\AdminController@add')->name('admin.manager.add')->middleware('checkadmin');
        Route::Post('/add','Admin\AdminController@up')->name('admin.manager.up')->middleware('checkadmin');

    //Post
    Route::prefix('post')->middleware('checkadmin')->group(function() {
        //add
        Route::get('/addpostcates','Admin\PostController@add_postcates')->name('admin.post.add');
        Route::Post('/addpostcates','Admin\PostController@up_postcates')->name('admin.post.up');
        Route::get('/addpost','Admin\PostController@add_post')->name('admin.post.addPost');
        Route::Post('/addpost','Admin\PostController@up_post')->name('admin.post.upPost');
        //list
        Route::get('/postlist', 'Admin\PostController@post_list')->name('admin.post.listPost');
        Route::get('/postcateslist', 'Admin\PostController@postcates_list')->name('admin.post.listPostcates');

        //edit
        Route::get('/editpost/{id}', 'Admin\PostController@showFormEditPost');
        Route::post('/editpost/{id}', 'Admin\PostController@editpost');
        Route::get('/deletepost/{id}', 'Admin\PostController@deletepost');

        Route::get('/editpostcates/{id}', 'Admin\PostController@showFormEditPostcates');
        Route::post('/editpostcates/{id}', 'Admin\PostController@editpostcates');
        Route::get('/deletepostcates/{id}', 'Admin\PostController@deletepostcates');

});

    //Contents
    Route::prefix('contents')->middleware('checkadmin')->group(function() {

        //list
        Route::get('/list', 'Admin\ContentsController@list')->name('admin.contents.list');
        //edit
        Route::get('/edit/{id}', 'Admin\ContentsController@showFormEditcontents');
        Route::post('/edit/{id}', 'Admin\ContentsController@edit');
        Route::get('/delete/{id}', 'Admin\ContentsController@delete');


});

    //Games
    Route::prefix('game')->middleware('checkadmin')->group(function() {
        //add game
        Route::get('/addgamecates','Admin\GameController@add_gamecates')->name('admin.game.add');
        Route::post('/addgamecates','Admin\GameController@up_gamecates')->name('admin.game.up');

        //add game cates
        Route::get('/addgame','Admin\GameController@add_game')->name('admin.game.addgame');
        Route::post('/addgame','Admin\GameController@up_game')->name('admin.game.upgame');

        //favorite
        Route::get('/addfavorite','Admin\CatesIndexController@add_favorite')->name('admin.game.addfavorite');
        Route::post('/addfavorite','Admin\CatesIndexController@up_favorite')->name('admin.game.upfavorite');

        //list
        Route::get('/gamelist', 'Admin\GameController@game_list')->name('admin.game.listgame');
        Route::get('/gamecateslist', 'Admin\GameController@gamecates_list')->name('admin.game.listgamecates');
        Route::get('/catesindexlist', 'Admin\CatesIndexController@catesIndex_list')->name('admin.game.listcatesIndex');
        Route::get('/favoritelist', 'Admin\CatesIndexController@favorite_list')->name('admin.game.listfavorite');


        //edit
        Route::get('/editgame/{id}', 'Admin\GameController@showFormEditgame');
        Route::post('/editgame/{id}', 'Admin\GameController@editgame');
        Route::get('/deletegame/{id}', 'Admin\GameController@deletegame');

        Route::get('/editgamecates/{id}', 'Admin\GameController@showFormEditgamecates');
        Route::post('/editgamecates/{id}', 'Admin\GameController@editgamecates');
        Route::get('/deletegamecates/{id}', 'Admin\GameController@deletegamecates');

        Route::get('/editcatesIndex/{id}', 'Admin\CatesIndexController@showFormEditcatesIndex');
        Route::post('/editcatesIndex/{id}', 'Admin\CatesIndexController@editcatesIndex');
        Route::get('/deletecatesIndex/{id}', 'Admin\CatesIndexController@deletecatesIndex');

        Route::get('/editfavorite/{id}', 'Admin\CatesIndexController@showFormEditfavorite');
        Route::post('/editfavorite/{id}', 'Admin\CatesIndexController@editfavorite');
        Route::get('/deletefavorite/{id}', 'Admin\CatesIndexController@deletefavorite');
    });

    //language
    Route::prefix('language')->middleware('checkadmin')->group(function()
    {
        Route::get('/add','Admin\LanguageController@add')->name('admin.language.add');
        Route::post('/add','Admin\LanguageController@up')->name('admin.language.up');
        //list
        Route::get('/list', 'Admin\LanguageController@list')->name('admin.language.list');

        //edit
        Route::get('/edit/{id}', 'Admin\LanguageController@showFormEditlanguage');
        Route::post('/edit/{id}', 'Admin\LanguageController@edit');
        Route::get('/delete/{id}', 'Admin\LanguageController@delete');
    });

   //tags
    Route::prefix('tag')->middleware('checkadmin')->group(function() {
        //add
        Route::get('/addtagsIndex','Admin\TagsController@add_tagsIndex')->name('admin.tags.add');
        Route::post('/addtagsIndex','Admin\TagsController@up_tagsIndex')->name('admin.tags.up');
        Route::get('/addtags','Admin\TagsController@add_tags')->name('admin.tags.addTags');
        Route::post('/addtags','Admin\TagsController@up_tags')->name('admin.tags.upTags');
        //list
        Route::get('/tagslist', 'Admin\TagsController@tags_list')->name('admin.tags.listTags');
        Route::get('/tagsIndexlist', 'Admin\TagsController@tagsIndex_list')->name('admin.tags.listTagsIndex');

        //edit
        Route::get('/edittags/{id}', 'Admin\TagsController@showFormEditTags');
        Route::post('/edittags/{id}', 'Admin\TagsController@edittags');
        Route::get('/deletetags/{id}', 'Admin\TagsController@deletetags');

        Route::get('/edittagsIndex/{id}', 'Admin\TagsController@showFormEditTagsIndex');
        Route::post('/edittagsIndex/{id}', 'Admin\TagsController@edittagsIndex');
        Route::get('/deletetagsIndex/{id}', 'Admin\TagsController@deletetagsIndex');

});

    //comment
    Route::prefix('comment')->middleware('checkadmin')->group(function()
    {

        Route::get('/add','Admin\CommentController@add')->name('admin.comment.add');
        Route::post('/add','Admin\CommentController@up')->name('admin.comment.up');

        //list
        Route::get('/list', 'Admin\CommentController@list')->name('admin.comment.list');

        //edit

        Route::get('/edit/{id}', 'Admin\CommentController@showFormEditcomment');
        Route::post('/edit/{id}', 'Admin\CommentController@edit');
        Route::get('/delete/{id}', 'Admin\CommentController@delete');

    });


    Route::prefix('user')->middleware('checkadmin')->group(function() {
        Route::get('/list', 'Admin\UserController@user_list')->name('admin.user.list');
        Route::get('/edit/{id}','Admin\UserController@showFormEditUser');
        Route::post('/edit/{id}','Admin\UserController@edit');
        Route::get('/delete/{id}','Admin\UserController@delete');
    });









});

