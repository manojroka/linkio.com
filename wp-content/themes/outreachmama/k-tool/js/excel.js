// Select + Copy
// https://stackoverflow.com/questions/2013902/select-cells-on-a-table-by-dragging
// http://jsfiddle.net/Brv6J/3/
jQuery(function($){
	var isMouseDown = false, isHighlighted;
	var firstCell = {}, lastCell = {};
	tableAnchors = $('#table-anchors');
	tableAnchorsBody = $('#table-anchors tbody');
	
	function renderSelection() {
		tableAnchorsBody.find('td.highlighted').removeClass('highlighted'); // Reset highlight

		firstRow = _.min([firstCell.row, lastCell.row]);
		lastRow	 = _.max([firstCell.row, lastCell.row]);
	
		firstCol = _.min([firstCell.col, lastCell.col]);
		lastCol  = _.max([firstCell.col, lastCell.col]);

		var rowArr = [];
		var colArr = [];

		rowArr = _.range(firstRow, lastRow+1);
		colArr = _.range(firstCol, lastCol+1);
		
		rows = rowArr.map(function(row){ return ":eq(" + row + ")"; }).join(', ');
		cells = colArr.map(function(cell){ return "td:eq(" + cell + ")"; }).join(', ');

		$('#table-anchors tbody tr').filter(rows).each(function() {
			$(this).children('td').filter(cells).addClass('highlighted');
		});
	}
	
	
	tableAnchorsBody.on('mousedown', 'td', function(ev) {
		// Don't activate on right click
		if(ev.which == 3) return;
	
		isMouseDown = true;
		tableAnchorsBody.find('td.highlighted').removeClass('highlighted'); // Reset highlight

		firstCell.row = $(this).parent().parent().children().index($(this).parent());
		firstCell.col = $(this).parent().children().index($(this));
		
		lastCell.row = firstCell.row + 0;
		lastCell.col = firstCell.col + 0;
		renderSelection();
		
		return false; // prevent text selection
	});

	tableAnchorsBody.on('mouseover', 'td', function() {
		if( isMouseDown ) {
			lastCell.col = $(this).parent().children().index($(this));
			lastCell.row = $(this).parent().parent().children().index($(this).parent());
			
			renderSelection();
		}
	});

	tableAnchorsBody.on('selectstart', 'td', function() {
		return false;
	});

	tableAnchorsBody.mouseup( function(e) {
		isMouseDown = false;
	});

	// Reset cells selection
	$(document).mouseup(function(e) {
		var container = $('#generated');
	
		// If the target of the click isn't the container nor a descendant of the container
		if(!container.is(e.target) && container.has(e.target).length === 0) {
			tableAnchorsBody.find('td.highlighted').removeClass('highlighted'); // Reset highlight
			// console.log('Reset cells selection !');
		}
	});
	
	function copyAnchorsData() {
		
		// Copy all .highlighted cells to clipboard
		var copyText = '';
		$('.highlighted').each(function( index, value ) {
			lastHighlightedInRow = false;

			// Last highlighted cell in a row
			// ALTERNATIVE: $(this)[0] == $(this).parent().find('td.highlighted').last()[0];
			// ALTERNATIVE: if( $(this).is( $(this).parent().find('td.highlighted').last() ) )
				
			console.log( 'This index: ' + $(this).index() );
			console.log( 'Last index: ' + $(this).parent().find('td.highlighted').last().index() );
			
			if( $(this).index() == $(this).parent().find('td.highlighted').last().index() )
				lastHighlightedInRow = true;
			
			cellText = $(this).text();
			if(cellText == '')
				cellText = $(this).parent().hasClass('favorite') ? 'Yes' : 'No';
			
			copyText += cellText;
			copyText += lastHighlightedInRow ? "\n" : "\t"; // Excel expects tab-delimeted data
		});
		
		if(copyText != '') {
			// DEPRECATED: Set tooltip data .. show tooltip .. wait 1000ms .. destroy tooltip
/*			lastCellSelected = jQuery(e.toElement);
			lastCellSelected.data({
				'container': 'body',
				'toggle': 'tooltip',
				'placement': 'top',
				'title': 'Data copy successful !'
			}).tooltip('show');
			
			setTimeout(function() {
				lastCellSelected.tooltip('destroy');
			}, 1000); */
			
			copyTextToClipboard( copyText );
		}
	}
	
	$(document).on('keydown', function ( e ) {
		if( (e.metaKey || e.ctrlKey) && (String.fromCharCode(e.which).toLowerCase() === 'c') ) {
			copyAnchorsData();
		}
	});
});
