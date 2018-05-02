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
 * laravel加密函数
 *
 * @param string $file 所要加载的资源
 */
if ( ! function_exists('get_hash_password'))
{
    function get_hash_password($password)
    {
        if ($password) {
            return Hash::make($password);
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
        elseif($data == 1){
            echo '<span style="color: green">通过审核</span>';
        }
        elseif($data == 2){
            echo '<span style="color: #80494d">未通过审核</span>';
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

/**
 * 生成编码
 *
 */
if ( ! function_exists('generate_code'))
{
    function generate_code($pre)
    {
        return $pre.time().rand(1,9);
    }
}

if(!function_exists('buildSelect')){
    function  buildSelect($data,$select_id='',$select_name,$valueFieldName,$textFieldName,$selectValue=''){
        $select = "<select class=\"form-control \"  id='$select_id' name ='$select_name'> <option value=''>请选择&nbsp;--</option>";
        foreach($data as $k => $v){
            $value = $v[$valueFieldName];   //id循环的id
            $text = $v[$textFieldName];    //id对应的名称
            if($selectValue && $selectValue ==$value ){
                $selected = 'selected ="selected"';
            }else{
                $selected ='';
            }
            $select .= '<option ' .$selected. ' value="' .$value.'">'.$text. '</option>';
        }
        $select .= '</select>';
        echo $select;
    }
}
if(!function_exists('buildSelectMore')){
    function  buildSelectMore($data,$select_id='',$select_name,$valueFieldName,$textFieldName,$selectValue = []){
        $select = "<select class=\"form-control \" multiple='multiple' id='$select_id' name ='$select_name'>";
        foreach($data as $k => $v){
            $value = $v[$valueFieldName];   //id循环的id
            $text = $v[$textFieldName];    //id对应的名称
            $selected ='';
            foreach ( $selectValue as $k1=>$v1){
                if( $v1['id'] == $value ){
                    $selected = 'selected ="selected"';
                    break;
                }else{
                    $selected ='';
                }
            }
            $select .= '<option ' .$selected. ' value="' .$value.'">'.$text. '</option>';
        }
        $select .= '</select>';
        echo $select;
    }
}


/**
 * API格式化
 *
 */
if ( ! function_exists('API_MSG'))
{
    function API_MSG($data ='',$msg="",$status='true',$code='200')
    {
        return [
            'status' => $status,
            'code'   => $code,
            'msg'   => $msg,
            'data'   => $data
        ];
    }
}

/**
 * 检测商品状态
 */
if ( ! function_exists('check_goods_status')){
    function check_goods_status($data){
        if($data == 0){
            echo '<span style="color: red">未上架</span>';
        }
        if($data == 1){
            echo '<span style="color: green">出售中</span>';
        }
        if($data == 2){
            echo '<span style="color: yellow">已出售</span>';
        }
    }
}

/**
 * 检测商品审核
 */
if ( ! function_exists('check_goods_check')){
    function check_goods_check($data){
        if($data == 0){
            echo '<span style="color: red">未审核</span>';
        }
        if($data == 1){
            echo '<span style="color: green">通过审核</span>';
        }
        if($data == 2){
            echo '<span style="color: yellow">未通过审核</span>';
        }
    }
}

/**
 * 检测订单状态
 */
if ( ! function_exists('check_order_status')){
    function check_order_status($data){
        if($data == 0){
            echo '<span style="color: green">在路上</span>';
        }
        if($data == 1){
            echo '<span style="color: yellow">已结缘</span>';
        }
        if($data == 2){
            echo '<span style="color: red">已退回</span>';
        }
    }
}

/**
 * 短信发送（凌凯）
 */
if ( ! function_exists('sendSms')){
    function sendSms($telphone,$message){
        //短信接口用户名 $uid
        $uid = 'CQLKY01271';
        //短信接口密码 $passwd
        $passwd = 'ky@123';


        $msg = rawurlencode(mb_convert_encoding($message, "gb2312", "utf-8"));

        $gateway = "http://yzm.mb345.com/ws/BatchSend2.aspx?CorpID={$uid}&Pwd={$passwd}&Mobile={$telphone}&Content={$msg}&Cell=&SendTime=";

        $result = curl($gateway);
        return $result;
    }
}

/**
 * 短信发送（凌凯）
 */
if ( ! function_exists('curl')){
    function curl($url,$data=[],$method='GET'){
        $ch = curl_init();   //1.初始化
        curl_setopt($ch, CURLOPT_URL, $url); //2.请求地址
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);//3.请求方式
        //4.参数如下
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);//https
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)');//模拟浏览器
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_AUTOREFERER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER,array('Accept-Encoding: gzip, deflate'));//gzip解压内容
        curl_setopt($ch, CURLOPT_ENCODING, 'gzip,deflate');
        if($method=="POST"){//5.post方式的时候添加数据
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        }
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $tmpInfo = curl_exec($ch);//6.执行
        if (curl_errno($ch)) {//7.如果出错
            return curl_error($ch);
        }
        curl_close($ch);//8.关闭
        return $tmpInfo;
    }
}