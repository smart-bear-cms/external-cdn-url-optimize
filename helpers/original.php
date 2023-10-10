<?php
if (!function_exists('smart_bear_cms_external_cdn_url_dantri_original')) {
    function smart_bear_cms_external_cdn_url_dantri_original($url = '', $removeZoom = false)
    {
        return \nguyenanhung\Platforms\SmartBearCMS\Library\ExternalCDNOptimize\ExternalCDNOptimize::externalDanTriCdnPhotoOriginal($url, $removeZoom);
    }
}
if (!function_exists('smart_bear_cms_external_cdn_url_vtc_news_original')) {
    function smart_bear_cms_external_cdn_url_vtc_news_original($url = '', $removeZoom = false)
    {
        return \nguyenanhung\Platforms\SmartBearCMS\Library\ExternalCDNOptimize\ExternalCDNOptimize::externalVtcNewsCdnPhotoOriginal($url, $removeZoom);
    }
}
if (!function_exists('smart_bear_cms_external_cdn_url_original')) {
    function smart_bear_cms_external_cdn_url_original($url = '', $removeZoom = false)
    {
        $url = trim($url);
        if (empty($url)) {
            return $url;
        }
        $url = smart_bear_cms_external_cdn_url_dantri_original($url, $removeZoom);
        $url = smart_bear_cms_external_cdn_url_vtc_news_original($url, $removeZoom);
        return trim($url);
    }
}
