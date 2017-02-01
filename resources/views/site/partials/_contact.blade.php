
<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCs90APVgE5vS8A3Xs7257oAl2BtStBANk'></script>


<div id="contact" class="section">
  <div class="container">
    <div class="section-title">
      <h1>Contato</h1>
      <p class="lead uppercase">Entre em contato conosco, tire suas dúvidas e requisite um orçamento. Estamos sempre disponíveis para atendê-lo a qualquer momento.</p>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
      <div class="row">
        <div class="col-md-6">
          <form class="form-horizontal" method="POST" action="{{ url('/sendmail') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group @if ($errors->has('inputNome')) has-error @endif">
              <label for="inputNome" class="col-sm-2 control-label">Nome</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="inputNome" placeholder="Digite seu nome">
                @if ($errors->has('inputNome')) <p class="help-block">{{ $errors->first('inputNome') }}</p> @endif
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail" class="col-sm-2 control-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" name="inputEmail" placeholder="Digite seu email">
              </div>
            </div>
            <div class="form-group">
              <label for="inputFone" class="col-sm-2 control-label">Telefone</label>
              <div class="col-sm-10">
                <input type="tel" class="form-control" name="inputTelefone" placeholder="Digite seu telefone">
              </div>
            </div>
            <div class="form-group">
              <label for="inputSubject" class="col-sm-2 control-label">Assunto</label>
              <div class="col-sm-10">
                <select class="form-control" name="inputAssunto">
                  <option value="">Selecione o assunto</option>
                  <option value="Sites e Sistemas Web">Sites e Sistemas Web</option>
                  <option value="Produtos e Serviços">Produtos e Serviços</option>
                  <option value="Manutenção de Sites">Manutenção de Sites</option>
                  <option value="Mídias Sociais">Mídias Sociais</option>
                  <option value="Outros">Outros</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="inputMsg" class="col-sm-2 control-label">Mensagem</label>
              <div class="col-sm-10">
                <textarea class="form-control" rows="5"></textarea>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Enviar</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-6">
          <div style='overflow:hidden'>
            <div id='gmap_canvas'></div>
          </div>
        </div>
      </div>
    </div>
  </div>
 </div>
