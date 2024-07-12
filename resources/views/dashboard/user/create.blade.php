@extends('dashboard.sidebar')

@section('content')

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>user</strong> inputs
            </div>
            <div class="card-body card-block">
                <form method="POST" action="{{ route('dashboard.user.store' ) }}" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Name in English</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="name_en" placeholder="write the name in english" class="form-control">
                            <span class="text-danger">{{ $errors->first('name_en') }}</span>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Name in Arabic</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="name_ar" placeholder="write the name in arabic" class="form-control">
                            <span class="text-danger">{{ $errors->first('name_ar') }}</span>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Email</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="email" placeholder="write the email" class="form-control">
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label"> Password</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="password" placeholder="enter your password" class="form-control">
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">phone</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="phone_number" placeholder="write the phone number" class="form-control">
                            <span class="text-danger">{{ $errors->first('phone_number') }}</span>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">whatsapp</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="whatsapp" placeholder="write the whatsapp" class="form-control">
                            <span class="text-danger">{{ $errors->first('whatsapp') }}</span>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">facebook</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="facebook" placeholder="write the facebook" class="form-control">
                            <span class="text-danger">{{ $errors->first('facebook') }}</span>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">tiktok</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="tiktok" placeholder="write the tiktok" class="form-control">
                            <span class="text-danger">{{ $errors->first('tiktok') }}</span>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">snapchat</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="snapchat" placeholder="write the snapchat" class="form-control">
                            <span class="text-danger">{{ $errors->first('snapchat') }}</span>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">telegram</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="telegram" placeholder="write the telegram" class="form-control">
                            <span class="text-danger">{{ $errors->first('telegram') }}</span>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">youtube</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="youtube" placeholder="write the youtube" class="form-control">
                            <span class="text-danger">{{ $errors->first('youtube') }}</span>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">twitter</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="twitter" placeholder="write the twitter" class="form-control">
                            <span class="text-danger">{{ $errors->first('twitter') }}</span>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">instagram</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="instagram" placeholder="write the instagram" class="form-control">
                            <span class="text-danger">{{ $errors->first('instagram') }}</span>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">image</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="file" id="text-input" name="image"  class="form-control">
                            <span class="text-danger">{{ $errors->first('image') }}</span>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="textarea-input" class=" form-control-label">data</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <textarea rows="10" cols="30" class="ckeditor form-control" name="data"></textarea>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="selectLg" class=" form-control-label">Is admin</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="role" id="selectLg" class="form-control">
                                <option value="">Please select if the the user is admin or user </option>
                                <option value="admin">admin</option>
                                <option value="user">user </option>
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <a class="btn btn-danger btn-sm" href="{{ route('dashboard.user.create') }}">
                            <i class="fa fa-ban"></i> Reset
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
