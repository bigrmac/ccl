
//Read Mobility and Guest Password from XML File.
function getWifiDetails(callLocation)
	{	
		jQuery.support.cors = true;
				
		var i=1;
		var isPasswordAlreadyAvai = "";
		isPasswordAlreadyAvai = $("#Title1").text();
		
		if (trimString(isPasswordAlreadyAvai) != "")
		{
			//Do not try loadeding service multiple times
			return;
		}

		var vPath = "Services/helpdeskservices.asmx/GetXMLRSSFeed";
		if (callLocation == "helpdesk")
			vPath = "../Services/helpdeskservices.asmx/GetXMLRSSFeed";
		
		showProgressLoader("show"); //Common Code function
					
		$.ajax({
		type: "POST",
		url: vPath,
		async: false,	
		cache: false,		
		contentType: "application/json; charset=utf-8",
		dataType: "json",
		success: function(response) {							
			xml = $.parseXML(response.d);
			var $xml = $(xml);
				$xml.find("item").each(function() {
					var $this = $(this),
					item = {
						title: $this.find("title").text(),
						description: $this.find("description").text(),
						pubDate: $this.find("pubDate").text(),
						comment: $this.find("comments").text()
					}					
					$("#Title" + i).html("<strong>" + item.title + "</strong>");
					$("#Description" + i).html("" + item.description);
					++i			
				});
				
				showProgressLoader("hide"); //Common Code function
		},
			error: function(ErrMsg) {	 
				//alert("Error Occured while loading helpdesk RSS feed =\n" + ErrMsg.statusText + "," + ErrMsg.statusCode);	
				$.recordLog("Hdesk","Error","Error Occured while loading helpdesk RSS feed function getWifiDetails" + ErrMsg.statusText + "," + ErrMsg.statusCode,getCookie("CustomSession"));				
				showProgressLoader("hide"); //Common Code function
			}
		});	
	}
	
		//get logged in user qlid
	function getUserDetailsJS() {
	
		var vUserID = trimString(getCookie("AuthTokan"));
			
		var vURL = "";
		var currEnvFullBasePath = getCookie("RootURL");
		vURL = currEnvFullBasePath + "Services/generalservices.asmx/GetLoggedInUserDetails";
	
		$.ajax({
			type: "POST",
			url: vURL,
			async:false,
			cache: false,
			data: '{"UserQLID":"' + vUserID + '"}',
			contentType: "application/json; charset=utf-8",
			dataType: "json",
			success: function (response) {							
			var results = jQuery.parseJSON(response.d);		           
		    vContent = trimString(response.d);
			vContent = vContent.replace(/"/g, '');
				setCookie("AuthTokan", vContent);		
			},
			error: function (msg) {
				$.recordLog("Hdesk","Error","Error Occured while loading logged in user details function getUserDetailsJS" + msg.statusText,getCookie("CustomSession"));				
				//alert("Some error has occurred while loading logged in user details.\n" + msg.statusText);							
			}
		});
	}	
	
	//User Details from X.500 database using QLM query
	function getUserX500Details(userQLID)
	{	
		var strWebSerURL = "";
		var currEnvFullBasePath = getCookie("BaseRootURL");
		var strWebSerURL= currEnvFullBasePath + "quicklook/rs/search?q=" + userQLID;
		strWebSerURL = strWebSerURL.replace(/"/g, '');
		try{
			$.jsonp({						
				url: strWebSerURL,
				callbackParameter: "callback",
				cache: false,
				async: false,	
				success: function(data, textStatus) {	
					//alert("Success");
					processUserDetailData(data);		//This function to be implemented by calling page.
				},
				error: function(ErrMsg) {	
					//Windows phone issue fix: Try another time using jquery.xdomainrequest.min.js library				
					$.recordLog("Quicklook","Error","Error Occured while loading details from x500 data function getUserX500Details",getCookie("CustomSession"));				
					$.getJSON(strWebSerURL).done(function(data) {
					 processUserDetailData(data);
					});
				}
			});	
		}catch(errmsg){
		$.recordLog("Hdesk","Error","Error Occured while loading logged in user details function getUserX500Details" + errmsg.statusText,getCookie("CustomSession"));				
			//alert("Here is the error = " + errmsg.statusText);
		}
	}
	
	//get logged in user Auth. AD groups
	function getUserAuthADGroups(sUserName) {
	
		//var vUserID = trimString(getCookie("AuthTokan"));
			
		var vURL = "";
		var currEnvFullBasePath = getCookie("RootURL");
		vURL = currEnvFullBasePath + "Services/activedirservice.asmx/GetUserAuthGroups";
		
		//alert(vURL);
		$.ajax({
			type: "POST",
			url: vURL,
			async:false,
			cache: false,
			data: '{"sUserName":"' + sUserName + '"}',
			contentType: "application/json; charset=utf-8",
			success: function (response) {		
					           
		    var vContent = trimString(response.d);	
			setCookie("AuthADGroupsList", vContent);
			//alert("Group data successfully loaded");
			try{
				ProcessAppCEList();		//This function is implemented in CE portal due to Ajax asyncronous loading
			}catch(e){ }
			},
			error: function (msg) {
				$.recordLog("CEPortal","Error","Some error has occurred while loading logged in user AD groups function getUserAuthADGroups" + msg.statusText,getCookie("CustomSession"));	
				//alert("Some error has occurred while loading logged in user AD groups.\n" + msg.statusText);							
			}
		});
	}	
	