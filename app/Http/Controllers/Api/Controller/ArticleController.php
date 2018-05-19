<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/12/21
 * Time: 17:03
 */

namespace App\Http\Controllers\Api\Controller;
use App\Http\Controllers\Api\BaseController;
use App\Repository\Eloquent\Admin\ArticleCatRepository;
use App\Repository\Eloquent\Admin\ArticleRepository;

/**
 * 文章
 *
 * @Resource("Group 文章")
 */
class ArticleController extends BaseController
{
    protected $article;
    protected $cat;

    public function __construct(ArticleRepository $articleRepository,
                                ArticleCatRepository $articleCatRepository)
    {
        $this->article=$articleRepository;
        $this->cat=$articleCatRepository;
    }
    /**
     * 获取所有文章
     *
     *
     * @Get("http://temp.cqquality.com/api/articles")
     * @Parameters({
     *       @Parameter("cat", type="json",description="文章所属分类"),
     * })
     *@Transaction({
     *      @Response(200, body={
    "status": "true",
    "code": "200",
    "msg": "获取所有文章成功！",
    "data": ""
    }),
     *      @Response(500, body={"error": {
    "status": "false",
    "code": 500,
    "msg": "获取文章失败！",
    "data": ""

     *     }})
     * })
     */
    public function all()
    {
        $article_data = $this->article->getAll();
        if($article_data){
            return API_MSG($article_data->toArray(),'获取所有文章成功！');
        }
        return API_MSG('','获取所有文章失败！','false',500);
    }

    /**
     * 获取所有文章分类
     *
     * @Get("http://temp.cqquality.com/api/articles/cats")
     * @Parameters({
     * })
     *@Transaction({
     *      @Response(200, body={
    "status": "true",
    "code": "200",
    "msg": "获取所有文章分类成功！",
    "data": ""
    }),
     *      @Response(500, body={"error": {
    "status": "false",
    "code": 500,
    "msg": "获取文章分类失败！",
    "data": ""
     *     }})
     * })
     */
    public function cats()
    {
        $cats_data = $this->cat->getAll();
        if($cats_data){
            return API_MSG($cats_data,'获取所有文章分类成功！');
        }
        return API_MSG('','获取所有文章分类失败！','false',500);
    }
    /**
     * 获取分类文章（通过分类ID）
     *
     * @Get("http://temp.cqquality.com/api/articles/cat/id")
     * @Parameters({
     *     @Parameter("id", type="int",description="分类ID")
     * })
     *@Transaction({
     *      @Response(200, body={
    "status": "true",
    "code": "200",
    "msg": "获取分类文章成功！",
    "data": {
    "id": 2,
    "cat_name": "企业动向",
    "intro": "收集最新企业动向",
    "created_at": "1513398620",
    "updated_at": "1513398647",
    "deleted_at": 0,
    "article": ""
      }
    }),
     *      @Response(500, body={"error": {
    "status": "false",
    "code": 500,
    "msg": "获取分类文章失败！",
    "data": ""
     *     }})
     * })
     */
    public function cat($id)
    {
        $data = $this->cat->getOne($id);
        $data['article'] = $this->cat->getOne($id)->articles;
        if($data){
            return API_MSG($data,'获取分类文章成功！');
        }
        return API_MSG('','获取分类文章失败！','false',500);
    }
    /**
     * 获取文章详情（通过文章ID）
     *
     * @Get("http://temp.cqquality.com/api/article/id")
     * @Parameters({
     *     @Parameter("id", type="int",description="文章ID"),
     * })
     *@Transaction({
     *      @Response(200, body={
    "status": "true",
    "code": "200",
    "msg": "获取文章成功！",
     "data":""
    }),
     *      @Response(500, body={"error": {
    "status": "false",
    "code": 500,
    "msg": "获取文章失败！",
    "data": ""
     *     }})
     * })
     */
    public function article($id)
    {
        $data = $this->article->getOne($id);
        $data['cat'] = $this->article->getOne($id)->cat;
        if($data){
            return API_MSG($data,'获取文章成功！');
        }
        return API_MSG('','获取文章失败！','false',500);
    }

    public function getShiCui()
    {
        $data = $this->article->getShiCui();
        if($data){
            return API_MSG($data,'获取文章成功！');
        }
        return API_MSG('','获取文章失败！','false',500);
    }
}