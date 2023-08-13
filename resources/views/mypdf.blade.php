<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MYPDF</title>
</head>

<body>
    <h1> {{ $title }} </h1>
    <p> {{ $date }} </p>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt nulla dolores, provident fuga repellat hic
        pariatur ipsum possimus quisquam suscipit libero quo reprehenderit numquam incidunt deleniti tempore, asperiores
        necessitatibus quae, similique et obcaecati consequuntur. Eaque, non! Magni nesciunt facere reiciendis aut.
        Alias, nostrum! Non natus, dolorem fugiat earum iste ea?</p>

    <table border="1px">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th> {{ $user->id }} </th>
                    <td> {{ $user->name }} </td>
                    <td> {{ $user->email }} </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
