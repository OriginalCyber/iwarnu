from django.shortcuts import render, HttpResponse

# Create your views here.
def index(request):
    return render(request, 'index.php')

def postit(request):
    return render(request,'postit.js')

####def process(request):
    return render(request,'process.php')

