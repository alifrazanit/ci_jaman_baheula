<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

//Dynamically add CSS files to header page
if(!function_exists('add_header_css')){
    function add_header_css($file='',$path = '')
    {
        $str = '';
        $ci = &get_instance();
        $header_css  = $ci->config->item('header_css'); #sama
        $header_css_path = $ci->config->item('header_css_path'); #sama

        if(empty($file)){
            return;
        }
        if(is_array($file)){#sama
            if(!is_array($file) && count($file) <= 0){#sama
                return;#sama
            }
            foreach($file AS $item){#sama
                $header_css[] = $item;#sama
            }
            $ci->config->set_item('header_css',$header_css);#sama
            
        }else{
            $str = $file;#sama
            $header_css[] = $str;#sama
            $ci->config->set_item('header_css',$header_css);#sama
        }

        if(is_array($path)){#sama
            if(!is_array($path) && count($path) <= 0){#sama
                return;#sama
            }
            foreach($path AS $item_path){#sama
                $header_css_path[] = $item_path;#sama
            }
            $ci->config->set_item('header_css_path',$header_css_path);#sama
            
        }else{
            $str = $path;#sama
            $header_css_path[] = $str;#sama
            $ci->config->set_item('header_css_path',$header_css_path);#sama
        }
    }
}

//Dynamically add CSS files to header page
if(!function_exists('add_footer_css')){
    function add_footer_css($file='',$path = '')
   {
        $str = '';
        $ci = &get_instance();
        $footer_css  = $ci->config->item('footer_css'); #sama
        $footer_css_path = $ci->config->item('footer_css_path'); #sama

        if(empty($file)){
            return;
        }
        if(is_array($file)){#sama
            if(!is_array($file) && count($file) <= 0){#sama
                return;#sama
            }
            foreach($file AS $item){#sama
                $footer_css[] = $item;#sama
            }
            $ci->config->set_item('footer_css',$footer_css);#sama
            
        }else{
            $str = $file;#sama
            $footer_css[] = $str;#sama
            $ci->config->set_item('footer_css',$footer_css);#sama
        }

        if(is_array($path)){#sama
            if(!is_array($path) && count($path) <= 0){#sama
                return;#sama
            }
            foreach($path AS $item_path){#sama
                $footer_css_path[] = $item_path;#sama
            }
            $ci->config->set_item('footer_css_path',$footer_css_path);#sama
            
        }else{
            $str = $path;#sama
            $footer_css_path[] = $str;#sama
            $ci->config->set_item('footer_css_path',$footer_css_path);#sama
        }
    }
}

if(!function_exists('put_headers_css')){
    function put_headers_css()
    {
        $str = '';
        $ci = &get_instance();
        $header_css  = $ci->config->item('header_css');
        $header_css_path = $ci->config->item('header_css_path');


         if(is_array($header_css_path)){
            if(!is_array($header_css_path) && count($header_css_path) <= 0){
                return;
            }
            $j = count($header_css_path);
            for($i = 0; $i < $j; $i++){
                $str .= '<link rel="stylesheet" type="text/css" href="'.base_url().'assets/'.$header_css_path[$i].'/'.$header_css[$i].'">'."\n";
            }
        }else{
            $path = $header_css_path;
            $j = count($path);
            for($i = 0; $i < $j; $i++){
                $str .= '<link rel="stylesheet" type="text/css" href="'.base_url().'assets/'.$path[$i].'/'.$header_css[$i].'">'."\n";
            }
        }
        return $str;
    }
}

if(!function_exists('put_footers_css')){
    function put_footers_css()
     {
        $str = '';
        $ci = &get_instance();
        $footer_css  = $ci->config->item('footer_css');
        $footer_css_path = $ci->config->item('footer_css_path');


         if(is_array($footer_css_path)){
            if(!is_array($footer_css_path) && count($footer_css_path) <= 0){
                return;
            }
            $j = count($footer_css_path);
            for($i = 0; $i < $j; $i++){
                 $str .= '<link rel="stylesheet" type="text/css" href="'.base_url().'assets/'.$footer_css_path[$i].'/'.$footer_css[$i].'">'."\n";   
            }
        }else{
            $path = $footer_css_path;
            $j = count($path);
            for($i = 0; $i < $j; $i++){
                $str .= '<link rel="stylesheet" type="text/css" href="'.base_url().'assets/'.$path[$i].'/'.$footer_css[$i].'">'."\n";
            }
        }
        return $str;
    }
}
