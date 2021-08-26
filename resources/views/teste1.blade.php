@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Teste 1') }}</div>

                <div class="card-body">
                    <p>
                        Escreva um programa em que dado uma frase e a quantidade de colunas que podem ser exibidas na tela, faça a quebra de linhas sem quebrar as palavras.
                        <br><br>
                        Por exemplo, se passarmos a frase "Um pequeno jabuti xereta viu dez cegonhas felizes." e pedirmos para ela ser exibida em 20 colunas, teremos como resposta:
                        <br><br>
                        Um pequeno jabuti
                        <br>
                        xereta viu dez
                        <br>
                        cegonhas felizes.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
