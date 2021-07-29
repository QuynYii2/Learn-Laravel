<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Interfaces\CatPostInterface;
use App\Interfaces\PostInterface;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Expression;
use function PHPUnit\Framework\isEmpty;

class PostController extends Controller
{
    private $post, $catPost;
    public function __construct(PostInterface $post, CatPostInterface $catPost)
    {
        $this->post = $post;
        $this->catPost = $catPost;

    }


    public function listPost()
    {

    }

    public function addPost()
    {
        $catPost = $this->catPost->getAll();
        $status = array(
            '0' => 'Bản nháp',
            '1' => 'Chờ duyệt',
            '2' => 'Không được duyệt',
            '3' => 'Đã xuất bản'
        );
        return view('post/addPost', ['cat' => $catPost, 'status' => $status]);
    }

    public function savePost()
    {

    }

    public function updatePost()
    {

    }

    public function updatePostSuccess()
    {

    }

    public function deletePost()
    {

    }

    public function listCat()
    {
        $listCat = $this->catPost->getAll();
        return view('post/listCategory',[
            'list' => $listCat,
        ]);
    }

    public function addCat()
    {
        return view('post/addCategory');
    }

    public function saveCat(CategoryRequest $request)
    {
        $input = $request->all();
        $attributes = [
            'name' => $input['name'],
            'description'  => $input['description'],
        ];
        $cat = $this->catPost->create($attributes);
        if ($cat){
            return redirect()->route('post.listCat');
        }
    }

    public function updateCat(Request $request, $id)
    {

        if ($request->isMethod('POST')) {
            $validator = Validator::make($request->all(), [
                'name' => 'bail|required|min:10|max:255|unique:App\Models\Category,name,'.$id.',id',
            ]);
            if (!$validator->fails()) {
                $input = $request->all();
                $attributes = [
                    'name' => $input['name'],
                    'description' => $input['description']
                ];
                $updateCat = $this->catPost->update($id, $attributes);
                if ($updateCat){
                    return redirect()->route('post.listCat');
                }
                else{
                }
            }
            else{
                $detailCat = $this->catPost->find($id);
                return view('post/updateCategory', [
                    'detail' => $detailCat,
                    'errors' => $validator->getMessageBag(),
                ]);
            }
        }
        $detailCat = $this->catPost->find($id);
        return view('post/updateCategory', [
            'detail' => $detailCat,
        ]);
    }


    public function deleteCat($id)
    {
        $this->catPost->delete($id);
        return redirect()->route('post.listCat');
    }
}
