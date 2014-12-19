// JavaScript Document
// Major version of Flash required
var requiredMajorVersion = 8;
// Minor version of Flash required
var requiredMinorVersion = 0;
// Revision of Flash required
var requiredRevision = 0;
// the version of javascript supported
var jsVersion = 1.0;
// flash version detection
var isIE  = (navigator.appVersion.indexOf("MSIE") != -1) ? true : false;
var isWin = (navigator.appVersion.toLowerCase().indexOf("win") != -1) ? true : false;
var isOpera = (navigator.userAgent.indexOf("Opera") != -1) ? true : false;
jsVersion = 1.1;
// JavaScript helper required to detect Flash Player PlugIn version information
function JSGetSwfVer(i){
	// NS/Opera version >= 3 check for Flash plugin in plugin array
	if (navigator.plugins != null && navigator.plugins.length > 0) {
		if (navigator.plugins["Shockwave Flash 2.0"] || navigator.plugins["Shockwave Flash"]) {
			var swVer2 = navigator.plugins["Shockwave Flash 2.0"] ? " 2.0" : "";
      		var flashDescription = navigator.plugins["Shockwave Flash" + swVer2].description;
			descArray = flashDescription.split(" ");
			tempArrayMajor = descArray[2].split(".");
			versionMajor = tempArrayMajor[0];
			versionMinor = tempArrayMajor[1];
			if ( descArray[3] != "" ) {
				tempArrayMinor = descArray[3].split("r");
			} else {
				tempArrayMinor = descArray[4].split("r");
			}
      		versionRevision = tempArrayMinor[1] > 0 ? tempArrayMinor[1] : 0;
            flashVer = versionMajor + "." + versionMinor + "." + versionRevision;
      	} else {
			flashVer = -1;
		}
	}
	// MSN/WebTV 2.6 supports Flash 4
	else if (navigator.userAgent.toLowerCase().indexOf("webtv/2.6") != -1) flashVer = 4;
	// WebTV 2.5 supports Flash 3
	else if (navigator.userAgent.toLowerCase().indexOf("webtv/2.5") != -1) flashVer = 3;
	// older WebTV supports Flash 2
	else if (navigator.userAgent.toLowerCase().indexOf("webtv") != -1) flashVer = 2;
	// Can't detect in all other cases
	else {
		
		flashVer = -1;
	}
	return flashVer;
} 
// If called with no parameters this function returns a floating point value 
// which should be the version of the Flash Player or 0.0 
// ex: Flash Player 7r14 returns 7.14
// If called with reqMajorVer, reqMinorVer, reqRevision returns true if that version or greater is available
function DetectFlashVer(reqMajorVer, reqMinorVer, reqRevision) 
{
 	reqVer = parseFloat(reqMajorVer + "." + reqRevision);
   	// loop backwards through the versions until we find the newest version	
	for (i=25;i>0;i--) {	
		if (isIE && isWin && !isOpera) {
			versionStr = VBGetSwfVer(i);
		} else {
			versionStr = JSGetSwfVer(i);		
		}
		if (versionStr == -1 ) { 
			return false;
		} else if (versionStr != 0) {
			if(isIE && isWin && !isOpera) {
				tempArray         = versionStr.split(" ");
				tempString        = tempArray[1];
				versionArray      = tempString .split(",");				
			} else {
				versionArray      = versionStr.split(".");
			}
			versionMajor      = versionArray[0];
			versionMinor      = versionArray[1];
			versionRevision   = versionArray[2];
			
			versionString     = versionMajor + "." + versionRevision;   // 7.0r24 == 7.24
			versionNum        = parseFloat(versionString);
        	// is the major.revision >= requested major.revision AND the minor version >= requested minor
			if ( (versionMajor > reqMajorVer) && (versionNum >= reqVer) ) {
				return true;
			} else {
				return ((versionNum >= reqVer && versionMinor >= reqMinorVer) ? true : false );	
			}
		}
	}	
	return (reqVer ? false : 0.0);
}
// flash object
function raa_FlashObject(str_Src,str_Id,int_Width,int_Height,str_Version,str_Align,str_NoFlashID) {
	this.src = str_Src;
	this.id = str_Id;
	this.width = int_Width;
	this.height = int_Height;
	this.attributes = [];
	var arr_TempVersion = str_Version.split(".");
	this.majorversion = (arr_TempVersion.length>0) ? arr_TempVersion[0] : 6;
	this.minorversion = (arr_TempVersion.length>1) ? arr_TempVersion[1] : 0;
	this.revision = (arr_TempVersion.length>2) ? arr_TempVersion[2] : 0;
	this.align = str_Align;
	this.noflash = str_NoFlashID;
	delete arr_TempVersion;
	this.writeFlash = function() {
		if (DetectFlashVer(this.majorversion, this.minorversion, this.revision)) {
			var str_TempObject = "<object classid=\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\"" +
				" align=\"" + this.align +
				"\" width=\"" + this.width +
				"\" height=\"" + this.height +
				"\" codebase=\"http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab\">\n" +
				"<param name=\"movie\" value=\"" + this.src + "\">\n";
			var str_TempEmbed = "<embed align=\"" + this.align + "\" src=\"" + this.src + "\" width=\"" + this.width + "\" height=\"" + this.height + "\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\"\n";
			for (var i=0; i<this.attributes.length; i++) {
				str_TempObject += "<param name=\"" + this.attributes[i][0] + "\" value=\"" + this.attributes[i][1] + "\" />\n";
				str_TempEmbed += " " + this.attributes[i][0] + "=\"" + this.attributes[i][1] + "\"";
			}
			str_TempEmbed += "></embed>";
			document.getElementById(this.noflash).style.display = "none";
			document.writeln(str_TempObject);
			document.writeln(str_TempEmbed);
			document.writeln("</object>");
		} else {
			document.getElementById(this.noflash).style.display = "block";
		}
	}
	this.addAttribute = function(str_Name, str_Value) {
		for (var i=0; i<this.attributes.length; i++) {
			if (this.attributes[i][0]==str_Name) {
				this.attributes[i][1] = str_Value;
				return true;
			}
		}
		this.attributes[this.attributes.length] = [str_Name, str_Value];
	}
	return this;
}













