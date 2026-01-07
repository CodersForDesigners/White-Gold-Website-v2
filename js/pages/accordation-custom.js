

	$( function () {

		/*
		 *
		 * ----- Allow the user to collapse an open procedure step (card) in the Sell Gold section
		 *
		 */
		var $sellGoldSection = $( ".js_section_sell_gold" );
		var currentlyToggledCardId = $sellGoldSection.find( ".js_card_toggle:checked" ).attr( "id" );
		$sellGoldSection.on( "click", ".js_card_toggle", function ( event ) {
			var domCardToggle = event.target;
			var newlyToggledCardId = domCardToggle.id;

			if ( currentlyToggledCardId !== newlyToggledCardId )
				return;

			domCardToggle.checked = false;
			currentlyToggledCardId = null;
		} );
		$sellGoldSection.on( "change", ".js_card_toggle", function ( event ) {
			currentlyToggledCardId = event.target.id;
		} );

	} );


    // Get the current URL
var currentUrl = window.location.href;

// Remove all trailing slashes
var newUrl = currentUrl.replace(/\/+$/, "");

// Check if the URL has changed
if (newUrl !== currentUrl) {
    // Change the URL without triggering a full page reload
    window.history.replaceState({}, document.title, newUrl);
}




