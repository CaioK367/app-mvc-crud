<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="shortcut icon" href="./resources/person.png" type="image/x-icon">
    <title>Clientes</title>
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap');
        body{
            margin: 20px;
            background-color: white;
        }
        *{
            font-family: 'Opens Sans', sans-serif;
        }
        h2{
            font-family: 'Opens Sans', sans-serif;
        }

        .thead{
            background-color: #f7f7f7;
        }
    </style>

</head>


<body>
    
    <div class="container">
        <h2 class="text-center"> Lista de Clientes <i class="bi bi-people-fill"></i></h2>

        <h5 class="text-end">
            <a href="view/page_register.php" class="btn btn-primary btn-xs">
                <i class="bi bi-person-plus-fill"></i>
            </a>
        </h5>

        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="thead">
                    <tr>
                        <th>ID</th>
                        <th>NOME</th>
                        <th>E-MAIL</th>
                        <th>CPF</th>
                        <th>DT NASCIMENTO</th>
                        <th>ENDEREÇO</th>
                        <th>TELEFONE</th>
                        <th colspan="3">AÇÕES</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Bruno Hoske</td>
                        <td>brunohoske@gmail.com</td>
                        <td>333.444.555-06</td>
                        <td>23/02/2007</td>
                        <td>Av. Castelo, 101</td>
                        <td>(31) 91111-2321</td>
                        <td>
                            <form method="POST">
                                <button class="btn btn-warning btn-xs">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                            </form>
                        </td>
                        <td>
                            <form method="POST" onclick="return confirm('Tem certeza que deseja excluir?');">
                                <button class="btn btn-danger btn-xs">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
         </div>
    </div>



    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
</body>
</html>