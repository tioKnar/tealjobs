
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>{!! $title !!}</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style type="text/css">
    @import url('https://fonts.googleapis.com/css?family=Ubuntu');

    body {
        background-color: #e2e2e2;
        font: 16px 'Ubuntu', 'Helvetica Neue', Helvetica, Arial, sans-serif;
    }

    h1, h2, h3 {
        color: #15cba2;
        font-family: 'Ubuntu', 'Helvetica Neue', Helvetica, Arial, sans-serif;
    }

    h1
    {
        font-size: 1.7rem;
    }

    p {
        font-size: 1.1rem;
        padding: 0 20%;
        text-align: center;
        color:#504A4C;
    }

    @media (max-width: 790px) {
        p {
            padding: 0 5%;
        }
    }


</style>
</head>
<body>
<table align="center" cellpadding="0" cellspacing="0" border="0" style="width: 100%; background-color: #fff; text-align: center;">
    <tr>
        <td style="padding:20px 40px 20px; color:#fff; text-align: center; background-color: #FFFFFF;">
            <table align="center" cellpadding="0" cellspacing="0" border="0" style="width: 50%;">
                <tr>
                    <td colspan="4" style="text-align: center;">
                        <a href="#" title="{{ getenv('APP_NAME') }}" style="color: #fff; text-decoration: underline;">
                            <img src="https://placehold.it/150x150" style="width: 135px; max-width: 135px;" alt="logo">
                        </a>
                    </td>
                </tr>
            </table>
        </td>
    </tr>

    <tr>
        <td style="padding:20px 40px 20px; color:#4e5665; text-align: center;">
            <multiline>
                <p style="text-align: center;">{{'De : ' . $_POST['lastname_contact'] . ' ' . $_POST['name_contact']}} <br> Message :  {{ $_POST['message_contact'] }}</p>
            </multiline>
        </td>
    </tr>

    <tr>
        <td style="padding:20px 40px 20px; color:#fff; text-align: center; background-color: #313E4B;">
            <table align="center" cellpadding="0" cellspacing="0" border="0" style="width: 50%;">
                <tr>
                    <td colspan="4" style="text-align: center;">Envoyé de <a href="#" title="{{ $_POST['email_contact'] }}" style="color: #fff; text-decoration: underline;">{{ $_POST['email_contact'] }}</a></td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>