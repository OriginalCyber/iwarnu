from django.shortcuts import render, HttpResponse

# Create your views here.
def index(request):
    return render(request, 'index.html')

def urgent(request):
    return render(request,'urgent Page')

def low(request):
    return render(request,'low Page')

def medium(request):
    return render(request,'medium Page')