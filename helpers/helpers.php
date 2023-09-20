<?php
if (!function_exists('smart_bear_cms_cdn_url_http_to_https')) {
    function smart_bear_cms_cdn_url_http_to_https($url)
    {
        return \nguyenanhung\Platforms\SmartBearCMS\Library\ExternalCDNOptimize\ExternalCDNOptimize::httpToHttps($url);
    }
}
if (!function_exists('smart_bear_cms_cdn_url_change_domain')) {
    function smart_bear_cms_cdn_url_change_domain($url)
    {
        return \nguyenanhung\Platforms\SmartBearCMS\Library\ExternalCDNOptimize\ExternalCDNOptimize::changeDomain($url);
    }
}
if (!function_exists('smart_bear_cms_cdn_url_query_removed')) {
    function smart_bear_cms_cdn_url_query_removed($url = '')
    {
        return \nguyenanhung\Platforms\SmartBearCMS\Library\ExternalCDNOptimize\ExternalCDNOptimize::urlQueryRemoved($url);
    }
}
if (!function_exists('smart_bear_cms_external_cdn_url_optimize')) {
    function smart_bear_cms_external_cdn_url_optimize($url = '', $width = 345, $height = 200)
    {
        return \nguyenanhung\Platforms\SmartBearCMS\Library\ExternalCDNOptimize\ExternalCDNOptimize::externalCdnOptimize($url, $width, $height);
    }
}
