<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//Dynamic add Javascript into file to header on page

if(!function_exists('add_header_js')){
    function add_header_js($file='',$path = '')
   {
        $str = '';
        $ci = &get_instance();
        $header_js  = $ci->config->item('header_js'); #sama
        $header_js_path = $ci->config->item('header_js_path'); #sama

        if(empty($file)){
            return;
        }
        if(is_array($file)){#sama
            if(!is_array($file) && count($file) <= 0){#sama
                return;#sama
            }
            foreach($file AS $item){#sama
                $header_js[] = $item;#sama
            }
            $ci->config->set_item('header_js',$header_js);#sama
            
        }else{
            $str = $file;#sama
            $header_js[] = $str;#sama
            $ci->config->set_item('header_js',$header_js);#sama
        }

        if(is_array($path)){#sama
            if(!is_array($path) && count($path) <= 0){#sama
                return;#sama
            }
            foreach($path AS $item_path){#sama
                $header_js_path[] = $item_path;#sama
            }
            $ci->config->set_item('header_js_path',$header_js_path);#sama
            
        }else{
            $str = $path;#sama
            $header_js_path[] = $str;#sama
            $ci->config->set_item('header_js_path',$header_js_path);#sama
        }
    }
}

if(!function_exists('add_footer_js')){
    function add_footer_js($file='',$path ='')
    {
        $str = '';
        $ci = &get_instance();
        $footer_js  = $ci->config->item('footer_js'); #sama
        $footer_js_path = $ci->config->item('footer_js_path'); #sama

        if(empty($file)){
            return;
        }
        if(is_array($file)){#sama
            if(!is_array($file) && count($file) <= 0){#sama
                return;#sama
            }
            foreach($file AS $item){#sama
                $footer_js[] = $item;#sama
            }
            $ci->config->set_item('footer_js',$footer_js);#sama
            
        }else{
            $str = $file;#sama
            $footer_js[] = $str;#sama
            $ci->config->set_item('footer_js',$footer_js);#sama
        }

        if(is_array($path)){#sama
            if(!is_array($path) && count($path) <= 0){#sama
                return;#sama
            }
            foreach($path AS $item_path){#sama
                $footer_js_path[] = $item_path;#sama
            }
            $ci->config->set_item('footer_js_path',$footer_js_path);#sama
            
        }else{
            $str = $path;#sama
            $footer_js_path[] = $str;#sama
            $ci->config->set_item('footer_js_path',$footer_js_path);#sama
        }
    }
}

if(!function_exists('put_headers_js')){
    function put_headers_js()
    {
        $str = '';
        $ci = &get_instance();
        $header_js  = $ci->config->item('header_js');
        $header_js_path = $ci->config->item('header_js_path');


         if(is_array($header_js_path)){
            if(!is_array($header_js_path) && count($header_js_path) <= 0){
                return;
            }
            $j = count($header_js_path);
            for($i = 0; $i < $j; $i++){
                $str .= '<script type="text/javascript" src="'.base_url().'assets/'.$header_js_path[$i].'/'.$header_js[$i].'"></script>'."\n";    
            }
        }else{
            $path = $header_js_path;
            $j = count($path);
            for($i = 0; $i < $j; $i++){
                $str .= '<script type="text/javascript" src="'.base_url().'assets/'.$path[$i].'/'.$header_js[$i].'"></script>'."\n";
            }
        }
        return $str;
    }
}

if(!function_exists('put_footers_js')){
    function put_footers_js()
    {
        $str = '';
        $ci = &get_instance();
        $footer_js  = $ci->config->item('footer_js');
        $footer_js_path = $ci->config->item('footer_js_path');


         if(is_array($footer_js_path)){
            if(!is_array($footer_js_path) && count($footer_js_path) <= 0){
                return;
            }
            $j = count($footer_js_path);
            for($i = 0; $i < $j; $i++){
                $str .= '<script type="text/javascript" src="'.base_url().'assets/'.$footer_js_path[$i].'/'.$footer_js[$i].'"></script>'."\n";    
            }
        }else{
            $path = $footer_js_path;
            $j = count($path);
            for($i = 0; $i < $j; $i++){
                $str .= '<script type="text/javascript" src="'.base_url().'assets/'.$path[$i].'/'.$footer_js[$i].'"></script>'."\n";
            }
        }
        return $str;
    }
}