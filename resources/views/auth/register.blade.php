@extends('main')

@section('titolo') NEW USER @endsection

@section('content')

            <div class="panel panel-default">

                <div class="panel-body">
                  <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                      {{ csrf_field() }}
                      @if (session('confirmation-success'))
                          <div class="alert alert-success">
                              {{ session('confirmation-success') }}
                          </div>
                      @else
                  <div class="row">
                    <div class="col-sm-12 col-md-6">
                    <h2>Contact person</h2>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="control-label">E-mail address</label>

                                <div>
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="control-label">Password</label>

                                <div>
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class=" control-label">Confirm password</label>

                                <div >
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class=" control-label">First name</label>

                                <div >
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
                                <label for="surname" class=" control-label">Last name</label>

                                <div >
                                    <input id="surname" type="text" class="form-control" name="surname" value="{{ old('surname') }}" required autofocus>

                                    @if ($errors->has('surname'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('surname') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('telephone') ? ' has-error' : '' }}">
                                <label for="telephone" class=" control-label">Telephone</label>

                                <div >
                                    <input id="telephone" type="text" class="form-control" name="telephone" value="{{ old('telephone') }}" required autofocus>

                                    @if ($errors->has('telephone'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('telephone') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('job_title') ? ' has-error' : '' }}">
                                <label for="job_title" class=" control-label">Job title</label>

                                <div >
                                    <input id="job_title" type="text" class="form-control" name="job_title" value="{{ old('job_title') }}" required autofocus>

                                    @if ($errors->has('job_title'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('job_title') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>



                </div>

                <div class="col">
                  <h2>Company data</h2>
                  <div class="form-group{{ $errors->has('company_name') ? ' has-error' : '' }}">
                      <label for="company_name" class="control-label">Entrant company name</label>

                      <div>
                          <input id="company_name" type="text" class="form-control" name="company_name" value="{{ old('company_name') }}" required>

                          @if ($errors->has('company_name'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('company_name') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>
                  <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                      <label for="type" class=" control-label">Type</label>

                      <div >
                          <select id="type" type="text" class="form-control" name="type"  required autofocus>
                            <option value="Agency">Agency</option>
                            <option value="Company/Client">Company/Client</option>
                            <option value="Production Company">Production Company</option>
                            <option value="Graphic Agency">Graphic Agency</option>
                            <option value="Association">Association</option>
                          </select>

                          @if ($errors->has('type'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('type') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>
                  <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                      <label for="address" class="control-label">Address</label>

                      <div>
                          <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required>

                          @if ($errors->has('address'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('address') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>
                  <div class="form-group{{ $errors->has('postcode') ? ' has-error' : '' }}">
                      <label for="postcode" class="control-label">Postcode</label>

                      <div>
                          <input id="postcode" type="text" class="form-control" name="postcode" value="{{ old('postcode') }}" required>

                          @if ($errors->has('postcode'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('postcode') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>
                  <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                      <label for="city" class="control-label">City</label>

                      <div>
                          <input id="city" type="text" class="form-control" name="city" value="{{ old('city') }}" required>

                          @if ($errors->has('city'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('city') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>
                  <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                      <label for="country" class="control-label">Country</label>

                      <div >
                          <select id="country" class="form-control" name="country"  required autofocus>
                            @foreach($countries as $code => $cName)
                              <option value="{{$code}}">{{$cName}}</option>
                            @endforeach
                          </select>

                          @if ($errors->has('country'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('country') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group{{ $errors->has('vat') ? ' has-error' : '' }}">
                    <div class="alert alert-danger">
                      At least one between VAT number and Tax Identification number must be specified
                    </div>

                      <label for="vat" class="control-label">VAT number</label>
                      <div>
                          <input id="vat" type="text" class="form-control" name="vat" value="{{ old('vat') }}">

                          @if ($errors->has('vat'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('vat') }}</strong>
                              </span>
                          @endif
                      </div>
                      <br/>

                      <label for="taxId" class="control-label">Tax Identification number</label>
                      <div>
                          <input id="taxId" type="text" class="form-control" name="taxId" value="{{ old('taxId') }}">

                          @if ($errors->has('taxId'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('taxId') }}</strong>
                              </span>
                          @endif
                      </div>

                  </div>
                  <div class="form-group{{ $errors->has('website') ? ' has-error' : '' }}">
                      <label for="website" class="control-label">Company website address</label>

                      <div >

                        <input id="website" type="text" class="form-control" name="website" value="{{ old('website') }}" required>

                          @if ($errors->has('website'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('website') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>



                </div>
              </div>
              <hr/>
              <div class="row">
                <div class="col">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox" name="privacy" class="form-check-input">
                      I carefully read the informative on the <a href="#">Privacy</a> and I give my consent to the handling of my sensitive data
                    </label>
                  </div>
                  <button type="submit" class="btn btn-primary">
                      Register
                  </button>

                </div>
              </div>
            </form>
            @endif
            </div>

            </div>



@endsection
