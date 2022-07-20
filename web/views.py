from django.shortcuts import render, HttpResponse

# Create your views here.
def index(request):
    return render(request, 'index.php')

def indexli(request):
    return render(request, 'indexli.php')

def linenotify(request):
    return render(request,'linenotify.php')

###def postit(request):
    return render(request,'postit.js')


