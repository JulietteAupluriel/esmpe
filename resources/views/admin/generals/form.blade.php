@csrf



<div class="my-3">
	<label for="intro_fr" class="form-label">Homepage > Intro FR</label>
	<textarea name="intro_fr" id="intro_fr" cols="30" rows="5" class="form-control">{{ old('intro_fr') ?? $general->intro_fr }}</textarea>
	@error('intro_fr') <div class="text-danger">{{ $message }}</div> @enderror
</div>

<div class="my-3">
	<label for="intro_nl" class="form-label">Homepage > Intro NL</label>
	<textarea name="intro_nl" id="intro_nl" cols="30" rows="5" class="form-control">{{ old('intro_nl') ?? $general->intro_nl }}</textarea>
	@error('intro_nl') <div class="text-danger">{{ $message }}</div> @enderror
</div>


<div class="my-3">
	<label for="aboutintro_fr" class="form-label">A propos > Intro FR</label>
	<textarea name="aboutintro_fr" id="aboutintro_fr" cols="30" rows="5" class="form-control">{{ old('aboutintro_fr') ?? $general->aboutintro_fr }}</textarea>
	@error('aboutintro_fr') <div class="text-danger">{{ $message }}</div> @enderror
</div>

<div class="my-3">
	<label for="aboutintro_nl" class="form-label">A propos > Intro NL</label>
	<textarea name="aboutintro_nl" id="aboutintro_nl" cols="30" rows="5" class="form-control">{{ old('aboutintro_nl') ?? $general->aboutintro_nl }}</textarea>
	@error('aboutintro_nl') <div class="text-danger">{{ $message }}</div> @enderror
</div>

<div class="my-3">
	<label for="about_fr" class="form-label">A propos > Contenu FR</label>
	<textarea name="about_fr" id="about_fr" cols="30" rows="5" class="form-control">{{ old('about_fr') ?? $general->about_fr }}</textarea>
	@error('about_fr') <div class="text-danger">{{ $message }}</div> @enderror
</div>

<div class="my-3">
	<label for="about_nl" class="form-label">A propos > Contenu NL</label>
	<textarea name="about_nl" id="about_nl" cols="30" rows="5" class="form-control">{{ old('about_nl') ?? $general->about_nl }}</textarea>
	@error('about_nl') <div class="text-danger">{{ $message }}</div> @enderror
</div>


<div class="my-3">
	<label for="formintro_fr" class="form-label">Formulaire > Intro FR</label>
	<textarea name="formintro_fr" id="formintro_fr" cols="30" rows="5" class="form-control">{{ old('formintro_fr') ?? $general->formintro_fr }}</textarea>
	@error('formintro_fr') <div class="text-danger">{{ $message }}</div> @enderror
</div>


<div class="my-3">
	<label for="formintro_nl" class="form-label">Formulaire > Intro NL</label>
	<textarea name="formintro_nl" id="formintro_nl" cols="30" rows="5" class="form-control">{{ old('formintro_nl') ?? $general->formintro_nl }}</textarea>
	@error('formintro_nl') <div class="text-danger">{{ $message }}</div> @enderror
</div>



<div class="my-3">
	<label for="legals_fr" class="form-label">Legals > Contenu FR</label>
	<textarea name="legals_fr" id="legals_fr" cols="30" rows="5" class="form-control">{{ old('legals_fr') ?? $general->legals_fr }}</textarea>
	@error('about_fr') <div class="text-danger">{{ $message }}</div> @enderror
</div>

<div class="my-3">
	<label for="legals_nl" class="form-label">Legals > Contenu NL</label>
	<textarea name="legals_nl" id="legals_nl" cols="30" rows="5" class="form-control">{{ old('legals_nl') ?? $general->legals_nl }}</textarea>
	@error('legals_nl') <div class="text-danger">{{ $message }}</div> @enderror
</div>



<button type="submit" class="btn btn-success text-uppercase my-4">Sauvegarder</button>