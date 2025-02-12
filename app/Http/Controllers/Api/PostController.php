<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Resources\PostResource;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function index()
    {
        return PostResource::collection(Post::with('category')->get());
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);

        return (new PostResource($post))->additional([
            'success' => true,
            'message' => 'Posts retrieved successfully'
        ]);
    }

    public function destroy($id)
    {

        $res = Post::destroy($id);
        if ($res) {
            $response = [
                'success' => true,
                'message' => 'Post succes delete',
            ];
            $status = 200;
        } else {
            $response = [
                'success' => false,
                'message' => 'Post error delete',
            ];
            $status = 401;
        }
        return response()->json($response, $status);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|min:5|max:255',
            'text' => 'required|min:5|max:255'
        ]);

        if ($validator->fails()) {
            $response = [
                'success' => false,
                'message' => 'Ошибка валидации',
                'data' => $validator->errors(),
            ];
            return response()->json($response, 400);
        }


        $post = Post::find($id);
        if (!$post) {
            $response = [
                'success' => false,
                'message' => 'Пост не найден',

            ];
            return response()->json($response, 400);
        }


        if ($post->update($request->all())) {
            $response = [
                'success' => true,
                'message' => 'Пост успешно обновлен',
                'post' => $post
            ];
            return response()->json($response, 200);
        }
    }
}
