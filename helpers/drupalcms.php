<?php
if (!function_exists('smart_bear_cms_external_cdn_vov_vn_resize')) {
	function smart_bear_cms_external_cdn_vov_vn_resize($url = '', $default = 'front_small')
	{
		return \nguyenanhung\Platforms\SmartBearCMS\Library\ExternalCDNOptimize\ExternalCDNOptimize::externalVovCdnResize($url, $default);
	}
}
if (!function_exists('smart_bear_cms_external_cdn_vov_vn_thumbnail')) {
	function smart_bear_cms_external_cdn_vov_vn_thumbnail($url = '', $smallWidth = 500)
	{
		return \nguyenanhung\Platforms\SmartBearCMS\Library\ExternalCDNOptimize\ExternalCDNOptimize::externalVovCdnResizeThumbnailFixed($url, $smallWidth);
	}
}
