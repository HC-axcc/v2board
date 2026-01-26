<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="date=no">
    <meta name="format-detection" content="address=no">
    <meta name="x-apple-disable-message-reformatting">
    <title>[邮件标题]</title>
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
            background-color: #000000;
            padding: 40px 30px;
            text-align: center;
        }
        
        .header-blue { background-color: #0071e3; }
        .header-green { background-color: #30d158; }
        .header-orange { background-color: #ff9500; }
        .header-red { background-color: #ff3b30; }
        .header-purple { background-color: #5856d6; }
        
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
        
        .title-small {
            font-size: 28px;
            font-weight: 600;
            color: #1d1d1f;
            margin-bottom: 16px;
            letter-spacing: 0.009em;
            line-height: 1.14286;
        }
        
        /* 描述文本 */
        .description {
            font-size: 17px;
            color: #86868b;
            margin-bottom: 16px;
            line-height: 1.47059;
            font-weight: 400;
        }
        
        /* 按钮样式 */
        .button {
            display: inline-block;
            background-color: #0071e3;
            color: #ffffff;
            text-decoration: none;
            font-size: 17px;
            font-weight: 400;
            padding: 12px 24px;
            border-radius: 980px;
            text-align: center;
            transition: background-color 0.3s ease;
            margin: 20px 0;
        }
        
        .button:hover {
            background-color: #0077ed;
        }
        
        .button-black {
            background-color: #000000;
        }
        
        .button-black:hover {
            background-color: #424245;
        }
        
        .button-white {
            background-color: #ffffff;
            color: #0071e3;
            border: 1px solid #d2d2d7;
        }
        
        .button-white:hover {
            background-color: #f2f2f7;
        }
        
        /* 信息框样式 */
        .info-box {
            background-color: #f2f2f7;
            border-radius: 12px;
            padding: 16px;
            margin: 16px 0;
        }
        
        .info-box-blue {
            background-color: rgba(0, 113, 227, 0.1);
            border-left: 4px solid #0071e3;
        }
        
        .info-box-green {
            background-color: rgba(48, 209, 88, 0.1);
            border-left: 4px solid #30d158;
        }
        
        .info-box-orange {
            background-color: rgba(255, 149, 0, 0.1);
            border-left: 4px solid #ff9500;
        }
        
        .info-box-red {
            background-color: rgba(255, 59, 48, 0.1);
            border-left: 4px solid #ff3b30;
        }
        
        /* 链接容器 */
        .link-container {
            background-color: #f2f2f7;
            border-radius: 12px;
            padding: 12px;
            margin: 16px 0;
            word-break: break-all;
        }
        
        .link-label {
            font-size: 14px;
            color: #86868b;
            margin-bottom: 8px;
            font-weight: 500;
        }
        
        .link {
            font-size: 14px;
            color: #0071e3;
            text-decoration: none;
            font-weight: 500;
        }
        
        /* 验证码样式 */
        .code-container {
            background-color: #f2f2f7;
            border-radius: 12px;
            padding: 20px;
            margin: 16px 0;
            text-align: center;
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
        
        /* 进度条样式 */
        .progress-container {
            background-color: #e5e5e7;
            border-radius: 100px;
            height: 8px;
            margin: 16px 0;
            overflow: hidden;
        }
        
        .progress-bar {
            background-color: #0071e3;
            height: 100%;
            border-radius: 100px;
        }
        
        .progress-bar-green { background-color: #30d158; }
        .progress-bar-orange { background-color: #ff9500; }
        .progress-bar-red { background-color: #ff3b30; }
        
        /* 百分比显示 */
        .percentage {
            font-size: 48px;
            font-weight: 700;
            color: #1d1d1f;
            margin: 12px 0;
            letter-spacing: 0.004em;
            line-height: 1.08349;
        }
        
        .percentage-label {
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
            color: #0071e3;
            font-weight: bold;
        }
        
        /* 徽章样式 */
        .badge {
            display: inline-block;
            background-color: rgba(0, 113, 227, 0.1);
            color: #0071e3;
            font-size: 12px;
            font-weight: 600;
            padding: 4px 12px;
            border-radius: 100px;
            text-transform: uppercase;
            letter-spacing: 0.04em;
            margin-bottom: 12px;
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
            
            .title-small {
                font-size: 24px;
            }
            
            .logo {
                font-size: 24px;
            }
            
            .code {
                font-size: 28px;
                letter-spacing: 4px;
            }
            
            .percentage {
                font-size: 36px;
            }
            
            .button {
                width: 100%;
                max-width: 300px;
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
                            <!-- 邮件内容将在这里 -->
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