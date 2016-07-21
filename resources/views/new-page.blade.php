@extends('layouts.app')

@section('content')
		<div class="container-fluid">
			<h1 class="mar-b-30">Tilføj ny side</h1>
			<div class="row">
				<section class="col-xs-12 col-sm-7 col-md-8 col-lg-9 main-editor-area">
					<div class="panel">
						<div class="panel-body">
							<input type="text" class="input-standard full headline-input" placeholder="Skriv titel her">
						</div>
					</div>
					<div class="wysiwyg"></div>
				</section>
				<aside class="col-xs-12 col-sm-5 col-md-4 col-lg-3">
					<div class="panel">
						<div class="panel-heading">
							<div class="panel-title">Publicer</div>
						</div>
						<div class="panel-body">
							<button type="button" class="btn btn-default">Gem kladde</button>
							<button type="submit" class="btn btn-primary">Gem og udgiv</button>
						</div>
					</div>
					<div class="panel">
						<div class="panel-heading">
							<div class="panel-title">
								Side indstillinger <span class="fa fa-question-circle-o pull-right"></span>
							</div>
						</div>
						<div class="panel-body">
							<label for="meta-title">Meta title</label>
							<input type="text" class="input-standard full" id="meta-title" placeholder="Sidens titel">
							<label for="meta-desc" class="mar-t-20">Meta beskrivelse</label>
							<textarea class="input-standard full" id="meta-desc" placeholder="Sidens beskrivelse"></textarea>
							<label for="page-slug" class="mar-t-20">Side url</label>
							<div class="clearfix"></div>
							<span class="page-slug-preview">www.side.dk/<span></span></span><button type="button" class="btn btn-default edit-page-slug">Rediger</button>
							<input type="text" class="input-standard full" id="page-slug">
						</div>
					</div>
				</aside>
			</div>
		</div>

@endsection