<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap-grid.min.css" integrity="sha512-Aa+z1qgIG+Hv4H2W3EMl3btnnwTQRA47ZiSecYSkWavHUkBF2aPOIIvlvjLCsjapW1IfsGrEO3FU693ReouVTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Inviters Data</title>
</head>
<body>
    <div class="container">

        @if ($inviters)
        @foreach ($inviters as $item)
        <h2 class="mt-3">{{ $item->name }} Invitations</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Invitee Name</th>
                    <th>Invitee Phone</th>
                    <th>Invitation Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($item->invitees as $per)
                <tr>
                    <td>{{ $per->name }}</td>
                    <td>{{ $per->phone }}</td>
                    <td class='{{$per->status ? "text-success" : "text-danger"}}'>{{ $per->status ? "Accepted" : "Decliend" }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endforeach
        @endif
    </div>
</body>
</html>