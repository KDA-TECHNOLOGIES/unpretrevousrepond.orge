<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <style type="text/css">
        @media only screen and (max-width: 550px), screen and (max-device-width: 550px) {
            body[yahoo] .buttonwrapper { background-color: transparent !important; }
            body[yahoo] .button { padding: 0 !important; }
            body[yahoo] .button a { background-color: #000033; padding: 15px 25px !important; }
        }

        @media only screen and (min-device-width: 601px) {
            .content { width: 600px !important; }
            .col387 { width: 387px !important; }
        }
    </style>
</head>
<body bgcolor="#3c3e4f" style="margin: 0; padding: 0;" yahoo="fix">
    <table width="100%" style="background: #9ae39a">
        <!--[if (gte mso 9)|(IE)]>
        <table width="700" align="center" cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td>
        <![endif]-->
        <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; width: 100%; max-width: 700px;" class="content">
            <tr>
                <td style="padding: 15px 10px 15px 10px;">
                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                        <tr>
                            <td align="center" style="color: #aaaaaa; font-family: Arial, sans-serif; font-size: 12px;">
                                <a href="https://upretrevousrepond.org" style="color: #ffffff;">unpretrevousrepond.org</a>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td align="center" bgcolor="#000033" style="padding: 20px 20px 20px 20px; color: #ffffff; font-family: Arial, sans-serif; font-size: 36px; font-weight: bold;">
                    <img src="{{asset('assets/img/brand/logo2.jpg')}}" alt="Un prêtre vous répond."  width="140px" height="80px" style="border-radius:5px" />
                </td>
            </tr>
            <tr>
                <td align="center" bgcolor="#ffffff" style="padding: 40px 20px 40px 20px; font-family: Arial, sans-serif; font-size: 20px; line-height: 1.8em; border-bottom: 1px solid #f6f6f6;">
                    <b>Bonjour {{$user->name}}</b><br/>
                    Vous recevez cet e-mail car nous avons reçu de vous une demande de réinitialisation de mot de passe pour votre compte.
                    Veuillez cliquer sur le bouton ci-dessous pour finaliser la réinitialisation.
                    <table>
                        <tr>
                            <td style="color: red; font-style: italic; font-size: 14px;">
                                <u>NB</u> : Ce lien de réinitialisation de mot de passe expirera dans 60 minutes.
                            </td>
                        </tr>
                    </table>
                    <table bgcolor="#000033" border="0" cellspacing="0" cellpadding="0" class="buttonwrapper" style="margin-top: 2em">
                        <tr>
                            <td align="center" height="50" style=" padding: 0 25px 0 25px; font-family: Arial, sans-serif; font-size: 16px; font-weight: bold;" class="button" >
                                <a href="{{$url}}" style="color: #ffffff; text-align: center; text-decoration: none;">Réinitialiser votre mot de passe</a>
                            </td>
                        </tr>
                    </table>
                    Si vous n'avez pas demandé de réinitialisation de mot de passe, aucune autre action n'est requise
                </td>
            </tr>
            <tr>
                <td align="" bgcolor="#f9f9f9" style="padding: 30px 20px 30px 20px; font-family: Arial, sans-serif; font-style: italic; line-height: 1.8em">
                    Si vous rencontrez des difficultés en cliquant sur le bouton <strong> &laquo; Réinitialiser votre mot de passe &raquo;</strong>,
                    copiez et collez l'URL suivant dans votre navigateur Web : <a href="{{$url}}">{{$url}}</a>
                </td>
            </tr>
            <tr>
                <td align="center" bgcolor="#000033" style="padding: 15px 10px 15px 10px; color: #fff; font-family: Arial, sans-serif; font-size: 12px; line-height: 25px;">
                    <b>© 2021 <a href="https://unpretrevousrepond.org" style="color: #fff0ff">unpretrevousrepond.org</a></b><br/>Tous droits réservés
                </td>
            </tr>
            <tr>
                <td style="padding: 15px 10px 15px 10px;">
                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                        <tr>
                            <td align="center" width="100%" style="color: #999999; font-family: Arial, sans-serif; font-size: 12px;">

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
    </table>
</body>
</html>
