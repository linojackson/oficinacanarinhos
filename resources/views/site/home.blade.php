@extends('site.master.layout')

@section('content')
<main>
  <div class="container">
        <div class="h-100 p-5 bg-light border rounded-3">
          <h2>Seja muito bem-vindo a nossa oficina!</h2>
          <p>Estamos à sua total disposição para tudo aquilo que precisar.</p>
          <p>Prezamos pelo contato com o nosso cliente e seu bem-estar.</p>
          <a href="{{ route('site.products') }}" class="btn btn-outline-secondary" type="button">Conheça nossos produtos</a>
        </div>
  </div>
  </main>

@endsection