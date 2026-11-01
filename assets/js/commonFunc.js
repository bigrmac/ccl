	//Olajide Olaolorun iOS Private Mode Detection
	try { localStorage.test = 2; } 
	catch (e) {
	  alert('You are in Private Mode\nPlease deactivate Private Mode and then reload the page.');
	}

	//Add Change Control Section: Deepak T

	var intCookieTimoutLimit = (30 * 60 * 1000);

	function getCookie(c_name)
	{ 
		try{
			return trimString($.jStorage.get(c_name));
		}
		catch(e){
			return "";
		}		
	}

	function setCookie(c_name, value)
	{
		$.jStorage.set(c_name, value, {TTL: intCookieTimoutLimit});

	}

	
	function trimString(str) {
	    str = this != window ? this : str;
	    return str.replace(/^\s+/g, '').replace(/\s+$/g, '');
	}

	//Function to be used for return back to landing page from anywhere.
	function returnToLandingPage()
	{
		window.location.replace("/" + getCookie("LogggedInEnv") + "/");
	}
	
	//function to be used for opening pages
	function navigateToApp(rootUrl, page)
	{		
		window.location.replace(rootUrl + page);
	}
	
	function showProgressLoader(status)
	{
		if (status == "show"){
			$.mobile.loading('show');
			$('#divPageInactive').css("visibility", "visible");
		}
		else{
			$.mobile.loading('hide');
			$('#divPageInactive').css("visibility", "hidden");
		}
	}
	
	
	//function to extract data from query string
	function GetParam(name) {
	    var start = location.search.indexOf("?" + name + "=");
	    if (start < 0) start = location.search.indexOf("&" + name + "=");
	    if (start < 0) return '';
	    start += name.length + 2;
	    var end = location.search.indexOf("&", start) - 1;
	    if (end < 0) end = location.search.length;
	    var result = '';
	    for (var i = start; i <= end; i++) {
	        var c = location.search.charAt(i);
	        result = result + (c == '+' ? ' ' : c);
	    }
	    return unescape(result);
	}
	
	
	function isSatToolAvailable()
	{
		var ua = navigator.userAgent.toLowerCase();
		//alert(ua);
		var b = new RegExp("(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino");
				
		var v = new RegExp("1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s)|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg(g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v)|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-|)|webc|whit|wi(g|nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-");

		var vPCLaptop = false; vIsMobileDevice = false; vIsBB = false;
		var vAllowSatTool = false;
		
		if (
					(ua.indexOf("iphone") > -1) || (ua.indexOf("ipod") > -1) ||
					(ua.indexOf("symbian") > -1) || (ua.indexOf("android") > -1) ||
					(ua.indexOf("windows ce") > -1) || (ua.indexOf("blackberry") > -1) ||
					(ua.indexOf("palm") > -1) || (ua.indexOf("mobile") > -1) || (ua.indexOf("ipad") > -1) || 
					(ua.indexOf("opera mini") > -1) || (ua.indexOf("palm") > -1) ||
					(ua.indexOf("ppc") > -1) || (ua.indexOf("opera mobi") > -1) ||
					(ua.indexOf("macintosh") > -1) || (ua.indexOf("mobile") > -1) ||
					(ua.indexOf("linux") > -1) || (ua.indexOf("blazer") > -1) ||
					(ua.indexOf("nokia") > -1) || (ua.indexOf("samsung") > -1) ||
					(ua.indexOf("symbian") > -1) || (ua.indexOf("firefox") > -1) ||
					(ua.indexOf("gobrowser") > -1) || (ua.indexOf("windows phone") > -1) ||
					(ua.indexOf("iemobile") > -1) || (ua.indexOf("iris") > -1) ||
					(ua.indexOf("mot") > -1) || (ua.indexOf("sony") > -1) ||
					(ua.indexOf("bolt") > -1) || (ua.indexOf("docomo") > -1))
			{
				vIsMobileDevice = true;
			}
			
			
			if (ua.indexOf("blackberry") > -1){
				vIsBB = true;
			}
			
			if ((b.exec(ua) == null)) // && (v.exec(ua) == null))
			{
				if (vIsMobileDevice == false)
				{
					vPCLaptop = true;
				}
			}
			
			if ((vIsBB ==true) || (vPCLaptop == true)){
				vAllowSatTool = true;
			}
			
			return "" + vAllowSatTool;
		
	}
	
	
	function CheckLANAccess()
	{
		var output = 0;
		$.ajax({	
			async: false,
			url: "Services/miscservice.asmx/CheckLANAccess",
			data: {},			
			complete: function(xhr, statusText){
				alert("xhr.status = " + (xhr.status==200));
				if (xhr.status == 200)
					output = 1;
				else
					output = 0;
				},
			error: function(xhr, statusText, err){
				output = 0;
			}
		});
		
		return output;
	}
	
	function FirstRecord(app,type,desc)
	{
	//alert("function");
	//alert(getCookie("FirstHit"));
	try{
            var vFirstHit = getCookie("FirstHit");
            if (vFirstHit == ""){
			//alert("direct");
                        $.recordLog(app, type, desc, getCookie("CustomSession"));
                        setCookie("FirstHit", "Yes");
                        }
            
		}catch(e){
					setCookie("FirstHit", "Yes");
					$.recordLog(app, "Error", "Logging metrics at first hit ", getCookie("CustomSession"));
		}

	}