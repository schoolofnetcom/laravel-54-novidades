@component('layout')
  @slot('title', 'Components e Slots')

  <h1 class="text-center">Laravel Mix</h1>

  <div id="app">
    <example></example>
  </div>

  <div class="container">
    <div class="col-md-4">
      @component ('component')
        @slot('title', 'Painel 1')

        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      @endcomponent
    </div>
    <div class="col-md-4">
      @component ('component')
        @slot('title', 'Painel 2')

        <h3>Corpo do painel 3</h3>
      @endcomponent
    </div>
    <div class="col-md-4">
      @component ('component')
        @slot('title', 'Painel 3')

        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      @endcomponent
    </div>
    <div class="row">
      <div class="col-md-12">
        <form action="/receive" method="post">
          {{ csrf_field() }}
          <div class="form-group">
            <input type="text" name="title" placeholder="Seu título" class="form-control">
          </div>
          <div class="form-group">
            <input type="text" name="description" placeholder="Sua descrição" class="form-control">
          </div>
          <input type="submit" value="Testar" class="btn btn-default" >
        </form>
      </div>
    </div>
  </div>
@endcomponent
