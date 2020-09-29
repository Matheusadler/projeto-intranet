<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidationNoticiasRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $id = $this->segment(2);

        return [
            //
            'chapeu' => "required|min:3|max:255|unique:noticias,chapeu,{$id},id",
            'setor' => "required|min:2|max:255",
            'editoria' => "required",
            'imagem' => "required",
            'data_inicial' => "required",
            'titulo_interno' => "required|min:3|max:255|unique:noticias",
            'titulo_capa' => "required|min:3|max:255|unique:noticias",
            'subtitulo' => "required|min:3|max:255",
            'texto' => "required|min:3|max:255"

        ];
    }

    public function messages()
    {
        return [
            'chapeu.required' => 'Por favor, inforne um chapéu para a notícia.',
            'chapeu.unique' => 'O chapéu informado já está sendo utilizado, favor informar outro.',
            'setor.required' => 'Por favor, informe seu setor.',
            'editoria.required' => 'Por favor, selecione uma editoria.',
            'imagem.required' => 'Por favor, selecione uma imagem para sua notícia.',
            'titulo_interno.required' => 'Por favor, informe um título interno para sua notícia.',
            'titulo_interno.unique' => 'Parece que outra notícia possui este título, favor informar outro',
            'titulo_capa.required' => 'Por favor, informe um título para sua capa.',
            'titulo_capa.unique' => 'Parece que outra notícia possui esta capa, favor informar outra',
            'subtitulo.required' => 'Por favor, insira um subtítulo para sua notícia',
            'texto.required' => 'Por favor, descreva as informações no corpo da notícia.',
            'data_inicial.required' => 'Insira uma data para publicação da notícia.'
        ];
    }
}
