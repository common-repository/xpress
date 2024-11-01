<?php
/*
Plugin Name: X Press
Plugin URI: http://wordpress.org/extend/plugins/xpress-1/
Description: Plugin to easliy add adult rated videos to your blog
Date: September 11th, 2009
Author: fris
Author URI: n/a
Version: 3.8
*/

add_shortcode('redtube','redtube_shortcode');
add_shortcode('xvideos','xvideos_shortcode');
add_shortcode('pornhub','pornhub_shortcode');
add_shortcode('porn8','porn8_shortcode');
add_shortcode('porntelecast','porntelecast_shortcode');
add_shortcode('keezmovies','keezmovies_shortcode');
add_shortcode('extremetube','extremetube_shortcode');
add_shortcode('freeviewmovies','freeviewmovies_shortcode');
add_shortcode('fuckuh','fuckuh_shortcode');
add_shortcode('hardsextube','hardsextube_shortcode');
add_shortcode('slutload','slutload_shortcode');
add_shortcode('pornative','pornative_shortcode');
add_shortcode('megaporn','megaporn_shortcode');
add_shortcode('pornfan','pornfan_shortcode');
add_shortcode('moviegator','moviegator_shortcode');
add_shortcode('darktube','darktube_shortcode');
add_shortcode('moviefap','moviefap_shortcode');
add_shortcode('moviesand','moviesand_shortcode');
add_shortcode('bigtube','bigtube_shortcode');
add_shortcode('yplf','yplf_shortcode');
add_shortcode('tubehound','tubehound_shortcode');
add_shortcode('freudbox','freudbox_shortcode');
add_shortcode('deviantclip','deviantclip_shortcode');
add_shortcode('pornflakez','pornflakez_shortcode');
add_shortcode('vsile','vsile_shortcode');
add_shortcode('yumbucket','yumbucket_shortcode');
add_shortcode('submityourflicks','submityourflicks_shortcode');
add_shortcode('slutshub','slutshub_shortcode');
add_shortcode('pornari','pornari_shortcode');
add_shortcode('ghettotube','ghettotube_shortcode');
add_shortcode('youhot','youhot_shortcode');

function megaporn_shortcode($atts,$content)
{
    extract(shortcode_atts(array('width' => '320','height' => '290'),$atts));
    $videoid = $content; 
    $key = md5($videoid);
    $videourl = "http://www.megaporn.com/e/$videoid$key";
    $embed = "<object width=\"$width\" height=\"$height\"><param name=\"movie\" value=\"$videourl\"></param><param name=\"allowFullScreen\" value=\"true\"></param><embed src=\"$videourl\" type=\"application/x-shockwave-flash\" allowfullscreen=\"true\" width=\"$width\" height=\"$height\" ></embed></object>";
    return $embed;
}

function moviegator_shortcode($atts,$content)
{
    extract(shortcode_atts(array('width' => '320','height' => '290'),$atts));
    $videoid = $content; 
    $embed = "<embed src=\"http://www.moviegator.com/swf/player.swf?id=$videoid\" width=\"$width\" height=\"$height\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash\">";
    return $embed;
}

function pornfan_shortcode($atts,$content)
{
    extract(shortcode_atts(array('width' => '320','height' => '290'),$atts));
    $videoid = $content; 
    $embed = "<embed src=\"http://www.pornfan.com/media/players/player.swf\" FlashVars=\"config=http://www.pornfan.com/pornfan-embed-porno-videos.php?id=$videoid\" width=\"$width\" height=\"$height\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash\">";
    return $embed;
}

function slutload_shortcode($atts,$content)
{
    extract(shortcode_atts(array('width' => '320','height' => '290'),$atts));
    $videoid = $content; 
    $embed = "<embed src=\"http://www.slutload.com/emb/$videoid/\" width=\"$width\" height=\"$height\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash\">";
    return $embed;
}

function pornative_shortcode($atts,$content)
{
    extract(shortcode_atts(array('width' => '320','height' => '290'),$atts));
    $videoid = $content; 
    $embed = "<embed src=\"http://www.pornative.com/embed/player.swf\" FlashVars=\"movie_id=$videoid\" width=\"$width\" height=\"$height\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash\">";
    return $embed;
}

function hardsextube_shortcode($atts,$content)
{
    extract(shortcode_atts(array('width' => '320','height' => '290'),$atts));
    $videoid = $content; 
    $embed = "<embed src=\"http://www.hardsextube.com/embed/$videoid/\" width=\"$width\" height=\"$height\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash\">";
    return $embed;
}

function fuckuh_shortcode($atts,$content)
{
    extract(shortcode_atts(array('width' => '320','height' => '290'),$atts));
    $videoid = $content; 
    $embed = "<embed src=\"http://www.fuckuh.com/flvplayer.swf?file=$videoid.mp4\" width=\"$width\" height=\"$height\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash\">";
    return $embed;
}

function redtube_shortcode($atts,$content)
{
    extract(shortcode_atts(array('width' => '320','height' => '290'),$atts));
    $videoid = $content; 
    $embed = "<embed src=\"http://embed.redtube.com/player/?id=$videoid&style=redtube\" width=\"$width\" height=\"$height\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash\">";
    return $embed;
}

function xvideos_shortcode($atts,$content)
{
    extract(shortcode_atts(array('width' => '320','height' => '290'),$atts));
    $videoid = $content; 
    $embed = "<embed src=\"http://www.xvideos.com/sitevideos/flv_player_site_v4.swf\" flashvars=\"id_video=$videoid\" width=\"$width\" height=\"$height\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash\">";
    return $embed;
}

function pornhub_shortcode($atts,$content)
{
    extract(shortcode_atts(array('width' => '320','height' => '290'),$atts));
    $videoid = $content; 
    $embed = "<object type=\"application/x-shockwave-flash\" data=\"http://www.pornhub.com/players/pornhub_embed_2.swf\" width=\"$width\" height=\"$height\" ><param name=\"movie\" value=\"http://www.pornhub.com/players/pornhub_embed_2.swf\" /><param name=\"bgColor\" value=\"#000000\" /><param name=\"allowfullscreen\" value=\"true\" /><param name=\"allowScriptAccess\" value=\"always\" /><param name=\"FlashVars\" value=\"options=http://www.pornhub.com/embed_player_v3.php?id=$videoid\" /></object>";
    return $embed;
}

function porntelecast_shortcode($atts,$content)
{
    extract(shortcode_atts(array('width' => '320','height' => '290'),$atts));
    $videoid = $content; 
    $embed = "<embed src=\"http://www.porntelecast.com/embed.swf?config=http://www.porntelecast.com/xml.ph/$videoid//\" width=\"$width\" height=\"$height\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\" allowScriptAccess=\"always\" allowFullScreen=\"true\" align=\"middle\" quality=\"high\">";
    return $embed;
}

function freeviewmovies_shortcode($atts,$content)
{
    extract(shortcode_atts(array('width' => '320','height' => '290'),$atts));
    $videoid = $content; 
    $embed = "<embed src=\"http://freeviewmovies.com/flv/flvplayer.swf\" width=\"$width\" height=\"$height\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\" FlashVars=\"config=http://freeviewmovies.com/flv/skin/ofconfig.php?id=$videoid\" quality=\"high\" bgcolor=\"#000000\" align=\"middle\" allowFullScreen=\"true\" allowScriptAccess=\"always\">";
    return $embed;
}

function porn8_shortcode($atts,$content)
{
    extract(shortcode_atts(array('width' => '320','height' => '290'),$atts));
    $videoid = $content; 
    $embed = "<embed width=\"$width\" height=\"$height\" src=\"http://www.porn8.com/flv/flvplayer.swf\" FlashVars=\"config=http://www.porn8.com/vidcolem/$videoid/\" quality=\"high\" bgcolor=\"#000000\" name=\"flvplayer\" align=\"middle\" allowScriptAccess=\"always\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\" allowFullScreen=\"true\"/>";
    return $embed;
}

function darktube_shortcode($atts,$content)
{
    extract(shortcode_atts(array('width' => '320','height' => '290'),$atts));
    $videoid = $content; 
    $embed = "<embed src=\"http://dev.darktube.com/embed/player.swf\" flashvars=\"file=http://dev.darktube.com/embed/s.php?id=$videoid\" width=\"$width\" height=\"$height\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash\">";
    return $embed;
}

function keezmovies_shortcode($atts,$content)
{
    extract(shortcode_atts(array('width' => '320','height' => '290'),$atts));
    $videoid = $content; 
    $embed = "<embed src=\"http://www.keezmovies.com/inc/players/keezmovies_embed_4.swf\" flashvars=\"options=http://www.keezmovies.com/embed_player.php?id=$videoid\" width=\"$width\" height=\"$height\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash\">";
    return $embed;
}

function extremetube_shortcode($atts,$content)
{
    extract(shortcode_atts(array('width' => '320','height' => '290'),$atts));
    $videoid = $content; 
    $embed = "<embed src=\"http://www.extremetube.com/inc/players/keezmovies_embed_4.swf\" flashvars=\"options=http://www.extremetube.com/embed_player.php?id=$videoid\" width=\"$width\" height=\"$height\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash\">";
    return $embed;
}

function moviesand_shortcode($atts,$content)
{
    extract(shortcode_atts(array('width' => '320','height' => '290'),$atts));
    $videoid = $content; 
    $embed = "<embed src=\"http://www.MoviesAnd.com/embedded/$videoid\"  width=\"$width\" height=\"$height\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash\">";
    return $embed;
}

function moviefap_shortcode($atts,$content)
{
    extract(shortcode_atts(array('width' => '320','height' => '290'),$atts));
    $videoid = $content; 
    $embed = "<embed src=\"http://www.moviefap.com/embedding_player/player_v0.2.1.swf\" flashvars=\"config=embedding_feed.php?viewkey=$videoid\" width=\"$width\" height=\"$height\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash\">";
    return $embed;
}

function bigtube_shortcode($atts,$content)
{
    extract(shortcode_atts(array('width' => '320','height' => '290'),$atts));
    $videoid = $content; 
    $embed = "<embed src=\"http://www.bigtube.com/bigtubeembed.swf\" flashvars=\"&video_id=$videoid\" width=\"$width\" height=\"$height\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash\">";
    return $embed;
}

function freudbox_shortcode($atts,$content)
{
    extract(shortcode_atts(array('width' => '320','height' => '290'),$atts));
    $videoid = $content; 
    $embed = "<embed src=\"http://f.freudbox.com/pl.swf\" flashvars=\"config=http://www.freudbox.com/video/flv/$videoid/config/\" width=\"$width\" height=\"$height\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash\">";
    return $embed;
}

function tubehound_shortcode($atts,$content)
{
    extract(shortcode_atts(array('width' => '320','height' => '290'),$atts));
    $videoid = $content; 
    $embed = "<embed src=\"http://www.tubehound.com/flv_player/Main.swf\" flashvars=\"config=http://www.tubehound.com/flv_player/data/playerConfigEmbed/$videoid.xml\" width=\"$width\" height=\"$height\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash\">";
    return $embed;
}

function yplf_shortcode($atts,$content)
{
    extract(shortcode_atts(array('width' => '320','height' => '290'),$atts));
    $videoid = $content; 
    $embed = "<embed src=\"http://www.yplf.com/flvplayer.swf\" flashvars=\"file=http://www.yplf.com/external_feed.php?tag=$videoid&autostart=true\" width=\"$width\" height=\"$height\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash\">";
    return $embed;
}

function deviantclip_shortcode($atts,$content)
{
    extract(shortcode_atts(array('width' => '320','height' => '290'),$atts));
    $videoid = $content; 
    $embed = "<embed src=\"http://www.deviantclip.com/flashplayer/flvplayer.swf\" flashvars=\"mediaid=$videoid&autostart=true\" width=\"$width\" height=\"$height\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash\">";
    return $embed;
}

function vsile_shortcode($atts,$content)
{
    extract(shortcode_atts(array('width' => '320','height' => '290'),$atts));
    $videoid = $content; 
    $embed = "<embed src=\"http://www.vsile.com/media/player/player.swf?f=http://www.vsile.com/media/player/config_embed.php?vkey=$videoid\" width=\"$width\" height=\"$height\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash\">";
    return $embed;
}

function yumbucket_shortcode($atts,$content)
{
    extract(shortcode_atts(array('width' => '320','height' => '290'),$atts));
    $videoid = $content; 
    $embed = "<embed src=\"http://www.yumbucket.com/media/player/player.swf?f=http://www.yumbucket.com/media/player/config_embed.php?vkey=$videoid\" width=\"$width\" height=\"$height\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash\">";
    return $embed;
}

function pornflakez_shortcode($atts,$content)
{
    extract(shortcode_atts(array('width' => '320','height' => '290'),$atts));
    $videoid = $content; 
    $embed = "<embed src=\"http://www.pornflakez.com/media/player/player.swf?f=http://www.pornflakez.com/media/player/config_embed.php?vkey=$videoid\" width=\"$width\" height=\"$height\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash\">";
    return $embed;
}

function submityourflicks_shortcode($atts,$content)
{
    extract(shortcode_atts(array('width' => '320','height' => '290'),$atts));
    $videoid = $content; 
    $embed = "<embed src=\"http://www.SubmitYourFlicks.com/embedded/$videoid\" width=\"$width\" height=\"$height\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash\">";
    return $embed;
}

function slutshub_shortcode($atts,$content)
{
    extract(shortcode_atts(array('width' => '320','height' => '290'),$atts));
    $videoid = $content; 
    $embed = "<embed src=\"http://www.slutshub.com/media/player/player.swf?f=http://www.slutshub.com/media/player/config_embed.php?vkey=$videoid\" width=\"$width\" height=\"$height\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash\">";
    return $embed;
}

function pornari_shortcode($atts,$content)
{
    extract(shortcode_atts(array('width' => '320','height' => '290'),$atts));
    $videoid = $content; 
    $embed = "<embed src=\"http://www.pornari.com/media/player/player-jw.swf\" flashvars=\"config=http://www.pornari.com/media/player/config-jw.php?vkey=$videoid\" width=\"$width\" height=\"$height\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash\">";
    return $embed;
}

function ghettotube_shortcode($atts,$content)
{
    extract(shortcode_atts(array('width' => '320','height' => '290'),$atts));
    $videoid = $content; 
    $embed = "<embed src=\"http://www.ghettotube.com/mm_player.swf?http_base_url=http://www.ghettotube.com/&videoid=$videoid\" flashvars=\"http_base_url=http://www.ghettotube.com/&videoid=$videoid\" width=\"$width\" height=\"$height\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash\">";
    return $embed;
}

function youhot_shortcode($atts,$content)
{
    extract(shortcode_atts(array('width' => '320','height' => '290'),$atts));
    $videoid = $content; 
    $embed = "<embed src=\"http://www.youhot.com/media/player/player.swf?f=http://www.youhot.com/media/player/config_embed.php?vkey=$videoid\" width=\"$width\" height=\"$height\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash\">";
    return $embed;
}

?>
