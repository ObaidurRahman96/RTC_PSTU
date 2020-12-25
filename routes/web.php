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
	return view('frontend.pages.index');
})->name('index');
Route::post('/user/register', 'Auth\RegisterController@store')->name('user.register');
Route::get('/account/verify/{token}', 'Auth\RegisterController@verify')->name('account.verify');
Route::get('/projects/ongoing', 'Frontend\HomeController@notice')->name('notice');
Route::get('/projects/completed', 'Frontend\HomeController@completedProjects')->name('completed_projects');
Route::get('/projects/submitted', 'Frontend\HomeController@submittedProjects')->name('submitted_project_proposal');
Route::get('/Vission and Mission', 'NoticeController@vission')->name('Vission and Mission');
Route::get('/Gallery', 'NoticeController@gal')->name('Gallery');
Route::get('/Galler', 'NoticeController@ga')->name('Galler');

Route::get('/Resource', 'NoticeController@resourc')->name('Resource');
Route::get('/Contact Us', 'NoticeController@us')->name('Contact Us');
Route::get('/Employees', 'NoticeController@employee')->name('Employees');
Route::get('/Monitor', 'NoticeController@monitor')->name('Monitor');
Route::get('/Present', 'NoticeController@present')->name('Present');
Route::get('/Award', 'NoticeController@award')->name('Award');
Route::get('/Research Project Approval', 'NoticeController@approval')->name('Research Project Approval');









Route::get('/RAC', 'NoticeController@rac')->name('RAC');
Route::get('/Management', 'NoticeController@ma')->name('Management');
Route::get('/Donors', 'NoticeController@don')->name('Donors');
Route::get('/Down', 'NoticeController@download')->name('Down');
Route::get('/technologies', 'Frontend\HomeController@technologies')->name('technologies');



// Route::get('/PSTU RTC Authorities', 'NoticeController@ra')->name('PSTU RTC Authorities');





Auth::routes();

/**
 * Redirect after auth of user
 */
Route::get('/home', 'Frontend\HomeController@index')->name('home');
Route::get('/my-proposal', 'Frontend\HomeController@user_proposal')->name('user_proposal');
Route::get('/my-completed-project', 'Frontend\HomeController@user_completed')->name('completed_project');
Route::get('/my-awarded-project', 'Frontend\HomeController@user_awarded')->name('awarded_project');
Route::get('/new-proposal', 'Frontend\HomeController@proposal_form')->name('proposal_form');
Route::post('/submit-proposal', 'Frontend\HomeController@submit_proposal')->name('submit_proposal');


/**dropdowns routes*/

/**Route::get('/Vission_and_Mission', 'Frontend\DropdownsController@index')->name('Vission_and_Mission');*/


/**
 * Errors
 */
Route::group(['prefix' => 'errors'], function(){
	Route::get('/401', function() { return view('errors.401'); })->name('errors.401');
	Route::get('/404', function() { return view('errors.404'); })->name('errors.404');
	Route::get('/500', function() { return view('errors.500'); })->name('errors.500');
});



/**
 * Admin Section Routes
 */
Route::group(['prefix' => 'admin'], function(){

	
	/**
	 * Admin authentication routes
	*/
	Route::get('/login', 'Auth\Admin\LoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\Admin\LoginController@login')->name('admin.login.submit');
	Route::post('/logout', 'Auth\Admin\LoginController@logout')->name('admin.logout');
	Route::post('password/email', 'Auth\Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
	Route::get('password/reset', 'Auth\Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
	Route::post('password/reset','Auth\Admin\ResetPasswordController@reset');
	Route::get('password/reset/{token}', 'Auth\Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
	Route::get('/change-password', 'Backend\HomeController@chnagePasswordForm')->name('admin.password.form');
	Route::post('/change-password', 'Backend\HomeController@chnagePassword')->name('admin.password.change');


	/**
	 * Admin Dashboard
	*/
	Route::get('/', 'Backend\HomeController@index')->name('admin.home');
	// Route::get('/dashboard', 'Backend\HomeController@index')->name('admin.home');
	// Route::get('/chart', 'Backend\HomeController@chart')->name('admin.chart');
	// Route::get('/form', 'Backend\HomeController@form')->name('admin.form');
	// Route::get('/table', 'Backend\HomeController@table')->name('admin.table');
	
	
	/**
	 * Admin routes
	*/
	Route::group(['prefix' => 'all-admin'], function(){
		Route::get('/', 'Backend\AdminController@index')->name('admin.all_admin.index');
		Route::get('/add', 'Backend\AdminController@create')->name('admin.all_admin.add');
		Route::post('/add', 'Backend\AdminController@store')->name('admin.all_admin.store');
		Route::get('/edit/{id}', 'Backend\AdminController@edit')->name('admin.all_admin.edit');
		Route::post('/edit/{slug}', 'Backend\AdminController@update')->name('admin.all_admin.update');
		Route::get('/delete/{slug}', 'Backend\AdminController@delete')->name('admin.all_admin.delete');
	});


	/**
	 * Setting routes
	*/
	Route::group(['prefix' => 'setting'], function(){
		Route::get('/', 'Backend\SettingController@index')->name('admin.setting.index');
		Route::post('/', 'Backend\SettingController@store')->name('admin.setting.store');
	});


	/**
	 * Menu routes
	*/
	Route::group(['prefix' => 'menu'], function(){
		Route::get('/', 'Backend\MenuController@index')->name('admin.menu.index');
		Route::get('/add', 'Backend\MenuController@create')->name('admin.menu.create');
		Route::post('/add', 'Backend\MenuController@store')->name('admin.menu.store');
		Route::get('/edit/{id}', 'Backend\MenuController@edit')->name('admin.menu.edit');
		Route::post('/edit/{id}', 'Backend\MenuController@update')->name('admin.menu.update');
		Route::get('/delete/{id}', 'Backend\MenuController@delete')->name('admin.menu.delete');
		
		Route::get('/sort', 'Backend\MenuController@sort')->name('admin.menu.sort');
		Route::post('/sort', 'Backend\MenuController@sort_update')->name('admin.menu.sort_update');
	});


	/**
	 * Role routes
	*/
	Route::group(['prefix' => 'role'], function(){
		Route::get('/', 'Backend\RoleController@index')->name('admin.role.index');
		Route::get('/assign/{role}', 'Backend\RoleController@create')->name('admin.role.assign');
		Route::get('/assign/{role}/{admin_id}', 'Backend\RoleController@userCreate')->name('admin.role.user_assign');
		Route::post('/assign', 'Backend\RoleController@store')->name('admin.role.store');
	});


	/**
	 * Admin Access Information
	*/
	Route::get('/log', 'Backend\AdminAccessInfoController@index')->name('admin.log.index');
	
	
	/**
	 * Unit routes
	*/
	Route::group(['prefix' => 'unit'], function(){
		Route::get('/', 'Backend\UnitController@index')->name('admin.unit.index');
		Route::get('/view/{id}', 'Backend\UnitController@show')->name('admin.unit.show');
		Route::post('/add', 'Backend\UnitController@store')->name('admin.unit.store');
		Route::post('/edit/{id}', 'Backend\UnitController@update')->name('admin.unit.update');
		Route::get('/delete/{id}', 'Backend\UnitController@delete')->name('admin.unit.delete');
	});
	
	
	/**
	 * Category routes
	*/
	Route::group(['prefix' => 'category'], function(){
		Route::get('/', 'Backend\CategoryController@index')->name('admin.category.index');
		Route::get('/add', 'Backend\CategoryController@create')->name('admin.category.create');
		Route::post('/add', 'Backend\CategoryController@store')->name('admin.category.store');
		Route::get('/edit/{slug}', 'Backend\CategoryController@edit')->name('admin.category.edit');
		Route::post('/edit/{slug}', 'Backend\CategoryController@update')->name('admin.category.update');
		Route::get('/delete/{slug}', 'Backend\CategoryController@delete')->name('admin.category.delete');
	});


    /**
     * SubCategory Routes
     */
    Route::group(['prefix'=>'subcategory'], function () {
    	Route::get('/', 'Backend\SubcategoryController@index')->name('admin.subcategory.index');
    	Route::get('/add', 'Backend\SubcategoryController@create')->name('admin.subcategory.create');
    	Route::post('/add', 'Backend\SubcategoryController@store')->name('admin.subcategory.store');
    	Route::get('/edit/{slug}', 'Backend\SubcategoryController@edit')->name('admin.subcategory.edit');
    	Route::post('/edit/{slug}', 'Backend\SubcategoryController@update')->name('admin.subcategory.update');
    	Route::get('/delete/{slug}', 'Backend\SubcategoryController@delete')->name('admin.subcategory.delete');
    });


    /**
     * Brand routes
     */
    Route::group(['prefix' => 'brand'], function(){
    	Route::get('/', 'Backend\BrandController@index')->name('admin.brand.index');
    	Route::get('/add', 'Backend\BrandController@create')->name('admin.brand.create');
    	Route::post('/add', 'Backend\BrandController@store')->name('admin.brand.store');
    	Route::get('/edit/{slug}', 'Backend\BrandController@edit')->name('admin.brand.edit');
    	Route::post('/edit/{slug}', 'Backend\BrandController@update')->name('admin.brand.update');
    	Route::get('/delete/{slug}', 'Backend\BrandController@delete')->name('admin.brand.delete');
    });


	/**
     * Database Backup routes
    */
	Route::group(['prefix' => 'backup'], function(){
		Route::get('/', 'Backend\BackupController@index')->name('admin.backup.index');
		Route::get('/new', 'Backend\BackupController@newBackup')->name('admin.backup.new');
		Route::post('/restore', 'Backend\BackupController@restoreBackup')->name('admin.backup.restore');
		Route::get('/delete/{file}', 'Backend\BackupController@deleteBakup')->name('admin.backup.delete');
	});


	/**
    * SMS Routes
    **/
    Route::group(['prefix' => 'sms'], function(){
        Route::get('/send', 'Backend\SMSController@sendSMS')->name('admin.sms.send');
        Route::post('/send', 'Backend\SMSController@sendSMS')->name('admin.sms.get_user');
        Route::post('/submit-send-sms', 'Backend\SMSController@submitSendSMS')->name('admin.sms.submit_send_sms');
        Route::get('/custom', 'Backend\SMSController@customSMS')->name('admin.sms.custom');
        Route::post('/custom', 'Backend\SMSController@customSMS')->name('admin.sms.submit_custom_sms');
        Route::get('/report', 'Backend\SMSController@smsReport')->name('admin.sms.report');
    });


    /**
     * Language
    **/
    Route::get('/language', 'Backend\LanguageController@language')->name('admin.language.index');
    Route::post('/language/insert', 'Backend\LanguageController@insert')->name('admin.language.insert');
    Route::post('/language/create', 'Backend\LanguageController@create')->name('admin.language.create');


    /**
     * Root
    **/
    Route::get('/root', 'Backend\RootController@index')->name('admin.root.index');
    Route::post('/root/create', 'Backend\RootController@create')->name('admin.root.create');

 
    /**
    * Checking
    **/
    Route::group(['prefix' => 'checking'], function(){
        Route::get('/', 'Backend\CheckingController@index')->name('admin.checking.index');
        Route::post('/add', 'Backend\CheckingController@store')->name('admin.checking.store');
        Route::post('/edit/{id}', 'Backend\CheckingController@update')->name('admin.checking.update');
        Route::get('/delete/{id}', 'Backend\CheckingController@delete')->name('admin.checking.delete');
    });



    Route::group(['prefix' => 'project'], function(){
    	Route::get('/', 'Backend\ProjectController@index')->name('admin.project.index');
    	Route::get('/add', 'Backend\ProjectController@create')->name('admin.project.add');
        Route::post('/add', 'Backend\ProjectController@store')->name('admin.project.store');
        Route::get('/edit/{id}', 'Backend\ProjectController@edit')->name('admin.project.edit');
        Route::post('/edit/{id}', 'Backend\ProjectController@update')->name('admin.project.update');
        Route::get('/delete/{id}', 'Backend\ProjectController@delete')->name('admin.project.delete');
    });


    Route::group(['prefix' => 'technology'], function(){
    	Route::get('/', 'Backend\TechnologyController@index')->name('admin.technology.index');
    	Route::get('/add', 'Backend\TechnologyController@create')->name('admin.technology.add');
        Route::post('/add', 'Backend\TechnologyController@store')->name('admin.technology.store');
        Route::get('/edit/{id}', 'Backend\TechnologyController@edit')->name('admin.technology.edit');
        Route::post('/edit/{id}', 'Backend\TechnologyController@update')->name('admin.technology.update');
        Route::get('/delete/{id}', 'Backend\TechnologyController@delete')->name('admin.technology.delete');
    });


    Route::group(['prefix' => 'proposal'], function(){
    	Route::get('/', 'Backend\ProposalController@index')->name('admin.proposal.index');
    	Route::get('/view/{id}', 'Backend\ProposalController@view')->name('admin.proposal.view');
    	Route::get('/accept/{id}', 'Backend\ProposalController@accept')->name('admin.proposal.update_accept');
    	Route::get('/reject/{id}', 'Backend\ProposalController@reject')->name('admin.proposal.update_reject');
    	Route::get('/completed/{id}', 'Backend\ProposalController@completed')->name('admin.proposal.update_completed');
    	Route::get('/awarded/{id}', 'Backend\ProposalController@awarded')->name('admin.proposal.update_award');
        Route::get('/delete/{id}', 'Backend\ProposalController@delete')->name('admin.proposal.delete');
    });


    
});


Route::get('language/{locale}', function ($lang) {
	Session::put('locale', $lang);
	return redirect()->back();
})->name('language');