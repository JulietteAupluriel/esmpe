@csrf

<div class="row">
	<div class="col-md-3 my-2">
		<label for="date" class="form-label">Date</label>
		<input type="date" id="date" name="date" value="{{ old('date') ?? $event->date?->format('Y-m-d') }}" class="form-control">
		@error('date') <div class="text-danger">{{ $message }}</div> @enderror
	</div>
	<div class="col-md-3 my-2">
		<label for="schedule_fr" class="form-label">Horaire FR</label>
		<input type="text" class="form-control" id="schedule_fr" name="schedule_fr" value="{{ old('schedule_fr') ?? $event->schedule_fr }}" placeholder="De 12h00 à 14h00">
		@error('schedule_fr') <div class="text-danger">{{ $message }}</div> @enderror
	</div>
	<div class="col-md-3 my-2">
		<label for="schedule_nl" class="form-label">Horaire NL</label>
		<input type="text" class="form-control" id="schedule_nl" name="schedule_nl" value="{{ old('schedule_nl') ?? $event->schedule_nl }}" placeholder="Van 12.00 tot 20.00 uur">
		@error('schedule_nl') <div class="text-danger">{{ $message }}</div> @enderror
	</div>
</div>

<div class="row">
	
	<div class="col-md-3 my-2">
		<label for="filters" class="form-label">Catégories {{ $event->filter }}</label>

		<select name="filter" id="filters" class="form-select">
			<option value="">Choisir une catégorie</option>
			
			@foreach ($filters as $item)
			{{ $item->id }}
				<option value="{{ $item->id }}" {{ (old('filter') ?? $event->filter) == $item->id ? 'selected' : '' }}>{{ $item->name_fr }}</option>
			@endforeach
		</select>
		@error('filter') <div class="text-danger">{{ $message }}</div> @enderror
	</div>
	<div class="col-md-3 my-2">
		<label for="places" class="form-label">Nombre de places</label>
		<input type="number" name="places" id="places" class="form-control" min="0" max="99" step="1" value="{{ old('places') ?? $event->places ?? 0 }}">
		@error('places') <div class="text-danger">{{ $message }}</div> @enderror
	</div>
</div>

<div class="row">
	<div class="col-md-9 my-2">
		<label for="title_fr" class="form-label">Titre de l'événement FR</label>
		<input type="text" class="form-control" id="title_fr" name="title_fr" value="{{ old('title_fr') ?? $event->title_fr }}">
		@error('title_fr') <div class="text-danger">{{ $message }}</div> @enderror
	</div>
</div>

<div class="row">
	<div class="col-md-9 my-2">
		<label for="title_nl" class="form-label">Titre de l'événement NL</label>
		<input type="text" class="form-control" id="title_nl" name="title_nl" value="{{ old('title_nl') ?? $event->title_nl }}">
		@error('title_nl') <div class="text-danger">{{ $message }}</div> @enderror
	</div>
</div>

<div class="my-3">
	<label for="body_fr" class="form-label">Texte FR</label>
	<textarea name="body_fr" id="body_fr" cols="30" rows="5" class="form-control">{{ old('body_fr') ?? $event->body_fr }}</textarea>
	@error('body_fr') <div class="text-danger">{{ $message }}</div> @enderror
</div>
<div class="my-3">
	<label for="body_nl" class="form-label">Texte NL</label>
	<textarea name="body_nl" id="body_nl" cols="30" rows="5" class="form-control">{{ old('body_nl') ?? $event->body_nl }}</textarea>
	@error('body_nl') <div class="text-danger">{{ $message }}</div> @enderror
</div>

<div class="row">
	<div class="col-md-6 my-2">
		<label for="speaker_fr" class="form-label">Intervenant(s) FR</label>
		<input type="text" class="form-control" id="speaker_fr" name="speaker_fr" value="{{ old('speaker_fr') ?? $event->speaker_fr }}">
		@error('speaker_fr') <div class="text-danger">{{ $message }}</div> @enderror
	</div>
	<div class="col-md-6 my-2">
		<label for="speaker_nl" class="form-label">Intervenant(s) NL</label>
		<input type="text" class="form-control" id="speaker_nl" name="speaker_nl" value="{{ old('speaker_nl') ?? $event->speaker_nl }}">
		@error('speaker_nl') <div class="text-danger">{{ $message }}</div> @enderror
	</div>
	
</div>
<div class="row">
<div class="col-md-6 my-2">
		<label for="website" class="form-label">Site web (URL)</label>
		<input type="text" class="form-control" id="website" name="website" value="{{ old('website') ?? $event->website }}">
		@error('website') <div class="text-danger">{{ $message }}</div> @enderror
	</div>
	</div>


<div class="my-3">
	<label for="venue_fr" class="form-label">Lieu / Adresse FR</label>
	<textarea name="venue_fr" id="venue_fr" cols="30" rows="5" class="form-control">{{ old('venue_fr') ?? $event->venue_fr }}</textarea>
	@error('venue_fr') <div class="text-danger">{{ $message }}</div> @enderror
</div>
<div class="my-3">
	<label for="venue_nl" class="form-label">Lieu / Adresse NL</label>
	<textarea name="venue_nl" id="venue_nl" cols="30" rows="5" class="form-control">{{ old('venue_nl') ?? $event->venue_nl }}</textarea>
	@error('venue_nl') <div class="text-danger">{{ $message }}</div> @enderror
</div>

<button type="submit" class="btn btn-success text-uppercase my-4">Sauvegarder</button>