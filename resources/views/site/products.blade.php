@extends('site.master.layout')

@section('content')

<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Conheça nossos produtos e serviços</h1>
        <p class="lead text-muted">Abaixo temos uma lista de produtos e serviços para você. Caso não consiga encontrar o que está procurando, por favor, procure um de nossos responsáveis o informe o item desejado.</p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Imagem Ilustrativa" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Alinhamento</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Imagem Ilustrativa</text></svg>

            <div class="card-body">
              <p class="card-text">Novo alinhamento feito a lazer e automatizado por servo motores. Tenha uma maior precisão na sua direção..</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="#comprar" type="button" class="btn btn-sm btn-outline-secondary">Comprar</a>
                </div>
                <small class="text-muted">15 em estoque</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Imagem Ilustrativa" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Filtro de Ar</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Imagem Ilustrativa</text></svg>

            <div class="card-body">
              <p class="card-text">Trabalhamos somente com os melhores filtros de ar disponíveis no mercado, confira.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="#comprar" type="button" class="btn btn-sm btn-outline-secondary">Comprar</a>
                </div>
                <small class="text-muted">47 em estoque</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Placeholder</text></svg>

            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>

@endsection