/**
* remote gallery api class
*/
function UERemoteGalleryAPI(){
	
	var g_api, g_isInited;
	var t = this;
	
	/**
	* console log some string
	*/
	function trace(str){
		console.log(str);
	}
	
	/**
	* validate that the object is inited
	*/
	function validateInited(){
		
		if(g_isInited == false)
			throw new Error("The owl carousel API is not inited");
	}
	
	/**
		do some action
	*/
	this.doAction = function(action){
		
		validateInited();
		
		switch(action){
			case "next":				
				g_api.nextItem();
			break;
			case "prev":
				g_api.prevItem();
			break;
			default:
				throw new Error("GALLERY API: Wrong action: "+action);
			break;
		}
		
	}
	
	/**
	* init the api
	*/
	this.init = function(objParent){
		
		g_api = objParent.data("unitegallery-api");
		if(!g_api)
			return(false);
						
		g_isInited = true;
		
		return(true);
	}
	
	
	
}


/**
* remote tabs api class
*/
function UERemoteTabsAPI(){
	
	var g_objTabs, g_isInited;
	var t = this;
	
	/**
	* console log some string
	*/
	function trace(str){
		console.log(str);
	}
	
	/**
	* validate that the object is inited
	*/
	function validateInited(){
		
		if(g_isInited == false)
			throw new Error("The owl carousel API is not inited");
	}
	
	/**
		do some action
	*/
	this.doAction = function(action, arg){
		
		validateInited();
		
		switch(action){
			case "next":
				
				g_objTabs.trigger("next-tab");
						
			break;
			case "prev":
			
				g_objTabs.trigger("prev-tab");
				
			break;
			default:
				throw new Error("TABS API: Wrong action: "+action);
			break;
		}
		
	}
	
	/**
	* init the api
	*/
	this.init = function(objParent){
		
		var tabsLoaded = objParent.data("tabs-loaded");
		if(!tabsLoaded)
			return(false);
		
		g_objTabs = objParent;
				
		g_isInited = true;
		
		return(true);
	}
	
	
	
}


/**
* remote carousel api class
*/
function UERemoteCarouselAPI(){

	var g_owlCarousel, g_owl, g_isInited;
	var t = this;

	/**
	* console log some string
	*/
	function trace(str){
		console.log(str);
	}

	/**
	* validate that the object is inited
	*/
	function validateInited(){
		
		if(g_isInited == false)
			throw new Error("The owl carousel API is not inited");
	}

	/**
	 * get total items
	 */
	function getTotalItems(){
		
		var total = g_owlCarousel.find(".owl-item:not(.cloned)").length;
		
		return(total);
	}
	
	/**
		do some action
	*/
	this.doAction = function(action, arg1, arg2){
		
		validateInited();
		
		switch(action){
			case "next":

				g_owlCarousel.trigger('next.owl.carousel');
				
			break;
			case "prev":
				
				g_owlCarousel.trigger('prev.owl.carousel');

			break;
			case "play":
				
				g_owlCarousel.trigger('play.owl.autoplay');
				g_owlCarousel.trigger('next.owl.carousel');
								
			break;
			case "pause":

				g_owlCarousel.trigger('stop.owl.autoplay');
				g_owl.settings.autoplay = false;				
								
			break;
			case "is_playing":
				
				if (g_owl.settings.autoplay == true) 
                    return(true)
                else 
                    return(false);

			break;
			case "get_total_items":
				
				var total = getTotalItems()
				
				return(total);

			break;
			case "get_progress_time":

      			var progressTime = g_owl.settings.autoplayTimeout / 1000;
				return(progressTime);				

			break;
			case "get_modified_progress_time":

      			var progressTime = (g_owl.settings.autoplayTimeout - g_owl.settings.smartSpeed) / 1000;
				return(progressTime);				

			break;
			case 'get_num_current':
				
      			var currentItem = g_owl.relative(g_owl.current());
      			
      			return(currentItem);
			break;
			case "get_total_text":

				var owlTotalItems = g_owlCarousel.find(".owl-item:not(.cloned)").length;
				if(owlTotalItems.toString().length < 2){
                    owlTotalItems = "0" + owlTotalItems;
                   }
				return(owlTotalItems);

			break;
            case "get_current_text":                                            
                                  
                var owlCurrentItem = g_owl.relative(g_owl.current()) + 1;
                if(owlCurrentItem.toString().length < 2){
                    owlCurrentItem = "0" + owlCurrentItem;
                   }
				return(owlCurrentItem);                                        
                                                        
            break;
			case 'change_item':
				
				var total = getTotalItems()
				var slideNum = arg1;
				
				if(slideNum >= total)
					slideNum = (total-1);
				else
					if(slideNum < 0)
						slideNum = 0;
				
                g_owlCarousel.trigger('to.owl.carousel', [slideNum, null, true]);                 
                
			break;
			default:
				throw new Error("Carousel API: Wrong action: "+action);
			break;
		}
		
	}

	/*
		events
	*/
	this.onEvent = function(name, func){

		  validateInited();
     
          switch(name){
			case "play":

				g_owlCarousel.on("play.owl.autoplay", func);
				
			break;
			case "pause":
				
				g_owlCarousel.on("stop.owl.autoplay", func);

			break;
			case "change":
				
				g_owlCarousel.on("changed.owl.carousel", func);
				
			break;
			case "transition_start":
				
				g_owlCarousel.on("translate.owl.carousel", func);

			break;
			case "transition_end":
				
				g_owlCarousel.on("translated.owl.carousel", func);

			break;
			case "refreshed":
				
				g_owlCarousel.on("refreshed.owl.carousel", func);

			break;
			default:
				throw new Error("Carousel API: Wrong event: "+event);
			break;

		}
	}

	/**
	* init the api
	*/
	this.init = function(objParent){
		
		if(objParent.hasClass("owl-carousel") == false)
			throw new Error("owl-carousel class not found");
		
		g_owlCarousel = objParent;
                                     
		                                    
		g_owl = g_owlCarousel.data("owl.carousel");
		
		if(!g_owl)
			return(false);
		
		g_isInited = true;
		
		return(true);

	}
	
}

/**
* ---------------------------------------------------
* remote carousel api class
*/
function UERemoteWidgets(){
	
	var g_objParent, g_objWidget, g_parentID;
	var g_api;
	var t = this;
	
	var g_vars = {
		is_inited:false,
		funcOnInit:null,
		is_editor:null,
		widget_id:null,
		init_options:null
	};
	
	var g_types = {
		CAROUSEL:"carousel",
		TABS:"tabs",
		GALLERY:"gallery"
	};
	
	
	/**
	* console log some string
	*/
	function trace(str){
		console.log(str);
	}	
	
	/**
	 * get object property
	 */
	function getVal(obj, name, defaultValue){
		
		if(!defaultValue)
			var defaultValue = "";
		
		var val = "";
		
		if(!obj || typeof obj != "object")
			val = defaultValue;
		else if(obj.hasOwnProperty(name) == false){
			val = defaultValue;
		}else{
			val = obj[name];			
		}
		
		return(val);
	}
	
	
	function _______INIT_________(){}
	
	/**
	* init widget 
	*/
	function initWidget(widgetID){
		
		g_objWidget = jQuery("#"+widgetID);
		if(g_objWidget.length == 0)
			throw new Error("Widget not found by id: "+widgetID);
		
		g_vars.widget_id = widgetID;
		
		g_parentID = g_objWidget.data("parentid");
		
		if(!g_parentID)
			throw new Error("Parent controlled ID not set");
        
	}

	/**
	* get controlled parent type 
	*/
	function getParentType(){
		
		if(!g_objParent || g_objParent.length == 0)
			throw new Error("getParentType: no parent found");
		
		if(g_objParent.hasClass("owl-carousel"))
			return(g_types.CAROUSEL);
		
		var remoteType = g_objParent.data("remote-type");
				
		if(!remoteType)
			return(null);
		
		//check if the type valid
		
		switch(remoteType){
			case g_types.CAROUSEL:
			case g_types.TABS:
			case g_types.GALLERY:
			
				return(remoteType);
			break;
			default:			
				throw new Error("Wrong parent remote type: "+remoteType);
			break;
		}
		
		return(null);
	}
	
	/**
	 * get offsets distance
	 */
	function getOffsetsDistance(offset1, offset2){
	  
	  var dx = offset2.left-offset1.left;
	  var dy = offset2.top-offset1.top;
	  
	  return Math.sqrt(dx*dx+dy*dy); 
	}
	
	
	/**
	 * get closest object by offset
	 */
	function getClosestByOffset(objParents, objElement){
		
		var objClosest = null;
		var minDiff = 1000000;
		
		var elementOffset = objElement.offset();
		
		jQuery.each(objParents, function(index, parent){
			
			var objParent = jQuery(parent);
			var parentOffset = objParent.offset();
			
			var distance = getOffsetsDistance(parentOffset, elementOffset);
			
			if(distance < minDiff){
				minDiff = distance;
				objClosest = objParent;
			}
			
		});
				
		return(objClosest);
	}

	
	/**
	 * detect closest parent
	 */
	function detectClosestParent(){
		
		var objParents = jQuery(".uc-remote-parent").not(g_objWidget);
		
		var numParents = objParents.length;
		
		if(numParents == 0)
			return(null);
		
		if(numParents == 1)
			return(objParents);
		
		//filter by auto
		
		var objParentsFiltered = objParents.filter("[data-remoteid='"+g_parentID+"']");
		
		if(objParentsFiltered.lenght == 1)
			return(objParentsFiltered);
		
		//find by offset
		var objClosest = getClosestByOffset(objParentsFiltered, g_objWidget);
		
		if(objClosest)
			return(objClosest);
		
		var firstParent = jQuery(objParentsFiltered[0]);
		
		
		return(firstParent);
	}
	
	/**
	 * set parent object
	 */
	function setParentObject(){

		var objForceParent = getVal(g_vars.init_options, "force_parent_obj");
		
		if(objForceParent){
			g_objParent = objForceParent;
			return(false);
		}
		
		if(!g_parentID)
		   throw new Error("Parent controller ID not found");
		
		if(!g_objParent || g_objParent.length == 0){
			
			if(g_parentID == "auto"){
				
				g_objParent = detectClosestParent();
				
				if(!g_objParent)
					throw new Error("Can't detect remote parent");
				
			}
			else{
				g_objParent = jQuery(".uc-remote-parent[data-remoteid='"+g_parentID+"']").not(g_objWidget);
				
				if(g_objParent.length == 0)
				   throw new Error("Parent widget with remote name:'"+g_parentID+"' not found");
			}
			
		}
		
	}
	
	/**
	*	init parent
	*/
	function initParent(){
				
		setParentObject();
		
		//set type and related objects
		if(!g_api){
			
			var parentType = getParentType();
			
			if(!parentType){
				trace(g_objParent);
				throw new Error("No parent type found");
			}
			
			//init the api
			switch(parentType){
				case g_types.CAROUSEL:
					g_api = new UERemoteCarouselAPI();
				break;
				case g_types.TABS:
					
					g_api = new UERemoteTabsAPI();
					
				break;
				case g_types.GALLERY:
				
					g_api = new UERemoteGalleryAPI();					
				
				break;
				default:
					throw new Error("Wrong parent type: "+parentType);
				break;
			}
			
		}		
		
		var isInited = g_api.init(g_objParent);
		
		return(isInited);		
	}
	
	
	/**
		init global helper function
	*/
	function initGlobal(widgetID, func){
		
		if(!g_objWidget)
			initWidget(widgetID);
		
		g_vars.is_inited = initParent();
		
		if(g_vars.is_inited == false)
			g_objParent.on("uc-object-ready", func);
		
	}
	
	
	/**
	* set action, bind to some object
	* objElement can be jQuery object or selector
	*/
	this.setAction = function(action, objElement){
		
		if(g_vars.is_inited == false)
			throw new Error("Widget not inited");
		
		if(typeof objElement == "string")
		   objElement = g_objWidget.find(objElement);
		
		if(!objElement || objElement.length == 0)
			throw new Error("Element not inited");	
		
		if(!g_api)
			throw new Error("API not inited!");	
			
		//avoid double action
		var linkedAction = objElement.data("uc-action");
		if(linkedAction)
			throw new Error("No double actions allowed! existing: "+linkedAction+" new: "+action);	
		
		objElement.data("uc-action", action);
		
		objElement.on("click",function(){
			
			g_api.doAction(action);
			
		});
		
	}
	
	
	/**
	 * run this function after the widget is ready to use
	 */
	function onWidgetReady(){
		
		checkWidgetDebug();
		
		var isEditorMode = isInsideEditor();
		
		//in editor mode check debug every second
		
		if(isEditorMode == true){
			
			hideErrorOnWidget();
			
			setInterval(checkWidgetInsideEditor, 700);
		}		
		
		
	}
	

	function _______ERROR_________(){}
	
	
	/**
	 * hide error on widget
	 */
	function hideErrorOnWidget(){
		
		if(!g_objWidget || g_objWidget.length == 0)
			return(false);
		
		//don't hide if no message
		
		var hasError = g_objWidget.data("uc-has-error");
		
		if(hasError !== true)
			return(false);
		
		var objError = g_objWidget.find('.uc-remote-error');
		
		objError.hide();
		
		g_objWidget.css({
			"border" : "none"
		});
		
		g_objWidget.data("uc-has-error", false);
		
	}
	
	
	
	/**
	 * add error message div on the widget div
	 * 
	 */
	function addErrorMessageDiv(objWidget){
		
		var divError = "<div class='uc-remote-error'></div>";
		g_objWidget.append(divError);
		
		var objError = objWidget.find('.uc-remote-error');
		
		objError.css({
			"position":"absolute",
			"color":"red",
			"top":"-30px",
			"left":"0px"
		});
		
		var objError = objWidget.find('.uc-remote-error');
		
		return(objError);
	}
	
	/**
	 * display some error on widget interface
	 */
	function displayErrorOnWidget(objWidget, message){
		
		var objError = objWidget.find('.uc-remote-error');
				
		//add error div if missing. pause error in editor
		//second time the div will be not empty and it will show the message
		if(objError.length == 0){
			objError = addErrorMessageDiv(objWidget);
			
			var isInEditor = isInsideEditor();
			if(isInEditor == true){
				
				setTimeout(function(){
					displayErrorOnWidget(objWidget, message);					
				},2000);
				
				return(false);
			}
			
		}
	    
		//add the error
		
		g_objWidget.data("uc-has-error",true);
		
		g_objWidget.css({
			"border" : "2px solid red",
			"position" : "relative"
		});
		
		objError.show();
		
		objError.html(message);
		
	}
	
	
	/**
	 * display error message
	 */
	function displayErrorMessage(message){
		
		if(g_objWidget && g_objWidget.length)
			displayErrorOnWidget(g_objWidget, message);
		
		trace(g_objWidget);
		
		console.log("UE Remote Error: "+message);
		console.log(message);			
		
	}
	
	function _______DEBUG_________(){}
	
	
	/**
	 * return if the debug is active
	 */
	function isDebugActive(){
		
		var isActive = g_objWidget.data("debug_active");
		
		if(isActive === true)
			return(true);
		
		return(false);
	}
	
	
	/**
	 * remove debug visual from the widget
	 */
	function removeDebugVisual(){
		
		g_objWidget.data("debug_active", false);
		
		g_objWidget.css("border","none");
	}
	
	/**
	 * set debug visual
	 */
	function setDebugVisual(color){
		
		g_objWidget.data("debug_active", true);
		
		g_objWidget.css("border","3px solid "+color);
		
	}
	
	/**
	 * check widget debug
	 */
	function checkWidgetDebug(){
		
		//get debug color		
		
		if(!g_objParent || g_vars.is_inited == false){
			removeDebugVisual();
			return(false);
		}
			
		var dataDebug = g_objParent.data("debug");
		var isDebug = (dataDebug === true);
		
		var isActive = isDebugActive();
		
		//trace("check! "+isActive+" "+isDebug);
		//trace(g_objParent);		
		
		//remove debug if active but no need
		
		if(isDebug == false){
			
			if(isActive == true)
				removeDebugVisual();
			
			return(false);
		}
		
		//add debug is not in debug mode
		
		if(isActive == false){
			
			//get parent color
			var color = addParentDebug();
					
			setDebugVisual(color);
			
		}
		
		
	}
	
	
	this.onEvent = function(name, func){ 
		g_api.onEvent(name,func) 
	}

	this.doAction = function(action, arg1, arg2){
		return(g_api.doAction(action, arg1, arg2));
	}
	
	/**
	 * add the parent some debug color
	 */
	function addParentDebug(){
		
		var color = g_objParent.data("uc-debug-color");
		if(color)
			return(color);
		
		var objBody = jQuery("body");
		var dataColors = "uc-remote-debug-colors";
		
		var objColors = objBody.data(dataColors);
		
		if(!objColors){
			objColors = ["#ffeb00","blue","#808000","#d1e231","#01796f","#8e4585","#ff33cc","#436b95","#eaa221","#b86d29"];
		}
		
		var color = objColors.pop();
		
		g_objParent.data("uc-debug-color", color);
		objBody.data(dataColors, objColors);
		
		g_objParent.css("border","3px solid "+color);		
		
		return(color);
	}
	
	
	function _______EDITOR_RELATED_________(){}
	
	
	/**
	 * check if nside editor
	 */
	function isInsideEditor(){
		
		if(g_vars.is_editor !== null)
			return(g_vars.is_editor);
		
		if(typeof window.parent == "undefined"){
			
			g_vars.is_editor = false;
			
			return(false);
		}
		
		if(typeof window.parent.elementor != "undefined"){
			
			g_vars.is_editor = true;
			
			return(true);
		}
		
		g_vars.is_editor = false;
		
		return(false);
	}
	
	/**
	 * reset the settings
	 */
	function resetSettingsInsideEditor(){
		
		g_objParent = null;
		g_api = null;
		g_vars.is_inited = false
		g_vars.funcOnInit = null;		
	}
	
	
	/**
	 * check widget inside editor
	 */
	function checkWidgetInsideEditor(){
				
		//check for disconnect
		try{
			
			hideErrorOnWidget();
			
			if(g_vars.is_inited == true){
				
				if(g_objParent.is(":hidden")){
					
					//disconnect
					resetSettingsInsideEditor();
				}
				
			}else{
				
				//check for connect
				g_vars.is_inited = initParent();
				
				if(g_vars.is_inited == false)
					g_objParent.on("uc-object-ready", g_vars.funcOnInit);
			}
			
			checkWidgetDebug();
		
		}catch(message){
			
			displayErrorMessage(message);
			
			return(false);
		}	
		
				
	}
		
	
	
	/**
	* on widget init
	*/
	this.onWidgetInit = function(widgetID, func, options){
		
		try{
			
			if(!g_vars.funcOnInit){
				
				if(typeof func != "function")
					throw new Error("onWidgetInit error: the second parameter should be a function");
				
				g_vars.funcOnInit = func;
			}
			
			g_vars.init_options = options;
			
			initGlobal(widgetID, t.onWidgetInit);
			
			if(g_vars.is_inited == false)
				return(false);
			
			//widget is inited
			
			onWidgetReady();
			
			g_vars.funcOnInit(g_objWidget);
			
		}catch(message){
			
			displayErrorMessage(message);
			
			var isEditorMode = isInsideEditor();
			
			//in editor mode check debug every second
			
			if(isEditorMode == true)
				setInterval(checkWidgetInsideEditor, 700);
			
			return(false);
		}	
		
	}
	
	/**
	 * set sync events between 2 apis
	 */
	function setSyncEvents(objLocalAPI, objRemoteAPI){
		
		var totalItemsLocal = objLocalAPI.doAction("get_total_items");
		var totalItemsRemote = objRemoteAPI.doAction("get_total_items");
				
		if(totalItemsLocal !== totalItemsRemote)
			throw new Error("Sync failed, number of items should be the same. Now it's "+totalItemsLocal+" and "+totalItemsRemote);
		
		
		//sync on local change
		
		objLocalAPI.onEvent("change",function(){
			
			var currentNumCurrent = objLocalAPI.doAction("get_num_current");
			var currentNumRemote = objRemoteAPI.doAction("get_num_current");
			
			if(currentNumCurrent != currentNumRemote)
				objRemoteAPI.doAction("change_item", currentNumCurrent);
		});
		
		
		//sync on remote change
		
		objRemoteAPI.onEvent("change",function(){
			
			var currentNumCurrent = objLocalAPI.doAction("get_num_current");
			var currentNumRemote = objRemoteAPI.doAction("get_num_current");
			
			if(currentNumCurrent != currentNumRemote)
				objLocalAPI.doAction("change_item", currentNumRemote);
		});
		
		
	}

	
	/**
	 * start parent sync
	 */
	function startParentSync(){
		
		var currentID = g_objParent.attr("id");
		
		var classSync = "uc-is-sync";
		
		if(g_objParent.hasClass(classSync))
			return(false);
		
		var objRemoteAPI = new UERemoteWidgets();
		var objLocalAPI = new UERemoteWidgets();
		
		objRemoteAPI.onWidgetInit(currentID, function(objWidget){
			
			var objConnectedParent = objRemoteAPI.getParent();
			
			//check classes
			if(objConnectedParent.hasClass(classSync))
				return(false);
			
			if(objWidget.hasClass(classSync))
				return(false);
			
			//add classs
			
			objConnectedParent.addClass(classSync)
			objWidget.addClass(classSync);
						
			//create second api
			objLocalAPI.onWidgetInit(currentID, function(objWidget){
				
				setSyncEvents(objLocalAPI, objRemoteAPI);
				
			},{force_parent_obj:objWidget});
			
		});
		
		
	}
	
	
	/**
	 * parent init, init the debug
	 */
	this.onParentInit = function(objParent){
		
		g_objParent = objParent;
		
		if(!g_objParent)
			return(false);
		
		if(g_objParent.length == 0)
			return(false);
		
		var isDebug = g_objParent.data("debug");
		
		if(isDebug === true)
			addParentDebug(objParent);
		
		var isSync = objParent.data("sync");
		
		if(isSync == true)
			startParentSync();
		
	}
	
	/**
	 * show the info
	 */
	this.showInfo = function(){
		
		trace("parent");
		trace(g_objParent);
		
		trace("current widget");
		trace(g_objWidget);
		
		
	}
	
	/**
	 * get the connected parent
	 */
	this.getParent = function(){
		
		return(g_objParent);
	}
	
}

jQuery("body").on("uc-remote-parent-init",function(event, objParent){
	
	var objRemote = new UERemoteWidgets();
	
	objRemote.onParentInit(objParent);
	
});


