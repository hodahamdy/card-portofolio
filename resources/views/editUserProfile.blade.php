<link href="{{ asset('dashboard_assets/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

<div class="container">
    <form action="{{ route('userprofile.update', ['name' => $user->name_en]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name_en" class="form-label">Name (EN):</label>
            <input type="text" class="form-control" name="name_en" id="name_en" value="{{ $user->name_en }}" required>
        </div>
        <div class="mb-3">
            <label for="name_ar" class="form-label">Name (Ar):</label>
            <input type="text" class="form-control" name="name_ar" id="name_ar" value="{{ $user->name_ar }}" >
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="text" class="form-control" name="email" id="email" value="{{ $user->email }}" >
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password :</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>

        <div class="mb-3">
            <label for="phone_number" class="form-label">Phone Number :</label>
            <input type="text" class="form-control" name="phone_number" id="phone_number" value="{{ $user->userData->phone_number }}" >
        </div>
        <div class="mb-3">
            <label for="whatsapp" class="form-label">WhatsApp :</label>
            <input type="text" class="form-control" name="whatsapp" id="whatsapp" value="{{ $user->userData->whtasapp }}" required >
        </div>
        <div class="mb-3">
            <label for="instagram" class="form-label">Instagram :</label>
            <input type="text" class="form-control" name="instagram" id="instagram" value="{{ $user->userData->instagram }}" >
        </div>
        <div class="mb-3">
            <label for="snapchat" class="form-label">SnapChat :</label>
            <input type="text" class="form-control" name="snapchat" id="snapchat" value="{{ $user->userData->snapchat }}" >
        </div>
        <div class="mb-3">
            <label for="telegram" class="form-label">Telegram :</label>
            <input type="text" class="form-control" name="telegram" id="telegram" value="{{ $user->userData->telegram }}" >
        </div>
        <div class="mb-3">
            <label for="facebook" class="form-label">Facebook :</label>
            <input type="text" class="form-control" name="facebook" id="facebook" value="{{ $user->userData->facebook }}" >
        </div>
        <div class="mb-3">
            <label for="tiktok" class="form-label">TikTok :</label>
            <input type="text" class="form-control" name="tiktok" id="tiktok" value="{{ $user->userData->tiktok }}" >
        </div>
        <div class="mb-3">
            <label for="twitter" class="form-label">Twitter :</label>
            <input type="text" class="form-control" name="twitter" id="twitter" value="{{ $user->userData->twitter }}" >
        </div>
        <div class="mb-3">
            <label for="Youtube" class="form-label">YouTube :</label>
            <input type="text" class="form-control" name="Youtube" id="Youtube" value="{{ $user->userData->Youtube }}" >
        </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Additional Data :</label>
            <textarea class="ckeditor form-control" id="exampleFormControlTextarea1"  name="data" rows="3">{!! $user->userData->data !!}</textarea>
          </div>
        <div>
            <div>
                <label for="image">Image:</label>
                <input type="file" id="image" name="image">
                @if ($user->image)
                    <img src="{{ asset('uploads/user/' . $user->image) }}" alt="{{ $user->name_en }}" width="200px" height="200px" class="profile-img">
                @endif
            </div>
            <button type="submit">Update</button>
        </div>
    </form>
</div>
<script src="{{asset('dashboard_assets/ckeditor/ckeditor.js')}}" type="text/javascript"></script>
