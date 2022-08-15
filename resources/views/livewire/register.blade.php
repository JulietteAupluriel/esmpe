
<div class="form">

	@if (! $this->registered)
	<span class="mandatory">{{ __('text.mandatory') }}</span>	
	<fieldset>
                <div class="elt">
				<label for="name">{{ __('text.nom') }}</label>
			<input type="text" wire:model="name" id="name" required>
			@error('name') <div class="error">{{ __('text.mandatorys') }}</div> @enderror
                </div>
                <div class="elt">
				<label for="firstname">{{ __('text.prénom') }}</label>
			<input type="text" wire:model="firstname" id="firstname" required>
			@error('firstname') <div class="error">{{ __('text.mandatorys') }}</div> @enderror
                </div>

            </fieldset>

			<fieldset>
			<div class="elt">
				<label for="email">{{ __('text.email') }}</label>
				<input type="email" wire:model="email" id="email" >
				@error('email') <div class="error">{{ __('text.emailType') }}</div> @enderror
			</div>
			<div class="elt2 elt">

			<label class="container" for="noemail">{{ __('text.noemail') }}
				<input type="checkbox" checked="checked" wire:model="noemail" id="noemail">
				<span class="checkmark"></span>
			</label>

			
			
</div>
		
</fieldset>
<fieldset>
<div class="elt">
			<label for="phone">{{ __('text.phone') }}</label>
			<input type="text" wire:model="phone" id="phone" required>
			@error('phone') <div class="error">{{ __('text.mandatorys') }}</div> @enderror
		</div>
		<div class="elt">
			<label for="commune">{{ __('text.commune') }}</label>
			<input type="text" wire:model="commune" id="commune" required>
			@error('commune') <div class="error">{{ __('text.mandatorys') }}</div> @enderror
		</div>
		
		<div class="elt">
			<label for="national">{{ __('text.numeroregistre') }}</label>
			<input type="text" wire:model="national" id="national" placeholder="00.00.00-000.00" required>
			@error('national') <div class="error">{{ __('text.mandatorys') }}</div> @enderror
		</div>
</fieldset>
<fieldset>
	
			<div class="line">
				
				<label class="container" for="accept">

					@if(app()->isLocale('fr')) 
					J'accepte les <a href="{{ route('legal') }}" target="_blank">conditions d'utilisation du site</a>.
					@else
					J'accepte les <a href="{{ route('legal') }}" target="_blank">conditions d'utilisation du site</a>. NL
					@endif

				<input type="checkbox" checked="checked" wire:model="accept" id="accept">
				<span class="checkmark"></span>
			</label>
				
				@error('accept') <div class="error">{{ __('text.mandatorys') }}</div> @enderror
			</div>

</fieldset>
<fieldset>
			<div class="line">
			
				
				<label class="container" for="declare">{{ __('text.chercheuremploi') }}
				<input type="checkbox" checked="checked" wire:model="declare" id="declare">
				<span class="checkmark"></span>
			</label>
				
				@error('declare') <div class="error">{{ __('text.mandatorys') }}</div> @enderror
			</div>
			</fieldset>

			<button wire:click="register">{{ __('text.envoyer') }}</button>
	
	@endif

	@if ($this->registered)
		<div class="registered">{{ __('text.thankyou') }}</div>
	@endif


</div>
