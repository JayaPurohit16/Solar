<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory, SoftDeletes;

    // Project Gallery Images Relationship 

    public function getGalleryImages()
    {
        return $this->hasMany(ProjectGalleryImage::class, 'project_id', 'id');
    }


    // Category Relationship 

    public function getCategory()
    {
        return $this->hasOne(Category::class, 'id', 'category');
    }
}
