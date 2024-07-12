<style>
    body {
    background-color: #2c2c2c;
    display: flex;
    justify-content: center;
    align-items: center;
    /* height: 100vh; */
    margin: 5;
    padding: 50px;
    font-family: Arial, sans-serif;
}

.card {
  width: fit-content;
  background-color: #1a1b21;
  margin: 10px auto;
  border-radius: 8px;
  color: #ffffff;
}

.profile-img {
    width: 100%;
    margin-bottom: 15px;
    height: 700px;
}

.contact-buttons {
    display: flex;
    justify-content: space-between;
    margin: 15px 0;
}

.whatsapp-btn, .call-btn {
    background-color: #4CAF50;
    border: none;
    border-radius: 5px;
    color: white;
    padding: 10px;
    cursor: pointer;
    flex: 1;
    margin: 0 5px;
    text-decoration: none;
}

.call-btn {
    background-color: #555;
}

h2, h3 {
    margin: 10px 0;
}

p {
    font-size: 14px;
    line-height: 1.5;
    margin: 10px 0;
}

.social-icons {
    padding: 8px 0;
  background-color: #ffffffbf;
  border-radius: 0 0 8px 8px;
  display: flex;
  justify-content: space-evenly;
  align-items: center;
}

.social-icons img {
    width: 32px;
    height: 32px;
}

</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Card</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="card">
        <img src="{{ asset('uploads/user/' . $user->image) }}" alt="User Image" class="profile-img">
        <h2>{{ $user->name_en }}</h2>
        <div class="contact-buttons">
            <a href="https://wa.me/{{ $user->userData->whatsapp }}" class="whatsapp-btn">WhatsApp</a>
            <a href="tel:{{ $user->userData->phone_number }}" class="call-btn">Call Me</a>
        </div>
        <p>{!! $user->userData->data !!}</p>
        <div class="social-icons">
            <a href="{{ $user->userData->facebook }}"><img src="https://www.svgrepo.com/show/333535/facebook-circle.svg" alt="Facebook"></a>
            <a href="{{ $user->userData->instagram }}"><img src="https://www.svgrepo.com/show/333555/instagram-alt.svg" alt="Instagram"></a>
            <a href="{{ $user->userData->tiktok }}"><img src="https://www.svgrepo.com/show/333611/tiktok.svg" alt="TikTok"></a>
            <a href="{{ $user->userData->youtube }}"><img src="https://www.svgrepo.com/show/333494/youtube.svg" alt="YouTube"></a>
            <a href="{{ route('userprofile.edit', ['name' => $user->name_en]) }}" class="btn btn-primary">Edit</a>

        </div>
    </div>
</body>
</html>
