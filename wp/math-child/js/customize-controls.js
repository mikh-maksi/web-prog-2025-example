( function( api ) {

	// Extends our custom "project-management" section.
	api.sectionConstructor['project-management'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );