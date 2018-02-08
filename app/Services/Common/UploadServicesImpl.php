<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/6/3
 * Time: 17:38
 */

namespace App\Services\Common;



use App\Services\Ifs\Common\UploadServices;
use Storage;

class UploadServicesImpl implements UploadServices
{
    protected $disk;
    public function __construct()
    {
        $this->disk = Storage::disk('public');
    }

    public function uploadImg($file_name,$uploadFiles)
    {
        $time = date('Y-m-d');
        $filename = $this->disk->put($file_name.'/'.$time, $uploadFiles);//上传
        if(!$filename) {
            return false;
        }
        return $filename;
    }

    public function uploadVideo($string, $files)
    {
        $ext = $files->guessClientExtension();
        $path_urls = $string.'/'.date('Y-m-d').'/';
        $path = '/uploads/'.$path_urls;

        $destinationPath = public_path() . $path;

        $filename = $files->getClientOriginalName();

        $newfile = md5(date('YmdHis').$filename).'.'.$ext;

        $res = $files->move($destinationPath, $newfile);

        return $path_urls.$newfile;
    }

    public function upload($request){
        $type=$request->file('pic');
        header("Access-Control-Allow-Origin: *");
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $ret=array('strings'=>$_POST,'error'=>'0');
            $fs=array();
            foreach ( $_FILES as $name=>$file ) {
                $fn=$file['name'];
                $ft=strrpos($fn,'.',0);
                $fm=substr($fn,0,$ft);//文件名
                $fe=substr($fn,$ft); //后缀
                $ytime = Date('Y',time());//年份文件夹
                $dtime = Date('m-d',time());//日期文件夹
                $tpath = storage_path().$type;//一级路径
                $ypath=storage_path().$type.'/'.$ytime;//二级路径
                $dpath=storage_path().$type.'/'.$ytime.'/'.$dtime;//最终路径

                if(!is_dir($tpath)){
                    mkdir($tpath,0777);
                    mkdir($ypath,0777);
                    mkdir($dpath,0777);
                }elseif(!is_dir($ypath)){
                    mkdir($ypath,0777);
                    mkdir($dpath,0777);
                }elseif(!is_dir($dpath)){
                    mkdir($dpath,0777);
                }
                $fp=$dpath.'/'.$fn; //问价的全路径
                $fi=1;
                while( file_exists($fp) ) {
                    $fn=$fm.'['.$fi.']'.$fe;
                    $fp=$dpath.'/'.$fn;
                    $fi++;
                }
                move_uploaded_file($file['tmp_name'],$fp);
                $fs=array('name'=>$fn,'url'=>$fp,'type'=>$file['type'],'size'=>$file['size']);
            }
            //$ret['files']=$fs;
            return json_encode($fs);
        }else{
            echo "{'error':'Unsupport GET request!'}";
        }
    }
}