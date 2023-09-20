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
    const VERSION = '1.0.0';

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
                '//vov-media.emitech.vn/'
            ),
            array(
                '//cdn.eva.vn/', '//media.vov.vn/'
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

        $url = str_replace('https://image.tienphong.vn/1200x630/Uploaded', 'https://image.tienphong.vn/600x315/Uploaded', $url);
        $url = str_replace('https://image.tienphong.vn/Uploaded', 'https://image.tienphong.vn/600x315/Uploaded', $url);
        $url = str_replace('https://image.ngaynay.vn/1200x630/Uploaded', 'https://image.ngaynay.vn/600x315/Uploaded', $url);
        $url = str_replace('https://image.ngaynay.vn/Uploaded', 'https://image.ngaynay.vn/600x315/Uploaded', $url);
        $url = str_replace('https://image.nhandan.vn/1200x630/Uploaded', 'https://image.nhandan.vn/600x315/Uploaded', $url);
        $url = str_replace('https://image.nhandan.vn/Uploaded', 'https://image.nhandan.vn/600x315/Uploaded', $url);
        return trim($url);
    }

    public static function externalCdnVCCorpCMSOptimize($url = '', $width = 345, $height = 200)
    {
        $url = trim($url);
        if (empty($url)) {
            return $url;
        }
        // tuoitre
        $url = str_replace('https://cdn1.tuoitre.vn/20', 'https://cdn1.tuoitre.vn/zoom/600_315/20', $url);
        $url = str_replace('https://cdn.tuoitre.vn/zoom/600_315/', 'https://cdn.tuoitre.vn/thumb_w/' . trim($width) . '/', $url);
        $url = str_replace('https://cdn.tuoitre.vn/47', 'https://cdn.tuoitre.vn/thumb_w/' . trim($width) . '/47', $url);
        $url = str_replace('https://cdn.tuoitre.vn/20', 'https://cdn.tuoitre.vn/thumb_w/' . trim($width) . '/20', $url);
        // VC CORP
        $url = str_replace('https://afamilycdn.com/15', 'https://afamilycdn.com/thumb_w/' . trim($width) . '/15', $url);
        $url = str_replace('https://cafebiz.cafebizcdn.vn/16', 'https://cafebiz.cafebizcdn.vn/thumb_w/' . trim($width) . '/16', $url);
        $url = str_replace('https://cafefcdn.com/2', 'https://cafefcdn.com/thumb_w/' . trim($width) . '/2', $url);
        $url = str_replace('https://danviet.mediacdn.vn/29', 'https://danviet.mediacdn.vn/thumb_w/' . trim($width) . '/29', $url);
        $url = str_replace('https://images2.thanhnien.vn/52', 'https://images2.thanhnien.vn/thumb_w/' . trim($width) . '/52', $url);
        $url = str_replace('https://kenh14cdn.com/20', 'https://kenh14cdn.com/thumb_w/' . trim($width) . '/20', $url);
        $url = str_replace('https://sohanews.sohacdn.com/16', 'https://sohanews.sohacdn.com/thumb_w/' . trim($width) . '/16', $url);
        $url = str_replace('https://vtv1.mediacdn.vn/56', 'https://vtv1.mediacdn.vn/thumb_w/' . trim($width) . '/56', $url);
        $url = str_replace('https://afamilycdn.com/zoom/600_315/', 'https://afamilycdn.com/thumb_w/' . trim($width) . '/', $url);
        $url = str_replace('https://cafebiz.cafebizcdn.vn/zoom/600_315/', 'https://cafebiz.cafebizcdn.vn/thumb_w/' . trim($width) . '/', $url);
        $url = str_replace('https://cafefcdn.com/zoom/600_315/', 'https://cafefcdn.com/thumb_w/' . trim($width) . '/', $url);
        $url = str_replace('https://danviet.mediacdn.vn/zoom/600_315/', 'https://danviet.mediacdn.vn/thumb_w/' . trim($width) . '/', $url);
        $url = str_replace('https://images2.thanhnien.vn/zoom/600_315/', 'https://images2.thanhnien.vn/thumb_w/' . trim($width) . '/', $url);
        $url = str_replace('https://kenh14cdn.com/zoom/600_315/', 'https://kenh14cdn.com/thumb_w/' . trim($width) . '/', $url);
        $url = str_replace('https://sohanews.sohacdn.com/zoom/600_315/', 'https://sohanews.sohacdn.com/thumb_w/' . trim($width) . '/', $url);
        $url = str_replace('https://autopro8.mediacdn.vn/zoom/600_315/', 'https://autopro8.mediacdn.vn/thumb_w/' . trim($width) . '/', $url);
        $url = str_replace('https://vtv1.mediacdn.vn/zoom/600_315/', 'https://vtv1.mediacdn.vn/thumb_w/' . trim($width) . '/', $url);
        $url = str_replace('https://vtv1.mediacdn.vn/fb_thumb_bn/', 'https://vtv1.mediacdn.vn/thumb_w/' . trim($width) . '/', $url);
        $url = str_replace('https://toquoc.mediacdn.vn/thumb_w/600/', 'https://toquoc.mediacdn.vn/thumb_w/' . trim($width) . '/', $url);
        $url = str_replace('https://toquoc.mediacdn.vn/zoom/600_315/', 'https://toquoc.mediacdn.vn/thumb_w/' . trim($width) . '/', $url);
        $url = str_replace('https://toquoc.mediacdn.vn/fb_thumb_bn/', 'https://toquoc.mediacdn.vn/thumb_w/' . trim($width) . '/', $url);
        $url = str_replace('https://toquoc.mediacdn.vn/2', 'https://toquoc.mediacdn.vn/thumb_w/' . trim($width) . '/2', $url);
        return trim($url);
    }

    public static function externalCdnOneCMSOptimize($url = '', $width = 345, $height = 200)
    {
        $url = trim($url);
        if (empty($url)) {
            return $url;
        }
        // OneCMS CDN
        $url = str_replace('https://vb.1cdn.vn/thumbs/680x425/', 'https://vb.1cdn.vn/thumbs/' . trim($width) . 'x' . trim($height) . '/', $url);
        $url = str_replace('https://vb.1cdn.vn/thumbs/600x315/', 'https://vb.1cdn.vn/thumbs/' . trim($width) . 'x' . trim($height) . '/', $url);
        $url = str_replace('https://vb.1cdn.vn/thumbs/680x425/', 'https://vb.1cdn.vn/thumbs/' . trim($width) . 'x' . trim($height) . '/', $url);
        $url = str_replace('https://vb.1cdn.vn/thumbs/600x315/', 'https://vb.1cdn.vn/thumbs/' . trim($width) . 'x' . trim($height) . '/', $url);
        $url = str_replace('https://vb.1cdn.vn/20', 'https://vb.1cdn.vn/thumbs/' . trim($width) . 'x' . trim($height) . '/20', $url);
        $url = str_replace('https://hgth.1cdn.vn/thumbs/680x425/', 'https://hgth.1cdn.vn/thumbs/' . trim($width) . 'x' . trim($height) . '/', $url);
        $url = str_replace('https://hgth.1cdn.vn/thumbs/600x315/', 'https://hgth.1cdn.vn/thumbs/' . trim($width) . 'x' . trim($height) . '/', $url);
        $url = str_replace('https://hgth.1cdn.vn/20', 'https://hgth.1cdn.vn/thumbs/' . trim($width) . 'x' . trim($height) . '/20', $url);
        $url = str_replace('https://hnm.1cdn.vn/thumbs/680x425/', 'https://hnm.1cdn.vn/thumbs/' . trim($width) . 'x' . trim($height) . '/', $url);
        $url = str_replace('https://hnm.1cdn.vn/thumbs/600x315/', 'https://hnm.1cdn.vn/thumbs/' . trim($width) . 'x' . trim($height) . '/', $url);
        $url = str_replace('https://hnm.1cdn.vn/20', 'https://hnm.1cdn.vn/thumbs/' . trim($width) . 'x' . trim($height) . '/20', $url);
        $url = str_replace('https://cly.1cdn.vn/thumbs/680x425/', 'https://cly.1cdn.vn/thumbs/' . trim($width) . 'x' . trim($height) . '/', $url);
        $url = str_replace('https://cly.1cdn.vn/thumbs/600x315/', 'https://cly.1cdn.vn/thumbs/' . trim($width) . 'x' . trim($height) . '/', $url);
        $url = str_replace('https://cly.1cdn.vn/20', 'https://cly.1cdn.vn/thumbs/' . trim($width) . 'x' . trim($height) . '/20', $url);
        $url = str_replace('https://gdtd.1cdn.vn/thumbs/680x425/', 'https://gdtd.1cdn.vn/thumbs/' . trim($width) . 'x' . trim($height) . '/', $url);
        $url = str_replace('https://gdtd.1cdn.vn/thumbs/600x315/', 'https://gdtd.1cdn.vn/thumbs/' . trim($width) . 'x' . trim($height) . '/', $url);
        $url = str_replace('https://gdtd.1cdn.vn/20', 'https://gdtd.1cdn.vn/thumbs/' . trim($width) . 'x' . trim($height) . '/20', $url);
        $url = str_replace('https://btnmt.1cdn.vn/thumbs/680x425/', 'https://btnmt.1cdn.vn/thumbs/' . trim($width) . 'x' . trim($height) . '/', $url);
        $url = str_replace('https://btnmt.1cdn.vn/thumbs/600x315/', 'https://btnmt.1cdn.vn/thumbs/' . trim($width) . 'x' . trim($height) . '/', $url);
        $url = str_replace('https://btnmt.1cdn.vn/20', 'https://btnmt.1cdn.vn/thumbs/' . trim($width) . 'x' . trim($height) . '/20', $url);
        $url = str_replace('https://mtg.1cdn.vn/thumbs/680x425/', 'https://mtg.1cdn.vn/thumbs/' . trim($width) . 'x' . trim($height) . '/', $url);
        $url = str_replace('https://mtg.1cdn.vn/thumbs/600x315/', 'https://mtg.1cdn.vn/thumbs/' . trim($width) . 'x' . trim($height) . '/', $url);
        $url = str_replace('https://mtg.1cdn.vn/20', 'https://mtg.1cdn.vn/thumbs/' . trim($width) . 'x' . trim($height) . '/20', $url);
        $url = str_replace('https://nqs.1cdn.vn/thumbs/680x425/', 'https://nqs.1cdn.vn/thumbs/' . trim($width) . 'x' . trim($height) . '/', $url);
        $url = str_replace('https://nqs.1cdn.vn/thumbs/600x315/', 'https://nqs.1cdn.vn/thumbs/' . trim($width) . 'x' . trim($height) . '/', $url);
        $url = str_replace('https://nqs.1cdn.vn/20', 'https://nqs.1cdn.vn/thumbs/' . trim($width) . 'x' . trim($height) . '/20', $url);
        $url = str_replace('https://dnsg.1cdn.vn/thumbs/680x425/', 'https://dnsg.1cdn.vn/thumbs/' . trim($width) . 'x' . trim($height) . '/', $url);
        $url = str_replace('https://dnsg.1cdn.vn/thumbs/600x315/', 'https://dnsg.1cdn.vn/thumbs/' . trim($width) . 'x' . trim($height) . '/', $url);
        $url = str_replace('https://dnsg.1cdn.vn/20', 'https://dnsg.1cdn.vn/thumbs/' . trim($width) . 'x' . trim($height) . '/20', $url);
        $url = str_replace('https://ictv.1cdn.vn/thumbs/680x425/', 'https://ictv.1cdn.vn/thumbs/' . trim($width) . 'x' . trim($height) . '/', $url);
        $url = str_replace('https://ictv.1cdn.vn/thumbs/600x315/', 'https://ictv.1cdn.vn/thumbs/' . trim($width) . 'x' . trim($height) . '/', $url);
        $url = str_replace('https://ictv.1cdn.vn/20', 'https://ictv.1cdn.vn/thumbs/' . trim($width) . 'x' . trim($height) . '/20', $url);
        $url = str_replace('https://khpt.1cdn.vn/thumbs/680x425/', 'https://khpt.1cdn.vn/thumbs/' . trim($width) . 'x' . trim($height) . '/', $url);
        $url = str_replace('https://khpt.1cdn.vn/thumbs/600x315/', 'https://khpt.1cdn.vn/thumbs/' . trim($width) . 'x' . trim($height) . '/', $url);
        $url = str_replace('https://khpt.1cdn.vn/20', 'https://khpt.1cdn.vn/thumbs/' . trim($width) . 'x' . trim($height) . '/20', $url);
        $url = str_replace('https://kiemsat.1cdn.vn/thumbs/680x425/', 'https://kiemsat.1cdn.vn/thumbs/' . trim($width) . 'x' . trim($height) . '/', $url);
        $url = str_replace('https://kiemsat.1cdn.vn/thumbs/600x315/', 'https://kiemsat.1cdn.vn/thumbs/' . trim($width) . 'x' . trim($height) . '/', $url);
        $url = str_replace('https://kiemsat.1cdn.vn/20', 'https://kiemsat.1cdn.vn/thumbs/' . trim($width) . 'x' . trim($height) . '/20', $url);
        $url = str_replace('https://mkt.1cdn.vn/thumbs/680x425/', 'https://mkt.1cdn.vn/thumbs/' . trim($width) . 'x' . trim($height) . '/', $url);
        $url = str_replace('https://mkt.1cdn.vn/thumbs/600x315/', 'https://mkt.1cdn.vn/thumbs/' . trim($width) . 'x' . trim($height) . '/', $url);
        $url = str_replace('https://mkt.1cdn.vn/20', 'https://mkt.1cdn.vn/thumbs/' . trim($width) . 'x' . trim($height) . '/20', $url);
        $url = str_replace('https://nhn.1cdn.vn/thumbs/680x425/', 'https://nhn.1cdn.vn/thumbs/' . trim($width) . 'x' . trim($height) . '/', $url);
        $url = str_replace('https://nhn.1cdn.vn/thumbs/600x315/', 'https://nhn.1cdn.vn/thumbs/' . trim($width) . 'x' . trim($height) . '/', $url);
        $url = str_replace('https://nhn.1cdn.vn/20', 'https://nhn.1cdn.vn/thumbs/' . trim($width) . 'x' . trim($height) . '/20', $url);
        $url = str_replace('https://tttctt.1cdn.vn/thumbs/680x425/', 'https://tttctt.1cdn.vn/thumbs/' . trim($width) . 'x' . trim($height) . '/', $url);
        $url = str_replace('https://tttctt.1cdn.vn/thumbs/600x315/', 'https://tttctt.1cdn.vn/thumbs/' . trim($width) . 'x' . trim($height) . '/', $url);
        $url = str_replace('https://tttctt.1cdn.vn/20', 'https://tttctt.1cdn.vn/thumbs/' . trim($width) . 'x' . trim($height) . '/20', $url);
        $url = str_replace('https://bhd.1cdn.vn/thumbs/680x425/', 'https://bhd.1cdn.vn/thumbs/' . trim($width) . 'x' . trim($height) . '/', $url);
        $url = str_replace('https://bhd.1cdn.vn/thumbs/600x315/', 'https://bhd.1cdn.vn/thumbs/' . trim($width) . 'x' . trim($height) . '/', $url);
        $url = str_replace('https://bhd.1cdn.vn/20', 'https://bhd.1cdn.vn/thumbs/' . trim($width) . 'x' . trim($height) . '/20', $url);
        $url = str_replace('https://bbt.1cdn.vn/thumbs/680x425/', 'https://bbt.1cdn.vn/thumbs/' . trim($width) . 'x' . trim($height) . '/', $url);
        $url = str_replace('https://bbt.1cdn.vn/thumbs/600x315/', 'https://bbt.1cdn.vn/thumbs/' . trim($width) . 'x' . trim($height) . '/', $url);
        $url = str_replace('https://bbt.1cdn.vn/20', 'https://bbt.1cdn.vn/thumbs/' . trim($width) . 'x' . trim($height) . '/20', $url);
        $url = str_replace('https://daknong.1cdn.vn/thumbs/680x425/', 'https://daknong.1cdn.vn/thumbs/' . trim($width) . 'x' . trim($height) . '/', $url);
        $url = str_replace('https://daknong.1cdn.vn/thumbs/600x315/', 'https://daknong.1cdn.vn/thumbs/' . trim($width) . 'x' . trim($height) . '/', $url);
        $url = str_replace('https://daknong.1cdn.vn/20', 'https://daknong.1cdn.vn/thumbs/' . trim($width) . 'x' . trim($height) . '/20', $url);
        return trim($url);
    }

    public static function externalCdnNetLinkCMSOptimize($url = '', $width = 345, $height = 200)
    {
        $url = trim($url);
        if (empty($url)) {
            return $url;
        }
        // NetLink CMS
        $url = str_replace('https://media.nguoiduatin.vn/thumb_x1200x630/media', 'https://media.nguoiduatin.vn/thumb_x' . trim($width) . 'x' . trim($height) . '/media', $url);
        $url = str_replace('https://media.nguoiduatin.vn/thumb_x600x315/media', 'https://media.nguoiduatin.vn/thumb_x' . trim($width) . 'x' . trim($height) . '/media', $url);
        $url = str_replace('https://media.nguoiduatin.vn/thumb_x600x600/media', 'https://media.nguoiduatin.vn/thumb_x' . trim($width) . 'x' . trim($height) . '/media', $url);
        $url = str_replace('https://media.nguoiduatin.vn/thumb_x470x250/media', 'https://media.nguoiduatin.vn/thumb_x' . trim($width) . 'x' . trim($height) . '/media', $url);
        $url = str_replace('https://media.nguoiduatin.vn/thumb_x500x263/media', 'https://media.nguoiduatin.vn/thumb_x' . trim($width) . 'x' . trim($height) . '/media', $url);
        $url = str_replace('https://media.nguoiduatin.vn/thumb_x534x280/media', 'https://media.nguoiduatin.vn/thumb_x' . trim($width) . 'x' . trim($height) . '/media', $url);
        $url = str_replace('https://media.nguoiduatin.vn/thumb_x400x240/media', 'https://media.nguoiduatin.vn/thumb_x' . trim($width) . 'x' . trim($height) . '/media', $url);
        $url = str_replace('https://media.nguoiduatin.vn/thumb_x200x125/media', 'https://media.nguoiduatin.vn/thumb_x' . trim($width) . 'x' . trim($height) . '/media', $url);
        $url = str_replace('https://media.nguoiduatin.vn/media', 'https://media.nguoiduatin.vn/thumb_x' . trim($width) . 'x' . trim($height) . '/media', $url);
        $url = str_replace('https://media1.nguoiduatin.vn/thumb_x1200x630/media', 'https://media1.nguoiduatin.vn/thumb_x' . trim($width) . 'x' . trim($height) . '/media', $url);
        $url = str_replace('https://media1.nguoiduatin.vn/thumb_x600x315/media', 'https://media1.nguoiduatin.vn/thumb_x' . trim($width) . 'x' . trim($height) . '/media', $url);
        $url = str_replace('https://media1.nguoiduatin.vn/thumb_x600x600/media', 'https://media1.nguoiduatin.vn/thumb_x' . trim($width) . 'x' . trim($height) . '/media', $url);
        $url = str_replace('https://media1.nguoiduatin.vn/thumb_x470x250/media', 'https://media1.nguoiduatin.vn/thumb_x' . trim($width) . 'x' . trim($height) . '/media', $url);
        $url = str_replace('https://media1.nguoiduatin.vn/thumb_x500x263/media', 'https://media1.nguoiduatin.vn/thumb_x' . trim($width) . 'x' . trim($height) . '/media', $url);
        $url = str_replace('https://media1.nguoiduatin.vn/thumb_x534x280/media', 'https://media1.nguoiduatin.vn/thumb_x' . trim($width) . 'x' . trim($height) . '/media', $url);
        $url = str_replace('https://media1.nguoiduatin.vn/thumb_x400x240/media', 'https://media1.nguoiduatin.vn/thumb_x' . trim($width) . 'x' . trim($height) . '/media', $url);
        $url = str_replace('https://media1.nguoiduatin.vn/thumb_x200x125/media', 'https://media1.nguoiduatin.vn/thumb_x' . trim($width) . 'x' . trim($height) . '/media', $url);
        $url = str_replace('https://media1.nguoiduatin.vn/media', 'https://media1.nguoiduatin.vn/thumb_x' . trim($width) . 'x' . trim($height) . '/media', $url);
        $url = str_replace('https://media.doisongphapluat.com/thumb_x1200x630/media', 'https://media.doisongphapluat.com/thumb_x' . trim($width) . 'x' . trim($height) . '/media', $url);
        $url = str_replace('https://media.doisongphapluat.com/thumb_x600x315/media', 'https://media.doisongphapluat.com/thumb_x' . trim($width) . 'x' . trim($height) . '/media', $url);
        $url = str_replace('https://media.doisongphapluat.com/thumb_x600x600/media', 'https://media.doisongphapluat.com/thumb_x' . trim($width) . 'x' . trim($height) . '/media', $url);
        $url = str_replace('https://media.doisongphapluat.com/thumb_x470x250/media', 'https://media.doisongphapluat.com/thumb_x' . trim($width) . 'x' . trim($height) . '/media', $url);
        $url = str_replace('https://media.doisongphapluat.com/thumb_x500x263/media', 'https://media.doisongphapluat.com/thumb_x' . trim($width) . 'x' . trim($height) . '/media', $url);
        $url = str_replace('https://media.doisongphapluat.com/thumb_x534x280/media', 'https://media.doisongphapluat.com/thumb_x' . trim($width) . 'x' . trim($height) . '/media', $url);
        $url = str_replace('https://media.doisongphapluat.com/thumb_x400x240/media', 'https://media.doisongphapluat.com/thumb_x' . trim($width) . 'x' . trim($height) . '/media', $url);
        $url = str_replace('https://media.doisongphapluat.com/thumb_x200x125/media', 'https://media.doisongphapluat.com/thumb_x' . trim($width) . 'x' . trim($height) . '/media', $url);
        $url = str_replace('https://media.doisongphapluat.com/media', 'https://media.doisongphapluat.com/thumb_x' . trim($width) . 'x' . trim($height) . '/media', $url);
        $url = str_replace('https://media.techz.vn/thumb_x1200x630/media', 'https://media.techz.vn/thumb_x' . trim($width) . 'x' . trim($height) . '/media', $url);
        $url = str_replace('https://media.techz.vn/thumb_x600x315/media', 'https://media.techz.vn/thumb_x' . trim($width) . 'x' . trim($height) . '/media', $url);
        $url = str_replace('https://media.techz.vn/thumb_x600x600/media', 'https://media.techz.vn/thumb_x' . trim($width) . 'x' . trim($height) . '/media', $url);
        $url = str_replace('https://media.techz.vn/thumb_x470x250/media', 'https://media.techz.vn/thumb_x' . trim($width) . 'x' . trim($height) . '/media', $url);
        $url = str_replace('https://media.techz.vn/thumb_x500x263/media', 'https://media.techz.vn/thumb_x' . trim($width) . 'x' . trim($height) . '/media', $url);
        $url = str_replace('https://media.techz.vn/thumb_x534x280/media', 'https://media.techz.vn/thumb_x' . trim($width) . 'x' . trim($height) . '/media', $url);
        $url = str_replace('https://media.techz.vn/thumb_x400x240/media', 'https://media.techz.vn/thumb_x' . trim($width) . 'x' . trim($height) . '/media', $url);
        $url = str_replace('https://media.techz.vn/thumb_x200x125/media', 'https://media.techz.vn/thumb_x' . trim($width) . 'x' . trim($height) . '/media', $url);
        $url = str_replace('https://media.techz.vn/media', 'https://media.techz.vn/thumb_x' . trim($width) . 'x' . trim($height) . '/media', $url);
        $url = str_replace('https://media.baodautu.vn/thumb_x1200x630/media', 'https://media.baodautu.vn/thumb_x' . trim($width) . 'x' . trim($height) . '/media', $url);
        $url = str_replace('https://media.baodautu.vn/thumb_x600x315/media', 'https://media.baodautu.vn/thumb_x' . trim($width) . 'x' . trim($height) . '/media', $url);
        $url = str_replace('https://media.baodautu.vn/thumb_x600x600/media', 'https://media.baodautu.vn/thumb_x' . trim($width) . 'x' . trim($height) . '/media', $url);
        $url = str_replace('https://media.baodautu.vn/thumb_x470x250/media', 'https://media.baodautu.vn/thumb_x' . trim($width) . 'x' . trim($height) . '/media', $url);
        $url = str_replace('https://media.baodautu.vn/thumb_x500x263/media', 'https://media.baodautu.vn/thumb_x' . trim($width) . 'x' . trim($height) . '/media', $url);
        $url = str_replace('https://media.baodautu.vn/thumb_x534x280/media', 'https://media.baodautu.vn/thumb_x' . trim($width) . 'x' . trim($height) . '/media', $url);
        $url = str_replace('https://media.baodautu.vn/thumb_x400x240/media', 'https://media.baodautu.vn/thumb_x' . trim($width) . 'x' . trim($height) . '/media', $url);
        $url = str_replace('https://media.baodautu.vn/thumb_x200x125/media', 'https://media.baodautu.vn/thumb_x' . trim($width) . 'x' . trim($height) . '/media', $url);
        $url = str_replace('https://media.baodautu.vn/media', 'https://media.baodautu.vn/thumb_x' . trim($width) . 'x' . trim($height) . '/media', $url);
        $url = str_replace('https://media.baodautu.vn/thumb_x1200x630/Images', 'https://media.baodautu.vn/thumb_x' . trim($width) . 'x' . trim($height) . '/Images', $url);
        $url = str_replace('https://media.baodautu.vn/thumb_x600x315/Images', 'https://media.baodautu.vn/thumb_x' . trim($width) . 'x' . trim($height) . '/Images', $url);
        $url = str_replace('https://media.baodautu.vn/thumb_x600x600/Images', 'https://media.baodautu.vn/thumb_x' . trim($width) . 'x' . trim($height) . '/Images', $url);
        $url = str_replace('https://media.baodautu.vn/thumb_x470x250/Images', 'https://media.baodautu.vn/thumb_x' . trim($width) . 'x' . trim($height) . '/Images', $url);
        $url = str_replace('https://media.baodautu.vn/thumb_x500x263/Images', 'https://media.baodautu.vn/thumb_x' . trim($width) . 'x' . trim($height) . '/Images', $url);
        $url = str_replace('https://media.baodautu.vn/thumb_x534x280/Images', 'https://media.baodautu.vn/thumb_x' . trim($width) . 'x' . trim($height) . '/Images', $url);
        $url = str_replace('https://media.baodautu.vn/thumb_x400x240/Images', 'https://media.baodautu.vn/thumb_x' . trim($width) . 'x' . trim($height) . '/Images', $url);
        $url = str_replace('https://media.baodautu.vn/thumb_x200x125/Images', 'https://media.baodautu.vn/thumb_x' . trim($width) . 'x' . trim($height) . '/Images', $url);
        $url = str_replace('https://media.baodautu.vn/Images', 'https://media.baodautu.vn/thumb_x' . trim($width) . 'x' . trim($height) . '/Images', $url);
        $url = str_replace('https://media.baodansinh.vn/thumb_x1200x630/files', 'https://media.baodansinh.vn/thumb_x' . trim($width) . 'x' . trim($height) . '/files', $url);
        $url = str_replace('https://media.baodansinh.vn/thumb_x600x315/files', 'https://media.baodansinh.vn/thumb_x' . trim($width) . 'x' . trim($height) . '/files', $url);
        $url = str_replace('https://media.baodansinh.vn/thumb_x600x600/files', 'https://media.baodansinh.vn/thumb_x' . trim($width) . 'x' . trim($height) . '/files', $url);
        $url = str_replace('https://media.baodansinh.vn/thumb_x470x250/files', 'https://media.baodansinh.vn/thumb_x' . trim($width) . 'x' . trim($height) . '/files', $url);
        $url = str_replace('https://media.baodansinh.vn/thumb_x500x263/files', 'https://media.baodansinh.vn/thumb_x' . trim($width) . 'x' . trim($height) . '/files', $url);
        $url = str_replace('https://media.baodansinh.vn/thumb_x534x280/files', 'https://media.baodansinh.vn/thumb_x' . trim($width) . 'x' . trim($height) . '/files', $url);
        $url = str_replace('https://media.baodansinh.vn/thumb_x400x240/files', 'https://media.baodansinh.vn/thumb_x' . trim($width) . 'x' . trim($height) . '/files', $url);
        $url = str_replace('https://media.baodansinh.vn/thumb_x200x125/files', 'https://media.baodansinh.vn/thumb_x' . trim($width) . 'x' . trim($height) . '/files', $url);
        $url = str_replace('https://media.baodansinh.vn/files', 'https://media.baodansinh.vn/thumb_x' . trim($width) . 'x' . trim($height) . '/files', $url);
        return trim($url);
    }

    public static function externalCdnOptimize($url = '', $width = 345, $height = 200)
    {
        $url = trim($url);
        if (empty($url)) {
            return $url;
        }
        // Xử lý cho vietnamnet, 2sao, vietnambiz, tintuconline
        $arrayList = [
            'cdn.vietnambiz.vn',
            'ttol.vietnamnetjsc.vn',
            'static-images.vnncdn.net',
            'static2-images.vnncdn.net',
        ];
        $parseUrl = parse_url($url);
        if (isset($parseUrl['host']) && in_array($parseUrl['host'], $arrayList, true)) {
            $url = self::urlQueryRemoved($url);
            $url .= '?width=' . trim($width);
            return trim($url);
        }
        $url = self::externalCdnEPICMSOptimize($url, $width, $height);
        $url = self::externalCdnVCCorpCMSOptimize($url, $width, $height);
        $url = self::externalCdnOneCMSOptimize($url, $width, $height);
        $url = self::externalCdnNetLinkCMSOptimize($url, $width, $height);
        $url = str_replace('https://static.kinhtedothi.vn/600x315/images', 'https://static.kinhtedothi.vn/640x360/images', $url);
        $url = str_replace('https://static.kinhtedothi.vn/images', 'https://static.kinhtedothi.vn/640x360/images', $url);
        $url = str_replace('https://cdnmedia.webthethao.vn/thumb/600-315/uploads', 'https://cdnmedia.webthethao.vn/thumb/' . trim($width) . 'x' . trim($height) . '/uploads', $url);
        $url = str_replace('https://cdnmedia.webthethao.vn/uploads', 'https://cdnmedia.webthethao.vn/thumb/' . trim($width) . 'x' . trim($height) . '/uploads', $url);
        $url = str_replace('https://media.bongda.com.vn/resize/1200x627/files', 'https://media.bongda.com.vn/resize/' . trim($width) . 'x' . trim($height) . '/files', $url);
        $url = str_replace('https://media.bongda.com.vn/resize/1200x630/files', 'https://media.bongda.com.vn/resize/' . trim($width) . 'x' . trim($height) . '/files', $url);
        $url = str_replace('https://media.bongda.com.vn/resize/600x312/files', 'https://media.bongda.com.vn/resize/' . trim($width) . 'x' . trim($height) . '/files', $url);
        $url = str_replace('https://media.bongda.com.vn/files', 'https://media.bongda.com.vn/resize/' . trim($width) . 'x' . trim($height) . '/files', $url);
        $url = str_replace('https://media.yeah1.com/resize/1200x630/files/', 'https://media.yeah1.com/resize/' . trim($width) . 'x' . trim($height) . '/files/', $url);
        $url = str_replace('https://media.yeah1.com/resize/680x415/files/', 'https://media.yeah1.com/resize/' . trim($width) . 'x' . trim($height) . '/files/', $url);
        $url = str_replace('https://imgamp.phunutoday.vn/resize/1200x627/files/', 'https://thumb.phunutoday.vn/resize/' . trim($width) . 'x' . trim($height) . '/files/', $url);
        $url = str_replace('https://imgamp.phunutoday.vn/resize/1200x630/files/', 'https://thumb.phunutoday.vn/resize/' . trim($width) . 'x' . trim($height) . '/files/', $url);
        $url = str_replace('https://imgamp.phunutoday.vn/resize/700x400/files/', 'https://thumb.phunutoday.vn/resize/' . trim($width) . 'x' . trim($height) . '/files/', $url);
        $url = str_replace('https://imgamp.phunutoday.vn/resize/600x312/files/', 'https://thumb.phunutoday.vn/resize/' . trim($width) . 'x' . trim($height) . '/files/', $url);
        $url = str_replace('https://imgamp.phunutoday.vn/files/', 'https://thumb.phunutoday.vn/resize/' . trim($width) . 'x' . trim($height) . '/files/', $url);
        $url = str_replace('https://congluan-cdn.congluan.vn/resize/1200x627/files', 'https://congluan-cdn.congluan.vn/resize/' . trim($width) . 'x' . trim($height) . '/files', $url);
        $url = str_replace('https://congluan-cdn.congluan.vn/resize/1200x630/files', 'https://congluan-cdn.congluan.vn/resize/' . trim($width) . 'x' . trim($height) . '/files', $url);
        $url = str_replace('https://congluan-cdn.congluan.vn/resize/700x400/files', 'https://congluan-cdn.congluan.vn/resize/' . trim($width) . 'x' . trim($height) . '/files', $url);
        $url = str_replace('https://congluan-cdn.congluan.vn/resize/600x312/files', 'https://congluan-cdn.congluan.vn/resize/' . trim($width) . 'x' . trim($height) . '/files', $url);
        $url = str_replace('https://congluan-cdn.congluan.vn/files', 'https://congluan-cdn.congluan.vn/resize/' . trim($width) . 'x' . trim($height) . '/files', $url);
        $url = str_replace('https://media.tiepthigiadinh.vn/resize/1200x627/files', 'https://media.tiepthigiadinh.vn/resize/' . trim($width) . 'x' . trim($height) . '/files', $url);
        $url = str_replace('https://media.tiepthigiadinh.vn/resize/1200x630/files', 'https://media.tiepthigiadinh.vn/resize/' . trim($width) . 'x' . trim($height) . '/files', $url);
        $url = str_replace('https://media.tiepthigiadinh.vn/resize/700x400/files', 'https://media.tiepthigiadinh.vn/resize/' . trim($width) . 'x' . trim($height) . '/files', $url);
        $url = str_replace('https://media.tiepthigiadinh.vn/resize/600x312/files', 'https://media.tiepthigiadinh.vn/resize/' . trim($width) . 'x' . trim($height) . '/files', $url);
        $url = str_replace('https://media.tiepthigiadinh.vn/files', 'https://media.tiepthigiadinh.vn/resize/' . trim($width) . 'x' . trim($height) . '/files', $url);
        // Other
        $url = str_replace('https://news-thumb2.ymgstatic.com/YanThumbNews/', 'https://static2.yan.vn/' . trim($width) . 'x' . trim($height) . '/YanThumbNews/', $url);
        // media.anhp.vn
        $url = str_replace('http://media.anhp.vn:8081/', 'http://media.anhp.vn/', $url);

        return trim($url);
    }
}
