<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;


class Categorie extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'parent_id',
        'picture',
        'summary',
        'description',
        'status'
    ];

    public function getRouteKey()
    {
        return'slug';
    }

    public static function tree()
    {
        $allCategories = Categorie::get();

        $rootCategories = $allCategories->whereNull('parent_id');

        self::formatTree($rootCategories, $allCategories);

        return $rootCategories;
    }

    private static function formatTree($categories, $allCategories)
    {
        foreach ($categories as $category) {
            $category->children = $allCategories->where('parent_id', $category->id)->values();

            if ($category->children->isNotEmpty()) {
                self::formatTree($category->children, $allCategories);
            }
        }
    }
    public function isChild():bool

    {
        return $this->parent_id !== null;
    }

    public static function isChild1($id) {
        $child=Categorie::where('parent_id',$id)->get();

        return $child;
    }

    public static function isChildName($id) {
        $child=Categorie::find($id)->name;

        return $child;
    }
    public static function isChild2() {
        $child=Categorie::where('parent_id','!=','')->get();
        return $child;
    }

    public static function treeAll() {
        $child=Categorie::get();
        return $child;
    }

    public static function getDataCatogry($id) {
        $category=Categorie::where('id',$id)->get();
        return $category;
    }


    public static function countCatogry($id) {
        // $count=Categorie::where('parent_id','!=','')->select($id)->get()->count();
        // $count=Categorie::find($id)->count();

         $count=self::isChild1($id)->count();

        return $count;
    }
    public static function getCatogryRondom($id) {
      //  $allCategories=Categorie::all()->take(10);
        // $getCateogry=Categorie::where('parent_id','===',$id)->get();
        // $count=Categorie::find($id)->count();
        $getCateogry = self::isChild1($id)->random(8);
         //$getCateogry->limit(5)->get();

        return $getCateogry;
    }


    public function parent(): BelongsTo
    {
        return $this->belongsTo(Categorie::class, 'parent_id')
            ->withDefault([
                'name' => 'Default',
            ]);
    }
}
