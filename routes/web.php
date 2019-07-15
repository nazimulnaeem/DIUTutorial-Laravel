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

//{{ Storage::disk('public')->url('profile/'.$post->user->image) }}


Route::get('/', 'Frontend\PagesController@front_page')->name('index');



Route::get('/contact', 'Frontend\PagesController@contact')->name('contact');
Route::get('/about', 'Frontend\PagesController@about_admin')->name('about_us');

Route::get('/post/search', 'Student\SearchController@post_search')->name('post.search');
Route::get('/question/search', 'Student\SearchController@question_search')->name('question.search');

//
//Route::post('/register', 'Auth\RegisterController@store')->name('register');

Route::get('/registration', 'Auth\Admin\RegistrationController@index')->name('admin.register');
Route::post('/registration', 'Auth\Admin\RegistrationController@store')->name('registration');




//   Route for question
Route::group(['prefix' => 'question'], function () {

    
    Route::get('/', 'Frontend\QuestionController@question_view')->name('question.view');
    Route::get('/{slug}', 'Frontend\QuestionController@question_show')->name('question.show');
    // for insert question
//    Route::get('/create', 'Frontend\QuestionController@insert')->name('user.question.insert');
//    Route::post('/create', 'Frontend\QuestionController@store')->name('question.store');
});






//   Route for student
// 'middleware'=>['auth','user']],
Route::group(['prefix' => 'student','namespace'=>'Student','middleware'=>['auth','user']], function () {

    Route::get('/view', 'DashboardController@view')->name('user.dashboard');

    
    Route::get('settings', 'SettingsController@index')->name('student.settings');
    Route::put('profile-update', 'SettingsController@updateProfile')->name('student.profile.update');
    Route::put('password-update', 'SettingsController@updatePassword')->name('student.password.update');
     
    // teacher function
    Route::get('teacher_post', 'TeachersController@teacher_all_post')->name('student.show.teacher_all_post');
    Route::get('faculty_member', 'TeachersController@all_faculty')->name('student.show.all_faculty');
    Route::get('post_by_teacher', 'TeachersController@postByTeacher')->name('student.view.teacher_post');
    
    // post
    Route::get('favorite_post', 'FavoriteController@favorite_post')->name('student.favorite.post');
    Route::post('favorite/{post}/add', 'FavoriteController@add')->name('student.post.favorite');
    
    Route::get('post/{slug}', 'PostController@post_details')->name('student.post_details');
    Route::get('subject/{slug}', 'PostController@postBySubject')->name('student.view.subject');
    
    // comment
    Route::post('comment/{post}', 'CommentController@store')->name('student.comment.store');
    
    
    // question 
    Route::get('all_question', 'QuestionController@all_question')->name('student.show.all_question');
    Route::post('favorite/{question}/add_to_favorite', 'QuestionController@add_to_favorite')->name('student.question.favorite');
    
    Route::get('question/{slug}', 'QuestionController@question_details')->name('student.question_details');
    Route::get('questions/{slug}', 'QuestionController@questionBySubject')->name('student.view.question');
    
    Route::post('comment/{question}', 'QuestionCommentController@store')->name('student.question.comment.store');
    
});





Route::group(['as'=>'admin.','prefix' => 'admin','namespace'=>'Admin','middleware'=>['auth','admin']], function () {

Route::get('dashboard', 'DashboardController@index')->name('dashboard');
Route::get('settings', 'SettingsController@index')->name('settings');
Route::put('profile-update', 'SettingsController@updateProfile')->name('profile.update');
Route::put('password-update', 'SettingsController@updatePassword')->name('password.update');

Route::resource('tag','TagController');
Route::resource('category','CategoryController');
Route::resource('post','PostController');
Route::resource('question','QuestionController');

Route::put('/post/{id}/approve','PostController@approval')->name('post.approve');
Route::get('/pending/post','PostController@pending')->name('post.pending');

Route::get('favorite','FavoriteController@index')->name('favorite.index');

Route::get('comments','CommentController@index')->name('comment.index');
Route::delete('comments/{id}','CommentController@destroy')->name('comment.destroy');

 Route::get('teacher','TeacherController@index')->name('teacher.index');
 Route::delete('teacher/{id}','TeacherController@destroy')->name('teacher.destroy');
 
 Route::get('student','StudentController@index')->name('student.index');
 Route::delete('student/{id}','StudentController@destroy')->name('student.destroy');
});







Route::group(['as'=>'teacher.','prefix' => 'teacher','namespace'=>'Teacher','middleware'=>['auth','teacher']], function () {

Route::get('dashboard', 'DashboardController@index')->name('dashboard');
Route::get('settings', 'SettingsController@index')->name('settings');
Route::put('profile-update', 'SettingsController@updateProfile')->name('profile.update');
Route::put('password-update', 'SettingsController@updatePassword')->name('password.update');


Route::resource('post','PostController');

Route::get('comments','CommentController@index')->name('comment.index');
Route::delete('comments/{id}','CommentController@destroy')->name('comment.destroy');


//    --------- Teacher view post and question and other things---------

    // teacher function
    Route::get('teacher_post', 'TeacherController@teacher_all_post')->name('show.teacher_all_post');
    Route::get('faculty_member', 'TeacherController@all_faculty')->name('show.all_faculty');
    Route::get('post_by_teacher', 'TeacherController@postByTeacher')->name('view.teacher_post');
    
    // post
    Route::get('favorite_post', 'FavoriteController@favorite_post')->name('favorite.post');
    Route::post('favorite/{post}/add', 'FavoriteController@add')->name('post.favorite');
    
    Route::get('post/details/{slug}', 'DashboardController@post_details')->name('post_details');
    Route::get('subject/{slug}', 'DashboardController@postBySubject')->name('view.subject');
    
    // comment
    Route::post('comment/{post}', 'CommentController@store')->name('comment.store');
    
    
    // question 
    Route::get('all_question', 'QuestionController@all_question')->name('show.all_question');
    Route::post('favorite/{question}/add_to_favorite', 'QuestionController@add_to_favorite')->name('question.favorite');
    
    Route::get('question/{slug}', 'QuestionController@question_details')->name('question_details');
    Route::get('questions/{slug}', 'QuestionController@questionBySubject')->name('view.question');


});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
