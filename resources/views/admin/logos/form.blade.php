@csrf
<div class="row">
	
	<div class="col-md-9 my-2">
		<label for="title" class="form-label">Nom du partenaire</label>
		<input type="text" class="form-control" id="title" name="title" value="{{ old('title') ?? $logo->title }}">
		@error('title') <div class="text-danger">{{ $message }}</div> @enderror
	</div>


</div>


<div class="row">
	
	<div class="col-md-3 my-2">
		<label for="url_fr" class="form-label">Lien FR</label>
		<input type="text" class="form-control" id="url_fr" name="url_fr" value="{{ old('url_fr') ?? $logo->url_fr }}" placeholder="http://">
		@error('url_fr') <div class="text-danger">{{ $message }}</div> @enderror
	</div>
	<div class="col-md-3 my-2">
		<label for="url_nl" class="form-label">Lien NL</label>
		<input type="text" class="form-control" id="url_nl" name="url_nl" value="{{ old('url_nl') ?? $logo->url_nl }}" placeholder="http://">
		@error('url_nl') <div class="text-danger">{{ $message }}</div> @enderror
	</div>
</div>

<div class="row">
	<div class="col-md-3 my-2">
		<label for="page" class="form-label">Page</label>
		<select name="page" id="page" class="form-select">
			<option value="home" {{  $logo->page == 'home' ? 'selected' : '' }}>Homepage</option>
			<option value="about" {{  $logo->page == 'about' ? 'selected' : '' }}>A propos</option>
		</select>
		@error('page') <div class="text-danger">{{ $message }}</div> @enderror
	</div>
	
</div>

<div class="row">
	<div class="col-md-3 my-2">
		<label for="image" class="block mt-4">Image</label>
		<input type="file" name="image" id="image" class="block">
		@error('image') <div class="text-red-500 text-xs">{{ $message }}</div> @enderror
		@if ($logo->image)
			<img src="{{ asset('/storage/' . $logo->image) }}" class="mt-4 h-56">
		@endif
	</div>
</div>

<div class="row">
	
	<div class="col-md-3 my-2">
		<label for="order" class="form-label">Ordre</label>
		<input type="text" class="form-control" id="order" name="order" value="{{ old('order') ?? $logo->order }}" >
		@error('order') <div class="text-danger">{{ $message }}</div> @enderror
	</div>
	</div>
<button type="submit" class="btn btn-success text-uppercase my-4">Sauvegarder</button>