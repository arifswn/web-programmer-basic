<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan - Membuat Portofolio Sederhana</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        /* Add a card effect for articles */
        .card {
            padding: 20px;
            margin: 20px;
            height: 30vh;
            background-color: #FFFFFF;
            border: 1px solid black;
            border-radius: 10px 50px;
        }

        .card-form {
            padding: 20px;
            margin: 20px;
            height: fit-content;
            background-color: #FFFFFF;
            border: 1px solid black;
            border-radius: 10px 50px;
        }

        .img {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
            border-radius: 10px 20px;
            background-color: white;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .judul-foto {
            text-align: center;
            font-size: 18px;
            font-weight: 800;
            background-color: #353333;
            color: #FFFFFF;
            border-radius: 10px;
            margin-block: 10px;
        }

        .column {
            margin-left: auto;
            margin-right: auto;
            display: block;
            color: white;
            padding: 1rem;
            height: fit-content;
            align-items: center;
            justify-content: center;
        }

        .cards {
            background-color: #444444;
            padding: 2vh;
            height: fit-content;
            margin: 2vh;
            display: grid;
            gap: 1rem;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        }
    </style>
</head>