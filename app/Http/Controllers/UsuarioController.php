<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UsuarioController extends Controller
{
    /**
     * Registra um novo usuário
     */
    public function registrar(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:usuarios',
            'senha' => 'required|string|min:8|confirmed',
        ]);

        $usuario = Usuario::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'senha' => Hash::make($request->senha),
            'foto' => 'https://crmto.org.br/wp-content/uploads/2024/06/user.png',
            'status' => 'ativo',
            'ativado' => true,
        ]);

        // Criar token de acesso
        // $token = $usuario->createToken('auth_token')->plainTextToken;
        $token = "123";

        return response()->json([
            'message' => 'Usuário registrado com sucesso',
            'access_token' => $token,
            'token_type' => 'Bearer',
            'usuario' => $usuariol
        ], 201);
    }

    /**
     * Autentica um usuário
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'senha' => 'required',
        ]);

        $usuario = Usuario::where('email', $request->email)->first();

        if (!$usuario || !Hash::check($request->senha, $usuario->senha)) {
            return response()->json([
                'message' => 'Credenciais inválidas'
            ], 401);
        }

        // Revogar todos os tokens anteriores
        $usuario->tokens()->delete();

        // Criar novo token
        $token = $usuario->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => 'Login realizado com sucesso',
            'access_token' => $token,
            'token_type' => 'Bearer',
            'usuario' => $usuario
        ]);
    }

    /**
     * Desconecta o usuário (revoga o token)
     */
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Logout realizado com sucesso'
        ]);
    }

    /**
     * Desativa a conta do usuário
     */
    public function desativarConta(Request $request)
    {
        $usuario = $request->user();
        
        // Revogar todos os tokens
        $usuario->tokens()->delete();
        
        // Atualizar status do usuário
        $usuario->update([
            'status' => 'inativo',
            'ativado' => false
        ]);

        return response()->json([
            'message' => 'Conta desativada com sucesso'
        ]);
    }

    /**
     * Faz upload da foto do usuário
     */
    public function fotoUpload(Request $request)
    {
        $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $usuario = $request->user();
        
        // Excluir foto anterior se existir
        if ($usuario->foto && Storage::exists($usuario->foto)) {
            Storage::delete($usuario->foto);
        }

        // Salvar nova foto
        $path = $request->file('foto')->store('public/fotos_usuarios');
        $url = Storage::url($path);

        $usuario->update([
            'foto' => $url
        ]);

        return response()->json([
            'message' => 'Foto atualizada com sucesso',
            'foto_url' => $url,
            'usuario' => $usuario
        ]);
    }

    /**
     * Edita os dados do usuário
     */
    public function editar(Request $request)
    {
        $usuario = $request->user();
        
        $request->validate([
            'nome' => 'sometimes|string|max:255',
            'email' => 'sometimes|email|max:255|unique:usuarios,email,'.$usuario->id,
            'senha_atual' => 'sometimes|required_with:senha_nova',
            'senha_nova' => 'sometimes|min:8|confirmed',
        ]);

        $data = [];
        
        if ($request->has('nome')) {
            $data['nome'] = $request->nome;
        }
        
        if ($request->has('email')) {
            $data['email'] = $request->email;
        }
        
        if ($request->has('senha_nova')) {
            if (!Hash::check($request->senha_atual, $usuario->senha)) {
                return response()->json([
                    'message' => 'Senha atual incorreta'
                ], 422);
            }
            
            $data['senha'] = Hash::make($request->senha_nova);
        }

        $usuario->update($data);

        return response()->json([
            'message' => 'Dados atualizados com sucesso',
            'usuario' => $usuario
        ]);
    }

    /**
     * Retorna o perfil do usuário autenticado
     */
    public function perfil(Request $request)
    {
        return response()->json([
            'usuario' => $request->user()
        ]);
    }
}