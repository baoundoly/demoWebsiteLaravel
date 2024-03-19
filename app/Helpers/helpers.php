<?php

use App\Models\MenuPermission;
use App\Models\MenuRoute;

// if (!function_exists('toRawSql')) {
//     function toRawSql($query)
//     {
//         dd(vsprintf(str_replace(['?'], ['\'%s\''], $query->toSql()), $query->getBindings()));
//     }
// }


if (!function_exists('toRawSql')) {
    function toRawSql($query) {
        $format = $query->toSql();
        $replacements = $query->getBindings();
        $to_raw_sql = preg_replace_callback('/\?/', function($matches) use (&$replacements) {
            return array_shift($replacements);
        }, $format);
        dd($to_raw_sql);
    }
}

if (!function_exists('dddd')) {
    function dddd($query)
    {
        dd($query->toArray());
    }
}

if (!function_exists('en2bn')) {
	function en2bn($number)
	{
		$en = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0", "AM", "PM", "am", "pm", "Jan", "Feb", "Mar", "Apr", "May", "Jun", 'Jul', "Aug", "Sep", "Oct", "Nov", "Dec", "January", "February", "March", "April", "May", "June", 'July', "August", "September", "October", "November", "December", "Saturday", "Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Weekend", "day", "week", "month", "year");
		$bn = array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০", "এ.এম", "পি.এম", "এ.এম", "পি.এম", "জানুয়ারী", "ফেব্রুয়ারী", "মার্চ", "এপ্রিল", "মে", "জুন", "জুলাই", "অগাস্ট", "সেপ্টেম্বর", "অক্টোবর", "নভেম্বর", "ডিসেম্বর", "জানুয়ারী", "ফেব্রুয়ারী", "মার্চ", "এপ্রিল", "মে", "জুন", "জুলাই", "অগাস্ট", "সেপ্টেম্বর", "অক্টোবর", "নভেম্বর", "ডিসেম্বর", "শনিবার", "রবিবার", "সোমবার", "মঙ্গলবার", "বুধবার", "বৃহস্পতিবার", "শুক্রবার", "সাপ্তাহিক ছুটি", "দিন", "সপ্তাহ", "মাস", "বছর");

     return str_replace($en, $bn, $number);
	}
}

if (!function_exists('bn2en')) {
    function bn2en($number)
    {
        $en = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0", "AM", "PM", "am", "pm", "Jan", "Feb", "Mar", "Apr", "May", "Jun", 'Jul', "Aug", "Sep", "Oct", "Nov", "Dec", "January", "February", "March", "April", "May", "June", 'July', "August", "September", "October", "November", "December", "Saturday", "Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Weekend", "day", "week", "month", "year");
        $bn = array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০", "এ.এম", "পি.এম", "এ.এম", "পি.এম", "জানুয়ারী", "ফেব্রুয়ারী", "মার্চ", "এপ্রিল", "মে", "জুন", "জুলাই", "অগাস্ট", "সেপ্টেম্বর", "অক্টোবর", "নভেম্বর", "ডিসেম্বর", "জানুয়ারী", "ফেব্রুয়ারী", "মার্চ", "এপ্রিল", "মে", "জুন", "জুলাই", "অগাস্ট", "সেপ্টেম্বর", "অক্টোবর", "নভেম্বর", "ডিসেম্বর", "শনিবার", "রবিবার", "সোমবার", "মঙ্গলবার", "বুধবার", "বৃহস্পতিবার", "শুক্রবার", "সাপ্তাহিক ছুটি", "দিন", "সপ্তাহ", "মাস", "বছর");

     return str_replace($bn, $en, $number);
    }
}

if (!function_exists('isAdmin')) {
    function isAdmin()
    {
        return Str::startsWith(request()->path(), 'admin');
    }
}

if (!function_exists('getGuard')) {
    function getGuard()
    {
        if (isAdmin()) {
            return 'admin';
        } else {
            return 'member';
        }
    }
}

if (!function_exists('activeStatus')) {
    function activeStatus($value)
    {
        if ($value == 1) {
            $output = '<span class="badge badge-success">' . __('Active') . '</span>';
        } else {
            $output = '<span class="badge badge-danger">' . __('Inactive') . '</span>';
        }
        return $output;
    }
}

if (!function_exists('sorpermission')) {
    function sorpermission($route)
    {
        $user_role = Auth::user()->user_roles->pluck('role_id')->toArray();

        if(in_array(1, $user_role)){
            return true;        
        }else{
            $mainmenuroute = MenuRoute::where('route',$route)->first();
            if($mainmenuroute != null){
                $permission=MenuPermission::whereIn('role_id',$user_role)->where('menu_from', 'menu_route')->where('permitted_route',$route)->first();
                if($permission){
                    return true;
                }else{
                    return false;
                }
            }else{
                return true;
            }
        }
    }
}

if (!function_exists('fileExist')) {
    function fileExist($file_arr)
    {
        if(@$file_arr['type']=='favicon'){
            if(@$file_arr['url'] && \Storage::exists('public/favicon/'.@$file_arr['url'])){
                return asset('storage/favicon/'.$file_arr['url']);
            }
            return asset('common/images/default_favicon.png');
        }
        if(@$file_arr['type']=='logo'){
            if(@$file_arr['url'] && \Storage::exists('public/logo/'.@$file_arr['url'])){
                return asset('storage/logo/'.$file_arr['url']);
            }
            return asset('common/images/default_logo.png');
        }
        if(@$file_arr['type']=='profile'){
            if(@$file_arr['url'] && \Storage::exists('public/profile/'.@$file_arr['url'])){
                return asset('storage/profile/'.$file_arr['url']);
            }
            return asset('common/images/default_profile.png');
        }
        if(@$file_arr['type']=='topic_pdf'){
            if(@$file_arr['url'] && \Storage::exists('public/topic/pdf/'.@$file_arr['url'])){
                return asset('storage/topic/pdf/'.$file_arr['url']);
            }
            return asset('common/pdf/no_pdf_found.pdf');
        }
        if(@$file_arr['type']=='course'){
            if(@$file_arr['url'] && \Storage::exists('public/course/'.@$file_arr['url'])){
                return asset('storage/course/'.$file_arr['url']);
            }
            return asset('common/images/default_course.png');
        }

    } 
}