<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="date=no">
    <meta name="format-detection" content="address=no">
    <meta name="x-apple-disable-message-reformatting">
    <title>到期提示</title>
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
            background-color: #ff9500;
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
        
        
        
        /* 警告容器 */
        .warning-container {
            background-color: rgba(255, 149, 0, 0.1);
            border-radius: 12px;
            padding: 24px;
            margin: 16px 0;
            text-align: center;
            border-left: 4px solid #ff9500;
        }
        
        .warning-icon {
            font-size: 48px;
            margin-bottom: 16px;
            display: block;
        }
        
        .warning-title {
            font-size: 20px;
            font-weight: 600;
            color: #ff9500;
            margin-bottom: 8px;
            letter-spacing: 0.009em;
        }
        
        .warning-text {
            font-size: 16px;
            color: #1d1d1f;
            line-height: 1.5;
        }
        
        /* 倒计时样式 */
        .countdown {
            font-size: 48px;
            font-weight: 700;
            color: #ff3b30;
            margin: 16px 0;
            letter-spacing: 0.004em;
            line-height: 1.08349;
        }
        
        .countdown-label {
            font-size: 14px;
            color: #86868b;
            text-transform: uppercase;
            letter-spacing: 0.04em;
        }
        
        /* 列表样式 */
        .list {
            background-color: #f2f2f7;
            border-radius: 12px;
            padding: 16px;
            margin: 16px 0;
        }
        
        .list-title {
            font-size: 17px;
            font-weight: 600;
            color: #1d1d1f;
            margin-bottom: 12px;
            letter-spacing: 0.009em;
        }
        
        .list-item {
            font-size: 15px;
            color: #86868b;
            margin-bottom: 10px;
            padding-left: 20px;
            position: relative;
            line-height: 1.47059;
        }
        
        .list-item::before {
            content: "•";
            position: absolute;
            left: 0;
            color: #34c759;
            font-weight: bold;
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
            color: #ff9500;
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
            
            .countdown {
                font-size: 36px;
            }
            
            .warning-container {
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
            
            .countdown {
                font-size: 32px;
            }
            
            .warning-container {
                padding: 16px 12px;
            }
            
            .list {
                padding: 14px 12px;
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
            
            .countdown {
                font-size: 28px;
            }
            
            .warning-container {
                padding: 14px 10px;
            }
            
            .list {
                padding: 12px 10px;
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
                                        <div class="subtitle">到期提醒</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" valign="top" class="content">
                                        <h1 class="title">订阅即将到期</h1>
                                        <p class="description">
                                            您的订阅套餐将在短时间内到期，为了确保服务的连续性，请及时续费。
                                        </p>
                                        
                                        <div class="warning-container">
                                            <span class="warning-icon">⚠️</span>
                                            <div class="warning-title">重要提醒</div>
                                            <div class="warning-text">您的订阅套餐将于</div>
                                            <div class="countdown">24 小时</div>
                                            <div class="countdown-label">后到期</div>
                                        </div>

                                        <table border="0" cellspacing="0" cellpadding="0" align="center" style="width: 100%; max-width: 280px;">
                                            <tr>
                                                <td align="center" style="border-radius: 980px;" bgcolor="#ff9500">
                                                    <a href="{{$url}}/#/subscribe" target="_blank" style="font-size: 16px; font-family: -apple-system, BlinkMacSystemFont, 'SF Pro Text', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; border-radius: 980px; padding: 10px 20px; display: inline-block; font-weight: 400; width: 100%;">立即续费</a>
                                                </td>
                                            </tr>
                                        </table>
                                        
                                        <p class="description" style="text-align: center; margin-top: 24px;">
                                            如有任何疑问，请联系客服团队获取帮助。
                                        </p>
                                        <p class="description" style="text-align: center; margin-top: 16px;">
客服邮箱：<a href="mailto:a@axcc.top" style="color: #ff9500; text-decoration: none;">a@axcc.top</a>
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
