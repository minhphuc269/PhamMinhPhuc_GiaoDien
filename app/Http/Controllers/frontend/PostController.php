<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Topic;

class PostController extends Controller
{
    // Get all posts
    public function index()
    {
        $list_post = Post::where('status', '=', 1)
            ->orderBy('created_at', 'desc')
            ->paginate(12);
        $topics = Topic::where('status', '=', 1)->get();
        return view("frontend.post", compact('list_post', 'topics'));
    }

    // Get posts by topic
    public function topic($slug)
    {
        $topic = Topic::where([['slug', '=', $slug], ['status', '=', 1]])->first();
        if ($topic) {
            $list_post = Post::where([['status', '=', 1], ['topic_id', '=', $topic->id]])
                ->orderBy('created_at', 'desc')
                ->paginate(12);
            $topics = Topic::where('status', '=', 1)->get(); // Danh sách chủ đề
            $new_posts = Post::where('status', '=', 1)->orderBy('created_at', 'desc')->limit(5)->get(); // Bài viết mới
            return view("frontend.post_topic", compact('list_post', 'topic', 'topics', 'new_posts'));
        } else {
            return redirect()->route('site.post')->with('error', 'Topic not found');
        }
    }

    // Get post details
    public function post_detail($slug)
    {
        $post = Post::where([['status', '=', 1], ['slug', '=', $slug]])->first();
        $chitiet_posts = Post::where([['status', '=', 1], ['id', '!=', $post->id], ['topic_id', '=', $post->topic_id]])
            ->orderBy('created_at', 'desc')
            ->limit(8)
            ->get();

        return view("frontend.post_detail", compact('post', 'chitiet_posts'));
    }


    // page
    public function gioi_thieu()
    {   
        $gioithieu = Post::where('title', 'Giới Thiệu')->where('status', 1)->firstOrFail();
        return view('frontend.gioithieu', compact('gioithieu'));
    }
    public function chinh_sach_mua_hang()
    {   
        $chinhsachmuahang = Post::where('title', 'Chính sách mua hàng')->where('status', 1)->firstOrFail();
        return view('frontend.chinhsachmuahang', compact('chinhsachmuahang'));
    }
    public function chinh_sach_van_chuyen()
    {   
        $chinhsachvanchuyen = Post::where('title', 'Chính sách vận chuyển')->where('status', 1)->firstOrFail();
        return view('frontend.chinhsachvanchuyen', compact('chinhsachvanchuyen'));
    }
    public function chinh_sach_doi_tra()
    {   
        $chinhsachdoitra = Post::where('title', 'Chính sách đổi trả')->where('status', 1)->firstOrFail();
        return view('frontend.chinhsachdoitra', compact('chinhsachdoitra'));
    }
    public function chinh_sach_bao_hanh()
    {   
        $chinhsachbaohanh = Post::where('title', 'Chính sách bảo hành')->where('status', 1)->firstOrFail();
        return view('frontend.chinhsachbaohanh', compact('chinhsachbaohanh'));
    }
}
