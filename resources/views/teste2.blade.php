@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Teste 2') }}</div>

                <div class="card-body">
                    <p>Desenvolva um código que escolhe as notas necessárias em um saque.</p>

                    <div style="display: block">
                        <strong>Regras:</strong> <br>
                        <ul>
                            <li>Entregar o menor número de notas;</li>
                            <li>É possível sacar o valor solicitado com as notas disponíveis;</li>
                            <li>Saldo do cliente infinito;</li>
                            <li>Quantidade de notas infinito (pode-se colocar um valor finito de cédulas para aumentar a dificuldade do problema);</li>
                            <li>Notas disponíveis de R$ 100,00; R$ 50,00; R$ 20,00 e R$ 10,00</li>
                        </ul>
                    </div>

                    <div style="display: block">
                        <strong>Exemplos:</strong> <br>
                        <ul>
                            <li>Valor do Saque: R$ 30,00 – Resultado Esperado: Entregar 1 nota de R$20,00 e 1 nota de R$ 10,00.</li>
                            <li>Valor do Saque: R$ 80,00 – Resultado Esperado: Entregar 1 nota de R$50,00 1 nota de R$ 20,00 e 1 nota de R$ 10,00.</li>
                        </ul>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
