<?php
/**
 * @author Marco Nurmberg
 * @date 21/06/2021
 */

$dataAgora = date(DATE_RFC822);
$nomeUsuario = "Bryan Higino Verneck";

echo "Aluno: {$nomeUsuario} <br>";
echo "Data e hora: {$dataAgora} <br>";

// from django.shortcuts import render
// from django.http import HttpResponse
// import datetime
//
// def page5(request):
//     data_atual = datetime.date.today()
//
//     html = f'''
//     <html>
//         <body>
//             <h1>Nome: Bryan Higino Verneck</h1>
//             <h1> Data: {data_atual} </h1>
//         </body>
//     </html>
//     '''
//     return HttpResponse(html)