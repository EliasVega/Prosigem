<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Convocatoria</title>
</head>
<style>
    body{
        font-family: Arial, sans-serif;
        font-size: 16px;
        padding-top: 2rem;
        padding-bottom: 2rem;
    }

    #convocatoria{
        text-align: left;
    }

    #datos{
        float: left;
        margin-top: 0%;
        margin-left: 2%;
        margin-right: 2%;
        font-size: 20px;
    }

    #titulo{
        font-size: 36px;
    }

    #subtitulo{
        font-size: 24px;
    }

    #logo{
        display: block;
        margin: 0px auto;
        padding-top: 30px;
    }
</style>
<body>
    @foreach ($convocatorias as $con )

    <header>
        <header>
            <div>
                <table id="datos">
                    <thead>
                        <tr>
                            <th id="titulo">Sistema de Gestion de la Seguridad <br> y Salud en el trabajo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th><p id="convocatoria">
                                 <strong id="subtitulo">FORMATO N°:</strong>&nbsp;&nbsp;
                                {{ $con->codigo }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <strong id="subtitulo">VERSION:</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                0{{ $con->version }}<br><br>
                                <strong id="subtitulo">FECHA:</strong>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                {{ $con->fecha }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <strong id="subtitulo">HORA:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                {{ $con->hora }}
                                </p>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id="logo">

               <th rowspan="6"> <img src="{{asset('storage/img/empresa/'.$con->empresa->imagen)}}" id="imagen1" alt="" class="img-responsive" width="125px" height="125px"></th>
            </div>
        </header>
        @endforeach

</body>
</html>




