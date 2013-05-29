// JavaScript Document
jQuery.fn.makefaq = function(){
//NOTES:
// to load any .faq container as open, give it an additional class of 'oo' in the markup 
// example <div class="faq oo">
// to keep from showing +/x links, give container a class of 'noLinks'
// ---- SET UP FUNCTIONS ----
// base show hide function
var jQueryshowhide =  function() { 
	var theclass = jQuery(this).attr('class');
	var upclass = jQuery(this).parents('.faq').attr('class');
  	jQuery(this).siblings(".aa").slideToggle(225);
	jQuery(this).siblings("a").toggle();
	jQuery(this).parent(".faq").toggleClass('xx').toggleClass('oo');
	if ((theclass == 'aaShow') || (theclass == 'aaHide')) {
	jQuery(this).hide();
	}
	if (upclass.match('xx')){
	jQuery(this).parents().siblings('a.allHide').show();
	} else {
	jQuery(this).parents().siblings('a.allShow').show();
	};
	return false;
 } 
 // show-hide-all function
var jQueryshowhideall = function(){
	var fw = jQuery('.faq');
	var shaclass = jQuery(this).attr('class');
	if (shaclass == 'allShow'){
	jQuery(fw).children('.aa').slideDown(225);
	jQuery(this).siblings('.xx').children('a').toggle();
	jQuery(fw).removeClass('xx').addClass('oo');
	} else {
	jQuery(fw).children('.aa').slideUp(225);
	jQuery(this).siblings('.oo').children('a').toggle();
	jQuery(fw).removeClass('oo').addClass('xx');
	}
jQuery(this).hide();
jQuery(this).siblings('a').show();
return false;
}
// create the show/hide links
var sh = '' ; //'<a href="#" class="aaShow" title="Show">+</a><a href="#" class="aaHide" title="Hide">x</a>';
var sha = '' ; //'<a class="allShow" href="#">Show All</a><a class="allHide" href="#">Hide All</a><br style="clear:both" />';
// ---- START PROCESSING ----
// assign class of 'faqList' to our targeted container
jQuery(this).addClass('faqList').prepend(sha);
// loop the elements with a class of 'faqList'
jQuery('.faqList').each(function(){
// add the faq class to all first level child elements
var faqch = jQuery(this).children('*:not(a)');
jQuery(faqch).addClass('faq');
jQuery('.faq > *:first-child').addClass('qq');
jQuery('.faq > *:not(.qq)').addClass('aa');
// insert links into our markup
var fqq = jQuery(this).children().children('.qq');
var fcl = jQuery(this).attr('class');
if (!(fcl.match('noLinks'))){
jQuery(sh).insertBefore(fqq);
//jQuery(sh).prepend(jQuery(this).children(jQuery('.faqList:not(.noLinks) > .qq')));	
};
});

// assign class of xx to all faq without class oo in markup
jQuery('.faq:not(.oo)').addClass('xx');
// close the xx content sectionswith javascript - no js, all answers load open
jQuery('.xx > .aa').hide();
// show the correct buttons for each div - no js, all links/buttons hidden with css
jQuery('.xx > .aaShow').show();
jQuery('.oo > .aaHide').show();
jQuery('a.allShow').show();

// ------ START CLICK EVENTS -----
// aaShow shows the sibling content
jQuery('a.aaShow').click(jQueryshowhide);
// aaHide hides the sibling content
jQuery('a.aaHide').click(jQueryshowhide);
 // q is clickable, and toggles the content
jQuery(".qq").click(jQueryshowhide);
// 'show all' link shows content in all siblings('aa')
jQuery('a.allShow').click(jQueryshowhideall);
// 'hide all' link hides content in all siblings('aa')
jQuery('a.allHide').click(jQueryshowhideall);
}