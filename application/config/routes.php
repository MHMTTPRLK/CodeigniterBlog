<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Anasayfa';
// Yönetim Controller
$route['yonetim'] = 'Yonetim';
$route['yonetim/kategori'] = 'Kategori';
$route['yonetim/kategoriEkle'] = 'Kategori/ekle';
$route['yonetim/kategoriPost'] = 'Kategori/kategoriPost';
$route['yonetim/kategoriGuncelle/:num'] = 'Kategori/update/$1';
$route['yonetim/kategoriEdit/:num'] = 'Kategori/updatePage/$1';
$route['yonetim/kategoriSil/:num'] = 'Kategori/sil/$1';
$route['yonetim/duyurular'] = 'Duyuru';
$route['yonetim/duyuruEkle'] = 'Duyuru/ekle';
$route['yonetim/duyuruEdit/:num'] = 'Duyuru/updatePage/$1';
$route['yonetim/duyuruSil/:num'] = 'Duyuru/sil/$1';
$route['yonetim/duyuruGuncelle/:num'] = 'Duyuru/update/$1';
$route['yonetim/duyuruPost'] = 'Duyuru/duyuruPost';
$route['yonetim/mesajlar'] = 'Mesaj';
$route['yonetim/mesaj-getData'] = 'Mesaj/messageGetData';
$route['yonetim/mesajSil/:num'] = 'Mesaj/silMesaj/$1';
//AnasayfaController
$route['anasayfa'] = 'Anasayfa';
$route['duyuru/:num'] = 'Anasayfa/duyuruCek/$1';
$route['iletisim'] = 'Anasayfa/iletisimPage';
$route['iletisim/gonder'] = 'Anasayfa/iletisimSend';
//Login
$route['login'] = 'Anasayfa/login';
$route['yonetim.login'] = 'Yonetim/login';
$route['cikis'] = 'Yonetim/cikis';

//404 Page
//$route['404_override'] = 'Anasayfa/notFound';
$route['translate_uri_dashes'] = FALSE;
