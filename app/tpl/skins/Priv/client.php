	<script type="text/javascript"> 
		var habboName = "{username}";
		var habboReqPath = "{url}";
		var habboStaticFilePath = "http://images.habbo.com/habboweb/{web_build}/web-gallery";
		var habboImagerUrl = "http://www.habbo.com/habbo-imaging/";
		var habboPartner = "";
		var habboDefaultClientPopupUrl = "{url}/client";
		window.name = "ClientWndw";
		if (typeof HabboClient != "undefined") { HabboClient.windowName = "ClientWndw"; }
	</script> 

<link rel="alternate" type="application/rss+xml" title="Habbo Hotel - RSS" href="http://www.habbo.com/articles/rss.xml" /> 
<script src="http://images.habbo.com/habboweb/{web_build}/web-gallery/static/js/libs2.js" type="text/javascript"></script>
<script src="http://images.habbo.com/habboweb/{web_build}/web-gallery/static/js/visual.js" type="text/javascript"></script>
<script src="http://images.habbo.com/habboweb/{web_build}/235/web-gallery/static/js/libs.js" type="text/javascript"></script>
<script src="http://images.habbo.com/habboweb/{web_build}/web-gallery/static/js/common.js" type="text/javascript"></script>
<link rel="stylesheet" href="http://images.habbo.com/habboweb/{web_build}/web-gallery/v2/styles/style.css" type="text/css" />
<link rel="stylesheet" href="http://images.habbo.com/habboweb/{web_build}/web-gallery/v2/styles/buttons.css" type="text/css" />
<link rel="stylesheet" href="http://images.habbo.com/habboweb/{web_build}/web-gallery/v2/styles/boxes.css" type="text/css" />
<link rel="stylesheet" href="http://images.habbo.com/habboweb/{web_build}/web-gallery/v2/styles/tooltips.css" type="text/css" />
<link rel="stylesheet" href="http://images.habbo.com/habboweb/{web_build}/web-gallery/v2/styles/changepassword.css" type="text/css" />
<link type="text/css" rel="stylesheet" href="../Public/Styles/Default/CSS/client.css" />

<noscript> 
    <meta http-equiv="refresh" content="0;url=/client/nojs" />
</noscript> 

<link rel="stylesheet" href="http://images.habbo.com/habboweb/{web_build}/web-gallery/v2/styles/habboclient.css" type="text/css" />
<script src="http://images.habbo.com/habboweb/{web_build}/web-gallery/static/js/habboflashclient.js" type="text/javascript"></script>

<script type="text/javascript"> 
    FlashExternalInterface.loginLogEnabled = false;
    FlashExternalInterface.logLoginStep("web.view.start");
    
    if (top == self) {
        FlashHabboClient.cacheCheck();
    }
    var flashvars = {
            "client.allow.cross.domain" : "1", 
            "client.notify.cross.domain" : "1", 
            "connection.info.host" : "{mysql_host}", 
            "connection.info.port" : "{mysql_port}", 
            "site.url" : "{url}/", 
            "url.prefix" : "{url}/", 
            "client.reload.url" : "{url}/client", 
            "client.fatal.error.url" : "{url}/me/disconnected.php", 
            "client.connection.failed.url" : "{url}/me", 
            "external.variables.txt" : "{external_vars}", 
            "external.texts.txt" : "{external_texts}", 
            "productdata.load.url" : "{product_data}", 
            "furnidata.load.url" : "{furni_data}", 
            "use.sso.ticket" : "1",
            "sso.ticket" : "{sso}", 
            "processlog.enabled" : "0", 
            "account_id" : "1", 
            "client.starting" : "Please wait! {hotelName} is starting up", 
            "flash.client.url" : "{url}/{swf_folder}/", 
            "user.hash" : "31385693ae558a03d28fc720be6b41cb1ccfec02", 
            "has.identity" : "0", 
            "flash.client.origin" : "popup",
            "token" : "{sso}"
    };
    var params = {
        "base" : "{url}/{swf_folder}/",
        "allowScriptAccess" : "always",
        "menu" : "false"                
    };
    
    if (!(HabbletLoader.needsFlashKbWorkaround())) {
    	params["wmode"] = "opaque";
    }
    
    var clientUrl = "{url}/{swf_folder}/Habbo.swf";

    swfobject.embedSWF(clientUrl, "flash-container", "100%", "100%", "10.0.0", "http://images.habbo.com/habboweb/{web_build}/web-gallery/flash/expressInstall.swf", flashvars, params);
 
    window.onbeforeunload = unloading;
    function unloading() {
        var clientObject;
        if (navigator.appName.indexOf("Microsoft") != -1) {
            clientObject = window["flash-container"];
        } else {
            clientObject = document["flash-container"];
        }
        try {
            clientObject.unloading();
        } catch (e) {}
    }
</script>
 
<body id="client" class="flash client"> 

<div id="overlay"></div>  
<div id="overlay"></div> 
<div id="client-ui" > 
    <div id="flash-wrapper"> 
    <div id="flash-container"> 
        <div id="content" style="width: 400px; margin: 20px auto 0 auto; display: none"> 
			<div class="cbb clear fix"> 
			    <h2 class="title">Please install Adobe Flash Player.</h2> 
			    <div class="box-content"> 
			            <p>You can install and download Adobe Flash Player here: <a href="http://get.adobe.com/flashplayer/">
						Install flash player</a>. More instructions for installation can be 
						found here: <a href="http://www.adobe.com/products/flashplayer/productinfo/instructions/">
						More information</a></p> 
			            <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://images.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/235/web-gallery/v2/images/client/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p> 
			    </div> 
			</div> 
        </div> 
        <script type="text/javascript"> 
            $('content').show();
        </script> 
        <noscript> 
            <div style="width: 400px; margin: 20px auto 0 auto; text-align: center">
                <p>If you are not automatically redirected, please <a href="/client/nojs">click here</a></p>
            </div>
        </noscript> 
    </div> 

    </div> 
	<div id="content" class="client-content"></div>
</div> 