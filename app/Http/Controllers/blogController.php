<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
class blogController extends Controller
{
    //upload image into public folder
    public function upload(Request $request){
        $path = 'public/images/tinymce';
        $uploadedFile = $request->file('file');
        $fileName = $uploadedFile->getClientOriginalName();
        $uploadedFile->storeAs($path, $fileName);

        return response()->json([
            'location' => asset("storage/images/tinymce/{$fileName}")
        ]);
    }
    private function createThumbnail($path, $width, $height)
    {
        // Load ảnh bằng Intervention Image
        $img = Image::make(public_path($path));

        // Tạo thumbnail với kích thước tùy chọn
        $img->fit($width, $height);

        // Lưu thumbnail vào thư mục public/images/uploads/thumbnails
        $thumbnailPath = 'images/uploads/thumbnails/' . basename($path);
        $img->save(public_path($thumbnailPath));

        return $thumbnailPath;
    }
    // add new blog
    public function addNewBlog(Request $request){
        dd($request);
        $blog = new Blog();
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('public/images/blog', $filename);
            $blog->image = $filename;
        }
        $description = $request->description;
 
       $dom = new \DomDocument();
 
       $dom->loadHtml($description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);    
 
       $images = $dom->getElementsByTagName('img');
 
       foreach($images as $k => $img){
           $data = $img->getAttribute('src');
           list($type, $data) = explode(';', $data);
           list(, $data)      = explode(',', $data);
           $data = base64_decode($data);
           $image_name= "\upload" . time().$k.'.png';
           $path = public_path() . $image_name;
           file_put_contents($path, $data);
           $img->removeAttribute('src');
           $img->setAttribute('src', $image_name);
 
        }
 
 
       $description = $dom->saveHTML();
       $blog->title = $request->title;
       $blog->description = $description;
       $blog->save();
        return redirect()->back();
    }
}
