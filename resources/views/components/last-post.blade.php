<!--Start Post-New-->
<div class="news">
    <div class="container">
       <div class="row text-center py-3">
           <div class="col-lg-6 m-auto">
               <h1 class="h1">Post New</h1>
           </div>
       </div>
       <div class="row">
         @foreach ($post_new as $post)
         <div class="col-md-12 margin_top40">
            <div class="row d_flex">
               <div class="col-md-5">
                  <div class="news_img">
                     <figure><img src="{{ asset('images/posts/'.$post->image) }}" alt="{{ $post->image }}" style="width:500px"></figure>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="news_text">
                     <h3><a href="{{ route('site.post.detail', ['slug' => $post->slug]) }}" title="{{ $post->title }}">{{ $post->title }}</a></h3>
                     <span>7 July 2019</span> 
                     <div class="date_like">
                        <span>Like </span><span class="pad_le">Comment</span>
                     </div>
                     <p>{{ $post->description }}</p>
                  </div>
               </div>
            </div>
         </div>
         @endforeach
       </div>
    </div>
 </div>
<!--End Post-New-->