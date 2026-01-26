<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="date=no">
    <meta name="format-detection" content="address=no">
    <meta name="x-apple-disable-message-reformatting">
    <title>邮箱验证码</title>
    <!--[if mso]>
    <noscript>
        <xml>
            <o:OfficeDocumentSettings>
                <o:PixelsPerInch>96</o:PixelsPerInch>
            </o:OfficeDocumentSettings>
        </xml>
    </noscript>
    <![endif]-->
    <style type="text/css">
        /* 重置样式 */
        body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
        table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
        img { -ms-interpolation-mode: bicubic; border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; }
        body { height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important; }
        
        /* 基础样式 */
        body {
            background-color: #f5f5f7;
            color: #1d1d1f;
            font-family: -apple-system, BlinkMacSystemFont, "SF Pro Text", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 17px;
            line-height: 1.47059;
            font-weight: 400;
            letter-spacing: -.022em;
        }
        
        /* 容器样式 */
        .container {
            max-width: 680px;
            margin: 0 auto;
            padding: 12px;
        }
        
        /* 卡片样式 */
        .card {
            background-color: #ffffff;
            border-radius: 18px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            margin-bottom: 20px;
        }
        
        /* 头部样式 */
        .header {
            background-color: #0071e3;
            padding: 40px 30px;
            text-align: center;
        }
        
        .logo {
            font-size: 28px;
            font-weight: 600;
            color: #ffffff;
            margin-bottom: 8px;
            letter-spacing: 0.008em;
        }
        
        .subtitle {
            font-size: 17px;
            color: rgba(255, 255, 255, 0.8);
            font-weight: 400;
        }
        
        /* 内容区域 */
        .content {
            padding: 24px 20px;
        }
        
        /* 标题样式 */
        .title {
            font-size: 32px;
            font-weight: 700;
            color: #1d1d1f;
            margin-bottom: 20px;
            letter-spacing: 0.004em;
            line-height: 1.125;
        }
        
        /* 描述文本 */
        .description {
            font-size: 17px;
            color: #86868b;
            margin-bottom: 16px;
            line-height: 1.47059;
            font-weight: 400;
        }
        
        
        
        /* 验证码容器 */
        .code-container {
            background-color: #f2f2f7;
            border-radius: 12px;
            padding: 24px;
            margin: 16px 0;
            text-align: center;
            border-top: 3px solid #0071e3;
        }
        
        .code-label {
            font-size: 14px;
            color: #86868b;
            margin-bottom: 16px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.04em;
        }
        
        .code {
            font-size: 36px;
            font-weight: 600;
            color: #1d1d1f;
            letter-spacing: 6px;
            font-family: "SF Mono", Monaco, "Cascadia Code", "Roboto Mono", Consolas, "Courier New", monospace;
        }
        
        /* 信息框样式 */
        .info-box {
            background-color: rgba(255, 59, 48, 0.1);
            border-left: 4px solid #ff3b30;
            border-radius: 0 8px 8px 0;
            padding: 12px 16px;
            margin: 16px 0;
        }
        
        .info-box p {
            font-size: 14px;
            color: #ff3b30;
            font-weight: 500;
            margin: 0;
        }
        
        /* 安全提示 */
        .security-note {
            background-color: rgba(0, 113, 227, 0.05);
            border-radius: 12px;
            padding: 16px;
            margin: 16px 0;
        }
        
        .security-note p {
            font-size: 14px;
            color: #86868b;
            line-height: 1.5;
            margin: 0;
        }
        
        /* 页脚样式 */
        .footer {
            text-align: center;
            padding: 20px 16px;
            color: #86868b;
        }
        
        .footer-text {
            font-size: 12px;
            margin-bottom: 16px;
            line-height: 1.33337;
        }
        
        .footer-links {
            font-size: 12px;
        }
        
        .footer-links a {
            color: #86868b;
            text-decoration: none;
            margin: 0 8px;
        }
        
        .footer-links a:hover {
            color: #0071e3;
            text-decoration: underline;
        }
        
        /* 响应式设计 */
        @media only screen and (max-width: 600px) {
            .container {
                padding: 10px;
            }
            
            .content {
                padding: 20px 16px;
            }
            
            .title {
                font-size: 28px;
            }
            
            .logo {
                font-size: 24px;
            }
            
            .code {
                font-size: 28px;
                letter-spacing: 4px;
            }
            
            .code-container {
                padding: 20px 16px;
            }
        }
        
        @media only screen and (max-width: 380px) {
            .content {
                padding: 16px 10px;
            }
            
            .title {
                font-size: 26px;
            }
            
            .description {
                font-size: 16px;
            }
            
            .code {
                font-size: 26px;
                letter-spacing: 3px;
            }
            
            .code-container {
                padding: 16px 12px;
            }
        }
        
        @media only screen and (max-width: 320px) {
            .content {
                padding: 20px 12px;
            }
            
            .title {
                font-size: 24px;
            }
            
            .description {
                font-size: 15px;
            }
            
            .code {
                font-size: 24px;
                letter-spacing: 2px;
            }
            
            .code-container {
                padding: 14px 10px;
            }
        }
    </style>
</head>
<body>
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td align="center" valign="top" bgcolor="#f5f5f7">
                <!--[if (gte mso 9)|(IE)]>
                <table align="center" border="0" cellspacing="0" cellpadding="0" width="680">
                <tr>
                <td align="center" valign="top" width="680">
                <![endif]-->
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 680px;" class="container">
                    <tr>
                        <td align="center" valign="top">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%" class="card">
                                <tr>
                                    <td align="center" valign="top" class="header">
                                        <div class="logo">{{$name}}</div>
                                        <div class="subtitle">邮箱验证码</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" valign="top" class="content">
                                        <h1 class="title">验证您的邮箱</h1>
                                        <p class="description">
                                            请使用下方验证码完成邮箱验证。为了确保安全，此验证码将在 <strong>5 分钟</strong> 后失效。
                                        </p>
                                        
                                        <div class="code-container">
                                            <div class="code-label">验证码</div>
                                            <div class="code">{{$code}}</div>
                                        </div>
                                        
                                        <div class="info-box">
                                            <p>⏰ 验证码有效期为 5 分钟，请尽快使用</p>
                                        </div>
                                        
                                        <div class="security-note">
                                            <p>
                                                🔐 <strong>安全提示：</strong>请勿将此验证码分享给他人。如果您没有请求此验证码，请忽略此邮件。
                                            </p>
                                        </div>
                                        
                                        <table border="0" cellspacing="0" cellpadding="0" align="center" style="width: 100%; max-width: 280px;">
                                            <tr>
                                                <td align="center" style="border-radius: 980px;" bgcolor="#0071e3">
                                                    <a href="{{$url}}" target="_blank" style="font-size: 16px; font-family: -apple-system, BlinkMacSystemFont, 'SF Pro Text', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; border-radius: 980px; padding: 10px 20px; display: inline-block; font-weight: 400; width: 100%;">访问 {{$name}}</a>
                                                </td>
                                            </tr>
                                        </table>
                                        
                                        <p class="description" style="text-align: center; margin-top: 24px;">
如有疑问，请联系客服：<a href="mailto:a@axcc.top" style="color: #0071e3; text-decoration: none;">a@axcc.top</a>
                                        </p>
                                    </td>
                                </tr>
                            </table>
                            
                            <table border="0" cellpadding="0" cellspacing="0" width="100%" class="footer">
                                <tr>
                                    <td align="center" valign="top">
                                        <p class="footer-text">此邮件由系统自动发送，请勿回复</p>
                                        <div class="footer-links">
                                            <a href="{{$url}}/#/subscribe">我的订阅</a>
                                            <span>•</span>
                                            <a href="{{$url}}/#/knowledge">使用教程</a>
                                            <span>•</span>
                                            <a href="{{$url}}">访问网站</a>
                                            <span>•</span>
                                            <a href="mailto:a@axcc.top">联系客服</a>
                                        </div>
                                        <p class="footer-text" style="margin-top: 16px;">&copy; {{$name}}. 保留所有权利。</p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <!--[if (gte mso 9)|(IE)]>
                </td>
                </tr>
                </table>
                <![endif]-->
            </td>
        </tr>
    </table>
</body>
</html>
