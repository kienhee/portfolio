<?php

use App\Models\Category;
use App\Models\Product;
use App\Models\Tag;
use App\Models\Team;
use App\Models\User;

function getAllCategories()
{
    return Category::all();
}

function getAllTech()
{
    return Tag::all();
}
function author()
{
    return User::where('id', '999999999')->first();
}


function getAllProducts()
{
    return Product::orderBy('created_at', 'DESC')->get();
}

function getAllMembers()
{
    return Team::all();
}
