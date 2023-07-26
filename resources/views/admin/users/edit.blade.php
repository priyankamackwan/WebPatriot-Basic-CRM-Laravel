@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.user.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.users.update", [$user->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.user.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $user->name) }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="email">{{ trans('cruds.user.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email', $user->email) }}" required>
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="password">{{ trans('cruds.user.fields.password') }}</label>
                <input class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" type="password" name="password" id="password">
                @if($errors->has('password'))
                    <div class="invalid-feedback">
                        {{ $errors->first('password') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.password_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('approved') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="approved" value="0">
                    <input class="form-check-input" type="checkbox" name="approved" id="approved" value="1" {{ $user->approved || old('approved', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="approved">{{ trans('cruds.user.fields.approved') }}</label>
                </div>
                @if($errors->has('approved'))
                    <div class="invalid-feedback">
                        {{ $errors->first('approved') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.approved_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="roles">{{ trans('cruds.user.fields.roles') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('roles') ? 'is-invalid' : '' }}" name="roles[]" id="roles" multiple required>
                    @foreach($roles as $id => $role)
                        <option value="{{ $id }}" {{ (in_array($id, old('roles', [])) || $user->roles->contains($id)) ? 'selected' : '' }}>{{ $role }}</option>
                    @endforeach
                </select>
                @if($errors->has('roles'))
                    <div class="invalid-feedback">
                        {{ $errors->first('roles') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.roles_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="phone_number">{{ trans('cruds.user.fields.phone_number') }}</label>
                <input class="form-control {{ $errors->has('phone_number') ? 'is-invalid' : '' }}" type="text" name="phone_number" id="phone_number" value="{{ old('phone_number', $user->phone_number) }}">
                @if($errors->has('phone_number'))
                    <div class="invalid-feedback">
                        {{ $errors->first('phone_number') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.phone_number_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="phone_otp">{{ trans('cruds.user.fields.phone_otp') }}</label>
                <input class="form-control {{ $errors->has('phone_otp') ? 'is-invalid' : '' }}" type="text" name="phone_otp" id="phone_otp" value="{{ old('phone_otp', $user->phone_otp) }}">
                @if($errors->has('phone_otp'))
                    <div class="invalid-feedback">
                        {{ $errors->first('phone_otp') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.phone_otp_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.user.fields.otp_verified') }}</label>
                @foreach(App\Models\User::OTP_VERIFIED_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('otp_verified') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="otp_verified_{{ $key }}" name="otp_verified" value="{{ $key }}" {{ old('otp_verified', $user->otp_verified) === (string) $key ? 'checked' : '' }}>
                        <label class="form-check-label" for="otp_verified_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('otp_verified'))
                    <div class="invalid-feedback">
                        {{ $errors->first('otp_verified') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.otp_verified_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.user.fields.provider') }}</label>
                @foreach(App\Models\User::PROVIDER_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('provider') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="provider_{{ $key }}" name="provider" value="{{ $key }}" {{ old('provider', $user->provider) === (string) $key ? 'checked' : '' }}>
                        <label class="form-check-label" for="provider_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('provider'))
                    <div class="invalid-feedback">
                        {{ $errors->first('provider') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.provider_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.user.fields.is_active') }}</label>
                @foreach(App\Models\User::IS_ACTIVE_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('is_active') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="is_active_{{ $key }}" name="is_active" value="{{ $key }}" {{ old('is_active', $user->is_active) === (string) $key ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_active_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('is_active'))
                    <div class="invalid-feedback">
                        {{ $errors->first('is_active') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.is_active_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection