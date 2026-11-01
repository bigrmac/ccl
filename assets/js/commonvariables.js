//New function to check the logged in Mobile Portal environment.
var vBaseRootURL = "";
var vDebugOff = true;
var vIs2FAEnabled = false;
function getEnvironmentPath()
{
	var currEnvFullBasePath = window.location.href.toLowerCase();
	
	var vRootURL = "";
	var currEnvName = ""; var currAbtEnv = "";
	var vProtocol = "http://";
	
	var vFullPathToUse = "";
	
	if (currEnvFullBasePath.search("https") > -1)
	{
		vProtocol = "https://";
	}
	if (currEnvFullBasePath.search("mdev.ncr.com") > -1)
	{
		vFullPathToUse = vProtocol + "mdev.ncr.com/";
		vBaseRootURL = vFullPathToUse;
	}
	else if (currEnvFullBasePath.search("cetdev.ncr.com") > -1)
	{
		vFullPathToUse = vProtocol + "cetdev.ncr.com/";
		vBaseRootURL = vFullPathToUse;
		vIs2FAEnabled = true;
	}
	else if (currEnvFullBasePath.search("mcert.ncr.com") > -1)
	{
		var vCertLocalEnv = "mdev/";
		
		if (currEnvFullBasePath.search("/mcert") > -1)
			vCertLocalEnv = "mcert/";
		if (currEnvFullBasePath.search("/mprod") > -1)
			vCertLocalEnv = "mprod/";
		
		vBaseRootURL = vProtocol + "mcert.ncr.com/";
		vFullPathToUse = vProtocol + "mcert.ncr.com/";
	}
	else if (currEnvFullBasePath.search("cetcert.ncr.com") > -1)
	{
		vFullPathToUse = vProtocol + "cetcert.ncr.com/";
		vBaseRootURL = vFullPathToUse;
		vIs2FAEnabled = true;
	}
	else if (currEnvFullBasePath.search("m.ncr.com") > -1)
	{
		vFullPathToUse = vProtocol + "m.ncr.com/";
		vBaseRootURL = vFullPathToUse;
	}
	else if (currEnvFullBasePath.search("cet.ncr.com") > -1)
	{
		vFullPathToUse = vProtocol + "cet.ncr.com/";
		vBaseRootURL = vFullPathToUse;
		vIs2FAEnabled = true;
	}
	//var vRootURL = getCookie("RootURL")
	return (vFullPathToUse);
}
	
var currEnvFullBasePath = window.location.href.toLowerCase();

var vRootURL = "";
	var currEnvName = ""; var currAbtEnv = "";
	var vProtocol = "http://";
	if ((currEnvFullBasePath.search("mdev.ncr.com") > -1) || (currEnvFullBasePath.search("cetdev.ncr.com") > -1))
		currEnvName = "mdev";
	if ((currEnvFullBasePath.search("mcert.ncr.com") > -1) || (currEnvFullBasePath.search("cetcert.ncr.com") > -1))
		currEnvName = "mcert";
	if ((currEnvFullBasePath.search("m.ncr.com") > -1) || (currEnvFullBasePath.search("cet.ncr.com") > -1))
		currEnvName = "mprod";
	
	
	var currEnvAppStore = currEnvName;
		
	vRootURL = getEnvironmentPath();	

	setCookie("LogggedInEnv", currEnvName);
	setCookie("LogggedInEnvFullPath", currEnvFullBasePath);
	setCookie("LogggedInEnvProtocol", vProtocol);
	setCookie("RootURL", vRootURL);
	setCookie("BaseRootURL", vBaseRootURL);
	
	//Record the custome session start time for logging
	var vCurrdateTime = new Date().toUTCString();
	var vCustomSession = vCurrdateTime.toString().toLowerCase().replace(/[^a-z\d]+/gi, "")+Math.floor(Math.random()*89999+10000);
	//vCustomSession=vCustomSession.replace(/\,/g,'');
	try{
			var vSession = getCookie("CustomSession");			
			if (vSession == ""){
				setCookie("CustomSession", vCustomSession);
				}
			
		}catch(e){
			setCookie("CustomSession", vCustomSession);
		}