from django.shortcuts import render, HttpResponse

# Create your views here.
def index(request):
    return render(request, 'index.html')

def urgent(request):
    return render(request,'urgent.html')

def low(request):
    return render(request,'low.html')

def medium(request):
    return render(request,'medium.html')

def show(request):
    return render(request,'show.html')