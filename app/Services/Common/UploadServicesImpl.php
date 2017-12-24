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

}