<?php
/**
 * Turn off page interface, since we only output text
 */
cs\Event::instance()->on(
	'System/App/render/before',
	function () {
		cs\Page::instance()->interface = false;
	}
);
