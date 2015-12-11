<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Password Reset Email</title>
    <style type="text/css" media="screen">a:link {color:#2A5DB0;text-decoration:underline}</style>
    <style type="text/css" media="only screen and (max-width: 600px)">
        @media only screen and (max-width: 600px) {
            body[class*="background"],
            table[class*="background"],
            td[class*="background"] {
                background: #eeeeee;
            }

            table[class="card"] {
                width: auto;
            }

            td[class="data-heading"],
            td[class="data-value"] {
                display: block;
            }

            td[class="data-heading"] {
                text-align: left;
                padding: 10px 10px 0;
            }

            table[class="wrap"] {
                width: 100%;
            }

            td[class="wrap-cell"] {
                padding-top: 0;
                padding-bottom: 0;
            }
        }
    </style>
</head>

<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0" bgcolor="#333" style="-ms-text-size-adjust:none; -webkit-text-size-adjust:none; background-color:#333; color:#333; font-family:Arial, Helvetica, sans-serif; font-size:15px; line-height:1.5em; margin:0; margin-bottom:0; padding:0">
<table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" style="background-color:#333; margin:0; padding:0; width:100%" bgcolor="#333">
    <tr>
        <td align="left" valign="top" width="100%" style="background-color:#333; border-collapse:collapse; color:#333; font-family:Arial, Helvetica, sans-serif; font-size:15px; line-height:1.5em; text-align:left; vertical-align:top" bgcolor="#333">
            <center>
                <table cellpadding="0" cellspacing="0" width="600" style="width:600px">
                    <tr>
                        <td valign="top" style="border-collapse:collapse; color:#333; font-family:Arial, Helvetica, sans-serif; font-size:15px; line-height:1.5em; padding-bottom:30px; padding-top:30px; text-align:left; vertical-align:top" align="left">
                            <table cellpadding="0" cellspacing="0" style="width:100%" width="100%">
                                <tr>
                                    <td height="60" valign="top" style="background-color:#eee; border-collapse:collapse; color:#fff; font-family:Arial, Helvetica, sans-serif; font-size:24px; line-height:1.5em; padding-left:20px; padding-right:20px; text-align:left; vertical-align:top" bgcolor="#eee" align="left">
                                        <img width="200" height="60" src="http://www.mrpetition.com/images/default/logo.png" alt="Mr. Petition logo" style="-ms-interpolation-mode:bicubic; outline:none; text-decoration:none">
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top" style="background-color:#fff; border-collapse:collapse; color:#333; font-family:Arial, Helvetica, sans-serif; font-size:15px; line-height:1.5em; padding-bottom:34px; padding-left:20px; padding-right:20px; padding-top:30px; text-align:left; vertical-align:top" bgcolor="#fff" align="left">

                                        <table cellpadding="0" cellspacing="0" width="100%" bgcolor="#ffffff">
                                            <tr>
                                                <td valign="top" style="background-color:#fff; border-collapse:collapse; color:#333; font-family:Arial, Helvetica, sans-serif; font-size:15px; line-height:1.5em; padding-bottom:15px; text-align:left; vertical-align:top" bgcolor="#fff" align="left">
                                                    <h1 style="font-size:24px; font-weight:normal; line-height:24px; margin:0; padding:0">Password Change Request</h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td valign="top" style="background-color:#fff; border-collapse:collapse; color:#333; font-family:Arial, Helvetica, sans-serif; font-size:15px; line-height:1.5em; padding-bottom:20px; text-align:left; vertical-align:top" bgcolor="#fff" align="left">
                                                    <b><br>Hey {{ $user-&gt;name }},</b><br><br>
                                                    So you've lost your password? No worries, just reset it now.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="border-collapse:collapse; color:#333; font-family:Arial, Helvetica, sans-serif; font-size:15px; line-height:1.5em; text-align:left; vertical-align:top" align="left" valign="top">
                                                    <table cellspacing="0" cellpadding="0" width="100%" bgcolor="#ffffff">
                                                        <tr>
                                                            <td style="background:#008000; border-collapse:collapse; color:#333; font-family:Arial, Helvetica, sans-serif; font-size:15px; line-height:1.5em; text-align:left; vertical-align:top; width:200px" align="left" valign="top" width="200">
                                                                <div>
                                                                    <!--[if mso]>
                                                                    <v:rect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="#" style="height:40px;v-text-anchor:middle;width:200px;" stroke="f" fillcolor="#008000">
                                                                        <w:anchorlock/>
                                                                        <center>
                                                                    <![endif]-->
                                                                    <a href="%7B%7B%20url('password/reset/'.%24token)%20%7D%7D" style="-webkit-text-size-adjust:none; background-color:#008000; color:#fff; display:inline-block; font-family:sans-serif; font-size:18px; line-height:40px; text-align:center; text-decoration:none; width:200px" bgcolor="#008000" align="center" width="200">Reset Password</a>
                                                                    <!--[if mso]>
                                                                    </center>
                                                                    </v:rect>
                                                                    <![endif]-->
                                                                </div>
                                                            </td>
                                                            <td width="360" style="background-color:#fff; border-collapse:collapse; color:#333; font-family:Arial, Helvetica, sans-serif; font-size:0; line-height:0; text-align:left; vertical-align:top" bgcolor="#fff" align="left" valign="top"> </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="background-color:#fff; border-collapse:collapse; color:#333; font-family:Arial, Helvetica, sans-serif; font-size:15px; line-height:1.5em; padding-top:20px; text-align:left; vertical-align:top" bgcolor="#fff" align="left" valign="top">
                                                    Be Happy,<br>
                                                    Mr. Petition
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top" style="background-color:#eee; border-collapse:collapse; color:#333; font-family:Arial, Helvetica, sans-serif; font-size:13px; line-height:1.5em; padding-bottom:30px; padding-left:20px; padding-right:20px; padding-top:30px; text-align:center; vertical-align:top" bgcolor="#eee" align="center">
                                        Mr. Petition<br>
                                        an Insane Petitioner
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </center>
        </td>
    </tr>
</table>

</body>
</html>