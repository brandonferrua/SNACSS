/*
 * Global JS for stylyy.com
 *
 * @author Brandon Ferrua
 *
*/

// Dropdown 
function snacssDropdown() {
	var dropdownParent = $('.u-dropdown > span');
	var dropdownChild = $('.u-dropdown > ul');
	var dropdownWidth = dropdownParent.outerWidth();
	dropdownChild.css("width", dropdownWidth);
	dropdownParent.hover(function() {
		dropdownParent.addClass("s_open");
	});
	
}

// Compile functions
function init() {
	snacssDropdown();
}

// Fire when dom is loaded
$(document).ready(init);