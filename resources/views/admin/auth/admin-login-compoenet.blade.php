<form id="formAuthentication" class="mb-3" wire:submit.prevent = 'submit'>
    <div class="mb-3">
      <label for="email" class="form-label">Email </label>
      <input
        type="text"
        class="form-control"
        placeholder="Enter your email "
        autofocus
        wire:model='email'
      />
      @error('email')
          <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
    <div class="mb-3 form-password-toggle">
      <div class="d-flex justify-content-between">
        <label class="form-label" for="password">Password</label>
        <a href="auth-forgot-password-basic.html">
          <small>Forgot Password?</small>
        </a>
      </div>
      <div class="input-group input-group-merge">
        <input
        wire:model='password'
          type="password"
          class="form-control"
          placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
          aria-describedby="password"
        />
        <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
      </div>
      @error('password')
          <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
    <div class="mb-3">
      <div class="form-check">
        <input wire:model='remember' class="form-check-input" type="checkbox" id="remember-me" />
        <label class="form-check-label" for="remember-me"> Remember Me </label>
      </div>
    </div>
    <div class="mb-3">
        @include('admin.loading', ['name' => 'Login'])

    </div>
  </form>
