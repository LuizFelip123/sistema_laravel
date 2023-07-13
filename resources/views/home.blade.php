<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <nav class="nav  bg-info  p-2">
        <a class="nav-link text-white " href="/">Listar</a>
        <a href="/adicionar" class="nav-link text-white" >Adicionar</a>
      </nav>

      
 <div class="content  pt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 table-responsive">
                <table class="table">
                    <thead class="thead-dark"> 
                      <tr>
                        <th >ID</th>
                        <th >listar</th>
                        <th >Marca</th>
                        <th >Quantidade</th>
                        <th>Preço</th>
                        <th>Ações</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>12,50</td>
                        <td  class="d-flex"><a class="pr-2" href="" ><button type="button" class="btn btn-primary  text-white ">Editar</button></a>  <a href="" ><button type="button" class="btn  btn-danger text-white ">Excluir</button></a></td>
                      </tr>
                      <tr>
                        <th >2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>12,50</td>

                        <td  class="d-flex"><a class="pr-2"  href="" ><button type="button" class="btn btn-primary  text-white ">Editar</button></a> <a href="" ><button type="button" class="btn  btn-danger text-white ">Excluir</button></a></td>

                      </tr>
                      <tr>
                        <th >3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        <td>12,50</td>

                        <td class="d-flex"><a class="pr-2"  href="" ><button type="button" class="btn btn-primary  text-white ">Editar</button></a> <a href="" ><button type="button" class="btn  btn-danger text-white ">Excluir</button></a></td>
                      </tr>
                    </tbody>
                  </table> 
            </div>
            
        </div>
    </div>
   
 </div>  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>