<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GalleryController extends Controller
{
    public function index()
    {
        $allGallerys = Gallery::all();

        return view("Admin.Gallery.index", ["allGallerys" => $allGallerys]);
    }

    public function create()
    {
        return view("Admin.Gallery.create");
    }

    public function store(Request $request)
    {
        $insertGallery = new Gallery();
        $insertGallery->image_url = $request->image_url;

        $insertGallery->save();

        Session::flash("message", "Gallery inserted Successfully");
        return redirect("admin/view-gallery");
    }

    public function destroy($id)
    {
        $deleteGallery = Gallery::find($id);

        $deleteGallery->delete();

        Session::flash("message", "Gallery Deleted Successfully");
        return redirect("admin/view-gallery");
    }
}
