<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Section;
use App\Models\SubSection;

class SectionController extends Controller
{
    public function section(){ 
        $sections = Section::all();
        return view('backend.pages.section.section',compact('sections'));
    }
  public function getsectionBySectionId($section_id){
    $subsections = SubSection::where('section_id','=',$section_id)
                         ->get();
                         return response()->json([
                            'subsections' => $subsections,
                         ]);
    //echo 'ffff';
  }
}

