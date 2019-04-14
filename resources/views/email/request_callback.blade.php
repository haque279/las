<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LoananAlysisSolutions</title>
</head>
<body>
<h2 style="background: #333; color: #fff; margin: 0; padding: 10px">Request Callback from LoananAlysisSolutions Website</h2>
<div class="" style="background: #ddd">
    <table>
        <tr>
            <td style="padding: 7px">Name: </td>
            <td style="padding: 7px">{{ $data->name }}</td>
        </tr>
        <tr>
            <td style="padding: 7px">You are: </td>
            <td style="padding: 7px">{{ $data->you_are }}</td>
        </tr>
        <tr>
            <td style="padding: 7px">Address: </td>
            <td style="padding: 7px">{{ $data->address }}</td>
        </tr>
        <tr>
            <td style="padding: 7px">Status: </td>
            <td style="padding: 7px">{{ $data->status }}</td>
        </tr>
        <tr>
            <td style="padding: 7px">Telephone: </td>
            <td style="padding: 7px">{{ $data->telephone }}</td>
        </tr>
        <tr>
            <td style="padding: 7px">Email: </td>
            <td style="padding: 7px">{{ $data->email }}</td>
        </tr>
        <tr>
            <td style="padding: 7px">Bank: </td>
            <td style="padding: 7px">{{ $data->bank }}</td>
        </tr>
        <tr>
            <td style="padding: 7px">Type of Loan: </td>
            <td style="padding: 7px">{{ $data->type_of_loan }}</td>
        </tr>
        <tr>
            <td style="padding: 7px">Loan Amount: </td>
            <td style="padding: 7px">{{ $data->loan_amount }}</td>
        </tr>
        <tr>
            <td style="padding: 7px">Year Taken Out: </td>
            <td style="padding: 7px">{{ $data->year_taken_out }}</td>
        </tr>
        <tr>
            <td style="padding: 7px">Message: </td>
            <td style="padding: 7px">{{ $data->message }}</td>
        </tr>
    </table>
    <p style="padding: 7px">Date: {{ $data->date }}</p>
</div>

</body>
</html>