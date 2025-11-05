<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ $subject }}</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #f5f7fa;
        }
        
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        
        .header {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            padding: 30px 20px;
            text-align: center;
            color: white;
        }
        
        .header h1 {
            margin: 0;
            font-size: 28px;
            font-weight: 600;
        }
        
        .header p {
            margin: 10px 0 0;
            opacity: 0.9;
            font-size: 16px;
        }
        
        .content {
            padding: 30px;
        }
        
        .greeting {
            font-size: 18px;
            margin-bottom: 20px;
            color: #2a5298;
        }
        
        .info-box {
            background-color: #f0f7ff;
            border-left: 4px solid #2a5298;
            padding: 15px 20px;
            margin: 20px 0;
            border-radius: 0 4px 4px 0;
        }
        
        .info-box h3 {
            margin-top: 0;
            color: #1e3c72;
        }
        
        .details {
            margin: 25px 0;
        }
        
        .detail-row {
            display: flex;
            margin-bottom: 10px;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
        }
        
        .detail-label {
            font-weight: 600;
            width: 150px;
            color: #555;
        }
        
        .detail-value {
            flex: 1;
        }
        
        .cta-button {
            display: inline-block;
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            color: white !important;
            padding: 14px 30px;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 600;
            font-size: 16px;
            margin: 20px 0;
            text-align: center;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(42, 82, 152, 0.3);
            min-width: 200px;
        }
        
        .cta-button:hover {
            background: linear-gradient(135deg, #2a5298 0%, #1e3c72 100%);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(42, 82, 152, 0.4);
        }
        
        .cta-button:active {
            transform: translateY(0);
            box-shadow: 0 2px 10px rgba(42, 82, 152, 0.3);
        }
        
        .next-steps {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 6px;
            margin-top: 25px;
        }
        
        .next-steps h3 {
            color: #1e3c72;
            margin-top: 0;
        }
        
        .footer {
            background: #f8f9fa;
            padding: 20px;
            text-align: center;
            font-size: 14px;
            color: #666;
            border-top: 1px solid #eaeaea;
        }
        
        .footer p {
            margin: 5px 0;
        }
        
        .logo {
            font-weight: bold;
            color: #1e3c72;
            font-size: 18px;
        }
        
        .button-container {
            text-align: center;
            margin: 25px 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Cloud Computing Class</h1>
            <p>Konfirmasi Pendaftaran Berhasil</p>
        </div>
        
        <div class="content">
            <div class="greeting">
                Halo <strong>{{ $full_name }}</strong>,
            </div>
            
            <p>Terima kasih telah mendaftar untuk kelas Cloud Computing. Pendaftaran Anda telah berhasil kami terima dan diproses.</p>
            
            <div class="info-box">
                <h3>Pendaftaran Dikonfirmasi</h3>
                <p>Kami dengan senang hati mengonfirmasi bahwa Anda telah terdaftar dalam program Cloud Computing Class.</p>
            </div>
            
            <div class="details">
                <h3 style="color: #1e3c72; margin-bottom: 15px;">Detail Pendaftaran</h3>
                
                <div class="detail-row">
                    <div class="detail-label">Nama Lengkap</div>
                    <div class="detail-value">{{ $full_name }}</div>
                </div>
                
                <div class="detail-row">
                    <div class="detail-label">Email</div>
                    <div class="detail-value">{{ $student_email }}</div>
                </div>
                
                <div class="detail-row">
                    <div class="detail-label">Tanggal Lahir</div>
                    <div class="detail-value">{{ $birth_date }}</div>
                </div>
                
                <div class="detail-row">
                    <div class="detail-label">Status</div>
                    <div class="detail-value"><strong style="color: #28a745;">Terkonfirmasi</strong></div>
                </div>
            </div>
            
            <div class="button-container">
                <a href="https://daffa.khufra.my.id/" class="cta-button">Konfirmasi Registrasi</a>
            </div>
            
            <div class="next-steps">
                <h3>Langkah Selanjutnya</h3>
                <ol>
                    <li>Klik tombol "Konfirmasi Registrasi" di atas untuk menyelesaikan proses pendaftaran</li>
                    <li>Periksa email Anda untuk informasi lebih lanjut tentang jadwal kelas</li>
                    <li>Bergabung dengan grup diskusi kelas melalui link yang akan dikirim</li>
                    <li>Siapkan lingkungan belajar yang nyaman</li>
                    <li>Pastikan Anda memiliki akses ke materi pembelajaran</li>
                </ol>
            </div>
            
            <p>Jika Anda memiliki pertanyaan atau membutuhkan bantuan, jangan ragu untuk menghubungi kami.</p>
            
            <p>Salam hangat,<br>
            <strong>Tim Cloud Computing Class</strong></p>
        </div>
        
        <div class="footer">
            <p class="logo">{{ config('app.name') }}</p>
            <p>Email ini dikirim secara otomatis. Mohon tidak membalas email ini.</p>
            <p>&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
        </div>
    </div>
</body>
</html>