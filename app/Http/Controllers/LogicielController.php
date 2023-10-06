<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\logiciel;
use App\Models\types;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LogicielController extends Controller
{

    public function index (Request $request=null){
        $cats = Category::All();
        $types = types::All();
        $datas = logiciel::All()->where('del','<>','1');
        return view('logiciel.index', compact('cats','types','datas'));
    }


    public function store (Request $req,$id=null) {
        
        $soft = new logiciel();
        if($req->type=="create") {
            $soft->nom = $req->nom;
            $soft->editeur = $req->editeur;
            $soft->version = $req->version;
            $soft->categorie_id = $req->category;
            $soft->soft_type_id = $req->typeSft;
            $soft->datesortie = $req->datesortie;

            $soft->save();

            return redirect()->back()->with('success', 'Logiciel ajouté avec succès!');
        }else {
            $soft = logiciel::find($req->soft_id);
            $soft->nom = $req->nom;
            $soft->editeur = $req->editeur;
            $soft->version = $req->version;
            $soft->categorie_id = $req->category;
            $soft->soft_type_id = $req->typeSft;
            $soft->datesortie = $req->datesortie;
            $soft->save();

            return redirect()->back()->with('success', 'Logiciel modifié avec succès!');
            }
        }
    

    public function destroy($id)
    {
      $soft = logiciel::find($id);
      $soft->del=true;
      $soft->save();

      return redirect()->route('logiciel.index')
        ->with('success', 'logiciel supprimé avec succès');
    }

    public function update($id)
    {
    	$soft = logiciel::find($id);
	    return response()->json([
	      'data' => $soft
	    ]);
    }

        public function getDataByTypeSoft() {
            $datas = DB::table('logiciel')
             ->join('types','logiciel.soft_type_id','=','types.id')
             ->select('types.libelle', DB::raw('count(*) as count'))
            ->groupBy('types.libelle')
            ->pluck('count', 'libelle')
            ->toArray();
            
            return response()->json($datas);
        }

        public function getDataByCatSoft() {

            $datas = DB::table('logiciel')
            ->join('softcategory','logiciel.categorie_id','=','softcategory.id')
            ->select('softcategory.nomcategory', DB::raw('count(*) as count'))
           ->groupBy('softcategory.nomcategory')
           ->pluck('count', 'nomcategory')
           ->toArray();

           return response()->json($datas);

        }
      

}
