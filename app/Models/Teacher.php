<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Termwind\ValueObjects\setElement;

class Teacher extends Model
{
    use HasFactory;

    public static $image, $imageName, $teacher, $directory, $imageUrl, $extension;


//    public static function getExtension()
//    {
//        self::$extension = self::$image->getClientOriginalExtension();
//        self::$imageName = time().''.self::$extension;
//        self::$directory = 'teacher-images';
//    }

    public static function getImageUrl($request)
    {
        self::$image            = $request->file('image');
        self::$imageName        = self::$image->getClientOriginalName();
        self::$directory        = 'teacher-images/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function newTeacher($request)
    {
        self::$teacher              = new Teacher();
        self::$teacher->name        = $request->name;
        self::$teacher->email       = $request->email;
        self::$teacher->password    = bcrypt($request->password);
        self::$teacher->mobile      = $request->mobile;
        self::$teacher->address     = $request->address;
        self::$teacher->status      = $request->status;
        self::$teacher->image       = self::getImageUrl($request);
        self::$teacher->save();
    }

    public static function teacherInfoUpdate($request, $id)
    {
        self::$teacher      = Teacher::find($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$teacher->image))
            {
                unlink(self::$teacher->image);
            }
            self::$imageName = self::$teacher->image;
        }
        else
        {
            self::$imageUrl =   self::$teacher->image;
        }
        self::$teacher->name        = $request->name;
        self::$teacher->email       = $request->email;
//        self::$teacher->password    = $request->password;
        if ($request->password)
        {
            self::$teacher->password    = bcrypt($request->password);
        }
        self::$teacher->mobile      = $request->mobile;
        self::$teacher->address     = $request->address;
        self::$teacher->status      = $request->status;
        self::$teacher->image       = self::$imageUrl;
        self::$teacher->save();
    }

    public static function teacherInfoDelete($id)
    {
        self::$teacher  = Teacher::find($id);
        if (file_exists(self::$teacher->image))
        {
            unlink(self::$teacher->image);
        }
        self::$teacher->delete();
    }
}
