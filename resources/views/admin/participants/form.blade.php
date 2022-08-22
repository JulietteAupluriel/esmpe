@csrf

<div class="row">
	<div class="col-md-3 my-2">
		<label for="name" class="form-label">Nom de famille</label>
		<input type="text" class="form-control" id="name" name="name" value="{{ old('name') ?? $participant->name }}">
		@error('name') <div class="text-danger">{{ $message }}</div> @enderror
	</div>
	<div class="col-md-3 my-2">
		<label for="firstname" class="form-label">Prénom</label>
		<input type="text" class="form-control" id="firstname" name="firstname" value="{{ old('firstname') ?? $participant->firstname }}">
		@error('firstname') <div class="text-danger">{{ $message }}</div> @enderror
	</div>
	
</div>

<div class="row">
	<div class="col-md-3 my-2">
		<label for="email" class="form-label">Email</label>
		<input type="email" class="form-control" id="email" name="email" value="{{ old('email') ?? $participant->email }}">
		@error('email') <div class="text-danger">{{ $message }}</div> @enderror

		<label class="container" for="noemail">Pas d'email
		<input type="checkbox"  name="noemail2" onclick="checkFluency()" value="1" {{ old('noemail') ?? $participant->noemail=='1' ? 'checked' : '' }}  id="noemail2">
		
		<script>
			function checkFluency()
{
  var checkbox = document.getElementById('noemail2');
  if (checkbox.checked != true)
  {
    document.getElementById('noemail').value='0';
  }
  else{  document.getElementById('noemail').value='1'; }
}
			</script>
		<span class="checkmark"></span>
		@error('noemail') <div class="text-danger">{{ $message }}</div> @enderror
		</label>

		<input type="hidden"  class="form-control" id="noemail" name="noemail" value="{{ old('noemail') ?? $participant->noemail }}">

	</div>
	
	
</div>

<div class="row">
<div class="col-md-3 my-2">
		<label for="phone" class="form-label">Téléphone</label>
		<input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') ?? $participant->phone }}">
		@error('phone') <div class="text-danger">{{ $message }}</div> @enderror
	</div>

	<div class="col-md-3 my-2">
		<label for="national" class="form-label">Registre national</label>
		<input type="text" class="form-control" id="national" name="national" value="{{ old('national') ?? $participant->national }}" placeholder="00.00.00-000.00">
		@error('national') <div class="text-danger">{{ $message }}</div> @enderror
	</div>
	
	
</div>

<div class="row">
		<div class="col-md-3 my-2">
		<label for="commune" class="form-label">Commune</label>
		<input type="text" class="form-control" id="commune" name="commune" value="{{ old('commune') ?? $participant->commune }}">
		@error('commune') <div class="text-danger">{{ $message }}</div> @enderror
	</div>
	<div class="col-md-3 my-2">
		<label for="lang" class="form-label">Langue</label>
		<input type="text" class="form-control" id="lang" name="lang" value="{{ old('lang') ?? $participant->lang }}">
		@error('lang') <div class="text-danger">{{ $message }}</div> @enderror
	</div>
	</div>

<input type="number" name="event_id" value="{{ $participant->event_id ?? request()->query('event') }}" hidden>

<button type="submit" class="btn btn-success text-uppercase my-4">Sauvegarder</button>