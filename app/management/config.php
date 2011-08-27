<?php
#Please fill the MySQL management section and the Hotel management section and TheHabbos' API section below to be able to get RevCMS functioning well.


/*
*
*	MySQL management
*
*/

$_CONFIG['mysql']['connection_type'] = 'pconnect'; //Type of connection: It must be connect, or pconnect: if you want a persistent connection.

$_CONFIG['mysql']['hostname'] = 'localhost'; //MySQL host

$_CONFIG['mysql']['username'] = 'root'; //MySQL username

$_CONFIG['mysql']['password'] = 'root'; //MySQL password

$_CONFIG['mysql']['database'] = 'rev_phoenix'; //MySQL database

$_CONFIG['mysql']['port'] = '3306'; //MySQL's port

/*
*
*	Hotel management  - All URLs do not end with an "/"
*
*/

$_CONFIG['hotel']['url'] = 'http://localhost/RevCMS'; //Does not end with a "/"

$_CONFIG['hotel']['name'] = 'Habbo'; // Hotel's name

$_CONFIG['hotel']['desc'] = 'Best hotel around!'; //Hotel's description 

$_CONFIG['hotel']['email'] = 'help@myhotel.net'; //Where the help queries from users are emailed to.

$_CONFIG['hotel']['in_maint'] = false; //False if hotel is NOT in maintenance. True if hotel IS in maintenance

$_CONFIG['hotel']['motto'] = 'I <3 ' . $_CONFIG['hotel']['name']; //Default motto users will register with.

$_CONFIG['hotel']['credits'] = 5000;

$_CONFIG['hotel']['pixels'] = 10000;

$_CONFIG['hotel']['web_build'] = '63_1dc60c6d6ea6e089c6893ab4e0541ee0/235'; //Habbo's latest web_build

$_CONFIG['hotel']['external_vars'] = 'http://localhost/r63/external_vars.txt'; //URL to your external vars

$_CONFIG['hotel']['external_texts'] = 'http://localhost/r63/external_texts.txt'; //URL to your external texts

$_CONFIG['hotel']['product_data'] = 'http://localhost/r63/productdata.txt'; //URL to your productdata

$_CONFIG['hotel']['furni_data'] = 'http://localhost/r63/furnidata.txt'; //URL to your furnidata

$_CONFIG['hotel']['swf_folder'] = 'http://localhost/r63/'; //URL to your SWF folder(does not end with a '/')

/*
*
*	Templating management - Pick one of our default styles or make yours by following our examples!
*
*/

#RevCMS has 2 default styles, 'Mango' by dannyy94 and 'Priv' by joopie - Others styles are to come, such as RastaLulz's ProCMS style and Nominal's PhoenixCMS 4.0 style.

$_CONFIG['template']['style'] = 'Mango'; 

/*
*						TheHabbos.ORG's API configuration
*
* //////////////////////////////////////////////////////////////
* // # TheHabbos Topsites API Script - Release 1.0.0 (BETA 2) //
* // # © Copyright TheHabbos 2010. All rights reserved.       //   
* //////////////////////////////////////////////////////////////
*
*/

$_CONFIG['thehabbos']['username'] = 'Kryptos'; //hotel's TheHabbos.ORG Username
$_CONFIG['thehabbos']['url'] = 'http://zaphotel.net/api.php'; //the location to the file api.php on your website (i.e. http://example.com/api.php)
$_CONFIG['thehabbos']['type'] = 'client'; //current options: other or client (app/management/thehabbos_api/types)
$_CONFIG['thehabbos']['style'] = 'Habbo Sleek'; //don't change this unless you have created your own style (app/management/thehabbos_api/styles)
$_CONFIG['thehabbos']['credits'] = '1000'; //you can use this if you are using a specific type above - your users will be rewarded this many credits for voting

/*
*
*	Other topsites.. thing
*
*/


$_CONFIG['retro_top']['user'] = 'Kryptos'; 

/*
*
*	Recaptcha management - Fill the information below if you have one, else leave it like that and don't worry, be happy.
*
*/

$_CONFIG['recaptcha']['priv_key'] = '6LcZ58USAAAAABSV5px9XZlzvIPaBOGA6rQP2G43';
$_CONFIG['recaptcha']['pub_key'] = '6LcZ58USAAAAAAQ6kquItHl4JuTBWs-5cSKzh6DD';


/*
*
*	Social Networking stuff
*
*/

$_CONFIG['social']['twitter'] = 'TwitterAccount'; //Hotel's Twitter account

$_CONFIG['social']['facebook'] = 'FacebookAccount'; //Hotel's Facebook account

?>