<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Painel\Product;

class ProdutoController extends Controller
{

  private $product;

  public function __construct(Product $product){
    $this->product = $product;
  }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->product->all();
        return view('painel.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('painel.products.create');
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

    public function tests(){

      $prod = $this->product->find('3');
      $delete = $prod->delete();

      if($delete){
        return "Produto deletado com sucesso";
      }
      else {
        return "Erro ao deletar o produto";
      }

      /*
      //$product = $this->product->find(5);

      $product = $this->product->where('number', 12345)->update(
        ['name' => 'produto update']
      );

      /*$product = $this->product->where('number', 123456);

      $update = $product->update(
        [
        'number' => 123456
        ]
      );
      */
      /*
      if ($product) {
        return  'Alterado com sucesso id: ';
      }
      else{
        return 'Erro ao Alterar';
      }


      /*
      $p = $this->product->find(5);
      $p->name = "Produto 5";
      $p->number = 10;
      $p->active = true;
      $p->category = 'Eletrodomestico';
      $p->description = 'Descricao do produto';
      $update = $p->save();

      if ($update) {
        return  'Alterado com sucesso id: '. $p->id;
      }
      else{
        return 'Erro ao Alterar';
      }
      */

      //dd($prod);
      /*
      $insert = $this->product->create(
        ['name' => 'Lava e Seca',
        'number' => 10,
        'active' => true,
        'category' =>  'Eletrodomestico',
        'description' => 'Lava e seca de 14 kilos Brastemp']
      );

      if ($insert) {
        return  'Inserido com sucesso id '.$insert->id;
      }
      else{
        return 'Erro ao inserir';
      }
      */
/*
      $p = $this->product;
      $p->name = "nome do produto";
      $p->number = 10;
      $p->active = true;
      $p->category = 'Eletrodomestico';
      $p->description = 'Descricao do produto';
      $insert = $p->save();

      if ($insert) {
        return  'Inserido com sucesso';
      }
      else{
        return 'Erro ao inserir';
      }
*/

    }
}
