from django.shortcuts import render
from django.http import HttpResponse
import datetime

def page5(request):
    data_atual = datetime.date.today()

    html = f'''
    <html>
        <body>
            <h1>Nome: Bryan Higino Verneck</h1>
            <h1>Data: {data_atual} </h1>
        </body>
    </html>
    '''
    return HttpResponse(html)
