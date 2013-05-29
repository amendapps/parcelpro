var gg = jQuery.noConflict();

gg(function () {



	// Notification Close Button

	gg('.close-notification').click(

		function () {

			gg(this).parent().fadeTo(350, 0, function () {gg(this).slideUp(600);});

			return false;

		}

	);



	// jQuery Tipsy

	gg('[rel=tooltip], #main-nav span, .loader').tipsy({gravity:'s', fade:true}); // Tooltip Gravity Orientation: n | w | e | s



	// jQuery Facebox Modal

	gg('.open-modal').nyroModal();



	// jQuery jWYSIWYG Editor

	gg('.wysiwyg').wysiwyg({ iFrameClass:'wysiwyg-iframe' });

	

	// jQuery dataTables

	gg('.datatable').dataTable();



	// jQuery Custome File Input

	gg('.fileupload').customFileInput();



	// jQuery DateInput

	gg('.datepicker').datepick({ pickerClass: 'jq-datepicker' });



	// jQuery Data Visualize

	gg('table.data').each(function() {

		var chartWidth = gg(this).parent().width()*0.90; // Set chart width to 90% of its parent

		var chartType = ''; // Set chart type

			

		if (gg(this).attr('data-chart')) { // If exists chart-chart attribute

			chartType = gg(this).attr('data-chart'); // Get chart type from data-chart attribute

		} else {

			chartType = 'area'; // If data-chart attribute is not set, use 'area' type as default. Options: 'bar', 'area', 'pie', 'line'

		}

		

		if(chartType == 'line' || chartType == 'pie') {

			gg(this).hide().visualize({

				type: chartType,

				width: chartWidth,

				height: '240px',

				lineDots: 'double',

				interaction: true,

				multiHover: 5,

				tooltip: true,

				tooltiphtml: function(data) {

					var html ='';

					for(var i=0; i<data.point.length; i++){

						html += '<p class="chart_tooltip"><strong>'+data.point[i].value+'</strong> '+data.point[i].yLabels[0]+'</p>';

					}	

					return html;

				}

			});

		} else {

			gg(this).hide().visualize({

				type: chartType,

				width: chartWidth,

				height: '240px'

			});

		}

	});



	// Check all checkboxes

	gg('.check-all').click(

		function(){

			gg(this).parents('form').find('input:checkbox').attr('checked', gg(this).is(':checked'));

		}

	)



	// IE7 doesn't support :disabled

	gg('.ie7').find(':disabled').addClass('disabled');



	// Menu Dropdown

	gg('#main-nav li ul').hide(); //Hide all sub menus

	gg('#main-nav li.current a').parent().find('ul').slideToggle('slow'); // Slide down the current sub menu

	gg('#main-nav li a').click(

		function () {

			gg(this).parent().siblings().find('ul').slideUp('normal'); // Slide up all menus except the one clicked

			gg(this).parent().find('ul').slideToggle('normal'); // Slide down the clicked sub menu

			return false;

		}

	);

	gg('#main-nav li a.no-submenu, #main-nav li li a').click(

		function () {

			window.location.href=(this.href); // Open link instead of a sub menu

			return false;

		}

	);



	// Widget Close Button

	gg('.close-widget').click(

		function () {

			gg(this).parent().fadeTo(350, 0, function () {gg(this).slideUp(600);}); // Hide widgets

			return false;

		}

	);



	// Table actions

	gg('.table-switch').hide();

	gg('.toggle-table-switch').click(

		function () {

			gg(this).parent().parent().siblings().find('.toggle-table-switch').removeClass('active').next().slideUp(); // Hide all menus expect the one clicked

			gg(this).toggleClass('active').next().slideToggle(); // Toggle clicked menu

			gg(document).click(function() { // Hide menu when clicked outside of it

				gg('.table-switch').slideUp();

				gg('.toggle-table-switch').removeClass('active')

			});

			return false;

		}

	);



	// Image actions

	gg('.image-frame').hover(

		function() { gg(this).find('.image-actions').css('display', 'none').fadeIn('fast').css('display', 'block'); }, // Show actions menu

		function() { gg(this).find('.image-actions').fadeOut(100); } // Hide actions menu

	);



		// Tickets

	gg('.tickets .ticket-details').hide(); // Hide all ticket details

	gg('.tickets .ticket-open-details').click( // On click hide all ticket details content and open clicked one

		function() {

			//gg('.tickets .ticket-details').slideUp()

			gg(this).parent().parent().parent().parent().siblings().find('.ticket-details').slideUp(); // Hide all ticket details expect the one clicked

			gg(this).parent().parent().parent().parent().find('.ticket-details').slideToggle();

			return false;

		}

	);



	// Wizard

	gg('.wizard-content').hide(); // Hide all steps

	gg('.wizard-content:first').show(); // Show default step

	gg('.wizard-steps li:first-child').find('a').addClass('current');

	gg('.wizard-steps a').click(

		function() { 

			var step = gg(this).attr('href'); // Set variable 'step' to the value of href of clicked wizard step

			gg('.wizard-steps a').removeClass('current');

			gg(this).addClass('current');

			gg(this).parent().prevAll().find('a').addClass('done'); // Mark all prev steps as done

			gg(this).parent().nextAll().find('a').removeClass('done'); // Mark all next steps as undone

			gg(step).siblings('.wizard-content').hide(); // Hide all content divs

			gg(step).fadeIn(); // Show the content div with the id equal to the id of clicked step

			return false;

		}

	);

	gg('.wizard-next').click(

		function() { 

			var step = gg(this).attr('href'); // Set variable 'step' to the value of href of clicked wizard step

			gg('.wizard-steps a').removeClass('current');

			gg('.wizard-steps a[href="'+step+'"]').addClass('current');

			gg('.wizard-steps a[href="'+step+'"]').parent().prevAll().find('a').addClass('done'); // Mark all prev steps as done

			gg('.wizard-steps a[href="'+step+'"]').parent().nextAll().find('a').removeClass('done'); // Mark all next steps as undone

			gg(step).siblings('.wizard-content').hide(); // Hide all content divs

			gg(step).fadeIn(); // Show the content div with the id equal to the id of clicked step

			return false;

		}

	);



	// Content box tabs and sidetabs

	gg('.tab, .sidetab').hide(); // Hide the content divs

	gg('.default-tab, .default-sidetab').show(); // Show the div with class 'default-tab'

	gg('.tab-switch a.default-tab, .sidetab-switch a.default-sidetab').addClass('current'); // Set the class of the default tab link to 'current'



	if (window.location.hash && window.location.hash.match(/^#tab\d+gg/)) {

		var tabID = window.location.hash;

		

		gg('.tab-switch a[href='+tabID+']').addClass('current').parent().siblings().find('a').removeClass('current');

		gg('div'+tabID).parent().find('.tab').hide();

		gg('div'+tabID).show();

	} else if (window.location.hash && window.location.hash.match(/^#sidetab\d+gg/)) {

		var sidetabID = window.location.hash;

		

		gg('.sidetab-switch a[href='+sidetabID+']').addClass('current');

		gg('div'+sidetabID).parent().find('.sidetab').hide();

		gg('div'+sidetabID).show();

	}

	

	gg('.tab-switch a').click(

		function() { 

			var tab = gg(this).attr('href'); // Set variable 'tab' to the value of href of clicked tab

			gg(this).parent().siblings().find('a').removeClass('current'); // Remove 'current' class from all tabs

			gg(this).addClass('current'); // Add class 'current' to clicked tab

			gg(tab).siblings('.tab').hide(); // Hide all content divs

			gg(tab).show(); // Show the content div with the id equal to the id of clicked tab

			gg(tab).find('.visualize').trigger('visualizeRefresh'); // Refresh jQuery Visualize

			gg('.fullcalendar').fullCalendar('render'); // Refresh jQuery FullCalendar

			return false;

		}

	);



	gg('.sidetab-switch a').click(

		function() { 

			var sidetab = gg(this).attr('href'); // Set variable 'sidetab' to the value of href of clicked sidetab

			gg(this).parent().siblings().find('a').removeClass('current'); // Remove 'current' class from all sidetabs

			gg(this).addClass('current'); // Add class 'current' to clicked sidetab

			gg(sidetab).siblings('.sidetab').hide(); // Hide all content divs

			gg(sidetab).show(); // Show the content div with the id equal to the id of clicked tab

			gg(sidetab).find('.visualize').trigger('visualizeRefresh'); // Refresh jQuery Visualize

			gg('.fullcalendar').fullCalendar('render'); // Refresh jQuery FullCalendar

			

			return false;

		}

	);

	

	// Content box accordions

	gg('.accordion li div').hide();

	gg('.accordion li:first-child div').show();

	gg('.accordion .accordion-switch').click(

		function() {

			gg(this).parent().siblings().find('div').slideUp();

			gg(this).next().slideToggle();

			return false;

		}

	);

	

	//Minimize Content Article

	gg('article header h2').css({ 'cursor':'s-resize' }); // Minizmie is not available without javascript, so we don't change cursor style with CSS

	gg('article header h2').click( // Toggle the Box Content

		function () {

			gg(this).parent().find('nav').toggle();

			gg(this).parent().parent().find('section, footer').toggle();

		}

	);

	

	// Progress bar animation

	gg('.progress-bar').each(function() {

		var progress = gg(this).children().width();

		gg(this).children().css({ 'width':0 }).animate({width:progress},3000);

	});

	

	//jQuery Full Calendar

	var date = new Date();

	var d = date.getDate();

	var m = date.getMonth();

	var y = date.getFullYear();

	

	gg('.fullcalendar').fullCalendar({

		header: {

			left: 'prev,next today',

			center: 'title',

			right: 'month,basicWeek,basicDay'

		},

		editable: true,

		events: [

			{

				title: 'All Day Event',

				start: new Date(y, m, 1)

			},

			{

				title: 'Long Event',

				start: new Date(y, m, d-5),

				end: new Date(y, m, d-2)

			},

			{

				id: 999,

				title: 'Repeating Event',

				start: new Date(y, m, d-3, 16, 0),

				allDay: false

			},

			{

				id: 999,

				title: 'Repeating Event',

				start: new Date(y, m, d+4, 16, 0),

				allDay: false

			},

			{

				title: 'Meeting',

				start: new Date(y, m, d, 10, 30),

				allDay: false

			},

			{

				title: 'Lunch',

				start: new Date(y, m, d, 12, 0),

				end: new Date(y, m, d, 14, 0),

				allDay: false

			},

			{

				title: 'Birthday Party',

				start: new Date(y, m, d+1, 19, 0),

				end: new Date(y, m, d+1, 22, 30),

				allDay: false

			},

			{

				title: 'Click for Walking Pixels',

				start: new Date(y, m, 28),

				end: new Date(y, m, 29),

				url: 'http://www.walkingpixels.com/'

			}

		]

	});

	

});

