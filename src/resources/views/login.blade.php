@extends('layouts.body')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="medium-8 medium-offset-2">
			<div class="panel">
				<h3>Inicio de sesión</h3>
				<div>

					<form class="form-horizontal" role="form" method="POST" action="/auth/login">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="row">
                            <div class="large-3 medium-4 small-4 columns">
                                <label class="inline right" for="email">Correo electrónico</label>
                            </div>
							<div class="large-9 medium-8 small-8 columns">
								<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="row">
                            <div class="large-3 medium-4 small-4 columns">
                                <label class="inline right" for="password">Contraseña</label>
                            </div>
							<div class="large-9 medium-8 small-8 columns">
								<input id="password" type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="row">
							<div style="text-align:center;">
								<button type="submit" class="btn btn-primary" style="margin-right: 15px;">
									Iniciar sesión
								</button>

								<!--<a href="/password/email">¿Olvidaste tu contraseña?</a>-->
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
