<?php

	namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
   
    function registrar(Request $request) 
    {
		    //Validando os dados da requisição
        $dados = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed'
        ]);

				//Recebendo todos os dados na variável $dados
        $dados['password'] = bcrypt($dados['password']);
        $dados['picture'] = 'https://cdn0.iconfinder.com/data/icons/seo-web-4-1/128/Vigor_User-Avatar-Profile-Photo-02-1024.png';
        $dados['status'] = 'active';
        $dados['enabled'] = true;

				//Inserindo no banco de dados
        $usuario = User::create($dados);

				// Criando um token de acesso para o usuário
        $token = $usuario->createToken('auth_token')->plainTextToken;

				// Enviando todos os dados para o front-end
        return response()->json([
            'message' => 'Usuário registrado com sucesso.',
            'user' => $usuario,
            'token' => $token
        ], 201);
    }

    function login(Request $request)
    {
		    //Validando os Dados
        $credenciais = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

				//Fazendo o Select no SQL
        $usuario = User::where('email', $credenciais['email'])->first();

				//Verificando a hash da senha do usuário
        if (!$usuario || !\Hash::check($credenciais['password'], $usuario->password)) {
            return response()->json(['message' => 'Credenciais inválidas'], 401);
        }

				//Gerando um token de acesso para o usuário
        $token = $usuario->createToken('auth_token')->plainTextToken;

				//Enviando todos os dados para o front-end
        return response()->json([
            'message' => 'Login realizado com sucesso.',
            'user' => $usuario,
            'token' => $token
        ]);
    }


    function logout(Request $request)
    {
		    //Apagando o token do usuário no servidor
		    //Quando o front-end for buscar o token, não encontrará e desonectará
        $request->user()->currentAccessToken()->delete();

				//Enviando resposta para o front-end
        return response()->json(['message' => 'Logout realizado com sucesso.']);
    }


    function fotoUpload(Request $request)
    {
		    //Validando o formato da imagem
        $request->validate([
            'picture' => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ]);

				//Recuperando do model User as informações do usuário que já estão
				//alocadas em memória
        $usuario = $request->user();
        //Definindo o caminho onde serão salva as imagens no servidor
        //está também relalizando o upload da imagem para a pasta public
        $path = $request->file('picture')->store('pictures', 'public');

				//Atualizando a tabela do Banco com o caminho da imagem
        $usuario->update(['picture' => $path]);

				//retornando uma resposta para o front-end
        return response()->json([
            'message' => 'Foto enviada com sucesso.',
            'picture_url' => asset('storage/' . $path)
        ]);
    }


    function desativarConta(Request $request)
    {
		    //Recupera os dados do User Model alocado em memória
        $usuario = $request->user();
        //Atualiza os campos da tabela do banco de dados
        $usuario->update(['enabled' => false, 'status' => 'inactive']);

				//Retorna para o front-end a resposta
        return response()->json(['message' => 'Conta desativada com sucesso.']);
    }

    function perfil(Request $request)
    {
		    //Exibe os dados do usuário que estão alocados em memória
        return response()->json($request->user());
    }

    function editar(Request $request)
    {
		    //Recupera do model os dados do usuário que estão alocados em memória
        $usuario = $request->user();

				//Validação dos dados da requisição
        $dados = $request->validate([
            'name' => 'sometimes|string|max:255',
            'email' => 'sometimes|string|email|max:255|unique:users,email,' . $usuario->id,
            'password' => 'nullable|string|min:6|confirmed'
        ]);

				//Verifica a senha se está preenchida para poder editar
        if (!empty($dados['password'])) {
            $dados['password'] = bcrypt($dados['password']);
        } else {
            unset($dados['password']);
        }
		
				//Atualiza o BD com o array dos novos dados
        $usuario->update($dados);

				//Retorna uma resposta para o front-end
        return response()->json([
            'message' => 'Dados atualizados com sucesso.',
            'user' => $usuario
        ]);
    }
}