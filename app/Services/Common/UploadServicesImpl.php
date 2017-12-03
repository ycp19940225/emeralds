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

    public function uploadImg($uploadFiles)
    {
        $time = date('Y/m/d');
        $filename = $this->disk->put($time, $uploadFiles);//上传
        if(!$filename) {
            return false;
        }
        return $filename;
    }

}