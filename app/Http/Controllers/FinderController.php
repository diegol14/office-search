<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Continue_;
use PhpParser\Node\Stmt\TryCatch;

class FinderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("dashboard");
    }

    /**
     * Send a search of the branch.
     *
     * @return \Illuminate\Http\Response
     */
    public function send(Request $request)
    {
        $formok = $this->validate($request, [
            "branchnumber" => "required|numeric|max:9999|min:1",
        ]);

        $check = ($formok) ? "right" : "wrong";

        //  dd($request->input());

        $branchnumber = intval($request->branchnumber);

        // echo gettype($branchnumber);
        // echo "<br>";

        try {
            $branch = Branch::find($branchnumber);
            // echo gettype($branch);
            // echo "<br>";
            // echo $branch;
            // echo "<br>";
            // echo ($branch->numero);
            // echo "<br>";
             $mantok = ($branch->mantenimiento);

            switch ($mantok) {
                case '1':
                    $mantok = "SI";
                    break;

                case '0':
                    $mantok = "NO";
                    break;

                default:
                    $mantok="NO EXISTE EN NUESTRA BASE DE DATOS";
                    break;
            }
        } catch (\Throwable $th) {
            //throw $th;
            $mantok="NO EXISTE EN NUESTRA BASE DE DATOS";
        } finally {
            return view("branch-response", compact(["mantok","branchnumber"]));
            // echo "Mantenimiento: " . $mantok;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
