<?php
/*
Made By:
@AmirrezaIR
Channels :
Amirreza
*/
ob_start();
$admin = '581956880';//add_sudo
$idchannel = "telexbeta";//add_id_channel
define('API_KEY','609561106:AAFrRJP9cEyS8UDohCL8FWFFClYMJf6HSyY');//add_token
$bot_support = "@pmrsanco_bot";//add_bot_support

mkdir("other");
mkdir("other/setting");
mkdir("other/access");
mkdir("other/profile");
mkdir("other/user");
mkdir("admin0098");
mkdir("admin0098/banall-member");
mkdir("other/button");
mkdir("other/button/feed");
mkdir("other/button/sticker");
mkdir("other/button/video");
mkdir("other/button/voice");
mkdir("other/button/file");
mkdir("other/button/music");
mkdir("other/button/photo");
mkdir("other/button/caption");
mkdir("other/button/forward");
mkdir("other/button/text");
mkdir("other/wordlist");
$sticker = file_get_contents("other/setting/sticker.txt");
$file = file_get_contents("other/setting/file.txt");
$aks = file_get_contents("other/setting/aks.txt");
$banall = file_get_contents("admin0098/banall-member/banall.txt");
$music = file_get_contents("other/setting/music.txt");
$film = file_get_contents("other/setting/film.txt");
$voice = file_get_contents("other/setting/voice.txt");
$join = file_get_contents("other/setting/join.txt");
$link = file_get_contents("other/setting/link.txt");
$forward = file_get_contents("other/setting/forward.txt");
$pm_forward = file_get_contents("other/setting/pm_forward.txt");
$pm_resani = file_get_contents("other/setting/pm_resani.txt");
$profile = file_get_contents("other/setting/profile.txt");
$contact = file_get_contents("other/setting/contact.txt");
$location = file_get_contents("other/setting/location.txt");
$on_off = file_get_contents("other/setting/on-off.txt");
$_channelFWD = file_get_contents("other/setting/channelFWD.txt");
$_channelFWD_B = str_replace("@",'',$_channelFWD);
$TOKEN = API_KEY;
$BOT_GET = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getme"));
$BOT_ID = $BOT_GET->result->id;
$truechannelFWD = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$_channelFWD&user_id=".$BOT_ID));
$tchFWD = $truechannelFWD->result->status;
$button_request = json_encode(["inline_keyboard"=>[
[["text"=>"✅ قبول","callback_data"=>"start chat"],["text"=>"❎ رد","callback_data"=>"end chat"]],
[["text"=>"🚫 بلاک","callback_data"=>"block chat"]],
]]);
$button_lock_bot = json_encode(['keyboard'=>[
[['text'=>'↩️منوی اصلی']],
[['text'=>'🔒تنظیم'],['text'=>'🔒حذف']],
],'resize_keyboard'=>true]);
$button_addbutton = json_encode(['keyboard'=>[
[['text'=>'↩️منوی اصلی']],
[['text'=>'🌐آدرس اینترنتی'],['text'=>'💠اینستاگرام']],
[['text'=>'🈁آدرس فید']],
],'resize_keyboard'=>true]);
$button_official_off = json_encode(['keyboard'=>[
[['text'=>'🔯غیر فعال کردن حالت ادمین']],
[['text'=>'⤴️پیام همگانی'],['text'=>'🈂فوروارد همگانی']],
[['text'=>'♓همگانی و عکس'],['text'=>'⏫همگانی و فایل']],
[['text'=>'🉑پاسخ سریع'],['text'=>'🔲مدیریت دکمه ها']],
[['text'=>'👱ادمین ها'],['text'=>'📫پروفایل']],
[['text'=>'❇️متن پیشفرض'],['text'=>'🆕متن استارت']],
[['text'=>'🔴ریست کردن'],['text'=>'🔒قفل ربات']],
[['text'=>'📮پیام به کاربر'],['text'=>'🔧تنظیمات']],
[['text'=>'📊آمار'],['text'=>'☎️کانتکت']],
[['text'=>'📥دانلودر'],['text'=>'📤آپلود داخلی']],
[['text'=>'✴️روشن کردن بات'],['text'=>'📣تنظیم چنل']],
[['text'=>'⚠️راهنما'],['text'=>'📂پشتیبان گیری']],
[
['text'=>'🔒قفل ربات'],['text'=>'♦حساب کاربری ربات']
],
],'resize_keyboard'=>true]);
$button_official_on = json_encode(['keyboard'=>[
[['text'=>'🔯غیر فعال کردن حالت ادمین']],
[['text'=>'⤴️پیام همگانی'],['text'=>'🈂فوروارد همگانی']],
[['text'=>'♓همگانی و عکس'],['text'=>'⏫همگانی و فایل']],
[['text'=>'🉑پاسخ سریع'],['text'=>'🔲مدیریت دکمه ها']],
[['text'=>'👱ادمین ها'],['text'=>'📫پروفایل']],
[['text'=>'❇️متن پیشفرض'],['text'=>'🆕متن استارت']],
[['text'=>'🔴ریست کردن'],['text'=>'🔒قفل ربات']],
[['text'=>'📮پیام به کاربر'],['text'=>'🔧تنظیمات']],
[['text'=>'📊آمار'],['text'=>'☎️کانتکت']],
[['text'=>'📥دانلودر'],['text'=>'📤آپلود داخلی']],
[['text'=>'✴️روشن کردن بات'],['text'=>'📣تنظیم چنل']],
[['text'=>'⚠️راهنما'],['text'=>'📂پشتیبان گیری']],
],'resize_keyboard'=>true]);
if($on_off == 'true'){
$button_official = json_encode(['keyboard'=>[
[['text'=>'🔯غیر فعال کردن حالت ادمین']],
[['text'=>'⤴️پیام همگانی'],['text'=>'🈂فوروارد همگانی']],
[['text'=>'♓همگانی و عکس'],['text'=>'⏫همگانی و فایل']],
[['text'=>'🉑پاسخ سریع'],['text'=>'🔲مدیریت دکمه ها']],
[['text'=>'👱ادمین ها'],['text'=>'📫پروفایل']],
[['text'=>'❇️متن پیشفرض'],['text'=>'🆕متن استارت']],
[['text'=>'🔴ریست کردن'],['text'=>'🔒قفل ربات']],
[['text'=>'📮پیام به کاربر'],['text'=>'🔧تنظیمات']],
[['text'=>'📊آمار'],['text'=>'☎️کانتکت']],
[['text'=>'📥دانلودر'],['text'=>'📤آپلود داخلی']],
[['text'=>'✴️روشن کردن بات'],['text'=>'📣تنظیم چنل']],
[['text'=>'⚠️راهنما'],['text'=>'📂پشتیبان گیری']],
],'resize_keyboard'=>true]);
}else{
$button_official = json_encode(['keyboard'=>[
[['text'=>'🔯غیر فعال کردن حالت ادمین']],
[['text'=>'⤴️پیام همگانی'],['text'=>'🈂فوروارد همگانی']],
[['text'=>'♓همگانی و عکس'],['text'=>'⏫همگانی و فایل']],
[['text'=>'🉑پاسخ سریع'],['text'=>'🔲مدیریت دکمه ها']],
[['text'=>'👱ادمین ها'],['text'=>'📫پروفایل']],
[['text'=>'❇️متن پیشفرض'],['text'=>'🆕متن استارت']],
[['text'=>'🔴ریست کردن'],['text'=>'🔒قفل ربات']],
[['text'=>'📮پیام به کاربر'],['text'=>'🔧تنظیمات']],
[['text'=>'📊آمار'],['text'=>'☎️کانتکت']],
[['text'=>'📥دانلودر'],['text'=>'📤آپلود داخلی']],
[['text'=>'✴️روشن کردن بات'],['text'=>'📣تنظیم چنل']],
[['text'=>'⚠️راهنما'],['text'=>'📂پشتیبان گیری']],
],'resize_keyboard'=>true]);
}
$button_s2a = json_encode(['keyboard'=>[
[['text'=>'↩️منوی اصلی'],['text'=>'✅بله']],
],'resize_keyboard'=>true]);
$button_remove = json_encode(['KeyboardRemove'=>[
],'remove_keyboard'=>true]);
$button_setting = json_encode(["inline_keyboard"=>[
[["text"=>"دسترسی استیکر $sticker","callback_data"=>"sticker"]],
[["text"=>"دسترسی فایل $file","callback_data"=>"file"]],
[["text"=>"دسترسی عکس $aks","callback_data"=>"aks"]],
[["text"=>"دسترسی موزیک $music","callback_data"=>"music"]],
[["text"=>"دسترسی فیلم $film","callback_data"=>"film"]],
[["text"=>"دسترسی وویس $voice","callback_data"=>"voice"]],
[["text"=>"دسترسی لینک $link","callback_data"=>"link"]],
[["text"=>"دسترسی فوروارد $forward","callback_data"=>"forward"]],
[["text"=>"دعوت به گروه $join","callback_data"=>"join"]],
[["text"=>"فوروارد پیام ها $pm_forward","callback_data"=>"pm_forward"]],
[["text"=>"پیام رسانی $pm_resani","callback_data"=>"pm_resani"]],
]]);
$button_setting_sticker_off = json_encode(["inline_keyboard"=>[
[["text"=>"دسترسی استیکر ⛔️","callback_data"=>"sticker"]],
[["text"=>"دسترسی فایل $file","callback_data"=>"file"]],
[["text"=>"دسترسی عکس $aks","callback_data"=>"aks"]],
[["text"=>"دسترسی موزیک $music","callback_data"=>"music"]],
[["text"=>"دسترسی فیلم $film","callback_data"=>"film"]],
[["text"=>"دسترسی وویس $voice","callback_data"=>"voice"]],
[["text"=>"دسترسی لینک $link","callback_data"=>"link"]],
[["text"=>"دسترسی فوروارد $forward","callback_data"=>"forward"]],
[["text"=>"دعوت به گروه $join","callback_data"=>"join"]],
[["text"=>"فوروارد پیام ها $pm_forward","callback_data"=>"pm_forward"]],
[["text"=>"پیام رسانی $pm_resani","callback_data"=>"pm_resani"]],
]]);
$button_setting_sticker_on = json_encode(["inline_keyboard"=>[
[["text"=>"دسترسی استیکر ✅","callback_data"=>"sticker"]],
[["text"=>"دسترسی فایل $file","callback_data"=>"file"]],
[["text"=>"دسترسی عکس $aks","callback_data"=>"aks"]],
[["text"=>"دسترسی موزیک $music","callback_data"=>"music"]],
[["text"=>"دسترسی فیلم $film","callback_data"=>"film"]],
[["text"=>"دسترسی وویس $voice","callback_data"=>"voice"]],
[["text"=>"دسترسی لینک $link","callback_data"=>"link"]],
[["text"=>"دسترسی فوروارد $forward","callback_data"=>"forward"]],
[["text"=>"دعوت به گروه $join","callback_data"=>"join"]],
[["text"=>"فوروارد پیام ها $pm_forward","callback_data"=>"pm_forward"]],
[["text"=>"پیام رسانی $pm_resani","callback_data"=>"pm_resani"]],
]]);
$button_setting_file_off = json_encode(["inline_keyboard"=>[
[["text"=>"دسترسی استیکر $sticker","callback_data"=>"sticker"]],
[["text"=>"دسترسی فایل ⛔️","callback_data"=>"file"]],
[["text"=>"دسترسی عکس $aks","callback_data"=>"aks"]],
[["text"=>"دسترسی موزیک $music","callback_data"=>"music"]],
[["text"=>"دسترسی فیلم $film","callback_data"=>"film"]],
[["text"=>"دسترسی وویس $voice","callback_data"=>"voice"]],
[["text"=>"دسترسی لینک $link","callback_data"=>"link"]],
[["text"=>"دسترسی فوروارد $forward","callback_data"=>"forward"]],
[["text"=>"دعوت به گروه $join","callback_data"=>"join"]],
[["text"=>"فوروارد پیام ها $pm_forward","callback_data"=>"pm_forward"]],
[["text"=>"پیام رسانی $pm_resani","callback_data"=>"pm_resani"]],
]]);
$button_setting_file_on = json_encode(["inline_keyboard"=>[
[["text"=>"دسترسی استیکر $sticker","callback_data"=>"sticker"]],
[["text"=>"دسترسی فایل ✅","callback_data"=>"file"]],
[["text"=>"دسترسی عکس $aks","callback_data"=>"aks"]],
[["text"=>"دسترسی موزیک $music","callback_data"=>"music"]],
[["text"=>"دسترسی فیلم $film","callback_data"=>"film"]],
[["text"=>"دسترسی وویس $voice","callback_data"=>"voice"]],
[["text"=>"دعوت به گروه $join","callback_data"=>"join"]],
[["text"=>"دسترسی لینک $link","callback_data"=>"link"]],
[["text"=>"دسترسی فوروارد $forward","callback_data"=>"forward"]],
[["text"=>"دعوت به گروه $join","callback_data"=>"join"]],
[["text"=>"فوروارد پیام ها $pm_forward","callback_data"=>"pm_forward"]],
[["text"=>"پیام رسانی $pm_resani","callback_data"=>"pm_resani"]],
]]);
$button_setting_aks_off = json_encode(["inline_keyboard"=>[
[["text"=>"دسترسی استیکر $sticker","callback_data"=>"sticker"]],
[["text"=>"دسترسی فایل $file","callback_data"=>"file"]],
[["text"=>"دسترسی عکس ⛔️","callback_data"=>"aks"]],
[["text"=>"دسترسی موزیک $music","callback_data"=>"music"]],
[["text"=>"دسترسی فیلم $film","callback_data"=>"film"]],
[["text"=>"دسترسی وویس $voice","callback_data"=>"voice"]],
[["text"=>"دسترسی لینک $link","callback_data"=>"link"]],
[["text"=>"دسترسی فوروارد $forward","callback_data"=>"forward"]],
[["text"=>"دعوت به گروه $join","callback_data"=>"join"]],
[["text"=>"فوروارد پیام ها $pm_forward","callback_data"=>"pm_forward"]],
[["text"=>"پیام رسانی $pm_resani","callback_data"=>"pm_resani"]],
]]);
$button_setting_aks_on = json_encode(["inline_keyboard"=>[
[["text"=>"دسترسی استیکر $sticker","callback_data"=>"sticker"]],
[["text"=>"دسترسی فایل $file","callback_data"=>"file"]],
[["text"=>"دسترسی عکس ✅","callback_data"=>"aks"]],
[["text"=>"دسترسی موزیک $music","callback_data"=>"music"]],
[["text"=>"دسترسی فیلم $film","callback_data"=>"film"]],
[["text"=>"دسترسی وویس $voice","callback_data"=>"voice"]],
[["text"=>"دسترسی لینک $link","callback_data"=>"link"]],
[["text"=>"دسترسی فوروارد $forward","callback_data"=>"forward"]],
[["text"=>"دعوت به گروه $join","callback_data"=>"join"]],
[["text"=>"فوروارد پیام ها $pm_forward","callback_data"=>"pm_forward"]],
[["text"=>"پیام رسانی $pm_resani","callback_data"=>"pm_resani"]],
]]);
$button_setting_music_off = json_encode(["inline_keyboard"=>[
[["text"=>"دسترسی استیکر $sticker","callback_data"=>"sticker"]],
[["text"=>"دسترسی فایل $file","callback_data"=>"file"]],
[["text"=>"دسترسی عکس $aks","callback_data"=>"aks"]],
[["text"=>"دسترسی موزیک ⛔️","callback_data"=>"music"]],
[["text"=>"دسترسی فیلم $film","callback_data"=>"film"]],
[["text"=>"دسترسی وویس $voice","callback_data"=>"voice"]],
[["text"=>"دسترسی لینک $link","callback_data"=>"link"]],
[["text"=>"دسترسی فوروارد $forward","callback_data"=>"forward"]],
[["text"=>"دعوت به گروه $join","callback_data"=>"join"]],
[["text"=>"فوروارد پیام ها $pm_forward","callback_data"=>"pm_forward"]],
[["text"=>"پیام رسانی $pm_resani","callback_data"=>"pm_resani"]],
]]);
$button_setting_music_on = json_encode(["inline_keyboard"=>[
[["text"=>"دسترسی استیکر $sticker","callback_data"=>"sticker"]],
[["text"=>"دسترسی فایل $file","callback_data"=>"file"]],
[["text"=>"دسترسی عکس $aks","callback_data"=>"aks"]],
[["text"=>"دسترسی موزیک ✅","callback_data"=>"music"]],
[["text"=>"دسترسی فیلم $film","callback_data"=>"film"]],
[["text"=>"دسترسی وویس $voice","callback_data"=>"voice"]],
[["text"=>"دسترسی لینک $link","callback_data"=>"link"]],
[["text"=>"دسترسی فوروارد $forward","callback_data"=>"forward"]],
[["text"=>"دعوت به گروه $join","callback_data"=>"join"]],
[["text"=>"فوروارد پیام ها $pm_forward","callback_data"=>"pm_forward"]],
[["text"=>"پیام رسانی $pm_resani","callback_data"=>"pm_resani"]],
]]);
$button_setting_film_off = json_encode(["inline_keyboard"=>[
[["text"=>"دسترسی استیکر $sticker","callback_data"=>"sticker"]],
[["text"=>"دسترسی فایل $file","callback_data"=>"file"]],
[["text"=>"دسترسی عکس $aks","callback_data"=>"aks"]],
[["text"=>"دسترسی موزیک $music","callback_data"=>"music"]],
[["text"=>"دسترسی فیلم ⛔️","callback_data"=>"film"]],
[["text"=>"دسترسی وویس $voice","callback_data"=>"voice"]],
[["text"=>"دسترسی لینک $link","callback_data"=>"link"]],
[["text"=>"دسترسی فوروارد $forward","callback_data"=>"forward"]],
[["text"=>"دعوت به گروه $join","callback_data"=>"join"]],
[["text"=>"فوروارد پیام ها $pm_forward","callback_data"=>"pm_forward"]],
[["text"=>"پیام رسانی $pm_resani","callback_data"=>"pm_resani"]],
]]);
$button_setting_film_on = json_encode(["inline_keyboard"=>[
[["text"=>"دسترسی استیکر $sticker","callback_data"=>"sticker"]],
[["text"=>"دسترسی فایل $file","callback_data"=>"file"]],
[["text"=>"دسترسی عکس $aks","callback_data"=>"aks"]],
[["text"=>"دسترسی موزیک $music","callback_data"=>"music"]],
[["text"=>"دسترسی فیلم ✅","callback_data"=>"film"]],
[["text"=>"دسترسی وویس $voice","callback_data"=>"voice"]],
[["text"=>"دسترسی لینک $link","callback_data"=>"link"]],
[["text"=>"دسترسی فوروارد $forward","callback_data"=>"forward"]],
[["text"=>"دعوت به گروه $join","callback_data"=>"join"]],
[["text"=>"فوروارد پیام ها $pm_forward","callback_data"=>"pm_forward"]],
[["text"=>"پیام رسانی $pm_resani","callback_data"=>"pm_resani"]],
]]);
$button_setting_voice_off = json_encode(["inline_keyboard"=>[
[["text"=>"دسترسی استیکر $sticker","callback_data"=>"sticker"]],
[["text"=>"دسترسی فایل $file","callback_data"=>"file"]],
[["text"=>"دسترسی عکس $aks","callback_data"=>"aks"]],
[["text"=>"دسترسی موزیک $music","callback_data"=>"music"]],
[["text"=>"دسترسی فیلم $film","callback_data"=>"film"]],
[["text"=>"دسترسی وویس ⛔️","callback_data"=>"voice"]],
[["text"=>"دسترسی لینک $link","callback_data"=>"link"]],
[["text"=>"دسترسی فوروارد $forward","callback_data"=>"forward"]],
[["text"=>"دعوت به گروه $join","callback_data"=>"join"]],
[["text"=>"فوروارد پیام ها $pm_forward","callback_data"=>"pm_forward"]],
[["text"=>"پیام رسانی $pm_resani","callback_data"=>"pm_resani"]],
]]);
$button_setting_voice_on = json_encode(["inline_keyboard"=>[
[["text"=>"دسترسی استیکر $sticker","callback_data"=>"sticker"]],
[["text"=>"دسترسی فایل $file","callback_data"=>"file"]],
[["text"=>"دسترسی عکس $aks","callback_data"=>"aks"]],
[["text"=>"دسترسی موزیک $music","callback_data"=>"music"]],
[["text"=>"دسترسی فیلم $film","callback_data"=>"film"]],
[["text"=>"دسترسی وویس ✅","callback_data"=>"voice"]],
[["text"=>"دسترسی لینک $link","callback_data"=>"link"]],
[["text"=>"دسترسی فوروارد $forward","callback_data"=>"forward"]],
[["text"=>"دعوت به گروه $join","callback_data"=>"join"]],
[["text"=>"فوروارد پیام ها $pm_forward","callback_data"=>"pm_forward"]],
[["text"=>"پیام رسانی $pm_resani","callback_data"=>"pm_resani"]],
]]);
$button_setting_join_off = json_encode(["inline_keyboard"=>[
[["text"=>"دسترسی استیکر $sticker","callback_data"=>"sticker"]],
[["text"=>"دسترسی فایل $file","callback_data"=>"file"]],
[["text"=>"دسترسی عکس $aks","callback_data"=>"aks"]],
[["text"=>"دسترسی موزیک $music","callback_data"=>"music"]],
[["text"=>"دسترسی فیلم $film","callback_data"=>"film"]],
[["text"=>"دسترسی وویس $voice","callback_data"=>"voice"]],
[["text"=>"دسترسی لینک $link","callback_data"=>"link"]],
[["text"=>"دسترسی فوروارد $forward","callback_data"=>"forward"]],
[["text"=>"دعوت به گروه ⛔️","callback_data"=>"join"]],
[["text"=>"فوروارد پیام ها $pm_forward","callback_data"=>"pm_forward"]],
[["text"=>"پیام رسانی $pm_resani","callback_data"=>"pm_resani"]],
]]);
$button_setting_join_on = json_encode(["inline_keyboard"=>[
[["text"=>"دسترسی استیکر $sticker","callback_data"=>"sticker"]],
[["text"=>"دسترسی فایل $file","callback_data"=>"file"]],
[["text"=>"دسترسی عکس $aks","callback_data"=>"aks"]],
[["text"=>"دسترسی موزیک $music","callback_data"=>"music"]],
[["text"=>"دسترسی فیلم $film","callback_data"=>"film"]],
[["text"=>"دسترسی وویس $voice","callback_data"=>"voice"]],
[["text"=>"دسترسی لینک $link","callback_data"=>"link"]],
[["text"=>"دسترسی فوروارد $forward","callback_data"=>"forward"]],
[["text"=>"دعوت به گروه ✅","callback_data"=>"join"]],
[["text"=>"فوروارد پیام ها $pm_forward","callback_data"=>"pm_forward"]],
[["text"=>"پیام رسانی $pm_resani","callback_data"=>"pm_resani"]],
]]);
$button_setting_link_off = json_encode(["inline_keyboard"=>[
[["text"=>"دسترسی استیکر $sticker","callback_data"=>"sticker"]],
[["text"=>"دسترسی فایل $file","callback_data"=>"file"]],
[["text"=>"دسترسی عکس $aks","callback_data"=>"aks"]],
[["text"=>"دسترسی موزیک $music","callback_data"=>"music"]],
[["text"=>"دسترسی فیلم $film","callback_data"=>"film"]],
[["text"=>"دسترسی وویس $voice","callback_data"=>"voice"]],
[["text"=>"دسترسی لینک ⛔️","callback_data"=>"link"]],
[["text"=>"دسترسی فوروارد $forward","callback_data"=>"forward"]],
[["text"=>"دعوت به گروه $join","callback_data"=>"join"]],
[["text"=>"فوروارد پیام ها $pm_forward","callback_data"=>"pm_forward"]],
[["text"=>"پیام رسانی $pm_resani","callback_data"=>"pm_resani"]],
]]);
$button_setting_link_on = json_encode(["inline_keyboard"=>[
[["text"=>"دسترسی استیکر $sticker","callback_data"=>"sticker"]],
[["text"=>"دسترسی فایل $file","callback_data"=>"file"]],
[["text"=>"دسترسی عکس $aks","callback_data"=>"aks"]],
[["text"=>"دسترسی موزیک $music","callback_data"=>"music"]],
[["text"=>"دسترسی فیلم $film","callback_data"=>"film"]],
[["text"=>"دسترسی وویس $voice","callback_data"=>"voice"]],
[["text"=>"دسترسی لینک ✅","callback_data"=>"link"]],
[["text"=>"دسترسی فوروارد $forward","callback_data"=>"forward"]],
[["text"=>"دعوت به گروه $join","callback_data"=>"join"]],
[["text"=>"فوروارد پیام ها $pm_forward","callback_data"=>"pm_forward"]],
[["text"=>"پیام رسانی $pm_resani","callback_data"=>"pm_resani"]],
]]);
$button_setting_forward_off = json_encode(["inline_keyboard"=>[
[["text"=>"دسترسی استیکر $sticker","callback_data"=>"sticker"]],
[["text"=>"دسترسی فایل $file","callback_data"=>"file"]],
[["text"=>"دسترسی عکس $aks","callback_data"=>"aks"]],
[["text"=>"دسترسی موزیک $music","callback_data"=>"music"]],
[["text"=>"دسترسی فیلم $film","callback_data"=>"film"]],
[["text"=>"دسترسی وویس $voice","callback_data"=>"voice"]],
[["text"=>"دسترسی لینک $link","callback_data"=>"link"]],
[["text"=>"دسترسی فوروارد ⛔️","callback_data"=>"forward"]],
[["text"=>"دعوت به گروه $join","callback_data"=>"join"]],
[["text"=>"فوروارد پیام ها $pm_forward","callback_data"=>"pm_forward"]],
[["text"=>"پیام رسانی $pm_resani","callback_data"=>"pm_resani"]],
]]);
$button_setting_forward_on = json_encode(["inline_keyboard"=>[
[["text"=>"دسترسی استیکر $sticker","callback_data"=>"sticker"]],
[["text"=>"دسترسی فایل $file","callback_data"=>"file"]],
[["text"=>"دسترسی عکس $aks","callback_data"=>"aks"]],
[["text"=>"دسترسی موزیک $music","callback_data"=>"music"]],
[["text"=>"دسترسی فیلم $film","callback_data"=>"film"]],
[["text"=>"دسترسی وویس $voice","callback_data"=>"voice"]],
[["text"=>"دسترسی لینک $link","callback_data"=>"link"]],
[["text"=>"دسترسی فوروارد ✅","callback_data"=>"forward"]],
[["text"=>"دعوت به گروه $join","callback_data"=>"join"]],
[["text"=>"فوروارد پیام ها $pm_forward","callback_data"=>"pm_forward"]],
[["text"=>"پیام رسانی $pm_resani","callback_data"=>"pm_resani"]],
]]);
$button_setting_pm_forward_off = json_encode(["inline_keyboard"=>[
[["text"=>"دسترسی استیکر $sticker","callback_data"=>"sticker"]],
[["text"=>"دسترسی فایل $file","callback_data"=>"file"]],
[["text"=>"دسترسی عکس $aks","callback_data"=>"aks"]],
[["text"=>"دسترسی موزیک $music","callback_data"=>"music"]],
[["text"=>"دسترسی فیلم $film","callback_data"=>"film"]],
[["text"=>"دسترسی وویس $voice","callback_data"=>"voice"]],
[["text"=>"دسترسی لینک $link","callback_data"=>"link"]],
[["text"=>"دسترسی فوروارد $forward","callback_data"=>"forward"]],
[["text"=>"دعوت به گروه $join","callback_data"=>"join"]],
[["text"=>"فوروارد پیام ها ⛔️","callback_data"=>"pm_forward"]],
[["text"=>"پیام رسانی $pm_resani","callback_data"=>"pm_resani"]],
]]);
$button_setting_pm_forward_on = json_encode(["inline_keyboard"=>[
[["text"=>"دسترسی استیکر $sticker","callback_data"=>"sticker"]],
[["text"=>"دسترسی فایل $file","callback_data"=>"file"]],
[["text"=>"دسترسی عکس $aks","callback_data"=>"aks"]],
[["text"=>"دسترسی موزیک $music","callback_data"=>"music"]],
[["text"=>"دسترسی فیلم $film","callback_data"=>"film"]],
[["text"=>"دسترسی وویس $voice","callback_data"=>"voice"]],
[["text"=>"دسترسی لینک $link","callback_data"=>"link"]],
[["text"=>"دسترسی فوروارد $forward","callback_data"=>"forward"]],
[["text"=>"دعوت به گروه $join","callback_data"=>"join"]],
[["text"=>"فوروارد پیام ها ✅","callback_data"=>"pm_forward"]],
[["text"=>"پیام رسانی $pm_resani","callback_data"=>"pm_resani"]],
]]);
$button_setting_pm_resani_off = json_encode(["inline_keyboard"=>[
[["text"=>"دسترسی استیکر $sticker","callback_data"=>"sticker"]],
[["text"=>"دسترسی فایل $file","callback_data"=>"file"]],
[["text"=>"دسترسی عکس $aks","callback_data"=>"aks"]],
[["text"=>"دسترسی موزیک $music","callback_data"=>"music"]],
[["text"=>"دسترسی فیلم $film","callback_data"=>"film"]],
[["text"=>"دسترسی وویس $voice","callback_data"=>"voice"]],
[["text"=>"دسترسی لینک $link","callback_data"=>"link"]],
[["text"=>"دسترسی فوروارد $forward","callback_data"=>"forward"]],
[["text"=>"دعوت به گروه $join","callback_data"=>"join"]],
[["text"=>"فوروارد پیام ها $pm_forward","callback_data"=>"pm_forward"]],
[["text"=>"پیام رسانی ⛔️","callback_data"=>"pm_resani"]],
]]);
$button_setting_pm_resani_on = json_encode(["inline_keyboard"=>[
[["text"=>"دسترسی استیکر $sticker","callback_data"=>"sticker"]],
[["text"=>"دسترسی فایل $file","callback_data"=>"file"]],
[["text"=>"دسترسی عکس $aks","callback_data"=>"aks"]],
[["text"=>"دسترسی موزیک $music","callback_data"=>"music"]],
[["text"=>"دسترسی فیلم $film","callback_data"=>"film"]],
[["text"=>"دسترسی وویس $voice","callback_data"=>"voice"]],
[["text"=>"دسترسی لینک $link","callback_data"=>"link"]],
[["text"=>"دسترسی فوروارد $forward","callback_data"=>"forward"]],
[["text"=>"دعوت به گروه $join","callback_data"=>"join"]],
[["text"=>"فوروارد پیام ها $pm_forward","callback_data"=>"pm_forward"]],
[["text"=>"پیام رسانی ✅","callback_data"=>"pm_resani"]],
]]);
$button_back_prof = json_encode(['keyboard'=>[
[['text'=>'↩️منوی اصلی'],['text'=>'📛حذف']],
],'resize_keyboard'=>true]);
$button_back = json_encode(['keyboard'=>[
[['text'=>'↩️منوی اصلی']],
],'resize_keyboard'=>true]);
$button_pasokh = json_encode(['keyboard'=>[
[['text'=>'↩️منوی اصلی']],
[['text'=>'⏹اضافه کردن کلمه'],['text'=>'⏹حذف کلمه']],
],'resize_keyboard'=>true]);
$button_dokme = json_encode(['keyboard'=>[
[['text'=>'↩️منوی اصلی']],
[['text'=>'⏸دکمه های سیستمی']],
[['text'=>'⏸اضافه کردن دکمه'],['text'=>'⏸حذف دکمه']],
],'resize_keyboard'=>true]);
$button_setting_dokme = json_encode(["inline_keyboard"=>[
[["text"=>"دکمه پروفایل $profile","callback_data"=>"profile"]],
[["text"=>"دکمه ارسال شماره $contact","callback_data"=>"contact"]],
[["text"=>"دکمه ارسال مکان $location","callback_data"=>"location"]],
]]);
$button_setting_dokme_prof_off = json_encode(["inline_keyboard"=>[
[["text"=>"دکمه پروفایل ⛔️","callback_data"=>"profile"]],
[["text"=>"دکمه ارسال شماره $contact","callback_data"=>"contact"]],
[["text"=>"دکمه ارسال مکان $location","callback_data"=>"location"]],
]]);
$button_setting_dokme_prof_on = json_encode(["inline_keyboard"=>[
[["text"=>"دکمه پروفایل ✅","callback_data"=>"profile"]],
[["text"=>"دکمه ارسال شماره $contact","callback_data"=>"contact"]],
[["text"=>"دکمه ارسال مکان $location","callback_data"=>"location"]],
]]);
$button_setting_dokme_con_off = json_encode(["inline_keyboard"=>[
[["text"=>"دکمه پروفایل $profile","callback_data"=>"profile"]],
[["text"=>"دکمه ارسال شماره ⛔️","callback_data"=>"contact"]],
[["text"=>"دکمه ارسال مکان $location","callback_data"=>"location"]],
]]);
$button_setting_dokme_con_on = json_encode(["inline_keyboard"=>[
[["text"=>"دکمه پروفایل $profile","callback_data"=>"profile"]],
[["text"=>"دکمه ارسال شماره ✅","callback_data"=>"contact"]],
[["text"=>"دکمه ارسال مکان $location","callback_data"=>"location"]],
]]);
$button_setting_dokme_loc_on = json_encode(["inline_keyboard"=>[
[["text"=>"دکمه پروفایل $profile","callback_data"=>"profile"]],
[["text"=>"دکمه ارسال شماره $contact","callback_data"=>"contact"]],
[["text"=>"دکمه ارسال مکان ✅","callback_data"=>"location"]],
]]);
$button_setting_dokme_loc_off = json_encode(["inline_keyboard"=>[
[["text"=>"دکمه پروفایل $profile","callback_data"=>"profile"]],
[["text"=>"دکمه ارسال شماره $contact","callback_data"=>"contact"]],
[["text"=>"دکمه ارسال مکان ⛔️","callback_data"=>"location"]],
]]);
$button_dokme_sakht = json_encode(['keyboard'=>[
[['text'=>'↩️منوی اصلی']],
[['text'=>'🔼بالا'],['text'=>'🔽پایین']],
],'resize_keyboard'=>true]);
$button_admin = json_encode(['keyboard'=>[
[['text'=>'↩️منوی اصلی']],
[['text'=>'⏺اضافه کردن ادمین'],['text'=>'⏺حذف ادمین']],
],'resize_keyboard'=>true]);
$button_profile = json_encode(['keyboard'=>[
[['text'=>'↩️منوی اصلی'],['text'=>'👁‍🗨مشاهده مشخصات']],
[['text'=>'🅾نام'],['text'=>'🅾سن']],
[['text'=>'🅾محل سکونت'],['text'=>'🅾وضعیت']],
[['text'=>'🅾تحصیلات'],['text'=>'🅾شماره']],
[['text'=>'🅾کانال'],['text'=>'🅾اینستاگرام']],
[['text'=>'🅾سایت']],
],'resize_keyboard'=>true]);
$button_profile_age = json_encode(['keyboard'=>[
[['text'=>'↩️منوی اصلی'],['text'=>'📛حذف']],
[['text'=>'11'],['text'=>'12'],['text'=>'13'],['text'=>'14'],['text'=>'15']],
[['text'=>'16'],['text'=>'17'],['text'=>'18'],['text'=>'19'],['text'=>'20']],
[['text'=>'21'],['text'=>'22'],['text'=>'23'],['text'=>'24'],['text'=>'25']],
[['text'=>'26'],['text'=>'27'],['text'=>'28'],['text'=>'29'],['text'=>'30']],
[['text'=>'31'],['text'=>'32'],['text'=>'33'],['text'=>'34'],['text'=>'35']],
[['text'=>'36'],['text'=>'37'],['text'=>'38'],['text'=>'39'],['text'=>'50']],
],'resize_keyboard'=>true]);
$button_profile_location = json_encode(['keyboard'=>[
[['text'=>'↩️منوی اصلی'],['text'=>'📛حذف']],
[['text'=>'تهران'],['text'=>'البرز'],['text'=>'کیش']],
[['text'=>'آذربایجان شرقی'],['text'=>'آذربایجان غربی'],['text'=>'اردبیل']],
[['text'=>'خراسان رضوی'],['text'=>'خراسان جنوبی'],['text'=>'خراسان شمالی']],
[['text'=>'خوزستان'],['text'=>'چهارمحال'],['text'=>'سیستان و بلوچستان']],
[['text'=>'کرمان'],['text'=>'کرمانشاه'],['text'=>'کردستان']],
[['text'=>'لرستان'],['text'=>'مازندران'],['text'=>'سمنان']],
[['text'=>'هرمزگان'],['text'=>'همدان'],['text'=>'اصفهان']],
[['text'=>'زنجان'],['text'=>'ایلام'],['text'=>'قزوین'],['text'=>'یزد']],
[['text'=>'گیلان'],['text'=>'بوشهر'],['text'=>'فارس'],['text'=>'قم']],
],'resize_keyboard'=>true]);
$button_profile_tah = json_encode(['keyboard'=>[
[['text'=>'↩️منوی اصلی'],['text'=>'📛حذف']],
[['text'=>'محصل'],['text'=>'دانشجو'],['text'=>'کنکوری']],
[['text'=>'دیپلم'],['text'=>'فوق دیپلم'],['text'=>'لیسانس']],
[['text'=>'فوق لیسانس'],['text'=>'دکترا'],['text'=>'ولگرد']],
],'resize_keyboard'=>true]);
$button_profile_stats = json_encode(['keyboard'=>[
[['text'=>'↩️منوی اصلی'],['text'=>'📛حذف']],
[['text'=>'مجرد'],['text'=>'متاهل'],['text'=>'مطلقه']],
[['text'=>'نامزد'],['text'=>'در رابطه'],['text'=>'سینگل']],
],'resize_keyboard'=>true]);
$button_contact = json_encode(['keyboard'=>[
[['text'=>'↩️منوی اصلی']],
[['text'=>'🛢تنظیم شماره','request_contact' => true]],
[['text'=>'👁‍🗨نمایش شماره شما']],
],'resize_keyboard'=>true]);
$button_reset = json_encode(['keyboard'=>[
[['text'=>'↩️منوی اصلی']],
[['text'=>'✅بله مایل هستم']],
],'resize_keyboard'=>true]);
/*
Made By:
@PHP_Admin
Channels :
@PHP_Seven
@PHP_School
*/
/* Tabee Save */
function save($filename,$TXTdata){
	$myfile = fopen($filename, "w") or die("Unable to open file!");
	fwrite($myfile, "$TXTdata");
	fclose($myfile);
	}
/* Tabee Bot OFficial */
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
/* Zip Aechive */
function create_zip($files = array(),$destination = '') {
    if(file_exists($destination)) { return false; }
    $valid_files = array();
    if(is_array($files)) {
        foreach($files as $file) {
            if(file_exists($file)) {
                $valid_files[] = $file;
            }
        }
    }
    if(count($valid_files)) {
        $zip = new ZipArchive();
        if($zip->open($destination,$overwrite ? ZIPARCHIVE::OVERWRITE : ZIPARCHIVE::CREATE) !== true) {
            return false;
        }
        foreach($valid_files as $file) {
            $zip->addFile($file,$file);
        }
        $zip->close();
        return file_exists($destination);
    }
    else
    {
        return false;
    }
} 
/* Tabee Bot XYZ */
function botXYZ($method,$datas=[]){
    $url = "https://api.pwrtelegram.xyz/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
/* Tabee Send Message */
function SendMessage($chatid,$text,$parsmde,$disable_web_page_preview,$keyboard){
	bot('sendMessage',[
	'chat_id'=>$chatid,
	'text'=>$text,
	'parse_mode'=>$parsmde,
	'disable_web_page_preview'=>$disable_web_page_preview,
	'reply_markup'=>$keyboard
	]);
	}
	/* Tabee Forward Message */
function ForwardMessage($chatid,$from_chat,$message_id){
	bot('ForwardMessage',[
	'chat_id'=>$chatid,
	'from_chat_id'=>$from_chat,
	'message_id'=>$message_id
	]);
	}
	/* Tabee Send Photo */
function SendPhoto($chatid,$photo,$keyboard,$caption){
	bot('SendPhoto',[
	'chat_id'=>$chatid,
	'photo'=>$photo,
	'caption'=>$caption,
	'reply_markup'=>$keyboard
	]);
	}
	/* Tabee Send Audio */
function SendAudio($chatid,$audio,$keyboard,$caption,$sazande,$title){
	bot('SendAudio',[
	'chat_id'=>$chatid,
	'audio'=>$audio,
	'caption'=>$caption,
	'performer'=>$sazande,
	'title'=>$title,
	'reply_markup'=>$keyboard
	]);
	}
	/* Tabee Send Document */
function SendDocument($chatid,$document,$keyboard,$caption){
	bot('SendDocument',[
	'chat_id'=>$chatid,
	'document'=>$document,
	'caption'=>$caption,
	'reply_markup'=>$keyboard
	]);
	}
	/* Tabee Send Sticker */
function SendSticker($chatid,$sticker,$keyboard){
	bot('SendSticker',[
	'chat_id'=>$chatid,
	'sticker'=>$sticker,
	'reply_markup'=>$keyboard
	]);
	}
	/* Tabee Send Video */
function SendVideo($chatid,$video,$caption,$keyboard,$duration){
	bot('SendVideo',[
	'chat_id'=>$chatid,
	'video'=>$video,
        'caption'=>$caption,
	'duration'=>$duration,
	'reply_markup'=>$keyboard
	]);
	}
	/* Tabee Send Voice */
function SendVoice($chatid,$voice,$keyboard,$caption){
	bot('SendVoice',[
	'chat_id'=>$chatid,
	'voice'=>$voice,
	'caption'=>$caption,
	'reply_markup'=>$keyboard
	]);
	}
	/* Tabee Send Contact */
function SendContact($chatid,$first_name,$phone_number,$keyboard){
	bot('SendContact',[
	'chat_id'=>$chatid,
	'first_name'=>$first_name,
	'phone_number'=>$phone_number,
	'reply_markup'=>$keyboard
	]);
	}
	/* Tabee Send Chat Action */
function SendChatAction($chatid,$action){
	bot('sendChatAction',[
	'chat_id'=>$chatid,
	'action'=>$action
	]);
	}
	/* Tabee Kick Chat Member */
function KickChatMember($chatid,$user_id){
	bot('kickChatMember',[
	'chat_id'=>$chatid,
	'user_id'=>$user_id
	]);
	}
	/* Tabee Leave Chat */
function LeaveChat($chatid){
	bot('LeaveChat',[
	'chat_id'=>$chatid
	]);
	}
	/* Tabee Get Chat */
function getChat($idchat){
	$json=file_get_contents('https://api.telegram.org/bot'.API_KEY."/getChat?chat_id=".$idchat);
	$data=json_decode($json,true);
	return $data["result"]["first_name"];
}
	/* Tabee Get Chat Members Count */
function GetChatMembersCount($chatid){
	bot('getChatMembersCount',[
	'chat_id'=>$chatid
	]);
	}
	/* Tabee Get Chat Member */
function GetChatMember($chatid,$userid){
	$truechannel = json_decode(file_get_contents('https://api.telegram.org/bot'.API_KEY."/getChatMember?chat_id=".$chatid."&user_id=".$userid));
	$tch = $truechannel->result->status;
	return $tch;
	}
	/* Tabee Answer Callback Query */
function AnswerCallbackQuery($callback_query_id,$text,$show_alert){
	bot('answerCallbackQuery',[
        'callback_query_id'=>$callback_query_id,
        'text'=>$text,
		'show_alert'=>$show_alert
    ]);
	}
	/* Tabee Edit Message Text */
function EditMessageText($chat_id,$message_id,$text,$parse_mode,$disable_web_page_preview,$keyboard){
	 bot('editMessagetext',[
    'chat_id'=>$chat_id,
	'message_id'=>$message_id,
    'text'=>$text,
    'parse_mode'=>$parse_mode,
	'disable_web_page_preview'=>$disable_web_page_preview,
    'reply_markup'=>$keyboard
	]);
	}
	/* Tabee Edit Message Caption */
function EditMessageCaption($chat_id,$message_id,$caption,$keyboard,$inline_message_id){
	 bot('editMessageCaption',[
    'chat_id'=>$chat_id,
	'message_id'=>$message_id,
    'caption'=>$caption,
    'reply_markup'=>$keyboard,
	'inline_message_id'=>$inline_message_id
	]);
	}

$button_manage = json_encode(['keyboard'=>[
// dokme bala	
[['text'=>'📬پروفایل']],// prt
// dokme paiin
[
['text'=>'✴️بخش مدیریت']]
],'resize_keyboard'=>true]);
$button_pasokh_sarih = json_encode(['keyboard'=>[
[['text'=>'↩️منوی اصلی']],
// pasokh sarih
],'resize_keyboard'=>true]);
$button_dokme_remove = json_encode(['keyboard'=>[
[['text'=>'↩️منوی اصلی']],
// dokme bala
// dokme paiin
],'resize_keyboard'=>true]);
$button_dokme_ha = json_encode(['keyboard'=>[
// dokme bala
[['text'=>'📬پروفایل']],// prt
// dokme paiin
],'resize_keyboard'=>true]);
$update = json_decode(file_get_contents('php://input'));
$class = file_get_contents("other/Button.php");
$ccontact = $update->message->contact;
$locationn = $update->message->location;
$data = $update->callback_query->data;
$data_id = $update->callback_query->id;
$chatid = $update->callback_query->message->chat->id;
$chat_id = $update->message->chat->id;
$title = $update->message->chat->title;
$fromid = $update->callback_query->message->from->id;
$from_id = $update->message->from->id;
mkdir("other/$from_id");
$type = $update->message->chat->type;
$txttt = file_get_contents('other/access/Member.txt');
$member_id1 = explode("\n",$txttt);
$mmemcount1 = count($member_id1) -1;
$first = $update->message->from->first_name;
$last = $update->message->from->last_name;
$username = $update->message->from->username;
$text = $update->message->text;
$text_call = $update->callback_query->message->text;
$message_id_call = $update->callback_query->message->message_id;
$forward_from_chat = $update->message->forward_from_chat;
$from_chat_title = $forward_from_chat->title;
$from_chat_id = $forward_from_chat->id;
$from_chat_username = $forward_from_chat->username;
$from_chat_type = $forward_from_chat->type;
$message_id = $update->message->message_id;
$command = file_get_contents("other/".$from_id."/command.txt");
$wait = file_get_contents("other/".$from_id."/wait.txt");
$iduser = file_get_contents("other/".$from_id."/id.txt");
$url_s2a = file_get_contents("other/".$from_id."/url_s2a.txt");
$text_s2a = file_get_contents("other/".$from_id."/text_s2a.txt");
$datetime = json_decode(file_get_contents("http://api.norbert-team.ir/date-time/"));
$time = file_get_contents("http://robot.teleagent.ir/time/");
$date = file_get_contents("http://robot.teleagent.ir/date/");
$adminlist = file_get_contents("other/access/AdminList.txt");
$block = file_get_contents("other/access/Block-List.txt");
$chat = file_get_contents("other/access/Chat.txt");
$banall = file_get_contents("admin0098/banall-member/banall.txt");
$sticker_id = $update->message->sticker->file_id;
$video_id = $update->message->video->file_id;
$voice_id = $update->message->voice->file_id;
$file_id = $update->message->document->file_id;
$music_id = $update->message->audio->file_id;
$photo2_id = $update->message->photo[2]->file_id;
$photo1_id = $update->message->photo[1]->file_id;
$photo0_id = $update->message->photo[0]->file_id;
$cnumber = $update->message->contact->phone_number;
$cname = $update->message->contact->first_name;
$contact_number = $update->message->contact;
$forward_from = $update->message->forward_from;
$forward_from_id = $forward_from->id;
$reply = $update->message->reply_to_message->forward_from->id;
$reply_username = $update->message->reply_to_message->forward_from->username;
$reply_first = $update->message->reply_to_message->forward_from->first_name;
$last = $update->message->from->last_name;
$inline = $update->inline_query;
$inline_text = $update->inline_query->query;
$caption = $update->message->caption;
$ads_msg_id  = file_get_contents("../../admin0098/access/forward-msg-id.txt");
$ads_id = file_get_contents("../../admin0098/access/forward-id.txt");
//========
$_sticker = file_get_contents("other/button/sticker/$text.txt");
$_video = file_get_contents("other/button/video/$text.txt");
$_voice = file_get_contents("other/button/voice/$text.txt");
$_file = file_get_contents("other/button/file/$text.txt");
$_music = file_get_contents("other/button/music/$text.txt");
$_photo = file_get_contents("other/button/photo/$text.txt");
$_rss = file_get_contents("other/button/feed/$text.txt");
$channel_lock = file_get_contents("other/setting/channel_lock.txt");
$_word = file_get_contents("other/wordlist/$text.txt");
$_word = str_replace("FIRSTNAME",$first,$_word);
$_word = str_replace("LASTNAME",$last,$_word);
$_word = str_replace("USERID",$from_id,$_word);
$_word = str_replace("USERNAME",$username,$_word);
$_word = str_replace("DATE",$date,$_word);
$_word = str_replace("TIME",$time,$_word);
$_caption = file_get_contents("other/button/caption/$text.txt");
$_caption = str_replace("FIRSTNAME",$first,$_caption);
$_caption = str_replace("LASTNAME",$last,$_caption);
$_caption = str_replace("USERID",$from_id,$_caption);
$_caption = str_replace("USERNAME",$username,$_caption);
$_caption = str_replace("DATE",$date,$_caption);
$_caption = str_replace("TIME",$time,$_caption);
$_forward = file_get_contents("other/button/forward/$text.txt");
$_text = file_get_contents("other/button/text/$text.txt");
$_text = str_replace("FIRSTNAME",$first,$_text);
$_text = str_replace("LASTNAME",$last,$_text);
$_text = str_replace("USERID",$from_id,$_text);
$_text = str_replace("USERNAME",$username,$_text);
$_text = str_replace("DATE",$date,$_text);
$_text = str_replace("TIME",$time,$_text);
// Chack
$_send = file_get_contents("other/setting/send.txt");
$_send = str_replace("FIRSTNAME",$first,$_send);
$_send = str_replace("USERID",$from_id,$_send);
$_send = str_replace("USERNAME",$username,$_send);
$_send = str_replace("DATE",$date,$_send);
$_send = str_replace("TIME",$time,$_send);
$_start = file_get_contents("other/setting/start.txt");
$_start = str_replace("FIRSTNAME",$first,$_start);
$_start = str_replace("LASTNAME",$last,$_start);
$_start = str_replace("USERID",$from_id,$_start);
$_start = str_replace("USERNAME",$username,$_start);
$_start = str_replace("DATE",$date,$_start);
$_start = str_replace("TIME",$time,$_start);
$_number = file_get_contents("other/setting/number.txt");
$_cname = file_get_contents("other/setting/cname.txt");
$_feed = file_get_contents("other/setting/feed.txt");
// Check
// Check
$_name = file_get_contents("other/profile/name.txt");
$_age = file_get_contents("other/profile/age.txt");
$_location = file_get_contents("other/profile/location.txt");
$_tah = file_get_contents("other/profile/tah.txt");
$_phone = file_get_contents("other/profile/phone.txt");
$_stats = file_get_contents("other/profile/stats.txt");
$_insta = file_get_contents("other/profile/insta.txt");
$_channel = file_get_contents("other/profile/channel.txt");
$_site = file_get_contents("other/profile/site.txt");
$_block = file_get_contents("block.txt");
$truechannel1 = json_decode(file_get_contents("https://api.telegram.org/bot$TOKEN/getChatMember?chat_id=$channel_lock&user_id=$from_id"));
$tch1 = $truechannel1->result->status;
$ban_all = file_get_contents("admin0098/user/banall.txt");
// End Motaghayer
/* start source */
if (strpos($banall , "$from_id") !== false) {
	return false;
	}
	elseif (strpos($block , "$from_id") !== false) {
	return false;
	}
	elseif($chat_id != $from_id && $join == "⛔️" && $chat_id != $_feed){
	LeaveChat($chat_id);
	}
	elseif($on_off == 'false' and $from_id != $admin){
	SendMessage($chat_id,"⛔️ دوست عزیز ربات خاموش میباشد صبر کنید تا توسط ادمین ربات روشن شود.دوباره پیام خود را ارسال کنید.","html","true",$button_remove);
	}
	elseif($text == '/unblock' and $from_id == $admin1 | $from_id == $admin2 | $from_id == $admin3){
	unlink("block.txt");
	SendMessage($chat_id,"<i>ربات انبلاک شد:</i>","html","true",$button_remove);
	}
	elseif($_block == 'true'){
	SendMessage($chat_id,"<i>ربات بدلیل رعایت نکردن قوانین بلاک میباشد.
	برای انبلاک کردن ربات به آدرس زیر مراجعه کنید:</i>
	$bot_support","html","true",$button_remove);
	}
	elseif (strpos($banall , "$from_id") !== false  ) {
  SendMessage($chat_id,"*You Are GloballyBanned From Server.❌
Don't Message Again...❌*
➖➖➖➖➖➖➖➖➖➖`
دسترسی شما به این سرور مسدود شده است.❌
لطفا پیام ندهید...❌`");
 }
	elseif($text == '/block' and $from_id == $admin1 | $from_id == $admin2 | $from_id == $admin3){
	save("block.txt",'true');
	SendMessage($chat_id,"<i>ربات بلاک شد:</i>","html","true",$button_remove);
	}

elseif($tch1 != 'member' && $tch1 != 'creator' && $tch1 != 'administrator' and $from_id != $admin | strpos($adminlist , "$from_id") == false and $channel_lock != null){
	SendMessage($chat_id,"دوست عزیز برای استفاده از ربات و همچنان حمایت از ما لطفا وارد کانال
➡ $channel_lock
شوید و join رو بزنید و سپس به ربات برگشته و دوباره ربات را استارت کنین.","html","true",$button_remove);
}
	//===========
	elseif($inline != null){		
	$protxt = '';
	if ($_name == ''){
	$protxt = "📬پروفایل خالی است ...";
	}
	elseif ($_name != ''){
		$protxt = $_name;
	}if ($_age != ''){
		$protxt = $protxt."\n".$_age.' ساله';
	}if ($_location != ''){
		$protxt = $protxt."\nاز ".$_location;
	}if ($_tah != ''){
		  $protxt = $protxt."\n".$_tah;
	}if ($_stats != ''){
		  $protxt = $protxt."\n".$_stats;
	}if ($_phone != ''){
		  $protxt = $protxt."\n<b>Tel:</b> ".$_phone;
	}if ($_insta != ''){
		  $protxt = $protxt."\n<b>insta:</b> ".$_insta;
	}if ($_channel != ''){
		 $protxt = $protxt."\n<b>Channel:</b> ".$_channel;
	}if ($_site != ''){
		  $protxt = $protxt."\n<b>Site:</b> ".$_site;
	}
  bot('answerInlineQuery',[
      'inline_query_id'=>$update->inline_query->id,
      'cache_time' => 1,
      'results'=>json_encode([
		[
          'type'=>'article',
          'id'=>base64_encode(1),
          'title'=>'ارسال مشخصات',
		  'description'=>$protxt,
		  'input_message_content'=>[
		  'message_text'=>$protxt,
		  "parse_mode"=>"html"
		  ],
		  'thumb_url'=>'http://s8.picofile.com/file/8280811234/download.png'
        ],
      ])
    ]);
	}
	//===========
	elseif($text == "📬پروفایل" and $type == "private"){
	if ($_name == ''){
	SendMessage($chat_id,"📬پروفایل خالی است ...","html","true");	
	}else{
	$protxt = '';
	if ($_name != ''){
		$protxt = $_name;
	}if ($_age != ''){
		$protxt = $protxt."\n".$_age.' ساله';
	}if ($_location != ''){
		$protxt = $protxt."\nاز ".$_location;
	}if ($_tah != ''){
		  $protxt = $protxt."\n".$_tah;
	}if ($_stats != ''){
		  $protxt = $protxt."\n".$_stats;
	}if ($_phone != ''){
		  $protxt = $protxt."\n<b>Tel:</b> ".$_phone;
	}if ($_insta != ''){
		  $protxt = $protxt."\n<b>insta:</b> ".$_insta;
	}if ($_channel != ''){
		 $protxt = $protxt."\n<b>Channel:</b> ".$_channel;
	}if ($_site != ''){
		  $protxt = $protxt."\n<b>Site:</b> ".$_site;
		  }
	SendMessage($chat_id,"$protxt","html","true");
	}
	}
	//==========
	elseif($text == '↩️منوی اصلی' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","none");
	SendMessage($chat_id,"<i>↩️ یک گزینه انتخاب کنید:</i>","html","true",$button_official);
	}
	//===========
	elseif(preg_match('/^\/([Ss]tart)/',$text) and $type == "private"){
	if($from_id == $admin ){
    ForwardMessage($chat_id,$ads_id,$ads_msg_id);
	SendMessage($chat_id,"<i>سلام ، به ربات خودت خوش اومدے😬🌺</i>","html","true",$button_manage);
	}else{
	SendMessage($chat_id,$_start,"html","true",$button_dokme_ha);
	}
	}
	//===========
	elseif($text == '✴️بخش مدیریت' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","none");
	SendMessage($chat_id,"<i>✴️ به بخش ادمین خوش اومدی.
	✴️ یک گزینه انتخاب کنید:</i>","html","true",$button_official);
	}
	//===========
	elseif($text == '🔯غیر فعال کردن حالت ادمین' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","none");
	SendMessage($chat_id,"<i>🔯 حالت ادمین غیرفعال شد.
	🔯 یک گزینه انتخاب کنید:</i>","html","true",$button_manage);
	}
	//===========
	elseif($text == '♓همگانی و عکس' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","s2a+aks");
	SendMessage($chat_id,"<i>♓ عکس مورد نظر را ارسال کنید.
	♓ میتوانید از استیکر هم استفاده کنید:</i>","html","true",$button_back);
	}
	//===========
	elseif($command == 's2a+aks' and $from_id == $admin and $type == "private"){
	if($update->message->photo != null || $update->message->sticker != null){
	if($photo2_id != null){
	$file = $update->message->photo[2]->file_id;	
	}elseif($photo1_id != null){
	$file = $update->message->photo[1]->file_id;	
	}elseif($photo0_id != null){
	$file = $update->message->photo[0]->file_id;	
	}elseif($sticker_id != null){
	$file = $update->message->sticker->file_id;	
	}
	$get = botXYZ('getfile',['file_id'=>$file]);
	$patch = $get->result->file_path;
	$short = 'https://storage.pwrtelegram.xyz/'.$patch;
	$url = file_get_contents('http://yeo.ir/api.php?url='.$short);
	save("other/".$from_id."/url_s2a.txt",$url);
	save("other/$from_id/command.txt","s2a+aks2");
	SendMessage($chat_id,"<i>♓ متن مورد نظر را ارسال کنید:</i>","html","true",$button_back);
	}else{
	save("other/$from_id/command.txt","s2a+aks");
	SendMessage($chat_id,"<i>♓ عکس مورد نظر را ارسال کنید.
	♓ میتوانید از استیکر هم استفاده کنید:</i>","html","true",$button_back);
	}
	}
	//===========
	elseif($command == 's2a+aks2' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","s2a+aks3");
	save("other/".$from_id."/text_s2a.txt",$text);
	SendMessage($chat_id,"<a href='$url_s2a'>‌</a>$text","html","false",$button_back);
	SendMessage($chat_id,"<i>♓ متن مورد نظر به صورت بالا ارسال میشود. مایل به فرستادن هستید:</i>","html","true",$button_s2a);
	}
	//===========
	elseif($text == '✅بله' and $from_id == $admin and $type == "private" and $command == 's2a+aks3'){
	save("other/$from_id/command.txt","none");
	SendMessage($chat_id,"✅پیام مورد نظر در صف ارسال قرار گرفت.","html","true",$button_official);
	$all_member = fopen( "other/access/Member.txt", 'r');
		while( !feof( $all_member)) {
 			$user = fgets( $all_member);
			SendMessage($user,"<a href='$url_s2a'>‌</a>$text_s2a","html","false");
			}
	}
	//===========
	elseif($text == '⏫همگانی و فایل' and $from_id == $admin and $type == "private"){
	if($_channelFWD == null){
	SendMessage($chat_id,"<i>⏫ کانال تنظیم نشده است:</i>","html","true",$button_official);
	}elseif($tchFWD != 'administrator'){
	SendMessage($chat_id,"<i>⏫ ربات ادمین چنل مورد نظر نیست:</i>","html","true",$button_official);
	}else{
	save("other/$from_id/command.txt","s2a+file");
	SendMessage($chat_id,"<i>⏫ فایل مورد نظر رو ارسال کنید:</i>","html","true",$button_back);
	}
	}
	//===========
	elseif($command == 's2a+file' and $from_id == $admin and $type == "private"){
	
	if($sticker_id != null){$file = $sticker_id;
	$uid = json_decode(file_get_contents("https://api.telegram.org/bot$TOKEN/sendsticker?chat_id=$_channelFWD&sticker=$file"));}
	elseif($video_id != null){$file = $video_id;
	$uid = json_decode(file_get_contents("https://api.telegram.org/bot$TOKEN/sendvideo?chat_id=$_channelFWD&video=$file"));}
	elseif($voice_id != null){$file = $voice_id;
	$uid = json_decode(file_get_contents("https://api.telegram.org/bot$TOKEN/sendvoice?chat_id=$_channelFWD&voice=$file"));}
	elseif($file_id != null){$file = $file_id;
	$uid = json_decode(file_get_contents("https://api.telegram.org/bot$TOKEN/sendDocument?chat_id=$_channelFWD&document=$file"));}
	elseif($music_id != null){$file = $music_id;
	$uid = json_decode(file_get_contents("https://api.telegram.org/bot$TOKEN/sendaudio?chat_id=$_channelFWD&audio=$file"));}
	elseif($photo2_id != null){$file = $photo2_id;
	$uid = json_decode(file_get_contents("https://api.telegram.org/bot$TOKEN/sendPhoto?chat_id=$_channelFWD&photo=$file"));}
	elseif($photo1_id != null){$file = $photo1_id;
	$uid = json_decode(file_get_contents("https://api.telegram.org/bot$TOKEN/sendPhoto?chat_id=$_channelFWD&photo=$file"));}
	elseif($photo0_id != null){$file = $photo0_id;
	$uid = json_decode(file_get_contents("https://api.telegram.org/bot$TOKEN/sendPhoto?chat_id=$_channelFWD&photo=$file"));}
	
	$id = $uid->result->message_id;
	
	$short = "https://t.me/$_channelFWD_B/".$id;
	$url = file_get_contents('http://yeo.ir/api.php?url='.$short);
	save("other/".$from_id."/url_s2a.txt",$url);
	save("other/$from_id/command.txt","s2a+file2");
	SendMessage($chat_id,"<i>⏫ متن مورد نظر را ارسال کنید:</i>","html","true",$button_back);
	}
	//===========
	elseif($command == 's2a+file2' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","s2a+file3");
	save("other/".$from_id."/text_s2a.txt",$text);
	SendMessage($chat_id,"<a href='$url_s2a'>‌</a>$text","html","false",$button_back);
	SendMessage($chat_id,"<i>⏫ متن مورد نظر به صورت بالا ارسال میشود. مایل به فرستادن هستید:</i>","html","true",$button_s2a);
	}
	//===========
	elseif($text == '✅بله' and $from_id == $admin and $type == "private" and $command == 's2a+file3'){
	save("other/$from_id/command.txt","none");
	SendMessage($chat_id,"✅پیام مورد نظر در صف ارسال قرار گرفت.","html","true",$button_official);
	$all_member = fopen( "other/access/Member.txt", 'r');
		while( !feof( $all_member)) {
 			$user = fgets( $all_member);
			SendMessage($user,"<a href='$url_s2a'>‌</a>$text_s2a","html","false");
			}
	}
	//===========
	elseif($text == '⤴️پیام همگانی' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","s2a");
	SendMessage($chat_id,"<i>⤴️ پیامتون رو وارد کنید:
	
	🚫 توجه: اگر حساب شما ویژه نیست فقط میتوانید پیامی در قالب متن بفرستید.</i>","html","true",$button_back);
	}
	elseif($command == 's2a' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","none");
	  $s2atext = "✅ پیام همگانی     اعضای ربات 👈 ($mmemcount1)    ⏰ زمان 👈 ($time)   📅 تاریخ 👈 ($date)";
  $s2aid = json_decode(file_get_contents('https://api.telegram.org/bot$TOKEN/sendMessage?parse_mode=HTML&chat_id=$idchannel&text='.$s2atext));
  $s2a_id = $s2aid->result->message_id;
	SendMessage($chat_id,"<i>⤴️ پیام شما در صف ارسال قرار گرفت.</i>","html","true",$button_official);
	  ForwardMessage($admin,$idchannel,$s2a_id);
	$all_member = fopen( "other/access/Member.txt", 'r');
		while( !feof( $all_member)) {
 			$user = fgets( $all_member);
			if($sticker_id != null){
			SendSticker($user,$sticker_id);
			}
			elseif($video_id != null){
			SendVideo($user,$video_id,$caption);
			}
			elseif($voice_id != null){
			SendVoice($user,$voice_id,'',$caption);
			}
			elseif($file_id != null){
			SendDocument($user,$file_id,'',$caption);
			}
			elseif($music_id != null){
			SendAudio($user,$music_id,'',$caption);
			}
			elseif($photo2_id != null){
			SendPhoto($user,$photo2_id,'',$caption);
			}
			elseif($photo1_id != null){
			SendPhoto($user,$photo1_id,'',$caption);
			}
			elseif($photo0_id != null){
			SendPhoto($user,$photo0_id,'',$caption);
			}
			elseif($text != null){
			SendMessage($user,$text,"html","true");
			}
		}
		}
	//===========
	elseif($text == '🈂فوروارد همگانی' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","s2a fwd");
	SendMessage($chat_id,"<i>🈂 پیام مورد نظر را فوروارد کنید:</i>","html","true",$button_back);
	}
	elseif($command == 's2a fwd' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","none");
	SendMessage($chat_id,"<i>🈂 پیام شما در صف ارسال قرار گرفت.</i>","html","true",$button_official);
	$all_member = fopen( "other/access/Member.txt", 'r');
		while( !feof( $all_member)) {
 			$user = fgets( $all_member);
			ForwardMessage($user,$admin,$message_id);
		}
	}
	//============
	elseif($text == '🔧تنظیمات' and $from_id == $admin and $type == "private"){
	SendMessage($chat_id,"<i>🔧 یکی از دکمه های زیر را انتخاب کنید:
	
	🚫 دو نکته مهم:
	👈 اگر فوروارد پیام ها فعال باشد. پس از ریپلای روی پیام مورد نظر پیام شما فوروارد میشود
	👈 اگر پیام رسانی فعال نباشد. برای شما درخواست چت ارسال میشود</i>","html","true",$button_setting);
	}
	//============
	elseif($data == "sticker"){
	if($sticker == '✅'){
	save("other/setting/sticker.txt","⛔️");
	AnswerCallbackQuery($data_id,"⛔️ ارسال استیکر قفل شد");
	EditMessageText($chatid,$message_id_call,"<i>🔧 یکی از دکمه های زیر را انتخاب کنید:
	
	🚫 دو نکته مهم:
	👈 اگر فوروارد پیام ها فعال باشد. پس از ریپلای روی پیام مورد نظر پیام شما فوروارد میشود
	👈 اگر پیام رسانی فعال نباشد. برای شما درخواست چت ارسال میشود</i>",'html','true',$button_setting_sticker_off);
	}else{
	save("other/setting/sticker.txt","✅");
	AnswerCallbackQuery($data_id,"✅ ارسال استیکر باز شد");
	EditMessageText($chatid,$message_id_call,"<i>🔧 یکی از دکمه های زیر را انتخاب کنید:
	
	🚫 دو نکته مهم:
	👈 اگر فوروارد پیام ها فعال باشد. پس از ریپلای روی پیام مورد نظر پیام شما فوروارد میشود
	👈 اگر پیام رسانی فعال نباشد. برای شما درخواست چت ارسال میشود</i>",'html','true',$button_setting_sticker_on);
	}
	}
	//============
	elseif($data == "file"){
	if($file == '✅'){
	save("other/setting/file.txt","⛔️");
	AnswerCallbackQuery($data_id,"⛔️ ارسال فایل قفل شد");
	EditMessageText($chatid,$message_id_call,"<i>🔧 یکی از دکمه های زیر را انتخاب کنید:
	
	🚫 دو نکته مهم:
	👈 اگر فوروارد پیام ها فعال باشد. پس از ریپلای روی پیام مورد نظر پیام شما فوروارد میشود
	👈 اگر پیام رسانی فعال نباشد. برای شما درخواست چت ارسال میشود</i>",'html','true',$button_setting_file_off);
	}else{
	save("other/setting/file.txt","✅");
	AnswerCallbackQuery($data_id,"✅ ارسال فایل باز شد");
	EditMessageText($chatid,$message_id_call,"<i>🔧 یکی از دکمه های زیر را انتخاب کنید:
	
	🚫 دو نکته مهم:
	👈 اگر فوروارد پیام ها فعال باشد. پس از ریپلای روی پیام مورد نظر پیام شما فوروارد میشود
	👈 اگر پیام رسانی فعال نباشد. برای شما درخواست چت ارسال میشود</i>",'html','true',$button_setting_file_on);
	}
	}
	//============
	elseif($data == "aks"){
	if($aks == '✅'){
	save("other/setting/aks.txt","⛔️");
	AnswerCallbackQuery($data_id,"⛔️ ارسال عکس قفل شد");
	EditMessageText($chatid,$message_id_call,"<i>🔧 یکی از دکمه های زیر را انتخاب کنید:
	
	🚫 دو نکته مهم:
	👈 اگر فوروارد پیام ها فعال باشد. پس از ریپلای روی پیام مورد نظر پیام شما فوروارد میشود
	👈 اگر پیام رسانی فعال نباشد. برای شما درخواست چت ارسال میشود</i>",'html','true',$button_setting_aks_off);
	}else{
	save("other/setting/aks.txt","✅");
	AnswerCallbackQuery($data_id,"✅ ارسال عکس باز شد");
	EditMessageText($chatid,$message_id_call,"<i>🔧 یکی از دکمه های زیر را انتخاب کنید:
	
	🚫 دو نکته مهم:
	👈 اگر فوروارد پیام ها فعال باشد. پس از ریپلای روی پیام مورد نظر پیام شما فوروارد میشود
	👈 اگر پیام رسانی فعال نباشد. برای شما درخواست چت ارسال میشود</i>",'html','true',$button_setting_aks_on);
	}
	}
	//============
	elseif($data == "music"){
	if($music == '✅'){
	save("other/setting/music.txt","⛔️");
	AnswerCallbackQuery($data_id,"⛔️ ارسال موزیک قفل شد");
	EditMessageText($chatid,$message_id_call,"<i>🔧 یکی از دکمه های زیر را انتخاب کنید:
	
	🚫 دو نکته مهم:
	👈 اگر فوروارد پیام ها فعال باشد. پس از ریپلای روی پیام مورد نظر پیام شما فوروارد میشود
	👈 اگر پیام رسانی فعال نباشد. برای شما درخواست چت ارسال میشود</i>",'html','true',$button_setting_music_off);
	}else{
	save("other/setting/music.txt","✅");
	AnswerCallbackQuery($data_id,"✅ ارسال موزیک باز شد");
	EditMessageText($chatid,$message_id_call,"<i>🔧 یکی از دکمه های زیر را انتخاب کنید:
	
	🚫 دو نکته مهم:
	👈 اگر فوروارد پیام ها فعال باشد. پس از ریپلای روی پیام مورد نظر پیام شما فوروارد میشود
	👈 اگر پیام رسانی فعال نباشد. برای شما درخواست چت ارسال میشود</i>",'html','true',$button_setting_music_on);
	}
	}
	//============
	elseif($data == "film"){
	if($film == '✅'){
	save("other/setting/film.txt","⛔️");
	AnswerCallbackQuery($data_id,"⛔️ ارسال فیلم قفل شد");
	EditMessageText($chatid,$message_id_call,"<i>🔧 یکی از دکمه های زیر را انتخاب کنید:
	
	🚫 دو نکته مهم:
	👈 اگر فوروارد پیام ها فعال باشد. پس از ریپلای روی پیام مورد نظر پیام شما فوروارد میشود
	👈 اگر پیام رسانی فعال نباشد. برای شما درخواست چت ارسال میشود</i>",'html','true',$button_setting_film_off);
	}else{
	save("other/setting/film.txt","✅");
	AnswerCallbackQuery($data_id,"✅ ارسال فیلم باز شد");
	EditMessageText($chatid,$message_id_call,"<i>🔧 یکی از دکمه های زیر را انتخاب کنید:
	
	🚫 دو نکته مهم:
	👈 اگر فوروارد پیام ها فعال باشد. پس از ریپلای روی پیام مورد نظر پیام شما فوروارد میشود
	👈 اگر پیام رسانی فعال نباشد. برای شما درخواست چت ارسال میشود</i>",'html','true',$button_setting_film_on);
	}
	}
	//============
	elseif($data == "voice"){
	if($voice == '✅'){
	save("other/setting/voice.txt","⛔️");
	AnswerCallbackQuery($data_id,"⛔️ ارسال وویس قفل شد");
	EditMessageText($chatid,$message_id_call,"<i>🔧 یکی از دکمه های زیر را انتخاب کنید:
	
	🚫 دو نکته مهم:
	👈 اگر فوروارد پیام ها فعال باشد. پس از ریپلای روی پیام مورد نظر پیام شما فوروارد میشود
	👈 اگر پیام رسانی فعال نباشد. برای شما درخواست چت ارسال میشود</i>",'html','true',$button_setting_voice_off);
	}else{
	save("other/setting/voice.txt","✅");
	AnswerCallbackQuery($data_id,"✅ ارسال وویس باز شد");
	EditMessageText($chatid,$message_id_call,"<i>🔧 یکی از دکمه های زیر را انتخاب کنید:
	
	🚫 دو نکته مهم:
	👈 اگر فوروارد پیام ها فعال باشد. پس از ریپلای روی پیام مورد نظر پیام شما فوروارد میشود
	👈 اگر پیام رسانی فعال نباشد. برای شما درخواست چت ارسال میشود</i>",'html','true',$button_setting_voice_on);
	}
	}
	//============
	elseif($data == "join"){
	if($join == '✅'){
	save("other/setting/join.txt","⛔️");
	AnswerCallbackQuery($data_id,"⛔️ دعوت ربات به گروه قفل شد");
	EditMessageText($chatid,$message_id_call,"<i>🔧 یکی از دکمه های زیر را انتخاب کنید:
	
	🚫 دو نکته مهم:
	👈 اگر فوروارد پیام ها فعال باشد. پس از ریپلای روی پیام مورد نظر پیام شما فوروارد میشود
	👈 اگر پیام رسانی فعال نباشد. برای شما درخواست چت ارسال میشود</i>",'html','true',$button_setting_join_off);
	}else{
	save("other/setting/join.txt","✅");
	AnswerCallbackQuery($data_id,"✅ دعوت ربات به گروه باز شد");
	EditMessageText($chatid,$message_id_call,"<i>🔧 یکی از دکمه های زیر را انتخاب کنید:
	
	🚫 دو نکته مهم:
	👈 اگر فوروارد پیام ها فعال باشد. پس از ریپلای روی پیام مورد نظر پیام شما فوروارد میشود
	👈 اگر پیام رسانی فعال نباشد. برای شما درخواست چت ارسال میشود</i>",'html','true',$button_setting_join_on);
	}
	}
	//============
	elseif($data == "link"){
	if($link == '✅'){
	save("other/setting/link.txt","⛔️");
	AnswerCallbackQuery($data_id,"⛔️ ارسال لینک قفل شد");
	EditMessageText($chatid,$message_id_call,"<i>🔧 یکی از دکمه های زیر را انتخاب کنید:
	
	🚫 دو نکته مهم:
	👈 اگر فوروارد پیام ها فعال باشد. پس از ریپلای روی پیام مورد نظر پیام شما فوروارد میشود
	👈 اگر پیام رسانی فعال نباشد. برای شما درخواست چت ارسال میشود</i>",'html','true',$button_setting_link_off);
	}else{
	save("other/setting/link.txt","✅");
	AnswerCallbackQuery($data_id,"✅ ارسال لینک باز شد");
	EditMessageText($chatid,$message_id_call,"<i>🔧 یکی از دکمه های زیر را انتخاب کنید:
	
	🚫 دو نکته مهم:
	👈 اگر فوروارد پیام ها فعال باشد. پس از ریپلای روی پیام مورد نظر پیام شما فوروارد میشود
	👈 اگر پیام رسانی فعال نباشد. برای شما درخواست چت ارسال میشود</i>",'html','true',$button_setting_link_on);
	}
	}
	//============
	elseif($data == "forward"){
	if($forward == '✅'){
	save("other/setting/forward.txt","⛔️");
	AnswerCallbackQuery($data_id,"⛔️ ارسال پیام فوروارد شده قفل شد");
	EditMessageText($chatid,$message_id_call,"<i>🔧 یکی از دکمه های زیر را انتخاب کنید:
	
	🚫 دو نکته مهم:
	👈 اگر فوروارد پیام ها فعال باشد. پس از ریپلای روی پیام مورد نظر پیام شما فوروارد میشود
	👈 اگر پیام رسانی فعال نباشد. برای شما درخواست چت ارسال میشود</i>",'html','true',$button_setting_forward_off);
	}else{
	save("other/setting/forward.txt","✅");
	AnswerCallbackQuery($data_id,"✅ ارسال پیام فوروارد شده باز شد");
	EditMessageText($chatid,$message_id_call,"<i>🔧 یکی از دکمه های زیر را انتخاب کنید:
	
	🚫 دو نکته مهم:
	👈 اگر فوروارد پیام ها فعال باشد. پس از ریپلای روی پیام مورد نظر پیام شما فوروارد میشود
	👈 اگر پیام رسانی فعال نباشد. برای شما درخواست چت ارسال میشود</i>",'html','true',$button_setting_forward_on);
	}
	}
	//============
	elseif($data == "pm_forward"){
	if($pm_forward == '✅'){
	save("other/setting/pm_forward.txt","⛔️");
	AnswerCallbackQuery($data_id,"⛔️ فوروارد پیام ها قفل شد");
	EditMessageText($chatid,$message_id_call,"<i>🔧 یکی از دکمه های زیر را انتخاب کنید:
	
	🚫 دو نکته مهم:
	👈 اگر فوروارد پیام ها فعال باشد. پس از ریپلای روی پیام مورد نظر پیام شما فوروارد میشود
	👈 اگر پیام رسانی فعال نباشد. برای شما درخواست چت ارسال میشود</i>",'html','true',$button_setting_pm_forward_off);
	}else{
	save("other/setting/pm_forward.txt","✅");
	AnswerCallbackQuery($data_id,"✅ فوروارد پیام ها باز شد");
	EditMessageText($chatid,$message_id_call,"<i>🔧 یکی از دکمه های زیر را انتخاب کنید:
	
	🚫 دو نکته مهم:
	👈 اگر فوروارد پیام ها فعال باشد. پس از ریپلای روی پیام مورد نظر پیام شما فوروارد میشود
	👈 اگر پیام رسانی فعال نباشد. برای شما درخواست چت ارسال میشود</i>",'html','true',$button_setting_pm_forward_on);
	}
	}
	//============
	elseif($data == "pm_resani"){
	if($pm_resani == '✅'){
	save("other/setting/pm_resani.txt","⛔️");
	AnswerCallbackQuery($data_id,"⛔️ پیام رسانی قفل شد");
	EditMessageText($chatid,$message_id_call,"<i>🔧 یکی از دکمه های زیر را انتخاب کنید:
	
	🚫 دو نکته مهم:
	👈 اگر فوروارد پیام ها فعال باشد. پس از ریپلای روی پیام مورد نظر پیام شما فوروارد میشود
	👈 اگر پیام رسانی فعال نباشد. برای شما درخواست چت ارسال میشود</i>",'html','true',$button_setting_pm_resani_off);
	}else{
	save("other/setting/pm_resani.txt","✅");
	AnswerCallbackQuery($data_id,"✅ پیام رسانی باز شد");
	EditMessageText($chatid,$message_id_call,"<i>🔧 یکی از دکمه های زیر را انتخاب کنید:
	
	🚫 دو نکته مهم:
	👈 اگر فوروارد پیام ها فعال باشد. پس از ریپلای روی پیام مورد نظر پیام شما فوروارد میشود
	👈 اگر پیام رسانی فعال نباشد. برای شما درخواست چت ارسال میشود</i>",'html','true',$button_setting_pm_resani_on);
	}
	}
	//============
	elseif($text == '📊آمار' and $from_id == $admin and $type == "private"){
		
	$txtt = file_get_contents('other/access/Group.txt');
    $member_id = explode("\n",$txtt);
    $mmemcount = count($member_id) -1;
	
	$txttt = file_get_contents('other/access/Member.txt');
    $member_id1 = explode("\n",$txttt);
    $mmemcount1 = count($member_id1) -1;
	
	$txtttt = file_get_contents('other/access/AdminList.txt');
    $member_id11 = explode("\n",$txtttt);
    $mmemcount11 = count($member_id11) -1;
	
	$txtttt = file_get_contents('other/access/Block-List.txt');
    $member_id111 = explode("\n",$txtttt);
    $mmemcount111 = count($member_id111) -1;
	
	
	$txttttt = file_get_contents('other/access/Chat.txt');
    $member_id1111 = explode("\n",$txttttt);
    $mmemcount1111 = count($member_id1111) -1;
	
	$bots = file_get_contents("other/access/UserName.txt");
	$exbot = explode("@",$bots);
	$c = count($exbot)-2;
	$botsss = '';
	if($exbot[$c-(-1)] != null){
	$botsss = $botsss."@".$exbot[$c-(-1)];
	}if($exbot[$c] != null){
	$botsss = $botsss."@".$exbot[$c];
	}if($exbot[$c-1] != null){
	$botsss = $botsss."@".$exbot[$c-1];
	}if($exbot[$c-2] != null){
	$botsss = $botsss."@".$exbot[$c-2];
	}if($exbot[$c-3] != null){
	$botsss = $botsss."@".$exbot[$c-3];
	}if($exbot[$c-4] != null){
	$botsss = $botsss."@".$exbot[$c-4];
	}if($exbot[$c-5] != null){
	$botsss = $botsss."@".$exbot[$c-5];
	}if($exbot[$c-6] != null){
	$botsss = $botsss."@".$exbot[$c-6];
	}if($exbot[$c-7] != null){
	$botsss = $botsss."@".$exbot[$c-7];
	}if($exbot[$c-8] != null){
	$botsss = $botsss."@".$exbot[$c-8];
	}
	$botsss = str_replace("\n",' | ',$botsss);
	
	SendMessage($chat_id,"<i>☣چت های فعال: </i><b>$mmemcount1111</b>
	<i>👱ادمین ها: </i><b>$mmemcount11</b>
	<i>🚫لیست سیاه: </i><b>$mmemcount111</b>
	<i>👨‍👩‍👦‍👦گروه ها: </i><b>$mmemcount</b>
	<i>👤کاربران: </i><b>$mmemcount1</b>
	
	<i>🕵لیست</i> <code>10</code> <i>کاربر جدید: </i>
	$botsss","html","true");
	}
		elseif($text == '📊افراد بن شده' and $from_id == $admin and $type == "private"){

	$txttttban = file_get_contents('other/access/Block-List.txt');
    $member_id111ban = explode("\n",$txttttban);
    $mmemcount111ban = count($member_id111ban) -1;
	
	$botsban = file_get_contents("other/access/Block-List.txt");
	$exbotban = explode("@",$botsban);
	$c = count($exbotban)-2;
	$botsssban = '';
	if($exbotban[$c-(-1)] != null){
	$botsssban = $botsssban."@".$exbotban[$c-(-1)];
	}if($exbotban[$c] != null){
	$botsssban = $botsssban."@".$exbotban[$c];
	}if($exbotban[$c-1] != null){
	$botsssban = $botsssban."@".$exbotban[$c-1];
	}if($exbotban[$c-2] != null){
	$botsssban = $botsssban."@".$exbotban[$c-2];
	}if($exbotban[$c-3] != null){
	$botsssban = $botsssban."@".$exbotban[$c-3];
	}if($exbotban[$c-4] != null){
	$botsssban = $botsssban."@".$exbotban[$c-4];
	}if($exbotban[$c-5] != null){
	$botsssban = $botsssban."@".$exbotban[$c-5];
	}if($exbotban[$c-6] != null){
	$botsssban = $botsssban."@".$exbotban[$c-6];
	}if($exbotban[$c-7] != null){
	$botsssban = $botsssban."@".$exbotban[$c-7];
	}if($exbotban[$c-8] != null){
	$botsssban = $botsssban."@".$exbotban[$c-8];
	}
	$botsssban = str_replace("\n",' | ',$botsssban);
	
	SendMessage($chat_id,"<i>🚫لیست سیاه: </i><b>$mmemcount111ban</b>
	
	<i>🕵لیست</i> <code>10</code> <i>کاربر بن شده: </i>
	$botsssban","html","true");
	}
	//============
/*
Made By:
@PHP_Admin
Channels :
@PHP_Seven
@PHP_School
*/
	elseif($text == '⚠️راهنما' and $from_id == $admin and $type == "private"){
	SendMessage($chat_id,"⚠️راهنمای ربات:
➖➖➖➖➖➖➖➖➖➖➖

⏺<code>/ban:</code>
<i>ریپلای روی پیام مورد نظر و ارسال این عبارت برای بلاک کردن کاربر از ربات</i>
⏺<code>/unban:</code>
<i>ریپلای روی پیام مورد نظر و ارسال این عبارت برای آنبلاک کردن کاربر از ربات</i>
⏺<code>/share:</code>
<i>ریپلای روی پیام مورد نظر و ارسال این عبارت برای ارسال شماره شما که در کانتکت تنظیم کرده اید</i>
⏺<code>/ban </code><b>USERNAME</b><code>:</code>
<i>بلاک کردن شخص مورد نظر از ربات با یوزرنیم یا آیدی</i>
⏺<code>/unban </code><b>USERNAME</b><code>:</code>
<i>آنبلاک کردن شخص مورد نظر از ربات با یوزرنیم یا آیدی</i>

⏺<i>استفاده در هرجایی که جایگزین مقدار اصلیش میشه:</i>
<code>FIRSTNAME:</code> <i>نام</i>
<code>LASTNAME:</code> <i>نام خانوادگی</i>
<code>USERID:</code> <i>ایدی عددی</i>
<code>USERNAME:</code> <i>یوزرنیم</i>
<code>DATE:</code> <i>تاریخ</i>
<code>TIME:</code> <i>ساعت</i>
➖➖➖➖➖➖➖➖➖➖➖

⏺<code>/setfeed:</code>
<i>تنظیم گروه پشتیبانی برای ارسال پیام ها به گروه</i>
⏺<code>/delfeed:</code>
<i>حذف گروه پشتیبانی و ارسال مجدد پیام ها به ادمین</i>
➖➖➖➖➖➖➖➖➖➖➖
Amirreza","html","true");
	}
	//============
	elseif($text == '🉑پاسخ سریع' and $from_id == $admin and $type == "private"){
	SendMessage($chat_id,"<i>🉑 یکی از دکمه های زیر رو انتخاب کنید:</i>","html","true",$button_pasokh);
	}
	elseif($text == '⏹اضافه کردن کلمه' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","set word");
	SendMessage($chat_id,"<i>⏹ کلمه مورد نظر رو وارد کنید:</i>","html","true",$button_back);
	}
	elseif($command == 'set word' and $from_id == $admin and $type == "private"){
	if($text != null){
	save("other/$from_id/command.txt","set word2");
	save("other/$from_id/wait.txt",$text);
	SendMessage($chat_id,"<i>⏹ پس از ارسال این متن چه متنی نمایش داده شود:
	🚫 توجه کنید فقط میتوانید متنی نمایش دهید.</i>","html","true",$button_back);
	}else{
	save("other/$from_id/command.txt","set word");
	SendMessage($chat_id,"<i>🚫 فقط میتوانید متنی ذخیره کنید:</i>","html","true",$button_back);
	}
	}
	elseif($command == 'set word2' and $from_id == $admin and $type == "private"){
	if($text != null){
	$button = str_replace("// pasokh sarih","[['text'=>'$wait']],// pasokh sarih",$class);
	save("other/Button.php",$button);
	save("other/$from_id/command.txt","none");
	save("other/wordlist/$wait.txt",$text);
	SendMessage($chat_id,"<i>⏹ ثبت شد.</i>","html","true",$button_pasokh);
	}else{
	save("other/$from_id/command.txt","set word2");
	SendMessage($chat_id,"<i>🚫 فقط میتوانید متنی ذخیره کنید:</i>","html","true",$button_back);
	}
	}
	elseif($text == '⏹حذف کلمه' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","del word");
	SendMessage($chat_id,"<i>⏹ کلمه مورد نظر رو انتخاب کنید:</i>","html","true",$button_pasokh_sarih);
	}
	elseif($command == 'del word' and $from_id == $admin and $type == "private"){
	unlink("other/wordlist/$text.txt");
	$button = str_replace("[['text'=>'$text']],","",$class);
	save("other/Button.php",$button);
	save("other/$from_id/command.txt","none");
	SendMessage($chat_id,"<i>⏹ کلمه مورد نظر از لیست پاسخ سریع حذف گردید:</i>","html","true",$button_pasokh);
	}
	//=============
	elseif($text == '📫پروفایل' and $from_id == $admin and $type == "private"){
	SendMessage($chat_id,"<i>📫 یکی از دکمه های زیر رو انتخاب کنید:</i>","html","true",$button_profile);
	}
	//=============
	elseif($text == '🅾نام' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","set name");
	SendMessage($chat_id,"<i>🅾 نام خود را وارد کنید:</i>","html","true",$button_back_prof);
	}
	elseif($text == '📛حذف' and $from_id == $admin and $type == "private" and $command == 'set name'){
	save("other/$from_id/command.txt","none");
	unlink("other/profile/name.txt");
	SendMessage($chat_id,"<i>📛 حذف شد:</i>","html","true",$button_profile);
	}
	elseif($command == 'set name' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","none");
	save("other/profile/name.txt",$text);
	SendMessage($chat_id,"<i>✅ ثبت شد:</i>","html","true",$button_profile);
	}
	//=============
	elseif($text == '🅾سن' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","set age");
	SendMessage($chat_id,"<i>🅾 سن خود را وارد کنید:</i>","html","true",$button_profile_age);
	}
	elseif($text == '📛حذف' and $from_id == $admin and $type == "private" and $command == 'set age'){
	save("other/$from_id/command.txt","none");
	unlink("other/profile/age.txt");
	SendMessage($chat_id,"<i>📛 حذف شد:</i>","html","true",$button_profile);
	}
	elseif($command == 'set age' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","none");
	save("other/profile/age.txt",$text);
	SendMessage($chat_id,"<i>✅ ثبت شد:</i>","html","true",$button_profile);
	}
	//=============
	elseif($text == '🅾محل سکونت' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","set mah");
	SendMessage($chat_id,"<i>🅾 محل سکونت خود را وارد کنید:</i>","html","true",$button_profile_location);
	}
	elseif($text == '📛حذف' and $from_id == $admin and $type == "private" and $command == 'set mah'){
	save("other/$from_id/command.txt","none");
	unlink("other/profile/location.txt");
	SendMessage($chat_id,"<i>📛 حذف شد:</i>","html","true",$button_profile);
	}
	elseif($command == 'set mah' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","none");
	save("other/profile/location.txt",$text);
	SendMessage($chat_id,"<i>✅ ثبت شد:</i>","html","true",$button_profile);
	}
	//=============
	elseif($text == '🅾تحصیلات' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","set tah");
	SendMessage($chat_id,"<i>🅾 تحصیلات خود را وارد کنید:</i>","html","true",$button_profile_tah);
	}
	elseif($text == '📛حذف' and $from_id == $admin and $type == "private" and $command == 'set tah'){
	save("other/$from_id/command.txt","none");
	unlink("other/profile/tah.txt");
	SendMessage($chat_id,"<i>📛 حذف شد:</i>","html","true",$button_profile);
	}
	elseif($command == 'set tah' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","none");
	save("other/profile/tah.txt",$text);
	SendMessage($chat_id,"<i>✅ ثبت شد:</i>","html","true",$button_profile);
	}
	//=============
	elseif($text == '🅾شماره' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","set phone");
	SendMessage($chat_id,"<i>🅾 شماره خود را وارد کنید:</i>","html","true",$button_back_prof);
	}
	elseif($text == '📛حذف' and $from_id == $admin and $type == "private" and $command == 'set phone'){
	save("other/$from_id/command.txt","none");
	unlink("other/profile/phone.txt");
	SendMessage($chat_id,"<i>📛 حذف شد:</i>","html","true",$button_profile);
	}
	elseif($command == 'set phone' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","none");
	save("other/profile/phone.txt",$text);
	SendMessage($chat_id,"<i>✅ ثبت شد:</i>","html","true",$button_profile);
	}
	//=============
	elseif($text == '🅾وضعیت' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","set stats");
	SendMessage($chat_id,"<i>🅾 وضعیت رابطه ی خود را وارد کنید:</i>","html","true",$button_profile_stats);
	}
	elseif($text == '📛حذف' and $from_id == $admin and $type == "private" and $command == 'set stats'){
	save("other/$from_id/command.txt","none");
	unlink("other/profile/stats.txt");
	SendMessage($chat_id,"<i>📛 حذف شد:</i>","html","true",$button_profile);
	}
	elseif($command == 'set stats' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","none");
	save("other/profile/stats.txt",$text);
	SendMessage($chat_id,"<i>✅ ثبت شد:</i>","html","true",$button_profile);
	}
	//=============
	elseif($text == '🅾کانال' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","set channel");
	SendMessage($chat_id,"<i>🅾 کانال خود را وارد کنید:</i>","html","true",$button_back_prof);
	}
	elseif($text == '📛حذف' and $from_id == $admin and $type == "private" and $command == 'set channel'){
	save("other/$from_id/command.txt","none");
	unlink("other/profile/channel.txt");
	SendMessage($chat_id,"<i>📛 حذف شد:</i>","html","true",$button_profile);
	}
	elseif($command == 'set channel' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","none");
	save("other/profile/channel.txt",$text);
	SendMessage($chat_id,"<i>✅ ثبت شد:</i>","html","true",$button_profile);
	}
	//=============
	elseif($text == '🅾اینستاگرام' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","set insta");
	SendMessage($chat_id,"<i>🅾 آیدی اینستاگرام خود را وارد کنید:</i>","html","true",$button_back_prof);
	}
	elseif($text == '📛حذف' and $from_id == $admin and $type == "private" and $command == 'set insta'){
	save("other/$from_id/command.txt","none");
	unlink("other/profile/insta.txt");
	SendMessage($chat_id,"<i>📛 حذف شد:</i>","html","true",$button_profile);
	}
	elseif($command == 'set insta' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","none");
	save("other/profile/insta.txt",$text);
	SendMessage($chat_id,"<i>✅ ثبت شد:</i>","html","true",$button_profile);
	}
	//=============
	elseif($text == '🅾سایت' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","set site");
	SendMessage($chat_id,"<i>🅾 آدرس سایت خود را وارد کنید:</i>","html","true",$button_back_prof);
	}
	elseif($text == '📛حذف' and $from_id == $admin and $type == "private" and $command == 'set site'){
	save("other/$from_id/command.txt","none");
	unlink("other/profile/site.txt");
	SendMessage($chat_id,"<i>📛 حذف شد:</i>","html","true",$button_profile);
	}
	elseif($command == 'set site' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","none");
	save("other/profile/site.txt",$text);
	SendMessage($chat_id,"<i>✅ ثبت شد:</i>","html","true",$button_profile);
	}
	//=============
	elseif($text == '👁‍🗨مشاهده مشخصات' and $from_id == $admin and $type == "private"){
	$protxt = '';
	if ($_name != ''){
		$protxt = $_name;
	}if ($_age != ''){
		$protxt = $protxt."\n".$_age.' ساله';
	}if ($_location != ''){
		$protxt = $protxt."\nاز ".$_location;
	}if ($_tah != ''){
		  $protxt = $protxt."\n".$_tah;
	}if ($_stats != ''){
		  $protxt = $protxt."\n".$_stats;
	}if ($_phone != ''){
		  $protxt = $protxt."\n<b>Tel:</b> ".$_phone;
	}if ($_insta != ''){
		  $protxt = $protxt."\n<b>insta:</b> ".$_insta;
	}if ($_channel != ''){
		 $protxt = $protxt."\n<b>Channel:</b> ".$_channel;
	}if ($_site != ''){
		  $protxt = $protxt."\n<b>Site:</b> ".$_site;
		  }
	if($_name == ''){
	SendMessage($chat_id,"<i>🚫 نام حتما باید تنظیم شده باشد:</i>","html","true",$button_profile);
	}elseif($_name == '' and $_age == '' and $_location == '' and $_tah == '' and $_phone == '' and $_stats == '' and $_insta == '' and $_channel == '' and $_site == ''){
	SendMessage($chat_id,"<i>پروفایل خالی است...</i>","html","true",$button_profile);
	}else{
	SendMessage($chat_id,"$protxt","html","true",$button_profile);
	}
	}
	//=============
	elseif($text == '☎️کانتکت' and $from_id == $admin and $type == "private"){
	SendMessage($chat_id,"<i>☎️ یکی از گزینه های زیر را وارد کنید:</i>","html","true",$button_contact);
	}
	elseif($text == '👁‍🗨نمایش شماره شما' and $from_id == $admin and $type == "private"){
	if($_cname == null){
	SendMessage($chat_id,"<i>❌ شماره شما ثبت نشده.</i>","html","true");
	}else{
	SendContact($chat_id,$_cname,$_number);
	}
	}
	elseif($ccontact != null and $from_id == $admin and $type == "private"){
	save("other/setting/cname.txt",$cname);
	save("other/setting/number.txt",$cnumber);
	SendMessage($chat_id,"<i>✅شماره شما ثبت شد.</i>","html","true",$button_contact);
	}
	//=============
	elseif($text == '❇️متن پیشفرض' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","set text pish");
	SendMessage($chat_id,"<i>❇️ متن جدید را وارد کنید.
	❇️ متن فعلی:</i>
	
	$_send","html","true",$button_back);
	}
	elseif($command == 'set text pish' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","none");
	save("other/setting/send.txt","$text");
	SendMessage($chat_id,"<i>✅ ثبت شد.</i>","html","true",$button_official);
	}
	//=============
	elseif($text == '🆕متن استارت' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","set text start");
	SendMessage($chat_id,"<i>🆕 متن جدید را وارد کنید.
	🆕 متن فعلی:</i> 
	
	$_start","html","true",$button_back);
	}
	elseif($command == 'set text start' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","none");
	save("other/setting/start.txt","$text");
	SendMessage($chat_id,"<i>✅ ثبت شد.</i>","html","true",$button_official);
	}
	//=============
	elseif($text == '📂پشتیبان گیری' and $from_id == $admin and $type == "private"){
	$group = file_get_contents("other/access/Group.txt");
	$user = file_get_contents("other/access/Member.txt");
	$protxt = '';
	if ($_name != ''){
		$protxt = $_name;
	}if ($_age != ''){
		$protxt = $protxt."\n".$_age.' ساله';
	}if ($_location != ''){
		$protxt = $protxt."\nاز ".$_location;
	}if ($_tah != ''){
		  $protxt = $protxt."\n".$_tah;
	}if ($_stats != ''){
		  $protxt = $protxt."\n".$_stats;
	}if ($_phone != ''){
		  $protxt = $protxt."\nTel: ".$_phone;
	}if ($_insta != ''){
		  $protxt = $protxt."\ninsta: ".$_insta;
	}if ($_channel != ''){
		 $protxt = $protxt."\nChannel: ".$_channel;
	}if ($_site != ''){
		  $protxt = $protxt."\nSite: ".$_site;
		  }
	save("Member.txt",$user);
	save("Group.txt",$group);
	save("Send.txt",$_send);
	save("Start.txt",$_start);
	save("Profile.txt",$protxt);
	SendMessage($chat_id,"<i>⏳ کمی صبر کنید.</i>","html","true");
	SendChatAction($chat_id,"upload_document");
	sleep(5);
	$files_to_zip = array(
    'Group.txt',
	'Member.txt',
	'Start.txt',
	'Send.txt',
	'Profile.txt'
	);
	$result = create_zip($files_to_zip,'Amirreza.zip');
	SendDocument($chat_id,new CURLFILE("Amirreza.zip"),'','📣 Amirreza
	🤖 Amirreza');
	unlink("Amirreza.zip");
	unlink("Group.txt");
	unlink("Member.txt");
	unlink("Start.txt");
	unlink("Send.txt");
	unlink("Profile.txt");
	}
	//=============
	elseif($text == '🔲مدیریت دکمه ها' and $from_id == $admin and $type == "private"){
	SendMessage($chat_id,"<i>🔲 یکی از دکمه های زیر رو انتخاب کنید:</i>","html","true",$button_dokme);
	}	
	elseif($text == '⏸دکمه های سیستمی' and $from_id == $admin and $type == "private"){
	SendMessage($chat_id,"<i>⏸ یکی از دکمه های زیر را انتخاب کنید:</i>","html","true",$button_setting_dokme);
	}
	elseif($text == '⏸اضافه کردن دکمه' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","add button");
	SendMessage($chat_id,"<i>⏸ اسم دکمه رو وارد کنید:</i>","html","true",$button_back);
	}
	elseif($command == 'add button' and $from_id == $admin and $type == "private"){
	if (strpos($class , "[['text'=>'$text']]") !== false) {
	save("other/$from_id/command.txt","add button");
	SendMessage($chat_id,"<i>⏸ دکمه ای با این نام وجود دارد.
	⏸ یک نام دیگر وارد کنید:</i>","html","true",$button_back);
	}else{
	save("other/$from_id/command.txt","add button2");
	save("other/$from_id/wait.txt",$text);
	SendMessage($chat_id,"<i>⏸ میخواهید دکمه به کجا اضافه شود:</i>","html","true",$button_dokme_sakht);
	}
	}
	elseif($command == 'add button2' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","add button3");
	save("other/$from_id/id.txt",$text);
	SendMessage($chat_id,"<i>⏸ حالا پاسخی برای این دکمه تعریف کنید:
	⏸ پاسخ در هر قالبی میتواند باشد.از فوروارد هم میتوانید استفاده کنید.
	⏸ همچنین میتوانید از آدرس اینترنتی یا از آدرس اینستاگرام استفاده کنید
	⏸ توجه کنید آدرس اینستاگرام حتما باید آدرس یک پست باشد</i>","html","true",$button_addbutton);
	}
	
	elseif($text == '🌐آدرس اینترنتی' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","add button4");
	SendMessage($chat_id,"<i>⏸ آدرس مورد نظر رو وارد کنید:
	⏸ پسوند های مجاز:</i>
	⏸ <code>webp , mp4 , ogg , zip , gif , pdf , mp3 , png , jpg</code>","html","true",$button_back);
	}
	
	elseif($text == '🈁آدرس فید' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","add button6");
	SendMessage($chat_id,"<i>🈁 آدرس مورد نظر رو وارد کنید:</i>","html","true",$button_back);
	}
	
	elseif($text == '💠اینستاگرام' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","add button5");
	SendMessage($chat_id,"<i>⏸ آدرس پست اینستاگرام رو وارد کنید:</i>","html","true",$button_back);
	}
	
	elseif($command == 'add button6' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","none");
	$rss = file_get_contents("http://api.norbert-team.ir/feedkhan/?post=10&rss=$text");
	if($rss != null){
	if($iduser == '🔼بالا'){
	$button = str_replace("// dokme bala","// dokme bala
	[['text'=>'$wait']],",$class);
	save("other/Button.php",$button);
	}else{
	$button = str_replace("// dokme paiin","[['text'=>'$wait']],// dokme paiin",$class);
	save("other/Button.php",$button);
	}
	SendMessage($chat_id,"<i>🈁 آدرس مورد نظر ثبت شد:</i>","html","true",$button_dokme);
	save("other/button/feed/$wait.txt",$rss);
	}else{
	save("other/$from_id/command.txt","add button6");
	SendMessage($chat_id,"<i>🈁 آدرس مورد نظر اشتباه است:</i>","html","true",$button_back);
	}
	}
	
	elseif($command == 'add button5' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","none");
	$down = json_decode(file_get_contents("https://api.feelthecode.xyz/instagram/?url=$text"));
	if($down->ok == true){
	if($iduser == '🔼بالا'){
	$button = str_replace("// dokme bala","// dokme bala
	[['text'=>'$wait']],",$class);
	save("other/Button.php",$button);
	}else{
	$button = str_replace("// dokme paiin","[['text'=>'$wait']],// dokme paiin",$class);
	save("other/Button.php",$button);
	}
	SendMessage($chat_id,"<i>⏸ کمی صبر کنید تا فایل آپلود شود برای شما:</i>","html","true",$button_back);
	$url = $down->url;
	if($down->is_video == true){
	save("other/button/video/$wait.txt",$text);
	SendVideo($chat_id,$url);
	}elseif($down->is_photo == true){
	save("other/button/photo/$wait.txt",$text);
	SendPhoto($chat_id,$url);
	}
	SendMessage($chat_id,"<i>⏸ فایل مورد نظر ثبت شد:</i>","html","true",$button_dokme);
	}else{
	save("other/$from_id/command.txt","add button5");
	SendMessage($chat_id,"<i>⏸ آدرس پست اینستاگرام رو وارد کنید:
	⏸ آدرس اینستاگرام اشتباه است</i>","html","true",$button_back);
	}
	}
	
	elseif($command == 'add button4' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","none");
	$file = pathinfo($text);
	$ext = $file['extension'];
	if($ext == 'webp' || $ext == 'mp4' || $ext == 'ogg' || $ext == 'zip' || $ext == 'gif' || $ext == 'pdf' || $ext == 'mp3' || $ext == 'png' || $ext == 'jpg'){
	if($iduser == '🔼بالا'){
	$button = str_replace("// dokme bala","// dokme bala
	[['text'=>'$wait']],",$class);
	save("other/Button.php",$button);
	}else{
	$button = str_replace("// dokme paiin","[['text'=>'$wait']],// dokme paiin",$class);
	save("other/Button.php",$button);
	}
	SendMessage($chat_id,"<i>⏸ کمی صبر کنید تا فایل آپلود شود برای شما:</i>","html","true",$button_back);
	if($ext == 'webp'){
	save("other/button/sticker/$wait.txt",$text);
	SendSticker($chat_id,$text);
	}
	elseif($ext == 'mp4'){
	save("other/button/video/$wait.txt",$text);
	SendVideo($chat_id,$text);
	}
	elseif($ext == 'ogg'){
	save("other/button/voice/$wait.txt",$text);
	SendVoice($chat_id,$text);
	}
	elseif($ext == 'zip' || $ext == 'pdf' || $ext == 'gif'){
	save("other/button/file/$wait.txt",$text);
	SendDocument($chat_id,$text);
	}
	elseif($ext == 'mp3'){
	save("other/button/music/$wait.txt",$text);
	SendAudio($chat_id,$text);
	}
	elseif($ext == 'png' || $ext == 'jpg'){
	save("other/button/photo/$wait.txt",$text);
	SendPhoto($chat_id,$text);
	}
	SendMessage($chat_id,"<i>⏸ فایل مورد نظر ثبت شد:</i>","html","true",$button_dokme);
	}else{
	save("other/$from_id/command.txt","add button4");
	SendMessage($chat_id,"<i>⏸ پسوند نا معتبر
	⏸ پسوند های مجاز:</i>
	⏸ <code>webp , mp4 , ogg , zip , gif , pdf , mp3 , png , jpg</code>","html","true",$button_back);
	}
	}
	
	elseif($command == 'add button3' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","none");
	if($iduser == '🔼بالا'){
	$button = str_replace("// dokme bala","// dokme bala
	[['text'=>'$wait']],",$class);
	save("other/Button.php",$button);
	}else{
	$button = str_replace("// dokme paiin","[['text'=>'$wait']],// dokme paiin",$class);
	save("other/Button.php",$button);
	}
	if($forward_from != null || $forward_from_chat != null){
	save("other/button/forward/$wait.txt",$message_id);
	}
	elseif($sticker_id != null){
	save("other/button/sticker/$wait.txt",$sticker_id);
	}
	elseif($video_id != null){
	save("other/button/video/$wait.txt",$video_id);
	save("other/button/caption/$wait.txt",$caption);
	}
	elseif($voice_id != null){
	save("other/button/voice/$wait.txt",$voice_id);
	save("other/button/caption/$wait.txt",$caption);
	}
	elseif($file_id != null){
	save("other/button/file/$wait.txt",$file_id);
	save("other/button/caption/$wait.txt",$caption);
	}
	elseif($music_id != null){
	save("other/button/music/$wait.txt",$music_id);
	save("other/button/caption/$wait.txt",$caption);
	}
	elseif($text != null){
	save("other/button/text/$wait.txt",$text);
	}
	elseif($photo2_id != null){
	save("other/button/photo/$wait.txt",$photo2_id);
	save("other/button/caption/$wait.txt",$caption);
	}
	elseif($photo1_id != null){
	save("other/button/photo/$wait.txt",$photo1_id);
	save("other/button/caption/$wait.txt",$caption);
	}
	elseif($photo0_id != null){
	save("other/button/photo/$wait.txt",$photo0_id);
	save("other/button/caption/$wait.txt",$caption);
	}
	SendMessage($chat_id,"<i>⏸ دکمه مورد نظر ساخته شد.</i>","html","true",$button_dokme);
	}
	elseif($text == '⏸حذف دکمه' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","rem button");
	SendMessage($chat_id,"<i>⏸ دکمه مورد نظر را انتخاب کنید:</i>","html","true",$button_dokme_remove);
	}
	elseif($command == 'rem button' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","none");
	$button = str_replace("[['text'=>'$text']],",'',$class);
	save("other/Button.php",$button);
	unlink("other/button/feed/$text.txt");
	unlink("other/button/sticker/$text.txt");
	unlink("other/button/video/$text.txt");
	unlink("other/button/voice/$text.txt");
	unlink("other/button/file/$text.txt");
	unlink("other/button/music/$text.txt");
	unlink("other/button/photo/$text.txt");
	unlink("other/button/caption/$text.txt");
	unlink("other/button/forward/$text.txt");
	unlink("other/button/text/$text.txt");
	SendMessage($chat_id,"<i>⏸ دکمه مورد نظر حذف شد.</i>","html","true",$button_dokme);
	}
	//============
	elseif($data == "location"){
	if($location == '✅'){
	save("other/setting/location.txt","⛔️");
	$button = str_replace("[['text'=>'⛪️ارسال مکان شما','request_location' => true]],","",$class);
	save("other/Button.php",$button);
	AnswerCallbackQuery($data_id,"⛔️ دکمه ارسال مکان پاک شد");
	EditMessageText($chatid,$message_id_call,"<i>⏸ یکی از دکمه های زیر را انتخاب کنید:</i>",'html','true',$button_setting_dokme_loc_off);
	}else{
	$button = str_replace("// prt","[['text'=>'⛪️ارسال مکان شما','request_location' => true]],// prt",$class);
	save("other/Button.php",$button);
	save("other/setting/location.txt","✅");
	AnswerCallbackQuery($data_id,"✅ دکمه ارسال مکان اضافه شد");
	EditMessageText($chatid,$message_id_call,"<i>⏸ یکی از دکمه های زیر را انتخاب کنید:</i>",'html','true',$button_setting_dokme_loc_on);
	}
	}
	//============
	elseif($data == "profile"){
	if($profile == '✅'){
	save("other/setting/profile.txt","⛔️");
	$button = str_replace("[['text'=>'📬پروفایل']],","",$class);
	save("other/Button.php",$button);
	AnswerCallbackQuery($data_id,"⛔️ دکمه پروفایل پاک شد");
	EditMessageText($chatid,$message_id_call,"<i>⏸ یکی از دکمه های زیر را انتخاب کنید:</i>",'html','true',$button_setting_dokme_prof_off);
	}else{
	$button = str_replace("// prt","[['text'=>'📬پروفایل']],// prt",$class);
	save("other/Button.php",$button);
	save("other/setting/profile.txt","✅");
	AnswerCallbackQuery($data_id,"✅ دکمه پروفایل اضافه شد");
	EditMessageText($chatid,$message_id_call,"<i>⏸ یکی از دکمه های زیر را انتخاب کنید:</i>",'html','true',$button_setting_dokme_prof_on);
	}
	}
	//============
	elseif($data == "contact"){
	if($contact == '✅'){
	save("other/setting/contact.txt","⛔️");
	$button = str_replace("[['text'=>'☎️ارسال شماره شما','request_contact' => true]],","",$class);
	save("other/Button.php",$button);
	AnswerCallbackQuery($data_id,"⛔️ دکمه ارسال شماره پاک شد");
	EditMessageText($chatid,$message_id_call,"<i>⏸ یکی از دکمه های زیر را انتخاب کنید:</i>",'html','true',$button_setting_dokme_con_off);
	}else{
	save("other/setting/contact.txt","✅");
	$button = str_replace("// prt","[['text'=>'☎️ارسال شماره شما','request_contact' => true]],// prt",$class);
	save("other/Button.php",$button);
	AnswerCallbackQuery($data_id,"✅ دکمه ارسال شماره اضافه شد");
	EditMessageText($chatid,$message_id_call,"<i>⏸ یکی از دکمه های زیر را انتخاب کنید:</i>",'html','true',$button_setting_dokme_con_on);
	}
	}
	//============
	elseif($text == '🔴ریست کردن' and $from_id == $admin and $type == "private"){
	SendMessage($chat_id,"<i>🔴 آیا مایل به انجام این کار هستید؟
	🔴 توجه کنید تمام تنطیمات به پیشفرض برگشته و تمامی اطلاعات مربوط به ربات شما پاک میشود.اعضا و گروه ها پاک نمیشوند.</i>","html","true",$button_reset);
	}
	elseif($text == '✅بله مایل هستم' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","none");
	save("other/setting/start.txt","Hi!✋
<code>Welcome To My Bot:)</code>");
    save("other/setting/send.txt","<b>Sent To My Admin!</b>");
	unlink("other/profile/name.txt");
	unlink("other/profile/age.txt");
	unlink("other/profile/location.txt");
	unlink("other/profile/tah.txt");
	unlink("other/profile/phone.txt");
	unlink("other/profile/stats.txt");
	unlink("other/profile/insta.txt");
	unlink("other/profile/channel.txt");
	unlink("other/profile/site.txt");
	save("other/setting/sticker.txt","✅");
	save("other/setting/file.txt","✅");
	save("other/setting/aks.txt","✅");
	save("other/setting/music.txt","✅");
	save("other/setting/film.txt","✅");
	save("other/setting/voice.txt","✅");
	save("other/setting/join.txt","✅");
	save("other/setting/link.txt","✅");
	save("other/setting/forward.txt","✅");
	save("other/setting/pm_forward.txt","⛔️");
	save("other/setting/pm_resani.txt","✅");
	sleep(2);
	SendMessage($chat_id,"<i>✅ تنظیمات ربات شما به پیشفرض برگشت.</i>","html","true",$button_official);
	}
	//============
	elseif($text == '📮پیام به کاربر' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","send user");
	SendMessage($chat_id,"<i>📮 لطفا یوزر آیدی یا یوزرنیم شخص مورد نظر را وارد کنید. یا پیامی از شخص مورد نظر فوروارد کنید. مثال:</i>
	<code>12345678
	@UserName</code>","html","true",$button_back);
	}
	elseif($command == 'send user' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","send user2");
	if($forward_from != null){
	save("other/$from_id/id.txt",$forward_from_id);
	}else{
	save("other/$from_id/id.txt",$text);	
	}
	SendMessage($chat_id,"<i>📮 حالا پیام مورد نظر را در هر قالبی ارسال کنید:
	📮 میتوانید فوروارد کنید.</i>","html","true",$button_back);
	}
	elseif($command == 'send user2' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","none");
	SendMessage($chat_id,"<i>✅ ارسال شد.</i>","html","true",$button_official);
	$id = json_decode(file_get_contents("https://api.pwrtelegram.xyz/bot$TOKEN/getChat?chat_id=$iduser"));
	$user = $id->result->id;
	if($id->result->id != null){
		
	if($forward_from != null){
	ForwardMessage($user,$chat_id,$message_id);
	}
	elseif($video_id != null){
	SendVideo($user,$video_id,$caption);
	}
	elseif($voice_id != null){
	SendVoice($user,$voice_id,'',$caption);
	}
	elseif($file_id != null){
	SendDocument($user,$file_id,'',$caption);
	}
	elseif($music_id != null){
	SendAudio($user,$music_id,'',$caption);
	}
	elseif($photo2_id != null){
	SendPhoto($user,$photo2_id,'',$caption);
	}
	elseif($photo1_id != null){
	SendPhoto($user,$photo1_id,'',$caption);
	}
	elseif($photo0_id != null){
	SendPhoto($user,$photo0_id,'',$caption);
	}
	elseif($text != null){
	SendMessage($user,$text,"html","true");
	}
	elseif($sticker_id != null){
	SendSticker($user,$sticker_id);
	}
	}else{
	SendMessage($chat_id,"<i>📮 متاسفانه خطایی رخ داده است.</i>","html","true",$button_official);
	}
	}
	//============
	elseif($text == '👱ادمین ها' and $from_id == $admin and $type == "private"){
	SendMessage($chat_id,"<i>👱 یکی از دکمه های زیر را انتخاب کنید:</i>","html","true",$button_admin);
	}
	elseif($text == '⏺اضافه کردن ادمین' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","add admin");
	SendMessage($chat_id,"<i>⏺ آیدی عددی شخص را وارد کنید.یا پیامی از شخص مورد نظر فوروارد کنید:</i>","html","true",$button_back);
	}
	elseif($command == 'add admin' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","none");
	if($forward_from != null){
	$fir = getChat($forward_from_id);
	$txxt = file_get_contents('other/access/AdminList.txt');
    $pmembersid= explode("\n",$txxt);
    if (!in_array($forward_from_id,$pmembersid)){
      $aaddd = file_get_contents('other/access/AdminList.txt');
      $aaddd .= $forward_from_id."\n";
		file_put_contents('other/access/AdminList.txt',$aaddd);
    }
	}else{
	$fir = getChat($text);
	$txxt = file_get_contents('other/access/AdminList.txt');
    $pmembersid= explode("\n",$txxt);
    if (!in_array($text,$pmembersid)){
      $aaddd = file_get_contents('other/access/AdminList.txt');
      $aaddd .= $text."\n";
		file_put_contents('other/access/AdminList.txt',$aaddd);
    }
	}
	SendMessage($chat_id,"<i>⏺ ایشون ($fir) به ادمین ها اضافه شد:</i>","html","true",$button_admin);
	}
	elseif($text == '⏺حذف ادمین' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","rem admin");
	SendMessage($chat_id,"<i>⏺ آیدی عددی شخص را وارد کنید.یا پیامی از شخص مورد نظر فوروارد کنید:</i>","html","true",$button_back);
	}
	elseif($command == 'rem admin' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","none");
	if($forward_from != null){
	$rep = str_replace("$forward_from_id\n",'',$adminlist);
	}else{
	$rep = str_replace("$text\n",'',$adminlist);
	}
	save("other/access/AdminList.txt",$rep);
	SendMessage($chat_id,"<i>⏺ شخص مورد نظر از ادمین برداشته شد:</i>","html","true",$button_admin);
	}
	//=============
	elseif($text == '📣تنظیم چنل' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","set channel fowr");
	SendMessage($chat_id,"<i>📣 متنی از چنل مورد نظر فوروارد کنید:
	📣 توجه کنید حتما باید چنل عمومی باشد.</i>","html","true",$button_back);
	}
	elseif($command == 'set channel fowr' and $from_id == $admin and $type == "private"){
	if($forward_from_chat == null || $from_chat_username == null || $from_chat_type != 'channel'){
	SendMessage($chat_id,"<i>📣 خطایی رخ داده است.
	📣 توجه کنید حتما باید یک پیام از چنل فوروارد کنید و چنل عمومی باشد:</i>","html","true",$button_official);
	}else{
	save("other/$from_id/command.txt","none");
	save("other/setting/channelFWD.txt","@$from_chat_username");
	SendMessage($chat_id,"<i>✅ ثبت شد.</i>","html","true",$button_official);
	}
	}
	//===========
	elseif($text == '📤آپلود داخلی' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","upload file");
	SendMessage($chat_id,"<i>📤 لطفا هر چیزی رو جهت آپلود ارسال کنید.</i>","html","true",$button_back);
	}
	elseif($command == 'upload file' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","none");
	
	if($sticker_id != null){$file = $sticker_id;}
	elseif($video_id != null){$file = $video_id;}
	elseif($voice_id != null){$file = $voice_id;}
	elseif($file_id != null){$file = $file_id;}
	elseif($music_id != null){$file = $music_id;}
	elseif($photo2_id != null){$file = $photo2_id;}
	elseif($photo1_id != null){$file = $photo1_id;}
	elseif($photo0_id != null){$file = $photo0_id;}
	
	$get = botXYZ('getfile',['file_id'=>$file]);
    $patch = $get->result->file_path;
	$file_link = 'https://storage.pwrtelegram.xyz/'.$patch;
	$short = file_get_contents('http://yeo.ir/api.php?url='.$file_link);
	SendMessage($chat_id,"📤 لینک فایل مورد نظر: 
	📤 $short","html","false",$button_official);
	}
	//===========
	elseif($text == '📥دانلودر' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","downloader instagram");
	SendMessage($chat_id,"<i>📥 لینک پست اینستاگرام رو ارسال کنید یا از آدرس اینترنتی استفاده کنید:
	📥 پسوند های مجاز:</i>
	📥 <code>webp , mp4 , ogg , zip , gif , pdf , mp3 , png , jpg</code>","html","true",$button_back);
	}
	elseif($command == 'downloader instagram' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","none");
	$file = pathinfo($text);
	$ext = $file['extension'];
	if($ext == 'webp' || $ext == 'mp4' || $ext == 'ogg' || $ext == 'zip' || $ext == 'gif' || $ext == 'pdf' || $ext == 'mp3' || $ext == 'png' || $ext == 'jpg'){
	SendMessage($chat_id,"<i>📥 کمی صبر کنید تا فایل آپلود شود برای شما:</i>","html","true",$button_official);
	if($ext == 'webp'){
	SendSticker($chat_id,$text);
	}
	elseif($ext == 'mp4'){
	SendVideo($chat_id,$text);
	}
	elseif($ext == 'ogg'){
	SendVoice($chat_id,$text);
	}
	elseif($ext == 'zip' || $ext == 'pdf' || $ext == 'gif'){
	SendDocument($chat_id,$text);
	}
	elseif($ext == 'mp3'){
	SendAudio($chat_id,$text);
	}
	elseif($ext == 'png' || $ext == 'jpg'){
	SendPhoto($chat_id,$text);
	}
	}else{
	$down = json_decode(file_get_contents("https://api.feelthecode.xyz/instagram/?url=$text"));
		if($down->ok == true){
		SendMessage($chat_id,"<b>📥 در حال دانلود...</b>","html","true");
		$url = $down->url;
		if($down->is_video == true){
		SendVideo($chat_id,$url,"🆔 Amirreza",$button_official);
		}elseif($down->is_photo == true){	
		SendPhoto($chat_id,$url,$button_official,"🆔 Amirreza");
		}
		}else{
		save("other/$from_id/command.txt","downloader instagram");
	        SendMessage($chat_id,"<i>📥 لینک پست مورد نظر رو ارسال کنید یا از آدرس اینترنتی استفاده کنید:
		📥 لینک مورد نظر اشتباه است.</i>","html","true",$button_back);
		}
	}
	}
	//===========
	elseif($text == '✴️روشن کردن بات' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","none");
	save("other/setting/on-off.txt","true");
	SendMessage($chat_id,"<i>✴️ ربات روشن شد.
	✴️ از این پس میتوانند به شما پیام ارسال کنند.</i>","html","true",$button_official_off);
	}
	elseif($text == '⛔️خاموش کردن بات' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","none");
	save("other/setting/on-off.txt","false");
	SendMessage($chat_id,"<i>⛔ ️ربات خاموش شد.
	⛔️ دیگر کسی نمیتواند برای شما پیام ارسال کند.</i>","html","true",$button_official_on);
	}
	//=============
	elseif($text == '🔒قفل ربات' and $from_id == $admin and $type == "private"){
	SendMessage($chat_id,"<i>🔒 یکی از دکمه های زیر رو انتخاب کنید:</i>","html","true",$button_lock_bot);
	}
	//=============
	elseif($text == '🔒تنظیم' and $from_id == $admin and $type == "private"){
	save("other/$from_id/command.txt","channel-lock");
	SendMessage($chat_id,"<i>🔒 آدرس کانال مورد نظر را وارد کنید:
	🔒 آدرس حتما باید با @ وارد شود.</i>","html","true",$button_back);
	}
	elseif($command == 'channel-lock' and $from_id == $admin and $type == "private"){
	$getMe = json_decode(file_get_contents("https://api.telegram.org/bot$TOKEN/getMe"));
	$id = $getMe->result->id;
	$truechannel = json_decode(file_get_contents("https://api.telegram.org/bot$TOKEN/getChatMember?chat_id=$text&user_id=$id"));
	$tch = $truechannel->result->status;
	if($tch != 'administrator'){
	SendMessage($chat_id,"<i>🔒 ربات ادمین کانال نیست.
	🔒 ربات رو ادمین کرده و دوباره آدرس رو وارد کنید:</i>","html","true",$button_back);
	}else{
	save("other/$from_id/command.txt","channel-lock");
	save("other/setting/channel_lock.txt",$text);
	SendMessage($chat_id,"<i>🔒 ثبت شد.</i>","html","true",$button_lock_bot);
	}
	}
	elseif($text == '🔒حذف' and $from_id == $admin and $type == "private"){
	unlink("other/setting/channel_lock.txt");
	SendMessage($chat_id,"<i>🔒 حذف شد.</i>","html","true",$button_lock_bot);
	}
	//===========
	elseif(preg_match('/^\/([Bb]an) (.*)/',$text) and $from_id == $admin and $type == "private"){
	preg_match('/^\/([Bb]an) (.*)/',$text,$match);
	$id = json_decode(file_get_contents("https://api.pwrtelegram.xyz/bot$TOKEN/getChat?chat_id=".$match[2]));
	$user = $id->result->id;
	if($user != null){
	$txxt = file_get_contents('other/access/Block-List.txt');
    $pmembersid= explode("\n",$txxt);
    if (!in_array($user,$pmembersid)){
      $aaddd = file_get_contents('other/access/Block-List.txt');
      $aaddd .= $user."\n";
		file_put_contents('other/access/Block-List.txt',$aaddd);
    }
	SendMessage($chat_id,"🚫 کاربر مورد نظر بلاک شد.","html","true");
	SendMessage($user,"🚫 شما بلاک شدین.","html","true");
	}else{
	SendMessage($chat_id,"🚫 متاسفانه خطایی رخ داده است.","html","true");
	}
	}
	//===========
	elseif(preg_match('/^\/([Uu]n[Bb]an) (.*)/',$text) and $from_id == $admin and $type == "private"){
	preg_match('/^\/([Uu]n[Bb]an) (.*)/',$text,$match);
	$id = json_decode(file_get_contents("https://api.pwrtelegram.xyz/bot$TOKEN/getChat?chat_id=".$match[2]));
	$user = $id->result->id;
	if($user != null){
	$rep = str_replace("$user\n",'',$block);
	save("other/access/Block-List.txt",$rep);
	SendMessage($chat_id,"✅کاربر مورد نظر آنبلاک شد.","html","true");
	SendMessage($user,"✅شما آنبلاک شدین.","html","true");
	}else{
	SendMessage($chat_id,"🚫 متاسفانه خطایی رخ داده است.","html","true");
	}
	}
	//==========
	//End Button Source
	elseif(file_exists("other/button/feed/$text.txt") and $type == "private"){
	$rss = file_get_contents($_rss);
	SendMessage($chat_id,$_rss,"html","true");
	}
	elseif(file_exists("other/button/sticker/$text.txt") and $type == "private"){
	SendSticker($chat_id,$_sticker);
	}
	elseif(file_exists("other/button/video/$text.txt") and $type == "private"){
	SendVideo($chat_id,$_video,$_caption);
	}
	elseif(file_exists("other/button/voice/$text.txt") and $type == "private"){
	SendVoice($chat_id,$_voice,'',$_caption);
	}
	elseif(file_exists("other/button/file/$text.txt") and $type == "private"){
	SendDocument($chat_id,$_file,'',$_caption);
	}
	elseif(file_exists("other/button/music/$text.txt") and $type == "private"){
	SendAudio($chat_id,$_music,'',$_caption);
	}
	elseif(file_exists("other/button/photo/$text.txt") and $type == "private"){
	SendPhoto($chat_id,$_photo,'',$_caption);
	}
	elseif(file_exists("other/button/forward/$text.txt") and $type == "private"){
	ForwardMessage($chat_id,$admin,$_forward);
	}
	elseif(file_exists("other/button/text/$text.txt") and $type == "private"){
	SendMessage($chat_id,$_text,"html","true");
	}
	//===========
	elseif(file_exists("other/wordlist/$text.txt") and $type == "private"){
	SendMessage($chat_id,$_word,"html","true");
	}
	//===========
	elseif($sticker_id != null and $sticker == "⛔️" and $from_id != $admin and $type == "private"){
	SendMessage($chat_id,"<b>Locked Sticker !!</b>","html","true");
	}
	elseif($video_id != null and $film == "⛔️" and $from_id != $admin and $type == "private"){
	SendMessage($chat_id,"<b>Locked Video !!</b>","html","true");
	}
	elseif($voice_id != null and $voice == "⛔️" and $from_id != $admin and $type == "private"){
	SendMessage($chat_id,"<b>Locked Voice !!</b>","html","true");
	}
	elseif($file_id != null and $file == "⛔️" and $from_id != $admin and $type == "private"){
	SendMessage($chat_id,"<b>Locked Document !!</b>","html","true");
	}
	elseif($music_id != null and $music == "⛔️" and $from_id != $admin and $type == "private"){
	SendMessage($chat_id,"<b>Locked Audio !!</b>","html","true");
	}
	elseif($photo2_id != null and $aks == "⛔️" and $from_id != $admin and $type == "private"){
	SendMessage($chat_id,"<b>Locked Photo !!</b>","html","true");
	}
	elseif($photo1_id != null and $aks == "⛔️" and $from_id != $admin and $type == "private"){
	SendMessage($chat_id,"<b>Locked Photo !!</b>","html","true");
	}
	elseif($photo0_id != null and $aks == "⛔️" and $from_id != $admin and $type == "private"){
	SendMessage($chat_id,"<b>Locked Photo !!</b>","html","true");
	}
	elseif($forward_from != null and $forward == "⛔️" and $from_id != $admin and $type == "private"){
	SendMessage($chat_id,"<b>Locked Forward !!</b>","html","true");
	}
	elseif($link == "⛔️" and $from_id != $admin and preg_match('/^([Hh]ttp|[Hh]ttps)(.*)/',$text) and $type == "private"){
	SendMessage($chat_id,"<b>Locked Url !!</b>","html","true");
	}
	//============
	elseif($data == "start chat"){
	$rep = strchr($text_call,"ID:");
	$rep = str_replace("ID: ",'',$rep);
	$fir = getChat($rep);
	$txxt = file_get_contents('other/access/Chat.txt');
    $pmembersid= explode("\n",$txxt);
    if (!in_array($rep,$pmembersid)){
      $aaddd = file_get_contents('other/access/Chat.txt');
      $aaddd .= $rep."\n";
		file_put_contents('other/access/Chat.txt',$aaddd);
    }
	AnswerCallbackQuery($data_id,"✅چت با $fir آغاز شد.");
	EditMessageText($chatid,$message_id_call,"<i>✅چت آغاز شد.</i>",'html','true');
	SendMessage($rep,"📪 چت آغاز شد.
	📪 میتوانید چت کردن رو شروع کنید.","html","true");
	}
	//============
	elseif($data == "end chat"){
	$rep = strchr($text_call,"ID:");
	$rep = str_replace("ID: ",'',$rep);
	AnswerCallbackQuery($data_id,"🔴 درخواست چت رد شد.");
	EditMessageText($chatid,$message_id_call,"<i>🔴چت رد شد.</i>",'html','true');
	SendMessage($rep,"🔴 متاسفانه درخواست چت رد شد.","html","true");
	}
	//============
	elseif($data == "block chat"){
	$rep = strchr($text_call,"ID:");
	$rep = str_replace("ID: ",'',$rep);
	$txxt = file_get_contents('other/access/Block-List.txt');
    $pmembersid= explode("\n",$txxt);
    if (!in_array($rep,$pmembersid)){
      $aaddd = file_get_contents('other/access/Block-List.txt');
      $aaddd .= $rep."\n";
		file_put_contents('other/access/Block-List.txt',$aaddd);
    }
	AnswerCallbackQuery($data_id,"🚫شخص مورد نظر بلاک شد.");
	EditMessageText($chatid,$message_id_call,"<i>🚫بلاک شد.</i>",'html','true');
	SendMessage($rep,"🚫 شما از ربات بلاک شدید.","html","true");
	}
	//============
	elseif($pm_resani != "⛔️" and $from_id != $admin and $type == "private"){
	if($_feed == null){
	ForwardMessage($admin,$chat_id,$message_id);
	}else{
	ForwardMessage($_feed,$chat_id,$message_id);	
	}
	SendChatAction($chat_id,"typing");	
	SendMessage($chat_id,$_send,"html","true",$button_dokme_ha);
	}
	//============
	elseif (strpos($chat , "$from_id") !== false and $type == "private" and $from_id != $admin) {
	if($_feed == null){
	ForwardMessage($admin,$chat_id,$message_id);
	}else{
	ForwardMessage($_feed,$chat_id,$message_id);
	}
	SendMessage($chat_id,$_send,"html","true",$button_dokme_ha);
	}
	//============
	elseif($pm_resani == "⛔️" && $type == "private" && $from_id != $admin){
		if($username == null){
		$username = 'None';
		}else{
		$username = "@$username";
		}
		if($_feed == null){
		SendMessage($admin,"<b> 📪 Request Chat</b>
		<code>Forward 👇</code>
		<code>------------------------------</code>
		<b>First:</b> $first
		<b>UserName:</b> $username
		<b>ID:</b> $from_id","html","true",$button_request);
		ForwardMessage($admin,$chat_id,$message_id);
		}else{
		SendMessage($_feed,"<b> 📪 Request Chat</b>
		<code>Forward 👇</code>
		<code>------------------------------</code>
		<b>First:</b> $first
		<b>UserName:</b> $username
		<b>ID:</b> $from_id","html","true",$button_request);
		ForwardMessage($_feed,$chat_id,$message_id);
		}
			SendMessage($chat_id,"✅درخواست چت ارسال شد.صبر کنید تا قبول شود.","html","true",$button_dokme_ha);
	}
	//==============
	elseif(preg_match('/^\/([Ss][Ee][Tt][Ff][Ee][Ee][Dd])/',$text) and $from_id == $admin){
	if($type != "private"){
	save("other/setting/feed.txt",$chat_id);
	SendMessage($chat_id,"✅این گروه برای پشتیبانی تنظیم شد.","html","true");
	}else{
	SendMessage($chat_id,"🚫دستور فقط برای گروه میباشد.","html","true");
	}
	}
	elseif(preg_match('/^\/([Dd][Ee][Ll][Ff][Ee][Ee][Dd])/',$text) and $from_id == $admin){
	if($type == "private"){
	unlink("other/setting/feed.txt");
	SendMessage($chat_id,"✅از این پس پیام ها به ادمین ارسال میشن.","html","true");
	}else{
	SendMessage($chat_id,"🚫دستور فقط برای پی وی بات میباشد.","html","true");
	}
	}
	//==============
	elseif($reply == null and $type == 'private'){
	SendMessage($chat_id,"❌دستور نامشخص...","html","true");
	}
	//============
	elseif($reply == null and $type != 'private'){
return false;
}
	//============
	elseif($reply != null && $text == '/ban' and $from_id == $admin || strpos($adminlist , "$from_id") !== false){
	$txxt = file_get_contents('other/access/Block-List.txt');
    $pmembersid= explode("\n",$txxt);
    if (!in_array($reply,$pmembersid)){
      $aaddd = file_get_contents('other/access/Block-List.txt');
      $aaddd .= $reply."\n";
		file_put_contents('other/access/Block-List.txt',$aaddd);
    }
	SendMessage($chat_id,"🚫 کاربر مورد نظر بلاک شد.","html","true");
	SendMessage($reply,"🚫 شما بلاک شدین.","html","true");
	}
	//==============
	elseif($reply != null && $text == '/unban' and $from_id == $admin || strpos($adminlist , "$from_id") !== false){
	$rep = str_replace("$reply\n",'',$block);
	save("other/access/Block-List.txt",$rep);
	SendMessage($chat_id,"✅کاربر مورد نظر آنبلاک شد.","html","true");
	SendMessage($reply,"✅شما آنبلاک شدین.","html","true");
	}
	//==============
	elseif($reply != null && $text == '/share' and $from_id == $admin){
	if($_cname == null){
	SendMessage($chat_id,"<i>❌شماره شما ثبت نشده.</i>","html","true");
	}else{
	SendContact($reply,$_cname,$_number);
	SendMessage($chat_id,"✅شماره شما ارسال شد.","html","true");
	}
	}
	//==============
	elseif($reply != null && $from_id == $admin || strpos($adminlist , "$from_id") !== false){
	if($pm_forward == "✅"){
	ForwardMessage($reply,$chat_id,$message_id);
	}
	elseif($sticker_id != null){
	SendSticker($reply,$sticker_id);
	}
	elseif($video_id != null){
	SendVideo($reply,$video_id,$caption);
	}
	elseif($voice_id != null){
	SendVoice($reply,$voice_id,'',$caption);
	}
	elseif($file_id != null){
	SendDocument($reply,$file_id,'',$caption);
	}
	elseif($music_id != null){
	SendAudio($reply,$music_id,'',$caption);
	}
	elseif($photo2_id != null){
	SendPhoto($reply,$photo2_id,'',$caption);
	}
	elseif($photo1_id != null){
	SendPhoto($reply,$photo1_id,'',$caption);
	}
	elseif($photo0_id != null){
	SendPhoto($reply,$photo0_id,'',$caption);
	}
	elseif($text != null){
	SendMessage($reply,$text,"html","true");
	}
	SendMessage($chat_id,"📪پیام مورد نظر ارسال شد","html","true");
	}
	
	
	// Add User
unlink("error_log");
$txxt = file_get_contents('other/access/Group.txt');
    $pmembersid= explode("\n",$txxt);
    if (!in_array($chat_id,$pmembersid)){
      $aaddd = file_get_contents('other/access/Group.txt');
      $aaddd .= $chat_id."\n";
	  if ($chat_id != $from_id){
		file_put_contents('other/access/Group.txt',$aaddd);
	  }
    }
$txxt = file_get_contents('other/access/Member.txt');
    $pmembersid= explode("\n",$txxt);
    if (!in_array($chat_id,$pmembersid)){
      $aaddd = file_get_contents('other/access/Member.txt');
      $aaddd .= $chat_id."\n";
	  if ($chat_id == $from_id){
		file_put_contents('other/access/Member.txt',$aaddd);
	  }
    }
	$txxt = file_get_contents('../../admin0098/access/Member-All-Bot.txt');
    $pmembersid= explode("\n",$txxt);
    if (!in_array($chat_id,$pmembersid)){
      $aaddd = file_get_contents('../../admin0098/access/Member-All-Bot.txt');
      $aaddd .= $chat_id."\n";
	  if ($chat_id == $from_id){
		file_put_contents('../../admin0098/access/Member-All-Bot.txt',$aaddd);
	  }
    }
	$txxt = file_get_contents('other/access/UserName.txt');
    $pmembersid= explode("\n",$txxt);
    if (!in_array("@".$username,$pmembersid)){
      $aaddd = file_get_contents('other/access/UserName.txt');
      $aaddd .= "@".$username."\n";
	  if ($username != null){
		file_put_contents('other/access/UserName.txt',$aaddd);
	  }
    }
    unlink("error_log");
    /*
Made By:
@AmirrezaIR
Channels :
Amirreza
*/
?>
