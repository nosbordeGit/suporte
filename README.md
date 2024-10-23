1 - Alterar o arquivo .env.example para .env

2 - altere as configurações para acesso a base de dados mysql

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=suporte
DB_USERNAME=root
DB_PASSWORD=

3 - rodar este comando docker a baixo para atualizar as dependencias do laravel
./vendor/bin/sail composer 

4 - Gere a chave da aplicação ./vendor/bin/sail php artisan key:generate

5 - Executem este comando para criar seu banco de dados

./vendor/bin/sail php artisan migrate

Para finalizar o arquivo de Atualização

1 - alterar a rota update passando o parametro do ID Route::put('/suporte/update/{suporte}',[SuporteController::class,'update'])->name('suporte.update');

2 - editar Alterar.blade.php {{-- Linha alterada no formulario para passar os dados do formulario utilizando o ID correto--}}

3 - alterar o listar.blade.php alterar listar para mostrar status do atendimento no botão {{$item->atendimento}}

4 - Alterar o SuporteController

public function update(Request $request, Suporte $suporte) { //dd($request); $suporte->update([ 'nome' =>$request->nome, 'email' =>$request->email, 'atendimento' =>$request->atendimento, 'solucao' =>$request->solucao,

]);
return redirect()->route('suporte.listar');

}
