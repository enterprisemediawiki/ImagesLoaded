<?php
/**
 * Documentation: https://github.com/enterprisemediawiki/ImagesLoaded
 *
 * @file ImagesLoaded.class.php
 * @addtogroup Extensions
 * @author James Montalvo
 * @copyright © 2017 by James Montalvo
 * @licence GNU GPL v3+
 */

class ImagesLoaded {
	static function onBeforePageDisplay ( OutputPage &$out, Skin &$skin ) {
		global $wgServer, $wgExtensionAssetsPath;
		$scriptURL = "$wgServer/$wgExtensionAssetsPath/ImagesLoaded/imagesloaded.pkgd.js";
		$out->addScript( "<script type='text/javascript' src='$scriptURL'></script>" );
	}
}
