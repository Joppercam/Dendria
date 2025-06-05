<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nuevo mensaje de contacto</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f8f9fa;
        }
        .email-container {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
            border-bottom: 3px solid #3b82f6;
            padding-bottom: 20px;
        }
        .logo {
            font-size: 28px;
            font-weight: bold;
            color: #1e40af;
            margin-bottom: 10px;
        }
        .logo .yellow {
            color: #f59e0b;
        }
        .subtitle {
            color: #6b7280;
            font-size: 16px;
        }
        .content {
            margin-bottom: 30px;
        }
        .field {
            margin-bottom: 20px;
            padding: 15px;
            background-color: #f3f4f6;
            border-radius: 6px;
            border-left: 4px solid #3b82f6;
        }
        .field-label {
            font-weight: 600;
            color: #374151;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 8px;
        }
        .field-value {
            color: #111827;
            font-size: 16px;
            word-wrap: break-word;
        }
        .message-field {
            background-color: #eff6ff;
            border-left-color: #2563eb;
        }
        .footer {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #e5e7eb;
            color: #6b7280;
            font-size: 14px;
        }
        .action-buttons {
            text-align: center;
            margin: 25px 0;
        }
        .btn {
            display: inline-block;
            padding: 12px 24px;
            background-color: #3b82f6;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 600;
            margin: 0 10px;
        }
        .btn-secondary {
            background-color: #6b7280;
        }
        .timestamp {
            color: #9ca3af;
            font-size: 12px;
            font-style: italic;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <div class="logo">
                Dendr<span class="yellow">IA</span>
            </div>
            <div class="subtitle">Nuevo mensaje de contacto recibido</div>
        </div>

        <div class="content">
            <div class="field">
                <div class="field-label">Nombre</div>
                <div class="field-value">{{ $contactData['name'] }}</div>
            </div>

            <div class="field">
                <div class="field-label">Email</div>
                <div class="field-value">
                    <a href="mailto:{{ $contactData['email'] }}" style="color: #3b82f6;">
                        {{ $contactData['email'] }}
                    </a>
                </div>
            </div>

            <div class="field">
                <div class="field-label">Asunto</div>
                <div class="field-value">{{ $contactData['subject'] }}</div>
            </div>

            <div class="field message-field">
                <div class="field-label">Mensaje</div>
                <div class="field-value">{{ nl2br(e($contactData['message'])) }}</div>
            </div>
        </div>

        <div class="action-buttons">
            <a href="mailto:{{ $contactData['email'] }}?subject=Re: {{ $contactData['subject'] }}" class="btn">
                Responder Email
            </a>
            <a href="https://dendria.cl/admin" class="btn btn-secondary">
                Ver Panel Admin
            </a>
        </div>

        <div class="footer">
            <div class="timestamp">
                Recibido el {{ now()->format('d/m/Y H:i:s') }} (Chile)
            </div>
            <p style="margin-top: 15px;">
                Este mensaje fue enviado desde el formulario de contacto en 
                <a href="https://dendria.cl" style="color: #3b82f6;">dendria.cl</a>
            </p>
        </div>
    </div>
</body>
</html>