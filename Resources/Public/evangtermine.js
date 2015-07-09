var dateoptions = 
	{ // Default regional settings
		clearText: 'Löschen', // Display text for clear link
		clearStatus: 'Aktuelles Datum löschen', // Status text for clear link
		closeText: 'X', // Display text for close link
		closeStatus: 'Ohne Änderung schließen.', // Status text for close link
		prevText: '&#x3c;Vorh.', // Display text for previous month link
		prevStatus: 'Vorherigen Monat anzeigen', // Status text for previous month link
		nextText: 'Weiter&#x3e;', // Display text for next month link
		nextStatus: 'Nächsten Monat anzeigen', // Status text for next month link
		currentText: 'Heute', // Display text for current month link
		currentStatus: 'Aktuellen Monat anzeigen', // Status text for current month link
		monthNames: ['Januar','Februar','März','April','Mai','Juni',
			'Juli','August','September','Oktober','November','Dezember'], // Names of months for drop-down and formatting
		monthNamesShort: ['Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dez'], // For formatting
		monthStatus: 'Anderer Monat', // Status text for selecting a month
		yearStatus: 'Anderes Jahr', // Status text for selecting a year
		weekHeader: 'Wo', // Header for the week of the year column
		weekStatus: 'Woche des Jahres', // Status text for the week of the year column
		dayNames: ['Sonntag', 'Montag', 'Dienstag', 'Mittwoch', 'Donnerstag', 'Freitag', 'Samstag'], // For formatting
		dayNamesShort: ['So', 'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa'], // For formatting
		dayNamesMin: ['So','Mo','Di','Mi','Do','Fr','Sa'], // Column headings for days starting at Sunday
		dayStatus: 'Set DD as first week day', // Status text for the day of the week selection
		dateStatus: 'Select DD, M d', // Status text for the date selection
		dateFormat: 'dd.mm.yy', // See format options on parseDate
		firstDay: 1, // The first day of the week, Sun = 0, Mon = 1, ...
		initStatus: 'Wählen Sie bitte ein Datum', // Initial Status text on opening
		isRTL: false, // True if right-to-left language, false if left-to-right
		changeMonth: true,
		changeYear: true,
		showButtonPanel: true,
		minDate: -0
	};

$(function() {
	$('#date').datepicker(dateoptions);
	
});

function ET_openWindow(etURL,windowName,features) { window.open(etURL,windowName,features);}

// slide in and out event place images
$(function() {
	
	$('#et_place_image_th').mouseover(function() {
		$(this).slideUp();
		$('#et_place_image').slideDown();
	});
	
	$('#et_place_image').mouseout(function() {
		$(this).slideUp();
		$('#et_place_image_th').slideDown();
	});
	
});
