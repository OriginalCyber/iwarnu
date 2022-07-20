from django.shortcuts import render, HttpResponse

# Create your views here.
def index(request):
    return render(request, 'index.php')

def indexli(request):
    return render(request, 'indexli.php')

def line(request):
    return render(request,'line.php')

###def postit(request):
    return render(request,'postit.js')


