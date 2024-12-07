<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
</head>
<body>
    <div style="height: 400px; width: 600px; text-align: center; margin: auto; padding: 20px 0 20px 20px; border: 2px solid black;">
        <p style="font-size: 25px; font-weight: 600; color: blue;">Pesan dari {{ $details['name'] }}</p>
        <div style="font-size: 20px; text-align: left;">
            <p><span style="font-weight: 600;">Subject : </span> {{ $details['subject'] }}</p>
            <p><span style="font-weight: 600;">Name : </span> {{ $details['name'] }}</p>
            <p><span style="font-weight: 600;">Email : </span> {{ $details['email'] }}</p>
            <p><span style="font-weight: 600;">Message : </span> {{ $details['message'] }}</p>
        </div>
    </div>
</body>
</html>
