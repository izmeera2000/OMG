<?php require_once('route.php');




function index()
{
	require_once('views/index.php');
}

function shop()
{
	require_once('views/shop/shop.php');
}
function register()
{
	require_once('views/register.php');
}

function login()
{
	require_once('views/login.php');
}
function logout()
{
	require_once('admin/server.php');

	session_destroy();
	unset($_SESSION['username']);
	header("location: " . $site_url . "");
}


//user
function user_dashboard()
{
	require_once('views/user/dashboard.php');
}
function user_profile()
{
	require_once('views/user/profile.php');
}
function user_adressbook()
{
	require_once('views/user/addressbook.php');
}



//custom pages
function page404()
{
	die('Page not found. Please try some different url.');
}




//If url is http://localhost/route/home or user is at the maion page(http://localhost/route/)
if ($request == '' or $request == '/')
	index();
//If url is http://localhost/route/about-us
else if ($request == 'shop')
	shop();
else if ($request == 'login')
	login();
else if ($request == 'logout')
	logout();
else if ($request == 'register')
	register();
//If url is http://localhost/route/contact-us
else if ($request == 'user')
	user_dashboard();
else if ($request == 'user/profile' or $request == 'user/profile/')
	user_profile();
else if ($request == 'user/addressbook' or $request == 'user/addressbook/')
	user_profile();
//If user entered something else
else {
	echo $request;
	http_response_code(404);
	page404();
}


?>