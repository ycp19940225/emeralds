<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/11/22
 * Time: 18:28
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Repository\Eloquent\Admin\FamousRepository;
use App\Services\Admin\GoodsServicesImpl;
use App\Services\Common\UploadServicesImpl;
use Illuminate\Http\Request;

class FamousController extends controller
{
    protected $famous;
    protected $goods;
    public function __construct(FamousRepository $famousRepository,GoodsServicesImpl $goodsServicesImpl)
    {
        $this->famous=$famousRepository;
        $this->goods=$goodsServicesImpl;
    }

    /**
     * @name 名家列表
     * @desc
     * @author ycp
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data=$this->famous->getAlls();
        return view('admin.famous.index',['data'=>$data,'title'=>'名家']);
    }

    /**
     * @name 添加名家页面
     * @desc 添加分类
     * @author ycp
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function add()
    {
        $goods_data = $this->goods->getLinks();
        return view('admin.famous.edit',['title'=>'添加名家','goods_data'=>$goods_data]);
    }

    /**
     * @name 添加操作
     * @desc
     * @author ycp
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function addOperate(Request $request,UploadServicesImpl $uploadServicesImpl)
    {
        $data = $request->input();
        $pic = $uploadServicesImpl->uploadImg('famous',$request->file('pic'));
        $data['logo'] = $pic;
        if($this->famous->save($data)){
            return redirect('admin/famous/index')->with('info','名家章添加成功！');
        }
        return back()->withInput()->with('error','添加失败！');

    }

    /**
     * @name 修改页面
     * @desc 修改页面
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     * @internal param Request $request
     */
    public function edit($id)
    {
        $data = $this->famous->getOne($id);
      /*  $goods_data = $this->goods->getLinks();
        $goods_select = $this->goods->getSelects($id);*/
        return view('admin.famous.edit',['data'=>$data,'title'=>'添加名家']);
    }

    /**
     * @name 修改操作
     * @desc
     * @author ycp
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function editOperate(Request $request,UploadServicesImpl $uploadServicesImpl)
    {
        $data = $request->input();
        if($request->file('pic')){
            $pic = $uploadServicesImpl->uploadImg('famous',$request->file('pic'));
            $data['logo'] = $pic;
        }
        if($this->famous->update($data)){
            return redirect('admin/famous/index')->with('info','修改成功！');
        }
        return back()->withInput()->with('error','修改失败！');
    }

    /**
     * @name 名家删除
     * @desc
     * @author ycp
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(Request $request)
    {
        if($this->famous->delete($request->input('id'))){
            return response()->json(msg('success','删除成功!'));
        } else
            return response()->json(msg('error','删除失败!'));
    }

    /**
     * @name 名家商品
     * @desc
     * @author ycp
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function famousGoods()
    {
        $data=$this->goods->getLinks();
        $famousData=$this->famous->getAlls();
        return view('admin.famous.famousGoods',['data'=>$data,'famousData'=>$famousData,'title'=>'名家商品']);
    }

    /**
     * @name 商品分配名家
     * @desc
     * @author ycp
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function goodsToFamous(Request $request)
    {
        $data = $request->only("id",'famous_id');
        if($this->goods->update($data)){
            return response()->json(msg('success','分配成功!'));
        }
        return response()->json(msg('error','分配失败!'));
    }
    /**
     * @name 获取名家商品
     * @desc
     * @author ycp
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getFamousGoods(Request $request)
    {
        $famous_id = $request->only("id");
        $data = $this->goods->getByFields(['famous_id'=>$famous_id]);
        if($data){
            return response()->json(msg('success','获取成功!',$data));
        }
        return response()->json(msg('error','获取失败!'));
    }

    /**
     * @name 删除名家商品
     * @desc
     * @author ycp
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteFamousGoods(Request $request)
    {
        $data = $request->only("id",'famous_id',"type");
        if($this->goods->update($data)){
            return response()->json(msg('success','删除成功!'));
        }
        return response()->json(msg('error','获取失败!'));
    }
}