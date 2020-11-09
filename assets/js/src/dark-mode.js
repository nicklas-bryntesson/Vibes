/**
 * Toggle ui controls.
 *
 * Dark mode / Light Mode
 * @link https://css-tricks.com/a-complete-guide-to-dark-mode-on-the-web/
 */

document.addEventListener( 'DOMContentLoaded', function() {
	const darkModeBtn = document.querySelector( '.btn-toggle' );

	darkModeBtn.addEventListener( 'click', function() {
		darkModeBtn.innerHTML = 'Let there be light';
	} );
} );
