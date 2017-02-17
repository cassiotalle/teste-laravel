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
        $title = "Cadastrar novo produto";
        $categorys = ['Eletrodomestico','Limpeza','Banho','Moveis'];
        return view('painel.products.create-edit', compact('title', 'categorys'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $dataForm = $request->all();

      $dataForm['active'] = (isset($dataForm['active'])) ? 0 : 1;

      //$this->validate($request, $this->product->rules);

      $messages = [
        'name.required' => 'O campo nome é obrigatório',
        'number.numeric' => 'Apenas números',
        'numer.required' => 'O campo número é obrigatório',
      ];

      $validate = validator($dataForm, $this->product->rules, $messages);

      if($validate->fails()){
        return redirect()
          ->route('produtos.create')
          ->withErrors($validate)
          ->withInput();
      }

      $insert = $this->product->create($dataForm);

      if ($insert) {
        return redirect()->route('produtos.index');
      }
      else{
        return redirect()->route('produtos.create');
      }

      //dd($request->all());
      //dd($request->only(['name', 'category']));
      //dd($request->except(['description', '_token']));
      //dd($request->input('name'));
        return "cadastrando..";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = $this->product->find($id);
        $title = "Produto: {$product->name}";
        return view('painel.products.show', compact('product', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $product = $this->product->find($id);
      $title = "Editar produto: {$product->name}";
      $categorys = ['Eletrodomestico','Limpeza','Banho','Moveis'];
      return view('painel.products.create-edit', compact('title', 'categorys', 'product'));
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

      $product = $this->product->find($id);
      $update = $product->update($request);

        if($update){
          return redirect()->route('produtos.index');
        }
        else{
          return redirect()->route('produtos.edit', $id)->with(['errors' => 'Falha ao editar']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = $this->product->find($id);

        $delete = $product->delete();

        if($delete){
          return redirect()->route('products.index');
        }
        else{
          return redirect()->route('products.show', $product->id)->with(['errors' => 'Falha ao apagar o produto']);
        }
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
