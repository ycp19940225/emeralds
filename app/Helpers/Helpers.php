<?php
/**
 * 加载静态资源
 *
 * @param string $file 所要加载的资源
 */
use App\Services\Admin\SC;
if ( ! function_exists('loadStatic'))
{
    function loadStatic($file)
    {
        if( ! $file) return Request::root().'/assets/';
        $realFile = public_path().'/assets/'.$file;
        if( ! file_exists($realFile)) return '';
        $filemtime = filemtime($realFile);
        return Request::root().'/assets/'.$file.'?v='.$filemtime;
    }
}
/**
 * 自定义加密函数
 *
 * @param string $file 所要加载的资源
 */
if ( ! function_exists('get_md5_password'))
{
    function get_md5_password($password)
    {
        if ($password) {
            return md5($password.sha1($password).$password);
        }else{
            return '';
        }
    }
}
/**
 * 自定义消息数组
 *
 */
if ( ! function_exists('msg'))
{
    function msg($code = 200,$msg='',$array = [])
    {
       return ['code' =>$code,'msg'=>$msg,'data'=>$array];
    }
}
/**
 * 检测用户拥有的角色
 */
if ( ! function_exists('check_roles'))
{
    function check_roles($roles,$user)
    {
        foreach ($roles as $k=>$v){
            foreach ($user->roles as $role){
                if($v['id'] == $role->id){
                    $roles[$k]['checked'] = 'checked';
                    break;
                }else{
                    $roles[$k]['checked'] = '';
                }
            }
        }
        return $roles;
    }
}
/**
 * 获取用户信息
 */
if ( ! function_exists('get_user'))
{
    function get_user()
    {
       return SC::getLoginSession();
    }
}
/**
 * 检测权限
 */
if ( ! function_exists('checkPri')){
    function checkPri($url){
        if($url == 'admin' || $url == 'admin/main'){//首页不验证
            return false;
        }
        $pris = SC::getUserAccess();
        $pris_id = SC::getLoginSession();
        if(count($pris)>0 || count($pris) == 0){
            if(!is_array($url)){
                $url = explode('/',$url);
            }
            if($pris_id->id === 1){
                return false;
            }
            foreach ($pris as $pri){
                if(strtolower($url[0]) == strtolower($pri->module_name) && strtolower($url[1]) == strtolower($pri->controller) && strtolower($url[2]) == strtolower($pri->action_name)){
                    return false;
                }
            }
        }
        return true;
    }
}
/**
 * 检测菜单
 */
if ( ! function_exists('checkMenu')){
    function checkMenu($nav){
        $pris = SC::getUserAccess();
        $pris_id = SC::getLoginSession();
        $menu = [];
        if($pris_id->id == 1){  //超级管理员所有菜单
            return $nav;
        }
        foreach($nav as  $k => $v){
            foreach ($v['access'] as $item){
                $url = $item['access'];
                if(!is_array($url)){  //切割 $url
                    $url = explode('/',$url);
                }
                foreach ($pris as $k2 => $pri){
                    if(strtolower($url[0]) == strtolower($pri->module_name) && strtolower($url[1]) == strtolower($pri->controller) && strtolower($url[2]) == strtolower($pri->action_name)){  //比较权限
                        $menu[$k]['name'] = $v['name'] ;
                        $menu[$k]['icon'] = $v['icon'] ;
                        $menu[$k]['access'][$k2]['name'] = $item['name'] ;
                        $menu[$k]['access'][$k2]['access'] = $item['access'] ;
                        $menu[$k]['access'][$k2]['icon'] = $item['icon'] ;
                    }
                }
            }

        }
        return $menu;
    }
}


/**
 * 检测分类下拉框选中
 */
if ( ! function_exists('check_select')){
    function check_select($data,$all){
        $res = [];
        foreach ($all as $k=>$v){
            $res[$k]=$v;
            if($data->cat_id == $v->id){
                $res[$k]['selected'] = 'selected="selected"';
            }
        }
        return $res;
    }
}
/**
 * 检测代理商状态
 */
if ( ! function_exists('check_status')){
    function check_status($data){
        if($data == 0){
            echo '<span style="color: red">未审核</span>';
        }
        else{
            echo '<span style="color: green">通过审核</span>';
        }
    }
}

/**
 * 时间人性化
 *
 * @param int $time 写作的时间
 * @return string
 */
if( ! function_exists('showWriteTime'))
{
    function showWriteTime($time)
    {
        $interval = time() - $time;
        $format = array(
            '31536000'  => '年',
            '2592000'   => '个月',
            '604800'    => '星期',
            '86400'     => '天',
            '3600'      => '小时',
            '60'        => '分钟',
            '1'         => '秒'
        );
        foreach($format as $key => $value)
        {
            $match = floor($interval / (int) $key );
            if(0 != $match)
            {
                return $match . $value . '前';
            }
        }
        return date('Y-m-d', $time);
    }
}

/**
 * 加载静态资源(图片)
 *
 * @param string $file 所要加载的资源
 */
if ( ! function_exists('loadStaticImg'))
{
    function loadStaticImg($file = '')
    {
        if(empty($file)) return '';
        $realFile = public_path('uploads/').$file;
        if( ! file_exists($realFile)) return '';
        return Request::root().'/uploads/'.$file;
    }
}
/**
 * 去除输入框空格，回车，替换中文逗号
 *
 * @param string $file 所要加载的资源
 */
if ( ! function_exists('replace_others'))
{
    function replace_others($data)
    {
        return preg_replace("/(\n)|(\s)|(\t)|(\')|(')|(，)|(、)/" ,',' ,$data);
    }
}


