<?php
/**
 * Project web-builder-external-cdn-url-optimize
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 20/09/2023
 * Time: 09:56
 */

namespace nguyenanhung\Platforms\SmartBearCMS\Library\ExternalCDNOptimize;

class ExternalCDNOptimize
{
	const VERSION = '1.0.3';

	public function getVersion()
	{
		return self::VERSION;
	}

	public static function httpToHttps($url = '')
	{
		$url = trim($url);
		if (empty($url)) {
			return $url;
		}
		$url = str_replace(
			array(
				'http://cdnphoto.dantri.com.vn',
				'http://img.fica.vn',
				'http://cdn-i.vtcnews.vn',
				'http://www.vothuat.vn',
				'http://haiphong.gov.vn',
				'http://congan.haiphong.gov.vn',
				'http://www.baohaiphong.com.vn',
				'http://baohaiphong.com.vn',
				'http://123.27.254.48:9000',
				'http://static.cand.com.vn',
				'http://streaming1.danviet.vn',
				'http://media.kinhtedothi.vn',
				'http://media.thuonghieucongluan.vn',
				'http://image.congan.com.vn',
				'http://cloud.tienlenquyetthang.com',
				'https://cloud.tienlenquyetthang.com',
				'http://images.baoninhthuan.com.vn',
				'http://images1.baoninhthuan.com.vn',
			),
			array(
				'https://cdnphoto.dantri.com.vn',
				'https://img.fica.vn',
				'https://cdn-i.vtcnews.vn',
				'https://www.vothuat.vn',
				'https://haiphong.gov.vn',
				'https://congan.haiphong.gov.vn',
				'https://baohaiphong.com.vn',
				'https://baohaiphong.com.vn',
				'https://baohaiphong.com.vn',
				'https://static.cand.com.vn',
				'https://streaming1.danviet.vn',
				'https://media.kinhtedothi.vn',
				'https://media.thuonghieucongluan.vn',
				'https://image.congan.com.vn',
				'https://image.congan.com.vn',
				'https://image.congan.com.vn',
				'https://images.baoninhthuan.com.vn',
				'https://images1.baoninhthuan.com.vn',
			),
			$url);
		return trim($url);
	}

	public static function changeDomain($url = '')
	{
		$url = trim($url);
		if (empty($url)) {
			return $url;
		}
		$url = str_replace(
			array(
				'//image-us.eva.vn/',
				'//vov-media.emitech.vn/',
				'tq5.mediacdn.vn/',
				'https://vietnamtraveller.net.vn',
				't.ex-cdn.com/suckhoecongdongonline.vn/files/',
				't.ex-cdn.com/thoidaiplus.suckhoedoisong.vn/files/',
				't.ex-cdn.com/nhadautu.vn/files/',
				't.ex-cdn.com/vovgiaothong.vn/files/',
				't.ex-cdn.com/giadinhmoi.vn/files/',
				't.ex-cdn.com/nongnghiep.vn/files/',
				't.ex-cdn.com/giadinhonline.vn/files/',
				't.ex-cdn.com/vietpress.vn/files/',
				'yudnifhcy4vod.vcdn.cloud',
			),
			array(
				'//cdn.eva.vn/',
				'//media.vov.vn/',
				'toquoc.mediacdn.vn/',
				'https://vntravel.org.vn',
				'i.ex-cdn.com/suckhoecongdongonline.vn/files/',
				'i.ex-cdn.com/thoidaiplus.suckhoedoisong.vn/files/',
				'i.ex-cdn.com/nhadautu.vn/files/',
				'i.ex-cdn.com/vovgiaothong.vn/files/',
				'i.ex-cdn.com/giadinhmoi.vn/files/',
				'i.ex-cdn.com/nongnghiep.vn/files/',
				'i.ex-cdn.com/giadinhonline.vn/files/',
				'i.ex-cdn.com/vietpress.vn/files/',
				'cloudvodqh.tek4tv.vn',
			),
			$url
		);
		return trim($url);
	}

	public static function urlQueryRemoved($url = '')
	{
		$url = trim($url);
		if (empty($url)) {
			return $url;
		}
		$parse = parse_url($url);
		if (!isset($parse['query'])) {
			return $url;
		}
		$queryRemoved = '?' . $parse['query'];
		$url = str_replace($queryRemoved, '', $url);
		return trim($url);
	}

	public static function urlPushSchemaProtocol($url = '', $protocol = 'https')
	{
		$url = trim($url);
		if (empty($url)) {
			return $url;
		}

		$parse = parse_url($url);
		if (!isset($parse['host'])) {
			return $url;
		}
		if (!isset($parse['scheme']) && !empty($protocol)) {
			return trim($protocol) . ':' . $url;
		}

		return $url;
	}

	public static function externalVovCdnResize($url = '', $default = 'front_small')
	{
		$url = trim($url);
		if (empty($url)) {
			return $url;
		}
		$url = str_replace('styles/og_image', 'styles/' . trim($default), $url);
		$url = str_replace('styles/front_large', 'styles/' . trim($default), $url);
		$url = str_replace('styles/front_medium', 'styles/' . trim($default), $url);
		$url = str_replace('styles/front_small', 'styles/' . trim($default), $url);
		return trim($url);
	}

	public static function externalVovCdnResizeThumbnailFixed($url = '', $smallWidth = 500)
	{
		$url = trim($url);
		if (empty($url)) {
			return $url;
		}
		$parseUrl = parse_url($url);
		if ((isset($parseUrl['host']) && $parseUrl['host'] === 'media.vov.vn') && $smallWidth < 500) {
			return self::externalVovCdnResize($url);
		}
		return $url;
	}

	public static function externalVtcNewsCdnPhotoOriginal($url = '', $removeZoom = false)
	{
		$url = trim($url);
		if (empty($url)) {
			return $url;
		}
		$cdnDomain = 'https://cdn-i.vtcnews.vn';
		$cdnPhotoHostname = 'cdn-i.vtcnews.vn';
		$parse = parse_url($url);
		if (!isset($parse['host'], $parse['path'])) {
			return $url;
		}
		$urlHost = trim($parse['host']);
		$urlPath = trim($parse['path']);
		$paths = explode('/', $urlPath);
		$countPaths = count($paths);
		if (($countPaths > 3) && $urlHost === $cdnPhotoHostname && empty($paths[0])) {
			if (($removeZoom === true) && $paths[1] === 'resize') {
				unset($paths[1], $paths[2]);
			}
			$newUrlPath = implode('/', $paths);
			$newUrl = $cdnDomain . trim($newUrlPath);
			return trim($newUrl);
		}
		return $url;
	}

	public static function externalVtcNewsCdnPhotoThumbnail($url = '', $thumbnail = false, $thumbnailPath = 'ma')
	{
		$url = trim($url);
		if (empty($url)) {
			return $url;
		}
		$cdnDomain = 'https://cdn-i.vtcnews.vn';
		$cdnPhotoHostname = 'cdn-i.vtcnews.vn';
		$parse = parse_url($url);
		if (!isset($parse['host'], $parse['path'])) {
			return $url;
		}
		$urlHost = trim($parse['host']);
		$urlPath = trim($parse['path']);
		$paths = explode('/', $urlPath);
		$countPaths = count($paths);
		if (($countPaths > 3) && $urlHost === $cdnPhotoHostname && empty($paths[0])) {
			if (($thumbnail === true) && $paths[1] === 'resize') {
				unset($paths[2]);
				$paths[2] = $thumbnailPath;
			}
			ksort($paths);
			$newUrlPath = implode('/', $paths);
			$newUrl = $cdnDomain . trim($newUrlPath);
			return trim($newUrl);
		}
		return $url;
	}

	public static function externalDanTriCdnPhotoOriginal($url = '', $removeZoom = false)
	{
		$url = trim($url);
		if (empty($url)) {
			return $url;
		}
		$cdnDomain = 'https://icdn.dantri.com.vn';
		// $icdnHostname = 'icdn.dantri.com.vn';
		$cdnPhotoHostname = 'cdnphoto.dantri.com.vn';
		$parse = parse_url($url);
		if (!isset($parse['host'], $parse['path'])) {
			return $url;
		}
		$urlHost = trim($parse['host']);
		$urlPath = trim($parse['path']);
		$paths = explode('/', $urlPath);
		$countPaths = count($paths);
		if (($countPaths > 3) && ($urlHost === $cdnPhotoHostname && empty($paths[0]))) {
			if ($removeZoom === true) {
				if ($paths[2] === 'zoom') {
					unset($paths[1], $paths[2], $paths[3]);
				} elseif ($paths[2] === 'thumb_w') {
					unset($paths[1], $paths[2]);
				} else {
					unset($paths[1]);
				}
			} else {
				unset($paths[1]);
			}
			$newUrlPath = implode('/', $paths);
			$newUrl = $cdnDomain . trim($newUrlPath);
			return trim($newUrl);
		}
		return $url;
	}

	public static function externalCdnWorkWithUrlQueryResize()
	{
		return [
			'images.baoquangnam.vn',
			'cdn.vietnambiz.vn',
			'cdn.vietnammoi.vn',
			'2sao.vietnamnetjsc.vn',
			'ttol.vietnamnetjsc.vn',
			'static-images.vnncdn.net',
			'static2-images.vnncdn.net',
			'media-cdn-v2.laodong.vn',
			'file.baothuathienhue.vn'
		];
	}

	public static function externalCdnWorkWithFullUrlQueryResize()
	{
		return [
			'images.baoquangnam.vn',
			'media.thuonghieucongluan.vn',
			'media.doanhnghiepvn.vn',
		];
	}

	public static function externalCdnWorkWithFullUrlQueryResizeReplace($domain = '')
	{
		return [
			trim($domain) . '/resize_600x315/' => trim($domain) . '/image_resize/',
			trim($domain) . '/resize_640x360/' => trim($domain) . '/image_resize/',
		];
	}

	protected static function optimizeOneDomainCdnEPICMSOptimize($domain, $url = '', $width = 345, $height = 200)
	{
		$domain = trim($domain);
		$url = str_replace(trim($domain) . '/1200x630/Uploaded', trim($domain) . '/600x315/Uploaded', $url);
		$url = str_replace(trim($domain) . '/Uploaded', trim($domain) . '/600x315/Uploaded', $url);
		return trim($url);
	}

	public static function externalCdnEPICMSOptimize($url = '', $width = 345, $height = 200)
	{
		$url = trim($url);
		if (empty($url)) {
			return $url;
		}
		// EPI CMS
		$url = str_replace('https://vov-media.emitech.vn/sites/default/files/styles/og_image/', 'https://media.vov.vn/sites/default/files/styles/front_medium/', $url);
		$url = str_replace('https://vov-media.emitech.vn/sites/default/files/styles/front_medium/', 'https://media.vov.vn/sites/default/files/styles/front_medium/', $url);
		$url = str_replace('https://vov-media.emitech.vn/sites/default/files/styles/front_large/', 'https://media.vov.vn/sites/default/files/styles/front_medium/', $url);
		$url = str_replace('https://vov-media.emitech.vn/sites/default/files/styles/front_small/', 'https://media.vov.vn/sites/default/files/styles/front_medium/', $url);
		$url = str_replace('https://media.vov.vn/sites/default/files/styles/og_image/', 'https://media.vov.vn/sites/default/files/styles/front_medium/', $url);
		$url = str_replace('https://media.vov.vn/sites/default/files/styles/front_large/', 'https://media.vov.vn/sites/default/files/styles/front_medium/', $url);
		$url = str_replace('https://media.vov.vn/sites/default/files/styles/front_small/', 'https://media.vov.vn/sites/default/files/styles/front_medium/', $url);

		$url = self::optimizeOneDomainCdnEPICMSOptimize('https://photo-baomoi.bmcdn.me', $url, $width, $height);
		$url = self::optimizeOneDomainCdnEPICMSOptimize('https://baomoi-photo-fbcrawler.bmcdn.me', $url, $width, $height);
		$url = self::optimizeOneDomainCdnEPICMSOptimize('https://photo-cms-viettimes.zadn.vn', $url, $width, $height);
		$url = self::optimizeOneDomainCdnEPICMSOptimize('https://photo-cms-vovworld.zadn.vn', $url, $width, $height);
		$url = self::optimizeOneDomainCdnEPICMSOptimize('https://photo-cms-tpo.epicdn.me', $url, $width, $height);
		$url = self::optimizeOneDomainCdnEPICMSOptimize('https://photo-cms-giaoduc.epicdn.me', $url, $width, $height);
		$url = self::optimizeOneDomainCdnEPICMSOptimize('https://photo-cms-baophapluat.epicdn.me', $url, $width, $height);
		$url = self::optimizeOneDomainCdnEPICMSOptimize('https://photo-cms-baodauthau.epicdn.me', $url, $width, $height);
		$url = self::optimizeOneDomainCdnEPICMSOptimize('https://photo-cms-giaoducthoidai.epicdn.me', $url, $width, $height);
		$url = self::optimizeOneDomainCdnEPICMSOptimize('https://photo-cms-baonghean.epicdn.me', $url, $width, $height);
		$url = self::optimizeOneDomainCdnEPICMSOptimize('https://photo-cms-baolaocai.epicdn.me', $url, $width, $height);
		$url = self::optimizeOneDomainCdnEPICMSOptimize('https://photo-cms-baogialai.epicdn.me', $url, $width, $height);
		$url = self::optimizeOneDomainCdnEPICMSOptimize('https://photo-cms-baobackan.epicdn.me', $url, $width, $height);
		$url = self::optimizeOneDomainCdnEPICMSOptimize('https://photo-cms-nhandan.epicdn.me', $url, $width, $height);
		$url = self::optimizeOneDomainCdnEPICMSOptimize('https://photo-cms-giacngo.epicdn.me', $url, $width, $height);
		$url = self::optimizeOneDomainCdnEPICMSOptimize('https://photo-cms-ngaynay.epicdn.me', $url, $width, $height);
		$url = self::optimizeOneDomainCdnEPICMSOptimize('https://photo-cms-sggp.epicdn.me', $url, $width, $height);
		$url = self::optimizeOneDomainCdnEPICMSOptimize('https://photo-mekongasean.epicdn.me', $url, $width, $height);
		$url = self::optimizeOneDomainCdnEPICMSOptimize('https://photo-cms-vietnamdaily.epicdn.me', $url, $width, $height);
		$url = self::optimizeOneDomainCdnEPICMSOptimize('https://photo-cms-bizlive.epicdn.me', $url, $width, $height);
		$url = self::optimizeOneDomainCdnEPICMSOptimize('https://photo-cms-tinnhanhchungkhoan.epicdn.me', $url, $width, $height);

		$url = self::optimizeOneDomainCdnEPICMSOptimize('https://images.kienthuc.net.vn', $url, $width, $height);
		$url = self::optimizeOneDomainCdnEPICMSOptimize('https://image.mekongasean.vn', $url, $width, $height);
		$url = self::optimizeOneDomainCdnEPICMSOptimize('https://image.viettimes.vn', $url, $width, $height);
		$url = self::optimizeOneDomainCdnEPICMSOptimize('https://image.bizlive.vn', $url, $width, $height);
		$url = self::optimizeOneDomainCdnEPICMSOptimize('https://image.plo.vn', $url, $width, $height);
		$url = self::optimizeOneDomainCdnEPICMSOptimize('https://image.tienphong.vn', $url, $width, $height);
		$url = self::optimizeOneDomainCdnEPICMSOptimize('https://image.ngaynay.vn', $url, $width, $height);
		$url = self::optimizeOneDomainCdnEPICMSOptimize('https://image.nhandan.vn', $url, $width, $height);
		$url = self::optimizeOneDomainCdnEPICMSOptimize('https://image.baolaocai.vn', $url, $width, $height);
		$url = self::optimizeOneDomainCdnEPICMSOptimize('https://image.baonghean.vn', $url, $width, $height);
		$url = self::optimizeOneDomainCdnEPICMSOptimize('https://image.baogialai.com.vn', $url, $width, $height);
		$url = self::optimizeOneDomainCdnEPICMSOptimize('https://image.baobackan.com.vn', $url, $width, $height);
		$url = self::optimizeOneDomainCdnEPICMSOptimize('https://image.baodauthau.vn', $url, $width, $height);
		$url = self::optimizeOneDomainCdnEPICMSOptimize('https://image.baophapluat.vn', $url, $width, $height);
		$url = self::optimizeOneDomainCdnEPICMSOptimize('https://image.giaoducthoidai.vn', $url, $width, $height);
		$url = self::optimizeOneDomainCdnEPICMSOptimize('https://image.giacngo.vn', $url, $width, $height);
		$url = self::optimizeOneDomainCdnEPICMSOptimize('https://image.thuonggiaonline.vn', $url, $width, $height);
		$url = self::optimizeOneDomainCdnEPICMSOptimize('https://image.sggp.org.vn', $url, $width, $height);
		$url = self::optimizeOneDomainCdnEPICMSOptimize('https://image.tinnhanhchungkhoan.vn', $url, $width, $height);
		$url = self::optimizeOneDomainCdnEPICMSOptimize('https://img.giaoduc.net.vn', $url, $width, $height);
		return trim($url);
	}

	protected static function optimizeOneDomainCdnTTXVNCMSOptimize($domain, $url = '', $width = 345, $height = 200)
	{
		$domain = trim($domain);
		$url = str_replace(trim($domain) . '/1200x630/Uploaded', trim($domain) . '/t' . trim($width) . '/Uploaded', $url);
		$url = str_replace(trim($domain) . '/t460/Uploaded', trim($domain) . '/t' . trim($width) . '/Uploaded', $url);
		$url = str_replace(trim($domain) . '/Uploaded', trim($domain) . '/t' . trim($width) . '/Uploaded', $url);
		return trim($url);
	}

	public static function externalCdnTTXVNCMSOptimize($url = '', $width = 345, $height = 200)
	{
		$url = trim($url);
		if (empty($url)) {
			return $url;
		}
		$url = self::optimizeOneDomainCdnTTXVNCMSOptimize('https://cdnimg.vietnamplus.vn', $url, $width, $height);
		$url = self::optimizeOneDomainCdnTTXVNCMSOptimize('https://img.dantocmiennui.vn', $url, $width, $height);
		return trim($url);
	}

	protected static function optimizeOneDomainCdnVCCorpCMSOptimize($domain, $url = '', $width = 345)
	{
		$domain = trim($domain);
		$url = str_replace(trim($domain) . '/1', trim($domain) . '/thumb_w/' . trim($width) . '/1', $url);
		$url = str_replace(trim($domain) . '/2', trim($domain) . '/thumb_w/' . trim($width) . '/2', $url);
		$url = str_replace(trim($domain) . '/3', trim($domain) . '/thumb_w/' . trim($width) . '/3', $url);
		$url = str_replace(trim($domain) . '/4', trim($domain) . '/thumb_w/' . trim($width) . '/4', $url);
		$url = str_replace(trim($domain) . '/5', trim($domain) . '/thumb_w/' . trim($width) . '/5', $url);
		$url = str_replace(trim($domain) . '/6', trim($domain) . '/thumb_w/' . trim($width) . '/6', $url);
		$url = str_replace(trim($domain) . '/7', trim($domain) . '/thumb_w/' . trim($width) . '/7', $url);
		$url = str_replace(trim($domain) . '/8', trim($domain) . '/thumb_w/' . trim($width) . '/8', $url);
		$url = str_replace(trim($domain) . '/9', trim($domain) . '/thumb_w/' . trim($width) . '/9', $url);
		$url = str_replace(trim($domain) . '/fb_thumb_bn/', trim($domain) . '/thumb_w/' . trim($width) . '/', $url);
		$url = str_replace(trim($domain) . '/zoom/600_315/', trim($domain) . '/thumb_w/' . trim($width) . '/', $url);
		return trim($url);
	}

	public static function externalCdnVCCorpCMSOptimize($url = '', $width = 345, $height = 200)
	{
		$url = trim($url);
		if (empty($url)) {
			return $url;
		}
		$url = str_replace(
			array(
				'/thumb_w/1200/',
				'/thumb_w/1100/',
				'/thumb_w/1000/',
				'/thumb_w/900/',
				'/thumb_w/800/',
				'/thumb_w/700/',
				'/thumb_w/600/',
				'/thumb_w/500/',
				'/thumb_w/400/',
				'/thumb_w/300/',
				'/thumb_w/260/',
				'/thumb_w/230/',
				'/thumb_w/200/',
			),
			'/zoom/600_315/', $url);
		$url = str_replace('https://cdn1.tuoitre.vn/20', 'https://cdn1.tuoitre.vn/zoom/600_315/20', $url);
		$url = str_replace('https://tapchigiaothong.qltns.mediacdn.vn/tapchigiaothong', 'https://tapchigiaothong.qltns.mediacdn.vn/thumb_w/' . trim($width) . '/tapchigiaothong', $url);
		// VC CORP
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://icdn.dantri.com.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://afamilycdn.com', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://cafefcdn.com', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://kenh14cdn.com', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://sohanews.sohacdn.com', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://cafebiz.cafebizcdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://cdn.tuoitre.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://images2.thanhnien.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://cafebiz.cafebizcdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://danviet.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://vtv1.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://autopro8.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://thethaovanhoa.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://phunuvietnam.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://nld.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://nld2.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://nld2.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://nld3.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://nld4.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://nldm.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://genk.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://genk2.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://genk3.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://genk4.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://genknews.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://gamek.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://ictworld.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://kinhteht.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://xtyle2.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://suckhoedoisong1.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://sohanews.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://sohanews2.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://sohagame.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://soha1.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://soha2.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://soha3.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://soha4.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://cafef.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://cafef2.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://cafef3.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://cafef4.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://giadinh.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://afamily1.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://maskonline.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://dantri.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://dantri21.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://dantri2.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://dantri3.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://dantri4.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://autopro.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://autopro1.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://autopro2.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://autopro3.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://autopro4.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://autopro5.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://quizk14.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://skds.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://skds2.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://afamily4.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://cafebiz.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://dddn.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://dddn1.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://dddn2.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://vneconomy.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://vneconomy2.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://tgda.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://ttvnol.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://giadinh.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://giadinh1.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://giadinh2.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://k14.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://kenh14.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://kenh142.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://f319.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://plxh1.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://baogiaothong.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://suckhoedoisong.qltns.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://congdankhuyenhoc.qltns.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://tapchigiaothong.qltns.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://truyenhinhvov.qltns.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://phapluatbandoc.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://bcp.cdnchinhphu.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://tl.cdnchinhphu.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://tphcm.cdnchinhphu.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://xdcs.cdnchinhphu.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://tc.cdnchinhphu.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://dntt.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://sport5.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://phunuso.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://toquoc.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://tq1.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://tq2.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://tq3.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://tq4.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://tq5.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://tq6.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://tq7.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://tq8.mediacdn.vn', $url, $width);
		$url = self::optimizeOneDomainCdnVCCorpCMSOptimize('https://tq9.mediacdn.vn', $url, $width);

		return trim($url);
	}

	protected static function optimizeOneDomainExternalCdnEXCDNOptimize($domain, $url = '', $width = 345, $height = 200)
	{
		$domain = trim($domain);
		$url = str_replace(trim($domain) . '/resize/1200x627/files', trim($domain) . 'resize/' . trim($width) . 'x' . trim($height) . '/files', $url);
		$url = str_replace(trim($domain) . '/resize/1200x630/files', trim($domain) . 'resize/' . trim($width) . 'x' . trim($height) . '/files', $url);
		$url = str_replace(trim($domain) . '/resize/700x400/files', trim($domain) . 'resize/' . trim($width) . 'x' . trim($height) . '/files', $url);
		$url = str_replace(trim($domain) . '/resize/600x312/files', trim($domain) . 'resize/' . trim($width) . 'x' . trim($height) . '/files', $url);
		$url = str_replace(trim($domain) . '/resize/534x280/files', trim($domain) . 'resize/' . trim($width) . 'x' . trim($height) . '/files', $url);
		$url = str_replace(trim($domain) . '/files', trim($domain) . 'resize/' . trim($width) . 'x' . trim($height) . '/files', $url);
		return trim($url);
	}

	public static function externalCdnEXCDNOptimize($url = '', $width = 345, $height = 200)
	{
		$url = trim($url);
		if (empty($url)) {
			return $url;
		}
		$url = self::optimizeOneDomainExternalCdnEXCDNOptimize('https://imgamp.phunutoday.vn', $url, $height, $width);
		$url = self::optimizeOneDomainExternalCdnEXCDNOptimize('https://thumb.phunutoday.vn', $url, $height, $width);
		$url = self::optimizeOneDomainExternalCdnEXCDNOptimize('https://congluan-cdn.congluan.vn', $url, $height, $width);
		$url = self::optimizeOneDomainExternalCdnEXCDNOptimize('https://media.tiepthigiadinh.vn', $url, $height, $width);
		$url = self::optimizeOneDomainExternalCdnEXCDNOptimize('https://media.phapluatplus.vn', $url, $height, $width);
		$url = self::optimizeOneDomainExternalCdnEXCDNOptimize('https://media.sohuutritue.net.vn', $url, $height, $width);
		$url = self::optimizeOneDomainExternalCdnEXCDNOptimize('https://media.bongda.com.vn', $url, $height, $width);
		$url = self::optimizeOneDomainExternalCdnEXCDNOptimize('https://media.phunumoi.net.vn', $url, $height, $width);
		$url = self::optimizeOneDomainExternalCdnEXCDNOptimize('https://media.songdep.com.vn', $url, $height, $width);
		$url = self::optimizeOneDomainExternalCdnEXCDNOptimize('https://t.ex-cdn.com/vovgiaothong.vn', $url, $height, $width);
		$url = self::optimizeOneDomainExternalCdnEXCDNOptimize('https://t.ex-cdn.com/thoidaiplus.suckhoedoisong.vn', $url, $height, $width);
		$url = self::optimizeOneDomainExternalCdnEXCDNOptimize('https://t.ex-cdn.com/suckhoecongdongonline.vn', $url, $height, $width);
		$url = self::optimizeOneDomainExternalCdnEXCDNOptimize('https://t.ex-cdn.com/nhadautu.vn', $url, $height, $width);
		$url = self::optimizeOneDomainExternalCdnEXCDNOptimize('https://t.ex-cdn.com/giadinhmoi.vn', $url, $height, $width);
		$url = self::optimizeOneDomainExternalCdnEXCDNOptimize('https://t.ex-cdn.com/giadinhonline.vn', $url, $height, $width);
		$url = self::optimizeOneDomainExternalCdnEXCDNOptimize('https://t.ex-cdn.com/nongnghiep.vn', $url, $height, $width);
		$url = self::optimizeOneDomainExternalCdnEXCDNOptimize('https://t.ex-cdn.com/vietpress.vn', $url, $height, $width);
		$url = self::optimizeOneDomainExternalCdnEXCDNOptimize('https://t.ex-cdn.com/60giay.com', $url, $height, $width);
		$url = self::optimizeOneDomainExternalCdnEXCDNOptimize('https://t2.ex-cdn.com/cpcs.vn', $url, $height, $width);
		return trim($url);
	}

	public static function externalCdnYeahOneGroupCDNOptimize($url = '', $width = 345, $height = 200)
	{
		$url = trim($url);
		if (empty($url)) {
			return $url;
		}
		// Yeah1 Group
		$url = str_replace('https://media.yeah1.com/resize/1200x630/files/', 'https://media.yeah1.com/resize/' . trim($width) . 'x' . trim($height) . '/files/', $url);
		$url = str_replace('https://media.yeah1.com/resize/680x415/files/', 'https://media.yeah1.com/resize/' . trim($width) . 'x' . trim($height) . '/files/', $url);
		$url = str_replace('https://media.yeah1.com/resize/600x315/files/', 'https://media.yeah1.com/resize/' . trim($width) . 'x' . trim($height) . '/files/', $url);
		$url = str_replace('https://media.yeah1.com/resize/files/', 'https://media.yeah1.com/resize/' . trim($width) . 'x' . trim($height) . '/files/', $url);
		$url = str_replace('https://media.yeah1.com/files/', 'https://media.yeah1.com/resize/' . trim($width) . 'x' . trim($height) . '/files/', $url);
		$url = str_replace('https://cdnmedia.tinmoi.vn/resize_1200x630/upload/', 'https://cdnmedia.tinmoi.vn/resize_' . trim($width) . 'x' . trim($height) . '/upload/', $url);
		$url = str_replace('https://cdnmedia.tinmoi.vn/resize_680x415/upload/', 'https://cdnmedia.tinmoi.vn/resize_' . trim($width) . 'x' . trim($height) . '/upload/', $url);
		$url = str_replace('https://cdnmedia.tinmoi.vn/resize_600x315/upload/', 'https://cdnmedia.tinmoi.vn/resize_' . trim($width) . 'x' . trim($height) . '/upload/', $url);
		$url = str_replace('https://cdnmedia.tinmoi.vn/resize_upload/', 'https://cdnmedia.tinmoi.vn/resize_' . trim($width) . 'x' . trim($height) . '/upload/', $url);
		$url = str_replace('https://cdnmedia.tinmoi.vn/upload/', 'https://cdnmedia.tinmoi.vn/resize_' . trim($width) . 'x' . trim($height) . '/upload/', $url);
		$url = str_replace('https://media.2dep.vn/resize_1200x630/upload/', 'https://media.2dep.vn/resize_' . trim($width) . 'x' . trim($height) . '/upload/', $url);
		$url = str_replace('https://media.2dep.vn/resize_680x415/upload/', 'https://media.2dep.vn/resize_' . trim($width) . 'x' . trim($height) . '/upload/', $url);
		$url = str_replace('https://media.2dep.vn/resize_600x315/upload/', 'https://media.2dep.vn/resize_' . trim($width) . 'x' . trim($height) . '/upload/', $url);
		$url = str_replace('https://media.2dep.vn/resize_upload/', 'https://media.2dep.vn/resize_' . trim($width) . 'x' . trim($height) . '/upload/', $url);
		$url = str_replace('https://media.2dep.vn/upload/', 'https://media.2dep.vn/resize_' . trim($width) . 'x' . trim($height) . '/upload/', $url);

		return trim($url);
	}

	protected static function optimizeOneDomainCdnOneCMSOptimize($domain, $url = '', $width = 345, $height = 200)
	{
		$domain = trim($domain);
		$url = str_replace(trim($domain) . '/thumbs/680x425/', trim($domain) . '/thumbs/' . trim($width) . 'x' . trim($height) . '/', $url);
		$url = str_replace(trim($domain) . '/thumbs/600x315/', trim($domain) . '/thumbs/' . trim($width) . 'x' . trim($height) . '/', $url);
		$url = str_replace(trim($domain) . '/uploads', trim($domain) . '/thumbs/' . trim($width) . 'x' . trim($height) . '/uploads', $url);
		$url = str_replace(trim($domain) . '/upload', trim($domain) . '/thumbs/' . trim($width) . 'x' . trim($height) . '/upload', $url);
		$url = str_replace(trim($domain) . '/1', trim($domain) . '/thumbs/' . trim($width) . 'x' . trim($height) . '/1', $url);
		$url = str_replace(trim($domain) . '/2', trim($domain) . '/thumbs/' . trim($width) . 'x' . trim($height) . '/2', $url);
		$url = str_replace(trim($domain) . '/3', trim($domain) . '/thumbs/' . trim($width) . 'x' . trim($height) . '/3', $url);
		$url = str_replace(trim($domain) . '/4', trim($domain) . '/thumbs/' . trim($width) . 'x' . trim($height) . '/4', $url);
		$url = str_replace(trim($domain) . '/5', trim($domain) . '/thumbs/' . trim($width) . 'x' . trim($height) . '/5', $url);
		$url = str_replace(trim($domain) . '/6', trim($domain) . '/thumbs/' . trim($width) . 'x' . trim($height) . '/6', $url);
		$url = str_replace(trim($domain) . '/7', trim($domain) . '/thumbs/' . trim($width) . 'x' . trim($height) . '/7', $url);
		$url = str_replace(trim($domain) . '/8', trim($domain) . '/thumbs/' . trim($width) . 'x' . trim($height) . '/8', $url);
		$url = str_replace(trim($domain) . '/9', trim($domain) . '/thumbs/' . trim($width) . 'x' . trim($height) . '/9', $url);
		return trim($url);
	}

	public static function externalCdnHostnameIsOfOneCMS($hostname = '')
	{
		$hostname = trim($hostname);
		if (empty($hostname)) {
			return false;
		}
		$hostLength = strlen($hostname);
		$oneCmsCdn = '1cdn.vn';
		$oneCmsCdnVovLive = 'cdn.vovlive.vn';
		if ($hostname === $oneCmsCdnVovLive) {
			return true;
		}
		$oneCmsCdnLength = strlen($oneCmsCdn);
		$startCheck = $hostLength - $oneCmsCdnLength;
		$domain = substr($hostname, $startCheck, $hostLength);
		$endDomain = trim($domain);
		return $endDomain === $oneCmsCdn;
	}

	public static function externalCdnIsOfOneCMS($url = '')
	{
		$url = trim($url);
		if (empty($url)) {
			return false;
		}
		$parseUrl = parse_url($url);
		if (!isset($parseUrl['host'])) {
			return false;
		}
		return self::externalCdnHostnameIsOfOneCMS($parseUrl['host']);
	}

	public static function externalCdnOneCMSQuickFixedImageSrcThumbnail($url = '')
	{
		$url = trim($url);
		$fact = self::externalCdnIsOfOneCMS($url);
		if ($fact === true) {
			return self::externalCdnOneCMSFixedImageSrcThumbnail($url);
		}
		return $url;
	}

	public static function externalCdnOneCMSFixedImageSrcThumbnail($url = '')
	{
		$url = trim(str_replace('thumbs/600x315/', 'thumbs/650x360/', $url));
		return trim($url);
	}

	public static function externalListCdnOfOneCMS()
	{
		return array(
			'cdn.vovlive.vn',
			'vb.1cdn.vn',
			'ddk.1cdn.vn',
			'vnp.1cdn.vn',
			'vlr.1cdn.vn',
			'hgth.1cdn.vn',
			'hnm.1cdn.vn',
			'cly.1cdn.vn',
			'gdtd.1cdn.vn',
			'btnmt.1cdn.vn',
			'mtg.1cdn.vn',
			'nqs.1cdn.vn',
			'dnsg.1cdn.vn',
			'ictv.1cdn.vn',
			'khpt.1cdn.vn',
			'kiemsat.1cdn.vn',
			'mkt.1cdn.vn',
			'nhn.1cdn.vn',
			'tttctt.1cdn.vn',
			'nads.1cdn.vn',
			'bhd.1cdn.vn',
			'bbt.1cdn.vn',
			'daknong.1cdn.vn'
		);

	}

	public static function externalCdnOneCMSOptimize($url = '', $width = 345, $height = 200)
	{
		$url = trim($url);
		if (empty($url)) {
			return $url;
		}
		// OneCMS CDN
		$url = self::optimizeOneDomainCdnOneCMSOptimize('https://vnp.1cdn.vn', $url, $width, $height);
		$url = self::optimizeOneDomainCdnOneCMSOptimize('https://vb.1cdn.vn', $url, $width, $height);
		$url = self::optimizeOneDomainCdnOneCMSOptimize('https://vlr.1cdn.vn', $url, $width, $height);
		$url = self::optimizeOneDomainCdnOneCMSOptimize('https://hgth.1cdn.vn', $url, $width, $height);
		$url = self::optimizeOneDomainCdnOneCMSOptimize('https://hnm.1cdn.vn', $url, $width, $height);
		$url = self::optimizeOneDomainCdnOneCMSOptimize('https://cly.1cdn.vn', $url, $width, $height);
		$url = self::optimizeOneDomainCdnOneCMSOptimize('https://gdtd.1cdn.vn', $url, $width, $height);
		$url = self::optimizeOneDomainCdnOneCMSOptimize('https://btnmt.1cdn.vn', $url, $width, $height);
		$url = self::optimizeOneDomainCdnOneCMSOptimize('https://mtg.1cdn.vn', $url, $width, $height);
		$url = self::optimizeOneDomainCdnOneCMSOptimize('https://nqs.1cdn.vn', $url, $width, $height);
		$url = self::optimizeOneDomainCdnOneCMSOptimize('https://dnsg.1cdn.vn', $url, $width, $height);
		$url = self::optimizeOneDomainCdnOneCMSOptimize('https://ictv.1cdn.vn', $url, $width, $height);
		$url = self::optimizeOneDomainCdnOneCMSOptimize('https://khpt.1cdn.vn', $url, $width, $height);
		$url = self::optimizeOneDomainCdnOneCMSOptimize('https://kiemsat.1cdn.vn', $url, $width, $height);
		$url = self::optimizeOneDomainCdnOneCMSOptimize('https://mkt.1cdn.vn', $url, $width, $height);
		$url = self::optimizeOneDomainCdnOneCMSOptimize('https://nhn.1cdn.vn', $url, $width, $height);
		$url = self::optimizeOneDomainCdnOneCMSOptimize('https://tttctt.1cdn.vn', $url, $width, $height);
		$url = self::optimizeOneDomainCdnOneCMSOptimize('https://bhd.1cdn.vn', $url, $width, $height);
		$url = self::optimizeOneDomainCdnOneCMSOptimize('https://bbt.1cdn.vn', $url, $width, $height);
		$url = self::optimizeOneDomainCdnOneCMSOptimize('https://daknong.1cdn.vn', $url, $width, $height);
		$url = self::optimizeOneDomainCdnOneCMSOptimize('https://nads.1cdn.vn', $url, $width, $height);
		$url = self::optimizeOneDomainCdnOneCMSOptimize('https://ddk.1cdn.vn', $url, $width, $height);
		$url = self::optimizeOneDomainCdnOneCMSOptimize('https://cdn.vovlive.vn', $url, $width, $height);
		$url = self::optimizeOneDomainCdnOneCMSOptimize('https://images.baodantoc.vn', $url, $width, $height);
		$url = self::optimizeOneDomainCdnOneCMSOptimize('https://image.theleader.vn', $url, $width, $height);
		return trim($url);
	}

	protected static function optimizeOneDomainCdnNetLinkCMSOptimize($domain, $url = '', $width = 345, $height = 200)
	{
		$domain = trim($domain);
		$url = str_replace(trim($domain) . '/thumb_x1200x630/media', trim($domain) . '/thumb_x' . trim($width) . 'x' . trim($height) . '/media', $url);
		$url = str_replace(trim($domain) . '/thumb_x600x315/media', trim($domain) . '/thumb_x' . trim($width) . 'x' . trim($height) . '/media', $url);
		$url = str_replace(trim($domain) . '/thumb_x600x600/media', trim($domain) . '/thumb_x' . trim($width) . 'x' . trim($height) . '/media', $url);
		$url = str_replace(trim($domain) . '/thumb_x470x250/media', trim($domain) . '/thumb_x' . trim($width) . 'x' . trim($height) . '/media', $url);
		$url = str_replace(trim($domain) . '/thumb_x500x263/media', trim($domain) . '/thumb_x' . trim($width) . 'x' . trim($height) . '/media', $url);
		$url = str_replace(trim($domain) . '/thumb_x534x280/media', trim($domain) . '/thumb_x' . trim($width) . 'x' . trim($height) . '/media', $url);
		$url = str_replace(trim($domain) . '/thumb_x400x240/media', trim($domain) . '/thumb_x' . trim($width) . 'x' . trim($height) . '/media', $url);
		$url = str_replace(trim($domain) . '/thumb_x200x125/media', trim($domain) . '/thumb_x' . trim($width) . 'x' . trim($height) . '/media', $url);
		$url = str_replace(trim($domain) . '/media', trim($domain) . '/thumb_x' . trim($width) . 'x' . trim($height) . '/media', $url);
		$url = str_replace(trim($domain) . '/thumb_x1200x630/Images', trim($domain) . '/thumb_x' . trim($width) . 'x' . trim($height) . '/Images', $url);
		$url = str_replace(trim($domain) . '/thumb_x600x315/Images', trim($domain) . '/thumb_x' . trim($width) . 'x' . trim($height) . '/Images', $url);
		$url = str_replace(trim($domain) . '/thumb_x600x600/Images', trim($domain) . '/thumb_x' . trim($width) . 'x' . trim($height) . '/Images', $url);
		$url = str_replace(trim($domain) . '/thumb_x470x250/Images', trim($domain) . '/thumb_x' . trim($width) . 'x' . trim($height) . '/Images', $url);
		$url = str_replace(trim($domain) . '/thumb_x500x263/Images', trim($domain) . '/thumb_x' . trim($width) . 'x' . trim($height) . '/Images', $url);
		$url = str_replace(trim($domain) . '/thumb_x534x280/Images', trim($domain) . '/thumb_x' . trim($width) . 'x' . trim($height) . '/Images', $url);
		$url = str_replace(trim($domain) . '/thumb_x400x240/Images', trim($domain) . '/thumb_x' . trim($width) . 'x' . trim($height) . '/Images', $url);
		$url = str_replace(trim($domain) . '/thumb_x200x125/Images', trim($domain) . '/thumb_x' . trim($width) . 'x' . trim($height) . '/Images', $url);
		$url = str_replace(trim($domain) . '/Images', trim($domain) . '/thumb_x' . trim($width) . 'x' . trim($height) . '/media', $url);
		return trim($url);
	}

	public static function externalCdnNetLinkCMSOptimize($url = '', $width = 345, $height = 200)
	{
		$url = trim($url);
		if (empty($url)) {
			return $url;
		}
		// NetLink CMS
		$url = self::optimizeOneDomainCdnNetLinkCMSOptimize('https://media.nguoiduatin.vn', $url, $width, $height);
		$url = self::optimizeOneDomainCdnNetLinkCMSOptimize('https://media1.nguoiduatin.vn', $url, $width, $height);
		$url = self::optimizeOneDomainCdnNetLinkCMSOptimize('https://media.doisongphapluat.com', $url, $width, $height);
		$url = self::optimizeOneDomainCdnNetLinkCMSOptimize('https://media.techz.vn', $url, $width, $height);
		$url = self::optimizeOneDomainCdnNetLinkCMSOptimize('https://media.baodautu.vn', $url, $width, $height);
		$url = self::optimizeOneDomainCdnNetLinkCMSOptimize('https://media.baodansinh.vn', $url, $width, $height);
		$url = self::optimizeOneDomainCdnNetLinkCMSOptimize('https://media.suckhoecong.vn', $url, $width, $height);
		$url = self::optimizeOneDomainCdnNetLinkCMSOptimize('https://media.thuonghieuvaphapluat.vn', $url, $width, $height);
		return trim($url);
	}

	public static function externalCdnOptimize($url = '', $width = 345, $height = 200)
	{
		$url = trim($url);
		if (empty($url)) {
			return $url;
		}
		// Xử lý cho vietnamnet, 2sao, vietnambiz, tintuconline
		$arrayList = self::externalCdnWorkWithUrlQueryResize();
		$arrayListFullUrl = self::externalCdnWorkWithFullUrlQueryResize();
		$parseUrl = parse_url($url);
		if (isset($parseUrl['host']) && in_array($parseUrl['host'], $arrayList, true)) {
			$url = self::urlQueryRemoved($url);
			$url .= '?width=' . trim($width);
			return trim($url);
		}
		if (isset($parseUrl['host']) && in_array($parseUrl['host'], $arrayListFullUrl, true)) {
			$url = self::urlQueryRemoved($url);
			foreach (self::externalCdnWorkWithFullUrlQueryResizeReplace() as $from => $to) {
				$url = str_replace($parseUrl['host'] . $from, $parseUrl['host'] . $to, $url);
			}
			$url .= '?' . http_build_query(array('width' => $width, 'height' => $height, 'mode' => 'crop'));
			return trim($url);
		}
		$url = self::externalCdnEPICMSOptimize($url, $width, $height);
		$url = self::externalCdnVCCorpCMSOptimize($url, $width, $height);
		$url = self::externalCdnOneCMSOptimize($url, $width, $height);
		$url = self::externalCdnNetLinkCMSOptimize($url, $width, $height);
		$url = self::externalCdnEXCDNOptimize($url, $width, $height);
		$url = self::externalCdnYeahOneGroupCDNOptimize($url, $width, $height);
		$url = self::externalCdnTTXVNCMSOptimize($url, $width, $height);
		$url = self::externalCdnThumbPrefix($url, $width, $height);
		return trim($url);
	}

	public static function externalCdnThumbPrefix($url = '', $width = 345, $height = 200)
	{
		$url = trim($url);
		if (empty($url)) {
			return $url;
		}
		// media.anhp.vn
		$url = str_replace('http://media.anhp.vn:8081/', 'http://media.anhp.vn/', $url);
		$url = str_replace('http://baohaiphong.com.vn/', 'https://baohaiphong.com.vn/', $url);
		$url = str_replace('https://img.cand.com.vn/resize/800x800', 'https://img.cand.com.vn/resize/600x600', $url);
		$url = str_replace('https://static.kinhtedothi.vn/600x315/images', 'https://static.kinhtedothi.vn/640x360/images', $url);
		$url = str_replace('https://static.kinhtedothi.vn/images', 'https://static.kinhtedothi.vn/640x360/images', $url);
		$url = str_replace('https://media.tapchixaydung.vn/resize_x500x/mediav2', 'https://media.tapchixaydung.vn/resize_x' . trim($width) . 'x/mediav2', $url);
		$url = str_replace('https://media.tapchinongthonmoi.vn/resize_x500x/mediav2', 'https://media.tapchinongthonmoi.vn/resize_x' . trim($width) . 'x/mediav2', $url);
		$url = str_replace('https://media.tapchixaydung.vn/mediav2', 'https://media.tapchixaydung.vn/resize_x' . trim($width) . 'x/mediav2', $url);
		$url = str_replace('https://cdnmedia.webthethao.vn/thumb/600-315/uploads', 'https://cdnmedia.webthethao.vn/thumb/' . trim($width) . 'x' . trim($height) . '/uploads', $url);
		$url = str_replace('https://cdnmedia.webthethao.vn/uploads', 'https://cdnmedia.webthethao.vn/thumb/' . trim($width) . 'x' . trim($height) . '/uploads', $url);
		$url = str_replace('https://media.truyenhinhdulich.vn/thumb/600-315/upload', 'https://media.truyenhinhdulich.vn/thumb/' . trim($width) . 'x' . trim($height) . '/upload', $url);
		$url = str_replace('https://media.truyenhinhdulich.vn/upload', 'https://media.truyenhinhdulich.vn/thumb/' . trim($width) . 'x' . trim($height) . '/upload', $url);
		// Other
		$url = str_replace('https://news-thumb2.ymgstatic.com/YanThumbNews/', 'https://static2.yan.vn/' . trim($width) . 'x' . trim($height) . '/YanThumbNews/', $url);
		return trim($url);
	}
}
